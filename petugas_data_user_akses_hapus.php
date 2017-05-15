<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$hapus = $_GET['hapus'];
	$bagian = $_GET['bagian'];
						
	$query = mysql_query("DELETE FROM user_akses WHERE kd_user = '$hapus'");

	if ($query){
		header('location:petugas_data_user_akses_form.php?bagian=' . $bagian . '&success_hapus=1');
	}
	else {
		die(mysql_error());
	}
?>