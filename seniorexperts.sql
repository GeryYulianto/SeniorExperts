-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2024 at 06:18 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorexperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

DROP TABLE IF EXISTS `connection`;
CREATE TABLE IF NOT EXISTS `connection` (
  `username_experts` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `bidang_perusahaan` varchar(100) DEFAULT NULL,
  KEY `username_experts` (`username_experts`),
  KEY `nama_perusahaan` (`nama_perusahaan`),
  KEY `bidang_perusahaan` (`bidang_perusahaan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

DROP TABLE IF EXISTS `experts`;
CREATE TABLE IF NOT EXISTS `experts` (
  `username_experts` varchar(100) NOT NULL,
  `nama_experts` varchar(255) DEFAULT NULL,
  `alamat_experts` varchar(255) DEFAULT NULL,
  `bidang_experts` varchar(100) DEFAULT NULL,
  `CV_experts` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username_experts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`username_experts`, `nama_experts`, `alamat_experts`, `bidang_experts`, `CV_experts`, `password`) VALUES
('ger', 'Gery Yulianto', 'sido', 'finance', '../experts_cv/Gery Yulianto CV.pdf', '81dc9bdb52d04dc20036dbd8313ed055'),
('1', '1', '1', 'software', '../experts_cv/Gery Yulianto CV.pdf', 'c4ca4238a0b923820dcc509a6f75849b'),
('2', '1', '1', 'software', '../experts_cv/2.pdf', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `loker_perusahaan`
--

DROP TABLE IF EXISTS `loker_perusahaan`;
CREATE TABLE IF NOT EXISTS `loker_perusahaan` (
  `nama_perusahaan` varchar(100) NOT NULL,
  `bidang_perusahaan` varchar(100) NOT NULL,
  `fee` int DEFAULT NULL,
  `Jenis` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nama_perusahaan`,`bidang_perusahaan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

DROP TABLE IF EXISTS `perusahaan`;
CREATE TABLE IF NOT EXISTS `perusahaan` (
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nama_perusahaan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
