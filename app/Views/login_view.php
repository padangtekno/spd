<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="<?= base_url() ?>/tampilan/assets/img/logo-cjr.png" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/NiceAdmin/assets/auth/style.css">
    <link href="<?= base_url() ?>/NiceAdmin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/NiceAdmin/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/chart.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/echarts.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/quill.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/simple-datatables.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/tinymce.min.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/validate.js"></script>
    <script src="<?= base_url() ?>/NiceAdmin/assets/js/main.js"></script>
</head>

<body>

    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>

                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Login
                    </h4>
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <ul>
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li> <?= esc($value) ?></li>
                                <?php  } ?>
                            </ul>
                        </div>
                    <?php  } ?>
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                    }

                    ?>
                    <?php echo form_open('auth/login') ?>
                    <div class="form-box px-3">
                        <div class="form-input">
                            <span>
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" name="username" placeholder="Username" class="form-control" value="<?= old('username') ?>">
                            <p class="text-danger"><?= $validasi->getError('username') ?></p>
                        </div>

                        <div class="form-input">

                            <select name="level" id="" class="form-select">
                                <option value="">--Level--</option>
                                <option value="1">Admin</option>
                                <option value="2">Kawil</option>
                            </select>
                            <p class="text-danger"><?= $validasi->getError('level') ?></p>
                        </div>

                        <div class="form-input">
                            <span>
                                <i class="fa fa-key"></i>
                            </span>
                            <input type="password" name="password" placeholder="Password" value="<?= old('password') ?>">
                            <p class="text-danger"><?= $validasi->getError('password') ?></p>

                        </div>

                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-block text-uppercase" type="button">Login</button>
                        </div>

                        <?php echo form_close() ?>

                        <hr class="my-4">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; Copyright <strong><span>Pemerintahan Desa Situhiang</span></strong>
        - <script>
            document.write(new Date().getFullYear())
        </script>
    </div>
</body>

</html>