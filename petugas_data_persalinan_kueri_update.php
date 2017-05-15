<?php
	$query=mysql_query("update persalinan set
		kd_data_kehamilan = '$kd_data_kehamilan',
		nama = '$nama',
		tgl_persalinan = '$tgl_persalinan',
		pukul = '$pukul',
		umur_kehamilan = '$umur_kehamilan',
		penolong = '$penolong',
		penolong_lain_lain = '$penolong_lain_lain',
		cara_persalinan = '$cara_persalinan',
		cara_persalinan_tindakan = '$cara_persalinan_tindakan',
		keadaan_ibu = '$keadaan_ibu',
		keadaan_ibu_sakit = '$keadaan_ibu_sakit',
		sakit_lain_lain = '$sakit_lain_lain',
		ket_tambahan = '$ket_tambahan'
		where kd_persalinan = '$kd_persalinan'
	");
?>