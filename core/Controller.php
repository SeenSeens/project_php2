<?php
class Controller {
    public function model( $model ) {
        if( file_exists(__DIR_ROOT__ . '/app/models/' . $model . '.php')) {
            require_once __DIR_ROOT__ . '/app/models/' . $model . '.php';
            if ( class_exists($model) ) {
                return new $model();
            }
        }
        return false;
    }

    public function render( $view,  array $data = [] ): void {
        extract( $data );
        if( file_exists(__DIR_ROOT__ . '/app/views/' . $view . '.php')) {
            require_once __DIR_ROOT__ . '/app/views/' . $view . '.php';
        }
    }
}

?>