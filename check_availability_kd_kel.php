<?php
	require_once("config/dbcontroller.php");
	$db_handle = new DBController();


	if (!empty($_POST["kd_kel"])) {
		$result = mysql_query("SELECT count(*) FROM mst_kel WHERE kd_kel='" . $_POST["kd_kel"] . "'");
		$row = mysql_fetch_row($result);
		$user_count = $row[0];
		if ($user_count > 0) {
			echo "<span class='status-not-available'> Kode Kelurahan Tidak Tersedia.</span>";
?>
	<script>
		$("#kd_kel").val("");
	</script>
<?php
		} else {
			echo "<span class='status-available'> Kode Kelurahan Tersedia.</span>";
		}
	}
?>