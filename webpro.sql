-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id`, `nama`, `stok`) VALUES
(1, 'Wool', 99),
(2, 'Jean', 147),
(3, 'Katun', 100),
(4, 'Besi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `username`, `password`) VALUES
(2, 'asian', 'asd', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `logo` text NOT NULL,
  `front_x` int(11) NOT NULL,
  `front_y` int(11) NOT NULL,
  `front_size` int(11) NOT NULL,
  `back_x` int(11) NOT NULL,
  `back_y` int(11) NOT NULL,
  `back_size` int(11) NOT NULL,
  `id_tukang_jahit` int(11) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_member`, `tanggal`, `jumlah`, `ukuran`, `id_bahan_baku`, `warna`, `logo`, `front_x`, `front_y`, `front_size`, `back_x`, `back_y`, `back_size`, `id_tukang_jahit`, `catatan`, `status`) VALUES
(6, 1, '2018-11-25', 1, 'XL', 2, '#ffffff', 'manager1.png', 131, 0, 100, 130, 0, 100, 1, ' wew', 3),
(7, 1, '2019-04-02', 2, 'M', 4, '#ffffff', 'cropped-Web-Icon.png', 225, -114, 35, 157, -156, 60, 1, ' Yang bagus', 2),
(8, 2, '2019-04-22', 1, 'M', 3, '#ff8000', 'cropped-Web-Icon1.png', 0, -6, 100, 0, 0, 100, 1, ' ', 1),
(9, 3, '2019-04-22', 1, 'M', 1, '#800040', 'cropped-Web-Icon2.png', 0, 65, 100, 0, 0, 100, 2, ' test', 3),
(10, 2, '2019-04-23', 1, 'M', 2, '#000000', 'cropped-Web-Icon3.png', 125, -116, 62, 159, -160, 35, 2, ' ', 3),
(11, 2, '2019-04-23', 1, 'M', 2, '#ffffff', 'cropped-Web-Icon1.png', 204, -122, 55, 133, 47, 100, 2, ' Bikin yang cepet yaaa', 1),
(12, 2, '2019-04-23', 10, 'XL', 1, '#008000', '1417485IMG-91781780x390.JPG', 136, 0, 100, 96, 0, 100, 2, ' 12r', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'MENUNGGU'),
(2, 'SEDANG DI PROSES'),
(3, 'SUDAH  SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `tukang_jahit`
--

CREATE TABLE `tukang_jahit` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukang_jahit`
--

INSERT INTO `tukang_jahit` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Teguh', 'jht', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_tukang_jahit` (`id_tukang_jahit`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tukang_jahit`
--
ALTER TABLE `tukang_jahit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tukang_jahit`
--
ALTER TABLE `tukang_jahit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
