-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 07:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_pb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(100, '', 'dika', '12345', 'dika@gmail.com'),
(101, 'dika alfaro', 'dikaa', '$2y$10$lrlSBb6Sja9X/rbejkhpTucUuuSY2Kme7sD18mizZh9py5mindQe.', 'dede@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(25) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `judul_berita` varchar(25) NOT NULL,
  `isi_berita` text NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `judul_berita`, `isi_berita`, `id_users`, `id_kategori`, `image`) VALUES
(1132, '2017-01-03', 'MU Come Back !!!', 'Machester United kembali menoreh hasil manis kala menjamu tamunya ... pada pertemua ke 14 liga inggris kemarin, MU menang mudah atas tamunya dengan score 3-0, ini membuktikan bahwa MU telah kembali dari peristirahatannya, Roney Dan Kawan kawan siap membuktikan bahwa setan merah memang sang juara.', 1001, 5, ''),
(1133, '2017-01-04', 'Sidang Ahok Berlanjut', 'Sidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi\r\nSidang ahok berlanjut lagi', 1001, 5, ''),
(1135, '2017-01-14', 'Indonesia Menang', '<p>Indonesia Berhasil Menang Dari tamunya dalam pertandingan persahahabatan melawan belanda</p>\r\n', 1001, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`) VALUES
(1, 'POLITIK'),
(2, 'EKONOMI'),
(3, 'KESEHATAN'),
(4, 'OLAHRAGA'),
(5, 'SEJARAH'),
(6, 'AGAMA'),
(7, 'KULINER');

-- --------------------------------------------------------

--
-- Table structure for table `sub-kategori`
--

CREATE TABLE `sub-kategori` (
  `id_sub` int(11) NOT NULL,
  `judul_sub` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub-kategori`
--

INSERT INTO `sub-kategori` (`id_sub`, `judul_sub`) VALUES
(1, 'sepak_bola'),
(2, 'balap_motor'),
(3, 'balap_mobil'),
(4, 'bulu_tangkis'),
(5, 'beladiri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `username`, `password`, `email`, `image`) VALUES
(1001, 'dika', 'dika', '12345678', 'dikaArfisal@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `sub-kategori`
--
ALTER TABLE `sub-kategori`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1136;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub-kategori`
--
ALTER TABLE `sub-kategori`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
