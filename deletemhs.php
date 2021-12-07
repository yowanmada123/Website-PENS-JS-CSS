<?php

require_once("connection.php ");

if (isset($_GET['Del'])) {
    $Nrp = $_GET['Del'];
    $query = "DELETE FROM anggota WHERE Nrp = '" . $Nrp . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:lihat_mhs.php");
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location:lihat_mhs.php");
}
