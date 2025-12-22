<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueVisitor extends Model
{
    protected $fillable = ['visitor_hash', 'ip', 'user_agent', 'last_seen'];
    public $timestamps = true;
}
