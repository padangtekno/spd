<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>


</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->


<body>

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->


  <table style="border: 0px;" width="100%">
    <tr style="border: 0px;">
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


  <center>
    <h4>SURAT KENAL LAHIR</h4>
    <p>Nomor : <?= $penduduk['id_penduduk'] ?>/2023</p>
  </center>


  <p>
    Yang bertanda tangan di bawah ini Kepala Desa Situhiang Kecamatan Pagelaran Kabupaten Cianjur, menerangkan bahwa pada :
  </p>

  <?php
  $tanggal = $penduduk['tgl_lahir'];
  $day = date('D', strtotime($tanggal));
  $dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
  );
  ?>
  <table class="table">

    <tr>
      <td>Hari</td>
      <td>:</td>
      <td><?= $dayList[$day] ?></td>
    </tr>

    <tr>
      <td>Tempat Lahir</td>
      <td>:</td>
      <td><?= $penduduk['tempat_lahir'] ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><?= date('d M Y', strtotime($penduduk['tgl_lahir'])) ?></td>
    </tr>
    <tr>
      <td>Telah Lahir Seorang Anak </td>
      <td>:</td>
      <td><?= $penduduk['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
    </tr>
    <tr>
      <td>Bernama</td>
      <td>:</td>
      <td><?= $penduduk['nama'] ?></td>
    </tr>
    <tr>
      <td>Dari Seorang Ibu Bernama</td>
      <td>:</td>
      <td><?= $penduduk['nama_ibu'] ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?= $penduduk['agama'] ?></td>
    </tr>
    <tr>
      <td>Istri Dari</td>
      <td>:</td>
      <td><?= $penduduk['nama_ayah'] ?></td>
    </tr>
    <br>
    <p>Demikian Surat keterangan ini dibuat atas dasar yang sebenarnya.</p>

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