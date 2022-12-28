<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-people-fill"></i> Penerima Banruan</h4>
          <div class="col-sm-1">
                <br>
                <button onclick="PrintLaporan()" class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i> Print</button>
              </div>

          <table class="table table-striped table-bordered small">
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
        </div>
      </div>
    </div>
  </div>
</section>
</main>


<?php foreach ($penerima as $w => $value) { ?>

  <!-- start Vertically centered Modal-->
  <div class="modal fade" id="edit<?= $value['id_penduduk'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ganti Jenis Bantuan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('Bantuan/UpdatePenerima/' . $value['id_penduduk']) ?>
        <div class="modal-body">

          <div class="col-12">
            <label for="">Jenis Bantuan</label>
            <select name="id_bantuan" class="form-select">
              <?php foreach ($bantuan as $key => $value) { ?>
                <option value="<?= $value['id_bantuan'] ?>"><?= $value['jenis_bantuan'] ?></option>
              <?php } ?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

<?php } ?>


<script>
  function PrintLaporan() {

    NewWin = window.open('<?= base_url('Bantuan/PrintLaporan/') ?>', 'NewWin', 'toolbar=no, width=1500,height=800,scrollbars=yes');
    newWin.document.write();
    newWin.document.close();
    setTimeout(function() {
      newWin.close();
    }, 10);
  }
</script>