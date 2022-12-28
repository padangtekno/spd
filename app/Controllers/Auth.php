<?php

namespace App\Controllers;

use App\Models\Model_auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_auth = new Model_auth();
    }
    public function index()
    {
        session();
        $validasi = \Config\Services::validation();
        $data = array(
            'title' => 'Login | SPD-Desa Situhiang',
            'validasi' => $validasi,
        );
        return view('login_view', $data);
    }
    public function login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Jangan dikosongkan, Wajid Diisi !'
                ]
            ]
        ])) {
            //jika validd
            $username = $this->request->getPost('username');
            $level = $this->request->getPost('level');
            $password = sha1($this->request->getPost('password'));
            if ($level == 1 or $level == 2) {
                $cek = $this->Model_auth->login($username, $password, $level);
                if ($cek) {
                    //jika data ada di database
                    session()->set('level', $level);
                    session()->set('nama_user', $cek['nama_user']);
                    session()->set('username', $cek['username']);
                    session()->set('foto', $cek['foto']);
                    return redirect()->to(base_url('home'));
                } else {
                    session()->setFlashdata('pesan', 'Login Gagal !!!, Username atau Password salah');
                    return redirect()->to(base_url('auth/index'));
                }
            }
        } else {
            //jika tidak valid
            return redirect()->to(base_url('auth/index'))->withInput();
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('foto');
        session()->remove('level');
        session()->remove('nik');
        session()->remove('no_kk');
        session()->setFlashdata('pesan', 'Logout Berhasil');
        return redirect()->to(base_url('auth'));
    }
}
