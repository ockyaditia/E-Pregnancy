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
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FF0000; font-size:8pt; font-style:italic;">Required</span>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from rujukan where kd_rujukan = '$ubah'");
		
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
	
	<form action="petugas_data_rujukan_input_ubah.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<input class="form" type="hidden" name="kd_rujukan" required value="<?php echo $kd_rujukan; ?>" >
				<center>
					</br>
					Nama Pasien:<span style="color:#FF0000">&nbsp;*</span></td>
					<input class="form" type="text" name="nama" id="nama" placeholder="Nama Pasien" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $nama; ?>" readonly >
					</br>
					Tanggal Persalinan: <span style="color:#FF0000">&nbsp;*</span></td>
					<input class="form" type="text" name="tgl_persalinan" id="tgl_persalinan" placeholder="Tanggal Persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tgl_persalinan; ?>" readonly >
					
					<input class="form" type="text" name="kd_persalinan" id="kd_persalinan" placeholder="Kode Persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $kd_persalinan; ?>" readonly >
					
					</br>
					</br>
					
					<b>Rujukan</b>
					<br>
					<table>
						<tr>
							<td>Tanggal Rujukan<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<div id="datetimepicker4" class="input-append">
								<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tgl; ?>" required >
							</div>
							</td>
						</tr>
						<tr>
							<td>Jam<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<div id="datetimepicker3" class="input-append">
								<button class="add-on date"><img src="images/clock.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="hh:mm:ss" type="text" name="jam" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $jam; ?>" required >
							</div>
							</td>
						</tr>
						<tr>
							<td>Dirujuk ke<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="dirujuk_ke" placeholder=".........................................................................................................." value="<?php echo $dirujuk_ke; ?>" required />
							</td>
						</tr>
						<tr>
							<td>Sebab dirujuk<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="sebab_dirujuk" placeholder=".........................................................................................................." value="<?php echo $sebab_dirujuk; ?>" required />
							</td>
						</tr>
						<tr>
							<td>Diagnosis sementara<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="diagnosis" placeholder=".........................................................................................................." value="<?php echo $diagnosis; ?>" required />
							</td>
						</tr>
						<tr>
							<td>Tindakan sementara<span style="color:#FF0000">&nbsp;*</span></td></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="tindakan" placeholder=".........................................................................................................." value="<?php echo $tindakan; ?>" required />
							</td>
						</tr>
					</table>
					
					</br>
					
					Yang merujuk<span style="color:#FF0000">&nbsp;*</span></td></br>
					<input class="form" style="width:50%;" type="text" name="yang_merujuk" value="<?php echo $yang_merujuk; ?>" readonly required />

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