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
}
