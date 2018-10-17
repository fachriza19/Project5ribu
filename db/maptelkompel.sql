-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 06:32 AM
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
-- Table structure for table `maptelkompel`
--

CREATE TABLE `maptelkompel` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maptelkompel`
--

INSERT INTO `maptelkompel` (`id`, `nama`, `jenis`, `latitude`, `longtitude`) VALUES
(1, 'Stasiun Radio Pantai Kelas I Jakarta', 'SROP', '-6.119123', '106.862808'),
(2, 'Stasiun Radio Pantai Kelas III/A Cirebon', 'SROP/SRS', '-6.716666666666667', '108.57222222222222'),
(3, 'Stasiun Radio Pantai Kelas III/A Cigading', 'SROP', '-6.500277777777778', '105.95055555555555'),
(4, 'Stasiun Radio Pantai Kelas III/A Panjang', 'SROP', '-5.455', '105.30944444444444'),
(5, 'Stasiun Radio Pantai Kelas III/A Bengkulu', 'SROP', '-3.8998442', '102.3070114'),
(6, 'Vessel Traffic Service (VTS) Pohon Asem Tanjung Priok', 'VTS', '-6.09658611111', '106.882138889'),
(7, 'Vessel Traffic Service (VTS) Merak, Selat Sunda', 'VTS', '-5.93354722222', '105.999658333'),
(8, 'Vessel Traffic Service (VTS) Panjang', 'VTS', '-5.455', '105.30944444444444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maptelkompel`
--
ALTER TABLE `maptelkompel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maptelkompel`
--
ALTER TABLE `maptelkompel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
