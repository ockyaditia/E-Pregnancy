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
					include("petugas_data_rujukan_validasi.php");
				?>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['lihat'];
		$query = mysql_query("select * from rujukan where kd_rujukan = '$lihat'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_rujukan=$data['kd_rujukan'];
			$kd_persalinan=$data['kd_persalinan'];
			$nama=$data['nama'];
			$tgl_persalinan=$data['tgl_persalinan'];
			$tgl=$data['tgl'];
			$jam=$data['jam'];
			$dirujuk_ke=$data['dirujuk_ke'];
			$sebab_dirujuk=$data['sebab_dirujuk'];
			$diagnosis=$data['diagnosis'];
			$tindakan=$data['tindakan'];
			$yang_merujuk=$data['yang_merujuk'];
		}
	?>
	
		<div class="banner-bottom">
			<div class="container3">
				<input class="form2" type="hidden" name="kd_rujukan" required value="<?php echo $kd_rujukan; ?>" >
				<center>
					</br>
					Nama Pasien:
					<input class="form2" type="text" name="nama" id="nama" required style="background:#FEDC00;" value="<?php echo $nama; ?>" readonly >
					</br>
					Tanggal Persalinan: 
					<input class="form2" type="text" name="tgl_persalinan" id="tgl_persalinan" required style="background:#FEDC00;" value="<?php echo $tgl_persalinan; ?>" readonly >
					
					<input class="form2" type="text" name="kd_persalinan" id="kd_persalinan" required style="background:#FEDC00;" value="<?php echo $kd_persalinan; ?>" readonly >
					
					</br>
					</br>
					
					<b>Rujukan</b>
					<br>
					<table>
						<tr>
							<td>Tanggal Rujukan</td>
							<td> : </td>
							<td>
							<input class="form2" type="date" name="tgl" value="<?php echo $tgl; ?>" readonly />
							Jam : 
							<input class="form2" type="time" name="jam" value="<?php echo $jam; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Dirujuk ke</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:100%;" type="text" name="dirujuk_ke" value="<?php echo $dirujuk_ke; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Sebab dirujuk</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:100%;" type="text" name="sebab_dirujuk" value="<?php echo $sebab_dirujuk; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Diagnosis sementara</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:100%;" type="text" name="diagnosis" value="<?php echo $diagnosis; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Tindakan sementara</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:100%;" type="text" name="tindakan" value="<?php echo $tindakan; ?>" readonly />
							</td>
						</tr>
					</table>
					
					</br>
					
					Yang merujuk </br>
					<input class="form2" style="width:50%;" type="text" name="yang_merujuk" placeholder=".........................................................................................................." value="<?php echo $yang_merujuk; ?>" required readonly />

					</br></br>
					
					</br>
				</center>
			</div>
		</div>
	
<!-- //view -->
<!-- footer -->
<?php
	include("footer.php");
?>