<?php

namespace App\Http\Controllers\Api;

use App\Services\Output;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 注册
    public function register(Request $request)
    {
        return Output::success('注册成功!', ['phone' => 1, 'password' => 2]);
    }
}