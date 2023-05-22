-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `jeniskelamin` varchar(1) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `alamat`, `telp`, `jurusan`, `jeniskelamin`, `tgllahir`) VALUES
(39, 'Ni Luh Novi', '2201010345', 'Denpasar', NULL, 'TI KAB', NULL, NULL),
(40, 'Tay tawan', '2201010345', 'Jl taman jimbaran', NULL, 'TI KAB', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
