<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$no_kk=$_POST['no_kk'];
	$nama_kk=$_POST['nama_kk'];
	$alamat=$_POST['alamat'];
	$no=$_POST['no'];
	$rt=$_POST['rt'];
	$rw=$_POST['rw'];
	$kota=$_POST['kota'];
	$kodepos=$_POST['kodepos'];
	
	{
	
		include("petugas_data_detail_keluarga_kueri_update.php");
		
		if($query){
			header('location:petugas_data_detail_keluarga_form.php?success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>