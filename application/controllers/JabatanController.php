<?php
use \application\controllers\MainController;

class JabatanController extends MainController {
    function __construct() {
        parent::__construct();
        $this->model('jabatan');
    }

    public function index() {
        $data = $this->jabatan->select()->orderBy('id_jabatan', 'DESC')->get();
        $this->template('jabatan/index', $data);
    }

    // Tambah data
    public function add() {
        $this->template('jabatan/add');
    }

    public function insert() {
        $jabatan = $this->jabatan->data([
            'nama_jabatan' => $_POST['nama']
        ]);
        $jabatan->insert();
        $this->redirect('jabatan/index');
    }
}