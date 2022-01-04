<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Form | Online Shop Bima'
        ];
        return view('login/index', $data);
    }
}
