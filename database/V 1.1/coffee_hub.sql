-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_nama` varchar(30) NOT NULL,
  `admin_email` varchar(35) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_username`, `admin_password`) VALUES
(1, 'Roki Prasetyo Adi', 'rokiprasetyoadi@gmail.com', 'roxx', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` varchar(15) NOT NULL,
  `agenda_nama` varchar(30) NOT NULL,
  `agenda_img` varchar(100) NOT NULL,
  `agenda_keterangan` text NOT NULL,
  `agenda_tempat` varchar(150) NOT NULL,
  `agenda_tanggal` date NOT NULL,
  `agenda_jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_nama`, `agenda_img`, `agenda_keterangan`, `agenda_tempat`, `agenda_tanggal`, `agenda_jam`) VALUES
('A141020200001', 'EXPO 2020', 'A141020200001.jpg', 'haii', 'jbr', '2020-10-29', '22:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `e_catalog`
--

CREATE TABLE `e_catalog` (
  `catalog_id` varchar(16) NOT NULL,
  `catalog_nama_petani` varchar(30) NOT NULL,
  `catalog_alamat` text NOT NULL,
  `catalog_kelompok_tani` varchar(30) NOT NULL,
  `catalog_no_hp` varchar(15) NOT NULL,
  `catalog_website` text NOT NULL,
  `catalog_sosmed` text NOT NULL,
  `catalog_nama_kopi` varchar(30) NOT NULL,
  `catalog_badan_usaha` varchar(30) NOT NULL,
  `catalog_lokasi` text NOT NULL,
  `catalog_ketinggian` varchar(5) NOT NULL,
  `catalog_jenis_kopi` varchar(15) NOT NULL,
  `catalog_kap_produksi` varchar(5) NOT NULL,
  `catalog_sertifikat` varchar(10) NOT NULL,
  `catalog_deskripsi` text NOT NULL,
  `catalog_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
