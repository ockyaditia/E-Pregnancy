<?php

include "config/config.php";

$nama = $_POST['nama'];

$result = mysql_query("SELECT * FROM data_kehamilan WHERE nama = '$nama'");

$kd_data_kehamilan = "";
							
while ($row = mysql_fetch_array($result)) {
	$kd_data_kehamilan = $row['kd_data_kehamilan'];
}

echo $kd_data_kehamilan;

?>