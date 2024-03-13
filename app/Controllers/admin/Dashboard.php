<?php
class Dashboard extends Controller {
    public function index() {
        return $this->render('layouts/admin_layout');
    }

}
?>