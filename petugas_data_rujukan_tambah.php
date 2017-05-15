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
	
	<form action="petugas_data_rujukan_input.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<center>
					</br>
					Nama Pasien:<span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name='nama' id='nama' onChange='window.location="petugas_data_rujukan_tambah.php?value=" + this.value;' required >
						<option value="none">Pilih Pasien.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama FROM header";
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
					<select class="form" name="tgl_persalinan" id="tgl_persalinan" required >
						<option value="none">Pilih Tanggal.....</option>
						<?php
							include("config/config.php");
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
					
					<b>Rujukan</b>
					<br>
					<table>
						<tr>
							<td>Tanggal Rujukan<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<div id="datetimepicker4" class="input-append">
								<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required >
							</div>
							</td>
						</tr>
						<tr>
							<td>Jam<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<div id="datetimepicker3" class="input-append">
								<button class="add-on date"><img src="images/clock.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="hh:mm:ss" type="text" name="jam" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required >
							</div>
							</td>
						</tr>
						<tr>
							<td>Dirujuk ke<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="dirujuk_ke" placeholder=".........................................................................................................." required />
							</td>
						</tr>
						<tr>
							<td>Sebab dirujuk<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="sebab_dirujuk" placeholder=".........................................................................................................." required />
							</td>
						</tr>
						<tr>
							<td>Diagnosis sementara<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="diagnosis" placeholder=".........................................................................................................." required />
							</td>
						</tr>
						<tr>
							<td>Tindakan sementara<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input class="form" style="width:100%;" type="text" name="tindakan" placeholder=".........................................................................................................." required />
							</td>
						</tr>
					</table>
					
					</br>
					
					Yang merujuk<span style="color:#FF0000">&nbsp;*</span></br>
					<input class="form" style="width:50%;" type="text" name="yang_merujuk" value="<?php echo $_SESSION['nama']; ?>" readonly required />

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