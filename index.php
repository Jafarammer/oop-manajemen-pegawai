<!-- Property dan method dan cara mengakses objek -->
<?php
    class handphone {
        var $jml_pulsa;

        function mengirim_pesan() {
            $this->jml_pulsa -= 150;
        }
    }

    $hp_latif = new handphone();
    $hp_latif->jml_pulsa = 2500;

    $hp_daffa = new handphone();
    $hp_daffa->jml_pulsa = 1500;
    echo "Jumlah pulsa latif ";
    echo $hp_latif->jml_pulsa;
    echo "<br>";
    $hp_latif->mengirim_pesan();
    echo "Jumlah pulsa sekarang ";
    echo $hp_latif->jml_pulsa;
    echo "<br>";
    $hp_latif->mengirim_pesan();
    echo "Jumlah pulsa saat ini ";
    echo $hp_latif->jml_pulsa;
    echo "<br>";
    $hp_daffa->mengirim_pesan();
    echo "Jumlah pulsa latif ";
    echo $hp_latif->jml_pulsa;
    echo "<br>";
    echo "Jumlah pulsa daffa ";
    echo $hp_daffa->jml_pulsa;

?>
<h4>Argumen pada method</h4>
<?php
    class hanphone1 {
        var $jml_pulsa;

        function mengirim_pesan($tarif, $jml_pesan = 1) {
            $this->jml_pulsa -= $tarif * $jml_pesan;   
        }
    }

    $hp_haidar = new hanphone1();
    $hp_haidar->jml_pulsa = 5000;

    echo "Jumlah pulsa haidar ";
    echo $hp_haidar->jml_pulsa;
    echo "<br>";

    $hp_haidar->mengirim_pesan(200);
    echo "Jumlah pulsa sekarang ";
    echo $hp_haidar->jml_pulsa;
    echo "<br>";
    $hp_haidar->mengirim_pesan(200, 4);
    echo "Jumlah pulsa sekarang ";
    echo $hp_haidar->jml_pulsa;

?>

<h4>Inheritance</h4>
<?php
    class laptop {
        public $merk;
        public $os;

        public function hidupkan() {
            return "Menghidupkan Laptop $this->merk";
        }
    }

    class noteBook extends laptop {
        public function info_laptop() {
            return "Merek: $this->merk, OS: $this->os";
        }
    }
    $laptop_jafar = new noteBook();
    $laptop_jafar->merk = "Lenovo";
    $laptop_jafar->os = "Windows";

    echo $laptop_jafar->hidupkan();
    echo "<br>";
    echo $laptop_jafar->info_laptop();
?>

<h4>Encapsulations</h4>
<?php
    class laptop1 {
        public $merk;
        protected $os;
        private $tahun_produksi;
    }
    class noteBook1 extends laptop1 {
        public function info_laptop() {
            $this->os = "Linux";
            return "Merek: $this->merk, OS: $this->os";
        }
        public function release() {
            return "Tahun Produksi: $this->tahun_produksi";
        }
    }
    $laptop_dina = new noteBook1();
    $laptop_dina->merk = "Lenovo";
    echo $laptop_dina->info_laptop();
    echo "<br>";
    echo $laptop_dina->release();
?>

<h4>Scope resolution operator</h4>
<?php
    class hanphone3 {
        public function info_hp($merk_hp) {
            return "Merek HP: $merk_hp";
        }
    }
    echo hanphone3::info_hp("Xiaomi");
?>

<h4>Keyword parent dan self</h4>
<?php
    class hanphone4 {
        public function tampil_pesan_handphone() {
            echo self::tampil_pesan();
            echo $this->tampil_pesan();
        }

        public function tampil_pesan() {
            return "Ini perangkat handphone";
        }
    }
    class smartphone4 extends hanphone4 {
        public function tampil_pesan_smartphone() {
            echo parent::tampil_pesan();
            echo $this->tampil_pesan();
        }
        public function tampil_pesan() {
            return "Jenis Smartphone";
        }
    }

    $hp_haikal = new smartphone4();
    $hp_haikal->tampil_pesan_handphone();
    echo "<br>";
    $hp_haikal->tampil_pesan_smartphone();
?>

<h4>Static Property</h4>
<?php
    class handphone5 {
        protected static function info_handphone() {
            return "Ini perangkat Handphone ";
        }
    }
    class smartphone5 extends handphone5 {
        private static function info_samartphone() {
            return "Jenis Smartphone";
        }
        public static function tampil_info() {
            echo parent::info_handphone();
            echo self::info_samartphone();
        }
    }
    smartphone5::tampil_info();
?>

<h4>Class Konstanta</h4>
<?php
    class handphone6 {
        const OS = "Android";
    }
    // mengakses dengan nama class
    echo handphone6::OS;
    // mengakses dengan objek
    $hp_alkaff = new handphone6();
    echo "<br>";
    echo $hp_alkaff::OS;
    // mengakses dengan variable
    echo "<br>";
    $hp = "handphone6";
    echo $hp::OS;
?>

<h4>Final class dan method</h4>
<?php
    // class handphone7 {
    //     final public function nyalakan() {
    //         return "Handphone dinyalakan";
    //     }
    // }
    // final class smartphone7 extends handphone7 {
    //     // public function nyalakan() {
    //     //     return "Smartphone dinyalakan";
    //     // }
    // }
    // class hp_second extends smartphone7 {
    //     // public function nyalakan() {
    //     //     return "Handphone tidak dapat dihidupkan";
    //     // }
    // }
?>

<h4>Abstract class dan method</h4>
<?php
    abstract class handphone8 {
        abstract public function hidupkan();

        public function info_hp($merk) {
            return "Merek Handphone: $merk";
        }
    }
    class smartphone8 extends handphone8 {
        public function hidupkan() {
            return "Smartphone dihidupkan";
        }
    }
    $hp_ane = new smartphone8();
    // $hp_ane = new handphone8();
    echo $hp_ane->hidupkan();
    echo "<br>";
    echo $hp_ane->info_hp("Iphone 12 mini");
?>

<h4>Object Interface</h4>
<?php
    interface sim_card {
        public function aktivasi();
        function isi_pulsa();
    }
    interface memory_card {
        function format();
    }
    class handphone9 implements sim_card {
        public function aktivasi() {
            return "Kartu telah aktif";
        }

        public function isi_pulsa() {
            return "Pulsa telah diisi";
        }
    }

    class smartphone9 implements sim_card, memory_card {
        public function aktivasi() {
            return "Kartu telah aktif";
        }
        public function isi_pulsa() {
            return "Pulsa telah diisi";
        }
        public function format() {
            return "Memory card telah diformat";
        }
    }
    $kartu_jafar = new smartphone9();
    echo $kartu_jafar->aktivasi();

?>

<h4>Constructor dan Destructor</h4>
<?php
    class hanphone2 {
        var $jml_pulsa;
        function __construct($pulsa) {
            $this->jml_pulsa = $pulsa;
        }
        function mengirim_pesan($tarif, $jml_pesan = 1) {
            $this->jml_pulsa -= $tarif * $jml_pesan;
        }

        function __destruct() {
            echo "Jumlah Pulsa Sekarang ";
            echo $this->jml_pulsa;
        }
    }
    $hp_danial = new hanphone2(2000);
    echo "Jumlah pulsa danial ";
    echo $hp_danial->jml_pulsa;
    echo "<br>";
    $hp_danial->mengirim_pesan(200);
?>