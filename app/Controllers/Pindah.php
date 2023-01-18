<?php

namespace App\Controllers;

use App\Models\Model_pindah;
use App\Models\Model_home;

class Pindah extends BaseController
{
    public function __construct()
    {
        $this->Model_pindah = new Model_pindah();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pindah',
            'menu' => 'pindah',
            'submenu' => '',
            'isi' => 'pindah/pindah_view',
            'pindah' => $this->Model_pindah->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Add()
    {
        $data = [
            'title' => 'Tambah Data Pindah',
            'isi' => 'pindah/pindah_add',
            'menu' => 'pindah',
            'submenu' => '',
            'penduduk' => $this->Model_pindah->AllDataPenduduk(),
            'pindah' => $this->Model_pindah->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Laporan()
    {
        $data = [
            'title' => 'Laporan Data Pindah',
            'menu' => 'laporan',
            'submenu' => 'laporan_pindah',
            'isi' => 'pindah/laporan_view',
            'pindah' => $this->Model_pindah->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function ViewLaporanBulanan()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        $data = [
            'judul' => 'Laporan Pindah',
            'databulanan' => $this->Model_pindah->DataBulanan(11, 2022),
        ];

        $response = [
            'data' => view('pindah/pindah_tabel', $data)
        ];

        echo json_encode($response);
    }

    public function Print($bulan, $tahun)
    {
        $data = [
            'title' => 'Laporan Pindah',
            'menu' => 'pindah',
            'submenu' => '',
            'pindah' => $this->Model_pindah->DataBulanan($bulan, $tahun),
            'web' => $this->Model_home->Web(),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        return view('pindah/print_view', $data);
    }

    public function Insert()
    {
        if ($this->validate([
            'id_penduduk' => [
                'label' => 'Nama Penduduk',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'tgl_pindah' => [
                'label' => 'Tanggal Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'alamat_pindah' => [
                'label' => 'Alamat Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'klasifikasi_pindah' => [
                'label' => 'Klasifikasi Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],

        ])) {
            $data = [
                'id_penduduk' => $this->request->getPost('id_penduduk'),
                'tgl_pindah' => $this->request->getPost('tgl_pindah'),
                'alamat_pindah' => $this->request->getPost('alamat_pindah'),
                'klasifikasi_pindah' => $this->request->getPost('klasifikasi_pindah'),
            ];
            $this->Model_pindah->InsertData($data);

            $data2 = [
                'id_penduduk' => $this->request->getPost('id_penduduk'),
                'status' => '3',
                'update_at' => date('Y-m-d'),
            ];
            $this->Model_pindah->UpdateDataPenduduk($data2);
            session()->setFlashdata('pesan', 'Data Pindah Berhasil Ditambahkan');
            return redirect()->to(base_url('Pindah'));
        } else {
            return redirect()->to(base_url('Pindah/add'))->withInput();
        }
    }

    public function Edit($id_pindah)
    {
        $data = [
            'title' => 'Edit Data Pindah',
            'isi' => 'pindah/pindah_edit',
            'menu' => 'pindah',
            'submenu' => '',
            'pindah' => $this->Model_pindah->DetailData($id_pindah),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Update($id_pindah)
    {
        if ($this->validate([

            'tgl_pindah' => [
                'label' => 'Tanggal Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'alamat_pindah' => [
                'label' => 'Alamat Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'klasifikasi_pindah' => [
                'label' => 'Klasifikasi Pindah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],

        ])) {
            $data = [
                'id_pindah' => $id_pindah,
                'tgl_pindah' => $this->request->getPost('tgl_pindah'),
                'alamat_pindah' => $this->request->getPost('alamat_pindah'),
                'klasifikasi_pindah' => $this->request->getPost('klasifikasi_pindah'),
            ];
            $this->Model_pindah->UpdateData($data);

            session()->setFlashdata('pesan', 'Data Pindah Berhasil Diupdate !!');
            return redirect()->to(base_url('Pindah'));
        } else {
            return redirect()->to(base_url('Pindah/add'))->withInput();
        }
    }

    public function Delete($id_pindah, $id_penduduk)
    {
        $data = [
            'id_pindah' => $id_pindah,
        ];

        $data2 = [
            'id_penduduk' => $id_penduduk,
            'status' => '1',
        ];

        $this->Model_pindah->DeleteData($data);
        $this->Model_pindah->UpdateDataPenduduk($data2);
        session()->setFlashdata('pesan', 'Data Pindah Berhasil Dihapus !!');
        return redirect()->to(base_url('Pindah'));
    }
}
