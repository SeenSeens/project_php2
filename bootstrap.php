<?php
const __DIR_ROOT__ = __DIR__;
// Xử lý http root
if( !empty( $_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

/*$folder = str_replace( strtolower( $_SERVER['DOCUMENT_ROOT']), '', __DIR_ROOT__);
$web_root = $_SERVER['DOCUMENT_ROOT'];*/

define('__WEB_ROOT__', $web_root);

require_once 'configs/routes.php';
require_once 'app/App.php';
require_once 'core/Controller.php'; // Load base controller