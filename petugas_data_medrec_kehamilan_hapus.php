<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
						
	$query = mysql_query("DELETE FROM med_rec_kehamilan WHERE kd_med_rec_kehamilan = '$hapus'");

	if ($query){
		header('location:petugas_data_medrec_kehamilan_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>