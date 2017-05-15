<?php
	$query=mysql_query("insert into rujukan(kd_persalinan, nama, tgl_persalinan, tgl, jam, dirujuk_ke, sebab_dirujuk, diagnosis, tindakan, yang_merujuk)
		values('$kd_persalinan', '$nama', '$tgl_persalinan', '$tgl', '$jam', '$dirujuk_ke', '$sebab_dirujuk', '$diagnosis', '$tindakan', '$yang_merujuk')");
?>