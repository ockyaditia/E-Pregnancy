<?php
	include("config/config.php");
	
	include("head.php");
	include("_session_petugas.php");
	
	$kd_det_ibu_nifas=$_POST['kd_det_ibu_nifas'];
	$kd_pelayanan=$_POST['kd_pelayanan'];
	
	$item1_kunjungan1=$_POST['item1_kunjungan1'];
	$item1_kunjungan2=$_POST['item1_kunjungan2'];
	$item1_kunjungan3=$_POST['item1_kunjungan3'];
	
	$item2_kunjungan1=$_POST['item2_kunjungan1'];
	$item2_kunjungan2=$_POST['item2_kunjungan2'];
	$item2_kunjungan3=$_POST['item2_kunjungan3'];
	
	$item3_kunjungan1=$_POST['item3_kunjungan1'];
	$item3_kunjungan2=$_POST['item3_kunjungan2'];
	$item3_kunjungan3=$_POST['item3_kunjungan3'];
	
	$item4_kunjungan1=$_POST['item4_kunjungan1'];
	$item4_kunjungan2=$_POST['item4_kunjungan2'];
	$item4_kunjungan3=$_POST['item4_kunjungan3'];
	
	$item5_kunjungan1=$_POST['item5_kunjungan1'];
	$item5_kunjungan2=$_POST['item5_kunjungan2'];
	$item5_kunjungan3=$_POST['item5_kunjungan3'];
	
	$item6_kunjungan1=$_POST['item6_kunjungan1'];
	$item6_kunjungan2=$_POST['item6_kunjungan2'];
	$item6_kunjungan3=$_POST['item6_kunjungan3'];
	
	$item7_kunjungan1=$_POST['item7_kunjungan1'];
	$item7_kunjungan2=$_POST['item7_kunjungan2'];
	$item7_kunjungan3=$_POST['item7_kunjungan3'];
	
	$item8_kunjungan1=$_POST['item8_kunjungan1'];
	$item8_kunjungan2=$_POST['item8_kunjungan2'];
	$item8_kunjungan3=$_POST['item8_kunjungan3'];
	
	$item9_kunjungan1=$_POST['item9_kunjungan1'];
	$item9_kunjungan2=$_POST['item9_kunjungan2'];
	$item9_kunjungan3=$_POST['item9_kunjungan3'];
	
	$item10_kunjungan1=$_POST['item10_kunjungan1'];
	$item10_kunjungan2=$_POST['item10_kunjungan2'];
	$item10_kunjungan3=$_POST['item10_kunjungan3'];
	
	$item11_kunjungan1=$_POST['item11_kunjungan1'];
	$item11_kunjungan2=$_POST['item11_kunjungan2'];
	$item11_kunjungan3=$_POST['item11_kunjungan3'];
	
	$item12_kunjungan1=$_POST['item12_kunjungan1'];
	$item12_kunjungan2=$_POST['item12_kunjungan2'];
	$item12_kunjungan3=$_POST['item12_kunjungan3'];
	
	$item13_kunjungan1=$_POST['item13_kunjungan1'];
	$item13_kunjungan2=$_POST['item13_kunjungan2'];
	$item13_kunjungan3=$_POST['item13_kunjungan3'];
	
	$item14_kunjungan1=$_POST['item14_kunjungan1'];
	$item14_kunjungan2=$_POST['item14_kunjungan2'];
	$item14_kunjungan3=$_POST['item14_kunjungan3'];
	
	$item15_kunjungan1=$_POST['item15_kunjungan1'];
	$item15_kunjungan2=$_POST['item15_kunjungan2'];
	$item15_kunjungan3=$_POST['item15_kunjungan3'];
	
	$item16_kunjungan1=$_POST['item16_kunjungan1'];
	$item16_kunjungan2=$_POST['item16_kunjungan2'];
	$item16_kunjungan3=$_POST['item16_kunjungan3'];
	
	$item17_kunjungan1=$_POST['item17_kunjungan1'];
	$item17_kunjungan2=$_POST['item17_kunjungan2'];
	$item17_kunjungan3=$_POST['item17_kunjungan3'];
	
	$item18_kunjungan1=$_POST['item18_kunjungan1'];
	$item18_kunjungan2=$_POST['item18_kunjungan2'];
	$item18_kunjungan3=$_POST['item18_kunjungan3'];
	
	$buang_air_besar=$_POST['buang_air_besar'];
	$buang_air_kecil=$_POST['buang_air_kecil'];
	$produksi_asi=$_POST['produksi_asi'];
	$catatan=$_POST['catatan'];
	
	$query = mysql_query("select * from det_ibu_nifas where kd_pelayanan = '$kd_pelayanan'");
	$data = mysql_fetch_array($query);
	
	if ($data['kd_pelayanan'] == '')
	{
		include("petugas_data_detail_ibu_nifas_kueri_insert.php");
		
		if($query){
			header('location:petugas_data_detail_ibu_nifas_form.php?kd='.$kd_pelayanan.'&success=1');
		}
		else{
			die(mysql_error());
		}
	} else
	{
		include("petugas_data_detail_ibu_nifas_kueri_update.php");
		
		if($query){
			header('location:petugas_data_detail_ibu_nifas_form.php?kd='.$kd_pelayanan.'&success_ubah=1');
		}
		else{
			die(mysql_error());
		}
	}
?>