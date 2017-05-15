<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_header=$_POST['kd_header'];
	$no_kk=$_POST['no_kk'];
	$nama_kk=$_POST['nama_kk'];
	$nama=$_POST['nama'];
	$tgl_lahir=$_POST['tgl_lahir'];
	
	{
	
		include("petugas_data_ibu_hamil_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_ibu_hamil_form.php?success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>