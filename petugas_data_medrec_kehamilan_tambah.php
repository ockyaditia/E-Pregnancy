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
	
	<?php
		if (isset($_GET['kd'])) {
			$kd = $_GET['kd'];
		} else {
			echo "<script>window.location = 'petugas_data_kehamilan_form.php'</script>";
		}
	?>
	
	<div class="contact">
		<div class="container">
			<div class="contact-form">
				<?php
					include("petugas_data_medrec_kehamilan_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Medical Record</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_medrec_kehamilan_input.php" method="post">
					<input type="hidden" name="kd_data_kehamilan" value="<?php echo $kd; ?>" required >
					
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="tgl" placeholder="Tanggal" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
					
					<span style="color:#FFFFFF">Keluhan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="keluhan" placeholder="Keluhan" required >
					
					<span style="color:#FFFFFF">Tekanan Darah<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="tekanan_darah" placeholder="Tekanan Darah" required >
					
					<span style="color:#FFFFFF">Berat Badan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="berat_badan" placeholder="Berat Badan" required >
					
					<span style="color:#FFFFFF">Umur Kehamilan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="umur_kehamilan" placeholder="Umur Kehamilan" required >
					
					<span style="color:#FFFFFF">Tinggi Fundus<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="tinggi_fundus" placeholder="Tinggi Fundus" required >
					
					<span style="color:#FFFFFF">Letak Janin<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="letak_janin" required >
						<option value="none">Pilih.....</option>
						<option value="Kep">Kep</option>
						<option value="Su">Su</option>
						<option value="Li">Li</option>
					</select>
					
					<span style="color:#FFFFFF">Denyut Jantung Janin<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="denyut_jantung_janin" placeholder="Denyut Jantung Janin" required >
					
					<span style="color:#FFFFFF">Kaki Bengkak<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="kaki_bengkak" required >
						<option value="none">Pilih.....</option>
						<option value="+">+</option>
						<option value="-">-</option>
					</select>
					
					<span style="color:#FFFFFF">Hasil Pemeriksaan Lab<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="hasil_pemeriksaan_lab" placeholder="Hasil Pemeriksaan Lab" required ></textarea>
					
					<span style="color:#FFFFFF">Tindakan<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="tindakan" placeholder="Tindakan" required ></textarea>
					
					<span style="color:#FFFFFF">Nasihat<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="nasihat" placeholder="Nasihat" required ></textarea>
					
					<span style="color:#FFFFFF">Keterangan<span style="color:#FF0000">&nbsp;</span></span>
					<textarea name="ket" placeholder="Keterangan" ></textarea>
					
					<div id="datetimepicker5" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal Harus Kembali<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="kapan_harus_kembali" placeholder="Tanggal Harus Kembali" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
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