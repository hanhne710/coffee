-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 09:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trasua`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `thanhtien` varchar(100) NOT NULL,
  `masp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahd` int(10) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `soluong` int(10) NOT NULL,
  `ngaydat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`mahd`, `masp`, `gia`, `soluong`, `ngaydat`) VALUES
(1, '01', '15000', 1, '03-05-2021'),
(1, '07', '60000', 1, '03-05-2021');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(10) NOT NULL,
  `matk` int(10) NOT NULL,
  `noidungdathang` varchar(255) NOT NULL,
  `ngaylap` varchar(100) NOT NULL,
  `thanhtien` varchar(100) NOT NULL,
  `tinhtrang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `matk`, `noidungdathang`, `ngaylap`, `thanhtien`, `tinhtrang`) VALUES
(1, 23, 'Caffè(1), Espresso(1)', '03-05-2021', '75000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `matk` int(50) NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`matk`, `Username`, `tenkh`, `Password`, `TinhTrang`, `Quyen`) VALUES
(11, '11', '11', '11', '11', '1'),
(12, 'ahais', 'kyhai', '123456', '2', '0'),
(13, 'kyhai', 'kiet', '123', '2', '0'),
(14, 'bbbb', 'kyhai', '123456', '1', '0'),
(15, 'cccc', 'KYHAI', '123456', '1', '0'),
(16, 'dac', 'kyhai', '123456', '1', '0'),
(17, 'dae', 'Hai', '123456', '1', '0'),
(18, 'abc', 'Hai', '123456', '1', '0'),
(19, 'mnm', 'kyhai', '123', '1', '0'),
(20, 'aaa', 'kyhai', '123456', '1', '0'),
(21, 'zzz', 'kyhai', '123', '1', '0'),
(22, 'ccc', 'huynh', '123', '1', '2'),
(23, 'nnn', 'KYHAI', '123', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensp` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `dungtich` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matl` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `hinhanh`, `gia`, `dungtich`, `matl`, `soluong`, `id`) VALUES
('01', 'Caffè Americano', 'images/americano.png', 15000, '200ml', '01', 1, 1),
('02', 'Blonde Roast', 'images/ro.png', 35000, '300ml', '01', 1, 2),
('03', 'Cold Brew', 'images/americano.png', 30000, '500ml', '01', 1, 3),
('04', 'Latte', 'images/latte.png', 50000, '500ml', '01', 1, 4),
('06', 'Espresso', 'images/expresso.png', 40000, '400ml', '01', 1, 5),
('07', 'Espresso Original', 'images/expre2.png', 60000, '500ml', '01', 1, 6),
('08', 'Cappuccino', 'images/capuchino.png', 60000, '400ml', '01', 1, 7),
('09', 'Caffe Latte', 'images/caffelatte.png', 60000, '600ml', '01', 1, 8),
('10', 'Black tea', 'images/ht.png', 40000, '200ml', '02', 1, 9),
('11', 'Matcha tea', 'images/tx.png', 50000, '300ml', '02', 1, 10),
('12', 'Money tea', 'images/tmo.png', 33000, '300ml', '02', 1, 11),
('13', 'Lemon tea', 'images/tc.png', 50000, '300ml', '02', 1, 12),
('Latte', 'Caramel Latte', 'images/latteres.png', 39000, '400ml', '01', 1, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`matk`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code2` (`masp`) USING BTREE,
  ADD KEY `product_code` (`masp`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `matk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
