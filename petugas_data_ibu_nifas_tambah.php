<?php
	include("head.php");
	include("_session_petugas.php");
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
					include("petugas_data_ibu_nifas_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Pelayanan KB Ibu Nifas</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_ibu_nifas_input.php" method="post">
					
					<span style="color:#FFFFFF">Nama Pasien<span style="color:#FF0000">&nbsp;*</span></span>
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
							<option value="<?php echo $data['nama'];?>" >
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
					
					<span style="color:#FFFFFF">Kode Pasien<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="kd_data_kehamilan" id="kd_data_kehamilan" placeholder="Kode Pasien" required style="background:#FFFFFF; color:#6ECDCF" class="readonly" >
					
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="tgl" placeholder="Tanggal" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
					
					<span style="color:#FFFFFF">Tempat<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="tempat" placeholder="Tempat" required >
					
					<span style="color:#FFFFFF">Cara KB / Kontrasepsi<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="cara_kb_kontrasepsi" placeholder="Cara KB / Kontrasepsi" required >
					<input type="submit" value="Tambah" >
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