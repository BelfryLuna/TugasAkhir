<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Info_penyakit extends BaseController
{

    protected $BlogModel;

    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $Blog = $this->BlogModel->getAllblog();
      
        $data = [
            'title' => 'Sahabat Lambung | Info Penyakit',
            'blog' => $Blog
        ];
        return view('viewuser/info_penyakit', $data);
    }

     public function detailpenyakitblog($id)
    {
        $Blog = $this->BlogModel->getdetailBlog($id);
        $Lainnya = $this->BlogModel->getAllblog();
        $data = [
            'title' => 'Sahabat Lambung | ' . $Blog['judul'],
            'blog' => $Blog,
            'lain' => $Lainnya
        ];
        return view('viewuser/detail_infopenyakit', $data);
    }
}
