<?php
//Admin Edit 
global $conn;
if (isset($_GET['admin-edit'])) {
	$id 	=	$_GET['admin-edit'];

	if (isset($_POST['admin-update'])) {
		$username =	$_POST['username'];
		$name 		=	$_POST['name'];
		$telp 		=	$_POST['telp'];
		$alamat 	=	$_POST['alamat'];

		$admin =	mysqli_query($conn, "UPDATE users SET `name` = '$name', `username` = '$username', `telp` = '$telp', `alamat` = '$alamat' WHERE id = '$id'");

		if ($admin) {
			echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
			echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
		} else {
			echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
			echo 	"<meta http-equiv='refresh' content='2;URL=?users=admin'>";
		}
	}

	$dataadmin = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
	$row = mysqli_fetch_array($dataadmin);
}
?>
<?php
	//Guru Edit 
	if (isset($_GET['guru-edit'])) {
		$id 	=	$_GET['guru-edit'];

		if (isset($_POST['guru-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username =	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];

			$guru 		=	mysqli_query($conn, "UPDATE users SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', `alamat` = '$alamat' WHERE id = '$id'");

			if ($guru) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=guru'>";
			}
		}

		$dataguru = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
		$row = mysqli_fetch_array($dataguru);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['siswa-edit'])) {
		$id =	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$noinduk	=	$_POST['noinduk'];
			$username =	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$alamat 	=	$_POST['alamat'];
			$status 	=	$_POST['status'];
			$kelas		=	$_POST['kelas'];

			$siswa = mysqli_query($conn, "UPDATE users SET `nomor_induk` = '$noinduk', `name` = '$name', `username` = '$username', `telp` = '$telp', `alamat` = '$alamat', `kelas_id` = '$kelas', `status` = '$status' WHERE id = '$id'");

			if ($siswa) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
			}
		}

		$datasiswa = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
		$row = mysqli_fetch_array($datasiswa);
	}
?>
<?php
	//Siswa Edit 
	if (isset($_GET['profile'])) {
		$id =	$_GET['profile'];

		if (isset($_POST['pass-update'])) {
			$password	=	$_POST['password'];

			$users =	mysqli_query($conn, "UPDATE users SET `password` = '$password' WHERE id = '$id'");

			if ($users) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL= index.php'>";
			}else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
				echo 	"<meta http-equiv='refresh' content='2;URL=index.php'>";
			}
		}

		$datausers = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
		$row = mysqli_fetch_array($datausers);
	}