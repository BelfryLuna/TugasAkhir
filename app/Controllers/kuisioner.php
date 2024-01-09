<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KuisionerModel;

class kuisioner extends BaseController
{
    protected $UatMod;

    public function __construct()
    {
        $this->UatMod = new KuisionerModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Kuisioner UAT',
            'datakuis' => $this->UatMod->findAll(),
            'pertanyaan' => $this->UatMod->getPertanyaan()
        ];
        return view('uat/kuisioneruat', $data);
    }

}