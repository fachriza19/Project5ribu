-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 07:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `namasbnp` varchar(100) NOT NULL,
  `nomordsi` varchar(30) NOT NULL,
  `LS` varchar(30) NOT NULL,
  `BT` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `warna_bangunan` varchar(30) NOT NULL,
  `warna_cahaya` varchar(30) NOT NULL,
  `karakteristik_cahaya` varchar(30) NOT NULL,
  `periode_cahaya` varchar(30) NOT NULL,
  `tinggi_bangunan` varchar(30) NOT NULL,
  `elevasi` varchar(30) NOT NULL,
  `jarak_tampak` varchar(30) NOT NULL,
  `sistem_pelampungan` varchar(30) NOT NULL,
  `bahan_bangunan` varchar(30) NOT NULL,
  `bentuk_tanda_puncak` varchar(30) NOT NULL,
  `sumber_energi` varchar(30) NOT NULL,
  `radar_reflektor` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `thn_pemb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `namasbnp`, `nomordsi`, `LS`, `BT`, `latitude`, `longtitude`, `jenis`, `warna_bangunan`, `warna_cahaya`, `karakteristik_cahaya`, `periode_cahaya`, `tinggi_bangunan`, `elevasi`, `jarak_tampak`, `sistem_pelampungan`, `bahan_bangunan`, `bentuk_tanda_puncak`, `sumber_energi`, `radar_reflektor`, `status`, `thn_pemb`) VALUES
(22, 'PULAU TIGA', '2375', '05° 49’ 10” ', '105° 32’ 42” ', '-5.819444444444445', '105.545', 'Rambu Suar', 'M-H-M', 'Putih', 'FL.(2) W. 6 s   EB', 'FL.0.5 - Ecl.1.5  /  FL.0.5 - ', '15  Meter', '-', '13 Nm', 'Lateral Mark', 'Besi Baja', '-', '2375', 'Segitiga', 'Tetap', '1978');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
