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
	
	<form action="petugas_data_kehamilan_input.php" method="post">
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
					
					<input class="form readonly" type="text" name="kd_header" id="kd_header" placeholder="Kode Pasien" required style="background:#6ECDCF; color:#FFFFFF" >
						
					</br>
					
					Hari Pertama Haid Terakhir (HPHT), tanggal: <span style="color:#FF0000">&nbsp;*</span>
					<div id="datetimepicker4" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
						<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl_hpht" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required />
					</div>
						
					</br>

					Hari Taksiran Persalinan (HPT), tanggal: <span style="color:#FF0000">&nbsp;*</span>
					<div id="datetimepicker5" class="input-append">
						<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
						<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl_htp" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required />
					</div>
						
					</br>

					Lingkar Lengan Atas: <span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="text" name="lingkar_lengan_atas" placeholder=".............." required /> cm; 
					KEK <span style="color:#FF0000">&nbsp;*</span>
					( <input type="radio" name="kek" value="Yes" required > ), 
					Non KEK <span style="color:#FF0000">&nbsp;*</span>
					( <input type="radio" name="kek" value="No" required > )
					Tinggi Badan: <span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="text" name="tinggi_badan" placeholder=".............." required /> cm
						
					</br>

					Golongan Darah: <span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name="gol_darah" required >
						<option value="none">Pilih.....</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
						
					</br>

					Penggunaan kontrasepsi sebelum kehamilan ini: <span style="color:#FF0000">&nbsp;*</span>
					<input class="form" type="text" name="kontrasepsi" placeholder="....................................................." required />
						
					</br>

					Riwayat Penyakit yang diderita ibu: </br> 
					<textarea style="width:500px; height:100px;" class="form" name="riwayat_penyakit" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ></textarea>

					</br>

					Riwayat Alergi: </br> 
					<textarea style="width:500px; height:100px;" class="form" name="riwayat_alergi" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ></textarea>

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