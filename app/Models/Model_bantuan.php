<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_bantuan extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_bantuan')
            ->orderBy('id_bantuan', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function InsertData($data)
    {
        $this->db->table('tbl_bantuan')->insert($data);
    }
    public function UpdateData($data)
    {
        $this->db->table('tbl_bantuan')
            ->where('id_bantuan', $data['id_bantuan'])
            ->update($data);
    }
    public function DeleteData($data)
    {
        $this->db->table('tbl_bantuan')
            ->where('id_bantuan', $data['id_bantuan'])
            ->delete($data);
    }

    public function PenerimaBantuan()
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_pekerjaan', 'tbl_pekerjaan.id_pekerjaan=tbl_penduduk.id_pekerjaan', 'left')
            ->join('tbl_penghasilan', 'tbl_penghasilan.id_penghasilan=tbl_penduduk.id_penghasilan', 'left')
            ->join('tbl_bantuan', 'tbl_bantuan.id_bantuan=tbl_penduduk.id_bantuan', 'left')
            ->where('tbl_penghasilan.penerima_bantuan', '1')
            ->get()
            ->getResultArray();
    }

    public function UpdatePenerima($data)
    {
        $this->db->table('tbl_penduduk')
            ->where('id_penduduk', $data['id_penduduk'])
            ->update($data);
    }
}
