<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_bantuan;
use App\Models\Model_home;

class Bantuan extends BaseController
{
    public function __construct()
    {
        $this->Model_bantuan = new Model_bantuan();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jenis Bantuan',
            'menu' => 'master-data',
            'submenu' => 'bantuan',
            'bantuan' => $this->Model_bantuan->AllData(),
            'isi' => 'bantuan_view',
        ];
        return view('layout/wrapper_view', $data);
    }


    public function Insert()
    {
        $data = [
            'bantuan' => $this->request->getPost('bantuan'),
        ];
        $this->Model_bantuan->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('Bantuan');
    }

    public function Update($id_bantuan)
    {
        $data = [
            'id_bantuan' => $id_bantuan,
            'bantuan' => $this->request->getPost('bantuan'),
        ];
        $this->Model_bantuan->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Update');
        return redirect()->to('Bantuan');
    }

    public function Delete($id_bantuan)
    {
        $data = [
            'id_bantuan' => $id_bantuan,
        ];
        $this->Model_bantuan->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Delete');
        return redirect()->to('Bantuan');
    }

    public function Penerima()
    {
        $data = [
            'title' => 'Data Penerima Bantuan',
            'isi' => 'penerima_bantuan_view',
            'menu' => 'penerima',
            'submenu' => '',
            'penerima' => $this->Model_bantuan->PenerimaBantuan(),
            'bantuan' => $this->Model_bantuan->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Laporan()
    {
        $data = [
            'title' => 'Laporan Penerima Bantuan',
            'isi' => 'penerima_bantuan_laporan',
            'menu' => 'laporan',
            'submenu' => 'laporan-bantuan',
            'penerima' => $this->Model_bantuan->PenerimaBantuan(),
            'bantuan' => $this->Model_bantuan->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function UpdatePenerima($id_penduduk)
    {
        $data = [
            'id_penduduk' => $id_penduduk,
            'id_bantuan' => $this->request->getPost('id_bantuan'),
        ];
        $this->Model_bantuan->UpdatePenerima($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to('Bantuan/Penerima');
    }

    public function PrintLaporan()
    {
        $data = [
            'title' => 'Laporan Penerima Bantuan',
            'penerima' => $this->Model_bantuan->PenerimaBantuan(),
            'bantuan' => $this->Model_bantuan->AllData(),
            'web' => $this->Model_home->Web(),
        ];
        return view('penerima_bantuan_print', $data);
    }
}
