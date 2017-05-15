<?php
	$query=mysql_query("update pelayanan_ibu_nifas set
		kd_data_kehamilan = '$kd_data_kehamilan',
		nama = '$nama',
		tgl = '$tgl',
		tempat = '$tempat',
		cara_kb_kontrasepsi = '$cara_kb_kontrasepsi'
		where kd_pelayanan = '$kd_pelayanan'
	");
?>