<div class="container">
    <section class="section">
        <div class="row">
            <div class="card">
                <?php
                session();
                $validasi = \Config\Services::validation();
                ?>
                <?php echo form_open_multipart('Keluarga/Insert'); ?>
                <?= csrf_field() ?>
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi-pencil-square"></i> <?= $title ?>
                    </h5>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="no_kk" class="form-label">No Kartu Keluarga</label>
                            <input type="text" name="no_kk" class="form-control" placeholder="No Kartu Keluarga" value="<?= old(
                                                                                                                            'no_kk'
                                                                                                                        ); ?>">
                            <p class="text-danger"><?= $validasi->getError('no_kk') ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="nik" class="form-label">Nama Kepala Keluarga</label>
                            <input name="kepala_keluarga" class="form-control" placeholder="Nama Kepala Keluarga" value="<?= old(
                                                                                                                                'kepala_keluarga'
                                                                                                                            ) ?>">
                            <p class="text-danger"><?= $validasi->getError('kepala_keluarga') ?></p>
                        </div>

                        <div class="col-md-4">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= old('alamat') ?>">
                            <p class="text-danger"><?= $validasi->getError('alamat') ?></p>
                        </div>

                        <div class="col-sm-2">
                            <label>RT</label>
                            <input type="number" name="rt" class="form-control" id="rt" value="<?= old('rt') ?>">
                            <p class="text-danger"><?= $validasi->getError('rt') ?></p>
                        </div>
                        <div class="col-sm-2">
                            <label>RW</label>
                            <input type="number" name="rw" class="form-control" id="rw" value="<?= old('rw') ?>">
                            <p class="text-danger"><?= $validasi->getError('rw') ?></p>
                        </div>

                        <div class="col-md-4">
                            <label for="">Desa</label>
                            <input type="text" class="form-control" name="desa" id="alamat" value="<?= $web['nama_desa'] ?>" readonly>
                            <p class="text-danger"><?= $validasi->getError('desa') ?></p>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Provinsi</label>
                            <select name="id_provinsi" id="id_provinsi" class="form-select select2" readonly>
                                <option value="<?= $web['id_provinsi'] ?>"><?= $web['nama_provinsi'] ?></option>
                                <?php foreach ($provinsi as $key => $value) { ?>
                                    <option value="<?= $value['id_provinsi'] ?>"><?= $value['nama_provinsi'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger">
                                <?= ($validasi->hasError('id_provinsi')) ? $validasi->getError('id_provinsi') : ''; ?>
                            </p>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Kabupaten</label>
                            <select name="id_kabupaten" id="id_kabupaten" class="form-select select2" readonly>
                                <option value="<?= $web['id_kabupaten'] ?>"><?= $web['nama_kabupaten'] ?></option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('id_kabupaten') ?></p>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Kecamatan</label>
                            <select name="id_kecamatan" id="id_kecamatan" class="form-select select2" readonly>
                                <option value="<?= $web['id_kecamatan'] ?>"><?= $web['nama_kecamatan'] ?></option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('id_kecamatan') ?></p>
                        </div>

                        <div class="col-sm-3">
                            <label>Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?= $web['kode_pos'] ?>" readonly>
                            <p class="text-danger"><?= $validasi->getError('kode_pos') ?></p>
                        </div>


                        <div>
                            <button type="submit" value="simpan" class="btn btn-primary"></i>Simpan</button>
                            <a href="<?= base_url('Keluarga') ?>" class="btn btn-success">Kembali</a>
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</main>

<script src="<?= base_url('NiceAdmin') ?>/assets/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    //Initialize Select2 Elements



    $(document).ready(function() {
        $(".select2").select2({
            theme: "bootstrap-5",
        });

        $("#id_provinsi").change(function() {
            var id_provinsi = $("#id_provinsi").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Keluarga/kabupaten'); ?>",
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
                url: "<?= base_url('Keluarga/kecamatan'); ?>",
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