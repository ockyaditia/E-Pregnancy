<?php
	$query=mysql_query("insert into mst_kk(no_kk, nama_kk, kd_kel, nama_kel, jumlah_anggota, nama_anggota, ordinat_x, ordinat_y)
		values('$no_kk', '$nama_kk', '$kd_kel', '$nama_kel', '$jumlah_anggota', '$nama_anggota', '$ordinat_x', '$ordinat_y')");
?>