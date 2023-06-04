<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleContoller extends Controller
{
    public function Index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }
}
