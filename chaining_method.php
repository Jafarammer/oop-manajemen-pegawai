<?php

use handphone as GlobalHandphone;

class handphone {
        public $jml_pulsa;

        public function mengirim_pesan() {
            $this->jml_pulsa -= 150;
            return $this;
        }
        public function memanggil($menit) {
            $this->jml_pulsa -= 100 * $menit;
            return $this;
        }
        public function info_pulsa() {
            return "Jumlah pulsa sekarang: ".$this->jml_pulsa;
        }
    }
    $hp_kalian = new handphone();
    $hp_kalian->jml_pulsa = 3000;
    echo $hp_kalian->info_pulsa();
    echo "<br>";
    echo $hp_kalian->mengirim_pesan()->memanggil(2)->memanggil(3)->info_pulsa();
?>