<?php
class News extends Controller {
    public function index() {
        $this->render('pages/news', );
    }

    public function category( $id ) {
        echo 'Tin tức - ' . $id;
    }
}
?>