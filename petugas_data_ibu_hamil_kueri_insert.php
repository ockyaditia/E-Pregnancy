<?php
	$query=mysql_query("insert into header(no_kk, nama_kk, nama, tgl_lahir)
		values('$no_kk', '$nama_kk', '$nama', '$tgl_lahir')");
?>