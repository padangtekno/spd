<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_wilayah extends Model
{
  public function allProvinsi()
  {
    return $this->db->table('tbl_provinsi')
      ->orderBy('id_provinsi', 'ASC')
      ->get()->getResultArray();
  }

  public function allKabupaten($id_provinsi)
  {
    return $this->db->table('tbl_kabupaten')
      ->where('id_provinsi', $id_provinsi)
      ->get()->getResultArray();
  }

  public function allKecamatan($id_kabupaten)
  {
    return $this->db->table('tbl_kecamatan')
      ->where('id_kabupaten', $id_kabupaten)
      ->orderBy('id_kecamatan', 'ASC')
      ->get()->getResultArray();
  }
}
