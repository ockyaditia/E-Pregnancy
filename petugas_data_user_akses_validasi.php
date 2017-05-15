<?php
	if (isset($_GET['error'])) {
?>
	<h3 style="margin-bottom:0px;">Halaman Data <?php echo $bagian; ?></h3>
<?php
		if (isset($_GET['ubah'])) {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Ubah Data!</strong> Nama <?php echo $bagian; ?> tidak valid.</center>
		</div>
	</div>
<?php
			}
?>
<?php
		} else {
			if ($_GET['error'] == 1) {
?>
	<div class="alerts">
		<div class="alert alert-danger" role="alert">
			<center><strong>Gagal Tambah Data!</strong> Nama <?php echo $bagian; ?> tidak valid.</center>
		</div>
	</div>
<?php
			}
?>
<?php
		} 
	} else {
?>
	<h3>Halaman Data <?php echo $bagian; ?></h3>
<?php
	}
?>