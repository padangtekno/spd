<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="padding-10mm">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->


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

  <table border="1" cellspacing="0" cellpadding="2" width="100%">
    <thead>
      <tr class="text-center">
        <th scope="col" width="60px">No</th>
        <th scope="col">No. KK</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Penghasilan</th>
        <th scope="col">Tmp, Tgl Lahir</th>
        <th scope="col">Umur</th>
        <th scope="col">Penerima Bantuan</th>
        <th scope="col">Jenis Bantuan</th>

      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($penerima as $w => $value) { ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $value['no_kk']; ?></td>
          <td><?= $value['nik']; ?></td>
          <td><?= $value['nama']; ?></td>
          <td><?= $value['penghasilan']; ?></td>
          <td><?= $value['tempat_lahir']; ?>, <?= date('d M Y', strtotime($value['tgl_lahir'])) ?></td>
          <td>
            <?php
            $birthDate = new \DateTime($value['tgl_lahir']);
            $today = new \DateTime("today");
            if ($birthDate > $today) {
              return "0 tahun 0 bulan 0 hari";
            }
            $y = $today->diff($birthDate)->y;
            // dd($y);
            $m = $today->diff($birthDate)->m;
            $d = $today->diff($birthDate)->d;

            echo $y . " tahun " . $m . " bulan " . $d . " hari"
            ?>

          </td>
          <td width="100px" class="text-center"><?= $value['penerima_bantuan'] == 1 ? '<span class="badge bg-success">Layak</span>' : '' ?></td>
          <td><?= $value['jenis_bantuan']; ?></td>

        </tr>
      <?php } ?>

    </tbody>
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


</body>

</html>