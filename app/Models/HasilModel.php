<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilModel extends Model
{
    protected $table = 'hasil_diagnosa';
    protected $primaryKey = 'kode_hasil';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['ip', 'penyakit', 'gejala', 'kode_penyakit', 'nilai', 'nama', 'umur', 'jk'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // public function getkode($ip)
    // {
    //     $kode = $this->db->table('hasil_diagnosa')->select('RIGHT(kode_hasil, 2) as id_hasil', false)->where('ip', $ip)->orderBy('id_hasil', 'DESC')->limit(1)->get()->getRowArray();

    //     if ($kode['id_hasil'] ?? []) {
    //         $no = intval($kode['id_hasil']) + 1;
    //     } else {
    //         $no = 1;
    //     }

    //     $ipAdd = $ip;
    //     $batas = str_pad($no, 2, "0", STR_PAD_LEFT);
    //     $kodeK = $ipAdd . $batas;
    //     return $kodeK;
    // }

    public function getIdfirst($data)
    {
        return $this->select('kode_hasil')->where('ip', $data)->orderBy('kode_hasil', 'desc')->first();
    }

    public function getHasil($data)
    {
        $builder = $this->db->table('hasil_diagnosa');
        $builder->join('penyakit', 'penyakit.kode_penyakit = hasil_diagnosa.kode_penyakit');
        $builder->select('hasil_diagnosa.kode_penyakit as kode_penyakit, hasil_diagnosa.penyakit as penyakit, nama_penyakit, nilai, gambar, gambar2, gambar3, gambar4, gambar5, gambar6, desk, pengobatan, pencegahan');
        $builder->where('kode_hasil', $data);
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }

    public function seripenyakit($data)
    {
        return $this->where('kode_hasil', $data)->first();
    }

    public function getRiwayat()
    {
        $builder = $this->db->table('hasil_diagnosa');
        $builder->join('penyakit', 'penyakit.kode_penyakit = hasil_diagnosa.kode_penyakit');
        $builder->select('penyakit.nama_penyakit as nama_penyakit, nilai, hasil_diagnosa.nama as nama, umur, jk, kode_hasil, gejala, penyakit, kode_hasil, hasil_diagnosa.kode_penyakit as penyakitsatu, hasil_diagnosa.created_at as created_at');
        $builder->orderBy('kode_hasil', 'desc');
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }

    public function getJumDiag()
    {
        return $this->selectCount('kode_hasil')->first();
    }
    public function getJumPeny($data)
    {
        return $this->selectCount('kode_hasil')->where('kode_penyakit', $data)->first();
    }

    public function getDetailuser($idip)
    {
        return $this->where('kode_hasil', $idip)->first();
    }

    public function getBiodata($idip)
    {
        return $this->where('kode_hasil', $idip)->first();
    }

    public function deldiag($id)
    {
        $builder = $this->db->table('hasil_diagnosa');
        $builder->where('kode_hasil', $id);
        $builder->delete();
    }

    public function getByUser()
    {
        $builder = $this->db->table('hasil_diagnosa');
        $builder->join('penyakit', 'penyakit.kode_penyakit = hasil_diagnosa.kode_penyakit');
        $builder->select('penyakit.nama_penyakit as nama_penyakit, nilai, kode_hasil, hasil_diagnosa.created_at as created_at')->where('ip', service('request')->getIPAddress());
        $builder->orderBy('kode_hasil', 'desc');
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }
}
