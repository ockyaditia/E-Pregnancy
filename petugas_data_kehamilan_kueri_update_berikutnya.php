<?php
	$query=mysql_query("update data_kehamilan set
		hamil_ke = '$hamil_ke',
		jml_persalinan = '$jml_persalinan',
		jml_keguguran = '$jml_keguguran',
		G = '$G',
		P = '$P',
		A = '$A',
		jml_anak_hidup = '$jml_anak_hidup',
		jml_lahir_mati = '$jml_lahir_mati',
		jml_anak_lahir_kurang_bulan = '$jml_anak_lahir_kurang_bulan',
		jarak_kehamilan = '$jarak_kehamilan',
		jarak_kehamilan_waktu = '$jarak_kehamilan_waktu',
		status_imunisasi = '$status_imunisasi',
		penolong_persalinan_terakhir = '$penolong_persalinan_terakhir',
		cara_persalinan_terakhir = '$cara_persalinan_terakhir',
		tindakan = '$tindakan'
		where kd_data_kehamilan = '$kd_data_kehamilan'
	");
?>