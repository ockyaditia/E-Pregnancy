<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$no_kk=$_POST['no_kk'];
	$nama_kk=$_POST['nama_kk'];
	$kd_kel=$_POST['kd_kel'];
	$nama_kel=$_POST['nama_kel'];
	$nama_anggota=$_POST['nama_anggota'];
	$ordinat_x=$_POST['ordinat_x'];
	$ordinat_y=$_POST['ordinat_y'];
	
	if (!is_numeric($ordinat_x)) {
		header('location:petugas_data_keluarga_ubah.php?ubah='. $kd_kel .'&error=1');
	} else if (!is_numeric($ordinat_y)) {
		header('location:petugas_data_keluarga_ubah.php?ubah='. $kd_kel .'&error=2');
	} else {
	
		include("petugas_data_keluarga_kueri_update.php");
		
		if($query){
			header('location:petugas_data_keluarga_form.php?success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>