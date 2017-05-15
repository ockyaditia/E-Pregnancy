<?php

include "config/config.php";

$nama = $_POST['nama'];

$result = mysql_query("SELECT * FROM header WHERE nama = '$nama'");

$kd_header = "";
							
while ($row = mysql_fetch_array($result)) {
	$kd_header = $row['kd_header'];
}

echo $kd_header;

?>