<?php
	$query=mysql_query("update med_rec_kehamilan set
		kd_data_kehamilan = '$kd_data_kehamilan',
		tgl = '$tgl',
		keluhan = '$keluhan',
		tekanan_darah = '$tekanan_darah',
		berat_badan = '$berat_badan',
		umur_kehamilan = '$umur_kehamilan',
		tinggi_fundus = '$tinggi_fundus',
		letak_janin = '$letak_janin',
		denyut_jantung_janin = '$denyut_jantung_janin',
		kaki_bengkak = '$kaki_bengkak',
		hasil_pemeriksaan_lab = '$hasil_pemeriksaan_lab',
		tindakan = '$tindakan',
		nasihat = '$nasihat',
		ket = '$ket',
		kapan_harus_kembali = '$kapan_harus_kembali'
		where kd_med_rec_kehamilan = '$kd_med_rec_kehamilan'
	");
?>