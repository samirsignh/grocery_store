<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use Illuminate\Support\Facades\Auth;

class RoleMasterController extends Controller
{
    public function role_list()
    {
        $role = RoleModel::get_role_list();
        return view('master.role_list', ['roles' => $role]);
    }

    public function store_role_details(Request $request)
    {
        $request->validate([
            'role_name' => "required|string",
        ]);

        try {
            $data = [
                'role_type' => $request->input('role_name',true),
                'cBy' => Auth::User()->id,
                'created_at' => now(),
            ];
            RoleModel::insert_roles($data);
            return redirect()->route('role_list')->with('success', 'Role added Successfully');
        } catch (\Exception $e) {
            return redirect()->route('role_list')->with('error', $e->getMessage());
        }
    }
}
