<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembangModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel penyakit
    protected $table      = 'pengembang';
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['nama', 'foto', 'status'];


    public function getAllpengembang()
    {
        return $this->orderBy('id')->findAll();
    }
}
