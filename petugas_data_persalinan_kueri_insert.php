<?php
	$query=mysql_query("insert into persalinan(kd_data_kehamilan, nama, tgl_persalinan, pukul, umur_kehamilan, penolong, penolong_lain_lain, cara_persalinan, cara_persalinan_tindakan, keadaan_ibu, keadaan_ibu_sakit, sakit_lain_lain, ket_tambahan)
		values('$kd_data_kehamilan', '$nama', '$tgl_persalinan', '$pukul', '$umur_kehamilan', '$penolong', '$penolong_lain_lain', '$cara_persalinan', '$cara_persalinan_tindakan', '$keadaan_ibu', '$keadaan_ibu_sakit', '$sakit_lain_lain', '$ket_tambahan')");
?>