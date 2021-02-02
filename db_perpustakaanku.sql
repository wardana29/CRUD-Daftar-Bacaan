-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 08:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaanku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bacaanku`
--

CREATE TABLE `bacaanku` (
  `kode_buku` char(9) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `link_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bacaanku`
--

INSERT INTO `bacaanku` (`kode_buku`, `judul_buku`, `nama_penulis`, `link_buku`) VALUES
('123e', 'apa saja', 'ira', 'xxxxxxxx123'),
('ds01', 'Desain Grafis', 'Mihra Wardana', 'https://drive.google.com/file/d/1uQTRId8KU2FKD4ML9NPoCV629loeQlpZ/view?usp=drivesdk'),
('pw01', 'Pemrograman Web ', 'Mihra Wardana', 'https://drive.google.com/file/d/1osygMM8_ceJx-yHuPHulVOaaudgSyO9O/view?usp=drivesdk');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `username` char(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`username`, `nama`, `jenis_kelamin`, `no_telp`, `password`) VALUES
('123xx', 'haha', 'Perempuan', '06898', '123xx'),
('admin', 'Rara', 'Perempuan', '89789899', 'admin123'),
('admin001', 'Mihra Wardana', 'Perempuan', '855676878', '1234567890'),
('mihra06', 'Mihra Wardana', 'Perempuan', '85300000000', '3bdd90d2f8d8fbfc225192484b833de4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaanku`
--
ALTER TABLE `bacaanku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
