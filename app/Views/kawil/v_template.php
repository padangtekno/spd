<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?= $title?></title>
  <!-- CSS files -->
  <link href="<?= base_url() ?>/NiceAdmin/assets/img/logo-cjr.png" rel="icon">
  <link href="<?= base_url('tabler') ?>/dist/css/tabler.min.css" rel="stylesheet" />
  <link href="<?= base_url('tabler') ?>/dist/css/tabler-flags.min.css" rel="stylesheet" />
  <link href="<?= base_url('tabler') ?>/dist/css/tabler-payments.min.css" rel="stylesheet" />
  <link href="<?= base_url('tabler') ?>/dist/css/tabler-vendors.min.css" rel="stylesheet" />
  <link href="<?= base_url('tabler') ?>/dist/css/demo.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css" />

</head>

<body>
  <div class="wrapper">
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
          <a href="<?= base_url() ?>">
            <img src="<?= base_url('foto') ?>/logo.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
          DESA SITUHIANG
        </h1>
        <div class="navbar-nav flex-row d-lg-none">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
              <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                </svg>
                Source code
              </a>
              <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                </svg>
                Sponsor
              </a>
            </div>
          </div>
          <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg>
          </a>
          <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="12" r="4" />
              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
            </svg>
          </a>
          <div class="nav-item dropdown d-none d-md-flex me-3">
            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
              <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
              </svg>
              <span class="badge bg-red"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
              <div class="card">

              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
              <img src="<?= base_url('foto/' . session()->get('foto')) ?>" alt="">
              <div class="d-none d-xl-block ps-2">
                <div>session()->get('foto')</div>
                <div class="mt-1 small text-muted">UI Designer</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Set status</a>
              <a href="#" class="dropdown-item">Profile & account</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="#" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav pt-lg-3">
            <li class="nav-item <?= $menu == 'dashboard' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/dashboard -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="13" r="2" />
                    <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                  </svg>
                </span>
                <span class="nav-link-title">
                  Dashboard
                </span>
              </a>
            </li>
            <div class="mt-2">

            <li class="nav-item <?= $menu == 'keluarga' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/keluarga') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                  </svg>
                </span>
                <span class="nav-link-title">
                  Data Keluarga
                </span>
              </a>
            </li>
            <div class="mt-1">

            <li class="nav-item <?= $menu == 'penduduk' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/Penduduk') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/users -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                  </svg>
                </span>
                <span class="nav-link-title">
                  Data Penduduk
                </span>
              </a>
            </li>
            <div class="mt-1">

            <li class="nav-item <?= $menu == 'kelahiran' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/Kelahiran') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user-plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 11h6m-3 -3v6" />
                  </svg>
                </span>
                <span class="nav-link-title">
                 Data Kelahiran
                </span>
              </a>
            </li>
            <div class="mt-1">

            <li class="nav-item <?= $menu == 'kematian' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/kematian') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user-minus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <line x1="16" y1="11" x2="22" y2="11" />
                  </svg>
                </span>
                <span class="nav-link-title">
                  Data Kematian
                </span>
              </a>
            </li>
            <div class="mt-1">

            <li class="nav-item <?= $menu == 'pindah' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/pindah') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user-plus -->
                  <!-- Download SVG icon from http://tabler-icons.io/i/refresh -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                  </svg>
                </span>

                <span class="nav-link-title">
                 Data Pindah
                </span>
              </a>
            </li>
            <div class="mt-1">

            <li class="nav-item <?= $menu == 'bantuan' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url('Kawil/bantuan') ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/report-money -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                    <rect x="9" y="3" width="6" height="4" rx="2" />
                    <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M12 17v1m0 -8v1" />
                  </svg>
                </span>
                <span class="nav-link-title">
                 Data Penerima Bantuan
                </span>
              </a>
            </li>

          </ul>
        </div>


      </div>
    </aside>
    <header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">
         
          <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="12" cy="12" r="4" />
              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
            </svg>
          </a>

          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(<?= base_url('foto/' . session()->get('foto')) ?>)"></span>
              <div class="d-none d-xl-block ps-2">
                <div><?= session()->get('nama_user') ?></div>
                <div class="mt-1 small text-muted">Kawil</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="<?= base_url('Auth/LogOut') ?>" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div>
            <form action="." method="get">
              <div class="input-icon">
             
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">

              </div>
              <h2 class="page-title">
                <?= $title ?>
              </h2>
            </div>

          </div>
        </div>
      </div>
      <div class="page-body">
        <div class="container-xl">
          <?php if ($isi) {
            echo view($isi);
          } ?>
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                <div class="copyright"> &copy; Copyright <strong><span>Pemerintahan Desa Situhiang</span></strong>
         - <script>
             document.write(new Date().getFullYear())
         </script>
     </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New report</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
          </div>
          <label class="form-label">Report type</label>
          <div class="form-selectgroup-boxes row mb-3">
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                    <span class="d-block text-muted">Provide only basic data needed for the report</span>
                  </span>
                </span>
              </label>
            </div>
            <div class="col-lg-6">
              <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                  <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                  </span>
                  <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                    <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                  </span>
                </span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">Report url</label>
                <div class="input-group input-group-flat">
                  <span class="input-group-text">
                    https://tabler.io/reports/
                  </span>
                  <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">Visibility</label>
                <select class="form-select">
                  <option value="1" selected>Private</option>
                  <option value="2">Public</option>
                  <option value="3">Hidden</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Client name</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Reporting period</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div>
                <label class="form-label">Additional information</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Create new report
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Libs JS -->
  <script src="<?= base_url('tabler') ?>/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
  <!-- Tabler Core -->
  <script src="<?= base_url('tabler') ?>/dist/js/tabler.min.js"></script>
  <script src="<?= base_url('tabler') ?>/dist/js/demo.min.js"></script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
        chart: {
          type: "area",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: .16,
          type: 'solid'
        },
        stroke: {
          width: 2,
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "Profits",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
        }],
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: ["#206bc4"],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        fill: {
          opacity: 1,
        },
        stroke: {
          width: [2, 1],
          dashArray: [0, 3],
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "May",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
        }, {
          name: "April",
          data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
        }],
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: ["#206bc4", "#a8aeb7"],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
        chart: {
          type: "bar",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        plotOptions: {
          bar: {
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: "Profits",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
        }],
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: ["#206bc4"],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
        chart: {
          type: "bar",
          fontFamily: 'inherit',
          height: 240,
          parentHeightOffset: 0,
          toolbar: {
            show: false,
          },
          animations: {
            enabled: false
          },
          stacked: true,
        },
        plotOptions: {
          bar: {
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: "Web",
          data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
        }, {
          name: "Social",
          data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
        }, {
          name: "Other",
          data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
        }],
        grid: {
          padding: {
            top: -20,
            right: 0,
            left: -4,
            bottom: -4
          },
          strokeDashArray: 4,
          xaxis: {
            lines: {
              show: true
            }
          },
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
        ],
        colors: ["#206bc4", "#79a6dc", "#bfe399"],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
        chart: {
          type: "radialBar",
          fontFamily: 'inherit',
          height: 40,
          width: 40,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '75%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        },
        colors: ["#206bc4"],
        series: [35],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
        chart: {
          type: "area",
          fontFamily: 'inherit',
          height: 192,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: .16,
          type: 'solid'
        },
        stroke: {
          width: 2,
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "Purchases",
          data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
        }],
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: ["#206bc4"],
        legend: {
          show: false,
        },
        point: {
          show: false
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function() {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: "#206bc4",
          data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
        }],
      })).render();
    });
    // @formatter:on
  </script>
</body>

</html>