<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function roleList()
    {
        return view('admin.role-permission.role-list');
    }
    public function permissionList()
    {
        return view('admin.role-permission.permission-list');
    }
}
