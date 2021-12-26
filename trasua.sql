-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 07:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
  `masp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(100) NOT NULL,
  `soluong` int(10) NOT NULL,
  `ngaydat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`mahd`, `masp`, `gia`, `soluong`, `ngaydat`) VALUES
(1, '01', '15000', 1, '03-05-2021'),
(1, '07', '60000', 1, '03-05-2021'),
(2, '09', '120000', 2, '10-05-2021'),
(2, '07', '60000', 1, '10-05-2021'),
(3, '14', '39000', 1, '11-05-2021'),
(3, '08', '60000', 1, '11-05-2021'),
(3, '10', '40000', 1, '11-05-2021'),
(4, '07', '120000', 2, '11-05-2021'),
(4, '03', '30000', 1, '11-05-2021'),
(4, '11', '50000', 1, '11-05-2021'),
(5, '01', '20000', 1, '05-12-2021');

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
(1, 23, 'Caffè(1), Espresso(1)', '03-05-2021', '75000', '1'),
(2, 4, 'Caffe(2), Espresso(1)', '10-05-2021', '180000', '1'),
(3, 4, 'Caramel(1), Cappuccino(1), Black(1)', '11-05-2021', '139000', '1'),
(4, 5, 'Espresso(2), Cold(1), Matcha(1)', '11-05-2021', '200000', '1'),
(5, 1, 'Caffï¿½(1)', '05-12-2021', '20000', '1');

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
(1, 'admin', 'Duong Hong Tham', 'admin', '1', '1'),
(2, 'chambao', 'Cham Bao', 'bao', '1', '3'),
(3, 'hai', 'ahais', '123', '1', '2'),
(4, 'abc', 'kyhai', '123', '1', '0'),
(5, 'acc', 'kyhai', '123', '1', '2'),
(6, 'DuongTham', 'Duong Thi Tham', 'thamxd', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `maloai` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`) VALUES
('cafe', 'Cà Phê'),
('tea', 'Trà ');

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
('01', 'Caffè Americano', 'images/americano.png', 20000, '200ml', 'cafe', 1, 1),
('03', 'Cold Brew', 'images/americano.png', 30000, '500ml', 'cafe', 1, 3),
('04', 'Latte', 'images/latte.png', 50000, '500ml', 'cafe', 1, 4),
('06', 'Espresso', 'images/expresso.png', 40000, '400ml', 'cafe', 1, 5),
('07', 'Espresso Original', 'images/expre2.png', 60000, '500ml', 'cafe', 1, 6),
('08', 'Cappuccino', 'images/capuchino.png', 60000, '400ml', 'cafe', 1, 7),
('09', 'Caffe Latte', 'images/caffelatte.png', 60000, '600ml', 'cafe', 1, 8),
('10', 'Black tea', 'images/ht.png', 40000, '200ml', 'tea', 1, 9),
('11', 'Matcha tea', 'images/tx.png', 50000, '300ml', 'tea', 1, 10),
('12', 'Money tea', 'images/tmo.png', 33000, '300ml', 'tea', 1, 11),
('13', 'Lemon tea', 'images/tc.png', 15000, '300ml', 'tea', 1, 12),
('14', 'Caramel Latte', 'images/latteres.png', 39000, '400ml', 'cafe', 1, 13);

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
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code2` (`masp`) USING BTREE,
  ADD KEY `product_code` (`masp`) USING BTREE,
  ADD KEY `fk_sp_loaisp` (`matl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `matk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_loaisp` FOREIGN KEY (`matl`) REFERENCES `loaisp` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
