<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
						
	$query = mysql_query("DELETE FROM summary WHERE kd_summary = '$hapus'");

	if ($query){
		header('location:petugas_data_summary_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>