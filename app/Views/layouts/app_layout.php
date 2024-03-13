<?php $this->render('blocks/head'); ?>
    <main class="page-wrapper">
        <!-- Navbar -->
        <?php $this->render('blocks/header'); ?>
        <!-- EndNavbar-->

        <!-- Slider-->
        <?php $this->render('blocks/slider'); ?>
        <?php $this->render($content, $sub_content); ?>
        <!-- EndSlider-->
    </main>

    <?php $this->render('blocks/footer'); ?>
<?php $this->render('bloacks/foot'); ?>