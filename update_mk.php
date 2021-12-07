<?php

require_once("connection.php");

if (isset($_POST['update'])) {
    $kode = $_GET['ID'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $query = "UPDATE buku set Judul = '" . $judul . "',Pengarang='" . $pengarang . "',Penerbit='".$penerbit."' where KodeBuku='" . $kode . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:lihat_mk.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location:lihat_mk.php");
}
