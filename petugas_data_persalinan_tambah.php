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
					include("petugas_data_persalinan_validasi.php");
				?>
				<span style="color:#FF0000">&nbsp;*</span> <span style="color:#FF0000; font-size:8pt; font-style:italic;">Required</span>
			</div>
		</div>
	</div>
	
	<form action="petugas_data_persalinan_input.php" method="post">
		<div class="banner-bottom">
			<div class="container3">
				<center>
				
					<h3 style="background:#FFFFFF; color:#6ECDCF; font-weight:bold; ">Catatan Kesehatan Ibu Hamil Bersalin</br>Ibu Nifas dan Bayi Baru Lahir</h3>
					</br>
					
					Nama Pasien: <span style="color:#FF0000">&nbsp;*</span>
					<select class="form" name="nama" id="nama" required >
						<option value="none">Pilih Pasien.....</option>
						<?php
							include("config/config.php");
							$query = "SELECT nama FROM data_kehamilan";
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
								$.post('ajax_get_kd_kehamilan.php', {nama:nama},
								function(data) {
									$('#kd_data_kehamilan').val(data);
								});
							}
							else {
								$('#kd_data_kehamilan').val("");
							}
						});
					</script>
					
					<input class="form readonly" type="text" name="kd_data_kehamilan" id="kd_data_kehamilan" placeholder="Kode Pasien" required style="background:#6ECDCF; color:#FFFFFF" >
						
					</br>
					</br>
					
					<b>Ibu Bersalin dan Ibu Nifas</b>
					<br>
					<table>
						<tr>
							<td>Tanggal Persalinan<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<div id="datetimepicker4" class="input-append">
								<button class="add-on date"><img src="images/calendar.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="yyyy-MM-dd" type="text" name="tgl_persalinan" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required />
							</div>
							</td>
						</tr>
						<tr>
							<td>Pukul<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<div id="datetimepicker3" class="input-append">
								<button class="add-on date"><img src="images/clock.png" width="35" height="35" ></button>
								<input class="form readonly" data-format="hh:mm:ss" type="text" name="pukul" placeholder="....................................................." style="background:#6ECDCF; color:#FFFFFF" required />
							</div>
							</td>
						</tr>
						<tr>
							<td>Umur Kehamilan<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<input style="width:20%;" class="form" type="number" name="umur_kehamilan" placeholder="....................................................." required /> Bulan
							</td>
						</tr>
						<tr>
							<td>Penolong persalinan<span style="color:#FF0000">&nbsp;*</span>&nbsp;</td>
							<td> : </td>
							<td>
							<input class="form" type="hidden" name="penolong" value="Dokter / Bidan" required />
							&nbsp;Dokter/Bidan/Lain-Lain
							<select class="form" name="penolong_lain_lain" required >
								<option value="none">Pilih.....</option>
								<?php
									include("config/config.php");
									$query = "SELECT nama FROM user_akses WHERE bagian = 'Dokter / Bidan'";
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
							</td>
						</tr>
						<tr>
							<td>Cara persalinan<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<select class="form" name="cara_persalinan" id="cara_persalinan" required >
								<option value="none">Pilih.....</option>
								<option value="Normal">Normal</option>
								<option value="Tindakan">Tindakan</option>
							</select>
							<script>
								$(document).ready(function()
							    {
									$("#cara_persalinan").change(function()
									{
										if($(this).val() == "Tindakan")
										{
											$("#cara_persalinan_tindakan").show();
											$("#cara_persalinan_tindakan").prop('required',true);
										}
										else
										{
											$("#cara_persalinan_tindakan").hide();
											$("#cara_persalinan_tindakan").prop('required',false);
										}
									});
									$("#cara_persalinan_tindakan").hide();
									$("#cara_persalinan_tindakan").prop('required',false);
								});
							</script>
							<input class="form" type="text" name="cara_persalinan_tindakan" id="cara_persalinan_tindakan" placeholder="....................................................." />
							</td>
						</tr>
						<tr>
							<td>Keadaan ibu<span style="color:#FF0000">&nbsp;*</span></td>
							<td> : </td>
							<td>
							<select class="form" name="keadaan_ibu" id="keadaan_ibu" required >
								<option value="none">Pilih.....</option>
								<option value="Sehat">Sehat</option>
								<option value="Sakit">Sakit</option>
								<option value="Meninggal">Meninggal</option>
							</select>
							<select class="form" name="keadaan_ibu_sakit" id="keadaan_ibu_sakit" >
								<option value="none">Pilih.....</option>
								<option value="Pendarahan">Pendarahan</option>
								<option value="Demam">Demam</option>
								<option value="Kejang">Kejang</option>
								<option value="Lokhia Berbau">Lokhia Berbau</option>
								<option value="Lain-Lain">Lain-Lain</option>
							</select>
							<input class="form" type="text" name="sakit_lain_lain" id="sakit_lain_lain" placeholder="....................................................." />
							</td>
							<script>
								$(document).ready(function()
							    {
									$("#keadaan_ibu").change(function()
									{
										if($(this).val() == "Sakit")
										{
											$("#keadaan_ibu_sakit").show();
											$("#keadaan_ibu_sakit").prop('required',true);
										}
										else
										{
											$("#keadaan_ibu_sakit").hide();
											$("#keadaan_ibu_sakit").prop('required',false);
											$("#sakit_lain_lain").hide();
											$("#sakit_lain_lain").prop('required',false);
										}
									});
									$("#keadaan_ibu_sakit").hide();
									$("#keadaan_ibu_sakit").prop('required',false);
									$("#sakit_lain_lain").hide();
									$("#sakit_lain_lain").prop('required',false);
									
									$("#keadaan_ibu_sakit").change(function()
									{
										if($(this).val() == "Lain-Lain")
										{
											$("#sakit_lain_lain").show();
											$("#sakit_lain_lain").prop('required',true);
										}
										else
										{
											$("#sakit_lain_lain").hide();
											$("#sakit_lain_lain").prop('required',false);
										}
									});
								});
							</script>
						</tr>
					</table>
					
					</br>
					Keterangan tambahan</br>
					<textarea style="width:500px; height:100px;" class="form" name="ket_tambahan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ></textarea>

					</br></br>
					
					<input class="submit" type="submit" value="Tambah" >
					
					</br>
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