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
					include("bidan_data_persalinan_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['lihat'];
		$query = mysql_query("select * from persalinan where kd_persalinan = '$lihat'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_persalinan=$data['kd_persalinan'];
			$kd_data_kehamilan=$data['kd_data_kehamilan'];
			$nama=$data['nama'];
			$tgl_persalinan=$data['tgl_persalinan'];
			$pukul=$data['pukul'];
			$umur_kehamilan=$data['umur_kehamilan'];
			$penolong=$data['penolong'];
			$penolong_lain_lain=$data['penolong_lain_lain'];
			$cara_persalinan=$data['cara_persalinan'];
			$cara_persalinan_tindakan=$data['cara_persalinan_tindakan'];
			$keadaan_ibu=$data['keadaan_ibu'];
			$keadaan_ibu_sakit=$data['keadaan_ibu_sakit'];
			$sakit_lain_lain=$data['sakit_lain_lain'];
			$ket_tambahan=$data['ket_tambahan'];
		}
	?>
	
		<div class="banner-bottom">
			<div class="container3">
				<center>
					</br>
					<input class="form" type="hidden" name="kd_persalinan" value="<?php echo $kd_persalinan; ?>" >
					
					Nama Pasien: 
					<input class="form" type="text" name="nama" value="<?php echo $nama; ?>" readonly >
					
					<input type="text" name="kd_data_kehamilan" id="kd_data_kehamilan" value="<?php echo $kd_data_kehamilan; ?>" placeholder="Kode Pasien" required style="background:#FEDC00;" readonly >
						
					</br>
					</br>
					
					<b>Ibu Bersalin dan Ibu Nifas</b>
					<br>
					<table>
						<tr>
							<td>Tanggal Persalinan</td>
							<td> : </td>
							<td>
							<input class="form" type="date" name="tgl_persalinan" placeholder="....................................................." value="<?php echo $tgl_persalinan; ?>" required readonly />
							Pukul : 
							<input class="form" type="time" name="pukul" placeholder="....................................................." value="<?php echo $pukul; ?>" required readonly />
							</td>
						</tr>
						<tr>
							<td>Umur Kehamilan</td>
							<td> : </td>
							<td>
							<input style="width:20%;" class="form" type="number" name="umur_kehamilan" placeholder="....................................................." value="<?php echo $umur_kehamilan; ?>" required readonly /> Minggu
							</td>
						</tr>
						<tr>
							<td>Penolong persalinan</td>
							<td> : </td>
							<td>
							<input class="form" type="hidden" name="penolong" value="Dokter / Bidan" required />
							&nbsp;Dokter/Bidan/Lain-Lain
							<input class="form" type="text" name="penolong_lain_lain" value="<?php echo $penolong_lain_lain; ?>" required readonly />
							</td>
						</tr>
						<tr>
							<td>Cara persalinan</td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="cara_persalinan" id="cara_persalinan" placeholder="....................................................." value="<?php echo $cara_persalinan_tindakan; ?>" 
							<input class="form" type="text" name="cara_persalinan_tindakan" id="cara_persalinan_tindakan" placeholder="....................................................." value="<?php echo $cara_persalinan_tindakan; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Keadaan ibu</td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="keadaan_ibu" id="keadaan_ibu" value="<?php echo $keadaan_ibu; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Jenis sakit</td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="keadaan_ibu_sakit" id="keadaan_ibu_sakit" value="<?php echo $keadaan_ibu_sakit; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Keterangan sakit</td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="sakit_lain_lain" id="sakit_lain_lain" value="<?php echo $sakit_lain_lain; ?>" readonly />
							</td>
						</tr>
					</table>
					
					</br>
					Keterangan tambahan</br>
					<textarea style="width:500px; height:100px; border:1px solid black" class="form" name="ket_tambahan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $ket_tambahan; ?></textarea>
					
					</br>
				</center>
			</div>
		</div>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>