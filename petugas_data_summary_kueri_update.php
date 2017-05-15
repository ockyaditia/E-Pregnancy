<?php
	$query=mysql_query("update summary set
		kd_persalinan = '$kd_persalinan',
		nama_ibu = '$nama_ibu',
		tanggal = '$tanggal',
		keadaan_ibu = '$keadaan_ibu',
		komplikasi_nifas = '$komplikasi_nifas',
		keadaan_bayi = '$keadaan_bayi'
		where kd_summary = '$kd_summary'
	");
?>