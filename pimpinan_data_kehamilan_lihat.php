<?php
	include("head.php");
	include("_session_dinkes-puskesmas.php");
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
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['lihat'];
		$query = mysql_query("select * from data_kehamilan where kd_data_kehamilan = '$lihat'");
		
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
			
			$hamil_ke=$data['hamil_ke'];
			$jml_persalinan=$data['jml_persalinan'];
			$jml_keguguran=$data['jml_keguguran'];
			$lingkar_lengan_atas=$data['lingkar_lengan_atas'];
			$G=$data['G'];
			$P=$data['P'];
			$A=$data['A'];
			$jml_anak_hidup=$data['jml_anak_hidup'];
			$jml_lahir_mati=$data['jml_lahir_mati'];
			$jml_anak_lahir_kurang_bulan=$data['jml_anak_lahir_kurang_bulan'];
			$jarak_kehamilan=$data['jarak_kehamilan'];
			$jarak_kehamilan_waktu=$data['jarak_kehamilan_waktu'];
			$status_imunisasi=$data['status_imunisasi'];
			$penolong_persalinan_terakhir=$data['penolong_persalinan_terakhir'];
			$cara_persalinan_terakhir=$data['cara_persalinan_terakhir'];
			$tindakan=$data['tindakan'];
		}
	?>
		
	<div class="banner-bottom">
		<div class="container3">
			</br>
			<center>
				<a href ="pdf_data_kehamilan.php?pdf=<?php echo $lihat; ?>">
					<img src = "images/view-pdf.png" width="60px"  height="60px">
				</a>
			</center>
			
			<center>
				
				<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil (1)</h3>
				</br>
				
				Nama Pasien: 
				<input class="form2" type="text" name="nama" placeholder="Nama" required value="<?php echo $nama; ?>" readonly >
				
				<input class="form2" type="text" name="kd_header" placeholder="Kode Pasien" required style="background:#FFFFFF; color:#6ECDCF" value="<?php echo $kd_header; ?>" readonly >
					
				</br>
				
				Hari Pertama Haid Terakhir (HPHT), tanggal: 
				<input class="form2" type="date" name="tgl_hpht" placeholder="....................................................." value="<?php echo $tgl_hpht; ?>" required readonly />
					
				</br>

				Hari Taksiran Persalinan (HPT), tanggal: 
				<input class="form2" type="date" name="tgl_htp" placeholder="....................................................." value="<?php echo $tgl_htp; ?>" required readonly />
					
				</br>

				Lingkar Lengan Atas: 
				<input style="width:10%;" class="form2" type="text" name="lingkar_lengan_atas" placeholder=".............." value="<?php echo $lingkar_lengan_atas; ?>" readonly /> cm; 
				KEK 
				( <input type="radio" name="kek" value="Yes" required <?php if($kek=="Yes") echo 'checked'; ?> readonly disabled > ), 
				Non KEK 
				( <input type="radio" name="kek" value="No" required <?php if($kek=="No") echo 'checked'; ?> readonly disabled > )
				Tinggi Badan: 
				<input style="width:10%;" class="form2" type="text" name="tinggi_badan" placeholder=".............." value="<?php echo $tinggi_badan; ?>" readonly /> cm
					
				</br>

				Golongan Darah: 
				<input class="form2" type="text" name="gol_darah" placeholder=".............." value="<?php echo $gol_darah; ?>" readonly />
					
				</br>

				Penggunaan kontrasepsi sebelum kehamilan ini: 
				<input class="form2" type="text" name="kontrasepsi" placeholder="....................................................." value="<?php echo $kontrasepsi; ?>" readonly />
					
				</br>

				Riwayat Penyakit yang diderita ibu: </br> 
				<textarea style="width:500px; height:100px;" class="form2" name="riwayat_penyakit" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $riwayat_penyakit; ?></textarea>

				</br>

				Riwayat Alergi: </br> 
				<textarea style="width:500px; height:100px;" class="form2" name="riwayat_alergi" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $riwayat_alergi; ?></textarea>
		
				</br></br>
			</center>
		</div>
	</div>
	
	</br></br></br>
	
	<div class="banner-bottom">
		<div class="container3">
			</br>
			<center>
				<a href ="pdf_data_kehamilan_berikutnya.php?pdf=<?php echo $lihat; ?>">
					<img src = "images/view-pdf.png" width="60px"  height="60px">
				</a>
			</center>
			
			<center>
				
				<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil (2)</h3>
				</br>
			
				Hamil ke
				<input style="width:10%;" class="form2" type="text" name="hamil_ke" placeholder=".............." value="<?php echo $hamil_ke; ?>" readonly />
				
				Jumlah persalinan
				<input style="width:10%;" class="form2" type="text" name="jml_persalinan" placeholder=".............." value="<?php echo $jml_persalinan; ?>" readonly />
				
				Jumlah keguguran
				<input style="width:10%;" class="form2" type="text" name="jml_keguguran" placeholder=".............." value="<?php echo $jml_keguguran; ?>" readonly />
				</br>
				G
				<input style="width:10%;" class="form2" type="text" name="G" placeholder=".............." value="<?php echo $G; ?>" readonly />
				
				P
				<input style="width:10%;" class="form2" type="text" name="P" placeholder=".............." value="<?php echo $P; ?>" readonly />
				
				A
				<input style="width:10%;" class="form2" type="text" name="A" placeholder=".............." value="<?php echo $A; ?>" readonly />
				
				</br>
				
				Jumlah anak hidup
				<input style="width:10%;" class="form2" type="text" name="jml_anak_hidup" placeholder=".............." value="<?php echo $jml_anak_hidup; ?>" readonly />
				
				Jumlah lahir mati
				<input style="width:10%;" class="form2" type="text" name="jml_lahir_mati" placeholder=".............." value="<?php echo $jml_lahir_mati; ?>" readonly />
				
				</br>
				
				Jumlah anak lahir kurang bulan
				<input style="width:10%;" class="form2" type="text" name="jml_anak_lahir_kurang_bulan" placeholder=".............." value="<?php echo $jml_anak_lahir_kurang_bulan; ?>" readonly /> anak
				
				</br>
				
				Jarak kehamilan ini dengan persalinan terakhir
				<input class="form2" type="text" name="status_imunisasi" placeholder="........................................................" value="<?php echo $status_imunisasi; ?>" readonly />
				
				</br>
				
				Status imunisasi Imunisasi TT terakhir
				<input style="width:10%;" class="form2" type="text" name="jarak_kehamilan" placeholder=".............." value="<?php echo $jarak_kehamilan; ?>" readonly />
				
				<input style="width:15%;" class="form2" type="text" name="jarak_kehamilan_waktu" placeholder=".............." value="<?php echo $jarak_kehamilan_waktu; ?>" readonly />
				
				</br>
				
				Penolong persalinan terakhir
				<input class="form2" type="text" name="penolong_persalinan_terakhir" placeholder="........................................................" value="<?php echo $penolong_persalinan_terakhir; ?>" readonly />
				
				</br>
				
				Cara persalinan terakhir
				<input class="form2" type="text" name="cara_persalinan_terakhir" placeholder=".............." value="<?php echo $cara_persalinan_terakhir; ?>" readonly />

				</br>

				Tindakan: </br> 
				<textarea style="width:500px; height:100px;" class="form2" name="tindakan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $tindakan; ?></textarea>

				</br></br>
			</center>
		</div>
	</div>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>