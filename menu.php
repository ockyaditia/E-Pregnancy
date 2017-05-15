<?php
	if (isset($bagian) && $bagian == "Admin / Petugas") {	
?>
	<li class="dropdown">
		<a href="#">Data Master</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="petugas_data_kelurahan_form.php">Data&nbsp;Kelurahan</a></li>
				<li><a href="petugas_data_keluarga_form.php">Data&nbsp;Keluarga</a></li>
				<li><a href="petugas_data_detail_keluarga_form.php">Detail&nbsp;Data&nbsp;Keluarga</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Pengguna</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="petugas_data_user_akses_form.php?bagian=Pimpinan Dinkes">Pimpinan&nbsp;Dinkes</a></li>
				<li><a href="petugas_data_user_akses_form.php?bagian=Pimpinan Puskesmas">Pimpinan&nbsp;Puskesmas</a></li>
				<li><a href="petugas_data_user_akses_form.php?bagian=Dokter / Bidan">Dokter / Bidan</a></li>
				<li><a href="petugas_data_user_akses_form.php?bagian=Admin / Petugas">Admin / Petugas</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Medis</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="petugas_data_ibu_hamil_form.php">Ibu&nbsp;Hamil</a></li>
				<li><a href="petugas_data_kehamilan_form.php">Data&nbsp;Kehamilan</a></li>
				<li><a href="petugas_data_persalinan_form.php">Data&nbsp;Persalinan</a></li>
				<li><a href="petugas_data_ibu_nifas_form.php">Data&nbsp;Nifas</a></li>
				<li><a href="petugas_data_rujukan_form.php">Data&nbsp;Rujukan</a></li>
				<li><a href="petugas_data_umpan_balik_rujukan_form.php">Data&nbsp;Umpan&nbsp;Balik&nbsp;Rujukan</a></li>
				<li><a href="petugas_data_summary_form.php">Data&nbsp;Akhir&nbsp;Ibu&nbsp;Hamil</a></li>
			</ul>
		</div>
	</li>
<?php
	} else if (isset($bagian) && ($bagian == "Pimpinan Dinkes" || $bagian == "Pimpinan Puskesmas")) {
?>
	<li class="dropdown">
		<a href="#">Data Master</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="pimpinan_data_kelurahan_form.php">Data&nbsp;Kelurahan</a></li>
				<li><a href="pimpinan_data_keluarga_form.php">Data&nbsp;Keluarga</a></li>
				<li><a href="pimpinan_data_detail_keluarga_form.php">Detail&nbsp;Data&nbsp;Keluarga</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Pengguna</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="pimpinan_data_user_akses_form.php?bagian=Pimpinan Dinkes">Pimpinan&nbsp;Dinkes</a></li>
				<li><a href="pimpinan_data_user_akses_form.php?bagian=Pimpinan Puskesmas">Pimpinan&nbsp;Puskesmas</a></li>
				<li><a href="pimpinan_data_user_akses_form.php?bagian=Dokter / Bidan">Dokter / Bidan</a></li>
				<li><a href="pimpinan_data_user_akses_form.php?bagian=Admin / Petugas">Admin / Petugas</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Medis</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="pimpinan_data_ibu_hamil_form.php">Ibu&nbsp;Hamil</a></li>
				<li><a href="pimpinan_data_kehamilan_form.php">Data&nbsp;Kehamilan</a></li>
				<li><a href="pimpinan_data_persalinan_form.php">Data&nbsp;Persalinan</a></li>
				<li><a href="pimpinan_data_ibu_nifas_form.php">Data&nbsp;Nifas</a></li>
				<li><a href="pimpinan_data_rujukan_form.php">Data&nbsp;Rujukan</a></li>
				<li><a href="pimpinan_data_umpan_balik_rujukan_form.php">Data&nbsp;Umpan&nbsp;Balik&nbsp;Rujukan</a></li>
				<li><a href="pimpinan_data_summary_form.php">Data&nbsp;Akhir&nbsp;Ibu&nbsp;Hamil</a></li>
			</ul>
		</div>
	</li>
<?php
	} else if (isset($bagian) && $bagian == "Dokter / Bidan") {
?>
	<li class="dropdown">
		<a href="#">Data Master</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="bidan_data_kelurahan_form.php">Data&nbsp;Kelurahan</a></li>
				<li><a href="bidan_data_keluarga_form.php">Data&nbsp;Keluarga</a></li>
				<li><a href="bidan_data_detail_keluarga_form.php">Detail&nbsp;Data&nbsp;Keluarga</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Pengguna</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="bidan_data_user_akses_form.php?bagian=Pimpinan Dinkes">Pimpinan&nbsp;Dinkes</a></li>
				<li><a href="bidan_data_user_akses_form.php?bagian=Pimpinan Puskesmas">Pimpinan&nbsp;Puskesmas</a></li>
				<li><a href="bidan_data_user_akses_form.php?bagian=Dokter / Bidan">Dokter / Bidan</a></li>
				<li><a href="bidan_data_user_akses_form.php?bagian=Admin / Petugas">Admin / Petugas</a></li>
			</ul>
		</div>
	</li>
	<li class="dropdown">
		<a href="#">Data Medis</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="bidan_data_ibu_hamil_form.php">Ibu&nbsp;Hamil</a></li>
				<li><a href="bidan_data_kehamilan_form.php">Data&nbsp;Kehamilan</a></li>
				<li><a href="bidan_data_persalinan_form.php">Data&nbsp;Persalinan</a></li>
				<li><a href="bidan_data_ibu_nifas_form.php">Data&nbsp;Nifas</a></li>
				<li><a href="bidan_data_rujukan_form.php">Data&nbsp;Rujukan</a></li>
				<li><a href="bidan_data_umpan_balik_rujukan_form.php">Data&nbsp;Umpan&nbsp;Balik&nbsp;Rujukan</a></li>
				<li><a href="bidan_data_summary_form.php">Data&nbsp;Akhir&nbsp;Ibu&nbsp;Hamil</a></li>
			</ul>
		</div>
	</li>
<?php
	}
?>
	
<?php
	if (isset($bagian)) {	
?>	
	
	<li class="dropdown">
		<a href="#">Laporan</a>
		<div class="dropdown-content">
			<ul class="nav navbar-nav">
				<li><a href="laporan_data_ibu_hamil.php">Data&nbsp;Ibu&nbsp;Hamil</a></li>
                <li><a href="laporan_data_ibu_hamil_melahirkan.php">Data&nbsp;Ibu&nbsp;Hamil&nbsp;Melahirkan&nbsp;Sehat</a></li>
                <li><a href="laporan_data_ibu_hamil_meninggal.php">Data&nbsp;Ibu&nbsp;Hamil&nbsp;Melahirkan&nbsp;Meninggal</a></li>
                <li><a href="laporan_data_ibu_hamil_bayi_sehat.php">Data&nbsp;Ibu&nbsp;Hamil&nbsp;Melahirkan&nbsp;Bayi&nbsp;Sehat</a></li>
                <li><a href="laporan_data_ibu_hamil_bayi_meninggal.php">Data&nbsp;Ibu&nbsp;Hamil&nbsp;Melahirkan&nbsp;Bayi&nbsp;Meninggal</a></li>
			</ul>
		</div>
	</li>
	
<?php
	}
?>