<?php

require_once("connection.php");

if (isset($_POST['update'])) {
    $Nrp = $_GET['ID'];
    $Nama = $_POST['nama'];
    $Kelamin = $_POST['kelamin'];
    $Tgllahir = $_POST['tgllahir'];
    $Alamat = $_POST['alamat'];
    $Nohp = $_POST['nohp'];

    $query = "UPDATE anggota SET Nama='" . $Nama . "', Kelamin ='" . $Kelamin . "', TglLahir = '" . $Tgllahir . "', NoHp='" . $Nohp . "' WHERE Nrp = '" . $Nrp . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:lihat_mhs.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
   header("location:lihat_mhs.php");
}
