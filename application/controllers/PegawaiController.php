<?php
use \application\controllers\MainController;

class PegawaiController extends MainController {
    function __construct() {
        parent::__construct();
        $this->model('pegawai');
        $this->model('jabatan');
    }

    public function index() {
        $data = $this->pegawai->select()->join('jabatan', ['pegawai.id_jabatan' => 'jabatan.id_jabatan'], 'LEFT JOIN')->orderBy('pegawai.id_pegawai', 'DESC')->get();
        $this->template('pegawai/index', $data);
    }

    // Tambah Data
    public function add() {
        $data = $this->jabatan->select()->get();
        $this->template('pegawai/add', $data);
    }

    public function insert() {
        $foto = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        $tipefile = $_FILES['foto']['type'];
        $ukuranfile = $_FILES['foto']['size'];

        $error = "";
        if ($foto == "") {
            $pegawai = $this->pegawai->data([
                'nama_pegawai' => $_POST['nama'],
                'jenis_kelamin' => $_POST['jk'],
                'tgl_lahir' => $_POST['tgl_lahir'],
                'id_jabatan' => $_POST['jabatan'],
                'keterangan' => $_POST['keterangan']
            ]);
            $pegawai->insert();
        } else {
            if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
                $error = "Type file tidak didukung!";
            } elseif($ukuranfile >= 3000000) {
                echo $ukuranfile;
                $error = "Ukuran file terlalu besar (Lebih dari 3MB)!";
            } else {
                move_uploaded_file($lokasi,"../public/images/".$foto);
                $pegawai = $this->pegawai->data([
                    'nama_pegawai' => $_POST['nama'],
                    'jenis_kelamin' => $_POST['jk'],
                    'tgl_lahir' => $_POST['tgl_lahir'],
                    'id_jabatan' => $_POST['jabatan'],
                    'foto' => $foto,
                    'keterangan' => $_POST['keterangan']
                ]);
                $pegawai->insert();
            }
        }
        if ($error != "") {
            echo $error;
            echo "<meta http-equiv='refresh' content='2;url=".BASE_PATH."/pegawai/index'>";
        } else {
            $this->redirect('pegawai/index');
        }
    }

    // Ubah Data
    public function edit($id) {
        $pegawai = $this->pegawai->select()->where(['id_pegawai','=', $id])->get();
        $jabatan = $this->jabatan->select()->get();
        $data = [
            'pegawai' => $pegawai,
            'jabatan' => $jabatan
        ];
        $this->template('pegawai/edit', $data);
    }

    public function update() {
        $foto = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        $tipefile = $_FILES['foto']['type'];
        $ukuranfile = $_FILES['foto']['size'];

        $pegawai = $this->pegawai->find($_POST['id']);
        $error = "";
        if ($foto == "") {
            $pegawai->data([
                'nama_pegawai' => $_POST['nama'],
                'jenis_kelamin' => $_POST['jk'],
                'tgl_lahir' => $_POST['tgl_lahir'],
                'id_jabatan' => $_POST['jabatan'],
                'keterangan' => $_POST['keterangan']
            ]);
            $pegawai->update();
        } else {
            if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
                $error = "Type file tidak didukug!";
            } elseif($ukuranfile >= 3000000) {
                echo $ukuranfile;
                $error = "Ukuran file terlalu besar (lebih dari 3MB)!";
            } else {
                move_uploaded_file($lokasi,"../public/images/".$foto);
                $pegawai->data([
                    'nama_pegawai' => $_POST['nama'],
                    'jenis_kelamin' => $_POST['jk'],
                    'tgl_lahir' => $_POST['tgl_lahir'],
                    'id_jabatan' => $_POST['jabatan'],
                    'foto' => $foto,
                    'keterangan' => $_POST['keterangan']
                ]);
                $pegawai->update();
            }
        }
        if ($error != "") {
            echo $error;
            echo "<meta http-equiv='refresh' content='2;url=".BASE_PATH."/pegawai/index'>";
        } else {
            $this->redirect('pegawai/index');
        }
    }

    // Hapus Data
    public function delete($id, $foto) {
        if (file_exists("../public/images/$foto"))
        unlink("../public/images/$foto");

        $this->pegawai->find($id)->delete();
        $this->redirect('pegawai/index');
    }
}