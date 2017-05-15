<?php
	$query=mysql_query("insert into det_kk(no_kk, nama_kk, alamat, no, rt, rw, kota, kodepos)
		values('$no_kk', '$nama_kk', '$alamat', '$no', '$rt', '$rw', '$kota', '$kodepos')");
?>