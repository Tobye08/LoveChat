<?php

namespace App\Http\Controllers\Admin;

use App\Services\Output;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 注册
    public function index(Request $request)
    {
    	phpinfo();
        // return view('admin.index.index');
    }
}