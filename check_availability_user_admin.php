<?php
	require_once("config/dbcontroller.php");
	$db_handle = new DBController();


	if (!empty($_POST["kd_user"])) {
		$result = mysql_query("SELECT count(*) FROM user_akses WHERE kd_user='ADMIN-" . $_POST["kd_user"] . "'");
		$row = mysql_fetch_row($result);
		$user_count = $row[0];
		if ($user_count > 0) {
			echo "<span class='status-not-available'> Kode User Tidak Tersedia.</span>";
?>
	<script>
		$("#kd_user").val("");
	</script>
<?php
		} else {
			echo "<span class='status-available'> Kode User Tersedia.</span>";
		}
	}
?>