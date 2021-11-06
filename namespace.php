<?php
    function __autoload($className) {
        require_once str_replace("\\", "/", $className).".php";
    }
    use autoload\Smartphone;
    class HPBaru extends Smartphone {

    }
    $hp_antum = new HPBaru();
    $hp_antum->kirim_pesan();
?>