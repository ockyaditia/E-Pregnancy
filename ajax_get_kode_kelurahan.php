<?php

include "config/config.php";

$nama_kel = $_POST['nama_kel'];

$result = mysql_query("SELECT * FROM mst_kel WHERE nama_kel = '$nama_kel'");

$kd_kel = "";
							
while ($row = mysql_fetch_array($result)) {
	$kd_kel = $row['kd_kel'];
}

echo $kd_kel;

?>