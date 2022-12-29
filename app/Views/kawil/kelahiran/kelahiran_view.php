<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="bi bi-folder-plus"></i> Data Kelahiran</h4>
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
                                <th scope="col">Nama Bayi</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Nama Ibu</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($data_kelahiran as $w => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['tempat_lahir'] ?></td>
                                    <td><?= $value['tgl_lahir'] ?></td>
                                    <td><?= $value['jam_lahir'] ?></td>
                                    <td><?= $value['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                                    <td><?= $value['nama_ayah'] ?></td>
                                    <td><?= $value['nama_ibu'] ?></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>