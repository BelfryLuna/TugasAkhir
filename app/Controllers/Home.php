<?php

namespace App\Controllers;

use App\Models\HasilModel;
use App\Models\PenyakitModel;

class Home extends BaseController
{
    protected $hasilMod;
    protected $penyakitMod;

    public function __construct()
    {
        $this->hasilMod = new HasilModel();
        $this->penyakitMod = new PenyakitModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sahabat Lambung',
            'diag' => $this->hasilMod->getJumDiag(),
            'gas' => $this->hasilMod->getJumPeny('P01'),
            'ger' => $this->hasilMod->getJumPeny('P02'),
            'disp' => $this->hasilMod->getJumPeny('P03'),
        ];

        return view('viewuser/index', $data);
    }
    
}