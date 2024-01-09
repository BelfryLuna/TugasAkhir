<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel gejala
    protected $table      = 'gejala';
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['kode_gejala', 'deskripsi_gejala'];

    // untuk membuat auto kode pada kode gejala
    public function autokodegejala()
    {
        $kode = $this->db->table('gejala')->select('RIGHT(kode_gejala, 2) as kode_gejala', false)->orderBy('kode_gejala', 'DESC')->limit(1)->get()->getRowArray();

        if ($kode['kode_gejala'] ?? []) {
            $no = intval($kode['kode_gejala']) + 1;
        } else {
            $no = 1; 
        }

        $tgl = 'GP';
        $batas = str_pad($no, 2, "0", STR_PAD_LEFT);
        $kodeK = $tgl . $batas;
        return $kodeK;
    }

    // function pada model yang digunakan untuk menghapus data gejala
    public function hapusgejala($id)
    {
        $builder = $this->db->table('gejala');
        $builder->where('kode_gejala', $id);
        $builder->delete();
    }

    // function pada model yang digunakan untuk menghapus data gejala
    public function updategejala($data, $id)
    {
        $builder = $this->db->table('gejala');
        $builder->where('kode_gejala', $id);
        $builder->update($data);
    }

    public function getGejala()
    {
        return $this->findAll();
    }
}
