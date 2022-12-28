<?php

namespace App\Controllers;

use App\Models\Model_pengguna;
use App\Models\Model_jabatan;

class Pengguna extends BaseController
{
    public function __construct()
    {
        $this->Model_pengguna = new Model_pengguna();
        $this->Model_jabatan = new Model_jabatan();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Pengguna Sistem',
            'menu' => 'master-data',
            'submenu' => 'pengguna',
            'pengguna' => $this->Model_pengguna->alldata(),
            'isi' => 'pengguna/pengguna_view',
        ];
        return view('layout/wrapper_view', $data);
    }
    public function add()
    {
        $data = [
            'title' => 'Tambah Pengguna',
            'menu' => 'master-data',
            'submenu' => 'pengguna',
            'isi' => 'pengguna/pengguna_add',
            'jabatan' => $this->Model_jabatan->alldata(),

        ];
        return view('layout/wrapper_view', $data);
    }
    public function insert()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' =>
                    '{field} Jangan dikosongkan, Wajid Diisi !',
                ],
            ],
            'foto' => [
                'label' => 'Foto',
                'rules' =>
                'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg, image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} Jangan dikosongkan, Wajid Diisi !',
                    'max_size' => 'Ukuran {field} Maximal 1024 KB',
                    'mime_in' => 'Format {field} wajib PNG, JPG, JPEG',
                ],
            ],
        ])) {
            //ambil file foto yang akan diupload
            $foto = $this->request->getFile('foto');
            //random nama file foto
            $nama_file = $foto->getRandomName();

            //jika valid
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'username' => $this->request->getPost('username'),
                'password' => sha1($this->request->getPost('password')),
                'level' => $this->request->getPost('level'),
                'foto' => $nama_file,
            ];

            $foto->move('foto', $nama_file); //folder upload file

            $this->Model_pengguna->add($data);
            session()->setFlashdata('pesan', 'Pengguna Berhasil Ditambahkan');
            return redirect()->to(base_url('pengguna'));
        } else {
            //jika tidak valid
            return redirect()
                ->to(base_url('pengguna/add'))
                ->withInput();
        }
    }
    public function edit($id_users)
    {
        $data = [
            'title' => 'Edit Pengguna',
            'menu' => 'master-data',
            'submenu' => 'pengguna',
            'jabatan' => $this->Model_jabatan->alldata(),
            'pengguna' => $this->Model_pengguna->detail_data($id_users),
            'isi' => 'pengguna/pengguna_edit',
        ];
        return view('layout/wrapper_view', $data);
    }
    public function update($id_users)
    {
        if (
            $this->validate([
                'nama_user' => [
                    'label' => 'Nama User',
                    'rules' => 'required',
                    'errors' => [
                        'required' =>
                        '{field} Jangan dikosongkan, Wajid Diisi !',
                    ],
                ],
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' =>
                        '{field} Jangan dikosongkan, Wajid Diisi !',
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' =>
                        '{field} Jangan dikosongkan, Wajid Diisi !',
                    ],
                ],
                'level' => [
                    'label' => 'Level',
                    'rules' => 'required',
                    'errors' => [
                        'required' =>
                        '{field} Jangan dikosongkan, Wajid Diisi !',
                    ],
                ],

                'foto' => [
                    'label' => 'Foto',
                    'rules' =>
                    'max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                    'errors' => [
                        'max_size' => 'Ukuran {field} Maximal 1024 KB',
                        'mime_in' => 'Format {field} wajib PNG, JPG, JPEG',
                    ],
                ],
            ])
        ) {
            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {
                $data = [
                    'id_users' => $id_users,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    // 'foto' =>  $nama_file,
                ];
                // $foto->move('foto', $nama_file); //folder upload file
                $this->Model_pengguna->edit($data);
            } else {

                $nama_file = $foto->getRandomName(); //random nama file foto
                $data = [
                    'id_users' => $id_users,
                    'nama_user' => $this->request->getPost('nama_user'),
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    'foto' => $nama_file,
                ];
                $foto->move('foto', $nama_file); //folder upload file
                $this->Model_pengguna->edit($data);
            }

            session()->setFlashdata('pesan', 'Pengguna Berhasil Diupdate');
            return redirect()->to(base_url('pengguna'));
        } else {
            //jika tidak valid
            session()->setFlashdata(
                'errors',
                \Config\Services::validation()->getErrors()
            );
            return redirect()->to(base_url('pengguna/edit/' . $id_users));
        }
    }
    public function delete($id_users)
    {
        //menghapus foto sebelumnya dan diganti dengan foto baru
        $pengguna = $this->Model_pengguna->detail_data($id_users);
        if ($pengguna['foto'] != '') {
            unlink('foto/' . $pengguna['foto']);
        }

        $data = [
            'id_users' => $id_users,
        ];
        $this->Model_pengguna->delete_pengguna($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('pengguna'));
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail Pengguna',
            'pengguna' => $this->Model_pengguna->alldata(),
            'isi' => 'pengguna/pengguna_detail',
        ];
        return view('layout/wrapper_view', $data);
    }
}
