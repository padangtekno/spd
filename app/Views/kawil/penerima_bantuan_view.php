<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-people-fill"></i> Data Penduduk</h4>
          <?php
          if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
          }

          ?>

          <table class="table" id="example">
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
                <?php if (session()->get('level') == '1') { ?>
                  <th scope="col" width="150px">Opsi</th>
                <?php } ?>
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
                  <td width="100px" class="text-center"><span class="badge bg-success">Layak</span></td>
                  <td><?= $value['jenis_bantuan']; ?></td>
                  <?php if (session()->get('level') == '1') { ?>
                    <td class="text-center">
                      <button class="btn btn-warning btn-sm"><i class="bi-pencil" data-bs-toggle="modal" data-bs-target="#edit<?= $value['id_penduduk']; ?>"></i></button>
                    </td>
                  <?php } ?>
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
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>