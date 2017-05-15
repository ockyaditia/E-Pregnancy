<?php
	include('config.php');
	session_start();

	if ($_POST['username'] == "") {
		header('location:../login.php?error=1');
	} else if ($_POST['password'] == "") {
		header('location:../login.php?error=2');
	} else if ($_POST['bagian'] == "none") {
		header('location:../login.php?error=3');
	} else {
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$bagian = $_POST['bagian'];
		 
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$bagian = mysql_real_escape_string($bagian);
		
		$password = md5($password);
		 
		$q = mysql_query("select * from user_akses where username='$username' and password='$password' and bagian='$bagian'");
		 
		if (mysql_num_rows($q) == 1) {
			$row = mysql_fetch_array($q);
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['bagian'] = $bagian;
			header('location:../index.php');
		}
		else {
			header('location:../login.php?error=4');
		}
	}
?>