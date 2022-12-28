<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_home extends Model
{
    public function total_keluarga()
    {
        return $this->db->table('tbl_keluarga')->countAll();
    }

    public function total_penduduk()
    {
        return $this->db->table('tbl_penduduk')
            ->where('status', '1')
            ->countAllResults();
    }
    public function total_L()
    {
        return $this->db->table('tbl_penduduk')
            ->where('status', '1')
            ->where('jk', 'L')
            ->countAllResults();
    }
    public function total_P()
    {
        return $this->db->table('tbl_penduduk')
            ->where('status', '1')
            ->where('jk', 'P')
            ->countAllResults();
    }

    public function total_lahir_L()
    {
        return $this->db->table('tbl_kelahiran')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kelahiran.id_penduduk', 'left')
            ->where('jk', 'L')
            ->countAllResults();
    }

    public function total_lahir_P()
    {
        return $this->db->table('tbl_kelahiran')
            ->join('tbl_penduduk', 'tbl_penduduk.id_penduduk=tbl_kelahiran.id_penduduk', 'left')
            ->where('jk', 'P')
            ->countAllResults();
    }

    public function total_kelahiran()
    {
        return $this->db->table('tbl_kelahiran')->countAll();
    }
    public function total_kematian()
    {
        return $this->db->table('tbl_kematian')
            ->countAll();
    }
    public function total_pindah()
    {
        return $this->db->table('tbl_pindah')->countAll();
    }

    public function total_pengguna()
    {
        return $this->db->table('tbl_user')->countAll();
    }

    public function Web()
    {
        return $this->db->table('tbl_setting')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_setting.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten=tbl_setting.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_setting.id_kecamatan', 'left')
            ->where('id', 1)
            ->get()->getRowArray();
    }

    public function UpdateSetting($data)
    {
        $this->db->table('tbl_setting')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function Biodata($nik)
    {
        return $this->db->table('tbl_penduduk')
            ->join('tbl_pendidikan', 'tbl_pendidikan.id_pendidikan=tbl_penduduk.id_pendidikan', 'left')
            ->join('tbl_pekerjaan', 'tbl_pekerjaan.id_pekerjaan=tbl_penduduk.id_pekerjaan', 'left')
            ->join('tbl_penghasilan', 'tbl_penghasilan.id_penghasilan=tbl_penduduk.id_penghasilan', 'left')
            ->join('tbl_bantuan', 'tbl_bantuan.id_bantuan=tbl_penduduk.id_bantuan', 'left')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi=tbl_penduduk.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten=tbl_penduduk.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan=tbl_penduduk.id_kecamatan', 'left')
            ->where('nik', $nik)
            ->get()
            ->getrowArray();
    }
}
