<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_persalinan=$_POST['kd_persalinan'];
	$nama_ibu=$_POST['nama_ibu'];
	$tanggal=$_POST['tanggal'];
	$keadaan_ibu=$_POST['keadaan_ibu'];
	$komplikasi_nifas=$_POST['komplikasi_nifas'];
	$keadaan_bayi=$_POST['keadaan_bayi'];
	
	{
	
		include("petugas_data_summary_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_summary_form.php?success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>