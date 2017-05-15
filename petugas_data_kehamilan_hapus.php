<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
						
	$query1 = mysql_query("DELETE FROM data_kehamilan WHERE kd_data_kehamilan = '$hapus'");
	$query2 = mysql_query("DELETE FROM med_rec_kehamilan WHERE kd_data_kehamilan = '$hapus'");

	if ($query1 && $query2){
		header('location:petugas_data_kehamilan_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>