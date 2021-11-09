<?php
    use application\controllers\MainController;

    class DashboardController extends MainController {
        public function index() {
            $this->template('dashboard');
        }
    }