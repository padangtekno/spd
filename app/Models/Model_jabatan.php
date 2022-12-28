<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_jabatan extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_jabatan')
            ->orderBy('id_jabatan', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_jabatan')->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('tbl_jabatan')
            ->where('id_jabatan', $data['id_jabatan'])
            ->update($data);
    }
    public function deletetbl_jabatan($data)
    {
        $this->db->table('tbl_jabatan')
            ->where('id_jabatan', $data['id_jabatan'])
            ->delete($data);
    }
}
