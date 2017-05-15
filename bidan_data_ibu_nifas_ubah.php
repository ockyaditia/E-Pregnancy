<?php
	include("head.php");
	include("_session_dokter-bidan.php");
?>
</head>
	
<body>
<!-- header -->
	<?php
		include("header.php");
	?>
<!-- //header -->
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="banner-nav">
					<?php
						include("nav-top.php");
					?>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li><a href="index.php">Beranda</a></li>
							<?php
								include("menu.php");
							?>
							<li class="dropdown">
								<a href="#">Informasi</a>
								<div class="dropdown-content">
									<ul class="nav navbar-nav">
										<li><a href="tentang.php">Tentang&nbsp;Kami</a></li>
										<li><a href="layanan.php">Layanan&nbsp;Kami</a></li>
										<li><a href="galeri.php">Galeri&nbsp;Kami</a></li>
										
										
										<li><a href="kontak.php">Kontak&nbsp;Kami</a></li>
									</ul>
								</div>
							</li>
						  </ul>
						  
					<?php
						include("nav-bottom.php");
					?>
						
			</div>
		</div>
	</div>
	
	<div class="contact">
		<div class="container">
			<div class="contact-form">
				<?php
					include("bidan_data_ibu_nifas_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from pelayanan_ibu_nifas where kd_pelayanan = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_pelayanan=$data['kd_pelayanan'];
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
			$nama=$data['nama'];
			$tgl=$data['tgl'];
			$tempat=$data['tempat'];
			$cara_kb_kontrasepsi=$data['cara_kb_kontrasepsi'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Pelayanan Ibu Nifas</h3>
				<form action="bidan_data_ibu_nifas_input_ubah.php" method="post">
					<input type="hidden" name="kd_pelayanan" value="<?php echo $kd_pelayanan; ?>" >
					<select name="nama" id="nama" required >
						<option value="none">Pilih Pasien.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama FROM data_kehamilan";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) {
						?>
							<option value="<?php echo $data['nama'];?>" 
						<?php
							if ($nama == $data['nama']) {
								echo ' selected="selected"';
							} 
						?>
							>
						<?php
								echo $data['nama'];
						?>
							</option>
						<?php
							}
						?>
					</select>
					
					<script>
						$('#nama').on('change', function() {
							var nama = this.value;
							
							if (nama != "") {
								$.post('ajax_get_kd_kehamilan.php', {nama:nama},
								function(data) {
									$('#kd_data_kehamilan').val(data);
								});
							}
							else {
								$('#kd_data_kehamilan').val("");
							}
						});
					</script>
					
					<input type="text" name="kd_data_kehamilan" id="kd_data_kehamilan" placeholder="Kode Kehamilan" required value="<?php echo $kd_data_kehamilan; ?>" style="background:#FEDC00;" >
					<input type="date" name="tgl" placeholder="Tanggal" value="<?php echo $tgl; ?>" >
					<input type="text" name="tempat" placeholder="Tempat" value="<?php echo $tempat; ?>" >
					<input type="text" name="cara_kb_kontrasepsi" placeholder="Cara KB / Kontrasepsi" value="<?php echo $cara_kb_kontrasepsi; ?>" >
					<input type="submit" value="Ubah" >
				</form>
			</div>
			<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
		</div>
	</div>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>