<?php
    $mysqli = mysqli_connect("localhost", "root", "", "pegawai");

    $jabatan = [];
    $query = mysqli_query($mysqli, "SELECT * FROM jabatan");
    while($data = mysqli_fetch_assoc($query)) {
        $jabatan[] = $data;
    }
    echo json_encode($jabatan);

?>