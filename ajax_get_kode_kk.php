<?php

include "config/config.php";

$nama_kk = $_POST['nama_kk'];

$result = mysql_query("SELECT * FROM mst_kk WHERE nama_kk = '$nama_kk'");

$no_kk = "";
							
while ($row = mysql_fetch_array($result)) {
	$no_kk = $row['no_kk'];
}

echo $no_kk;

?>