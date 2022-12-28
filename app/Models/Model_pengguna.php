<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pengguna extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_user')
            ->orderBy('id_users', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function detail_data($id_users)
    {
        return $this->db->table('tbl_user')
            ->where('id_users', $id_users)
            ->get()
            ->getRowArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('tbl_user')
            ->where('id_users', $data['id_users'])
            ->update($data);
    }
    public function delete_pengguna($data)
    {
        $this->db->table('tbl_user')
            ->where('id_users', $data['id_users'])
            ->delete($data);
    }
}
