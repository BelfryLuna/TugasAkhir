<?php

namespace App\Models;

use CodeIgniter\Model;

class BaspengetahuanModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel penyakit
    protected $table      = 'basis_pengetahuan';
    protected $primaryKey = 'kode_pengetahuan';
    protected $returnType = 'array';
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['kode_penyakit', 'kode_gejala'];

    public function getBasisG()
    {
        $builder = $this->db->table('basis_pengetahuan');
        $builder->select('basis_pengetahuan.kode_gejala as kode_gejala, deskripsi_gejala, basis_pengetahuan.kode_penyakit as kode_penyakit, kode_pengetahuan');
        $builder->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala');
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }

    public function basisGejala()
    {
        $builder = $this->db->table('basis_pengetahuan');
        $builder->select('basis_pengetahuan.kode_gejala as kode_gejala, gejala.deskripsi_gejala');
        $builder->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala');
        $builder->orderBy('kode_gejala')->groupBy('kode_gejala');
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }

    

    // public function basisGejalaAll()
    // {
    //     $builder = $this->db->table('basis_pengetahuan');
    //     $builder->select('basis_pengetahuan.kode_gejala as kode_gejala, deskripsi_gejala, basis_pengetahuan.kode_penyakit as kode_penyakit, kode_pengetahuan');
    //     $builder->join('gejala', 'gejala.kode_gejala = basis_pengetahuan.kode_gejala');
    //     $builder->orderBy('kode_gejala')->groupBy('kode_gejala');
    //     $query = $builder->get();
    //     $data = $query->getResultArray();
    //     return $data;
    // }
    


    public function delete_b($id)
    {
        $builder = $this->db->table('basis_pengetahuan');
        $builder->where('kode_pengetahuan', $id);
        $builder->delete();
    }
    // public function autokodebaspengetahuan()
    // {
    //     $kode = $this->db->table('penyakit')->select('RIGHT(kode_penyakit, 2) as kode_penyakit', false)->orderBy('kode_penyakit', 'DESC')->limit(1)->get()->getRowArray();

    //     if ($kode['kode_penyakit'] ?? []) {
    //         $no = intval($kode['kode_penyakit']) + 1;
    //     } else {
    //         $no = 1; 
    //     }

    //     $tgl = 'P';
    //     $batas = str_pad($no, 2, "0", STR_PAD_LEFT);
    //     $kodeK = $tgl . $batas;
    //     return $kodeK;
    // }

    public function getBasisAll()
    {
        return $this->orderBy('kode_pengetahuan')->findAll();
    }

    public function getBasisSame($kode_penyakit, $kode_gejala)
    {
        return $this->where('kode_penyakit', $kode_penyakit)->where('kode_gejala', $kode_gejala)->first();
    }

    public function getPenyakit($id) 
    {
        return $this->where('kode_penyakit', $id)->findAll();
    }

    
}
