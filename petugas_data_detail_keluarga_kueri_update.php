<?php
	$query=mysql_query("update det_kk set
		no_kk = '$no_kk',
		nama_kk = '$nama_kk',
		alamat = '$alamat',
		no = '$no',
		rt = '$rt',
		rw = '$rw',
		kota = '$kota',
		kodepos = '$kodepos'
		where no_kk = '$no_kk'
	");
?>