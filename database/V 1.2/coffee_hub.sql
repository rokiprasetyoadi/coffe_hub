-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 06:36 PM
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
  `admin_alamat` varchar(100) NOT NULL,
  `admin_email` varchar(35) NOT NULL,
  `admin_telp` varchar(15) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_alamat`, `admin_email`, `admin_telp`, `admin_username`, `admin_password`) VALUES
(2, 'Roki Prasetyo Adi', 'Sempusari, Jember 68135', 'rokiprasetyoadi@gmail.com', '089608560667', 'roxx', 'e10adc3949ba59abbe56e057f20f883e');

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
('A171020200001', 'EXPO 2015', 'A171020200001.jpg', 'Tes yaa', 'Jakarta', '2020-10-18', '23:56:00'),
('A171020200002', 'EXPO 2016', 'A171020200002.jpg', 'tesss haii', 'Jember', '2020-10-21', '14:00:00'),
('A171020200003', 'EXPO 2017', 'A171020200003.jpg', 'tessss haloooo', 'Surabaya', '2020-10-23', '06:00:00'),
('A171020200004', 'EXPO 2018', 'A171020200004.jpg', 'Apanihhhh', 'Bandung', '2020-10-28', '13:00:00'),
('A171020200005', 'EXPO 2019', 'A171020200005.jpeg', 'tessss', 'Bali', '2020-10-30', '12:00:00'),
('A171020200006', 'EXPO 2020', 'A171020200006.jpg', 'reeeeee', 'Jember', '2020-11-03', '11:00:00');

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
  `catalog_website` varchar(100) NOT NULL,
  `catalog_sosmed` varchar(100) NOT NULL,
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
-- Dumping data for table `e_catalog`
--

INSERT INTO `e_catalog` (`catalog_id`, `catalog_nama_petani`, `catalog_alamat`, `catalog_kelompok_tani`, `catalog_no_hp`, `catalog_website`, `catalog_sosmed`, `catalog_nama_kopi`, `catalog_badan_usaha`, `catalog_lokasi`, `catalog_ketinggian`, `catalog_jenis_kopi`, `catalog_kap_produksi`, `catalog_sertifikat`, `catalog_deskripsi`, `catalog_img`) VALUES
('EK171020200001', 'Pak Rizal', 'Sumberjambe, Jawa Tengah', 'Kelompok 1', '089627867443', '', '', 'Kopi Enak', 'Bumdes', 'Jawa Tengah', '1500', 'Robusta', '150', '', 'Kopi cap Enak yang penting enak', 'EK171020200001.jpg'),
('EK171020200002', 'Pak Roni', 'Sempu, Banyuwangi, Jawa Timur', 'Kelompok 2', '081234876234', 'www.kopikita.com', 'ig kopikita', 'Kopi Kita', 'Bumdes', 'Banyuwangi, Jawa Timur', '1600', 'Arabika', '200', '', 'Kopi kita bukan kopimu', 'EK171020200002.jpg'),
('EK171020200003', 'Dul Hadi', 'Blitar, Jawa Timur', 'Kelompok 3', '089342785397', '', '', 'Kopi Siapa Hayoo', 'Bumdes', 'Blitar, Jawa Timur', '1700', 'Arabika', '150', '', 'Loh Kopine sopo?', 'EK171020200003.jpg'),
('EK171020200004', 'Cak Sam', 'kedungrejo, Bandung, Jawa barat', 'Kelompok 4', '089764528726', 'www.kopicup.com', 'twitter kopicup', 'Kopi Cup', 'Bumdes', 'Bandung, Jawa barat', '1800', 'Arabika', '150', 'icc', 'Kopicup cupp', 'EK171020200004.jpg'),
('EK171020200005', 'Sahroni Anang', 'Denpasar, Bali', 'Kelompok 5', '087568537387', '', '', 'Kopi Khas Bali', 'Bumdes', 'Denpasar, Bali', '1400', 'Arabika', '150', 'elali', 'sini minum', 'EK171020200005.jpg'),
('EK171020200006', 'Dollaahh', 'Kalimantan Selatan', 'Kelompok 6', '089647536836', '', '', 'Kopi Mantan', 'Bumdes', 'Kalimantan Selatan', '2000', 'Arabika', '150', 'icc', 'Enakkk', 'EK171020200006.JPG');

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
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
