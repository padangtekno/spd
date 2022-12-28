<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th width="200px">No Kartu Keluarga</th>
                            <th width="30px" class="text-center">:</th>
                            <td><?= $penduduk['no_kk'] ?></td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['nik'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th class="text-center">:</th>
                            <td><b><?= $penduduk['nama'] ?></b></td>
                        </tr>
                        <tr>
                            <th>Tempat Tanggal Lahir</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['tempat_lahir'] ?>, <?= $penduduk['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <th class="text-center">:</th>
                            <td><?php
                                $birthDate = new \DateTime($penduduk['tgl_lahir']);
                                $today = new \DateTime("today");
                                if ($birthDate > $today) {
                                    return "0 tahun 0 bulan 0 hari";
                                }
                                $y = $today->diff($birthDate)->y;
                                // dd($y);
                                $m = $today->diff($birthDate)->m;
                                $d = $today->diff($birthDate)->d;

                                echo $y . " tahun " . $m . " bulan " . $d . " hari"
                                ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['agama'] ?></td>
                        </tr>
                        <tr>
                            <th>Golongan Darah</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['gol_darah'] ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['alamat'] ?></td>
                        </tr>
                        <tr>
                            <th>RT/RW</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['rt'] ?>/<?= $penduduk['rw'] ?></td>
                        </tr>
                        <tr>
                            <th>Kode POS</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['kode_pos'] ?></td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['nama_kecamatan'] ?></td>
                        </tr>
                        <tr>
                            <th>Kabupaten</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['nama_kabupaten'] ?></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['nama_provinsi'] ?></td>
                        </tr>
                        <tr>
                            <th>Status Kawin</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['status_perkawinan'] ?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['pekerjaan'] ?></td>
                        </tr>
                        <tr>
                            <th>Penghasilan</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['penghasilan'] ?></td>
                        </tr>
                        <tr>
                            <th>Kewarganegaraan</th>
                            <th class="text-center">:</th>
                            <td><?= $penduduk['kewarganegaraan'] ?></td>
                        </tr>
                    </table>

                    <div class="text-left">
                        <a href="<?= base_url('Penduduk') ?>" class="btn btn-success btn-sm"></i>Kembali</a>
                    </div>

                </div>
            </div>
</section>
</main>