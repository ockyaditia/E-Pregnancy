<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_rujukan=$_POST['kd_rujukan'];
	$kd_persalinan=$_POST['kd_persalinan'];
	$nama=$_POST['nama'];
	$tgl_persalinan=$_POST['tgl_persalinan'];
	$tgl=$_POST['tgl'];
	$jam=$_POST['jam'];
	$dirujuk_ke=$_POST['dirujuk_ke'];
	$sebab_dirujuk=$_POST['sebab_dirujuk'];
	$diagnosis=$_POST['diagnosis'];
	$tindakan=$_POST['tindakan'];
	$yang_merujuk=$_POST['yang_merujuk'];
	
	{
	
		include("petugas_data_rujukan_kueri_update.php");
		
		if($query){
			header('location:petugas_data_rujukan_form.php?success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>