<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_kel=$_POST['kd_kel'];
	$nama_kel=$_POST['nama_kel'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$jumlah_rw=$_POST['jumlah_rw'];
	$jumlah_rt=$_POST['jumlah_rt'];
	$ordinat_x=$_POST['ordinat_x'];
	$ordinat_y=$_POST['ordinat_y'];
	
	if (!preg_match("/^[a-zA-Z0-9 _.,\/]*$/", $nama_kel)) {
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=1');
	} else if (!preg_match("/^[a-zA-Z0-9 _.,\/]*$/", $alamat)) {
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=2');
	} else if (!is_numeric($ordinat_x)){  
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=3');
	} else if (!is_numeric($ordinat_y)){  
		header('location:petugas_data_kelurahan_ubah.php?ubah='. $kd_kel .'&error=4');
	} else {
	
		include("petugas_data_kelurahan_kueri_update.php");
		
		if($query){
			header('location:petugas_data_kelurahan_form.php?success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>