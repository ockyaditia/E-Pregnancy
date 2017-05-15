-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Sep 2016 pada 04.45
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_pregnancysys`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kehamilan`
--

CREATE TABLE IF NOT EXISTS `data_kehamilan` (
`kd_data_kehamilan` int(11) NOT NULL,
  `kd_header` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_hpht` date NOT NULL,
  `tgl_htp` date NOT NULL,
  `lingkar_lengan_atas` double NOT NULL,
  `kek` enum('Yes','No') NOT NULL,
  `tinggi_badan` double NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `kontrasepsi` varchar(100) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `riwayat_alergi` text NOT NULL,
  `hamil_ke` int(11) NOT NULL,
  `jml_persalinan` int(11) NOT NULL,
  `jml_keguguran` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `jml_anak_hidup` int(11) NOT NULL,
  `jml_lahir_mati` int(11) NOT NULL,
  `jml_anak_lahir_kurang_bulan` int(11) NOT NULL,
  `jarak_kehamilan` varchar(50) NOT NULL,
  `jarak_kehamilan_waktu` enum('Bulan','Tahun') NOT NULL,
  `status_imunisasi` varchar(50) NOT NULL,
  `penolong_persalinan_terakhir` varchar(150) NOT NULL,
  `cara_persalinan_terakhir` enum('Spontan','Normal') NOT NULL,
  `tindakan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kehamilan`
--

INSERT INTO `data_kehamilan` (`kd_data_kehamilan`, `kd_header`, `nama`, `tgl_hpht`, `tgl_htp`, `lingkar_lengan_atas`, `kek`, `tinggi_badan`, `gol_darah`, `kontrasepsi`, `riwayat_penyakit`, `riwayat_alergi`, `hamil_ke`, `jml_persalinan`, `jml_keguguran`, `G`, `P`, `A`, `jml_anak_hidup`, `jml_lahir_mati`, `jml_anak_lahir_kurang_bulan`, `jarak_kehamilan`, `jarak_kehamilan_waktu`, `status_imunisasi`, `penolong_persalinan_terakhir`, `cara_persalinan_terakhir`, `tindakan`) VALUES
(8, 5, 'Atikah', '2016-09-18', '2016-09-19', 11.5, 'Yes', 167, 'A', 'Tidak', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, '0', 'Bulan', '0', '', 'Spontan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_ibu_nifas`
--

CREATE TABLE IF NOT EXISTS `det_ibu_nifas` (
`kd_det_ibu_nifas` int(11) NOT NULL,
  `kd_pelayanan` int(11) NOT NULL,
  `item1_kunjungan1` date NOT NULL,
  `item1_kunjungan2` date NOT NULL,
  `item1_kunjungan3` date NOT NULL,
  `item2_kunjungan1` date NOT NULL,
  `item2_kunjungan2` date NOT NULL,
  `item2_kunjungan3` date NOT NULL,
  `item3_kunjungan1` date NOT NULL,
  `item3_kunjungan2` date NOT NULL,
  `item3_kunjungan3` date NOT NULL,
  `item4_kunjungan1` date NOT NULL,
  `item4_kunjungan2` date NOT NULL,
  `item4_kunjungan3` date NOT NULL,
  `item5_kunjungan1` date NOT NULL,
  `item5_kunjungan2` date NOT NULL,
  `item5_kunjungan3` date NOT NULL,
  `item6_kunjungan1` date NOT NULL,
  `item6_kunjungan2` date NOT NULL,
  `item6_kunjungan3` date NOT NULL,
  `item7_kunjungan1` date NOT NULL,
  `item7_kunjungan2` date NOT NULL,
  `item7_kunjungan3` date NOT NULL,
  `item8_kunjungan1` date NOT NULL,
  `item8_kunjungan2` date NOT NULL,
  `item8_kunjungan3` date NOT NULL,
  `item9_kunjungan1` date NOT NULL,
  `item9_kunjungan2` date NOT NULL,
  `item9_kunjungan3` date NOT NULL,
  `item10_kunjungan1` date NOT NULL,
  `item10_kunjungan2` date NOT NULL,
  `item10_kunjungan3` date NOT NULL,
  `item11_kunjungan1` date NOT NULL,
  `item11_kunjungan2` date NOT NULL,
  `item11_kunjungan3` date NOT NULL,
  `item12_kunjungan1` date NOT NULL,
  `item12_kunjungan2` date NOT NULL,
  `item12_kunjungan3` date NOT NULL,
  `item13_kunjungan1` date NOT NULL,
  `item13_kunjungan2` date NOT NULL,
  `item13_kunjungan3` date NOT NULL,
  `item14_kunjungan1` date NOT NULL,
  `item14_kunjungan2` date NOT NULL,
  `item14_kunjungan3` date NOT NULL,
  `item15_kunjungan1` date NOT NULL,
  `item15_kunjungan2` date NOT NULL,
  `item15_kunjungan3` date NOT NULL,
  `item16_kunjungan1` date NOT NULL,
  `item16_kunjungan2` date NOT NULL,
  `item16_kunjungan3` date NOT NULL,
  `item17_kunjungan1` date NOT NULL,
  `item17_kunjungan2` date NOT NULL,
  `item17_kunjungan3` date NOT NULL,
  `item18_kunjungan1` date NOT NULL,
  `item18_kunjungan2` date NOT NULL,
  `item18_kunjungan3` date NOT NULL,
  `buang_air_besar` enum('+','-') NOT NULL,
  `buang_air_kecil` enum('+','-') NOT NULL,
  `produksi_asi` varchar(150) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_ibu_nifas`
--

INSERT INTO `det_ibu_nifas` (`kd_det_ibu_nifas`, `kd_pelayanan`, `item1_kunjungan1`, `item1_kunjungan2`, `item1_kunjungan3`, `item2_kunjungan1`, `item2_kunjungan2`, `item2_kunjungan3`, `item3_kunjungan1`, `item3_kunjungan2`, `item3_kunjungan3`, `item4_kunjungan1`, `item4_kunjungan2`, `item4_kunjungan3`, `item5_kunjungan1`, `item5_kunjungan2`, `item5_kunjungan3`, `item6_kunjungan1`, `item6_kunjungan2`, `item6_kunjungan3`, `item7_kunjungan1`, `item7_kunjungan2`, `item7_kunjungan3`, `item8_kunjungan1`, `item8_kunjungan2`, `item8_kunjungan3`, `item9_kunjungan1`, `item9_kunjungan2`, `item9_kunjungan3`, `item10_kunjungan1`, `item10_kunjungan2`, `item10_kunjungan3`, `item11_kunjungan1`, `item11_kunjungan2`, `item11_kunjungan3`, `item12_kunjungan1`, `item12_kunjungan2`, `item12_kunjungan3`, `item13_kunjungan1`, `item13_kunjungan2`, `item13_kunjungan3`, `item14_kunjungan1`, `item14_kunjungan2`, `item14_kunjungan3`, `item15_kunjungan1`, `item15_kunjungan2`, `item15_kunjungan3`, `item16_kunjungan1`, `item16_kunjungan2`, `item16_kunjungan3`, `item17_kunjungan1`, `item17_kunjungan2`, `item17_kunjungan3`, `item18_kunjungan1`, `item18_kunjungan2`, `item18_kunjungan3`, `buang_air_besar`, `buang_air_kecil`, `produksi_asi`, `catatan`) VALUES
(6, 7, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2017-06-09', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '+', '+', 'ASI', 'Catatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_kk`
--

CREATE TABLE IF NOT EXISTS `det_kk` (
  `no_kk` varchar(25) NOT NULL,
  `nama_kk` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `no` varchar(25) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_kk`
--

INSERT INTO `det_kk` (`no_kk`, `nama_kk`, `alamat`, `no`, `rt`, `rw`, `kota`, `kodepos`) VALUES
('KK62649J82N', 'Eddy Djunaedi', 'Jl. H. Suit', '12', 3, 6, 'Jakarta', 14130);

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_persalinan`
--

CREATE TABLE IF NOT EXISTS `det_persalinan` (
`kd_det_persalinan` int(11) NOT NULL,
  `kd_persalinan` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `berat_lahir` double NOT NULL,
  `panjang_badan` double NOT NULL,
  `lingkar_kepala` double NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kondisi1` varchar(5) NOT NULL,
  `kondisi2` varchar(5) NOT NULL,
  `kondisi3` varchar(5) NOT NULL,
  `kondisi4` varchar(5) NOT NULL,
  `kondisi5` varchar(5) NOT NULL,
  `kondisi6` varchar(5) NOT NULL,
  `kondisi7` varchar(5) NOT NULL,
  `kondisi8` varchar(5) NOT NULL,
  `asuhan1` varchar(5) NOT NULL,
  `asuhan2` varchar(5) NOT NULL,
  `asuhan3` varchar(5) NOT NULL,
  `asuhan4` varchar(5) NOT NULL,
  `ket_tambahan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_persalinan`
--

INSERT INTO `det_persalinan` (`kd_det_persalinan`, `kd_persalinan`, `anak_ke`, `berat_lahir`, `panjang_badan`, `lingkar_kepala`, `jenis_kelamin`, `kondisi1`, `kondisi2`, `kondisi3`, `kondisi4`, `kondisi5`, `kondisi6`, `kondisi7`, `kondisi8`, `asuhan1`, `asuhan2`, `asuhan3`, `asuhan4`, `ket_tambahan`) VALUES
(5, 11, 1, 11, 11, 11, 'Laki-laki', '1', '', '1', '', '1', '', '1', '', '', '1', '1', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
`id_hak_akses` int(11) NOT NULL,
  `bagian` enum('Pimpinan Dinkes','Pimpinan Puskesmas','Dokter / Bidan','Admin / Petugas') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `bagian`) VALUES
(1, 'Pimpinan Dinkes'),
(2, 'Pimpinan Puskesmas'),
(3, 'Dokter / Bidan'),
(4, 'Admin / Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`kd_header` int(11) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `nama_kk` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`kd_header`, `no_kk`, `nama_kk`, `nama`, `tgl_lahir`) VALUES
(5, 'KK62649J82N', 'Eddy Djunaedi', 'Atikah', '1988-07-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `med_rec_kehamilan`
--

CREATE TABLE IF NOT EXISTS `med_rec_kehamilan` (
`kd_med_rec_kehamilan` int(11) NOT NULL,
  `kd_data_kehamilan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tekanan_darah` double NOT NULL,
  `berat_badan` double NOT NULL,
  `umur_kehamilan` double NOT NULL,
  `tinggi_fundus` double NOT NULL,
  `letak_janin` enum('Kep','Su','Li') NOT NULL,
  `denyut_jantung_janin` varchar(25) NOT NULL,
  `kaki_bengkak` enum('-','+') NOT NULL,
  `hasil_pemeriksaan_lab` text NOT NULL,
  `tindakan` text NOT NULL,
  `nasihat` text NOT NULL,
  `ket` text NOT NULL,
  `kapan_harus_kembali` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `med_rec_kehamilan`
--

INSERT INTO `med_rec_kehamilan` (`kd_med_rec_kehamilan`, `kd_data_kehamilan`, `tgl`, `keluhan`, `tekanan_darah`, `berat_badan`, `umur_kehamilan`, `tinggi_fundus`, `letak_janin`, `denyut_jantung_janin`, `kaki_bengkak`, `hasil_pemeriksaan_lab`, `tindakan`, `nasihat`, `ket`, `kapan_harus_kembali`) VALUES
(10, 8, '2016-09-20', 'Keluhan', 19.1, 66.7, 1, 1, 'Kep', '1', '-', 'Lab', 'Tindakan', 'Nasihat', '', '2016-09-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kel`
--

CREATE TABLE IF NOT EXISTS `mst_kel` (
  `kd_kel` int(11) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(25) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jumlah_rw` int(11) NOT NULL,
  `jumlah_rt` int(11) NOT NULL,
  `ordinat_x` double DEFAULT NULL,
  `ordinat_y` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_kel`
--

INSERT INTO `mst_kel` (`kd_kel`, `nama_kel`, `alamat`, `telp`, `fax`, `email`, `jumlah_rw`, `jumlah_rt`, `ordinat_x`, `ordinat_y`) VALUES
(63100101, 'Kelurahan 1', 'Jl. Kelurahan 1', '', '', '', 13, 34, 12.9, 12.87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kk`
--

CREATE TABLE IF NOT EXISTS `mst_kk` (
  `no_kk` varchar(25) NOT NULL DEFAULT '',
  `nama_kk` varchar(50) NOT NULL,
  `kd_kel` int(11) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `ordinat_x` double DEFAULT NULL,
  `ordinat_y` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_kk`
--

INSERT INTO `mst_kk` (`no_kk`, `nama_kk`, `kd_kel`, `nama_kel`, `jumlah_anggota`, `nama_anggota`, `ordinat_x`, `ordinat_y`) VALUES
('KK62649J82N', 'Eddy Djunaedi', 63100101, 'Kelurahan 1', 0, '', 12.9, 12.87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_ibu_nifas`
--

CREATE TABLE IF NOT EXISTS `pelayanan_ibu_nifas` (
`kd_pelayanan` int(11) NOT NULL,
  `kd_data_kehamilan` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `cara_kb_kontrasepsi` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan_ibu_nifas`
--

INSERT INTO `pelayanan_ibu_nifas` (`kd_pelayanan`, `kd_data_kehamilan`, `nama`, `tgl`, `tempat`, `cara_kb_kontrasepsi`) VALUES
(7, 8, 'Atikah', '2017-03-02', 'Tempay', 'Kontrasepsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persalinan`
--

CREATE TABLE IF NOT EXISTS `persalinan` (
`kd_persalinan` int(11) NOT NULL,
  `kd_data_kehamilan` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_persalinan` date NOT NULL,
  `pukul` time NOT NULL,
  `umur_kehamilan` int(11) NOT NULL,
  `penolong` varchar(150) NOT NULL,
  `penolong_lain_lain` varchar(150) NOT NULL,
  `cara_persalinan` enum('Normal','Tindakan') NOT NULL,
  `cara_persalinan_tindakan` varchar(150) NOT NULL,
  `keadaan_ibu` enum('Sehat','Sakit','Meninggal') NOT NULL,
  `keadaan_ibu_sakit` enum('Pendarahan','Demam','Kejang','Lokhia Berbau','Lain-Lain') NOT NULL,
  `sakit_lain_lain` varchar(150) NOT NULL,
  `ket_tambahan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persalinan`
--

INSERT INTO `persalinan` (`kd_persalinan`, `kd_data_kehamilan`, `nama`, `tgl_persalinan`, `pukul`, `umur_kehamilan`, `penolong`, `penolong_lain_lain`, `cara_persalinan`, `cara_persalinan_tindakan`, `keadaan_ibu`, `keadaan_ibu_sakit`, `sakit_lain_lain`, `ket_tambahan`) VALUES
(11, 8, 'Atikah', '2017-01-06', '09:28:53', 8, 'Dokter / Bidan', 'Dokter 1', 'Normal', '', 'Sehat', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rujukan`
--

CREATE TABLE IF NOT EXISTS `rujukan` (
`kd_rujukan` int(11) NOT NULL,
  `kd_persalinan` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_persalinan` date NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `dirujuk_ke` varchar(150) NOT NULL,
  `sebab_dirujuk` varchar(250) NOT NULL,
  `diagnosis` text NOT NULL,
  `tindakan` text NOT NULL,
  `yang_merujuk` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `summary`
--

CREATE TABLE IF NOT EXISTS `summary` (
`kd_summary` int(11) NOT NULL,
  `kd_persalinan` int(11) NOT NULL,
  `nama_ibu` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `keadaan_ibu` enum('Sehat','Sakit','Meninggal') NOT NULL,
  `komplikasi_nifas` enum('Perdarahan','Infeksi','Hipertensi','Lain-lain: Depresi post partum') NOT NULL,
  `keadaan_bayi` enum('Sehat','Sakit','Kelainan Bawaan','Meninggal') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `summary`
--

INSERT INTO `summary` (`kd_summary`, `kd_persalinan`, `nama_ibu`, `tanggal`, `keadaan_ibu`, `komplikasi_nifas`, `keadaan_bayi`) VALUES
(7, 11, 'Atikah', '2017-01-06', 'Sehat', 'Perdarahan', 'Sehat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umpan_balik_rujukan`
--

CREATE TABLE IF NOT EXISTS `umpan_balik_rujukan` (
`kd_umpan_balik_rujukan` int(11) NOT NULL,
  `kd_rujukan` int(11) NOT NULL,
  `diagnosis` varchar(250) NOT NULL,
  `tindakan` text NOT NULL,
  `anjuran` text NOT NULL,
  `tanggal` date NOT NULL,
  `penerima_rujukan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_akses`
--

CREATE TABLE IF NOT EXISTS `user_akses` (
  `kd_user` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bagian` enum('Pimpinan Dinkes','Pimpinan Puskesmas','Dokter / Bidan','Admin / Petugas') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_akses`
--

INSERT INTO `user_akses` (`kd_user`, `nama`, `bagian`, `username`, `password`) VALUES
('ADMIN-1', 'Admin', 'Admin / Petugas', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
('DINKES-1', 'Dinkes 1', 'Pimpinan Dinkes', 'dinkes1', '51c91268b07799b80b3ccc3ec9932cbb'),
('DOKTER-1', 'Dokter 1', 'Dokter / Bidan', 'dokter1', '5db479bc6453dea4e990cadafd5cede8'),
('PUSKESMAS-1', 'Puskesmas 1', 'Pimpinan Puskesmas', 'puskes1', 'df622f0362645cdbd6744e44eba48c1d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kehamilan`
--
ALTER TABLE `data_kehamilan`
 ADD PRIMARY KEY (`kd_data_kehamilan`);

--
-- Indexes for table `det_ibu_nifas`
--
ALTER TABLE `det_ibu_nifas`
 ADD PRIMARY KEY (`kd_det_ibu_nifas`);

--
-- Indexes for table `det_kk`
--
ALTER TABLE `det_kk`
 ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `det_persalinan`
--
ALTER TABLE `det_persalinan`
 ADD PRIMARY KEY (`kd_det_persalinan`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
 ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
 ADD PRIMARY KEY (`kd_header`);

--
-- Indexes for table `med_rec_kehamilan`
--
ALTER TABLE `med_rec_kehamilan`
 ADD PRIMARY KEY (`kd_med_rec_kehamilan`);

--
-- Indexes for table `mst_kel`
--
ALTER TABLE `mst_kel`
 ADD PRIMARY KEY (`kd_kel`);

--
-- Indexes for table `mst_kk`
--
ALTER TABLE `mst_kk`
 ADD PRIMARY KEY (`no_kk`), ADD KEY `kd_kel` (`kd_kel`,`nama_kel`);

--
-- Indexes for table `pelayanan_ibu_nifas`
--
ALTER TABLE `pelayanan_ibu_nifas`
 ADD PRIMARY KEY (`kd_pelayanan`);

--
-- Indexes for table `persalinan`
--
ALTER TABLE `persalinan`
 ADD PRIMARY KEY (`kd_persalinan`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
 ADD PRIMARY KEY (`kd_rujukan`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
 ADD PRIMARY KEY (`kd_summary`);

--
-- Indexes for table `umpan_balik_rujukan`
--
ALTER TABLE `umpan_balik_rujukan`
 ADD PRIMARY KEY (`kd_umpan_balik_rujukan`);

--
-- Indexes for table `user_akses`
--
ALTER TABLE `user_akses`
 ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kehamilan`
--
ALTER TABLE `data_kehamilan`
MODIFY `kd_data_kehamilan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `det_ibu_nifas`
--
ALTER TABLE `det_ibu_nifas`
MODIFY `kd_det_ibu_nifas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `det_persalinan`
--
ALTER TABLE `det_persalinan`
MODIFY `kd_det_persalinan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
MODIFY `kd_header` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `med_rec_kehamilan`
--
ALTER TABLE `med_rec_kehamilan`
MODIFY `kd_med_rec_kehamilan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelayanan_ibu_nifas`
--
ALTER TABLE `pelayanan_ibu_nifas`
MODIFY `kd_pelayanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `persalinan`
--
ALTER TABLE `persalinan`
MODIFY `kd_persalinan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
MODIFY `kd_rujukan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
MODIFY `kd_summary` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `umpan_balik_rujukan`
--
ALTER TABLE `umpan_balik_rujukan`
MODIFY `kd_umpan_balik_rujukan` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
