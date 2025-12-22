<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = 'tbl_role_master';

    protected $fillable = [
        'role_type',
        'cBy',
        'dBy',
    ];

    public static function get_role_list()
    {
        return self::where(['status' => 1])->get();
    }

    public static function insert_roles($data)
    {
        return self::insert($data);
    }
}
