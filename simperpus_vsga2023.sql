-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 02:33 AM
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
-- Database: `simperpus_vsga2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `idanggota`, `nama`, `jeniskelamin`, `alamat`, `foto`) VALUES
(3, 'ab567', 'prilly', 'P', 'pandak', 'IMG_20230715_115217.jpg'),
(6, '4152O', 'IQBAL', 'L', 'SRANDAKAN', 'DSC09732.JPG'),
(17, '343', 'aqua', 'L', 'pegunungan', 'DSC09732.JPG'),
(22, '7475', 'das', 'L', 'ddf', 'IMG_20230715_120955.jpg'),
(23, '23467', 'Bokuto', 'L', 'KULON PROGO', 'DSC09583.JPG'),
(42, '2238', 'ara bina', 'P', 'kuala lumpur', 'IMG_20230715_191316.jpg'),
(43, '3456', 'sinar', 'P', 'naera', 'DSC09729.JPG'),
(47, '230', 'asa', 'P', 'iya', 'IMG_20230715_114912.jpg'),
(51, '450', 'sia', 'L', 'saq', 'IMG_20230715_114857.jpg'),
(52, '23112', 'oky', 'P', 'kyo', 'IMG_20230715_160900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(50) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `ISBN`, `penerbit`, `tahun`) VALUES
(1, 'Angel and demons', 'ab123', 'erlangga', '2000'),
(2, 'muhammad al-fatih', 'qa2345', 'felix y siau', '2001'),
(3, 'ghazi 1', 'gz12', 'felix y.siau', '2016'),
(4, 'ghazi 2', 'g123', 'felix y siau', '2016'),
(5, 'ghazi 3', 'g124', 'felix y siau', '2018'),
(6, 'ghazi 4', 'g125', 'felix y siau', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `anggota` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `status` enum('pinjam','kembali') NOT NULL,
  `tanggal_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `anggota`, `buku`, `tanggal_pinjam`, `status`, `tanggal_kembali`) VALUES
(1, 3, 2, '2023-07-19', 'pinjam', 2023),
(2, 3, 1, '2023-07-11', 'pinjam', 2023),
(3, 3, 1, '2023-07-11', 'pinjam', 2023),
(4, 23, 1, '2023-07-11', 'pinjam', 2023),
(5, 23, 1, '2023-07-11', 'pinjam', 2023),
(6, 23, 1, '2023-07-11', 'pinjam', 2023),
(7, 23, 1, '2023-07-11', 'pinjam', 2023),
(8, 23, 1, '2023-07-11', 'pinjam', 2023),
(9, 23, 1, '2023-07-26', 'pinjam', 2023),
(10, 23, 3, '2023-07-10', 'pinjam', 2023),
(11, 3, 1, '2023-07-25', 'pinjam', 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idanggota` (`idanggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
