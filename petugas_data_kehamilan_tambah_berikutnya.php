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
	
		$query = mysql_query("select * from data_kehamilan ORDER BY kd_data_kehamilan DESC LIMIT 1");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
		}
	?>
	
	<form action="petugas_data_kehamilan_input_berikutnya.php" method="post">
		<input type="hidden" name="kd_data_kehamilan" required value="<?php echo $kd_data_kehamilan; ?>">
		<div class="banner-bottom">
			<div class="container3">
				<center>
				
					<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil (2)</h3>
					</br>
					
					Hamil ke<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="hamil_ke" placeholder=".............." required />
					
					Jumlah persalinan<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jml_persalinan" placeholder=".............." required />
					
					Jumlah keguguran<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jml_keguguran" placeholder=".............." required />
					</br>
					G<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="G" placeholder=".............." required />
					
					P<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="P" placeholder=".............." required />
					
					A<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="A" placeholder=".............." required />
					
					</br>
					
					Jumlah anak hidup<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jml_anak_hidup" placeholder=".............." required />
					
					Jumlah lahir mati<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jml_lahir_mati" placeholder=".............." required />
					
					</br>
					
					Jumlah anak lahir kurang bulan<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jml_anak_lahir_kurang_bulan" placeholder=".............." required /> anak
					
					</br>
					
					Jarak kehamilan ini dengan persalinan terakhir<span style="color:#FF0000">&nbsp;*</span>
					<input class="form" type="text" name="status_imunisasi" placeholder="........................................................" required />
					
					</br>
					
					Status imunisasi Imunisasi TT terakhir<span style="color:#FF0000">&nbsp;*</span>
					<input style="width:10%;" class="form" type="number" name="jarak_kehamilan" placeholder=".............." required />
					
					<select class="form" name="jarak_kehamilan_waktu" required >
						<option value="Bulan">Bulan</option>
						<option value="Tahun">Tahun</option>
					</select>
					
					</br>
					
					Penolong persalinan terakhir
					<input class="form" type="text" name="penolong_persalinan_terakhir" placeholder="........................................................"  />
					
					</br>
					
					Cara persalinan terakhir
					<select class="form" name="cara_persalinan_terakhir" required >
						<option value="Spontan">Spontan</option>
						<option value="Normal">Normal</option>
					</select>

					</br>

					Tindakan: </br> 
					<textarea style="width:500px;" class="form" name="tindakan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ></textarea>

					</br></br>
					
					<input class="submit" type="submit" value="Tambah" >
					
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