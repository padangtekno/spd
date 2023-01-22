<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-people-fill"></i> History</h4>


          <table class="table datatable table-striped small">
            <thead>
              <tr class="text-center">
                <th scope="col" width="60px">No</th>
                <th scope="col">No. KK</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>

                <?php if (session()->get('level') == '1') { ?>
                  <th scope="col" width="150px">Opsi</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($penduduk as $w => $value) { ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $value['no_kk']; ?></td>
                  <td><?= $value['nik']; ?></td>
                  <td><?= $value['nama']; ?></td>
                  <td><?= $value['tempat_lahir']; ?>, <?= date('d M Y', strtotime($value['tgl_lahir'])) ?></td>
                  <td>
                    <?php
                    if ($value['status'] == 2) {
                      echo '<span class="badge bg-danger">Meninggal</span>';
                    } elseif ($value['status'] == 3) {
                      echo '<span class="badge bg-primary">Pindah</span>';
                    } elseif ($value['status'] == 4) {
                      echo '<span class="badge bg-success">Lahir</span>';
                    }
                    ?>

                  </td>
                  <td><?= date('d M Y', strtotime($value['update_at'])) ?></td>
                  <td>
                    <?php
                    if ($value['status'] == 2) { ?>
                      <a href="<?= base_url('History/SkKematian/' . $value['id_penduduk']) ?>" target="_blank" class="btn btn-primary btn-sm">SK Kematian</a>
                    <?php } elseif ($value['status'] == 3) { ?>
                      <a href="" class="btn btn-primary btn-sm">SK Pindah</a>
                    <?php   } elseif ($value['status'] == 4) { ?>
                      <a href="<?= base_url('History/SkLahir/' . $value['id_penduduk']) ?>" target="_blank" class="btn btn-primary btn-sm">SK Lahir</a>
                    <?php  } ?>

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