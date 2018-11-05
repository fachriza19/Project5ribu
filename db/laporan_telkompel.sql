-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 09:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disnav`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_telkompel`
--

CREATE TABLE `laporan_telkompel` (
  `id_laporan` int(11) NOT NULL,
  `nama_instansi` varchar(40) NOT NULL,
  `hari_mulai` varchar(6) NOT NULL,
  `hari_akhir` varchar(6) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jam_awal` varchar(6) NOT NULL,
  `jam_akhir` varchar(6) NOT NULL,
  `kapal_masuk` int(11) NOT NULL,
  `kapal_keluar` int(11) NOT NULL,
  `kapal_melintas` int(11) NOT NULL,
  `kapal_labuh` int(11) NOT NULL,
  `kapal_sandar` int(11) NOT NULL,
  `cuaca` varchar(30) NOT NULL,
  `arah_angin` varchar(50) NOT NULL,
  `kecepatan_angin` varchar(15) NOT NULL,
  `jarak_pandang` varchar(10) NOT NULL,
  `tinggi_gelombang` varchar(20) NOT NULL,
  `suhu_udaramax` varchar(15) NOT NULL,
  `suhu_udaramin` varchar(15) NOT NULL,
  `pasang_surutmax` varchar(20) NOT NULL,
  `kond_alur_pelayaran` varchar(30) NOT NULL,
  `kond_sbnp` varchar(50) NOT NULL,
  `kond_peralatan` varchar(30) NOT NULL,
  `nota_tagihvts` int(11) NOT NULL,
  `master_cablevts` int(11) NOT NULL,
  `nota_tagihtr` int(11) NOT NULL,
  `master_cabletr` int(11) NOT NULL,
  `lain` varchar(50) NOT NULL,
  `petugas1` varchar(30) NOT NULL,
  `petugas2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_telkompel`
--

INSERT INTO `laporan_telkompel` (`id_laporan`, `nama_instansi`, `hari_mulai`, `hari_akhir`, `tanggal_mulai`, `tanggal_akhir`, `jam_awal`, `jam_akhir`, `kapal_masuk`, `kapal_keluar`, `kapal_melintas`, `kapal_labuh`, `kapal_sandar`, `cuaca`, `arah_angin`, `kecepatan_angin`, `jarak_pandang`, `tinggi_gelombang`, `suhu_udaramax`, `suhu_udaramin`, `pasang_surutmax`, `kond_alur_pelayaran`, `kond_sbnp`, `kond_peralatan`, `nota_tagihvts`, `master_cablevts`, `nota_tagihtr`, `master_cabletr`, `lain`, `petugas1`, `petugas2`) VALUES
(18, 'VESSEL TRAFFIC SERVICE MERAK', 'Rabu', 'Kamis', '2018-05-23', '2018-05-24', '11:38', '11:38', 12, 6, 5, 23, 22, 'Hujan Lebat', 'Utara', '10 Mach', '10 Km', '100 m', '99 Celsius', '9 Celcius', '69 m', 'aman', 'aman', 'aman', 4, 1929099, 0, 0, 'kurang ngopi', 'saipul', 'Abdilah'),
(19, 'STASIUN RADIO PANTAI CIREBON', 'Rabu', 'Kamis', '2018-10-31', '2018-11-01', '08:15', '08:34', 3, 5, 69, 13, 23, 'Cerah Berawan', 'Barat', '44 Mach', '1 Km', '1 m', '40 C', '20 C', '1 m', 'Tidak aman', 'aman', 'Tidak aman', 2, 100900, 0, 0, 'ada markas kecoa ', 'Ahmad', 'Budi'),
(20, 'STASIUN RADIO PANTAI CIREBON', 'Sabtu', 'Minggu', '2018-11-03', '2018-11-04', '17:30', '17:30', 12, 2, 5, 6, 2, 'Berawan', 'Barat', '10', '10', '1', '40', '30', '1', 'aman', 'aman', 'aman', 4, 0, 3, 100000, 'Kondisi lingkungan kerja aman', 'Nur Kayati', 'Yanto Tiyanto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_telkompel`
--
ALTER TABLE `laporan_telkompel`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_telkompel`
--
ALTER TABLE `laporan_telkompel`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
