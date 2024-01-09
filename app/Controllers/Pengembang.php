<?php

namespace App\Controllers;
use App\Models\PengembangModel;

class Pengembang extends BaseController
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
            'title' => 'Dashboard | Pengembang',
            'pengembang' => $Pengembang
        ];

        return view('pengembang/daftarpengembang', $data);
    }

    public function tambahpengembang()
    {
        $data = [
            'title' => 'Dashboard | Tambah Pengembang'
        ];

        return view('/pengembang/tambahpengembang', $data);
    }

    public function savepengembang()
    {
        if(!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[pengembang.nama]',
                'errors' => [
                    'required' => 'Nama harus di isi!',
                    'is_unique' => 'Nama Pengembang sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', $this->validator->listErrors());
            session()->setFlashdata('error', 'Data pengembang gagal ditambahkan!');
            return redirect()->to('/pengembang/tambahpengembang')->withInput()->with('errors', $this->validator->getErrors());
        }
        

        $this->PengembangModel->save ([
            // field yang diisi
            'nama' => $this->request->getVar('nama'),
            'status' => $this->request->getVar('status'),
            'foto' => $this->request->getVar('foto')
        ]);
        session()->setFlashdata("success","Pengembang berhasil ditambahkan");
        return redirect()->to('/pengembang');
    }

    public function hapuspengembang($id) 
    {
        $this->PengembangModel->delete($id);
        session()->setFlashdata("success","Pengembang berhasil dihapus");
        return redirect()->to('/pengembang');
    }
}
