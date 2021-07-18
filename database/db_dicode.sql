-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 09:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dicode`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `image` varchar(80) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `id_user`, `judul`, `konten`, `image`, `created`, `updated`) VALUES
(1, 1, 'Testing Update Berita', 'Halo from dicode', 'a2bdb2578fc3d1b03558214c9f7fd700.jpeg', '2021-06-27 14:44:00', '2021-07-11 14:11:27'),
(4, 1, 'Dicode Pertemuan 6', 'Dicode Pertemuan 6 Hari Minggu, 11 Juli 2021', '72d5080701f39e4b3da18267c08e7c86.jpg', '2021-07-11 14:13:14', '2021-07-11 14:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(80) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `id_user`, `judul`, `image`, `created`, `updated_at`) VALUES
(2, 1, 'Compro dicode', '4acd54f398a7da5fa541f49e77516a14.jpeg', '2021-07-04 14:05:54', '2021-07-11 11:52:04'),
(3, 1, 'Galeri 6', 'f014fff1fc474bd0c8317a60158356db.jpg', '2021-07-11 14:27:12', '2021-07-11 14:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(80) NOT NULL,
  `pesan` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `created`) VALUES
(1, 'Gagas Sangga Pratama', 'office@pratamatechsolution.co.id', 'Pesan Aplikasi', 'Bagaimana cara pesan aplikasi', '2021-07-11 14:56:11'),
(2, 'Jhon', 'jhon@gmail.com', 'Report Bug', 'Report your bug ', '2021-07-11 15:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `slug` varchar(32) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `id_user`, `judul`, `konten`, `slug`, `created`, `updated`) VALUES
(1, 1, 'Visi dan Misi', 'Visi dan Misi PT. XYZ TEKNOLOGI', 'visi-dan-misi', '2021-07-04 14:49:15', '2021-07-04 14:49:15'),
(2, 1, 'Struktur Organisasi', 'Contoh Struktur Organisasi PT. XYZ INDONESIA', 'struktur-organisasi', '2021-07-04 15:03:30', '2021-07-04 15:21:28'),
(4, 1, 'Tupoksi', 'Tugas Pokok dan Fungsi', 'tupoksi', '2021-07-11 14:34:42', '2021-07-11 14:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` varchar(80) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `nama`, `email`, `password`, `avatar`, `created`, `updated`) VALUES
(1, 'admin', 'Admin', 'admin@dicode.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2021-06-27 13:54:50', '2021-07-04 15:41:14'),
(2, 'anggie_dwi', 'Anggie Dwi Permana', 'anggiedwipermana@gmail.com', '01cfcd4f6b8770febfb40cb906715822', 'de6bebf1ac0891f81abf52601cc978f2', '2021-07-04 15:34:11', '2021-07-11 15:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
