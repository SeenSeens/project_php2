<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ( !empty( $page_title )) ? $page_title : 'Trang chủ' ?></title>
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?= __WEB_ROOT__ ?>/public/frontend/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="<?= __WEB_ROOT__ ?>/public/frontend/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?= __WEB_ROOT__ ?>/public/frontend/css/theme.min.css">
</head>
<body class="handheld-toolbar-enabled">
    <main class="page-wrapper">
        <!-- Navbar -->
        <?php $this->render('blocks/header'); ?>
        <!-- EndNavbar-->
        <!-- Slider-->
        <?php $this->render('blocks/slider'); ?>
        <!-- EndSlider-->
    </main>

    <?php $this->render('blocks/footer'); ?>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="<?= __WEB_ROOT__ ?>/public/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= __WEB_ROOT__ ?>/public/frontend/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= __WEB_ROOT__ ?>/public/frontend/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="<?= __WEB_ROOT__ ?>/public/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="<?= __WEB_ROOT__ ?>/public/frontend/js/theme.min.js"></script>
</body>
</html>