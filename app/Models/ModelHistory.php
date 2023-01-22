<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHistory extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_pekerjaan', 'tbl_pekerjaan.id_pekerjaan=tbl_penduduk.id_pekerjaan', 'left')
            ->where('status <> 1')
            ->orderBy('no_kk', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function DetailLahir($id_penduduk)
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_kelahiran', 'tbl_kelahiran.id_penduduk=tbl_penduduk.id_penduduk', 'left')
            ->where('tbl_penduduk.id_penduduk', $id_penduduk)
            ->get()
            ->getRowArray();
    }

    public function DetailKematian($id_penduduk)
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_kematian', 'tbl_kematian.id_penduduk=tbl_penduduk.id_penduduk', 'left')
            ->where('tbl_penduduk.id_penduduk', $id_penduduk)
            ->get()
            ->getRowArray();
    }
}
