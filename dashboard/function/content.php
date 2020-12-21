<?php
if (isset($_GET['users'])) {
	if ($_GET['users'] == 'admin') {	//	Admin
		include('table/admin.php');
	} elseif ($_GET['users'] == 'admin-create') {
		include('function/create.php');
		include('forms/create_admin.php');
	} elseif ($_GET['users'] == 'guru') {	// 	Guru
		include('table/guru.php');
	} elseif ($_GET['users'] == 'guru-create') {
		include('function/create.php');
		include('forms/create_guru.php');
	} elseif ($_GET['users'] == 'siswa') { 	//	Siswa
		include('table/siswa.php');
	} elseif ($_GET['users'] == 'siswa-create') {
		include('function/create.php');
		include('forms/create_siswa.php');
	}
} elseif (isset($_GET['admin-edit'])) {		//	Admin
	include('function/edit.php');
	include('forms/edit_admin.php');
} elseif (isset($_GET['admin-delete'])) {
	include('function/delete.php');
} elseif (isset($_GET['guru-edit'])) {		//	Guru
	include('function/edit.php');
	include('forms/edit_guru.php');
} elseif (isset($_GET['guru-delete'])) {
	include('function/delete.php');
} elseif (isset($_GET['siswa-edit'])) {		//	Siswa
	include('function/edit.php');
	include('forms/edit_siswa.php');
} elseif (isset($_GET['siswa-delete'])) {
	include('function/delete.php');
} elseif (isset($_GET['profile'])) {
	include('function/edit.php');
	include('forms/edit_profile.php');
} elseif (isset($_GET['perangkat'])) {
	
} else {
?>
	<!-- ================================================================================================ -->
	<div class="row">
		<!-- BEGIN PROFILE -->
		<div class="col-md-4">
			<div class="grid box-profile bg-blue">
				<div class="grid-body">
					<img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Profile">
					<h3><?php echo $_SESSION['name']; ?></h3>
					<span></span>
				</div>
				<div class="footer bg-black" style="height: 50px;">
				</div>
			</div>
		</div>
		<!-- END PROFILE -->
	</div>
	<!-- ================================================================================================ -->
<?php
}
?>