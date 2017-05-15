<?php
	$query=mysql_query("update header set
		no_kk = '$no_kk',
		nama_kk = '$nama_kk',
		nama = '$nama',
		tgl_lahir = '$tgl_lahir'
		where kd_header = '$kd_header'
	");
?>