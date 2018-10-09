-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2018 pada 12.31
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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(20) NOT NULL,
  `berita_judul` varchar(200) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(50) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(21, 'TIGA NEGARA PANTAI BEKERJASAMA DALAM PEMELIHARAAN SARANA BANTU NAVIGASI PELAYARAN DI SELAT MALAKA DAN SINGAPURA', '<p><a href=\"http://disnavtanjungpinang.id/wp-content/uploads/2018/07/Rambu-Suar-Jangkat-21.jpg\"><img alt=\"\" src=\"http://disnavtanjungpinang.id/wp-content/uploads/2018/07/Rambu-Suar-Jangkat-21.jpg\" style=\"height:1px; width:1px\" /></a><strong>BATAM</strong>, Tiga negara pantai yang tergabung dalam Tripartite Technical Expert Group (TTEG) bersama para pengguna jasa, stakeholder lainnya membentuk forum kerjasama Cooperative Mechanism (CM).</p>\r\n\r\n<p>Ketiga negara tersebut yakni Indonesia, Malaysia dan Singapura yang sama sama memiliki kepentingan di Selat Malaka dan Selat Singapura dalam mewujudkan keselamatan pelayaran&nbsp;dan perlindungan lingkungan maritim.</p>\r\n\r\n<p>Salah satunya kerjasamanya dalam pemeliharaan Sarana Bantu Navigasi Pelayaran (SBNP) melalui wadah Aids of Navigation Funds (ANF) Committee.</p>\r\n\r\n<p>Kepala Distrik Navigasi Kelas I Tanjungpinang, Raymond Sianturi mengatakan, ANF merupakan wadah bagi masyarakat pelayaran internasional untuk berpartisipasi mendukung pemeliharaan SBNP pada jalur pelayaran yang sangat padat dengan lalulintas pelayaran internasional.</p>\r\n\r\n<p>&ldquo;Pelaksanaan pemeliharaan didukung oleh tenaga ahli Malacca Straits Council (MSC) Jepang, yang juga ditunjuk oleh Komite ANF sebagai pengawas / supervisor teknis dalam pemeliharaan serta perbaikan SBNP dimaksud,&rdquo; jelas Raymond.</p>\r\n\r\n<p>Kerjasama tersebut berlangsung dari tanggal 16 Juli 2018 hingga 9 Agustus 2018 dengan menggunakan Kapal Negara Kenavigasian KN. Jadayat dari Distrik Navigasi Kelas I Tanjungpinang, yang mencakup 28 unit SBNP di wilayah kerja Distrik Navigasi Kelas I Tanjungpinang dan Distrik Navigasi Kelas I Dumai, yang terdiri dari 5 Menara Suar, 8 Rambu Suar, 6 Resilient Light Beacon (RLB) dan 9 Pelampung Suar yang kesemua itu merupakan SBNP yang sangat vital bagi lalulintas pelayaran internasional, regional maupun domestik.</p>\r\n\r\n<p>Sebagai anggota Dewan International Maritime Organization (IMO), Indonesia terus berperan aktif dalam menciptakan keselamatan dan keamanan pelayaran serta perlindungan lingkungan maritim terutama di jalur yang digunakan sebagai lalu lintas pelayaran Internasional.</p>\r\n\r\n<p>&ldquo;Tugas ini merupakan pembuktian kepada dunia internasional bahwa Indonesia sangat mementingkan keselamatan pelayaran dan perlindungan lingkungan maritim dan sekaligus menunjukkan komitmen dan itikad baik kita dalam melaksanakan kesepakatan kerjasama internasional,&rdquo; imbuhnya.</p>\r\n', '7a1a7e0d3ca5eb62ce4a4e28e08714c4.jpg', '2018-10-01 05:34:46'),
(22, 'Disnav', '<p>Bismillah</p>\r\n', '05e2a1939d7a82f8a906970657f82918.jpg', '2018-10-01 14:14:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
