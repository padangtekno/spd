<section class="section dashboard">
  <div class="row">
    <!-- Data Keluarga Card -->
    <div class="col-xxl-4 col-md-4">
      <div class="card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Total Keluarga <span>|</span> <span class="text-warning small pt-1"> <?= date('d-M-y'); ?></span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <!-- Download SVG icon from http://tabler-icons.io/i/users -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="9" cy="7" r="4" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_keluarga ?></b> Keluarga</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('kawil/Keluarga') ?>">Data Keluarga</a>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/users -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="9" cy="7" r="4" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_penduduk ?></b> Orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('kawil/Penduduk') ?>">Data Penduduk</a>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/folder-plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                <line x1="12" y1="10" x2="12" y2="16" />
                <line x1="9" y1="13" x2="15" y2="13" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_kelahiran ?></b> Kelahiran</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('kawil/Kelahiran') ?>">Data Kelahiran</a>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/folder-minus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                <line x1="9" y1="13" x2="15" y2="13" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_kematian ?></b> Orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('kawil/Kematian') ?>">Data Kematian</a>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/exchange -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="5" cy="18" r="2" />
                <circle cx="19" cy="6" r="2" />
                <path d="M19 8v5a5 5 0 0 1 -5 5h-3l3 -3m0 6l-3 -3" />
                <path d="M5 16v-5a5 5 0 0 1 5 -5h3l-3 -3m0 6l3 -3" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_pindah ?></b> orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="<?= base_url('kawil/Pindah') ?>">Data Pindah</a>
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
              <!-- Download SVG icon from http://tabler-icons.io/i/user -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="12" cy="7" r="4" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
            </div>
            <div class="ps-3">
              <h4><b><?= $total_pengguna ?></b> orang</h4>
              <span class="text-success small pt-1 fw-bold">
                <a href="#">Data Pengguna</a>
                <!--</span> <span class="text-muted small pt-2 ps-1">increase-->
              </span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Data Penduduk Card -->

    <div class="col-lg-6">
      <br>
      <br>

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
      <br>
      <br>
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