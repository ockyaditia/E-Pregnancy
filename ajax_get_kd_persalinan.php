<?php

include "config/config.php";

$nama = $_POST['nama'];
$tgl_persalinan = $_POST['tgl_persalinan'];

$result = mysql_query("SELECT * FROM persalinan WHERE nama = '$nama' AND tgl_persalinan = '$tgl_persalinan'");

$kd_persalinan = "";
							
while ($row = mysql_fetch_array($result)) {
	$kd_persalinan = $row['kd_persalinan'];
}

echo $kd_persalinan;

?>