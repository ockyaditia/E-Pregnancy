<?php
	if (!isset($_SESSION['bagian']) || empty($_SESSION['bagian'])) {
		header('location:index.php');
	} else if ($_SESSION['bagian'] == "Pimpinan Dinkes" || $_SESSION['bagian'] == "Pimpinan Puskesmas") {
		
	} else {
		header('location:index.php');
	}
?>