<section class="section">
    <div class="row">
        <div class="col-lg-12">



            <!--View Data Meninggal-->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="bi bi-person-dash-fill"></i>
                        Data Meninggal
                    </h4>
                    <?php if (session()->get('level') == '1') { ?>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus"></i> Tambah</button>
                    <?php } ?>
                    <?php if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    } ?>

                    <table class="table" id="example">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="30px">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Meninggal</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Penyebab</th>
                                <?php if (session()->get('level') == '1') { ?>
                                    <th scope="col">Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kematian as $key => $k) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k['nik'] ?></td>
                                    <td><?= $k['nama'] ?></td>
                                    <td><?= $k['tempat_kematian'] ?></td>
                                    <td><?= $k['tgl_kematian'] ?></td>
                                    <td><?= $k['penyebab'] ?></td>
                                    <?php if (session()->get('level') == '1') { ?>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?= $k['id_kematian'] ?>"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $k['id_kematian'] ?>"><i class="bi bi-trash"></i></button>
                                        </td>
                                    <?php } ?>
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
            <?php echo form_open('Kematian/Insert') ?>
            <div class="modal-body">


                <div class="col-12">
                    <label for="">Penduduk Meninggal</label>
                    <select id="" name="id_penduduk" class="form-select select2">
                        <option value="">-- Pilih Penduduk --</option>
                        <?php foreach ($penduduk as $key => $p) { ?>
                            <option value="<?= $p['id_penduduk'] ?>"><?= $p['nik'] ?> - <?= $p['nama'] ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="col-12">
                    <label for="">Tempat Meninggal</label>
                    <input type="text" class="form-control" name="tempat_kematian" required>
                </div>

                <div class="col-12">
                    <label for="">Tanggal Meninggal</label>
                    <input type="date" class="form-control" name="tgl_kematian" required>
                </div>

                <div class="col-12">
                    <label for="">Penyebab Meninggal</label>
                    <input type="text" class="form-control" name="penyebab" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->




<script src="<?= base_url('NiceAdmin') ?>/assets/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $(".select2").select2({
            theme: "bootstrap-5",
        });

    });
</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>