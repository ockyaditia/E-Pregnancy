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



<h3 style="background:#FFFFFF; font-size: 16pt; color:#6ECDCF; font-weight:bold; margin:0px; margin-left:140px;">Catatan Kesehatan Ibu Hamil Bersalin<br><div style="margin-left:40px;">Ibu Nifas dan Bayi Baru Lahir</div></h3>

<hr>


	
<div style="font-size:12pt; line-height: 200%;">
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['pdf'];
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
			<br>
			
			<center>
				
					Nama Pasien: 
					<input class="form2" type="text" name="nama" value="<?php echo $nama; ?>" readonly >
					
					<input class="form2" type="text" name="kd_data_kehamilan" id="kd_data_kehamilan" value="<?php echo $kd_data_kehamilan; ?>" placeholder="Kode Pasien" required style="background:#FFFFFF; color:#6ECDCF" readonly >
						
					<br>
					<br>
					
					<b>Ibu Bersalin dan Ibu Nifas</b>
					<br>
					<table>
						dad
					</table>
					<table>
						<tr>
							<td>Tanggal Persalinan</td>
							<td> : </td>
							<td>
							<input class="form2" type="date" name="tgl_persalinan" placeholder="....................................................." value="<?php echo $tgl_persalinan; ?>" required readonly />
							Pukul : 
							<input class="form2" type="time" name="pukul" placeholder="....................................................." value="<?php echo $pukul; ?>" required readonly />
							</td>
						</tr>
						<tr>
							<td>Umur Kehamilan</td>
							<td> : </td>
							<td>
							<input style="width:20%;" class="form2" type="text" name="umur_kehamilan" placeholder="....................................................." value="<?php echo $umur_kehamilan; ?>" required readonly /> Bulan
							</td>
						</tr>
						<tr>
							<td>Penolong persalinan</td>
							<td> : </td>
							<td>
							<input class="form2" type="hidden" name="penolong" value="Dokter / Bidan" required />
							&nbsp;Dokter/Bidan/Lain-Lain
							<input class="form2" type="text" name="penolong_lain_lain" value="<?php echo $penolong_lain_lain; ?>" required readonly />
							</td>
						</tr>
						<tr>
							<td>Cara persalinan</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="cara_persalinan" id="cara_persalinan" placeholder="....................................................." value="<?php echo $cara_persalinan_tindakan; ?>" />
							<input class="form2" type="text" name="cara_persalinan_tindakan" id="cara_persalinan_tindakan" placeholder="....................................................." value="<?php echo $cara_persalinan_tindakan; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Keadaan ibu</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="keadaan_ibu" id="keadaan_ibu" value="<?php echo $keadaan_ibu; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Jenis sakit</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="keadaan_ibu_sakit" id="keadaan_ibu_sakit" value="<?php echo $keadaan_ibu_sakit; ?>" readonly />
							</td>
						</tr>
						<tr>
							<td>Keterangan sakit</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="sakit_lain_lain" id="sakit_lain_lain" value="<?php echo $sakit_lain_lain; ?>" readonly />
							</td>
						</tr>
					</table>
					
					<br>
					Keterangan tambahan<br>
					<textarea style="width:500px; height:100px;" class="form2" name="ket_tambahan" placeholder=".........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." readonly ><?php echo $ket_tambahan; ?>&nbsp;</textarea>
		
				</br></br>
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