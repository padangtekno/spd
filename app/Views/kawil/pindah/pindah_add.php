<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <!--View Data Meninggal-->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            <i class="bi bi-person-dash-fill"></i>
            <?= $title ?>
          </h4>
          <?php
          session();
          $validasi = \Config\Services::validation();
          ?>

          <?php echo form_open('Pindah/Insert') ?>

          <div class="col-12">
            <label for="">Nama Penduduk</label>
            <select id="" name="id_penduduk" class="form-select select2">
              <option value="">-- Pilih Penduduk --</option>
              <?php foreach ($penduduk as $key => $p) { ?>
                <option value="<?= $p['id_penduduk'] ?>"><?= $p['nik'] ?> - <?= $p['nama'] ?></option>
              <?php  } ?>
            </select>
            <p class="text-danger"><?= $validasi->getError('id_penduduk') ?></p>
          </div>

          <div class="col-12">
            <label for="">Tanggal Pindah</label>
            <input type="date" class="form-control" name="tgl_pindah">
            <p class="text-danger"><?= $validasi->getError('tgl_pindah') ?></p>
          </div>

          <div class="col-12">
            <label for="">Alamat Pindah</label>
            <input type="text" class="form-control" name="alamat_pindah">
            <p class="text-danger"><?= $validasi->getError('alamat_pindah') ?></p>
          </div>

          <div class="col-12">
            <label for="">Klarifikasi Pindah</label>
            <input type="text" class="form-control" name="klasifikasi_pindah" value="Pindah Desa" readonly>
            <p class="text-danger"><?= $validasi->getError('klasifikasi_pindah') ?></p>
   
        </div>
        <div class="text-left">
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          <a href="<?= base_url('Pindah') ?>" class="btn btn-success btn-sm">Kembali</a>

        </div>
        <?php echo form_close() ?>


      </div>
    </div>
  </div>
</section>
</main>

<script src="<?= base_url('NiceAdmin') ?>/assets/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $(".select2").select2({
      theme: "bootstrap-5",
    });

  });
</script>