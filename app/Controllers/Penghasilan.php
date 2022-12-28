<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_penghasilan;

class Penghasilan extends BaseController
{
    public function __construct()
    {
        $this->Model_penghasilan = new Model_penghasilan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Penghasilan',
            'menu' => 'master-data',
            'submenu' => 'penghasilan',
            'penghasilan' => $this->Model_penghasilan->AllData(),
            'isi' => 'penghasilan_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Insert()
    {
        $data = [
            'penghasilan' => $this->request->getPost('penghasilan'),
            'penerima_bantuan' => $this->request->getPost('penerima_bantuan'),
        ];
        $this->Model_penghasilan->InsertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('penghasilan');
    }

    public function Update($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
            'penghasilan' => $this->request->getPost('penghasilan'),
            'penerima_bantuan' => $this->request->getPost('penerima_bantuan'),
        ];
        $this->Model_penghasilan->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Update');
        return redirect()->to('penghasilan');
    }

    public function Delete($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
        ];
        $this->Model_penghasilan->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Delete');
        return redirect()->to('penghasilan');
    }
}
