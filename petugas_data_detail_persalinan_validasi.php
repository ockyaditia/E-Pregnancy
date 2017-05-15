<?php
	if (isset($_GET['error'])) {
?>
	<h3 style="margin-bottom:0px;">Halaman Data Detail Persalinan</h3>
<?php
		if (isset($_GET['ubah'])) {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Lingkar Lengan Atas tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 2) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Tinggi Badan tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 3) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Golongan Darah tidak valid.</center>
		</div>
	</div>
<?php
			}
		} else {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Lingkar Lengan Atas tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 2) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Tinggi Badan tidak valid.</center>
		</div>
	</div>
<?php
			} else if ($_GET['error'] == 3) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Golongan Darah tidak valid.</center>
		</div>
	</div>
<?php
			}
		} 
	} else {
?>
	<h3>Halaman Data Detail Persalinan</h3>
<?php
	}
?>