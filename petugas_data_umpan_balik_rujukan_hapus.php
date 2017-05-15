<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
						
	$query = mysql_query("DELETE FROM umpan_balik_rujukan WHERE kd_umpan_balik_rujukan = '$hapus'");

	if ($query){
		header('location:petugas_data_umpan_balik_rujukan_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>