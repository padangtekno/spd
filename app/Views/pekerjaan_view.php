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
            <thead>
              <tr class="text-center">
                <th width="60px">No</th>
                <th>Pekerjaan</th>

                <th width="150px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no = 1;
              foreach ($data_pekerjaan as $w => $value) {

              ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $value['pekerjaan']; ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm"><i class="bi-pencil" data-bs-toggle="modal" data-bs-target="#edit<?= $value['id_pekerjaan']; ?>"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_pekerjaan']; ?>"></i></button>

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
      <?php echo form_open('Pekerjaan/Insert') ?>
      <div class="modal-body">


        <div class="col-12">
          <label for="">Pekerjaan</label>
          <input type="text" class="form-control" name="pekerjaan" required>
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


<?php foreach ($data_pekerjaan as $w => $value) { ?>

  <!-- start Vertically centered Modal-->
  <div class="modal fade" id="edit<?= $value['id_pekerjaan'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('Pekerjaan/Update/' . $value['id_pekerjaan']) ?>
        <div class="modal-body">


          <div class="col-12">
            <label for="">Pekerjaan</label>
            <input value="<?= $value['pekerjaan'] ?>" class="form-control" name="pekerjaan" required>
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
  <div class="modal fade" id="delete<?= $value['id_pekerjaan'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit <?= $title ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php echo form_open('Pekerjaan/Delete/' . $value['id_pekerjaan']) ?>
        <div class="modal-body">


          Apakah Yakin Ingin Hapus Data <?= $value['pekerjaan'] ?> ?


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tidal</button>
          <button type="submit" class="btn btn-danger btn-sm">Yakin</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

<?php } ?>