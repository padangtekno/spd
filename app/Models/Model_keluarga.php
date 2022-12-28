<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_keluarga extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_keluarga')
            ->orderBy('id_keluarga', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detail_data($id_keluarga)
    {
        return $this->db->table('tbl_keluarga')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_keluarga.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten=tbl_keluarga.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_keluarga.id_kecamatan', 'left')
            ->where('id_keluarga', $id_keluarga)
            ->get()
            ->getrowArray();
    }

    public function add($data)
    {
        return $this->db->table('tbl_keluarga')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_keluarga')
            ->where('id_keluarga', $data['id_keluarga'])
            ->update($data);
    }

    public function delete_keluarga($data)
    {
        $this->db->table('tbl_keluarga')
            ->where('id_keluarga', $data['id_keluarga'])
            ->delete($data);
    }

    public function RincianData($no_kk)
    {
        return $this->db->table('tbl_keluarga')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_keluarga.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten=tbl_keluarga.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_keluarga.id_kecamatan', 'left')
            ->where('no_kk', $no_kk)
            ->get()
            ->getrowArray();
    }

    public function AllAnggota($no_kk)
    {
        return $this->db->table('tbl_penduduk')
            ->where('no_kk', $no_kk)
            ->where('status', 1)
            ->orderBy('no_kk', 'DESC')
            ->get()
            ->getResultArray();
    }
}
