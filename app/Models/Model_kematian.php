<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kematian extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_kematian')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kematian.id_penduduk', 'left')
            ->orderBy('id_kematian', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function AllDataPenduduk()
    {
        return $this->db->table('tbl_penduduk')
            ->where('status <> 2')
            ->where('status <> 3')
            ->get()
            ->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_kematian')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_kematian')
            ->where('id_kematian', $data['id_kematian'])
            ->update($data);
    }

    public function UpdateDataPenduduk($data2)
    {
        $this->db->table('tbl_penduduk')
            ->where('id_penduduk', $data2['id_penduduk'])
            ->update($data2);
    }

    public function DeleteData($data)
    {
        $this->db->table('tbl_kematian')
            ->where('id_kematian', $data['id_kematian'])
            ->delete($data);
    }

    public function DataBulanan($bulan, $tahun)
    {
        return $this->db->table('tbl_kematian')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kematian.id_penduduk', 'left')
            ->where('month(tbl_kematian.tgl_kematian)', $bulan)
            ->where('year(tbl_kematian.tgl_kematian)', $tahun)
            ->get()->getResultArray();
    }
}
