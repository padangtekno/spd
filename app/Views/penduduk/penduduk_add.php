<div class="container">
    <section class="section">
        <div class="row">
            <div class="card">
                <?php
                session();
                $validasi = \Config\Services::validation();
                ?>
                <?php echo form_open_multipart('penduduk/insert'); ?>
                <?= csrf_field() ?>
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi-pencil-square"></i> Tambah Data Penduduk
                    </h5>

                    <div class="row">
                        <div class="col-md-4">
                            <label>No Kartu Keluarga</label>
                            <select name="no_kk" class="form-select select2">
                                <option value="">--No Kartu Keluarga--</option>
                                <?php foreach ($keluarga as $key => $k) { ?>
                                    <option value="<?= $k['no_kk'] ?>"><?= $k['no_kk'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('no_kk') ?></p>
                        </div>

                        <div class="col-md-4">
                            <label>Hubungan Dari Keluarga</label>
                            <select name="hubungan_keluarga" class="form-select select2">
                                <option value="">--Hubungan Keluarga--</option>
                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                <option value="Istri">Istri</option>
                                <option value="Anak">Anak</option>
                                <option value="Ponakan">Ponakan</option>
                                <option value="Cucu">Cucu</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('hubungan_keluarga') ?></p>
                        </div>

                        <div class="col-md-4">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= old('nik') ?>">
                            <p class="text-danger"><?= $validasi->getError('nik') ?></p>
                        </div>

                        <div class="col-sm-6">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= old('nama') ?>">
                            <p class="text-danger"><?= $validasi->getError('nama') ?></p>
                        </div>

                        <div class="col-md-6">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= old('tempat_lahir') ?>">
                            <p class="text-danger"><?= $validasi->getError('tempat_lahir') ?></p>
                        </div>

                        <div class="col-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= old('tgl_lahir') ?>">
                            <p class="text-danger"><?= $validasi->getError('tgl_lahir') ?></p>
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-select" value="<?= old('jk') ?>">
                                <option selected>--Pilih--</option>
                                <option value="L">Laki-Laki</option>
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
                        <div class="col-md-6">
                            <label>Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-select" value="<?= old('status_perkawinan') ?>">
                                <option value="">--Pilih--</option>
                                <option value="1">Kawin</option>
                                <option value="2">Belum Kawin</option>
                                <option value="2">Cerai Mati</option>
                                <option value="3">Janda</option>
                                <option value="4">Duda</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('status_perkawinan') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Pendidikan</label>
                            <select name="id_pendidikan" class="form-select select2">
                                <option value="">--Pilih--</option>
                                <?php foreach ($pendidikan as $key => $p) { ?>
                                    <option value="<?= $p['id_pendidikan'] ?>"><?= $p['pendidikan'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('id_pekerjaan') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Pekerjaan</label>
                            <select name="id_pekerjaan" class="form-select select2">
                                <option value="">--Pilih--</option>
                                <?php foreach ($pekerjaan as $key => $p) { ?>
                                    <option value="<?= $p['id_pekerjaan'] ?>"><?= $p['pekerjaan'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('id_pekerjaan') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Penghasilan</label>
                            <select name="id_penghasilan" class="form-select select2">
                                <option value="">--Pilih--</option>
                                <?php foreach ($penghasilan as $key => $p) { ?>
                                    <option value="<?= $p['id_penghasilan'] ?>"><?= $p['penghasilan'] ?></option>
                                <?php } ?>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('id_penghasilan') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Status Tinggal</label>
                            <select name="status_tinggal" class="form-select">
                                <option value="">--Pilih--</option>
                                <option value="1">Kontrak</option>
                                <option value="2">Tetap</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Golongan Darah</label>
                            <select name="gol_darah" class="form-select">
                                <option value="">--Pilih--</option>
                                <option value="O">O</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="AB">Tidak Tahu</option>

                            </select>
                            <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
                        </div>
                        <div class="col-md-4">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" value="WNI" name="kewarganegaraan" readonly>
                            <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
                        </div>
                        <div class="text-left">
                            <button type="submit" value="simpan" class="btn btn-primary btn-sm"></i>Tambah</button>
                            <a href="<?= base_url('Penduduk') ?>" class="btn btn-secondary btn-sm"></i>Batal</a>
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