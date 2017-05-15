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
					include("petugas_data_kehamilan_validasi.php");
				?>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FF0000; font-size:8pt; font-style:italic;">Required</span>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from data_kehamilan where kd_data_kehamilan = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
			$kd_header=$data['kd_header'];
			$nama=$data['nama'];
			$tgl_hpht=$data['tgl_hpht'];
			$tgl_htp=$data['tgl_htp'];
			$lingkar_lengan_atas=$data['lingkar_lengan_atas'];
			$kek=$data['kek'];
			$tinggi_badan=$data['tinggi_badan'];
			$gol_darah=$data['gol_darah'];
			$kontrasepsi=$data['kontrasepsi'];
			$riwayat_penyakit=$data['riwayat_penyakit'];
			$riwayat_alergi=$data['riwayat_alergi'];
		}
	?>
	
	<form action="petugas_data_kehamilan_input_ubah.php" method="post">
		<input type="hidden" name="kd_data_kehamilan" required value="<?php echo $kd_data_kehamilan; ?>">
		<div class="banner-bottom">
			<div class="container3">
				<center>
				
					<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil (1)</h3>
					</br>
					
					Nama Pasien: <span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name="nama" id="nama" required >
						<option value="none">Pilih Pasien.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama FROM header";
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
								$.post('ajax_get_kd_header.php', {nama:nama},
								function(data) {
									$('#kd_header').val(data);
								});
							}
							else {
								$('#kd_header').val("");
							}
						});
					</script>
					
					<input class="form readonly" type="text" name="kd_header" id="kd_header" placeholder="Kode Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $kd_header; ?>">
						
					</br>
					
					Hari Pertama Haid Terakhir (HPHT), tanggal: <span style="color:#FF0000">&nbsp;*</span>
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
						<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl_hpht" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tgl_hpht; ?>" required />
					</div>
						
					</br>

					Hari Taksiran Persalinan (HPT), tanggal: <span style="color:#FF0000">&nbsp;*</span>
					<div id="datetimepicker5" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
						<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl_htp" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tgl_htp; ?>" required />
					</div>
						
					</br>

					Lingkar Lengan Atas: <span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="text" name="lingkar_lengan_atas" placeholder=".............." required value="<?php echo $lingkar_lengan_atas; ?>" /> cm; 
					
					KEK <span style="color:#FF0000">&nbsp;*</span>
					( <input type="radio" name="kek" value="Yes" required <?php if($kek=="Yes") echo 'checked'; ?>> ), 
					Non KEK <span style="color:#FF0000">&nbsp;*</span>
					( <input type="radio" name="kek" value="No" required <?php if($kek=="No") echo 'checked'; ?>> )
					Tinggi Badan: <span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="text" name="tinggi_badan" placeholder=".............." required value="<?php echo $tinggi_badan; ?>" /> cm
						
					</br>

					Golongan Darah: <span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name="gol_darah" required >
						<option value="none">Pilih.....</option>
						<option value="A" <?php if($gol_darah=="A") echo 'selected'; ?>>A</option>
						<option value="B" <?php if($gol_darah=="B") echo 'selected'; ?>>B</option>
						<option value="AB" <?php if($gol_darah=="AB") echo 'selected'; ?>>AB</option>
						<option value="O" <?php if($gol_darah=="O") echo 'selected'; ?>>O</option>
					</select>
						
					</br>

					Penggunaan kontrasepsi sebelum kehamilan ini: <span style="color:#FF0000">&nbsp;*</span>
					<input class="form" type="text" name="kontrasepsi" placeholder="....................................................." required value="<?php echo $kontrasepsi; ?>" />
						
					</br>

					Riwayat Penyakit yang diderita ibu: </br> 
					<textarea style="width:500px; height:100px;" class="form" name="riwayat_penyakit" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ><?php echo $riwayat_penyakit; ?></textarea>

					</br>

					Riwayat Alergi: </br> 
					<textarea style="width:500px; height:100px;" class="form" name="riwayat_alergi" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ><?php echo $riwayat_alergi; ?></textarea>
			
					</br></br>
					
					<input class="submit" type="submit" value="Berikutnya" >
					
					</br>
				</center>
			</div>
		</div>
	</form>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>