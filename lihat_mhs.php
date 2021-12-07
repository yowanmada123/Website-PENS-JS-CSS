<?php
require_once("connection.php");
$query = "SELECT * from anggota ";
$result = mysqli_query($conn, $query);
?>

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
    <h2 align="center">LIHAT DATA ANGGOTA</h2>

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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Data Mahasiswa</a>
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
                        <a class="dropdown-item" href="insert_nilai.php">Peminjaman</a>
                        <a class="dropdown-item" href="lihat_nilai.php">Lihat Data Peminjaman</a>
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
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td> NRP </td>
                            <td> Nama </td>
                            <td> Jenis Kelamin </td>
                            <td> Tanggal Lahir </td>
                            <td> Alamat</td>
                            <td> Telpon</td>
                            <td> Edit </td>
                            <td> Delete </td>
                        </tr>
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $Nrp = $row['Nrp'];
                            $Nama = $row['Nama'];
                            $Kelamin = $row['Kelamin'];
                            $Tgllahir = $row['TglLahir'];
                            $Alamat = $row['Alamat'];
                            $Nohp = $row['NoHp'];
                        ?>
                            <tr>
                                <td><?php echo $Nrp ?></td>
                                <td><?php echo $Nama ?></td>
                                <td><?php echo $Kelamin ?></td>
                                <td><?php echo $Tgllahir ?></td>
                                <td><?php echo $Alamat ?></td>
                                <td><?php echo $Nohp ?></td>
                                <td><a href="editmhs.php?GetID=<?php echo $Nrp?>">Edit</a></td>
                                <td><a href="deletemhs.php?Del=<?php echo $Nrp?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>