<section class="section">
  <div class="row">
    <div class="col-lg-12">



      <!--View Data Meninggal-->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            <i class="bi bi-person-dash-fill"></i>
            <?= $title ?>
          </h4>
          <?php if (session()->get('level') == '1') { ?>
            <a href="<?= base_url('Pindah/Add') ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah</a>
          <?php } ?>
          <?php if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <i class="bi bi-check-circle me-1"></i> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
          } ?>

          <table class="table datatable table-striped small">
            <thead>
              <tr class="text-center">
                <th scope="col" width="30px">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat Pindah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Klasifikasi</th>
                <?php if (session()->get('level') == '1') { ?>
                  <th scope="col">Aksi</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($pindah as $key => $p) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $p['nik'] ?></td>
                  <td><?= $p['nama'] ?></td>
                  <td><?= $p['alamat_pindah'] ?></td>
                  <td><?= $p['tgl_pindah'] ?></td>
                  <td><?= $p['klasifikasi_pindah'] ?></td>
                  <?php if (session()->get('level') == '1') { ?>
                    <td>
                      <a href="<?= base_url('Pindah/Edit/' . $p['id_pindah']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url('Pindah/Delete/' . $p['id_pindah'] . '/' . $p['id_penduduk']) ?>" onclick="return confirm('Yakin Hapus Data..?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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