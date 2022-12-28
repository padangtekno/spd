<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="bi bi-people-fill"></i> Data Penduduk</h4>
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }

                    ?>
                    <?php if (session()->get('level') == '1') { ?>
                        <a href="<?= base_url('penduduk/add') ?>" button type="button" class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah</a>
                    <?php } ?>
                    <table class="table datatable table-striped small">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="60px">No</th>
                                <th scope="col">No. KK</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat, Tanggal Lahir</th>
                                <th scope="col">Umur</th>

                                <?php if (session()->get('level') == '1') { ?>
                                    <th scope="col" width="150px">Opsi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_penduduk as $w => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $value['no_kk']; ?></td>
                                    <td><?= $value['nik']; ?></td>
                                    <td><?= $value['nama']; ?></td>
                                    <td><?= $value['tempat_lahir']; ?>, <?= date('d M Y', strtotime($value['tgl_lahir'])) ?></td>
                                    <td>
                                        <?php
                                        $birthDate = new \DateTime($value['tgl_lahir']);
                                        $today = new \DateTime("today");
                                        if ($birthDate > $today) {
                                            return "0 tahun 0 bulan 0 hari";
                                        }
                                        $y = $today->diff($birthDate)->y;
                                        // dd($y);
                                        $m = $today->diff($birthDate)->m;
                                        $d = $today->diff($birthDate)->d;

                                        echo $y . " tahun " . $m . " bulan " . $d . " hari"
                                        ?>

                                    </td>
                                    <td>
                                        <?php if (session()->get('level') == '1') { ?>
                                            <a href="<?= base_url('penduduk/edit/' . $value['id_penduduk']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_penduduk']; ?>"></i></button>
                                        <?php } ?>
                                        <a href="<?= base_url('penduduk/detail/' . $value['id_penduduk']) ?>" class="btn btn-success btn-sm"><i class="bi-info-circle"></i></button>
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




<!-- modal delete penduduk-->
<?php
foreach ($data_penduduk as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_penduduk'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Penduduk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin ingin hapus Penduduk <b> <?= $value['nama'] ?></b> ?

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default bx-pull-left" data-bs-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('penduduk/delete/' . $value['id_penduduk']) ?>" type="submit" class="btn btn-primary">Iya</a>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php } ?>
<!-- end modal delete penduduk-->