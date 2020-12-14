-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 07.38
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_alamat`, `admin_email`, `admin_telp`, `admin_username`, `admin_password`) VALUES
(2, 'Roki Prasetyo Adi', 'Sempusari, Jember 68135', 'rokiprasetyoadi@gmail.com', '089608560667', 'roxx', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` varchar(15) NOT NULL,
  `agenda_nama` varchar(30) NOT NULL,
  `agenda_img` varchar(255) NOT NULL,
  `agenda_keterangan` text NOT NULL,
  `agenda_tempat` varchar(150) NOT NULL,
  `agenda_tanggal` date NOT NULL,
  `agenda_jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_nama`, `agenda_img`, `agenda_keterangan`, `agenda_tempat`, `agenda_tanggal`, `agenda_jam`) VALUES
('A171020200001', 'EXPO 2015', 'A171020200001.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Jember', '2020-10-20', '02:00:00'),
('A171020200002', 'EXPO 2016', 'A171020200002.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Jember', '2020-10-21', '14:00:00'),
('A171020200003', 'EXPO 2017', 'A171020200003.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Surabaya', '2020-10-23', '06:00:00'),
('A171020200004', 'EXPO 2018', 'A171020200004.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Bandung', '2020-10-28', '13:00:00'),
('A171020200005', 'EXPO 2019', 'A171020200005.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Bali', '2020-10-30', '12:00:00'),
('A171020200006', 'EXPO 2020', 'A171020200006.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Jember', '2020-11-03', '11:00:00'),
('A021120200007', 'EXPO 2021', 'A021120200007.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Jember', '2020-12-10', '15:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `e_catalog`
--

CREATE TABLE `e_catalog` (
  `catalog_id` varchar(16) NOT NULL,
  `catalog_nama_petani` varchar(30) NOT NULL,
  `catalog_alamat` varchar(150) NOT NULL,
  `catalog_kelompok_tani` varchar(30) NOT NULL,
  `catalog_no_hp` varchar(15) NOT NULL,
  `catalog_website` varchar(100) NOT NULL,
  `catalog_sosmed` varchar(100) NOT NULL,
  `catalog_nama_kopi` varchar(30) NOT NULL,
  `catalog_badan_usaha` varchar(30) NOT NULL,
  `catalog_lokasi` varchar(150) NOT NULL,
  `catalog_ketinggian` varchar(5) NOT NULL,
  `catalog_jenis_kopi` varchar(15) NOT NULL,
  `catalog_kap_produksi` varchar(5) NOT NULL,
  `catalog_sertifikat` varchar(10) NOT NULL,
  `catalog_deskripsi` text NOT NULL,
  `catalog_img` varchar(255) NOT NULL,
  `catalog_video` varchar(255) NOT NULL,
  `catalog_last_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `e_catalog`
--

INSERT INTO `e_catalog` (`catalog_id`, `catalog_nama_petani`, `catalog_alamat`, `catalog_kelompok_tani`, `catalog_no_hp`, `catalog_website`, `catalog_sosmed`, `catalog_nama_kopi`, `catalog_badan_usaha`, `catalog_lokasi`, `catalog_ketinggian`, `catalog_jenis_kopi`, `catalog_kap_produksi`, `catalog_sertifikat`, `catalog_deskripsi`, `catalog_img`, `catalog_video`, `catalog_last_update`) VALUES
('EK171020200001', 'Pak Rizal', 'Sumberjambe, Jawa Tengah', 'Kelompok 1', '089627867443', '', '', 'Kopi Enak', 'Bumdes', 'Jawa Tengah', '1500', 'Robusta', '150', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ipsum et velit mollis aliquam sit amet sollicitudin nibh. Sed tempus auctor auctor. Etiam id luctus nulla. Suspendisse sollicitudin condimentum ipsum. Nulla facilisi. Suspendisse sed ipsum nisl. Morbi aliquam velit ut rhoncus fringilla. Nam sit amet sollicitudin mi, vitae pharetra nunc. Nullam nec arcu tellus. Aliquam eu purus at mi lacinia rutrum. Pellentesque finibus sed tortor id mattis. In a magna vestibulum, finibus leo eget, consequat magna. In libero dui, rutrum eget venenatis a, mollis in dolor.\r\n', 'EK171020200001.jpg', 'https://www.youtube.com/watch?v=npmFwIHUsJU', '04-12-2020 09:25:36'),
('EK171020200003', 'Dul Hadi', 'Blitar, Jawa Timur', 'Kelompok 3', '089342785397', '', '', 'Kopi Siapa Hayoo', 'Bumdes', 'Blitar, Jawa Timur', '1700', 'Arabika', '150', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ipsum et velit mollis aliquam sit amet sollicitudin nibh. Sed tempus auctor auctor. Etiam id luctus nulla. Suspendisse sollicitudin condimentum ipsum. Nulla facilisi. Suspendisse sed ipsum nisl. Morbi aliquam velit ut rhoncus fringilla. Nam sit amet sollicitudin mi, vitae pharetra nunc. Nullam nec arcu tellus. Aliquam eu purus at mi lacinia rutrum. Pellentesque finibus sed tortor id mattis. In a magna vestibulum, finibus leo eget, consequat magna. In libero dui, rutrum eget venenatis a, mollis in dolor.', 'EK171020200003.jpg', '', ''),
('EK171020200005', 'Sahroni Anang', 'Denpasar, Bali', 'Kelompok 5', '087568537387', '', '', 'Kopi Khas Bali', 'Bumdes', 'Denpasar, Bali', '1400', 'Arabika', '150', 'elali', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ipsum et velit mollis aliquam sit amet sollicitudin nibh. Sed tempus auctor auctor. Etiam id luctus nulla. Suspendisse sollicitudin condimentum ipsum. Nulla facilisi. Suspendisse sed ipsum nisl. Morbi aliquam velit ut rhoncus fringilla. Nam sit amet sollicitudin mi, vitae pharetra nunc. Nullam nec arcu tellus. Aliquam eu purus at mi lacinia rutrum. Pellentesque finibus sed tortor id mattis. In a magna vestibulum, finibus leo eget, consequat magna. In libero dui, rutrum eget venenatis a, mollis in dolor.', 'EK171020200005.jpg', '', ''),
('EK181120200008', 'AA', 'A', 'A', '089372839220', '', '', 'Coklat Bubuk Vicco', 'A', 'A', 'Rp. 1', 'Rp. 18000', '111', '', 'Coklat Bubuk Vicco diolah dengan bahan bahan pilihan. Melalui berbagai macam proses sehingga tercipta komposisi coklat yang enakk', 'EK181120200008.jpg', '', ''),
('EK181120200009', 'xx', 'A', 'A', '089372839220', '', '', 'Chocolate With Cachew', 'A', 'A', 'Rp. 2', 'Rp. 20000', '111', '', 'Chocolate With Cachew, rasakan kenikmatan coklat dan kacang  mede dalam sekali gigitan. Hmmmm rasakan nikmatnya', 'EK181120200009.jpg', '', ''),
('EK181120200010', 'xx', 'A', 'A', '089372839220', '', '', 'Milk Chocholate Vicco', 'A', 'A', 'Rp. 1', 'Rp. 18000', '111', '', 'Milk Chocholate Vicco, Nikmati perpaduan rasa susu dan coklat dalam satu gigitan. Sekali gigitan lumer di mulut', 'EK181120200010.jpg', '', ''),
('EK181120200011', 'xx', 'A', 'A', '089372839220', '', '', 'Pia Kepel', 'A', 'A', 'Rp. 1', 'Rp. 30000', '111', '', 'Pia Kepel merupakan produk kue bakpia yang dibuat dengan cara yang unik yaitu dikepel-kepel. Nikmati kenikmatan rasa coklat dalam setiap gigitan', 'EK181120200011.jpg', '', ''),
('EK181120200012', 'xx', 'A', 'A', '089372839220', '', '', 'Broring', 'A', 'A', 'Rp. 1', 'Rp. 15000', '111', '', 'Broring (Brownies Garing) Merupakan olahan coklat yang berpadu dengan manisnya brownis membuat anda ketagihan untuk menikmatinya', 'EK181120200012.jpg', '', ''),
('EK181120200013', 'xx', 'A', 'A', '089372839220', '', '', 'Cookies Cassava', 'A', 'A', 'Rp. 1', 'Rp. 33000', '111', '', 'Cookies Cassava, Nikmati gurihnya rasa keripik singkong yang dipadukan dengan rasa coklat yang manis. Sejuta kenikmatan dalam sekali gigitan', 'EK181120200013.jpg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` varchar(15) NOT NULL,
  `member_nama` varchar(100) NOT NULL,
  `member_nohp` varchar(15) NOT NULL,
  `member_alamat` varchar(255) NOT NULL,
  `member_username` varchar(30) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_pertanyaan_keamanan` varchar(150) NOT NULL,
  `member_jawaban` varchar(50) NOT NULL,
  `member_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
