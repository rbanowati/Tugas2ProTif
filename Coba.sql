-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 06:02 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coba_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_1`
--

CREATE TABLE IF NOT EXISTS `tabel_1` (
  `nama` varchar(100) NOT NULL,
  `harga` bigint(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  PRIMARY KEY (`Judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_1`
--

INSERT INTO `tabel_1` (`Judul`, `Harga`, `Asal Komik`) VALUES
('Detective Conan', 21500, 'Jepang'),
('Spiderman', 35000, 'Amerika');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
