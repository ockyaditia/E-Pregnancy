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
					include("petugas_data_summary_validasi.php");
				?>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FF0000; font-size:8pt; font-style:italic;">Required</span>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from summary where kd_summary = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_summary=$data['kd_summary'];
			$kd_persalinan=$data['kd_persalinan'];
			$nama_ibu=$data['nama_ibu'];
			$tanggal=$data['tanggal'];
			$keadaan_ibu=$data['keadaan_ibu'];
			$komplikasi_nifas=$data['komplikasi_nifas'];
			$keadaan_bayi=$data['keadaan_bayi'];
		}
	?>
	
	<form action="petugas_data_summary_input_ubah.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<input class="form" type="hidden" name="kd_summary" required value="<?php echo $kd_summary; ?>" >
				<center>
					</br>
					Nama Pasien:<span style="color:#FF0000">&nbsp;*</span></td>
					<input class="form" type="text" name="nama_ibu" id="nama" placeholder="Nama Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $nama_ibu; ?>" readonly >
					
					<input class="form" type="text" name="kd_persalinan" id="kd_persalinan" placeholder="Kode Persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $kd_persalinan; ?>" readonly >
					
					</br>
					Tanggal:<span style="color:#FF0000">&nbsp;*</span></td>
					<input class="form" type="text" name="tanggal" id="nama" placeholder="Nama Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tanggal; ?>" readonly >
					
					<br><br>
					
					<b>Kesimpulan Akhir Nifas<span style="color:#FF0000">&nbsp;*</span></b></br>
					Keadaan Ibu: 
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sehat" required <?php if($keadaan_ibu=="Sehat") echo 'checked'; ?>/>&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sakit" required <?php if($keadaan_ibu=="Sakit") echo 'checked'; ?>/>&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Menangis" required <?php if($keadaan_ibu=="Menangis") echo 'checked'; ?>/>&nbsp;&nbsp;Menangis
							</td>
						</tr>
					</table>
					
					</br>
					
					<b>Komplikasi Nifas: <span style="color:#FF0000">&nbsp;*</span></b>
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Perdarahan" required <?php if($komplikasi_nifas=="Perdarahan") echo 'checked'; ?>/>&nbsp;&nbsp;Perdarahan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Infeksi" required <?php if($komplikasi_nifas=="Infeksi") echo 'checked'; ?>/>&nbsp;&nbsp;Infeksi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Hipertensi" required <?php if($komplikasi_nifas=="Hipertensi") echo 'checked'; ?>/>&nbsp;&nbsp;Hipertensi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Lain-lain: Depresi post partum" required <?php if($komplikasi_nifas=="Lain-lain: Depresi post partum") echo 'checked'; ?>/>&nbsp;&nbsp;Lain-lain: </br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depresi </br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post </br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partum
							</td>
						</tr>
					</table>
					
					</br>
					
					<b>Keadaan Bayi: <span style="color:#FF0000">&nbsp;*</span></b>
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Sehat" required <?php if($keadaan_bayi=="Sehat") echo 'checked'; ?>/>&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Sakit" required <?php if($keadaan_bayi=="Sakit") echo 'checked'; ?>/>&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Kelainan Bawaan" required <?php if($keadaan_bayi=="Kelainan Bawaan") echo 'checked'; ?>/>&nbsp;&nbsp;Kelainan Bawaan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Meninggal" required <?php if($keadaan_bayi=="Meninggal") echo 'checked'; ?>/>&nbsp;&nbsp;Meninggal
							</td>
						</tr>
					</table>

					</br></br>
					
					<input class="submit" type="submit" value="Ubah" >
					
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