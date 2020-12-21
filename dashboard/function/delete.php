<?php 
	//Admin Delete
	global $conn;
	if (isset($_GET['admin-delete'])) {
		$id 	=	$_GET['admin-delete'];

		$delete 	=	mysqli_query($conn, "DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=admin '/>";
		}
	}elseif (isset($_GET['guru-delete'])) {
		$id 	=	$_GET['guru-delete'];

		$delete 	=	mysqli_query($conn, "DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=guru '/>";
		}
	}elseif (isset($_GET['siswa-delete'])) {
		$id 	=	$_GET['siswa-delete'];

		$delete 	=	mysqli_query($conn, "DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=siswa '/>";
		}
	}
?>