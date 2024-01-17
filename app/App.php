<?php

class App {
    private $__controller, $__action, $__params, $__routes;
    public function __construct() {
        global $routes, $config;

        $this->__routes = new Route();

        if( !empty( $routes['default_controller'] )) :
            $this->__controller = $routes['default_controller'];
        endif;

        $this->__action = 'index';
        $this->__params = [];

        $this->handleUrl();

    }

    /**
     * REQUEST_URI
     * PATH_INFO
     */
    private function getUrl() {
        if( !empty($_SERVER['PATH_INFO']) ) :
            $url = $_SERVER['PATH_INFO'];
        else:
            $url = '/';
        endif;
        return $url;
    }

    private function handleUrl() {
        $url = $this->getUrl();
        $url = $this->__routes->handleRoute($url);

        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values( $urlArr );

        $urlCheck = '';
        if( !empty( $urlArr )) {
            foreach ( $urlArr as $key => $item) {
                $urlCheck .= $item . '/';
                $fileCheck = rtrim( $urlCheck, '/');
                $fileArr = explode('/', $fileCheck);
                $fileArr[ count($fileArr) - 1 ] = ucfirst( $fileArr[ count($fileArr) - 1] );
                $fileCheck = implode('/', $fileArr);

                if( !empty( $urlArr[ $key - 1] ) ) {
                    unset( $urlArr[ $key - 1]);
                }

                $checkFilePath = 'app/controllers/' . $fileCheck . '.php';
                if ( file_exists( $checkFilePath )) {
                    $urlCheck = $fileCheck;
                    break;
                }
            }
            $urlArr = array_values( $urlArr );
        }


        /**
         * Xử lý controller
         */
        if ( !empty( $urlArr[0]) ) :
            $this->__controller = ucfirst( $urlArr[0] );
        else:
            $this->__controller = ucfirst( $this->__controller);
        endif;

        /**
         * Xử lý khi $urlCheck rỗng
         */
        if( empty( $urlCheck) ) {
            $urlCheck = $this->__controller;
        }

        $controllerFilePath = 'app/controllers/' . $urlCheck . '.php';
        if( file_exists( $controllerFilePath )) :
            require_once $controllerFilePath;
            // Kiểm tra class $this->__controller tồn tại
            if( class_exists( $this->__controller ) ) :
                $this->__controller = new $this->__controller();
                unset( $urlArr[0] );
            else:
                $this->loadError();
            endif;
        else:
            $this->loadError();
        endif;
        /**
         * Xử lý action
         */
        if( !empty($urlArr[1]) ) :
            $this->__action = $urlArr[1];
            unset( $urlArr[1] );
        endif;

        /**
         * Xử lý param
         */
        $this->__params = array_values( $urlArr );
        // Kiểm tra xem action có tồn tại trong controller không
        if ( method_exists($this->__controller, $this->__action) ) :
            call_user_func_array([ $this->__controller, $this->__action ], $this->__params );
        else:
            $this->loadError();
        endif;
    }

    private function loadError( $name = '404' ) {
        require_once 'Errors/' . $name . '.php';
    }
}
?>