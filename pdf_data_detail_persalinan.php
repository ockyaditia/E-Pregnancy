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


	
<div style="font-size:12pt; line-height: 50%;">
	<?php
		require ("config/config.php");
	
		$lihat = $_GET['lihat'];
		$query = mysql_query("select * from det_persalinan where kd_det_persalinan = '$lihat'");
		
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
		
	<div class="banner-bottom">
		<div class="container3">
			<br>
			
			<center>
				
					<b>Bayi Saat Lahir</b>
					<br>
					<br>
					<table>
						<tr>
							<td>Anak ke</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="anak_ke" placeholder="....................................................." value="<?php echo $anak_ke; ?>" required readonly />
							</td>
						</tr>
						<tr>
							<td>Berat Lahir</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="berat_lahir" placeholder="....................................................." value="<?php echo $berat_lahir; ?>" required readonly /> gram
							</td>
						</tr>
						<tr>
							<td>Panjang Badan</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="panjang_badan" placeholder="....................................................." value="<?php echo $panjang_badan; ?>" required readonly /> cm
							</td>
						</tr>
						<tr>
							<td>Lingkar Kelamin</td>
							<td> : </td>
							<td>
							<input class="form2" type="text" name="lingkar_kepala" placeholder="....................................................." value="<?php echo $lingkar_kepala; ?>" required readonly /> cm
							</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td> : </td>
							<td>
							&nbsp;<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($jenis_kelamin=="Laki-laki") echo 'checked'; ?> required readonly disabled > Laki-laki &nbsp;
							<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=="Perempuan") echo 'checked'; ?> required readonly disabled > Perempuan
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
								<input class="form" type="checkbox" name="kondisi1" value="1" <?php if($kondisi1=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Segera menangis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi2" value="1" <?php if($kondisi2=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Anggota gerak kebiruan&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi3" value="1" <?php if($kondisi3=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Menangis beberapa saat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi4" value="1" <?php if($kondisi4=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Seluruh tubuh biru&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi5" value="1" <?php if($kondisi5=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Tidak menangis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi6" value="1" <?php if($kondisi6=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Kelainan bawaan&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="kondisi7" value="1" <?php if($kondisi7=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Seluruh tubuh kemerahan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<input class="form" type="checkbox" name="kondisi8" value="1" <?php if($kondisi8=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Meninggal&nbsp;&nbsp;
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
								<input class="form" type="checkbox" name="asuhan1" value="1" <?php if($asuhan1=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan2" value="1" <?php if($asuhan2=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Suntikan Vitamin K1&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan3" value="1" <?php if($asuhan3=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Salep mata antibiotika profilaksis&nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<input class="form" type="checkbox" name="asuhan4" value="1" <?php if($asuhan4=="1") echo 'checked'; ?> readonly disabled />&nbsp;&nbsp;Imunisasi Hb0&nbsp;&nbsp;
							</td>
						</tr>
					</table>
					
					<br><br>
					
					Keterangan tambahan: <br> <br> <br>
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