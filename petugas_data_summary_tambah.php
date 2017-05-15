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
	
	<form action="petugas_data_summary_input.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<center>
					</br>
					Nama Pasien:<span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name='nama_ibu' id='nama' onChange='window.location="petugas_data_summary_tambah.php?value=" + this.value;' required >
						<option value="none">Pilih Pasien.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT CONCAT(m.kd_kel, '-', h.nama) as nama FROM header h join mst_kk m on h.no_kk = m.no_kk";
							$result = mysql_query($query);
							
							$value="";
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) { 
							?>
							<option value="<?php echo $data['nama']; ?>"
							
							<?php
								if (isset($_GET['value'])) {
									if ($_GET['value'] == $data['nama']) {
										$value = $data['nama'];
										echo ' selected="selected"';
									}
								}
							?>
							><?php echo $data['nama']; ?></option>
							<?php
							}
						?>
					</select>
					</br>
					Tanggal Persalinan: <span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name="tanggal" id="tgl_persalinan" required >
						<option value="none">Pilih Tanggal.....</option>
						<?php
							include("config/config.php");
							$value = substr($value, strpos($value, "-") + 1);
							$query = "SELECT tgl_persalinan, pukul FROM persalinan where nama = '$value'";
							$result = mysql_query($query);
						?>
						<?php
							while ($data = mysql_fetch_assoc($result)) {
						?>
							<option value="<?php echo $data['tgl_persalinan'];?>" >
						<?php
								echo $data['tgl_persalinan'] . ' ' . $data['pukul'];
						?>
							</option>
						<?php
							}
						?>
					</select>
					
					<script>
						$('#tgl_persalinan').on('change', function() {
							var tgl_persalinan = this.value;
							var nama = $('#nama').val();
							nama = nama.split('-')[1];
							
							if (tgl_persalinan != "") {
								$.post('ajax_get_kd_persalinan.php', {tgl_persalinan:tgl_persalinan,nama:nama},
								function(data) {
									$('#kd_persalinan').val(data);
								});
							}
							else {
								$('#kd_persalinan').val("");
							}
						});
					</script>
					
					<input class="form" type="text" name="kd_persalinan" id="kd_persalinan" placeholder="Kode Persalinan" required style="background:#6ECDCF; color:#FFFFFF" >
					
					</br>
					</br>
					
					<b>Kesimpulan Akhir Nifas<span style="color:#FF0000">&nbsp;*</span></b></br>
					Keadaan Ibu: 
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sehat" required />&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Sakit" required />&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_ibu" value="Menangis" required />&nbsp;&nbsp;Menangis
							</td>
						</tr>
					</table>
					
					</br>
					
					<b>Komplikasi Nifas: <span style="color:#FF0000">&nbsp;*</span></b>
					<br>
					<table>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Perdarahan" required />&nbsp;&nbsp;Perdarahan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Infeksi" required />&nbsp;&nbsp;Infeksi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Hipertensi" required />&nbsp;&nbsp;Hipertensi
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="komplikasi_nifas" value="Lain-lain: Depresi post partum" required />&nbsp;&nbsp;Lain-lain: </br>
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
							<input class="form" type="radio" name="keadaan_bayi" value="Sehat" required />&nbsp;&nbsp;Sehat
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Sakit" required />&nbsp;&nbsp;Sakit
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Kelainan Bawaan" required />&nbsp;&nbsp;Kelainan Bawaan
							</td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;
							<input class="form" type="radio" name="keadaan_bayi" value="Meninggal" required />&nbsp;&nbsp;Meninggal
							</td>
						</tr>
					</table>

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