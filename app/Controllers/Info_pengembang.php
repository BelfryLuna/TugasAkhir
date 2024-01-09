<?php

namespace App\Controllers;
use App\Models\PengembangModel;

class Info_pengembang extends BaseController
{
    protected $PengembangModel;

    public function __construct()
    {
        $this->PengembangModel = new PengembangModel();
    }

    public function index()
    {
        $Pengembang = $this->PengembangModel->findAll();

        $data = [
            'title' => 'Sahabat Lambung | Info Pengembang',
            'pengembang' => $Pengembang
        ];
        return view('viewuser/info_pengembang', $data);
    }
}
