<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

          <table class="table table-sm table-borderless">
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
              <th width="170px">Alamat</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['alamat'] ?></td>
            </tr>
            <tr>
              <th width="170px">RT</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['rt'] ?></td>
            </tr>
            <tr>
              <th width="170px">RW</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['rw'] ?></td>
            </tr>
            <tr>
              <th width="170px">Desa</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['desa'] ?></td>
            </tr>
            <tr>
              <th width="170px">Kecamatan</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['nama_kecamatan'] ?></td>
            </tr>
            <tr>
              <th width="170px">Kabupaten</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['nama_kabupaten'] ?></td>
            </tr>
            <tr>
              <th width="170px">Provinsi</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['nama_provinsi'] ?></td>
            </tr>
            <tr>
              <th width="170px">Kode Pos</th>
              <td width="50px" class="text-center">:</td>
              <td><?= $keluarga['kode_pos'] ?></td>
            </tr>

          </table>
          <h5 class="card-title">Data Anggota Keluarga</h5>

          <table class="table table-striped table-bordered small">
            <tr class="text-center">
              <th width="50px">No</th>
              <th width="180px">NIK</th>
              <th>Nama</th>
              <th width="200px">Tempat, Tanggal lahir</th>
              <th width="150px">Jenis Kelamin</th>
              <th width="150px">Agama</th>
              <th width="150px">Hubungan</th>
              <th width="150px">Penghasilan</th>
              <th width="150px"></th>
            </tr>

            <?php $no = 1;
            foreach ($anggota as $key => $a) {

              $jml[] = $a['penghasilan'];

            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td class="text-center"><?= $a['nik'] ?></td>
                <td><?= $a['nama'] ?></td>
                <td><?= $a['tempat_lahir'] ?>, <?= $a['tgl_lahir'] ?></td>
                <td><?= $a['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                <td class="text-center"><?= $a['agama'] ?></td>
                <td class="text-center"><?= $a['hubungan_keluarga'] ?></td>
                <td class="text-center">Rp. <?= number_format($a['penghasilan'], 0) ?></td>
                <td>
                  <a href="<?= base_url('Keluarga/DetailAnggota/' . $a['id_penduduk']) ?>" class="btn btn-success btn-sm"><i class="bi-info-circle"></i></button>
                </td>
              </tr>
            <?php } ?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th></th>
              <th>Rp. <?= $anggota == null ? '0' : number_format(array_sum($jml), 0) ?></th>
              <td></td>
            </tr>

          </table>

          <a href="<?= base_url('Keluarga') ?>" class="btn btn-success btn-sm">Kembali</a>
        </div>
      </div>
</section>