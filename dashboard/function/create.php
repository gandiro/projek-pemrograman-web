<?php
// Admin Create
global $conn;
if (isset($_POST['create-admin'])) {
	$name			=	$_POST['name'];
	$username		=	$_POST['username'];
	$password		=	$_POST['password'];
	$alamat			=	$_POST['alamat'];
	$telp				=	$_POST['telp'];
	$status			=	$_POST['status'];
	$gender			= $_POST['gender'];
	$access			=	'admin';
	$folder 		= 'foto';
	$tmp_name 	= $_FILES["foto"]["tmp_name"];
	$link 			= $folder . "/" . $_FILES["foto"]["name"];

	//Upload ke folder foto
	move_uploaded_file($tmp_name, $link);

	$admin =	mysqli_query($conn, "INSERT INTO users (`id`, `name`, `username`, `password`, `alamat`, `telp`, `status`, `gender`, `foto`, `access`) VALUES (NULL, '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$access')");

	if ($admin) {
		echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
		echo "<meta http-equiv='refresh' content='2;URL=?users=admin'>";
	} else {
		echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
	}
}
?>
<?php 
	// Guru Create
	if (isset($_POST['create-guru'])) {
		$noinduk		=	$_POST['noinduk'];
		$name				=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp				=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= $_POST['gender'];
		$access			=	'guru';
		$folder 		= 'foto';
    $tmp_name 	= $_FILES["foto"]["tmp_name"];
    $link 			= $folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$guru =	mysqli_query($conn, "INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, `telp`, `status`, `gender`, `foto`, `kelas_id`, `access`)VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', NULL, '$access')");

		if ($guru) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=guru'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Siswa Create
	if (isset($_POST['create-siswa'])) {
		$noinduk		=	$_POST['noinduk'];
		$name				=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp				=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= $_POST['gender'];
		$kelas			=	$_POST['kelas'];
		$access			=	'siswa';
		$folder 		= 'foto';
    $tmp_name 	= $_FILES["foto"]["tmp_name"];
    $link 			= $folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$siswa 	=	mysqli_query($conn, "INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, `telp`, `status`, `gender`, `foto`, `kelas_id`, `access`) VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$kelas', '$access')");

		if ($siswa) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>