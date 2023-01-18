<?php

namespace App\Controllers;

use App\Models\Model_penduduk;
use App\Models\Model_keluarga;
use App\Models\Model_wilayah;
use App\Models\Model_pekerjaan;
use App\Models\Model_pendidikan;
use App\Models\Model_penghasilan;


class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->Model_penduduk = new Model_penduduk();
        $this->Model_keluarga = new Model_keluarga();
        $this->Model_wilayah = new Model_wilayah();
        $this->Model_pekerjaan = new Model_pekerjaan();
        $this->Model_pendidikan = new Model_pendidikan();
        $this->Model_penghasilan = new Model_penghasilan();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Penduduk',
            'menu' => 'penduduk',
            'submenu' => '',
            'data_penduduk' => $this->Model_penduduk->alldata(),
            'isi' => 'penduduk/penduduk_view',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function Detail($id_penduduk)
    {
        $penduduk = $this->Model_penduduk->detail_data($id_penduduk);

        $data = [
            'title' => 'Detail Data Penduduk',
            'menu' => 'penduduk',
            'submenu' => '',
            'penduduk' => $this->Model_penduduk->detail_data($id_penduduk),
            'isi' => 'penduduk/penduduk_detail',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Tambah Data Penduduk',
            'menu' => 'penduduk',
            'submenu' => '',
            'isi' => 'penduduk/penduduk_add',
            'keluarga' => $this->Model_keluarga->alldata(),
            'provinsi' => $this->Model_wilayah->allProvinsi(),
            'pekerjaan' => $this->Model_pekerjaan->AllData(),
            'pendidikan' => $this->Model_pendidikan->AllData(),
            'penghasilan' => $this->Model_penghasilan->AllData(),
        ];
        return view('layout/wrapper_view', $data);
    }

    public function insert()
    {
        if ($this->validate([
            'no_kk' => [
                'label' => 'No KK',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                    'numeric' => '{field} Harus diisi dengan angka',
                ],
            ],
            'nik' => [
                'label' => 'NIK',
                'rules' => 'required|is_unique[tbl_penduduk.nik]',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                    'is_unique' => '{field} Sudah terdaftar',
                    'numeric' => '{field} Harus diisi dengan angka',
                ],
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'tgl_lahir' => [
                'label' => 'Tanggal Lhir',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'jk' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'status_perkawinan' => [
                'label' => 'Status Perkawinan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'id_pendidikan' => [
                'label' => 'Pendidikan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'id_pekerjaan' => [
                'label' => 'Pekerjaan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'penghasilan' => [
                'label' => 'Penghasilan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'status_tinggal' => [
                'label' => 'Status Tinggal',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'gol_darah' => [
                'label' => 'Golongan Darah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'kewarganegaraan' => [
                'label' => 'Kewarganegaraan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'hubungan_keluarga' => [
                'label' => 'Hubungan Keluarga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
        ])) {
            //jika valid
            $data = [
                'no_kk' => $this->request->getPost('no_kk'),
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'status_perkawinan' => $this->request->getPost('status_perkawinan'),
                'id_pendidikan' => $this->request->getPost('id_pendidikan'),
                'id_pekerjaan' => $this->request->getPost('id_pekerjaan'),
                'penghasilan' => $this->request->getPost('penghasilan'),
                'status_tinggal' => $this->request->getPost('status_tinggal'),
                'gol_darah' => $this->request->getPost('gol_darah'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'hubungan_keluarga' => $this->request->getPost('hubungan_keluarga'),
                'password' => sha1(1234),
                'update_at' => date('Y-m-d'),
            ];
            $this->Model_penduduk->add($data);
            session()->setFlashdata('pesan', 'Penduduk Berhasil Ditambahkan');
            return redirect()->to(base_url('penduduk'));
        } else {
            //jika tidak valid
            return redirect()
                ->to(base_url('penduduk/add'))
                ->withInput();
        }
    }

    public function edit($id_penduduk)
    {

        $data = [
            'title' => 'Edit Data Penduduk',
            'menu' => 'penduduk',
            'submenu' => '',
            'keluarga' => $this->Model_keluarga->alldata(),
            'data_penduduk' => $this->Model_penduduk->detail_data($id_penduduk),
            'provinsi' => $this->Model_wilayah->allProvinsi(),
            'pekerjaan' => $this->Model_pekerjaan->AllData(),
            'pendidikan' => $this->Model_pendidikan->AllData(),
            'penghasilan' => $this->Model_penghasilan->AllData(),
            'isi' => 'penduduk/penduduk_edit',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function update($id_penduduk)
    {
        if ($this->validate([
            'no_kk' => [
                'label' => 'No KK',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                    'numeric' => '{field} Harus diisi dengan angka',
                ],
            ],
            'nik' => [
                'label' => 'NIK',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                    'numeric' => '{field} Harus diisi dengan angka',
                ],
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'tgl_lahir' => [
                'label' => 'Tanggal Lhir',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'jk' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'status_perkawinan' => [
                'label' => 'Status Perkawinan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'id_pendidikan' => [
                'label' => 'Pendidikan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'id_pekerjaan' => [
                'label' => 'Pekerjaan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'penghasilan' => [
                'label' => 'Penghasilan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'status_tinggal' => [
                'label' => 'Status Tinggal',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'gol_darah' => [
                'label' => 'Golongan Darah',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'kewarganegaraan' => [
                'label' => 'Kewarganegaraan',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'agama' => [
                'label' => 'Agama',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'hubungan_keluarga' => [
                'label' => 'Hubungan Keluarga',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
        ])) {
            $data = [
                'id_penduduk' => $id_penduduk,
                'no_kk' => $this->request->getPost('no_kk'),
                'nik' => $this->request->getPost('nik'),
                'nama' => $this->request->getPost('nama'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jk' => $this->request->getPost('jk'),
                'agama' => $this->request->getPost('agama'),
                'status_perkawinan' => $this->request->getPost('status_perkawinan'),
                'id_pendidikan' => $this->request->getPost('id_pendidikan'),
                'id_pekerjaan' => $this->request->getPost('id_pekerjaan'),
                'penghasilan' => $this->request->getPost('penghasilan'),
                'status_tinggal' => $this->request->getPost('status_tinggal'),
                'gol_darah' => $this->request->getPost('gol_darah'),
                'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
                'hubungan_keluarga' => $this->request->getPost('hubungan_keluarga'),
                'update_at' => date('Y-m-d'),
            ];
            $this->Model_penduduk->edit($data);
            session()->setFlashdata(
                'pesan',
                'Data Penduduk Berhasil Diperbarui'
            );
            return redirect()->to(base_url('penduduk'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()
                ->to(base_url('penduduk/edit/' . $id_penduduk))
                ->withInput('validasi', \Config\Services::validation());
        }
    }

    public function delete($id_penduduk)
    {
        $data = [
            'id_penduduk' => $id_penduduk,
        ];
        $this->Model_penduduk->delete_penduduk($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('penduduk'));
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
