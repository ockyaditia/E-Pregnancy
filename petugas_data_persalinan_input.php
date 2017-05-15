<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_data_kehamilan=$_POST['kd_data_kehamilan'];
	$nama=$_POST['nama'];
	$tgl_persalinan=$_POST['tgl_persalinan'];
	$pukul=$_POST['pukul'];
	$umur_kehamilan=$_POST['umur_kehamilan'];
	$penolong=$_POST['penolong'];
	$penolong_lain_lain=$_POST['penolong_lain_lain'];
	$cara_persalinan=$_POST['cara_persalinan'];
	$cara_persalinan_tindakan=$_POST['cara_persalinan_tindakan'];
	$keadaan_ibu=$_POST['keadaan_ibu'];
	$keadaan_ibu_sakit=$_POST['keadaan_ibu_sakit'];
	$sakit_lain_lain=$_POST['sakit_lain_lain'];
	$ket_tambahan=$_POST['ket_tambahan'];
	
	if ($penolong_lain_lain == "none") {
		header('location:petugas_data_persalinan_tambah.php?error=1');
	} else if ($cara_persalinan == "none") {
		header('location:petugas_data_persalinan_tambah.php?error=2');
	} else if ($keadaan_ibu == "none") {
		header('location:petugas_data_persalinan_tambah.php?error=3');
	} else {
	
		include("petugas_data_persalinan_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_persalinan_form.php?success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>