<?php
	$query=mysql_query("update user_akses set
		kd_user = '$kd_user',
		nama = '$nama',
		bagian = '$bagian',
		username = '$username',
		password = '$password'
		where kd_user = '$kd_user'
	");
?>