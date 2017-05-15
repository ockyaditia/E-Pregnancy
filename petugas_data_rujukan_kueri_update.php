<?php
	$query=mysql_query("update rujukan set
		kd_persalinan = '$kd_persalinan',
		nama = '$nama',
		tgl_persalinan = '$tgl_persalinan',
		tgl = '$tgl',
		jam = '$jam',
		dirujuk_ke = '$dirujuk_ke',
		sebab_dirujuk = '$sebab_dirujuk',
		diagnosis = '$diagnosis',
		tindakan = '$tindakan',
		yang_merujuk = '$yang_merujuk'
		where kd_rujukan = '$kd_rujukan'
	");
?>