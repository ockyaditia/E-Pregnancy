<?php
	if (isset($_GET['error'])) {
?>
	<h3 style="margin-bottom:0px;">Halaman Data Keluarga</h3>
<?php
		if (isset($_GET['ubah'])) {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Ordinat X tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 2) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Ordinat Y tidak valid.</center>
		</div>
	</div>
<?php
			}
		} else {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Ordinat X tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 2) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Ordinat Y tidak valid.</center>
		</div>
	</div>
<?php
			}
		} 
	} else {
?>
	<h3>Halaman Data Keluarga</h3>
<?php
	}
?>