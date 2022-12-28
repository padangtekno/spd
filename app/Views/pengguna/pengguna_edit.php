<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Data Pengguna</h5>
        <?php
        session();
        $validasi = \Config\Services::validation();

        ?>
        <?php echo form_open_multipart('pengguna/update/' . $pengguna['id_users']); ?>
        <form class="row g-3">
            <div class="col-md-6">

                <label for="nama_user" class="form-label">Nama Pengguna</label>
                <input type="text" name="nama_user" value="<?= $pengguna['nama_user'] ?>" class="form-control" id="nama_user" />
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" value="<?= $pengguna['username'] ?>" class="form-control" id="username" />
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" value="<?= $pengguna['password'] ?>" class="form-control" id="password" />
            </div>
            <div class="col-md-6">
                <label for="role" class="form-label">Level</label>
                <select name="level" class="form-select">
                    <option value="1">Admin</option>
                    <option value="2">Kawil</option>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Ubah Foto</label>
                    <input type="file" name="foto" class="form-control" />
                </div>

                <div class="col-sm-4">
                    <img src="<?= base_url('foto/' . $pengguna['foto']) ?>" width="100px" alt="">
                </div>

            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?= base_url('pengguna') ?>" class="btn btn-success btn-sm">Kembali</a>
            </div>
    </div>

    <br>
    <?php echo form_close(); ?>
    </form>
</div>
</div>
</div>
</div>
</mai>