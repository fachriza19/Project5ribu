-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 05:14 AM
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
  `nama` varchar(30) NOT NULL,
  `kelompok` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `luas_area` varchar(30) NOT NULL,
  `nomordsi` varchar(30) NOT NULL,
  `penanggung_jawab` varchar(30) NOT NULL,
  `jml_sdm` varchar(30) NOT NULL,
  `wktjagaopl` varchar(30) NOT NULL,
  `perangkat` varchar(30) NOT NULL,
  `lampu` varchar(30) NOT NULL,
  `solar_cell` varchar(30) NOT NULL,
  `battery` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `kelompok`, `latitude`, `longtitude`, `lokasi`, `luas_area`, `nomordsi`, `penanggung_jawab`, `jml_sdm`, `wktjagaopl`, `perangkat`, `lampu`, `solar_cell`, `battery`) VALUES
(1, 'tanjung priok', 'test', '-6.1194908', '106.8624483', 'Jakarta', '30m', '123', 'bpk', '5', '5', '5', 'lampu a', '3', 'batre a'),
(2, 'Tangerang', 'test', '-6.1194569', '101.8624483', 'Tangerang', '20m', '132', 'ibu', '2', '5', '2', 'lampu b ', '2', 'batre b'),
(3, 'test', 'Pelampung Suar', '-6.1194908', '101.9624483', 'Bekasi', '40', '123123', 'bb', '30', '12', '5', '5', '5', '5'),
(4, 'adssad', 'asdasd', '-6.3540185', '106.8176636', 'asdads', 'asdsa', 'saddsa', 'asdsa', 'asddsa', 'asdsda', 'sadsa', 'sadsda', 'sadsa', 'saddas'),
(5, 'asda', 'asdasd', '-65468456', '65423564', 'lkj', 'lkj', 'lkj', 'lkj', 'ljk', 'lj', 'lkj', 'l', 'kjlk', 'jlkklj');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
