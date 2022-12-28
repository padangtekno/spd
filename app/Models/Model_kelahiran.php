<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kelahiran extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_kelahiran')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kelahiran.id_penduduk', 'left')
            ->orderBy('id_lahir', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detail_data($id_lahir)
    {
        return $this->db
            ->table('tbl_kelahiran')
            ->where('id_lahir', $id_lahir)
            ->get()
            ->getrowArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_kelahiran')->insert($data);
    }

    public function InsertPenduduk($data2)
    {
        $this->db->table('tbl_penduduk')->insert($data2);
    }

    public function Ayah($no_kk)
    {
        return $this->db->table('tbl_penduduk')
            ->where('no_kk', $no_kk)
            ->where('hubungan_keluarga', 'Ayah')
            ->get()->getRowArray();
    }

    public function CekIdPenduduk()
    {
        $penduduk =  $this->db->table('tbl_penduduk')
            ->selectMax('id_penduduk')
            ->get()->getRowArray();
        if ($penduduk <> null) {
            $idpenduduk = $penduduk['id_penduduk'] + 1;
        } else {
            $idpenduduk = 1;
        }

        return $idpenduduk;
    }

    public function DataBulanan($bulan, $tahun)
    {
        return $this->db->table('tbl_kelahiran')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kelahiran.id_penduduk', 'left')
            ->where('month(tbl_penduduk.tgl_lahir)', $bulan)
            ->where('year(tbl_penduduk.tgl_lahir)', $tahun)
            ->get()->getResultArray();
    }
}
