<?php
	$query=mysql_query("update mst_kel set
		nama_kel = '$nama_kel',
		alamat = '$alamat',
		telp = '$telp',
		fax = '$fax',
		email = '$email',
		jumlah_rw = '$jumlah_rw',
		jumlah_rt = '$jumlah_rt',
		ordinat_x = '$ordinat_x',
		ordinat_y = '$ordinat_y'
		where kd_kel = '$kd_kel'
	");
?>