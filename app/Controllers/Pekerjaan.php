<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_pekerjaan;

class Pekerjaan extends BaseController
{
    public function __construct()
    {
        $this->Model_pekerjaan = new Model_pekerjaan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pekerjaan',
            'menu' => 'master-data',
            'submenu' => 'pekerjaan',
            'data_pekerjaan' => $this->Model_pekerjaan->AllData(),
            'isi' => 'pekerjaan_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Insert()
    {
        $data = [
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];
        $this->Model_pekerjaan->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('Pekerjaan');
    }

    public function Update($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];
        $this->Model_pekerjaan->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Update');
        return redirect()->to('Pekerjaan');
    }

    public function Delete($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
        ];
        $this->Model_pekerjaan->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Delete');
        return redirect()->to('Pekerjaan');
    }
}
