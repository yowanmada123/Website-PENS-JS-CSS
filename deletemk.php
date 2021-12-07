<?php

require_once("connection.php ");

if (isset($_GET['Del'])) {
    $Kode = $_GET['Del'];
    $query = "DELETE FROM buku WHERE KodeBuku = '" . $Kode . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:lihat_mk.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location:lihat_mk.php");
}
