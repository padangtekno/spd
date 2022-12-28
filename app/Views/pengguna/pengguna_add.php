<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <i class="bi-pencil-square"></i> Tambah Pengguna
        </h5>

        <?php
        session();
        $validasi = \Config\Services::validation();

        echo form_open_multipart('pengguna/insert'); ?>
        <form class="row g-3">
            <div class="col-md-5">
                <label for="nama_user" class="form-label">Nama Pengguna</label>
                <input type="text" name="nama_user" class="form-control" id="nama_user" value="<?= old(
                                                                                                    'nama_user'
                                                                                                ) ?>" />
                <p class="text-danger"><?= $validasi->getError(
                                            'nama_user'
                                        ) ?></p>
            </div>
            <div class="col-md-5">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?= old(
                                                                                                    'username'
                                                                                                ) ?>" />
                <p class="text-danger"><?= $validasi->getError(
                                            'username'
                                        ) ?></p>
            </div>
            <div class="col-md-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="<?= old(
                                                                                                        'password'
                                                                                                    ) ?>" />
                <p class="text-danger"><?= $validasi->getError(
                                            'password'
                                        ) ?></p>
            </div>
            <div class="col-md-5">
                <label for="role" class="form-label">Level</label>
                <select name="level" class="form-select">
                    <option selected>--Pilih--</option>
                    <option value="1">Admin</option>
                    <option value="2">Kawil</option>
                    <p class="text-danger"><?= $validasi->getError(
                                                'level'
                                            ) ?></p>
                </select>
            </div>

            <div class="col-md-5">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" />
                <p class="text-danger"><?= $validasi->getError('foto') ?></p>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                <a href="<?= base_url(
                                'pengguna'
                            ) ?>" class="btn btn-danger btn-sm">Kembali</a>
            </div>
            <?php echo form_close(); ?>
        </form>
    </div>
</div>
</div>
</div>