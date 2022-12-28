<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }

                    ?>
                    <h4 class="card-title">Kategori Jabatan</h4>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                        Tambah</button>
                    <table class="table datatable table-sm">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="60px">No</th>
                                <th scope="col">Nama Jabatan</th>
                                <th scope="col" width="200px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($jabatan as $key => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $value['nama_jabatan']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?= $value['id_jabatan']; ?>"><i class=" bi-pencil-square"></i></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_jabatan']; ?>"></i></i></button>
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


<!-- modal add jabatan-->
<div class=" modal fade" id="add" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('jabatan/add')
                ?>
                <div class="col-12">
                    <label for="jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan">
                </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
</div>
<!-- end modal add jabatan-->


<!-- modal edit jabatan-->
<?php
foreach ($jabatan as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_jabatan'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Kategori Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('jabatan/edit/' . $value['id_jabatan'])
                    ?>
                    <div class="col-12">
                        <label for="jabatan" class="form-label">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" value="<?= $value['nama_jabatan'] ?>" class="form-control" id="nama_jabatan" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
    </div>
<?php } ?>
<!-- end modal edit jabatan-->


<!-- modal delete jabatan-->
<?php
foreach ($jabatan as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_jabatan'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Kategori Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin ingin hapus Jabatan <?= $value['nama_jabatan'] ?> ?

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default bx-pull-left" data-bs-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('jabatan/delete/' . $value['id_jabatan']) ?>" type="submit" class="btn btn-primary">Iya</a>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php } ?>
<!-- end modal delete jabatan-->