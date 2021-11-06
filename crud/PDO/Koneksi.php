<?php
try{
    $dbh = new PDO("mysql:host=localhost; dbname=pegawai", "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Menambah data
    // $result = $dbh->query("INSERT INTO jabatan VALUES (NULL,'DIREKTUR')");
    // echo $result->rowCount()." Berhasil ditambahkan ke table jabatan. ";

    // Menampilkan data
    // $tampil = $dbh->query("SELECT * FROM jabatan");
    // while ($row = $tampil->fetch()) {
    //     echo "$row[id_jabatan] $row[nama_jabatan] <br>";
    // }

    // Mengubah data
    // $ubah = $dbh->query("UPDATE jabatan SET nama_jabatan='DIREKTUR UTAMA' WHERE id_jabatan=11");
    // echo $ubah->rowCount()." berhasil diperbarui. ";

    // Menghapus data
    // $hapus = $dbh->query("DELETE FROM jabatan WHERE id_jabatan=19");
    // echo $hapus->rowCount()." berhasil dihapus. ";

    // Menggunakan PREPARED STATEMENT
    // $st = $dbh->prepare("INSERT INTO pegawai VALUES(?,?,?,?,?,?,?)");
    // $st->bindParam(1, $id);
    // $st->bindParam(2, $nama);
    // $st->bindParam(3, $tgl_lahir);
    // $st->bindParam(4, $foto);
    // $st->bindParam(5, $ket);
    // $st->bindParam(6, $id_jabatan);
    // $st->bindParam(7, $jenis_kelamin);

    // $id = 'NULL';
    // $nama = 'Jafar Alkaff';
    // $tgl_lahir = '1996-06-19';
    // $foto = "user.png";
    // $ket = "FrontEnd Enginer React JS";
    // $id_jabatan = 1;
    // $jenis_kelamin = 'Pria';

    // $st->execute();
    // echo $st->rowCount()."<script>alert('Data Berhasil ditambahkan');</script>";

    $dbh = null;
} catch (PDOException $error) {
    die("Koneksi Gagal: ". $error->getMessage());
}
?>