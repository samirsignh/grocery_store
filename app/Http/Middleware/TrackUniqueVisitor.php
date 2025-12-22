<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use App\Models\UniqueVisitor;
use Carbon\Carbon;

class TrackUniqueVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // cookie name
        $cookieName = 'site_visitor';

        // if cookie not present, create a new visitor record
        if (! $request->cookie($cookieName)) {
            // create a stable-ish hash for the visitor (do not store raw identifiers)
            $hash = hash('sha256', (string) Str::uuid() . '|' . $request->ip() . '|' . Str::random(8));

            // Use firstOrCreate to avoid duplicates (DB unique constraint ensures safety)
            // we store some non-identifying info (IP optionally) — redact or hash IP if privacy required
            try {
                UniqueVisitor::firstOrCreate(
                    ['visitor_hash' => $hash],
                    [
                        'ip' => $request->ip(),
                        'user_agent' => substr($request->userAgent() ?? '', 0, 1000),
                        'last_seen' => Carbon::now()
                    ]
                );
            } catch (\Exception $e) {
                // graceful fallback: if insertion fails (race condition) try to continue
            }

            // set cookie for one year (cookie minutes: 60 * 24 * 365)
            Cookie::queue($cookieName, $hash, 60 * 24 * 365);
            
            // clear cached count so next request fetches fresh total (small overhead)
            Cache::forget('unique_visitors_count');
        } else {
            // optional: update last_seen if you want to refresh record when cookie exists
            $hash = $request->cookie($cookieName);
            UniqueVisitor::where('visitor_hash', $hash)->update(['last_seen' => Carbon::now()]);
        }

        return $next($request);
    }
}
