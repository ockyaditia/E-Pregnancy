<?php 
	include("pdf/mpdf.php");
	session_start();
	include("config/config.php");
	include("_session_login.php");

	$mpdf=new mPDF('win-1252','A4','','',15,10,16,10,10,10);//A4 page in portrait for landscape add -L.
	$mpdf->SetHeader('||');
	$mpdf->setFooter('{PAGENO}');// Giving page number to your footer.
	$mpdf->useOnlyCoreFonts = true;    // false is default
	$mpdf->SetDisplayMode('fullpage');
	// Buffer the following html with PHP so we can store it to a variable later
	ob_start();
	
	include("pdf_header.php");
?>



<h3 style="background:#FFFFFF; font-size: 16pt; color:#6ECDCF; font-weight:bold; margin:0px; margin-left:260px;">Data Rujukan<br></h3>

<hr>


	
<div style="font-size:12pt; line-height: 200%;">
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
			<br>
			
			<center>
				
					Nama Pasien:
					<input class="form2" type="text" name="nama" id="nama" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $nama; ?>" readonly >
					<br>
					Tanggal Persalinan: 
					<input class="form2" type="text" name="tgl_persalinan" id="tgl_persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $tgl_persalinan; ?>" readonly >
					
					<input class="form2" type="text" name="kd_persalinan" id="kd_persalinan" required style="background:#6ECDCF; color:#FFFFFF" value="<?php echo $kd_persalinan; ?>" readonly >
					
					<br>
					<br>
					
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
							<input class="form2" style="width:50%;" type="text" name="dirujuk_ke" value="<?php echo $dirujuk_ke; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Sebab dirujuk</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:50%;" type="text" name="sebab_dirujuk" value="<?php echo $sebab_dirujuk; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Diagnosis sementara</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:50%;" type="text" name="diagnosis" value="<?php echo $diagnosis; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Tindakan sementara</td>
							<td> : </td>
							<td>
							<input class="form2" style="width:50%;" type="text" name="tindakan" value="<?php echo $tindakan; ?>" readonly />
							</td>
						</tr>
					</table>
					
					<br>
					
					Yang merujuk <br>
					<input class="form2" style="width:50%;" type="text" name="yang_merujuk" placeholder=".........................................................................................................." value="<?php echo $yang_merujuk; ?>" required readonly />
		
				<br><br>
			</center>
		</div>
	</div>
</div>

<?php 
	$html = ob_get_contents();
	ob_end_clean();
	// send the captured HTML from the output buffer to the mPDF class for processing
	$mpdf->WriteHTML($html);
	//$mpdf->SetProtection(array(), 'user', 'password'); uncomment to protect your pdf page with password.
	$mpdf->Output($file_name, 'I');  
	rename("Data Cab Meeting", $file_name);
	exit;
?>