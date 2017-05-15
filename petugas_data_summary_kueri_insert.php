<?php
	$query=mysql_query("insert into summary(kd_summary, kd_persalinan, nama_ibu, tanggal, keadaan_ibu, komplikasi_nifas, keadaan_bayi)
		values('$kd_summary', '$kd_persalinan', '$nama_ibu', '$tanggal', '$keadaan_ibu', '$komplikasi_nifas', '$keadaan_bayi')");
?>