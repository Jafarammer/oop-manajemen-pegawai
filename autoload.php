<?php
    function __autoload($className) {
        require_once "autoload/$className.php";
    }

    $hp_ku = new Handphone();
    $hp_ku->isi_pulsa();
    echo "<br>";
    $hp_ku->isi_data();
?> 