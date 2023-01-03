<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-list"></i> <?= $title ?></h4>
          <?php
          if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
          }

          ?>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus"></i> Tambah</button>

          <table class="table datatable table-striped small">
            <div class="mt-1">
            <thead>
              <tr class="text-center">
                <th width="60px">No</th>
                <th>Jenis Bantuan</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              foreach ($bantuan as $w => $value) {

              ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $value['jenis_bantuan']; ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm"><i class="bi-pencil" data-bs-toggle="modal" data-bs-target="#edit<?= $value['id_bantuan']; ?>"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_bantuan']; ?>"></i></button>

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
      <?php echo form_open('Bantuan/Insert') ?>
      <div class="modal-body">


        <div class="col-12">
          <label for="">Jenis Bantuan</label>
          <input type="text" class="form-control" name="jenis_bantuan" required>
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


<?php foreach ($bantuan as $w => $value) { ?>

  <!-- start Vertically centered Modal-->
  <div class="modal fade" id="edit<?= $value['id_bantuan'] ?>">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('bantuan/Update/' . $value['id_bantuan']) ?>
        <div class="modal-body">


          <div class="col-12">
            <label for="">bantuan</label>
            <input value="<?= $value['jenis_bantuan'] ?>" class="form-control" name="jenis_bantuan" required>
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
  <div class="modal fade" id="delete<?= $value['id_bantuan'] ?>">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('bantuan/Delete/' . $value['id_bantuan']) ?>
        <div class="modal-body">


          Apakah Yakin Ingin Hapus Data <?= $value['jenis_bantuan'] ?> ?


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-danger btn-sm">Yakin</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

<?php } ?>