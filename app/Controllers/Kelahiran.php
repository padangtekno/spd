<?php

namespace App\Controllers;

use App\Models\Model_kelahiran;
use App\Models\Model_keluarga;
use App\Models\Model_home;

class Kelahiran extends BaseController
{
    public function __construct()
    {
        $this->Model_kelahiran = new Model_kelahiran();
        $this->Model_keluarga = new Model_keluarga();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kelahiran',
            'menu' => 'kelahiran',
            'submenu' => '',
            'data_kelahiran' => $this->Model_kelahiran->alldata(),
            'isi' => 'kelahiran/kelahiran_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Tambah Data Kelahiran',
            'isi' => 'kelahiran/kelahiran_add',
            'menu' => 'kelahiran',
            'submenu' => '',
            'keluarga' => $this->Model_keluarga->alldata(),
        ];
        return view('layout/wrapper_view', $data);
    }
    public function Insert()
    {
        if ($this->validate([
            'no_kk' => [
                'label' => 'Keluarga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'jam_lahir' => [
                'label' => 'Jam Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'nama_ayah' => [
                'label' => 'Nama Ayah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'nama_ibu' => [
                'label' => 'Nama Ibu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'nama' => [
                'label' => 'Nama Bayi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'tgl_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'jk' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],
            'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajid Diisi !'
                ]
            ],

        ])) {
            //insert ke tabel kelahiran
            $id_penduduk = $this->Model_kelahiran->CekIdPenduduk();
            $data = [
                'id_penduduk' => $id_penduduk,
                'jam_lahir' => $this->request->getPost('jam_lahir'),
                'nama_ayah' => $this->request->getPost('nama_ayah'),
                'nama_ibu' => $this->request->getPost('nama_ibu'),
            ];
            $this->Model_kelahiran->add($data);
            //insert ke tabel penduduk
            $data2 = [
                'hubungan_keluarga' => 'Anak',
                'nama' => $this->request->getPost('nama'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'no_kk' => $this->request->getPost('no_kk'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'status' => '4',
                'update_at' => date('Y-m-d'),
            ];
            $this->Model_kelahiran->InsertPenduduk($data2);
            session()->setFlashdata('pesan', 'Data Kelahiran Berhasil Ditambahkan');
            return redirect()->to(base_url('Kelahiran'));
        } else {
            //jika tidak valid
            return redirect()->to(base_url('Kelahiran/add'))->withInput();
        }
    }



    public function Laporan()
    {
        $data = [
            'title' => 'Laporan Kelahiran',
            'menu' => 'laporan',
            'submenu' => 'laporan_kelahiran',
            'data_kelahiran' => $this->Model_kelahiran->alldata(),
            'isi' => 'kelahiran/laporan_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function ViewLaporanBulanan()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        $data = [
            'judul' => 'Laporan Kelahiran',
            'databulanan' => $this->Model_kelahiran->DataBulanan($bulan, $tahun),
        ];

        $response = [
            'data' => view('kelahiran/kelahiran_tabel', $data)
        ];

        echo json_encode($response);
    }

    public function Print($bulan, $tahun)
    {
        $data = [
            'title' => 'Laporan Kelahiran',
            'data_kelahiran' => $this->Model_kelahiran->DataBulanan($bulan, $tahun),
            'web' => $this->Model_home->Web(),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        return view('kelahiran/print_view', $data);
    }
}
