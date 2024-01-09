<?php

namespace App\Controllers;

use App\Models\HasilModel;
use App\Models\PenyakitModel;

class Pages extends BaseController
{
    protected $hasilMod;
    protected $RiwayatMod;
    protected $penyakitMod;

    public function __construct()
    {
        $this->hasilMod = new HasilModel();
        $this->penyakitMod = new PenyakitModel();
        $this->RiwayatMod = new HasilModel();

    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'diag' => $this->hasilMod->getJumDiag(),
            'gas' => $this->hasilMod->getJumPeny('P01'),
            'ger' => $this->hasilMod->getJumPeny('P02'),
            'disp' => $this->hasilMod->getJumPeny('P03'),
            'riwayat' => $this->RiwayatMod->getRiwayat()
        ];

        return view('dashboard/home', $data);   
    }
}

    