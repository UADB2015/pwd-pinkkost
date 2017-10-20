-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 08:21 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username_admin` varchar(15) NOT NULL,
  `password_admin` varchar(20) NOT NULL,
  `no_tlp_admin` varchar(15) NOT NULL,
  `level_admin` enum('su','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `no_tlp_admin`, `level_admin`) VALUES
('123405', 'super', 'super', 'super', '081578532300', 'su'),
('1234502', 'user', 'user', 'user', '081578532300', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kost_tbl`
--

CREATE TABLE `kost_tbl` (
  `id_kos` varchar(10) NOT NULL,
  `nama_kos` varchar(30) NOT NULL,
  `latittud` float NOT NULL,
  `longitud` float NOT NULL,
  `id_kos_fasilitas` varchar(10) NOT NULL,
  `id_kos_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kost_tbl`
--
ALTER TABLE `kost_tbl`
  ADD PRIMARY KEY (`id_kos`),
  ADD KEY `id_kos_admin` (`id_kos_admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kost_tbl`
--
ALTER TABLE `kost_tbl`
  ADD CONSTRAINT `kost_tbl_ibfk_1` FOREIGN KEY (`id_kos_admin`) REFERENCES `admin_tbl` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
