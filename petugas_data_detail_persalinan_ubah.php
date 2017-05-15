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
			echo "<script>window.location = 'petugas_data_persalinan_form.php'</script>";
		}
	?>
	
	<div class="contact">
		<div class="container">
			<div class="contact-form">
				<?php
					include("petugas_data_detail_persalinan_validasi.php");
				?>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FF0000; font-size:8pt; font-style:italic;">Required</span>
			</div>
		</div>
	</div>
	
	<?php
		require ("config/config.php");
	
		$ubah = $_GET['ubah'];
		$query = mysql_query("select * from det_persalinan where kd_det_persalinan = '$ubah'");
		
		while ($data = mysql_fetch_array($query)) {
			$kd_det_persalinan=$data['kd_det_persalinan'];
			$kd_persalinan=$data['kd_persalinan'];
			$anak_ke=$data['anak_ke'];
			$berat_lahir=$data['berat_lahir'];
			$panjang_badan=$data['panjang_badan'];
			$lingkar_kepala=$data['lingkar_kepala'];
			$jenis_kelamin=$data['jenis_kelamin'];
			$kondisi1=$data['kondisi1'];
			$kondisi2=$data['kondisi2'];
			$kondisi3=$data['kondisi3'];
			$kondisi4=$data['kondisi4'];
			$kondisi5=$data['kondisi5'];
			$kondisi6=$data['kondisi6'];
			$kondisi7=$data['kondisi7'];
			$kondisi8=$data['kondisi8'];
			$asuhan1=$data['asuhan1'];
			$asuhan2=$data['asuhan2'];
			$asuhan3=$data['asuhan3'];
			$asuhan4=$data['asuhan4'];
			$ket_tambahan=$data['ket_tambahan'];
		}
	?>
	
	<form action="petugas_data_detail_persalinan_input_ubah.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<center>
				
					<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil Bersalin</br>Ibu Nifas dan Bayi Baru Lahir</h3>
					</br>
					
					<input class="form" type="hidden" name="kd_det_persalinan" value="<?php echo $kd; ?>" required />
					<input class="form" type="hidden" name="kd_persalinan" value="<?php echo $kd_persalinan; ?>" required />
					
					<b>Bayi Saat Lahir</b>
					<br>
					<br>
					<table>
						<tr>
							<td>Anak ke<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" type="number" name="anak_ke" placeholder="....................................................." value="<?php echo $anak_ke; ?>" required />
							</td>
						</tr>
						<tr>
							<td>Berat Lahir<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="berat_lahir" placeholder="....................................................." value="<?php echo $berat_lahir; ?>" required /> gram
							</td>
						</tr>
						<tr>
							<td>Panjang Badan<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="panjang_badan" placeholder="....................................................." value="<?php echo $panjang_badan; ?>" required /> cm
							</td>
						</tr>
						<tr>
							<td>Lingkar Kelamin<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" type="text" name="lingkar_kepala" placeholder="....................................................." value="<?php echo $lingkar_kepala; ?>" required /> cm
							</td>
						</tr>
						<tr>
							<td>Jenis Kelamin<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							&nbsp;<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($jenis_kelamin=="Laki-laki") echo 'checked'; ?> required> Laki-laki &nbsp;
							<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=="Perempuan") echo 'checked'; ?> required > Perempuan
							</td>
						</tr>
					</table>
					
					<br>
					<br>
					<b>Kondisi Bayi Saat Lahir</b>
					<br>
					<br>
					<table>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi1" value="1" <?php if($kondisi1=="1") echo 'checked'; ?> />&nbsp;&nbsp;Segera menangis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi2" value="1" <?php if($kondisi2=="1") echo 'checked'; ?> />&nbsp;&nbsp;Anggota gerak kebiruan&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi3" value="1" <?php if($kondisi3=="1") echo 'checked'; ?> />&nbsp;&nbsp;Menangis beberapa saat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi4" value="1" <?php if($kondisi4=="1") echo 'checked'; ?> />&nbsp;&nbsp;Seluruh tubuh biru&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi5" value="1" <?php if($kondisi5=="1") echo 'checked'; ?> />&nbsp;&nbsp;Tidak menangis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi6" value="1" <?php if($kondisi6=="1") echo 'checked'; ?> />&nbsp;&nbsp;Kelainan bawaan&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi7" value="1" <?php if($kondisi7=="1") echo 'checked'; ?> />&nbsp;&nbsp;Seluruh tubuh kemerahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi8" value="1" <?php if($kondisi8=="1") echo 'checked'; ?> />&nbsp;&nbsp;Meninggal&nbsp;&nbsp;
							</td>
						</tr>
					</table>
					
					<br>
					<br>
					<b>Asuhan Bayi Baru Lahir</b>
					<br>
					<br>
					<table>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan1" value="1" <?php if($asuhan1=="1") echo 'checked'; ?> />&nbsp;&nbsp;Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan2" value="1" <?php if($asuhan2=="1") echo 'checked'; ?> />&nbsp;&nbsp;Suntikan Vitamin K1&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan3" value="1" <?php if($asuhan3=="1") echo 'checked'; ?> />&nbsp;&nbsp;Salep mata antibiotika profilaksis&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan4" value="1" <?php if($asuhan4=="1") echo 'checked'; ?> />&nbsp;&nbsp;Imunisasi Hb0&nbsp;&nbsp;
							</td>
						</tr>
					</table>
					
					</br>
					
					Keterangan tambahan: </br> 
					<textarea style="width:500px; height:100px;" class="form" name="ket_tambahan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ><?php echo $ket_tambahan; ?></textarea>

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