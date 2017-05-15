<?php
	$query=mysql_query("insert into det_persalinan(kd_persalinan, anak_ke, berat_lahir, panjang_badan, lingkar_kepala, jenis_kelamin, kondisi1, kondisi2, kondisi3, kondisi4, kondisi5, kondisi6, kondisi7, kondisi8, asuhan1, asuhan2, asuhan3, asuhan4, ket_tambahan)
		values('$kd_persalinan', '$anak_ke', '$berat_lahir', '$panjang_badan', '$lingkar_kepala', '$jenis_kelamin', '$kondisi1', '$kondisi2', '$kondisi3', '$kondisi4', '$kondisi5', '$kondisi6', '$kondisi7', '$kondisi8', '$asuhan1', '$asuhan2', '$asuhan3', '$asuhan4', '$ket_tambahan')");
?>