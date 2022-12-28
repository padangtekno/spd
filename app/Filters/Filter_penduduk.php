<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Filter_penduduk implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('level') == "") {
            session()->setFlashdata('pesan', 'Belum Login, Silahkan Login Terlebih Dahulu');
            return redirect()->to(base_url('auth'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('level') == 3) {
            return redirect()->to(base_url('HomePenduduk'));
        }
    }
}
