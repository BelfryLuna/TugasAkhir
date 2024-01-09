<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisionerModel extends Model
{
    protected $table = 'hasil_kuis';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['ip', 'nama', 'jk', 'umur', 'uat'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getUser($ip)
    {
        return $this->where('ip', $ip)->findAll();
    }

    public function getPertanyaan()
    {
        return $this->db->table('pertanyaan_uat')->select('*')->get()->getResultArray();
    }
}
