-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelantrian`
--

CREATE TABLE `tabelantrian` (
  `idantrian` int(11) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `waktu` varchar(55) NOT NULL,
  `loket` int(12) NOT NULL,
  `huruf` varchar(12) NOT NULL,
  `nomor` int(11) NOT NULL,
  `animasi` varchar(55) NOT NULL,
  `panggil` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelantrian`
--

INSERT INTO `tabelantrian` (`idantrian`, `tanggal`, `waktu`, `loket`, `huruf`, `nomor`, `animasi`, `panggil`) VALUES
(133, '24 Dec 2022', '16:50', 1, 'B', 1, '', 'sudah'),
(134, '24 Dec 2022', '16:54', 1, 'A', 2, '', 'sudah'),
(135, '24 Dec 2022', '16:55', 1, 'A', 3, '', 'sudah'),
(136, '24 Dec 2022', '16:55', 1, 'A', 4, '', 'sudah'),
(137, '24 Dec 2022', '16:55', 1, 'B', 5, '', 'sudah'),
(138, '24 Dec 2022', '16:57', 1, 'B', 6, '', 'sudah'),
(139, '24 Dec 2022', '16:58', 1, 'A', 7, '', 'sudah'),
(140, '24 Dec 2022', '16:59', 1, 'A', 8, '', 'sudah'),
(141, '24 Dec 2022', '16:59', 1, 'B', 9, '', 'sudah'),
(142, '24 Dec 2022', '17:00', 1, 'A', 10, '', 'sudah'),
(143, '24 Dec 2022', '17:04', 1, 'B', 11, '', 'sudah'),
(144, '24 Dec 2022', '17:18', 1, 'A', 12, '', 'sudah'),
(145, '24 Dec 2022', '17:19', 1, 'A', 13, '', 'sudah'),
(146, '24 Dec 2022', '17:21', 1, 'B', 14, '', 'sudah'),
(147, '24 Dec 2022', '17:22', 1, 'B', 15, '', 'sudah'),
(148, '24 Dec 2022', '17:23', 1, 'A', 16, '', 'sudah'),
(149, '24 Dec 2022', '17:25', 1, 'B', 17, '', 'sudah'),
(150, '24 Dec 2022', '17:26', 1, 'B', 18, '', 'sudah'),
(151, '24 Dec 2022', '17:27', 1, 'B', 19, '', 'sudah'),
(152, '24 Dec 2022', '17:27', 1, 'A', 20, '', 'sudah'),
(153, '24 Dec 2022', '17:28', 1, 'A', 21, '', 'sudah'),
(154, '24 Dec 2022', '17:35', 1, 'B', 22, '', 'sudah'),
(155, '24 Dec 2022', '17:51', 1, 'B', 23, '', 'sudah'),
(156, '24 Dec 2022', '17:51', 1, 'A', 24, 'sudah', 'sudah'),
(157, '24 Dec 2022', '17:55', 1, 'A', 25, 'sudah', 'sudah'),
(158, '24 Dec 2022', '18:10', 1, 'A', 26, 'sudah', 'sudah'),
(159, '24 Dec 2022', '18:10', 2, 'B', 27, 'sudah', 'sudah'),
(160, '24 Dec 2022', '18:19', 2, 'B', 28, 'sudah', 'sudah'),
(161, '24 Dec 2022', '18:20', 1, 'A', 29, 'sudah', 'sudah'),
(162, '24 Dec 2022', '18:20', 2, 'B', 30, 'sudah', 'sudah'),
(163, '24 Dec 2022', '18:20', 1, 'A', 31, 'sudah', 'sudah'),
(164, '24 Dec 2022', '18:20', 2, 'B', 32, 'sudah', 'sudah'),
(165, '24 Dec 2022', '19:36', 1, 'A', 33, 'sudah', 'sudah'),
(166, '24 Dec 2022', '20:12', 2, 'B', 34, 'sudah', 'sudah'),
(167, '25 Dec 2022', '05:19', 1, 'A', 35, 'sudah', 'sudah'),
(168, '25 Dec 2022', '05:19', 2, 'B', 36, 'sudah', 'sudah'),
(169, '25 Dec 2022', '05:21', 1, 'A', 37, 'sudah', 'sudah'),
(170, '25 Dec 2022', '05:21', 2, 'B', 38, 'sudah', 'sudah'),
(171, '25 Dec 2022', '14:40', 1, 'A', 39, 'sudah', 'sudah'),
(172, '26 Dec 2022', '12:32', 2, 'B', 40, 'sudah', 'sudah'),
(173, '26 Dec 2022', '12:39', 1, 'A', 41, 'sudah', 'sudah'),
(174, '26 Dec 2022', '12:40', 1, 'A', 42, 'sudah', 'sudah'),
(175, '26 Dec 2022', '12:42', 1, 'A', 43, 'sudah', 'sudah'),
(176, '26 Dec 2022', '12:43', 2, 'B', 44, 'sudah', 'sudah'),
(177, '26 Dec 2022', '12:53', 1, 'A', 45, 'sudah', 'sudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelantrian`
--
ALTER TABLE `tabelantrian`
  ADD PRIMARY KEY (`idantrian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelantrian`
--
ALTER TABLE `tabelantrian`
  MODIFY `idantrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
