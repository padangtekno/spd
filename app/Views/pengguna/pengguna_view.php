<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengguna Sistem</h4>
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }

                    ?>

                    <a href="<?= base_url('pengguna/add') ?>" button type="button" class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah</a>
                    <br>
                    <table class="table datatable table-striped small">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="30px">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col" width="130px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengguna as $user => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><img src="<?= base_url('foto/' . $value['foto']) ?>" width="30px" alt=""></td>
                                    <td><?= $value['nama_user'] ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['level'] == 1 ? 'Admin' : 'Kawil' ?></td>
                                    <td>
                                        <a href="<?= base_url('pengguna/edit/' . $value['id_users']) ?>" class="btn btn-warning btn-sm"><i class="bi-pencil-square"></i></i></a>
                                        <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_users']; ?>"></i></i></button>
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

<!-- modal delete pengguna-->
<?php
foreach ($pengguna as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_users'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin ingin hapus Pengguna <b> <?= $value['nama_user'] ?></b> ?

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default bx-pull-left" data-bs-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('pengguna/delete/' . $value['id_users']) ?>" type="submit" class="btn btn-primary">Iya</a>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php } ?>
<!-- end modal delete pengguna-->