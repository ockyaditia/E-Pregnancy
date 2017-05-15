<?php
	$query=mysql_query("insert into user_akses(kd_user, nama, bagian, username, password)
		values('$kd_user', '$nama', '$bagian', '$username', '$password')");
?>