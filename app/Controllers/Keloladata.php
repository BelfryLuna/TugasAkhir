<?php

namespace App\Controllers;
// tambahin namespace untuk koneksi dengan models
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\BaspengetahuanModel;

class Keloladata extends BaseController
{
    // untuk tidak ribet ketika menambahkan fitur tambah(creat), edit dll
    protected $PenyakitModel;
    protected $GejalaModel;
    protected $BaspengetahuanModel;
    public function __construct()
    {
        $this->GejalaModel = new GejalaModel();
        $this->PenyakitModel = new PenyakitModel();
        $this->BaspengetahuanModel = new BaspengetahuanModel();
    }



    public function index()
    {
        // Menyambungkan tabel gejala dari database dengan models (recommended)
        $Gejala = $this->GejalaModel->findAll();

        // manggil sessions untuk validasi dari save
        // session();

        // ngasi nama title pada tab
        $data = [
            'title' => 'Dashboard | Kelola Gejala',
            // untuk mengganti variabel
            'gejala' => $Gejala,
            'validation' => \Config\Services::validation()
        ];

        // menyambungkan tabel gejala dari database dengan models (cara ribet)
        // $GejalaModel = new \App\Models\GejalaModel();


        return view('kelbaspengetahuan/kelolagejala', $data);
    }

    // public function tambahgejala()
    // {

    // }

    // method savegejala digunakan untuk mengolala data dari halaman kelola gejala untuk disimpen dan diinsert di tabel
    public function savegejala()
    {
        // untuk menambahkan validasi pada form
        // validasi input
        if (!$this->validate([
            // memberikan rules untuk tiap inputan pada form berdasarkan name pada view
            'deskripsi_gejala' => [
                'rules' => 'required|is_unique[gejala.deskripsi_gejala]',
                'errors' => [
                    'required' => 'Deskripsi gejala harus diisi.',
                    'is_unique' => 'Deskripsi gejala sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('deskgejalasalah', true);
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/keloladata/gejala')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->GejalaModel->save([
            // field yang diisi
            'kode_gejala' => $this->GejalaModel->autokodegejala(),
            'deskripsi_gejala' => $this->request->getVar('deskripsi_gejala')
        ]);

        session()->setFlashdata("success","Gejala berhasil ditambahkan");
        return redirect()->to('/keloladata/gejala');
    }

    public function delgejala($id)
    {
        $this->GejalaModel->hapusgejala($id);
        session()->setFlashdata("success","Gejala berhasil dihapus");
        return redirect()->to('/keloladata/gejala');
    }

    public function upgejala($id)
    {
        // untuk menambahkan validasi pada form
        // validasi input
        if (!$this->validate([
            // memberikan rules untuk tiap inputan pada form berdasarkan name pada view
            'deskripsi_gejala' => [
                'rules' => 'required|is_unique[gejala.deskripsi_gejala]',
                'errors' => [
                    'required' => 'Deskripsi gejala harus diisi.',
                    'is_unique' => 'Deskripsi gejala sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('error', 'Data gejala gagal diubah!');
            return redirect()->to('/keloladata/gejala')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->GejalaModel->updategejala([
            'deskripsi_gejala' => $this->request->getVar('deskripsi_gejala')
        ], $id);
        session()->setFlashdata("success","Gejala berhasil diubah");

        return redirect()->to('/keloladata/gejala');
    }


    // method untuk menghapus data gejala baik pada view dan di database 
    // public function deletegejala($kode_gejala)
    // {
    //     $this->GejalaModel->delete($kode_gejala);
    //     return redirect()->to('/keloladata');
    // }





    public function penyakit()
    {
        // Menyambungkan tabel gejala dari database dengan models (recommended)

        $Penyakit = $this->PenyakitModel->findAll();

        $data = [
            'title' => 'Dashboard | Kelola Penyakit',
            'penyakit' => $Penyakit
        ];


        return view('kelbaspengetahuan/kelolapenyakit', $data);
    }

    public function tambpenyakit()
    {
        $data = [
            'title' => 'Dashboard | Tambah Penyakit',
            'validation' => \Config\Services::validation()
        ];
        return view('kelbaspengetahuan/tambahpenyakit', $data);
    }

    public function savepenyakit()
    {

        if (!$this->validate([
            'nama_penyakit' => [
                'rules' => 'required|is_unique[penyakit.nama_penyakit]',
                'errors' => [
                    'required' => 'Nama Penyakit Harus Diisi',
                    'is_unique' => 'Nama Penyakit SUdah Ada'
                ]
            ],

            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,5000]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar2' => [
                'rules' => 'uploaded[gambar2]|max_size[gambar2,5000]|is_image[gambar2]|mime_in[gambar2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat 2',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar3' => [
                'rules' => 'uploaded[gambar3]|max_size[gambar3,5000]|is_image[gambar3]|mime_in[gambar3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat 3',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar4' => [
                'rules' => 'uploaded[gambar4]|max_size[gambar4,5000]|is_image[gambar4]|mime_in[gambar4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat 4',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar5' => [
                'rules' => 'uploaded[gambar5]|max_size[gambar5,5000]|is_image[gambar5]|mime_in[gambar5,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat 5',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar6' => [
                'rules' => 'uploaded[gambar6]|max_size[gambar6,5000]|is_image[gambar6]|mime_in[gambar6,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun untuk jenis obat 6',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

           
        ])) {
            session()->setFlashdata('gagal', $this->validator->listErrors());
            session()->setFlashdata('error', 'Data penyakit baru gagal ditambahkan!');
            return redirect()->to('/keloladata/tambpenyakit')->withInput()->with('errors', $this->validator->getErrors());
            // return redirect()->to('/keloladata/tambpenyakit')->withInput();
        }

        // untuk mengambil file gambar
        $filegambarpenyakit = $this->request->getFile('gambar');
        // untuk mengecek apakah tidak ada gambar yang diupload

        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit = $filegambarpenyakit->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit->move('images');


        // untuk mengambil file gambar
        $filegambarpenyakit2 = $this->request->getFile('gambar2');
        // untuk mengecek apakah tidak ada gambar yang diupload

        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit2 = $filegambarpenyakit2->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit2->move('images');


        // untuk mengambil file gambar
        $filegambarpenyakit3 = $this->request->getFile('gambar3');


        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit3 = $filegambarpenyakit3->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit3->move('images');


        // untuk mengambil file gambar
        $filegambarpenyakit4 = $this->request->getFile('gambar4');

        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit4 = $filegambarpenyakit4->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit4->move('images');


        // untuk mengambil file gambar
        $filegambarpenyakit5 = $this->request->getFile('gambar5');

        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit5 = $filegambarpenyakit5->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit5->move('images');


        // untuk mengambil file gambar
        $filegambarpenyakit6 = $this->request->getFile('gambar6');

        // untuk memberi penamaan pada file gambar ketika disimpan di folder public
        $namagambarpenyakit6 = $filegambarpenyakit6->getName();

        // untuk memindahkan file gambar yang diupload ke folder images di public
        $filegambarpenyakit6->move('images');



        $this->PenyakitModel->save([
            // field yang diisi
            'kode_penyakit' => $this->PenyakitModel->autokodepenyakit(),
            'nama_penyakit' => $this->request->getVar('nama_penyakit'),
            'desk' => $this->request->getVar('desk'),
            'pengobatan' => $this->request->getVar('pengobatan'),
            'pencegahan' => $this->request->getVar('pencegahan'),
            'gambar' => $namagambarpenyakit,
            'gambar2' => $namagambarpenyakit2,
            'gambar3' => $namagambarpenyakit3,
            'gambar4' => $namagambarpenyakit4,
            'gambar5' => $namagambarpenyakit5,
            'gambar6' => $namagambarpenyakit6
        ]);
        session()->setFlashdata("success","Penyakit berhasil ditambahkan");
        return redirect()->to('/keloladata/penyakit');
    }

    //function pada controller utuk menghapus data penyakit
    public function delpenyakit($id)
    {
        $this->PenyakitModel->hapuspenyakit($id);
        session()->setFlashdata("success","Penyakit berhasil dihapus");
        return redirect()->to('/keloladata/penyakit');
    }

    public function edpenyakit($data)
    {
        $data = [
            'title' => 'Dashboard | Edit Penyakit',
            'penyakit' => $this->PenyakitModel->getPenyakit($data)
        ];
        return view('kelbaspengetahuan/editpenyakit', $data);
    }

    public function uppenyakit($id)
    {

        if (!$this->validate([
            'nama_penyakit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Penyakit Harus Diisi',
                ]
            ],

            'gambar' => [
                'rules' => 'max_size[gambar,5000]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar2' => [
                'rules' => 'max_size[gambar2,5000]|is_image[gambar2]|mime_in[gambar2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar3' => [
                'rules' => 'max_size[gambar3,5000]|is_image[gambar3]|mime_in[gambar3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar4' => [
                'rules' => 'max_size[gambar4,5000]|is_image[gambar4]|mime_in[gambar4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar5' => [
                'rules' => 'max_size[gambar5,5000]|is_image[gambar5]|mime_in[gambar5,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],

            'gambar6' => [
                'rules' => 'max_size[gambar6,5000]|is_image[gambar6]|mime_in[gambar6,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            session()->setFlashdata('gagal', $this->validator->listErrors());
            session()->setFlashdata('error', 'Data penyakit gagal diubah!');
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $filegambarpenyakit = $this->request->getFile('gambar');

        if ($filegambarpenyakit->getError() == 4) {
            $namagambarpenyakit = $this->request->getVar('gambarlama');
        } else {
            // generate file random
            $namagambarpenyakit = $filegambarpenyakit->getName();
            // pindahkan gambar
            $filegambarpenyakit->move('images');
            unlink('images/' . $this->request->getVar('gambarlama'));

        }

        $filegambarpenyakit2 = $this->request->getFile('gambar2');

        if ($filegambarpenyakit2->getError() == 4) {
            $namagambarpenyakit2 = $this->request->getVar('gambarlama2');
        } else {
            // generate file random
            $namagambarpenyakit2 = $filegambarpenyakit2->getName();
            // pindahkan gambar
            $filegambarpenyakit2->move('images');
            unlink('images/' . $this->request->getVar('gambarlama2'));

        }

        $filegambarpenyakit3 = $this->request->getFile('gambar3');

        if ($filegambarpenyakit3->getError() == 4) {
            $namagambarpenyakit3 = $this->request->getVar('gambarlama3');
        } else {
            // generate file random
            $namagambarpenyakit3 = $filegambarpenyakit3->getName();
            // pindahkan gambar
            $filegambarpenyakit3->move('images');
            unlink('images/' . $this->request->getVar('gambarlama3'));
        }

        $filegambarpenyakit4 = $this->request->getFile('gambar4');

        if ($filegambarpenyakit4->getError() == 4) {
            $namagambarpenyakit4 = $this->request->getVar('gambarlama4');
        } else {
            // generate file random
            $namagambarpenyakit4 = $filegambarpenyakit4->getName();
            // pindahkan gambar
            $filegambarpenyakit4->move('images');
            unlink('images/' . $this->request->getVar('gambarlama4'));

        }

        $filegambarpenyakit5 = $this->request->getFile('gambar5');

        if ($filegambarpenyakit5->getError() == 4) {
            $namagambarpenyakit5 = $this->request->getVar('gambarlama5');
        } else {
            // generate file random
            $namagambarpenyakit5 = $filegambarpenyakit5->getName();
            // pindahkan gambar
            $filegambarpenyakit5->move('images');
            unlink('images/' . $this->request->getVar('gambarlama5'));

        }

        $filegambarpenyakit6 = $this->request->getFile('gambar6');

        if ($filegambarpenyakit6->getError() == 4) {
            $namagambarpenyakit6 = $this->request->getVar('gambarlama6');
        } else {
            // generate file random
            $namagambarpenyakit6 = $filegambarpenyakit6->getName();
            // pindahkan gambar
            $filegambarpenyakit6->move('images');
            unlink('images/' . $this->request->getVar('gambarlama6'));
        }

        $this->PenyakitModel->updatepenyakit([
            'nama_penyakit' => $this->request->getVar('nama_penyakit'),
            'desk' => $this->request->getVar('desk'),
            'pengobatan' => $this->request->getVar('pengobatan'),
            'pencegahan' => $this->request->getVar('pencegahan'),
            'gambar' => $namagambarpenyakit,
            'gambar2' => $namagambarpenyakit2,
            'gambar3' => $namagambarpenyakit3,
            'gambar4' => $namagambarpenyakit4,
            'gambar5' => $namagambarpenyakit5,
            'gambar6' => $namagambarpenyakit6
        ], $id);
        session()->setFlashdata("success","Penyakit berhasil diubah");
        return redirect()->to('/keloladata/penyakit');
    }

    public function detailpenyakit($data)
    {
        $Penyakit = $this->PenyakitModel->getdetailPenyakit($data);

        $data = [
            'title' => 'Dashboard | Detail Penyakit',
            'detail_p' => $Penyakit
        ];

        return view('kelbaspengetahuan/detailpenyakit', $data);
    }




    public function baspengetahuan()
    {
        // Menyambungkan tabel gejala dari database dengan models (recommended)

        $Basisp = $this->BaspengetahuanModel->getBasisG();
        $Penyakit = $this->PenyakitModel->findAll();
        $Gejala = $this->GejalaModel->findAll();


        $data = [
            'title' => 'Dashboard | Basis Pengetahuan',
            'penyakit' => $Penyakit,
            'gejala' => $Gejala,
            'basisp' => $Basisp
        ];

        return view('kelbaspengetahuan/basispengetahuan', $data);
    }

    public function savebaspengetahuan()
    {
        $gejalaAll = $this->request->getVar('kode_gejala');
        foreach ($gejalaAll as $ga) :
            $this->BaspengetahuanModel->save([
                // field yang diisi
                // 'kode_penyakit' =>$this->PenyakitModel->autokodepenyakit(),
                'kode_penyakit' => $this->request->getVar('kode_penyakit'),
                'kode_gejala' => $ga
            ]);
        endforeach;
        session()->setFlashdata("success","Basis Pengetahuan berhasil ditambahkan");
        return redirect()->to('/keloladata/baspengetahuan');
    }

    public function hapusbaspengetahuan($id)
    {
        // $basisAll = $this->request->getVar('kode_pengetahuan');    
        // foreach ($basisAll as $bp) :
        //     $this->BaspengetahuanModel->delete_b([
        //         'kode_pengetahuan' => $bp
        //     ], $id);
        // endforeach;

        $this->BaspengetahuanModel->delete_b($id);
        session()->setFlashdata("success","Basis Pengetahuan berhasil dihapus");
        return redirect()->to('/keloladata/baspengetahuan');
    }
}
