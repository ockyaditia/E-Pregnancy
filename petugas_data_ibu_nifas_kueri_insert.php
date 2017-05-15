<?php
	$query=mysql_query("insert into pelayanan_ibu_nifas(kd_data_kehamilan, nama, tgl, tempat, cara_kb_kontrasepsi)
		values('$kd_data_kehamilan', '$nama', '$tgl', '$tempat', '$cara_kb_kontrasepsi')");
?>