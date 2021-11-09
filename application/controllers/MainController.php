<?php
    namespace application\controllers;
    use \Controller;

    class MainController extends Controller {
        public function __construct() {
            if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
               $this->redirect('login');
            }
        }

        public function template($viewName, $data = array()) {
            $view = $this->view('template');
            $view->bind('viewName', $viewName);
            $view->bind('data', $data);
        }
    }