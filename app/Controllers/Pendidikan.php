<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_pendidikan;

class Pendidikan extends BaseController
{
    public function __construct()
    {
        $this->Model_pendidikan = new Model_pendidikan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pendidikan',
            'menu' => 'master-data',
            'submenu' => 'pendidikan',
            'data_pendidikan' => $this->Model_pendidikan->AllData(),
            'isi' => 'pendidikan_view',
        ];
        return view('layout/wrapper_view', $data);
    }


    public function Insert()
    {
        $data = [
            'pendidikan' => $this->request->getPost('pendidikan'),
        ];
        $this->Model_pendidikan->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('pendidikan');
    }

    public function Update($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'pendidikan' => $this->request->getPost('pendidikan'),
        ];
        $this->Model_pendidikan->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Update');
        return redirect()->to('pendidikan');
    }

    public function Delete($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
        ];
        $this->Model_pendidikan->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Delete');
        return redirect()->to('pendidikan');
    }
}
