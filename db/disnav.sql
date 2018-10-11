-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 06:30 PM
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
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(20) NOT NULL,
  `berita_judul` varchar(200) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(50) DEFAULT NULL,
  `berita_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(29, 'DIRJEN HUBLA RESMIKAN LOMBA FUTSAL SAMBUT HARHUBNAS TAHUN 2018', '<p>Dirjen Perhubungan Laut Kementrian Perhubungan R. Agus H Purnomo Meresmikan pembukaan lomba futsal dalam rangka menyambut Hari Perhubungan Nasional (HARHUBNAS) di Jakarta, Rabu 12 September 2018</p>\r\n\r\n<p>Peringatan Hari Perhubungan Nasional menurut Agus, hendaknya dimaknai sebagai suatu momentum yang tepat bagi kita insan perhubungan, untuk meresapi kembali apa saja yang telah dilakukan dan kontribusi apa yang sudah di sumbangkan untuk memajukan sektor transportasi di Indonesia.&nbsp;</p>\r\n\r\n<p>&quot;Tema HARHUBNAS 2018 guyub rukun untuk mewujudkan konektifitas dan keselamatan transportasi yang lebih baik, diharapkan dapat mengingatkan dan memicu kita untuk dapat meningkatkan konsolidasi, kerja sama, dan sinergitas,&quot; ungkapnya.&nbsp;</p>\r\n\r\n<p>Namun bukan hanya dengan instansi atau kementiran lain, secara internal antara kita insan perhubungan yang tersebar di seluruh penjuru nusantara juga harus dapat dilakukan. M</p>\r\n\r\n<p>&quot;Melalui olahraga, kita dapat mempelajari nilai nilai kedisiplinan, kerja keras dan kerja sama tim, sportifitas serta profesionalitas yang dapat kita terapkan juga pada kehidupan sehari hari, terutama dalam menjalani tugas keseharian kita sebagai Aparatur Sipil Negara,&quot; atas paparan dia.&nbsp;</p>\r\n\r\n<p>Semangat guyub rukun dalam mewujudkan konektifitas dan penyelenggaraan transportasi yang selamat, aman dan nyaman, diharapkan dapat tercipta dan terus terjaga.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sumber berita : Humas Laut</strong></p>\r\n', 'fe32b73141389a6985f5cd2a18763039.JPG', '2018-10-11 09:04:15'),
(30, 'HARI MENARA SUAR 2018', '<p>Anyer (22/9/2018) - Kantor Distrik Navigasi Kelas I Tanjung Priok menggelar upacara dan mengibarkan bendera merah putih dalam rangka memperingati hari Menara Suar Nasional tahun 2018 dipimpin langsung oleh kepala Distrik Navigasi Kelas I Tanjung Priok Bapak Ir. M. Ali Malawat,&nbsp;tanggal 22 September 2018. Adapun tema yang diangkat tahun ini adalah Keandalan Menara Suar sebagai Pintu Gerbang Keselamatan Pelayaran.&nbsp;</p>\r\n\r\n<p>Kepala Distrik Navigasi Kelas I Tanjung Priok&nbsp;mengatakan bahwa Menara Suar merupakan salah satu Sarana Bantu Navigasi Pelayaran (SBNP) yang berperan penting dalam mendukung keselamatan pelayaran.</p>\r\n\r\n<p>&quot;Sebagai bentuk terima kasih terhadap peran Menara Suar dan Petugas Menara Suar tersebut, Pemerintah telah menetapkan Hari Menara Suar yang diperingati setiap tanggal 22 September bersamaan dengan perayaan Hari Menara Suar Internasional yang juga diikuti oleh beberapa Negara lainnya seperti Jepang, Australia, serta sejumlah Negara di Eropa dan Asia, termasuk salah satunya Indonesia.&quot;&nbsp;</p>\r\n\r\n<p>Guna menjamin berfungsinya Menara Suar tersebut, Direktorat Jenderal Perhubungan Laut dalam hal ini Distrik Navigasi Kelas I Tanjung Priok menugaskan para petugas Menara Suar yang terdiri dari Penjaga Menara Suar dan Teknisi Menara Suar yang dalam pelaksanaan tugasnya ditunjang oleh armada Kapal Negara Kenavigasian yang melayani kegiatan pemeliharaan SBNP serta gilir tugas dan pengiriman kebutuhan operasional dan logistik petugas hingga ke pulau-pulau terpencil dan terluar yang sulit dijangkau.</p>\r\n\r\n<p>Menara Suar sebagai SBNP merupakan salah satu komponen dalam penyelenggaraan kenavigasian untuk mendukung keamanan dan keselamatan pelayaran, perlindungan lingkungan maritim termasuk sebagai salah satu alat untuk memperkuat batas wilayah kedaulatan Negara Kesatuan Republik Indonesia.</p>\r\n\r\n<p>&ldquo;Melalui Peringatan Hari Menara Suar ini, diharapkan dapat meningkatkan peran serta masyarakat untuk mensosialisasikan keberadaan dan manfaat SBNP, meningkatkan koordinasi dengan pemerintah daerah, mitra kerja, dan instansi terkait, serta memberi apresiasi dan mendorong semangat Petugas Menara Suar.&rdquo;&nbsp;</p>\r\n\r\n<p>&quot;Selamat Hari Menara Suar Tahun 2018. Berikan yang terbaik untuk penegakan keselamatan pelayaran di Indonesia salah satunya dengan meningkatkan keandalan Menara Suar sebagai pintu gerbang keselamatan pelayaran,&quot; tutup Ali Malawat</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber Berita: Humas Disnav Tanjung Priok&nbsp;</p>\r\n', '53d22a273feb680550244b9a565f987e.JPG', '2018-10-11 09:18:12');

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
(23, 'TG. PRIOK No.2', '1747.6', '06° 02’ 48,00”  LS', '106° 53’ 12,00”  BT', '-6.046666666666667', '106.88666666666667', 'Pelampung Suar', 'Merah', 'Merah', 'FL. R. 5 s    EB', 'FL.1.0 - Ecl. 4.0', '3 Meter', '-', '4 Nm', 'Lateral Mark', 'Baja', 'Bola Merah', '1747.6', '-\"\"\"\"', 'Tidak Tetap', '2015 / -'),
(24, 'P. MAITEM', '2378', '05° 35’ 56,0”   LS', '105° 15’ 04,30”   BT', '-5.598888888888888', '105.25119444444445', 'Menara Suar', 'Putih', 'Putih', 'FL. W. 8 s     EB', '', 'FL.0.4 - Ecl.7.6   ', '40', '18.1 Nm', '-', 'Baja', '-', 'Generator Elektrik', '-', 'Tetap', '1997 / 2007'),
(25, 'PULAU TIGA', '2375', '05° 49’ 10”  LS', '105° 32’ 42”  BT', '-5.819444444444445', '105.545', 'Rambu Suar', 'M-H-M', 'Putih', 'FL.(2) W. 6 s EB', 'FL.0.5 - Ecl.1.5 / FL.0.5 -', ' 15 Meter', '-', '13 Nm', 'Lateral Mark', 'Besi Baja', '-', '2375', 'Segitiga', 'Tetap', '1978');

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
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
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`laporan_id`, `laporan_nama`, `laporan_instansi`, `laporan_inti`, `laporan_koordinat`, `laporan_keterangan`, `laporan_tanggal`) VALUES
(1, 'test', 'test', 'Menara suar', '123456789', 'test', '2018-10-04 02:34:41');

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
  `nota_tagih` int(11) NOT NULL,
  `master_cable` int(11) NOT NULL,
  `lain` varchar(50) NOT NULL,
  `petugas1` varchar(30) NOT NULL,
  `petugas2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_telkompel`
--

INSERT INTO `laporan_telkompel` (`id_laporan`, `nama_instansi`, `hari_mulai`, `hari_akhir`, `tanggal_mulai`, `tanggal_akhir`, `jam_awal`, `jam_akhir`, `kapal_masuk`, `kapal_keluar`, `kapal_melintas`, `kapal_labuh`, `kapal_sandar`, `cuaca`, `arah_angin`, `kecepatan_angin`, `jarak_pandang`, `tinggi_gelombang`, `suhu_udaramax`, `suhu_udaramin`, `pasang_surutmax`, `kond_alur_pelayaran`, `kond_sbnp`, `kond_peralatan`, `nota_tagih`, `master_cable`, `lain`, `petugas1`, `petugas2`) VALUES
(1, 'STASIUN RADIO PANTAI CIREBON', '', '', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(2, 'STASIUN RADIO PANTAI CIREBON', '', '', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(3, 'VESSEL TRAFFIC SERVICE MERAK', 'senin', 'selasa', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(4, 'STASIUN RADIO PANTAI CIREBON', 'selasa', 'rabu', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(5, 'VESSEL TRAFFIC SERVICE MERAK', 'selasa', 'rabu', '2018-10-07', '2018-10-07', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(6, 'STASIUN RADIO PANTAI CIREBON', 'senin', 'selasa', '2018-10-07', '2018-10-07', '8.00', '8.00', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(7, 'STASIUN RADIO PANTAI CIREBON', '', '', '0000-00-00', '0000-00-00', '08:00', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(8, 'STASIUN RADIO PANTAI CIREBON', 'rabu', 'kamis', '2018-10-10', '2018-10-11', '08:00', '08:00', 3, 5, 6, 5, 7, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', ''),
(9, 'VESSEL TRAFFIC SERVICE MERAK', 'kamis', 'jumat', '2018-10-07', '2018-10-08', '08:00', '08:00', 1, 2, 3, 4, 5, 'Cerah ', 'Timur', '10 Mach', '10 Km', '100 m', '99 Celsius', '9 Celcius', '', '', '', '', 0, 0, '', '', ''),
(10, 'STASIUN RADIO PANTAI CIREBON', '', '', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '-99 Celcius', '', '', '', '', 0, 0, '', '', ''),
(11, 'VESSEL TRAFFIC SERVICE MERAK', 'jumat', 'sabtu', '2018-10-07', '2018-10-08', '08:00', '08:00', 1, 2, 3, 4, 5, 'Cerah ', 'Timur', '10 Mach', '10 Km', '100 m', '99 Celsius', '-99 Celcius', '69 m', 'aman', 'aman', 'aman', 4, 1929099, 'kurang ngopi', 'saipul', 'burhan');

-- --------------------------------------------------------

--
-- Table structure for table `mapkapal`
--

CREATE TABLE `mapkapal` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapkapal`
--

INSERT INTO `mapkapal` (`id`, `nama`, `jenis`, `latitude`, `longtitude`) VALUES
(1, 'KN EDAM', 'Kapal Induk Perambuan/1(Satu)', '-6.118846', '106.864825');

-- --------------------------------------------------------

--
-- Table structure for table `maptelkompel`
--

CREATE TABLE `maptelkompel` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maptelkompel`
--

INSERT INTO `maptelkompel` (`id`, `nama`, `jenis`, `latitude`, `longtitude`) VALUES
(1, 'Telkomel Tanjung Priok', 'SROP', '-6.119123', '106.862808');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indexes for table `laporan_telkompel`
--
ALTER TABLE `laporan_telkompel`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `mapkapal`
--
ALTER TABLE `mapkapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maptelkompel`
--
ALTER TABLE `maptelkompel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `laporan_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan_telkompel`
--
ALTER TABLE `laporan_telkompel`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mapkapal`
--
ALTER TABLE `mapkapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maptelkompel`
--
ALTER TABLE `maptelkompel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
