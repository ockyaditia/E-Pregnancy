<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_persalinan=$_POST['kd_persalinan'];
	$anak_ke=$_POST['anak_ke'];
	$berat_lahir=$_POST['berat_lahir'];
	$panjang_badan=$_POST['panjang_badan'];
	$lingkar_kepala=$_POST['lingkar_kepala'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$kondisi1=$_POST['kondisi1'];
	$kondisi2=$_POST['kondisi2'];
	$kondisi3=$_POST['kondisi3'];
	$kondisi4=$_POST['kondisi4'];
	$kondisi5=$_POST['kondisi5'];
	$kondisi6=$_POST['kondisi6'];
	$kondisi7=$_POST['kondisi7'];
	$kondisi8=$_POST['kondisi8'];
	$asuhan1=$_POST['asuhan1'];
	$asuhan2=$_POST['asuhan2'];
	$asuhan3=$_POST['asuhan3'];
	$asuhan4=$_POST['asuhan4'];
	$ket_tambahan=$_POST['ket_tambahan'];
	
	{
	
		include("petugas_data_detail_persalinan_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_detail_persalinan_form.php?kd='.$kd_persalinan.'&success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>