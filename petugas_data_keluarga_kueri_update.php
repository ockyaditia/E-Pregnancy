<?php
	$query=mysql_query("update mst_kk set
		no_kk = '$no_kk',
		nama_kk = '$nama_kk',
		kd_kel = '$kd_kel',
		nama_kel = '$nama_kel',
		jumlah_anggota = '$jumlah_anggota',
		nama_anggota = '$nama_anggota',
		ordinat_x = '$ordinat_x',
		ordinat_y = '$ordinat_y'
		where no_kk = '$no_kk'
	");
?>