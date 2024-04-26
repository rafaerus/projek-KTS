-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ide_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ID_artist` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `kontak` int(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `karya` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kontak` int(50) NOT NULL,
  `pesanan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ID_customer` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kontak`, `pesanan`, `email`, `ID_customer`, `username`, `password`, `role`) VALUES
(0, '', 'murata@gmail.com', 14, 'murata', 'yusuke_murata', 'artist'),
(0, '', 'murata', 15, 'murata', 'yusuke_murata', 'admin'),
(0, '', 'rafael.bonnie2018@gmail.com', 16, 'murata', 'bonnie2023', 'admin'),
(0, '', 'rafael.bonnie2018@gmail.com', 17, 'murata', 'bonnie2023', 'user'),
(0, '', 'adsrfdsfe@mail.com', 18, 'megoatssi', 'ankaramessi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `fan_art`
--

CREATE TABLE `fan_art` (
  `harga` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komisi`
--

CREATE TABLE `komisi` (
  `ID_customer` int(11) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `tanggal_pengerjaan` date DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `durasi_pengerjaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `jenis` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `ID_customer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ID_artist`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_customer`);

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD KEY `ID_customer` (`ID_customer`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD KEY `fk_ID_customer` (`ID_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ID_artist` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_customer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komisi`
--
ALTER TABLE `komisi`
  ADD CONSTRAINT `komisi_ibfk_1` FOREIGN KEY (`ID_customer`) REFERENCES `customer` (`ID_customer`);

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `fk_ID_customer` FOREIGN KEY (`ID_customer`) REFERENCES `customer` (`ID_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
