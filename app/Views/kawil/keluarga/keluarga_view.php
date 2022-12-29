<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="bi bi-house-fill"></i> Data keluarga</h4>
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
                        <a href="<?= base_url('keluarga/add') ?>" button type="button" class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah</a>
                    <?php } ?>
                    <table id="example" class="table">
                        <thead>
                            <tr class="text-center">
                                <th width="60px">No</th>
                                <th>No. KK</th>
                                <th>Kepala Keluarga</th>
                                <th>Jumlah Anggota</th>

                                <th width="150px">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $db = \Config\Database::connect();
                            $no = 1;
                            foreach ($data_keluarga as $w => $value) {
                                $jml = $db->table('tbl_penduduk')
                                    ->where('no_kk', $value['no_kk'])
                                    ->where('status', '1')
                                    ->countAllResults();
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><a href="<?= base_url('Keluarga/Rincian/' . $value['no_kk']) ?>"><?= $value['no_kk']; ?></a></td>
                                    <td><?= $value['kepala_keluarga']; ?></td>
                                    <td><span class="badge bg-primary"><?= $jml ?> Orang</span></td>
                                    <td>
                                        <?php if (session()->get('level') == '1') { ?>
                                            <a href="<?= base_url('keluarga/edit/' . $value['id_keluarga']) ?>" class="btn btn-warning btn-sm"><i class="bi-pencil-square"></i></a>
                                            <button class="btn btn-danger btn-sm"><i class="bi-trash" data-bs-toggle="modal" data-bs-target="#delete<?= $value['id_keluarga']; ?>"></i></button>
                                        <?php } ?>
                                        <a href="<?= base_url('Kawil/RincianKeluarga/' . $value['no_kk']) ?>" class="btn btn-info btn-sm">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="12" r="9" />
                                                <line x1="12" y1="8" x2="12.01" y2="8" />
                                                <polyline points="11 12 12 12 12 16 13 16" />
                                            </svg>
                                        </a>
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


<?php
foreach ($data_keluarga as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_keluarga'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Keluarga</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin ingin hapus Keluarga <b> <?= $value['kepala_keluarga'] ?></b> ?

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default bx-pull-left" data-bs-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('Keluarga/delete/' . $value['id_keluarga']) ?>" type="submit" class="btn btn-primary">Iya</a>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php } ?>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>