<?php
	require_once("connection.php");

	if(isset($_POST['submit'])) {
		if(empty($_POST['kode']) || empty($_POST['judul']) || empty($_POST['pengarang']) || empty($_POST['penerbit'])) {
			echo ' Please Fill in the Blanks ';
		}
		else {
			$kode = $_POST['kode'];
			$judul = $_POST['judul'];
			$pengarang = $_POST['pengarang'];
			$penerbit = $_POST['penerbit'];

			$query = "INSERT INTO buku (KodeBuku, Judul, Pengarang, Penerbit) VALUES('$kode','$judul','$pengarang','$penerbit')";
			$result = mysqli_query($conn,$query);

			if($result) {
				header("location:lihat_mk.php");
			}
			else {
				echo " Please Check Your Query / Check Your KodeBuku (Redundand are not eccepted)";
			}
		}
	}
	else {
		header("location:index.php");
	}
?>
