<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
						
	$query = mysql_query("DELETE FROM mst_kk WHERE no_kk = '$hapus'");
	$query2 = mysql_query("DELETE FROM det_kk WHERE no_kk = '$hapus'");

	if ($query & $query2){
		header('location:petugas_data_keluarga_form.php?success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>