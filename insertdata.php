<?php
	require_once("connection.php");

	if(isset($_POST['submit'])) {
		if(empty($_POST['nrp']) || empty($_POST['nama']) || empty($_POST['kelamin']) || empty($_POST['tgllahir']) || empty($_POST['alamat']) || empty($_POST['nohp'])) {
			echo ' Please Fill in the Blanks ';
		}
		else {
			$Nrp = $_POST['nrp'];
			$Nama = $_POST['nama'];
			$Kelamin = $_POST['kelamin'];
			$Tgllahir = $_POST['tgllahir'];
			$Alamat = $_POST['alamat'];
			$Nohp  = $_POST['nohp'];

			$query = "INSERT INTO anggota (Nrp, Nama, Kelamin, TglLahir, Alamat, NoHp) VALUES('$Nrp','$Nama','$Kelamin','$Tgllahir','$Alamat','$Nohp')";
			$result = mysqli_query($conn,$query);

			if($result) {
				header("location:lihat_mhs.php");
			}
			else {
				echo " Check Your Query / Check Your KodeBuku (Redundand are not eccepted";
			}
		}
	}
	else {
		header("location:index.php");
	}
?>
