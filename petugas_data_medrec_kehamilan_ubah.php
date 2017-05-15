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
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from med_rec_kehamilan where kd_med_rec_kehamilan = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_med_rec_kehamilan=$data['kd_med_rec_kehamilan'];
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
			$tgl=$data['tgl'];
			$keluhan=$data['keluhan'];
			$tekanan_darah=$data['tekanan_darah'];
			$berat_badan=$data['berat_badan'];
			$umur_kehamilan=$data['umur_kehamilan'];
			$tinggi_fundus=$data['tinggi_fundus'];
			$letak_janin=$data['letak_janin'];
			$denyut_jantung_janin=$data['denyut_jantung_janin'];
			$kaki_bengkak=$data['kaki_bengkak'];
			$hasil_pemeriksaan_lab=$data['hasil_pemeriksaan_lab'];
			$tindakan=$data['tindakan'];
			$nasihat=$data['nasihat'];
			$ket=$data['ket'];
			$kapan_harus_kembali=$data['kapan_harus_kembali'];
		}
	?>
	
	<div class="banner-bottom">
		<div class="container2">
			<div class="banner-bottom-grid-right-grid2">
				<h3>Form Data Medical Record</h3>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FFFFFF; font-size:8pt; font-style:italic;">Required</span>
				</br>
				</br>
				
				<form action="petugas_data_medrec_kehamilan_input_ubah.php" method="post">
					<input type="hidden" name="kd_med_rec_kehamilan" value="<?php echo $kd_med_rec_kehamilan; ?>" required >
					<input type="hidden" name="kd_data_kehamilan" value="<?php echo $kd; ?>" required >
					
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="tgl" placeholder="Tanggal" value="<?php echo $tgl; ?>" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
					
					<span style="color:#FFFFFF">Keluhan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="keluhan" placeholder="Keluhan" value="<?php echo $keluhan; ?>" required >
					
					<span style="color:#FFFFFF">Tekanan Darah<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="tekanan_darah" placeholder="Tekanan Darah" value="<?php echo $tekanan_darah; ?>" required >
					
					<span style="color:#FFFFFF">Berat Badan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="berat_badan" placeholder="Berat Badan" value="<?php echo $berat_badan; ?>" required >
					
					<span style="color:#FFFFFF">Umur Kehamilan<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="umur_kehamilan" placeholder="Umur Kehamilan" value="<?php echo $umur_kehamilan; ?>" required >
					
					<span style="color:#FFFFFF">Tinggi Fundus<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="tinggi_fundus" placeholder="Tinggi Fundus" required value="<?php echo $tinggi_fundus; ?>" >
					
					<span style="color:#FFFFFF">Letak Janin<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="letak_janin" required >
						<option value="none">Pilih.....</option>
						<option value="Kep" <?php if($letak_janin=="Kep") echo 'selected'; ?>>Kep</option>
						<option value="Su" <?php if($letak_janin=="Su") echo 'selected'; ?>>Su</option>
						<option value="Li" <?php if($letak_janin=="Li") echo 'selected'; ?>>Li</option>
					</select>
					
					<span style="color:#FFFFFF">Denyut Jantung Janin<span style="color:#FF0000">&nbsp;*</span></span>
					<input type="text" name="denyut_jantung_janin" placeholder="Denyut Jantung Janin" required value="<?php echo $denyut_jantung_janin; ?>" >
					
					<span style="color:#FFFFFF">Kaki Bengkak<span style="color:#FF0000">&nbsp;*</span></span>
					<select name="kaki_bengkak" required >
						<option value="none">Pilih.....</option>
						<option value="+" <?php if($kaki_bengkak=="+") echo 'selected'; ?>>+</option>
						<option value="-" <?php if($kaki_bengkak=="-") echo 'selected'; ?>>-</option>
					</select>
					
					<span style="color:#FFFFFF">Hasil Pemeriksaan Lab<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="hasil_pemeriksaan_lab" placeholder="Hasil Pemeriksaan Lab" required ><?php echo $hasil_pemeriksaan_lab; ?></textarea>
					
					<span style="color:#FFFFFF">Tindakan<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="tindakan" placeholder="Tindakan" required ><?php echo $tindakan; ?></textarea>
					
					<span style="color:#FFFFFF">Nasihat<span style="color:#FF0000">&nbsp;*</span></span>
					<textarea name="nasihat" placeholder="Nasihat" required ><?php echo $nasihat; ?></textarea>
					
					<span style="color:#FFFFFF">Keterangan<span style="color:#FF0000">&nbsp;</span></span>
					<textarea name="ket" placeholder="Keterangan" ><?php echo $ket; ?></textarea>
					
					<div id="datetimepicker5" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="50" height="50" ></button>
						<span style="color:#FFFFFF">Tanggal Harus Kembali<span style="color:#FF0000">&nbsp;*</span></span>
						<input data-format="yyyy-MM-dd" type="text" name="kapan_harus_kembali" placeholder="Tanggal Harus Kembali" value="<?php echo $kapan_harus_kembali; ?>" style="background:#FFFFFF; color:#6ECDCF" class="readonly" required >
					</div>
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