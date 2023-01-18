<?php

namespace App\Controllers;

use App\Models\Model_kematian;
use App\Models\Model_home;

class Kematian extends BaseController
{
    public function __construct()
    {
        $this->Model_kematian = new Model_kematian();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kematian',
            'menu' => 'kematian',
            'submenu' => 'kematian',
            'isi' => 'kematian/kematian_view',
            'penduduk' => $this->Model_kematian->AllDataPenduduk(),
            'kematian' => $this->Model_kematian->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Laporan()
    {
        $data = [
            'title' => 'Laporan Data Kematian',
            'menu' => 'laporan',
            'submenu' => 'laporan_kematian',
            'isi' => 'kematian/laporan_view',
            'kematian' => $this->Model_kematian->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function ViewLaporanBulanan()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        $data = [
            'judul' => 'Laporan Kematian',
            'databulanan' => $this->Model_kematian->DataBulanan($bulan, $tahun),
        ];

        $response = [
            'data' => view('kematian/kematian_tabel', $data)
        ];

        echo json_encode($response);
    }

    public function Print($bulan, $tahun)
    {
        $data = [
            'title' => 'Laporan Kematian',
            'kematian' => $this->Model_kematian->DataBulanan($bulan, $tahun),
            'web' => $this->Model_home->Web(),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        return view('kematian/print_view', $data);
    }



    public function Insert()
    {
        $data = [
            'id_penduduk' => $this->request->getPost('id_penduduk'),
            'tempat_kematian' => $this->request->getPost('tempat_kematian'),
            'tgl_kematian' => $this->request->getPost('tgl_kematian'),
            'penyebab' => $this->request->getPost('penyebab'),
        ];

        $data2 = [
            'id_penduduk' => $this->request->getPost('id_penduduk'),
            'status' => '2',
            'update_at' => date('Y-m-d'),
        ];
        $this->Model_kematian->InsertData($data);
        $this->Model_kematian->UpdateDataPenduduk($data2);
        session()->setFlashdata('pesan', 'Data Kematian Berhasil Ditambahkan');
        return redirect()->to(base_url('Kematian'));
    }

    public function Update($id_kematian)
    {
        $data = [

            'id_kematian' => $id_kematian,
            'tempat_kematian' => $this->request->getPost('tempat_kematian'),
            'tgl_kematian' => $this->request->getPost('tgl_kematian'),
            'penyebab' => $this->request->getPost('penyebab'),
        ];
        $this->Model_kematian->UpdateData($data);

        session()->setFlashdata('pesan', 'Data Kematian Berhasil Diupdate !!');
        return redirect()->to(base_url('Kematian'));
    }

    public function Delete($id_kematian, $id_penduduk)
    {
        $data = [
            'id_kematian' => $id_kematian,
        ];

        $data2 = [
            'id_penduduk' => $id_penduduk,
            'status' => '1',
        ];

        $this->Model_kematian->DeleteData($data);
        $this->Model_kematian->UpdateDataPenduduk($data2);
        session()->setFlashdata('pesan', 'Data Kematian Berhasil Dihapus !!');
        return redirect()->to(base_url('Kematian'));
    }
}
