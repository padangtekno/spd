<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_penduduk extends Model
{
    public function alldata()
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_pekerjaan', 'tbl_pekerjaan.id_pekerjaan=tbl_penduduk.id_pekerjaan', 'left')
           
            ->where('status', '1')
            ->orderBy('no_kk', 'DESC')
            ->get()
            ->getResultArray();
    }
    public function detail_data($id_penduduk)
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_pendidikan', 'tbl_pendidikan.id_pendidikan=tbl_penduduk.id_pendidikan', 'left')
            ->join('tbl_pekerjaan', 'tbl_pekerjaan.id_pekerjaan=tbl_penduduk.id_pekerjaan', 'left')
          
            ->join('tbl_keluarga', 'tbl_keluarga.no_kk=tbl_penduduk.no_kk', 'left')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_keluarga.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten=tbl_keluarga.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_keluarga.id_kecamatan', 'left')
            ->where('id_penduduk', $id_penduduk)
            ->get()
            ->getrowArray();
    }
    public function add($data)
    {
        return $this->db->table('tbl_penduduk')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_penduduk')
            ->where('id_penduduk', $data['id_penduduk'])
            ->update($data);
    }

    public function delete_penduduk($data)
    {
        $this->db->table('tbl_penduduk')
            ->where('id_penduduk', $data['id_penduduk'])
            ->delete($data);
    }
}
