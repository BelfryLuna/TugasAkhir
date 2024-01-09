<?php

namespace App\Controllers;

use App\Models\HasilModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Riwayatdiagnose extends BaseController
{
    protected $PenyakitMod;
    protected $GejalaMod;
    protected $RiwayatMod;

    public function __construct()
    {
        $this->PenyakitMod = new PenyakitModel();
        $this->GejalaMod = new GejalaModel();
        $this->RiwayatMod = new HasilModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Riwayat User',
            'riwayat' => $this->RiwayatMod->getRiwayat(),
            'allG' => $this->GejalaMod->getGejala(),
            'allP' => $this->PenyakitMod->getAllPenyakit()
        ];
        return view('riwayatd/riwayatdiagnosa', $data);
    }

    public function hapusdiag($id)
    {
        $this->RiwayatMod->deldiag($id);
        session()->setFlashdata("success","Diagnosa berhasil dihapus");
        return redirect()->to('/riwayatdiagnose');
    }
}
