<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_data_kehamilan=$_POST['kd_data_kehamilan'];
	$kd_header=$_POST['kd_header'];
	$nama=$_POST['nama'];
	$tgl_hpht=$_POST['tgl_hpht'];
	$tgl_htp=$_POST['tgl_htp'];
	$lingkar_lengan_atas=$_POST['lingkar_lengan_atas'];
	$kek=$_POST['kek'];
	$tinggi_badan=$_POST['tinggi_badan'];
	$gol_darah=$_POST['gol_darah'];
	$kontrasepsi=$_POST['kontrasepsi'];
	$riwayat_penyakit=$_POST['riwayat_penyakit'];
	$riwayat_alergi=$_POST['riwayat_alergi'];
	
	if (!is_numeric($lingkar_lengan_atas)) {
		header('location:petugas_data_kehamilan_ubah.php?ubah='. $kd_data_kehamilan .'&error=1');
	} else if (!is_numeric($tinggi_badan)) {
		header('location:petugas_data_kehamilan_ubah.php?ubah='. $kd_data_kehamilan .'&error=2');
	} else if ($gol_darah == "none") {
		header('location:petugas_data_kehamilan_ubah.php?ubah='. $kd_data_kehamilan .'&error=3');
	} else {
	
		include("petugas_data_kehamilan_kueri_update.php");
		
		if($query){
			header('location:petugas_data_kehamilan_ubah_berikutnya.php?ubah='.$kd_data_kehamilan);
		}
		else{
			die(mysql_error());
		}
	}
?>