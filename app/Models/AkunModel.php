<?php

namespace App\Models;


use CodeIgniter\Model;

class AkunModel extends Model
{
    // untuk memberi model bahwa tabel yang digunakan dari DB adalah tabel gejala
    protected $table      = 'users';
    protected $primaryKey = 'id';
    // Untuk memberi tahu model field apa saja yang boleh diisi manual oleh kita
    protected $allowedFields = ['username', 'email', 'fullname', 'foto', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash', 'status', 'status_message', 'active', 'force_pass_reset', 'created_at', 'updated_at', 'deleted_at'];

    public function getUser()
    {
        $builder = $this->db->table('users');
        $builder->select('users.id as userid, foto, username, fullname, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        $data = $query->getResultArray();
        return $data;
    }
    
    public function delakun($id)
    {
        $builder = $this->db->table('users');
        $builder->where('id', $id);
        $builder->delete();
    }

    public function updatePassword($password_baru, $id)
    {
        $builder = $this->db->table('users');
        $builder->where('id', $id);
        $builder->update(['password'=>$password_baru]);
        if($this->db->affectedRows()>0) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getUbahProfile($id)
    {
        return $this->where('id', $id)->first();
    }
   
}
