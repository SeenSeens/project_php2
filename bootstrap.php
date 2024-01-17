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

/**
 * Tự động load configs
 */
$configs_dir = scandir( 'configs' );
if( !empty( $configs_dir )) {
    foreach ( $configs_dir as $item ) {
        if( $item !== '.' && $item !== '..' && file_exists('configs/' . $item) ) {
            require_once 'configs/' . $item ; // Load routes config
        }
    }
}
require_once 'core/Route.php'; // Load Route class
require_once 'app/App.php'; // Load App

// Kiểm tra config và load dâtabase
if( !empty( $config['database']) ) {
    $db_config = array_filter( $config['database']);
    var_dump($db_config);
    if( !empty( $db_config) ) {
        require_once 'core/Connection.php';
        require_once 'core/Database.php';
        $db = new Database();
    }
}
require_once 'core/Controller.php'; // Load base controller
?>