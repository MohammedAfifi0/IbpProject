<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexContoller extends Controller
{
    public function Index()
    {
        return view('admin.index');
    }
}
