<?php
	$query=mysql_query("update det_persalinan set
		kd_persalinan = '$kd_persalinan',
		anak_ke = '$anak_ke',
		berat_lahir = '$berat_lahir',
		panjang_badan = '$panjang_badan',
		lingkar_kepala = '$lingkar_kepala',
		jenis_kelamin = '$jenis_kelamin',
		kondisi1 = '$kondisi1',
		kondisi2 = '$kondisi2',
		kondisi3 = '$kondisi3',
		kondisi4 = '$kondisi4',
		kondisi5 = '$kondisi5',
		kondisi6 = '$kondisi6',
		kondisi7 = '$kondisi7',
		kondisi8 = '$kondisi8',
		asuhan1 = '$asuhan1',
		asuhan2 = '$asuhan2',
		asuhan3 = '$asuhan3',
		asuhan4 = '$asuhan4',
		ket_tambahan = '$ket_tambahan'
		where kd_det_persalinan = '$kd_det_persalinan'
	");
?>