<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_dokter-bidan.php");
	
	$hapus = $_GET['hapus'];
	
	$query = mysql_query("DELETE FROM pelayanan_ibu_nifas WHERE kd_pelayanan = '$hapus'");
	$query2 = mysql_query("DELETE FROM det_ibu_nifas WHERE kd_pelayanan = '$hapus'");

	if ($query && $query2){
		header('location:bidan_data_ibu_nifas_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>