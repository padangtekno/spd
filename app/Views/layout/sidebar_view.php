<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">Menu</li>
        <li class="nav-item">
            <a class="nav-link  <?= $menu == 'dashboard' ? '' : 'collapsed' ?>" href="<?= base_url('/') ?>">
                <i class="bi bi-speedometer2"></i><span>Dashboard</span>
            </a>
        </li>

        <?php if (session()->get('level') == '1') { ?>
            <!--Master Data-->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content <?= $menu == 'master-data' ? '' : 'collapse' ?>" data-bs-parent="#sidebar-nav">
                    <li> <a href="<?= base_url('Pekerjaan') ?>" class="<?= $submenu == 'pekerjaan' ? 'active' : '' ?>"> <i class="bi bi-list"></i><span>Pekerjaan</span> </a></li>
                    <li> <a href="<?= base_url('Pendidikan') ?>" class="<?= $submenu == 'pendidikan' ? 'active' : '' ?>"> <i class=" bi bi-list"></i><span>Pendidikan</span> </a></li>
                    <!-- <li> <a href="<?= base_url('Penghasilan') ?>" class="<?= $submenu == 'penghasilan' ? 'active' : '' ?>"> <i class=" bi bi-list"></i><span>Penghasilan</span> </a></li> -->
                    <li> <a href="<?= base_url('Bantuan') ?>" class="<?= $submenu == 'bantuan' ? 'active' : '' ?>"> <i class=" bi bi-list"></i><span>Jenis Bantuan</span> </a></li>
                    <li> <a href="<?= base_url('pengguna') ?>" class="<?= $submenu == 'pengguna' ? 'active' : '' ?>"> <i class=" bi bi-person-lines-fill"></i><span>Pengguna Sistem</span> </a></li>
                </ul>
            </li>
        <?php } ?>


        <li class="nav-item">
            <a class="nav-link <?= $menu == 'keluarga' ? '' : 'collapsed' ?>" href="<?= base_url('Keluarga') ?>">
                <i class="bi bi-house-fill"></i>
                <span>Data Keluarga</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $menu == 'penduduk' ? '' : 'collapsed' ?>" href="<?= base_url('penduduk') ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>Data Penduduk</span>
            </a>
        </li>
        <li class="nav-item"> <a class="nav-link <?= $menu == 'kelahiran' ? '' : 'collapsed' ?>" href="<?= base_url('kelahiran') ?>"> <i class="bi bi-person-plus-fill"></i>
                <span>Data Kelahiran</span> </a></li>

        <li class="nav-item">
            <a class="nav-link <?= $menu == 'kematian' ? '' : 'collapsed' ?>" href="<?= base_url('kematian') ?>">
                <i class="bi bi-person-dash-fill"></i>
                <span>Data Kematian</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $menu == 'pindah' ? '' : 'collapsed' ?>" href="<?= base_url('Pindah') ?>">
                <i class="bi bi-signpost-split-fill"></i>
                <span>Data Pindah</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $menu == 'penerima' ? '' : 'collapsed' ?>" href="<?= base_url('Bantuan/Penerima') ?>">
                <i class="bi bi-archive-fill"></i>
                <span>Penerima Bantuan</span>
            </a>
        </li>
        <?php if (session()->get('level') == '1') { ?>
            <!--Laporan Data-->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-folder2"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content <?= $menu == 'laporan' ? '' : 'collapse' ?> " data-bs-parent="#sidebar-nav">
                    <li> <a href="<?= base_url('Kelahiran/Laporan') ?>" class="<?= $submenu == 'laporan_kelahiran' ? 'active' : '' ?>"> <i class="bi bi-circle"></i><span>Laporan Kelahiran</span> </a></li>
                    <li> <a href="<?= base_url('Kematian/Laporan') ?>" class="<?= $submenu == 'laporan_kematian' ? 'active' : '' ?>"> <i class="bi bi-circle"></i><span>Laporan Kematian</span> </a></li>
                    <li> <a href="<?= base_url('Pindah/Laporan') ?>" class="<?= $submenu == 'laporan_pindah' ? 'active' : '' ?>"> <i class="bi bi-circle"></i><span>Laporan Pindah</span> </a></li>
                    <li> <a href="<?= base_url('Bantuan/Laporan') ?>" class="<?= $submenu == 'laporan_bantuan' ? 'active' : '' ?>"> <i class="bi bi-circle"></i><span>Laporan Penerima Bantuan</span> </a></li>
                </ul>
            </li>
        <?php } ?>
        <?php if (session()->get('level') == '1') { ?>
            <li class="nav-heading">Setting</li>
            <li class="nav-item">
                <a class="nav-link <?= $menu == 'setting' ? '' : 'collapsed' ?>" href="<?= base_url('home/setting') ?>">
                    <i class="bi bi-gear-fill"></i>
                    <span>Setting</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</aside>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div>