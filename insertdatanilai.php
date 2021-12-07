<?php
	require_once("connection.php");

	if(isset($_POST['submit'])) {
		if(empty($_POST['nrp']) || empty($_POST['kode']) || empty($_POST['tanggal']) || empty($_POST['kembali'])) {
			echo ' Please Fill in the Blanks ';
		}
		else {
			$Nrp = $_POST['nrp'];
			$Kode = $_POST['kode'];
			$Tanggal = $_POST['tanggal'];
            $Kembali = $_POST['kembali'];
            
			$query = "INSERT INTO pinjam (Nrp, KodeBuku, Tanggal, Kembali) VALUES('$Nrp','$Kode','$Tanggal','$Kembali')";
			$result = mysqli_query($conn,$query);

			if($result) {
				header("location:lihat_nilai.php");
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
