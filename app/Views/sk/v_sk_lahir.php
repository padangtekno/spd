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
    <p>Nomor : /2023</p>
  </center>




  <table class="table">

    <tr>
      <td>Hari</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Tempat/Tanggal Lahir</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Telah lahir seorang anak </td>
      <td>:</td>
      <td></td>
    </tr>

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