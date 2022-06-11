-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 06:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hikal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `id` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `berat` varchar(128) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`id`, `jenis`, `berat`, `ukuran`, `waktu`) VALUES
(1, 'hibrida', '30', 'besar', '2022-06-06 02:20:43'),
(2, 'hibrida', '40', 'besar', '2022-06-06 02:20:43'),
(3, 'hibrida', '20', 'kecil', '2022-06-06 02:21:12'),
(4, 'hibrida', '25', 'kecil', '2022-06-06 02:21:12'),
(5, 'lokal', '30', 'besar', '2022-06-06 02:21:48'),
(6, 'lokal', '35', 'besar', '2022-06-06 02:23:14'),
(7, 'lokal', '20', 'kecil', '2022-06-06 02:22:14'),
(8, 'lokal', '26', 'kecil', '2022-06-06 02:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
