<?php
	$query=mysql_query("insert into data_kehamilan(kd_header, nama, tgl_hpht, tgl_htp, lingkar_lengan_atas, kek, tinggi_badan, gol_darah, kontrasepsi, riwayat_penyakit, riwayat_alergi, kd_data_kehamilan)
		values('$kd_header', '$nama', '$tgl_hpht', '$tgl_htp', '$lingkar_lengan_atas', '$kek', '$tinggi_badan', '$gol_darah', '$kontrasepsi', '$riwayat_penyakit', '$riwayat_alergi', '$kd_data_kehamilan')");
?>