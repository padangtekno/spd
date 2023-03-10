<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Data Penduduk</h5>
        <?php
        session();
        $validasi = \Config\Services::validation();
        ?>
        <?php echo form_open_multipart('penduduk/update/' . $data_penduduk['id_penduduk']); ?>
        <div class="row">
            <div class="col-md-4">
                <label>No Kartu Keluarga</label>
                <select name="no_kk" class="form-select select2">
                    <option value="<?= $data_penduduk['no_kk'] ?>"><?= $data_penduduk['no_kk'] ?></option>
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
                    <option value="Kepala Keluarga" <?= $data_penduduk['hubungan_keluarga'] == 'Kepala Keluarga' ? 'selected' : '' ?>>Kepala Keluarga</option>
                    <option value="Istri" <?= $data_penduduk['hubungan_keluarga'] == 'Istri' ? 'selected' : '' ?>>Istri</option>
                    <option value="Anak" <?= $data_penduduk['hubungan_keluarga'] == 'Anak' ? 'selected' : '' ?>>Anak</option>
                    <option value="Ponakan" <?= $data_penduduk['hubungan_keluarga'] == 'Ponakan' ? 'selected' : '' ?>>Ponakan</option>
                    <option value="Cucu" <?= $data_penduduk['hubungan_keluarga'] == 'Cucu' ? 'selected' : '' ?>>Cucu</option>
                </select>
                <p class="text-danger"><?= $validasi->getError('hubungan_keluarga') ?></p>
            </div>

            <div class="col-md-4">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" name="nik" value="<?= $data_penduduk['nik'] ?>" class="form-control" id="nik">
                <p class="text-danger"><?= $validasi->getError('nik') ?></p>
            </div>
            <div class="col-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" value="<?= $data_penduduk['nama'] ?>" class="form-control" id="nama">
                <p class="text-danger"><?= $validasi->getError('nama') ?></p>
            </div>
            <div class="col-md-6">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="<?= $data_penduduk['tempat_lahir'] ?>" class="form-control" id="tempat_lahir">
                <p class="text-danger"><?= $validasi->getError('tempat_lahir') ?></p>
            </div>
            <div class="col-6">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value="<?= $data_penduduk['tgl_lahir'] ?>" class="form-control" id="tgl_lahir">
                <p class="text-danger"><?= $validasi->getError('tgl_lahir') ?></p>
            </div>
            <div class="col-md-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" class="form-select">
                    <option value="L" <?= $data_penduduk['jk'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="P" <?= $data_penduduk['jk'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                </select>
                <p class="text-danger"><?= $validasi->getError('jk') ?></p>
            </div>

            <div class="col-md-6">
                <label>Agama</label>
                <select name="agama" class="form-select">
                    <option value="<?= $data_penduduk['agama'] ?>"><?= $data_penduduk['agama'] ?></option>
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
                    <option value="1" <?= $data_penduduk['status_perkawinan'] = 1 ? 'selected' : '' ?>>Lajang</option>
                    <option value="2" <?= $data_penduduk['status_perkawinan'] = 2 ? 'selected' : '' ?>>Kawin</option>
                    <option value="3" <?= $data_penduduk['status_perkawinan'] = 3 ? 'selected' : '' ?>>Janda</option>
                    <option value="4" <?= $data_penduduk['status_perkawinan'] = 4 ? 'selected' : '' ?>>Duda</option>
                </select>
                <p class="text-danger"><?= $validasi->getError('status_perkawinan') ?></p>
            </div>
            <div class="col-md-4">
                <label>Pendidikan</label>
                <select name="id_pendidikan" class="form-select select2">
                    <option value="<?= $data_penduduk['id_pendidikan'] ?>"><?= $data_penduduk['pendidikan'] ?></option>
                    <?php foreach ($pendidikan as $key => $p) { ?>
                        <option value="<?= $p['id_pendidikan'] ?>"><?= $p['pendidikan'] ?></option>
                    <?php } ?>
                </select>
                <p class="text-danger"><?= $validasi->getError('id_pekerjaan') ?></p>
            </div>
            <div class="col-md-4">
                <label>Pekerjaan</label>
                <select name="id_pekerjaan" class="form-select select2">
                    <option value="<?= $data_penduduk['id_pekerjaan'] ?>"><?= $data_penduduk['pekerjaan'] ?></option>
                    <?php foreach ($pekerjaan as $key => $p) { ?>
                        <option value="<?= $p['id_pekerjaan'] ?>"><?= $p['pekerjaan'] ?></option>
                    <?php } ?>
                </select>
                <p class="text-danger"><?= $validasi->getError('id_pekerjaan') ?></p>
            </div>

            <div class="col-md-4">
                <label>Penghasilan</label>
                <input type="number" class="form-control" name="penghasilan" value="<?= $data_penduduk['penghasilan'] ?>">
                <p class="text-danger"><?= $validasi->getError('penghasilan') ?></p>
            </div>

            <div class="col-md-4">
                <label>Status Tinggal</label>
                <select name="status_tinggal" class="form-select">
                    <option value="">--Pilih--</option>
                    <option value="1" <?= $data_penduduk['status_tinggal'] == '1' ? 'selected' : '' ?>>Kontrak</option>
                    <option value="2" <?= $data_penduduk['status_tinggal'] == '2' ? 'selected' : '' ?>>Tetap</option>
                </select>
                <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
            </div>
            <div class="col-md-4">
                <label>Golongan Darah</label>
                <select name="gol_darah" class="form-select">
                    <option value="">--Pilih--</option>
                    <option value="O" <?= $data_penduduk['gol_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    <option value="A" <?= $data_penduduk['gol_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= $data_penduduk['gol_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                    <option value="AB" <?= $data_penduduk['gol_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                </select>
                <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
            </div>
            <div class="col-md-4">
                <label>Kewarganegaraan</label>
                <input type="text" class="form-control" value="WNI" name="kewarganegaraan" readonly>
                <p class="text-danger"><?= $validasi->getError('status_tinggal') ?></p>
            </div>
            <div class="text-left">
                <button type="submit" value="simpan" class="btn btn-primary btn-sm"></i>Simpan</button>
                <a href="<?= base_url('Penduduk') ?>" class="btn btn-secondary btn-sm"></i>Batal</a>
            </div>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>
</div>
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