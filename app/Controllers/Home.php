<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Utama | Online Shop Bima'
        ];
        return view('home', $data);
    }

    public function shop()
    {
        $data = [
            'title' => 'Shop | Online Shop Bima',

        ];
        return view('shop_view', $data);
    }
}
