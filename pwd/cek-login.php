<?php
include 'conn/koneksi.php';
if(isset($_POST['log'])) {
	$user = mysqli_real_escape_string($konek, trim($_POST['usr']));
	$pass = mysqli_real_escape_string($konek, $_POST['pass']); 
	//$pass = md5($pass);
	$sql ="SELECT * FROM admin_tbl where username_admin ='$user' and password_admin='$pass'";

	$rsl = mysqli_query($konek, $sql);
	$data = mysqli_fetch_array($rsl);
	
	$username = $data['username_admin'];
	$nama = $data['nama_admin'];
	$password = $data['password_admin'];
	$level = $data['level_admin'];
	
	
	
	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama_admin']=$nama;
		$_SESSION['level_admin']=$level;
		if ($level=='su') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
		}
		else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=user/index.php'>";
	
		}
	} else {
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	
	
}
?>