<?php
	$query=mysql_query("update data_kehamilan set
		kd_header = '$kd_header',
		nama = '$nama',
		tgl_hpht = '$tgl_hpht',
		tgl_htp = '$tgl_htp',
		lingkar_lengan_atas = '$lingkar_lengan_atas',
		kek = '$kek',
		tinggi_badan = '$tinggi_badan',
		gol_darah = '$gol_darah',
		kontrasepsi = '$kontrasepsi',
		riwayat_penyakit = '$riwayat_penyakit',
		riwayat_alergi = '$riwayat_alergi'
		where kd_data_kehamilan = '$kd_data_kehamilan'
	");
?>