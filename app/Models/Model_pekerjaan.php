<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pekerjaan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_pekerjaan')
            ->orderBy('id_pekerjaan', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function InsertData($data)
    {
        $this->db->table('tbl_pekerjaan')->insert($data);
    }
    public function UpdateData($data)
    {
        $this->db->table('tbl_pekerjaan')
            ->where('id_pekerjaan', $data['id_pekerjaan'])
            ->update($data);
    }
    public function DeleteData($data)
    {
        $this->db->table('tbl_pekerjaan')
            ->where('id_pekerjaan', $data['id_pekerjaan'])
            ->delete($data);
    }
}
