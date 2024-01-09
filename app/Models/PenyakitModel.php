<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel penyakit
    protected $table      = 'penyakit';
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['kode_penyakit', 'nama_penyakit', 'desk', 'pengobatan', 'pencegahan', 'gambar', 'gambar2', 'gambar3', 'gambar4', 'gambar5', 'gambar6'];

    public function autokodepenyakit()
    {
        $kode = $this->db->table('penyakit')->select('RIGHT(kode_penyakit, 2) as kode_penyakit', false)->orderBy('kode_penyakit', 'DESC')->limit(1)->get()->getRowArray();

        if ($kode['kode_penyakit'] ?? []) {
            $no = intval($kode['kode_penyakit']) + 1;
        } else {
            $no = 1; 
        }

        $tgl = 'P';
        $batas = str_pad($no, 2, "0", STR_PAD_LEFT);
        $kodeK = $tgl . $batas;
        return $kodeK;
    }

    public function getAllPenyakit()
    {
        return $this->orderBy('kode_penyakit')->findAll();
    }

    public function getPenyakit($data)
    {
        return $this->where('kode_penyakit', $data)->first();
    }

    public function getdetailPenyakit($data)
    {
        return $this->where('kode_penyakit', $data)->first();
    }

    // function pada model yang digunakan untuk menghapus data penyakit
    public function hapuspenyakit($id)
    {
        $builder = $this->db->table('penyakit');
        $builder->where('kode_penyakit', $id);
        $builder->delete();
    }

    // function pada model yang digunakan untuk menghapus data gejala
    public function updatepenyakit($data, $id)
    {
        $builder = $this->db->table('penyakit');
        $builder->where('kode_penyakit', $id);
        $builder->update($data);
    }
    
}
