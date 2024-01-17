<?php

class Database {
    private $__conn;
    public function __construct() {
        global $db_config;
        $db = Connection::getInstance( $db_config );
        $this->__conn = $db->getConnection( $db_config );
        var_dump($this->__conn);
    }
}