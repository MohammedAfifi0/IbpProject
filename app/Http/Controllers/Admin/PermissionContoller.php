<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionContoller extends Controller
{
    public function Index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
}
