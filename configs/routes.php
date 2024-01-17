<?php
$routes['default_controller'] = 'home';

/**
 * Đường dẫn ảo => đường dẫn thật
 */
$routes['san-pham'] = 'product/index';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
?>