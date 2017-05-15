<?php
	$query=mysql_query("insert into med_rec_kehamilan(kd_data_kehamilan, tgl, keluhan, tekanan_darah, berat_badan, umur_kehamilan, tinggi_fundus, letak_janin, denyut_jantung_janin, kaki_bengkak, hasil_pemeriksaan_lab, tindakan, nasihat, ket, kapan_harus_kembali)
		values('$kd_data_kehamilan', '$tgl', '$keluhan', '$tekanan_darah', '$berat_badan', '$umur_kehamilan', '$tinggi_fundus', '$letak_janin', '$denyut_jantung_janin', '$kaki_bengkak', '$hasil_pemeriksaan_lab', '$tindakan', '$nasihat', '$ket', '$kapan_harus_kembali')");
?>