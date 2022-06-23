-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 07:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kursi`
--

CREATE TABLE `detail_kursi` (
  `id_kursi` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kursi`
--

INSERT INTO `detail_kursi` (`id_kursi`, `id_studio`, `status`) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 0),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 0),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(3, 6, 1),
(3, 7, 1),
(3, 8, 1),
(4, 1, 1),
(4, 2, 1),
(4, 3, 1),
(4, 4, 1),
(4, 5, 1),
(4, 6, 1),
(4, 7, 1),
(4, 8, 1),
(5, 1, 1),
(5, 2, 1),
(5, 3, 1),
(5, 4, 1),
(5, 5, 1),
(5, 6, 1),
(5, 7, 1),
(5, 8, 1),
(6, 1, 1),
(6, 2, 1),
(6, 3, 1),
(6, 4, 1),
(6, 5, 1),
(6, 6, 1),
(6, 7, 1),
(6, 8, 1),
(7, 1, 1),
(7, 2, 1),
(7, 3, 1),
(7, 4, 1),
(7, 5, 1),
(7, 6, 1),
(7, 7, 1),
(7, 8, 1),
(8, 1, 1),
(8, 2, 1),
(8, 3, 1),
(8, 4, 1),
(8, 5, 1),
(8, 6, 1),
(8, 7, 1),
(8, 8, 1),
(9, 1, 1),
(9, 2, 1),
(9, 3, 1),
(9, 4, 1),
(9, 5, 1),
(9, 6, 1),
(9, 7, 1),
(9, 8, 1),
(10, 1, 1),
(10, 2, 1),
(10, 3, 1),
(10, 4, 1),
(10, 5, 1),
(10, 6, 1),
(10, 7, 1),
(10, 8, 1),
(11, 1, 1),
(11, 2, 1),
(11, 3, 1),
(11, 4, 1),
(11, 5, 1),
(11, 6, 1),
(11, 7, 1),
(11, 8, 1),
(12, 1, 1),
(12, 2, 1),
(12, 3, 1),
(12, 4, 1),
(12, 5, 1),
(12, 6, 1),
(12, 7, 1),
(12, 8, 1),
(13, 1, 1),
(13, 2, 1),
(13, 3, 1),
(13, 4, 1),
(13, 5, 1),
(13, 6, 1),
(13, 7, 1),
(13, 8, 1),
(14, 1, 1),
(14, 2, 1),
(14, 3, 1),
(14, 4, 1),
(14, 5, 1),
(14, 6, 1),
(14, 7, 1),
(14, 8, 1),
(15, 1, 1),
(15, 2, 1),
(15, 3, 1),
(15, 4, 1),
(15, 5, 1),
(15, 6, 1),
(15, 7, 1),
(15, 8, 1),
(16, 1, 1),
(16, 2, 1),
(16, 3, 1),
(16, 4, 1),
(16, 5, 1),
(16, 6, 1),
(16, 7, 1),
(16, 8, 1),
(17, 1, 1),
(17, 2, 1),
(17, 3, 1),
(17, 4, 1),
(17, 5, 1),
(17, 6, 1),
(17, 7, 1),
(17, 8, 1),
(18, 1, 1),
(18, 2, 1),
(18, 3, 1),
(18, 4, 1),
(18, 5, 1),
(18, 6, 1),
(18, 7, 1),
(18, 8, 1),
(19, 1, 1),
(19, 2, 1),
(19, 3, 1),
(19, 4, 1),
(19, 5, 1),
(19, 6, 1),
(19, 7, 1),
(19, 8, 1),
(20, 1, 1),
(20, 2, 1),
(20, 3, 1),
(20, 4, 1),
(20, 5, 1),
(20, 6, 1),
(20, 7, 1),
(20, 8, 1),
(21, 1, 1),
(21, 2, 1),
(21, 3, 1),
(21, 4, 1),
(21, 5, 1),
(21, 6, 1),
(21, 7, 1),
(21, 8, 1),
(22, 1, 1),
(22, 2, 1),
(22, 3, 1),
(22, 4, 1),
(22, 5, 1),
(22, 6, 1),
(22, 7, 1),
(22, 8, 1),
(23, 1, 1),
(23, 2, 1),
(23, 3, 1),
(23, 4, 1),
(23, 5, 1),
(23, 6, 1),
(23, 7, 1),
(23, 8, 1),
(24, 1, 1),
(24, 2, 1),
(24, 3, 1),
(24, 4, 1),
(24, 5, 1),
(24, 6, 1),
(24, 7, 1),
(24, 8, 1),
(25, 1, 1),
(25, 2, 1),
(25, 3, 1),
(25, 4, 1),
(25, 5, 1),
(25, 6, 1),
(25, 7, 1),
(25, 8, 1),
(26, 1, 1),
(26, 2, 1),
(26, 3, 1),
(26, 4, 1),
(26, 5, 1),
(26, 6, 1),
(26, 7, 1),
(26, 8, 1),
(27, 1, 1),
(27, 2, 1),
(27, 3, 1),
(27, 4, 1),
(27, 5, 1),
(27, 6, 1),
(27, 7, 1),
(27, 8, 1),
(28, 1, 1),
(28, 2, 1),
(28, 3, 1),
(28, 4, 1),
(28, 5, 1),
(28, 6, 1),
(28, 7, 1),
(28, 8, 1),
(29, 1, 1),
(29, 2, 1),
(29, 3, 1),
(29, 4, 1),
(29, 5, 1),
(29, 6, 1),
(29, 7, 1),
(29, 8, 1),
(30, 1, 1),
(30, 2, 1),
(30, 3, 1),
(30, 4, 1),
(30, 5, 1),
(30, 6, 1),
(30, 7, 1),
(30, 8, 1),
(31, 1, 1),
(31, 2, 1),
(31, 3, 1),
(31, 4, 1),
(31, 5, 1),
(31, 6, 1),
(31, 7, 1),
(31, 8, 1),
(32, 1, 1),
(32, 2, 1),
(32, 3, 1),
(32, 4, 1),
(32, 5, 1),
(32, 6, 1),
(32, 7, 1),
(32, 8, 1),
(33, 1, 1),
(33, 2, 1),
(33, 3, 1),
(33, 4, 1),
(33, 5, 1),
(33, 6, 1),
(33, 7, 1),
(33, 8, 1),
(34, 1, 1),
(34, 2, 1),
(34, 3, 1),
(34, 4, 1),
(34, 5, 1),
(34, 6, 1),
(34, 7, 1),
(34, 8, 1),
(35, 1, 1),
(35, 2, 1),
(35, 3, 1),
(35, 4, 1),
(35, 5, 1),
(35, 6, 1),
(35, 7, 1),
(35, 8, 1),
(36, 1, 1),
(36, 2, 1),
(36, 3, 1),
(36, 4, 1),
(36, 5, 1),
(36, 6, 1),
(36, 7, 1),
(36, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tiket`
--

CREATE TABLE `detail_tiket` (
  `detail_id` int(11) NOT NULL,
  `id_kursi` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `no_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_tiket`
--

INSERT INTO `detail_tiket` (`detail_id`, `id_kursi`, `id_studio`, `no_tiket`) VALUES
(12, 1, 2, 30),
(13, 4, 2, 30),
(14, 1, 1, 31),
(15, 3, 1, 31),
(16, 2, 3, 32),
(17, 3, 3, 33),
(18, 2, 4, 34),
(19, 2, 4, 35),
(20, 4, 4, 36),
(21, 2, 4, 37),
(22, 4, 4, 37),
(23, 1, 1, 38),
(24, 3, 1, 38),
(25, 1, 1, 39),
(26, 3, 1, 40),
(27, 1, 2, 41),
(28, 4, 2, 42),
(29, 2, 4, 43),
(30, 4, 4, 44),
(31, 2, 3, 47),
(32, 2, 3, 48),
(33, 2, 3, 49),
(34, 3, 3, 50),
(35, 21, 1, 51),
(36, 1, 1, 52),
(37, 2, 1, 53),
(38, 1, 5, 54),
(39, 2, 5, 54),
(40, 1, 1, 55),
(41, 3, 1, 56),
(42, 4, 1, 57),
(43, 5, 1, 58),
(44, 6, 1, 59),
(45, 7, 1, 60),
(46, 8, 1, 61),
(47, 9, 1, 62),
(48, 10, 1, 63),
(49, 11, 1, 64),
(50, 1, 2, 65),
(51, 1, 2, 66),
(52, 3, 5, 67),
(53, 4, 5, 68),
(54, 12, 1, 69),
(55, 1, 3, 70),
(56, 2, 3, 70);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `harga` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `genre`, `nama_film`, `sinopsis`, `harga`) VALUES
(1, 'Action, Adventure, Horror', 'Spiderman Far from Home', 'Perjalanan Manusia Laba Laba Mencari Jati Diri yang jauh dari rumah', 35000),
(2, 'Action, Horror', 'The Doll', 'Seorang Anak Membeli Boneka Hantu', 45000),
(3, 'Action, Adventure, Horror', 'Spiderman Home Sweet Home', 'Perjalanan Manusia Laba Laba Mencari Jati Diri dan harus pulang ke asalnya', 35000),
(4, 'Action, Sci-fi, Adventure', 'Interstellar 3', 'Perjalanan menuju waktu kehancuran lubang hitam', 50000),
(5, 'Action, Sci-fi', 'Avatar 2', 'Perjuangan alien biru dalam melindungi planet mereka', 90000),
(6, 'Sci-fi, Adventure, Fantasy', 'Boboiboy Galaxy', 'Bocah melayu yang ingin menyelamatkan alam semesta ', 35000),
(7, 'Action, Sci-fi, Adventure, Fantasy', 'Guardian of Galaxy', 'Awal dari perjalanan penjaga galaxy demi mencapai kedamaian', 40000),
(8, 'Action, Adventure, Horror', 'Spiderman', 'Perjalanan Manusia Laba Laba Mencari Jati Diri', 35000),
(9, 'Action, Sci-fi, Adventure', 'Interstellar 2', 'Perjalanan menuju lubang hitam terulang kembali', 50000),
(10, 'Adventure, Horror', 'Dr Strange', 'Seorang penyihir hebat yang menyelamatkan dunia', 40000),
(11, 'Horor', 'The Ring', 'Setan bales dendam', 30000),
(12, 'Komedi, Drama, Keluarga', 'Upin&Ipin The Movie', 'Petualangan dua anak kembar di kampung durian runtuh', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `nama_kursi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nama_kursi`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10'),
(11, 'B1'),
(12, 'B2'),
(13, 'B3'),
(14, 'B4'),
(15, 'B5'),
(16, 'B6'),
(17, 'B7'),
(18, 'B8'),
(19, 'B9'),
(20, 'B10'),
(21, 'B11'),
(22, 'B12'),
(23, 'C1'),
(24, 'C2'),
(25, 'C3'),
(26, 'C4'),
(27, 'C5'),
(28, 'C6'),
(29, 'C7'),
(30, 'C8'),
(31, 'C9'),
(32, 'C10'),
(33, 'C11'),
(34, 'C12'),
(35, 'C13'),
(36, 'C14');

-- --------------------------------------------------------

--
-- Table structure for table `penayangan`
--

CREATE TABLE `penayangan` (
  `id_penayangan` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `waktu_tayang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penayangan`
--

INSERT INTO `penayangan` (`id_penayangan`, `id_studio`, `id_film`, `waktu_tayang`) VALUES
(1, 5, 3, '2022-06-04 06:17:37'),
(2, 8, 6, '2021-12-06 02:27:46'),
(3, 2, 4, '2022-06-04 06:17:38'),
(4, 3, 1, '2022-06-04 06:17:38'),
(5, 7, 1, '2022-06-04 06:18:38'),
(6, 1, 1, '2022-06-17 15:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `tipe_studio` varchar(30) NOT NULL,
  `no_studio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `tipe_studio`, `no_studio`) VALUES
(1, 'XXI-DELUX', 1),
(2, 'XXI-DOLBY ATMOS', 2),
(3, 'XXI-IMAX', 3),
(4, 'XXI-PREMIERE', 4),
(5, 'CINEMA3D', 5),
(6, 'Cinepolis', 6),
(7, 'CGV-BGJ', 7),
(8, 'CINEMA4K', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `no_tiket` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`no_tiket`, `no_transaksi`, `id_film`) VALUES
(28, 20, 1),
(29, 21, 1),
(30, 22, 1),
(31, 23, 1),
(32, 24, 1),
(33, 25, 1),
(34, 26, 1),
(35, 27, 1),
(36, 28, 1),
(37, 29, 1),
(38, 30, 1),
(39, 31, 1),
(40, 32, 1),
(41, 33, 1),
(42, 34, 1),
(43, 35, 1),
(44, 36, 1),
(45, 37, 3),
(46, 38, 1),
(47, 39, 3),
(48, 40, 3),
(49, 41, 3),
(50, 42, 3),
(51, 43, 1),
(52, 44, 1),
(53, 45, 1),
(54, 46, 3),
(55, 47, 1),
(56, 48, 1),
(57, 49, 3),
(58, 50, 3),
(59, 51, 3),
(60, 52, 4),
(61, 53, 4),
(62, 54, 1),
(63, 55, 1),
(64, 56, 1),
(65, 57, 4),
(66, 58, 4),
(67, 59, 3),
(68, 60, 3),
(69, 61, 1),
(70, 62, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu_transaksi` datetime NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_user`, `waktu_transaksi`, `quantity`) VALUES
(1, 10, '2021-11-05 22:58:43', '1'),
(2, 8, '2021-10-31 20:24:06', '4'),
(3, 20, '2022-05-15 03:26:06', '3'),
(4, 15, '2021-07-17 22:51:13', '2'),
(5, 14, '2021-10-10 04:37:52', '5'),
(6, 19, '2022-06-08 08:55:41', '2'),
(7, 8, '2021-09-27 00:24:59', '5'),
(8, 12, '2021-06-29 20:15:17', '2'),
(9, 2, '2022-01-30 17:56:46', '2'),
(10, 21, '2021-09-17 01:54:40', '5'),
(11, 17, '2021-10-26 11:14:29', '1'),
(12, 17, '2022-03-13 10:21:54', '5'),
(13, 13, '2021-11-20 07:42:47', '2'),
(14, 16, '2022-05-10 04:16:20', '4'),
(15, 11, '2022-02-13 19:44:32', '5'),
(16, 10, '2021-09-18 22:15:29', '3'),
(17, 15, '2022-04-05 13:12:48', '4'),
(18, 18, '2022-01-20 05:11:57', '1'),
(19, 17, '2022-05-07 11:37:03', '2'),
(20, 1, '2022-06-04 15:14:32', '2'),
(21, 2, '2022-06-04 15:15:01', '1'),
(22, 7, '2022-06-05 23:13:34', '2'),
(23, 8, '2022-06-05 23:19:12', '2'),
(24, 9, '2022-06-05 23:34:49', '1'),
(25, 9, '2022-06-05 23:35:55', '1'),
(26, 10, '2022-06-05 23:38:30', '1'),
(27, 10, '2022-06-05 23:39:22', '1'),
(28, 11, '2022-06-05 23:39:49', '1'),
(29, 2, '2022-06-06 12:01:05', '2'),
(30, 14, '2022-06-06 15:15:47', '2'),
(31, 6, '2022-06-07 08:08:14', '1'),
(32, 16, '2022-06-07 08:12:34', '1'),
(33, 17, '2022-06-07 11:22:18', '1'),
(34, 18, '2022-06-07 11:53:31', '1'),
(35, 19, '2022-06-08 10:20:37', '1'),
(36, 7, '2022-06-10 16:26:15', '1'),
(37, 6, '2022-06-11 14:01:43', '0'),
(38, 16, '2022-06-11 14:02:16', '0'),
(39, 6, '2022-06-11 15:28:20', '1'),
(40, 6, '2022-06-11 15:28:35', '1'),
(41, 6, '2022-06-11 15:29:45', '1'),
(42, 6, '2022-06-11 15:30:20', '1'),
(43, 21, '2022-06-20 20:25:42', '1'),
(44, 22, '2022-06-21 14:54:57', '1'),
(45, 4, '2022-06-21 15:06:38', '1'),
(46, 20, '2022-06-21 20:04:08', '2'),
(47, 20, '2022-06-21 20:13:56', '1'),
(48, 3, '2022-06-21 20:22:07', '1'),
(49, 23, '2022-06-21 20:33:00', '1'),
(50, 23, '2022-06-21 20:47:37', '1'),
(51, 23, '2022-06-21 20:48:16', '1'),
(52, 23, '2022-06-21 20:52:16', '1'),
(53, 23, '2022-06-21 20:53:26', '1'),
(54, 4, '2022-06-21 20:55:01', '1'),
(55, 23, '2022-06-21 20:59:20', '1'),
(56, 23, '2022-06-21 21:00:17', '1'),
(57, 23, '2022-06-21 21:00:47', '1'),
(58, 23, '2022-06-21 21:02:46', '1'),
(59, 23, '2022-06-21 21:04:43', '1'),
(60, 23, '2022-06-21 21:05:47', '1'),
(61, 23, '2022-06-21 21:11:36', '1'),
(62, 1, '2022-06-23 00:07:08', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`) VALUES
(1, 'Sando'),
(2, 'Eko'),
(3, 'Bagus'),
(4, 'Eka'),
(5, 'Lisa'),
(6, 'Test'),
(7, 'raihan'),
(8, 'Bahru'),
(9, 'Paidi'),
(10, 'Suminah'),
(11, 'Sodikin'),
(12, 'Dodit'),
(13, 'MASKUR'),
(14, 'JOKO'),
(15, 'ALIN'),
(16, 'RODI'),
(17, 'Afiandy'),
(18, 'aidit'),
(19, 'Raihanm'),
(20, 'Danu'),
(21, 'Deddy'),
(22, 'adit'),
(23, 'Doni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kursi`
--
ALTER TABLE `detail_kursi`
  ADD KEY `id_kursi` (`id_kursi`),
  ADD KEY `id_studio` (`id_studio`);

--
-- Indexes for table `detail_tiket`
--
ALTER TABLE `detail_tiket`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `id_kursi` (`id_kursi`),
  ADD KEY `id_studio` (`id_studio`),
  ADD KEY `no_tiket` (`no_tiket`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `penayangan`
--
ALTER TABLE `penayangan`
  ADD PRIMARY KEY (`id_penayangan`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_studio` (`id_studio`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`no_tiket`),
  ADD KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_tiket`
--
ALTER TABLE `detail_tiket`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `penayangan`
--
ALTER TABLE `penayangan`
  MODIFY `id_penayangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kursi`
--
ALTER TABLE `detail_kursi`
  ADD CONSTRAINT `detail_kursi_ibfk_1` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`),
  ADD CONSTRAINT `detail_kursi_ibfk_2` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `detail_tiket`
--
ALTER TABLE `detail_tiket`
  ADD CONSTRAINT `detail_tiket_ibfk_1` FOREIGN KEY (`id_kursi`) REFERENCES `kursi` (`id_kursi`),
  ADD CONSTRAINT `detail_tiket_ibfk_2` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`),
  ADD CONSTRAINT `detail_tiket_ibfk_3` FOREIGN KEY (`no_tiket`) REFERENCES `tiket` (`no_tiket`);

--
-- Constraints for table `penayangan`
--
ALTER TABLE `penayangan`
  ADD CONSTRAINT `penayangan_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `penayangan_ibfk_2` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id_studio`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`),
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
