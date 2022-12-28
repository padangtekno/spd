<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="<?= base_url('paper') ?>/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        body {
            font-size: 10pt;
            font-family: Arial, Helvetica, sans-serif;
            color: #000;
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">

        <table style="border: 0px;" width="100%">
            <tr style="border: 0px;">
                <td style="border: 0px;"><img src="<?= base_url('foto/' . $web['logo']) ?>" width="100px"></td>
                <td style="border: 0px;">
                    <p>
                        <center>
                            <font size="6" face="arial"><b style="text-transform:uppercase;"><?= $web['nama_desa'] ?></b></font><br>
                            <font face="arial" size="2">
                                KEC. <?= $web['nama_kecamatan'] ?>, KAB. <?= $web['nama_kabupaten'] ?>, Prov. <?= $web['nama_provinsi'] ?><br>
                            </font>
                            <font face="arial" size="2">

                            </font>
                        </center>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-bottom:4px solid black;"></td>
            </tr>
        </table>

        <br>
        <center>
            <font size="4" face="arial"><b><?= $title ?></b></font>
        </center>
        <br>
        <b>Bulan :</b> <?= $bulan ?> <b>Tahun :</b> <?= $tahun ?>
        <table border="1" cellspacing="0" cellpadding="2" width="100%">
            <tr class="text-center">
                <th scope="col" width="30px">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Meninggal</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Penyebab</th>
            </tr>
            <?php $no = 1;
            foreach ($kematian as $key => $k) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $k['nik'] ?></td>
                    <td><?= $k['nama'] ?></td>
                    <td><?= $k['tempat_kematian'] ?></td>
                    <td><?= $k['tgl_kematian'] ?></td>
                    <td><?= $k['penyebab'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <center>
            <table width="100%">
                <tr>
                    <td width="30%">

                    </td>
                    <td width="30%">

                    </td>
                    <!-- tanda tangan -->
                    <td width="30%">

                        <p>
                            <?= $web['nama_desa'] ?>, <?= date('d M Y') ?> <br /><strong><span>Kepala Desa</span></strong>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <strong><?= $web['kepala_desa'] ?><br />
                            </strong>
                        </p>

                    </td>
                    <!-- akhir tanda tangan -->
                </tr>
            </table>
        </center>
    </section>

</body>

</html>