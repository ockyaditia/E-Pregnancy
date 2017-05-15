<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_user=$_POST['kd_user'];
	$nama=$_POST['nama'];
	$bagian=$_POST['bagian'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$password = md5($password);
	
	include("petugas_data_user_akses_kode.php");
	
	$kd_user = $kode . $kd_user;
	
	/*if (!preg_match("/^[a-zA-Z0-9 _.,\/]*$/", $nama_kel)) {
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=1');
	} else if (!preg_match("/^[a-zA-Z0-9 _.,\/]*$/", $alamat)) {
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=2');
	} else*/ {
	
		include("petugas_data_user_akses_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_user_akses_form.php?bagian=' . $bagian . '&success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>