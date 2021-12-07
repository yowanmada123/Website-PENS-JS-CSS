<?php

require_once("connection.php");
$kode = $_GET['GetID'];
$query = "SELECT * FROM buku WHERE KodeBuku='" . $kode . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $kode = $row['KodeBuku'];
    $judul = $row['Judul'];
    $pengarang = $row['Pengarang'];
    $penerbit = $row['Penerbit'];
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Halaman Utama</title>
</head>

<body>
    <h2 align="center">PENGUBAHAN DATA BUKU</h2>

    <br />

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    //if(isset($_GET['pesan'])){
    if ($_SESSION['status'] != "login") {
        header("location:login.html");
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Data Anggota</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="insert_mhs.php">Tambah Data Anggota</a>
                        <a class="dropdown-item" href="lihat_mhs.php">Lihat Data Anggota</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Data Buku</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="insert_mk.php">Tambah Buku</a>
                        <a class="dropdown-item" href="lihat_mk.php">Lihat Buku</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Pinjam</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="insert_nilai.php">Pinjaman</a>
                        <a class="dropdown-item" href="lihat_nilai.php">Lihat Data Pinjaman</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="text-align:right">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> Edit Data Buku</h3>
                    </div>
                    <div class="card-body">

                        <form action="update_mk.php?ID=<?php echo $kode ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" Judul Buku " name="judul" value="<?php echo $judul ?>">
                            <input type="text" class="form-control mb-2" placeholder=" Pengarang  " name="pengarang" value="<?php echo $pengarang ?>">
                            <input type="text" class="form-control mb-2" placeholder=" Penerbit " name="penerbit" value="<?php echo $penerbit ?>">
                            <button class="btn btn-primary" name="update">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>