<?php

namespace App\Controllers;

use App\Models\Model_home;
use App\Models\Model_wilayah;
use App\Models\Model_pendidikan;
use App\Models\Model_keluarga;
use App\Models\Model_penduduk;
use App\Models\Model_kelahiran;
use App\Models\Model_kematian;
use App\Models\Model_pindah;
use App\Models\Model_bantuan;

class Kawil extends BaseController
{
  public function __construct()
  {
    $this->Model_home = new Model_home();
    $this->Model_wilayah = new Model_wilayah();
    $this->Model_pendidikan = new Model_pendidikan();
    $this->Model_keluarga = new Model_keluarga();
    $this->Model_penduduk = new Model_penduduk();
    $this->Model_penduduk = new Model_penduduk();
    $this->Model_kelahiran = new Model_kelahiran();
    $this->Model_bantuan = new Model_bantuan();
    $this->Model_pindah = new Model_pindah();
    $this->Model_kematian = new Model_kematian();
  }

  public function index()
  {
    $data = [
      'title' => 'Dashboard',
      'menu' => 'dashboard',
      'submenu' => 'dashboard',
      'isi' => 'kawil/v_dashboard',
      'total_keluarga' => $this->Model_home->total_keluarga(),
      'total_penduduk' => $this->Model_home->total_penduduk(),
      'total_kelahiran' => $this->Model_home->total_kelahiran(),
      'total_kematian' => $this->Model_home->total_kematian(),
      'total_pindah' => $this->Model_home->total_pindah(),
      'total_pengguna' => $this->Model_home->total_pengguna(),
      'total_l' => $this->Model_home->total_L(),
      'total_p' => $this->Model_home->total_P(),
      'total_lahir_p' => $this->Model_home->total_lahir_P(),
      'total_lahir_l' => $this->Model_home->total_lahir_L(),
      'pendidikan' => $this->Model_pendidikan->AllData(),

    ];
    return view('kawil/v_template', $data);
  }

  public function keluarga()
  {
    $data = [
      'title' => 'Data Keluarga',
      'menu' => 'keluarga',
      'submenu' => 'keluarga',
      'data_keluarga' => $this->Model_keluarga->alldata(),
      'isi' => 'kawil/keluarga/keluarga_view',
    ];
    return view('kawil/v_template', $data);
  }

  public function RincianKeluarga($no_kk)
  {
    $data = [
      'title' => 'Rincian Data Keluarga',
      'isi' => 'kawil/keluarga/keluarga_rincian',
      'menu' => 'keluarga',
      'submenu' => 'keluarga',
      'keluarga' => $this->Model_keluarga->RincianData($no_kk),
      'anggota' => $this->Model_keluarga->AllAnggota($no_kk),
    ];
    return view('kawil/v_template', $data);
  }

  public function Penduduk()
  {
    $data = [
      'title' => 'Data Penduduk',
      'menu' => 'penduduk',
      'submenu' => '',
      'data_penduduk' => $this->Model_penduduk->alldata(),
      'isi' => 'kawil/penduduk/penduduk_view',
    ];
    return view('kawil/v_template', $data);
  }

  public function DetailPenduduk($id_penduduk)
  {
    $penduduk = $this->Model_penduduk->detail_data($id_penduduk);

    $data = [
      'title' => 'Detail Data Penduduk',
      'menu' => 'penduduk',
      'submenu' => '',
      'penduduk' => $this->Model_penduduk->detail_data($id_penduduk),
      'isi' => 'kawil/penduduk/penduduk_detail',
    ];
    return view('kawil/v_template', $data);
  }

  public function Kelahiran()
  {
    $data = [
      'title' => 'Data Kelahiran',
      'menu' => 'kelahiran',
      'submenu' => '',
      'data_kelahiran' => $this->Model_kelahiran->alldata(),
      'isi' => 'kawil/kelahiran/kelahiran_view',
    ];
    return view('kawil/v_template', $data);
  }

  public function Kematian()
  {
    $data = [
      'title' => 'Data Kematian',
      'menu' => 'kematian',
      'submenu' => 'kematian',
      'isi' => 'kawil/kematian/kematian_view',
      'penduduk' => $this->Model_kematian->AllDataPenduduk(),
      'kematian' => $this->Model_kematian->AllData(),
    ];
    return view('kawil/v_template', $data);
  }

  public function Pindah()
  {
    $data = [
      'title' => 'Data Pindah',
      'menu' => 'pindah',
      'submenu' => '',
      'isi' => 'kawil/pindah/pindah_view',
      'pindah' => $this->Model_pindah->AllData(),
    ];
    return view('kawil/v_template', $data);
  }

  public function Bantuan()
  {
    $data = [
      'title' => 'Data Penerima Bantuan',
      'isi' => 'kawil/penerima_bantuan_view',
      'menu' => 'penerima',
      'submenu' => '',
      'penerima' => $this->Model_bantuan->PenerimaBantuan(),
      'bantuan' => $this->Model_bantuan->AllData(),
    ];
    return view('kawil/v_template', $data);
  }
}
