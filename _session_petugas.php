<?php
	if (!isset($_SESSION['bagian']) || empty($_SESSION['bagian'])) {
		header('location:index.php');
	} else if ($_SESSION['bagian'] != "Admin / Petugas") {
		header('location:index.php');
	}
?>