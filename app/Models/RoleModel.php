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
}
