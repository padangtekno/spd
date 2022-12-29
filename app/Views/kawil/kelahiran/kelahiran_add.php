<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <?php
                session();
                $validasi = \Config\Services::validation();

                echo form_open('Kelahiran/Insert'); ?>
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi-pencil-square"></i> Tambah Data Kelahiran
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Keluarga</label>
                            <select name="no_kk" id="no_kk" class="form-select select2">
                                <option value="">--Pilih Keluarga--</option>
                                <?php foreach ($keluarga as $key => $k) { ?>
                                    <option value="<?= $k['no_kk'] ?>"><?= $k['no_kk'] ?> | <?= $k['kepala_keluarga'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('no_kk') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" value="<?= old('nama_ayah') ?>">
                            <p class="text-danger"><?= $validasi->getError('nama') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" value="<?= old('nama_ayah') ?>">
                            <p class="text-danger"><?= $validasi->getError('nama') ?></p>
                        </div>


                        <div class="col-md-6">
                            <label for="">Nama Bayi</label>
                            <input type="text" name="nama" class="form-control" value="<?= old('nama') ?>">
                            <p class="text-danger"><?= $validasi->getError('nama') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="<?= old('tempat_lahir') ?>">
                            <p class="text-danger"><?= $validasi->getError('tempat_lahir') ?></p>

                        </div>


                        <div class="col-md-6">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= old('tgl_lahir') ?>">
                            <p class="text-danger"><?= $validasi->getError('tgl_lahir') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="">Jam Lahir</label>
                            <input type="time" name="jam_lahir" class="form-control" value="<?= old('jam_lahir') ?>">
                            <p class="text-danger"><?= $validasi->getError('jam_lahir') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="">Jenis Kelamin</label>
                            <select id="jk" name="jk" class="form-select">
                                <option value="">--Pilih--</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('jk') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label>Agama</label>
                            <select name="agama" class="form-select">
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('agama') ?></p>
                        </div>


                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('Kelahiran') ?>" class="btn btn-success">Kembali</a>

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


    });
</script>