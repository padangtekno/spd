<?php

namespace App\Controllers;

use App\Models\Model_home;
use App\Models\Model_keluarga;

class HomePenduduk extends BaseController
{
    public function __construct()
    {
        $this->Model_home = new Model_home;
        $this->Model_keluarga = new Model_keluarga;
    }

    public function index()
    {
        $nik = session()->get('nik');
        $data = [
            'title' => 'Biodata',
            'isi' => 'v_biodata',
            'web' => $this->Model_home->Web(),
            'penduduk' => $this->Model_home->Biodata($nik),
        ];
        return view('v_template', $data);
    }

    public function Keluarga()
    {
        $no_kk = session()->get('no_kk');
        $data = [
            'title' => 'Dashboard Penduduk',
            'isi' => 'home_penduduk_view',
            'web' => $this->Model_home->Web(),
            'keluarga' => $this->Model_keluarga->RincianData($no_kk),
            'anggota' => $this->Model_keluarga->AllAnggota($no_kk),
        ];
        return view('v_template', $data);
    }
}
