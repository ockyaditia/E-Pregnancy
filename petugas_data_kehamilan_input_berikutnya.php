<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
		
	$kd_data_kehamilan=$_POST['kd_data_kehamilan'];
	$hamil_ke=$_POST['hamil_ke'];
	$jml_persalinan=$_POST['jml_persalinan'];
	$jml_keguguran=$_POST['jml_keguguran'];
	$lingkar_lengan_atas=$_POST['lingkar_lengan_atas'];
	$G=$_POST['G'];
	$P=$_POST['P'];
	$A=$_POST['A'];
	$jml_anak_hidup=$_POST['jml_anak_hidup'];
	$jml_lahir_mati=$_POST['jml_lahir_mati'];
	$jml_anak_lahir_kurang_bulan=$_POST['jml_anak_lahir_kurang_bulan'];
	$jarak_kehamilan=$_POST['jarak_kehamilan'];
	$jarak_kehamilan_waktu=$_POST['jarak_kehamilan_waktu'];
	$status_imunisasi=$_POST['status_imunisasi'];
	$penolong_persalinan_terakhir=$_POST['penolong_persalinan_terakhir'];
	$cara_persalinan_terakhir=$_POST['cara_persalinan_terakhir'];
	$tindakan=$_POST['tindakan'];
	
	{
	
		include("petugas_data_kehamilan_kueri_update_berikutnya.php");
		
		if($query){
			header('location:petugas_data_kehamilan_form.php?success=1');
		}
		else{
			die(mysql_error());
		}
	}
?>