<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_med_rec_kehamilan=$_POST['kd_med_rec_kehamilan'];
	$kd_data_kehamilan=$_POST['kd_data_kehamilan'];
	$tgl=$_POST['tgl'];
	$keluhan=$_POST['keluhan'];
	$tekanan_darah=$_POST['tekanan_darah'];
	$berat_badan=$_POST['berat_badan'];
	$umur_kehamilan=$_POST['umur_kehamilan'];
	$tinggi_fundus=$_POST['tinggi_fundus'];
	$letak_janin=$_POST['letak_janin'];
	$denyut_jantung_janin=$_POST['denyut_jantung_janin'];
	$kaki_bengkak=$_POST['kaki_bengkak'];
	$hasil_pemeriksaan_lab=$_POST['hasil_pemeriksaan_lab'];
	$tindakan=$_POST['tindakan'];
	$nasihat=$_POST['nasihat'];
	$ket=$_POST['ket'];
	$kapan_harus_kembali=$_POST['kapan_harus_kembali'];
	
	{
	
		include("petugas_data_medrec_kehamilan_kueri_update.php");
		
		if($query){
			header('location:petugas_data_medrec_kehamilan_form.php?kd='.$kd_data_kehamilan.'&success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>