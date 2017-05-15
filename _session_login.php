<?php
	if (!isset($_SESSION['bagian']) || empty($_SESSION['bagian'])) {
		header('location:index.php');
	}
?>