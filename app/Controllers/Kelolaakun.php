<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Kelolaakun extends BaseController
{

    protected $AkunModel;

    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    // method untuk menampilkan daftar akun yang ada dalam database
    public function index()
    {
        // $user =$this->AkunModel->findAll();
        $Akun = $this->AkunModel->getUser();


        $data = [
            'title' => 'Dashboard | Daftar Akun',
            'akun' => $Akun,
            // 'user' => $user

            // 'akun' => $Akun
        ];
        return view('kelolaakun/daftarakun', $data);
    }

    // methode untuk menampilkan halaman view menambahkan akun yang terintegrasi dengan library myth auth
    public function addakun()
    {
        $data = [
            'title' => 'Dashboard | Tambah Akun'
        ];
        return view('/kelolaakun/tambahakun', $data);
    }

    public function delakun($id)
    {
        $users = $this->AkunModel->find($id);

        // cek jika file gambarnya default
        if ($users['foto'] != 'defaultUser.jpg') {
            // hapus gambar
            unlink('images/' . $users['foto']);
        }
        
        $this->AkunModel->delakun($id);
        session()->setFlashdata("success","Akun berhasil dihapus");
        return redirect()->to('/kelolaakun');
    }

}
