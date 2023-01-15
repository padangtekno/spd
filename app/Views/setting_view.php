<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <?php if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        } ?>
        <?php
        session();
        $validasi = \Config\Services::validation();

        echo form_open_multipart('Home/UpdateSetting'); ?>
        <div class="card-body">
          <h5 class="card-title">
            <i class="bi-pencil-square"></i> <?= $title ?>
          </h5>
          <div class="row">

            <div class="col-sm-6">
              <label>Nama Desa</label>
              <input name="nama_desa" class="form-control" value="<?= $web['nama_desa'] ?>">
              <p class="text-danger"><?= $validasi->getError('nama_desa') ?></p>
            </div>

            <div class="col-sm-6">
              <label>Kepala Desa</label>
              <input name="kepala_desa" class="form-control" value="<?= $web['kepala_desa'] ?>">
              <p class="text-danger"><?= $validasi->getError('kepala_desa') ?></p>
            </div>

            <div class="col-md-4">
              <label class="form-label">Provinsi</label>
              <select name="id_provinsi" id="id_provinsi" class="form-select select2">
                <option value="<?= $web['id_provinsi'] ?>"><?= $web['nama_provinsi'] ?></option>
                <?php foreach ($provinsi as $key => $value) { ?>
                  <option value="<?= $value['id_provinsi'] ?>"><?= $value['nama_provinsi'] ?></option>
                <?php } ?>
              </select>
              <p class="text-danger">
                <?= ($validasi->hasError('id_provinsi')) ? $validasi->getError('id_provinsi') : ''; ?>
              </p>
            </div>

            <div class="col-md-4">
              <label class="form-label">Kabupaten</label>
              <select name="id_kabupaten" id="id_kabupaten" class="form-select select2">
                <option value="<?= $web['id_kabupaten'] ?>"><?= $web['nama_kabupaten'] ?></option>
              </select>
              <p class="text-danger"><?= $validasi->getError('id_kabupaten') ?></p>
            </div>

            <div class="col-md-4">
              <label class="form-label">Kecamatan</label>
              <select name="id_kecamatan" id="id_kecamatan" class="form-select select2">
                <option value="<?= $web['id_kecamatan'] ?>"><?= $web['nama_kecamatan'] ?></option>
              </select>
              <p class="text-danger"><?= $validasi->getError('id_kecamatan') ?></p>
            </div>

            <div class="col-md-4">
              <label>Kode POS</label>
              <input name="kode_pos" class="form-control" value="<?= $web['kode_pos'] ?>">
              <p class="text-danger"><?= $validasi->getError('kode_pos') ?></p>
            </div>

            <div class="col-md-8">
              <label>Penghasilan Dapat Bantuan Kurang Dari :</label>
              <input type="number" name="pdb" class="form-control" value="<?= $web['pdb'] ?>">
              <p class="text-danger"><?= $validasi->getError('pdb') ?></p>
            </div>

            <div class="col-md-6">
              <label>Logo Desa</label>
              <input type="file" name="logo" class="form-control">
              <p class="text-danger"><?= $validasi->getError('logo') ?></p>
            </div>

            <div class="col-md-6">
              <img src="<?= base_url('foto/' . $web['logo']) ?>" width="100px">
            </div>



            <div class="text-left">
              <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
            <?php echo form_close(); ?>
          </div>
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

    $("#id_provinsi").change(function() {
      var id_provinsi = $("#id_provinsi").val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('Home/kabupaten'); ?>",
        data: {
          id_provinsi: id_provinsi
        },
        success: function(response) {
          $("#id_kabupaten").html(response);
        }
      });
    });

    $("#id_kabupaten").change(function() {
      var id_kabupaten = $("#id_kabupaten").val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('Home/kecamatan'); ?>",
        data: {
          id_kabupaten: id_kabupaten
        },
        success: function(response) {
          $("#id_kecamatan").html(response);
        }
      });
    });
  });
</script>