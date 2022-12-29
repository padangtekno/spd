<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="card-body">
            <h4 class="card-title"><i class="bi bi-file-earmark-text-fill"></i> <?= $title ?></h4>

            <div class="row">
              <div class="col-md-2">
                <label for="">Bulan</label>
                <select name="bulan" id="bulan" class="form-select">
                  <option value="">--Pilih Bulan--</option>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>

              <div class="col-md-2">
                <label>Tahun</label>
                <select name="tahun" id="tahun" class="form-select">
                  <option value="">--Pilih Tahun--</option>
                  <?php for ($a = date('Y'); $a >= 2000; $a--) { ?>
                    <option value="<?= $a ?>"><?= $a ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-sm-1">
                <br>
                <button class="btn btn-primary btn-sm" onclick="ViewTabelLaporan()"><i class="bi bi-grid-3x2"></i> View</button>
              </div>

              <div class="col-sm-1">
                <br>
                <button onclick="PrintLaporan()" class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i> Print</button>
              </div>
            </div>

            <br>

            <div class="Tabel">

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
</main>


<script src="<?= base_url('NiceAdmin') ?>/assets/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  function ViewTabelLaporan() {
    let bulan = $('#bulan').val();
    let tahun = $('#tahun').val();
    if (bulan == "") {
      return confirm('Bulan Belum Dipilih !!!');
    } else if (tahun == "") {
      return confirm('Tahun Belum Dipilih !!!');
    } else {
      $.ajax({
        type: "POST",
        url: "<?= base_url('Kematian/ViewLaporanBulanan') ?>",
        data: {
          bulan: bulan,
          tahun: tahun,
        },
        dataType: "JSON",
        success: function(response) {
          if (response.data) {
            $('.Tabel ').html(response.data)
          }
        }
      });
    }
  }

  function PrintLaporan() {
    let bulan = $('#bulan').val();
    let tahun = $('#tahun').val();
    if (bulan == "") {
      return confirm('Bulan Belum Dipilih !!!');
    } else if (tahun == "") {
      return confirm('Tahun Belum Dipilih !!!');
    } else {
      NewWin = window.open('<?= base_url('Kematian/Print/') ?>/' + bulan + '/' + tahun, 'NewWin', 'toolbar=no, width=1500,height=800,scrollbars=yes');
      newWin.document.write();
      newWin.document.close();
      setTimeout(function() {
        newWin.close();
      }, 10);
    }
  }
</script>