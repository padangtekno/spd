<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_keluarga;
use App\Models\Model_wilayah;
use App\Models\Model_home;

class Keluarga extends BaseController
{
    public function __construct()
    {
        $this->Model_keluarga = new Model_keluarga();
        $this->Model_wilayah = new Model_wilayah();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Keluarga',
            'menu' => 'keluarga',
            'submenu' => 'keluarga',
            'data_keluarga' => $this->Model_keluarga->alldata(),
            'isi' => 'keluarga/keluarga_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Tambah Data Keluarga',
            'menu' => 'keluarga',
            'submenu' => 'keluarga',
            'isi' => 'keluarga/keluarga_add',
            'provinsi' => $this->Model_wilayah->allProvinsi(),
            'web' => $this->Model_home->Web(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function insert()
    {
        if ($this->validate([
            'no_kk' => [
                'label' => 'No KK',
                'rules' => 'required|numeric|is_unique[tbl_keluarga.no_kk]|numeric',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                    'numeric' => '{field} harus diisi dengan angka',
                    'is_unique' => '{field} ini sudah terdaftar',
                ],
            ],
            'kepala_keluarga' => [
                'label' => 'Kepala Keluarga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'rt' => [
                'label' => 'RT',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'rw' => [
                'label' => 'Kecamatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'desa' => [
                'label' => 'Desa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'kode_pos' => [
                'label' => 'Kode POS',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
        ])) {
            //jika valid
            $data = [
                'no_kk' => $this->request->getPost('no_kk'),
                'kepala_keluarga' => $this->request->getPost('kepala_keluarga'),
                'alamat' => $this->request->getPost('alamat'),
                'id_provinsi' => $this->request->getPost('id_provinsi'),
                'id_kabupaten' => $this->request->getPost('id_kabupaten'),
                'id_kecamatan' => $this->request->getPost('id_kecamatan'),
                'alamat' => $this->request->getPost('alamat'),
                'rt' => $this->request->getPost('rt'),
                'rw' => $this->request->getPost('rw'),
                'desa' => $this->request->getPost('desa'),
                'kode_pos' => $this->request->getPost('kode_pos'),
            ];
            $this->Model_keluarga->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('Keluarga'));
        } else {
            //jika tidak valid
            return redirect()->to(base_url('Keluarga/add'))->withInput();
        }
    }

    public function edit($id_keluarga)
    {

        $data = [
            'title' => 'Edit Data Keluarga',
            'isi' => 'keluarga/keluarga_edit',
            'menu' => 'keluarga',
            'submenu' => 'keluarga',
            'web' => $this->Model_home->Web(),
            'provinsi' => $this->Model_wilayah->allProvinsi(),
            'keluarga' => $this->Model_keluarga->detail_data($id_keluarga),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Update($id_keluarga)
    {
        if ($this->validate([
            'no_kk' => [
                'label' => 'No KK',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                    'numeric' => '{field} harus diisi dengan angka',
                ],
            ],
            'kepala_keluarga' => [
                'label' => 'Kepala Keluarga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],

            'alamat' => [
                'label' => 'alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'rt' => [
                'label' => 'rt',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'rw' => [
                'label' => 'rw',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
        ])) {
            //jika valid
            $data = [
                'id_keluarga' => $id_keluarga,
                'no_kk' => $this->request->getPost('no_kk'),
                'kepala_keluarga' => $this->request->getPost('kepala_keluarga'),
                'alamat' => $this->request->getPost('alamat'),
                'rt' => $this->request->getPost('rt'),
                'rw' => $this->request->getPost('rw'),
            ];
            $this->Model_keluarga->edit($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diupdate');
            return redirect()->to(base_url('Keluarga'));
        } else {
            //jika tidak valid
            return redirect()->to(base_url('Keluarga/add'))->withInput();
        }
    }


    public function delete($id_keluarga)
    {
        $data = [
            'id_keluarga' => $id_keluarga,
        ];
        $this->Model_keluarga->delete_keluarga($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Keluarga'));
    }

    public function Rincian($no_kk)
    {
        $data = [
            'title' => 'Rincian Data Keluarga',
            'isi' => 'keluarga/keluarga_rincian',
            'menu' => 'keluarga',
            'submenu' => 'keluarga',
            'keluarga' => $this->Model_keluarga->RincianData($no_kk),
            'anggota' => $this->Model_keluarga->AllAnggota($no_kk),
        ];
        return view('layout/wrapper_view', $data);
    }



    public function kabupaten()
    {
        $id_provinsi = $this->request->getPost('id_provinsi');
        $kab = $this->Model_wilayah->allKabupaten($id_provinsi);
        echo '<option value="">--Pilih Kabupaten--</option>';
        foreach ($kab as $d) {
            echo "<option value=" . $d['id_kabupaten'] . ">" . $d['nama_kabupaten'] . "</option>";
        }
    }

    public function kecamatan()
    {
        $id_kabupaten = $this->request->getPost('id_kabupaten');
        $kab = $this->Model_wilayah->allKecamatan($id_kabupaten);
        echo '<option value="">--Pilih Kecamatan--</option>';
        foreach ($kab as $d) {
            echo "<option value=" . $d['id_kecamatan'] . ">" . $d['nama_kecamatan'] . "</option>";
        }
    }
}
