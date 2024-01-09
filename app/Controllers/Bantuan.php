<?php

namespace App\Controllers;

class Bantuan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sahabat Lambung | Bantuan'
        ];

        return view('viewuser/bantuan', $data);
    }
}
