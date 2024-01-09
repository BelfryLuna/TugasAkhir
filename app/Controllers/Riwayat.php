<?php

namespace App\Controllers;
use App\Models\HasilModel;
use App\Models\PenyakitModel;
use App\Models\GejalaModel;

class Riwayat extends BaseController
{
    protected $GejalaMod;
    protected $HasilMod;
    protected $PenyakitMod;
    protected $DiagMod;

    public function __construct()
    {
        $this->GejalaMod = new GejalaModel();
        $this->HasilMod = new HasilModel();
        $this->PenyakitMod = new PenyakitModel();
    }
    
    public function index()
    {

        $data = [
            'title' => 'Sahabat Lambung | Riwayat Pengguna',
            'riwayat' => $this->HasilMod->getRiwayat()
        ];

        return view('viewuser/riwayat', $data);
    }

    public function detail($idip)
    {
        // variabel yang digunakan untuk menghubungkan controller/method dengan database/model
        $serip = $this->HasilMod->seripenyakit($idip);
        $allG = $this->GejalaMod->getGejala();
        $gejala = unserialize($serip['gejala']);
        $allP = $this->PenyakitMod->getAllPenyakit();
        $arpenyakit = unserialize($serip['penyakit']);

        // perulangan untuk menamplkan nama dan deskripsi gejala
        foreach ($allG as $ag) {
            $namaG[$ag['kode_gejala']] = $ag['deskripsi_gejala'];
        }

        // perulangan untuk menampilkan jumlah gejala yang telah dipilih
        foreach ($gejala as $key) {
            $dataGejala[] = [
                'kode_gejala' => $key,
                'deskripsi_gejala' => $namaG[$key],
            ];
        }

        // perulangan untuk menamplkan nama dan deskripsi gejala
        foreach ($allP as $ap) {
            $arpykt[$ap['kode_penyakit']] = $ap['nama_penyakit'];
        }

        // perulangan untuk menampilkan peyakit lain
        foreach ($arpenyakit as $key => $value) {
            $dataPenyakit[] = [
                'kode_penyakit' => $key,
                'nama_penyakit' => $arpykt[$key],
                'nilai' => $value
            ];
        }

        $biodata = $this->HasilMod->getDetailuser($idip);

        $data = [
            'title' => 'Sahabat Lambung | Detail Riwayat Diagnosa',
            'hasilD' => $dataGejala,
            'hasilP' => $this->HasilMod->getHasil($idip),
            'pLain' => $dataPenyakit,
            'maxN' => $dataPenyakit[0]['kode_penyakit'],
            'bio' => $biodata
        ];

        return view('/viewuser/detail_riwayat', $data);
    }
}
