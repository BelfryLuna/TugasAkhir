<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $BlogModel;

    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $Blog = $this->BlogModel->findAll();

        $data = [
            'title' => 'Dashboard | Blog',
            'blog' => $Blog
        ];

        return view('blog/daftarblog', $data);
    }

    public function tambahblog()
    {
        $data = [
            'title' => 'Dashboard | Tambah Post',
            'validation' => \Config\Services::validation()
        ];

        return view('/blog/tambahblog', $data);
    }

    public function saveblog()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'required' => '{field} post untuk blog harus diisi.',
                    'is_unique' => '{field} post untuk blod sudah ada.'
                ]            
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,5000]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Anda belum memilih gambar apapun',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', $this->validator->listErrors());
            session()->setFlashdata('error', 'Data blog(post) baru gagal ditambahkan!');
            return redirect()->to('/blog/tambahblog')->withInput()->with('errors', $this->validator->getErrors());
            // return redirect()->to('/blog/tambahblog')->withInput('validation', $validation);
        }
        // untuk mengambil file gambar
        $fileblog = $this->request->getFile('foto');
        // untuk mengecek apakah tidak ada gambar yang diupload
      
            // untuk memberi penamaan pada file gambar ketika disimpan di folder public
            $namablog = $fileblog->getName();
            
            // untuk memindahkan file gambar yang diupload ke folder images di public
            $fileblog->move('images');
        

        $this->BlogModel->save ([
            // field yang diisi
            'judul' => $this->request->getVar('judul'),
            'kategori' => $this->request->getVar('kategori'),
            'content' => $this->request->getVar('content'),
            'excerpt' => $this->request->getVar('excerpt'),
            'foto' => $namablog
        ]);
        session()->setFlashdata("success","Blog(Post) berhasil ditambahkan");
        return redirect()->to('/blog');
    }

    public function editblog($id)
    {
        $data = [
            'title' => 'Dashboard | Edit Post',
            'blog' => $this->BlogModel->getBlog($id),
            'validation' => \Config\Services::validation()
        ];

        return view('/blog/editblog', $data);
    }

    public function updateblog($id)
    {

        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} post untuk blog harus diisi.',
                ]            
            ],
            'foto' => [
                'rules' => 'max_size[foto,5000]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', $this->validator->listErrors());
            session()->setFlashdata('error', 'Data blog(post) gagal diubah!');
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            // return redirect()->to('/blog/tambahblog')->withInput('validation', $validation);
        }
     

        $fileblog = $this->request->getFile('foto');

        if ($fileblog->getError() == 4) {
            $namablog = $this->request->getVar('fotolama');
        } else {
            // generate file random
            $namablog = $fileblog->getName();
            // pindahkan gambar
            $fileblog->move('images');
            // hapus foto lama
            unlink('images/' . $this->request->getVar('fotolama'));
        }

        $this->BlogModel->upblog ([
            // field yang diisi
            'judul' => $this->request->getVar('judul'),
            'kategori' => $this->request->getVar('kategori'),
            'content' => $this->request->getVar('content'),
            'excerpt' => $this->request->getVar('excerpt'),
            'foto' => $namablog
        ], $id);
        session()->setFlashdata("success","Blog(Post) berhasil diubah");
        return redirect()->to('/blog');
    }

    public function hapusblog($id)
    {
        // cari gambar
        $blog = $this->BlogModel->find($id);

        if ($blog['foto'] !== 'default.jpg' ) {

            // hapus gambar
            unlink('images/' . $blog['foto']);
        }

        $this->BlogModel->delete($id);
        session()->setFlashdata("success","Blog(post) berhasil dihapus");
        return redirect()->to('/blog');
    }

    public function detailblog($data)
    {
        $Blog = $this->BlogModel->getdetailBlog($data);

        $data = [
            'title' => 'Dashboard | Detail Post',
            'detail_b' => $Blog
        ];

        return view('blog/detailblog', $data);
    }

}
