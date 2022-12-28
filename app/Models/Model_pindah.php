<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pindah extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_pindah')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_pindah.id_penduduk', 'left')
            ->orderBy('id_pindah', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function DetailData($id_pindah)
    {
        return $this->db->table('tbl_pindah')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_pindah.id_penduduk', 'left')
            ->where('id_pindah', $id_pindah)
            ->get()
            ->getRowArray();
    }

    public function AllDataPenduduk()
    {
        return $this->db->table('tbl_penduduk')
            ->where('status', '1')
            ->get()
            ->getResultArray();
    }

    public function InsertData($data)
    {
        $this->db->table('tbl_pindah')->insert($data);
    }

    public function UpdateData($data)
    {
        $this->db->table('tbl_pindah')
            ->where('id_pindah', $data['id_pindah'])
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
        $this->db->table('tbl_pindah')
            ->where('id_pindah', $data['id_pindah'])
            ->delete($data);
    }

    public function DataBulanan($bulan, $tahun)
    {
        return $this->db->table('tbl_pindah')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_pindah.id_penduduk', 'left')
            ->where('month(tbl_pindah.tgl_pindah)', $bulan)
            ->where('year(tbl_pindah.tgl_pindah)', $tahun)
            ->get()->getResultArray();
    }
}
