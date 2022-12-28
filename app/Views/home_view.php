<section class="section dashboard">
  <div class="row">
    <!-- Data Keluarga Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Keluarga <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_keluarga ?></b> Keluarga</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Keluarga') ?>">Data Keluarga</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Data Keluarga Card -->

    <!-- Data Penduduk Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Penduduk <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_penduduk ?></b> Orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Penduduk') ?>">Data Penduduk</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Data Penduduk Card -->



    <!-- Data Kelahiran Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Kelahiran <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-folder-plus"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_kelahiran ?></b> Kelahiran</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Kelahiran') ?>">Data Kelahiran</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Data Kelahiran Card -->


    <!-- Data kematian Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">

        <div class="card-body">
          <h5 class="card-title">Total Kematian <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-folder-minus"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_kematian ?></b> Orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Kematian') ?>">Data Kematian</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>

            </div>
          </div>
        </div>

      </div>
    </div><!-- End Data Penduduk Card -->

    <!-- Data Pindah Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Pindah <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-folder-symlink"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_pindah ?></b> orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Pindah') ?>">Data Pindah</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Data Penduduk Card -->

    <!-- Data Pindah Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Pengguna <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-person"></i>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_pengguna ?></b> orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('Pengguna') ?>">Data Pengguna</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Data Penduduk Card -->

    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Penduduk</h5>

          <!-- Pie Chart -->
          <canvas id="pieChart" style="max-height: 400px;"></canvas>

          <!-- End Pie CHart -->

        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grafik Kelahiran</h5>

          <!-- Pie Chart -->
          <canvas id="kelahiran" style="max-height: 400px;"></canvas>

          <!-- End Pie CHart -->

        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><i class="bi bi-list"></i>Statistik Pendidikan</h4>

          <table class="table table-striped table-bordered small">
            <thead>
              <tr class="text-center">
                <th width="60px">No</th>
                <th>Pendidikan</th>
                <th width="150px">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $db = \Config\Database::connect();
              $no = 1;
              foreach ($pendidikan as $w => $value) {
                $jml = $db->table('tbl_penduduk')
                  ->where('id_pendidikan', $value['id_pendidikan'])
                  ->countAllResults();              ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $value['pendidikan']; ?></td>
                  <td class="text-center"><span class="badge bg-primary"><?= $jml ?></span></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

</section>
</main>


<script src="<?= base_url('NiceAdmin') ?>/assets/vendor/chart.js/chart.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    new Chart(document.querySelector('#pieChart'), {
      type: 'pie',
      data: {
        labels: [
          'Perempuan',
          'Laki-Laki',
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [<?= $total_p ?>, <?= $total_l ?>],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
          ],
          hoverOffset: 4
        }]
      }
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    new Chart(document.querySelector('#kelahiran'), {
      type: 'pie',
      data: {
        labels: [
          'Perempuan',
          'Laki-Laki',
        ],
        datasets: [{
          label: 'My First Dataset',
          data: [<?= $total_lahir_p ?>, <?= $total_lahir_l ?>],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
          ],
          hoverOffset: 4
        }]
      }
    });
  });
</script>