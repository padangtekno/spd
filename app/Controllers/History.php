<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelHistory;
use App\Models\Model_home;
use Dompdf\Dompdf;

class History extends BaseController
{
    public function __construct()
    {
        $this->ModelHistory = new ModelHistory();
        $this->Model_home = new Model_home();
    }

    public function index()
    {
        $data = [
            'title' => 'History',
            'menu' => 'history',
            'submenu' => '',
            'penduduk' => $this->ModelHistory->alldata(),
            'isi' => 'v_history',
        ];
        return view('layout/wrapper_view', $data);
    }

    public function SkLahir($id_penduduk)
    {
        $data = [
            'title' => 'History',
            'judul' => 'Surat Keterangan Lahir',
            'web' => $this->Model_home->Web(),
            'penduduk' => $this->ModelHistory->DetailLahir($id_penduduk),
        ];
        $html = view('sk/v_sk_lahir', $data);


        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);


        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'Portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // // Output the generated PDF to Browser
        $dompdf->stream('sk_lahir.pdf', array("Attachment" => 0));
    }

    public function SkKematian($id_penduduk)
    {
        $data = [
            'title' => 'History',
            'judul' => 'Surat Keterangan Lahir',
            'web' => $this->Model_home->Web(),
            'penduduk' => $this->ModelHistory->DetailKematian($id_penduduk),
        ];
        $html = view('sk/v_sk_kematian', $data);


        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);


        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'Portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // // Output the generated PDF to Browser
        $dompdf->stream('sk_lahir.pdf', array("Attachment" => 0));
    }
}
