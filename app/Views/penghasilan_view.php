<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-list"></i> <?= $title ?></h4>

          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus"></i> Tambah</button>

          <?php
          if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
          }

          ?>

          <table class="table datatable table-striped small">
            <div class="mt-1">
            <thead>
              <tr class="text-center">
                <th width="60px">No</th>
                <th>Penghasilan</th>
                <th>Penerima Bantuan</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              foreach ($penghasilan as $w => $value) {

              ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $value['penghasilan']; ?></td>
                  <td class="text-center"><?= $value['penerima_bantuan'] == '1' ? '<span class="badge bg-success">Layak</span>' : '<span class="badge bg-danger">Tidak Layak</span>' ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm"><i class="bi-pencil" data-bs-toggle="modal" data-bs-target="#edit<?= $value['id_penghasilan']; ?>"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_penghasilan']; ?>"></i></button>

                  </td>
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


<!-- start Vertically centered Modal-->
<div class="modal fade" id="tambah" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah <?= $title ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php echo form_open('Penghasilan/Insert') ?>
      <div class="modal-body">


        <div class="col-12">
          <label for="">Penghasilan</label>
          <input type="text" class="form-control" name="penghasilan" required>
        </div>

        <div class="col-12">
          <label for="">Penerima Bantuan</label>
          <select type="text" class="form-select" name="penerima_bantuan">
            <option value="1">Layak</option>
            <option value="2">Tidak Layak</option>
          </select>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div><!-- End Vertically centered Modal-->


<?php foreach ($penghasilan as $w => $value) { ?>

  <!-- start Vertically centered Modal-->
  <div class="modal fade" id="edit<?= $value['id_penghasilan'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('penghasilan/Update/' . $value['id_penghasilan']) ?>
        <div class="modal-body">


          <div class="col-12">
            <label for="">penghasilan</label>
            <input value="<?= $value['penghasilan'] ?>" class="form-control" name="penghasilan" required>
          </div>

          <div class="col-12">
            <label for="">Penerima Bantuan</label>
            <select type="text" class="form-select" name="penerima_bantuan">
              <option value="1" <?= $value['penerima_bantuan'] == '1' ? 'selected' : '' ?>>Layak</option>
              <option value="2" <?= $value['penerima_bantuan'] == '2' ? 'selected' : '' ?>>Tidak Layak</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

  <!-- start Vertically centered Modal-->
  <div class="modal fade" id="delete<?= $value['id_penghasilan'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('penghasilan/Delete/' . $value['id_penghasilan']) ?>
        <div class="modal-body">


          Apakah Yakin Ingin Hapus Data <?= $value['penghasilan'] ?> ?


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger btn-sm">Yakin</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

<?php } ?>