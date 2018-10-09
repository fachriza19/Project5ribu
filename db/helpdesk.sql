-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2018 pada 12.32
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 7.2.4

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
-- Struktur dari tabel `helpdesk`
--

CREATE TABLE `helpdesk` (
  `laporan_id` int(20) NOT NULL,
  `laporan_nama` varchar(50) DEFAULT NULL,
  `laporan_instansi` varchar(50) DEFAULT NULL,
  `laporan_inti` varchar(30) DEFAULT NULL,
  `laporan_koordinat` varchar(100) DEFAULT NULL,
  `laporan_keterangan` varchar(200) DEFAULT NULL,
  `laporan_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`laporan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `laporan_id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
