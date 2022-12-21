<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> <?= esc($title ?? null)  ?> - "Dashbaord" </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('assets/img/icon.ico'); ?>" type="image/x-icon" />

    <!-- Fonts and icons -->
    <?= script_tag('assets/js/plugin/webfont/webfont.min.js'); ?>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('assets/css/fonts.min.css'); ?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <?php
    $link_file = array(
        'assets/css/bootstrap.min.css',
        'assets/css/atlantis.min.css',
        'assets/css/demo.css',
    );
    foreach ($link_file as $link) {
        echo link_tag($link).PHP_EOL;
    }

    //render secition head
    $this->renderSection('head');
    ?>
    <style>
        .table>tbody>tr>td, .table>tbody>tr>th {
            border: 1px solid rgba(231, 231, 231, 0.36) !important;
            padding: 8px!important;
        }
        .table>tbody>tr>td.center, .table>tbody>tr>th.center{
            text-align: center;
        }
    </style>
    <?=??>
</head>

<body>
    <div class="wrapper">
        <!-- s:main header -->
        <?= $this->include('admin/part/main_header'); ?>
        <!-- e:main header -->
        <!-- s:sidebar -->
        <?= $this->include('admin/part/sidebar'); ?>
        <!-- e:sidebar -->
        <!-- s:content -->
        <div class="main-panel">
            <div class="content">
                <?= $this->renderSection('content'); ?>
            </div>
            <?= $this->include('admin/part/footer'); ?>
        </div>
        <!-- e:content -->
    </div>
    <?php
    $script_src = array(
        'assets/js/core/jquery.3.2.1.min.js',
        'assets/js/core/popper.min.js',
        'assets/js/core/bootstrap.min.js',
        'assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
        'assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
        'assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
        'assets/js/plugin/chart.js/chart.min.js',
        'assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js',
        'assets/js/plugin/chart-circle/circles.min.js',
        'assets/js/plugin/datatables/datatables.min.js',
        'assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js',
        'assets/js/plugin/jqvmap/jquery.vmap.min.js',
        'assets/js/plugin/jqvmap/maps/jquery.vmap.world.js',
        'assets/js/plugin/sweetalert/sweetalert.min.js',
        'assets/js/atlantis.js',
        'assets/js/setting-demo.js',
        'assets/js/demo.js',
    );
    //load javascript file
    foreach ($script_src as $src) {
        echo script_tag($src) . PHP_EOL;
    }
    $this->renderSection('footer');
    ?>
</body>

</html>