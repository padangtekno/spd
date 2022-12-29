<table class="table datatable table-bordered small">
  <thead>
    <tr class="text-center">
      <th scope="col" width="30px">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat Pindah</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Klasifikasi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
    foreach ($databulanan as $key => $p) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $p['nik'] ?></td>
        <td><?= $p['nama'] ?></td>
        <td><?= $p['alamat_pindah'] ?></td>
        <td><?= $p['tgl_pindah'] ?></td>
        <td><?= $p['klasifikasi_pindah'] ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>