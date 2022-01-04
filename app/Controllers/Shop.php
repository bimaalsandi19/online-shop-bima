<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function detail()
    {
        $data = [
            'title' => 'Detail Barang | Online Shop Bima '
        ];
        return view('shop/detail_view', $data);
    }
}
