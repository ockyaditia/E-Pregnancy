<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_data_kehamilan=$_POST['kd_data_kehamilan'];
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$tempat=$_POST['tempat'];
	$cara_kb_kontrasepsi=$_POST['cara_kb_kontrasepsi'];
	
	{
	
		include("petugas_data_ibu_nifas_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_ibu_nifas_form.php?success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>