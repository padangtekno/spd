<?php

namespace App\Controllers;

use App\Models\Model_home;
use App\Models\Model_wilayah;
use App\Models\Model_pendidikan;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Model_home = new Model_home();
        $this->Model_wilayah = new Model_wilayah();
        $this->Model_pendidikan = new Model_pendidikan();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'menu' => 'dashboard',
            'submenu' => 'dashboard',
            'isi' => 'home_view',
            'total_keluarga' => $this->Model_home->total_keluarga(),
            'total_penduduk' => $this->Model_home->total_penduduk(),
            'total_kelahiran' => $this->Model_home->total_kelahiran(),
            'total_kematian' => $this->Model_home->total_kematian(),
            'total_pindah' => $this->Model_home->total_pindah(),
            'total_pengguna' => $this->Model_home->total_pengguna(),
            'total_l' => $this->Model_home->total_L(),
            'total_p' => $this->Model_home->total_P(),
            'total_lahir_p' => $this->Model_home->total_lahir_P(),
            'total_lahir_l' => $this->Model_home->total_lahir_L(),
            'pendidikan' => $this->Model_pendidikan->AllData(),

        ];
        return view('layout/wrapper_view', $data);
    }

    public function setting()
    {
        $data = array(
            'title' => 'Setting Website',
            'menu' => 'setting',
            'submenu' => '',
            'web' => $this->Model_home->Web(),
            'provinsi' => $this->Model_wilayah->allProvinsi(),
            'isi' => 'setting_view',
        );
        return view('layout/wrapper_view', $data);
    }

    public function UpdateSetting()
    {
        if ($this->validate([
            'nama_desa' => [
                'label' => 'Nama Desa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'id_provinsi' => [
                'label' => 'Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
            'id_kabupaten' => [
                'label' => 'Kabupaten',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!',
                ]
            ],
            'id_kecamatan' => [
                'label' => 'Kecamatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'kepala_desa' => [
                'label' => 'Kepala Desa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'kode_pos' => [
                'label' => 'Kode POS',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'logo' => [
                'label' => 'Logo Desa',
                'rules' =>
                'max_size[logo,1024]|mime_in[logo,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran {field} Maximal 1024 KB',
                    'mime_in' => 'Format {field} wajib PNG, JPG, JPEG',
                ],
            ],
        ])) {
            $web = $this->Model_home->Web();
            $logo = $this->request->getFile('logo');
            if ($logo->getError() == 4) {
                $nama_file = $web['logo'];
            } else {
                $nama_file = $logo->getRandomName();
                $logo->move('foto', $nama_file);
            }
            $data = [
                'id' => '1',
                'nama_desa' => $this->request->getPost('nama_desa'),
                'kepala_desa' => $this->request->getPost('kepala_desa'),
                'kode_pos' => $this->request->getPost('kode_pos'),
                'id_provinsi' => $this->request->getPost('id_provinsi'),
                'id_kabupaten' => $this->request->getPost('id_kabupaten'),
                'id_kecamatan' => $this->request->getPost('id_kecamatan'),
                'logo' =>  $nama_file,
            ];
            $this->Model_home->UpdateSetting($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
            return redirect()->to(base_url('Home/setting'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Home/setting'))->withInput();
        }
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
