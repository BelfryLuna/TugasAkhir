<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel penyakit
    protected $table      = 'blog';
    
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['judul', 'kategori', 'slug', 'content', 'excerpt', 'foto'];

    public function getBlog($data)
    {
        return $this->where('id', $data)->first();
    }

    public function getdetailBlog($data)
    {
        return $this->where('id', $data)->first();
    }

    public function upblog($data, $id)
    {
        $builder = $this->db->table('blog');
        $builder->where('id', $id);
        $builder->update($data);
    }

    public function getAllblog()
    {
        return $this->orderBy('id')->findAll();
    }
}

