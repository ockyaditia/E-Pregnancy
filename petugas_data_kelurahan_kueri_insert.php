<?php
	$query=mysql_query("insert into mst_kel(kd_kel, nama_kel, alamat, telp, fax, email, jumlah_rw, jumlah_rt, ordinat_x, ordinat_y)
		values('$kd_kel', '$nama_kel', '$alamat', '$telp', '$fax', '$email', '$jumlah_rw', '$jumlah_rt', '$ordinat_x', '$ordinat_y')");
?>