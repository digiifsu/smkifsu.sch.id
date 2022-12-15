<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?=(esc($title ?? '')) . " - Dashboard"; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>/assets/img/icon.ico" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/atlantis.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/demo.css">
    <style>
        .login-wrapper{
            width: 420px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?= $this->renderSection("content"); ?>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js"></script>
</body>

</html>