<?php
	require_once("config/dbcontroller.php");
	$db_handle = new DBController();


	if (!empty($_POST["no_kk"])) {
		$result = mysql_query("SELECT count(*) FROM mst_kk WHERE no_kk='" . $_POST["no_kk"] . "'");
		$row = mysql_fetch_row($result);
		$user_count = $row[0];
		if ($user_count > 0) {
			echo "<span class='status-not-available'> No KK Tidak Tersedia.</span>";
?>
	<script>
		$("#no_kk").val("");
	</script>
<?php
		} else {
			echo "<span class='status-available'> No KK Tersedia.</span>";
		}
	}
?>