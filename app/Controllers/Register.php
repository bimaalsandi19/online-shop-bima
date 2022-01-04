<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register Form | Online Shop Bima'
        ];
        return view('register/index', $data);
    }
}
