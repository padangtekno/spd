<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
  <table class="table table-borderless small">
    <tr>
      <th width="170px">Nomor KK</th>
      <td width="50px" class="text-center">:</td>
      <td><?= $keluarga['no_kk'] ?></td>
    </tr>
    <tr>
      <th width="170px">Kepala Keluarga</th>
      <td width="50px" class="text-center">:</td>
      <td><?= $keluarga['kepala_keluarga'] ?></td>
    </tr>
    <tr>
      <th width="170px">Provinsi</th>
      <td width="50px" class="text-center">:</td>
      <td><?= $keluarga['nama_provinsi'] ?></td>
    </tr>
    <tr>
      <th width="170px">Kabupaten</th>
      <td width="50px" class="text-center">:</td>
      <td><?= $keluarga['nama_kabupaten'] ?></td>
    </tr>
    <tr>
      <th width="170px">Kecamatan</th>
      <td width="50px" class="text-center">:</td>
      <td><?= $keluarga['nama_kecamatan'] ?></td>
    </tr>

  </table>
  <h5 class="card-title">Data Anggota Keluarga</h5>

  <table class="table table-bordered table-striped small">
    <tr class="text-center">
      <th width="50px">No</th>
      <th width="180px">NIK</th>
      <th>Nama</th>
      <th width="200px">Tempat, Tanggal lahir</th>
      <th width="150px">Jenis Kelamin</th>
      <th width="150px">Agama</th>
      <th width="150px">Hubungan</th>
    </tr>

    <?php $no = 1;
    foreach ($anggota as $key => $a) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td class="text-center"><?= $a['nik'] ?></td>
        <td><?= $a['nama'] ?></td>
        <td><?= $a['tempat_lahir'] ?>, <?= $a['tgl_lahir'] ?></td>
        <td><?= $a['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
        <td class="text-center"><?= $a['agama'] ?></td>
        <td class="text-center"><?= $a['hubungan_keluarga'] ?></td>

      </tr>
    <?php } ?>

  </table>
  <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

