<?php

namespace App\Controllers;

use App\Models\Model_jabatan;

class Jabatan extends BaseController
{
    public function __construct()
    {
        $this->Model_jabatan = new Model_jabatan();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Jabatan',
            'jabatan' => $this->Model_jabatan->alldata(),
            'isi' => 'jabatan_view'
        );
        return view('layout/wrapper_view', $data);
    }

    public function add()
    {
        $data = array(
            'nama_jabatan' => $this->request->getPost('nama_jabatan')
        );
        $this->Model_jabatan->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('jabatan'));
    }
    public function edit($id_jabatan)
    {
        $data = array(
            'id_jabatan' => $id_jabatan,
            'nama_jabatan' => $this->request->getPost('nama_jabatan')
        );
        $this->Model_jabatan->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbaharui');
        return redirect()->to(base_url('jabatan'));
    }
    public function delete($id_jabatan)
    {
        $data = array(
            'id_jabatan' => $id_jabatan,
        );
        $this->Model_jabatan->deletejabatan($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('jabatan'));
    }
}
