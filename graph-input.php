<label for="kelurahan">Kelurahan</label>
<select class="report" name="kelurahan">
	<option value="1">---Pilih Kelurahan---</option>
	<?php
		include("config/config.php");
		$sql = mysql_query("SELECT * FROM mst_kel ORDER BY nama_kel ASC");
		if (mysql_num_rows($sql) != 0) {
			while ($data = mysql_fetch_assoc($sql)) {
				echo '<option>' . $data['nama_kel'] . '</option>';
			}
		}
	?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="tahun">Tahun</label>
<select class="report" name="tahun">
	<option value="1">---Pilih Tahun---</option>
	<?php
		include("config/config.php");
		$sql = mysql_query("SELECT distinct year(tanggal) as tahun FROM summary group by tanggal");
		if (mysql_num_rows($sql) != 0) {
			while ($data = mysql_fetch_assoc($sql)) {
				echo "<option value='" . $data['tahun'] . "'>" . $data['tahun'] . "</option>";
			}
		}
	?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="report-button" type="submit" name="submit" value="Kirim" />