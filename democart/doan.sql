-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `gia`, `hinhanh`, `qty`, `thanhtien`, `masp`) VALUES
(140, 'Huawei 10 Pro', '75000', 'image/huawei_mate10_pro.jpg', 1, '75000', 'p1001'),
(141, 'LG v30', '65000', 'image/lg_v30.jpg', 1, '65000', 'p1002');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `matk` int(10) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`matk`, `Username`, `tenkh`, `pass`, `TinhTrang`, `Quyen`) VALUES
(1, '3119410102', 'kyhai', '123', '1', '0'),
(2, '3119410102', 'kyhai', '123', '1', '0'),
(3, 'ankdk', 'kyhai', '123', '1', '0'),
(4, 'aaaaa', '12345', '123', '1', '0'),
(5, 'bbbbb', 'nguyen', '123', '1', '0'),
(6, 'ccccc', 'duc', '123', '1', '0'),
(7, 'kyhai1', 'ahais315', '123', '1', '0'),
(8, 'vvv', 'nguyen', '123', '1', '0'),
(9, 'bbbbb', '123', '456', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `mahd` int(10) NOT NULL,
  `matk` int(10) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`mahd`, `matk`, `products`, `amount_paid`) VALUES
(1, 8, 'LG v30(1), MI Note 5 Pro(1)', '80000'),
(2, 9, 'Huawei 10 Pro(2), MI Note 5 Pro(2)', '180000');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `mahd` int(10) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanhtien` varchar(100) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `ngaydat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`mahd`, `masp`, `soluong`, `thanhtien`, `trangthai`, `ngaydat`) VALUES
(0, 'p1001', 2, '150000', 1, '30-04-2021 11:49:59'),
(0, 'p1002', 2, '130000', 1, '30-04-2021 11:49:59'),
(7, 'p1001', 2, '150000', 1, '30-04-2021 11:58:46'),
(7, 'p1002', 1, '65000', 1, '30-04-2021 11:58:46'),
(7, 'p1003', 1, '15000', 1, '30-04-2021 11:58:46'),
(8, 'p1000', 1, '90000', 1, '30-04-2021 12:00:09'),
(8, 'p1001', 1, '75000', 1, '30-04-2021 12:00:09'),
(8, 'p1002', 2, '130000', 1, '30-04-2021 12:00:09'),
(14, 'p1000', 2, '180000', 1, '30-04-2021 13:07:04'),
(14, 'p1001', 1, '75000', 1, '30-04-2021 13:07:04'),
(1, 'p1002', 1, '65000', 1, '30-04-2021 13:17:32'),
(1, 'p1003', 1, '15000', 1, '30-04-2021 13:17:32'),
(2, 'p1001', 2, '150000', 1, '30-04-2021 13:20:18'),
(2, 'p1003', 2, '30000', 1, '30-04-2021 13:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `hinhanh` varchar(255) NOT NULL,
  `masp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `tensp`, `gia`, `soluong`, `hinhanh`, `masp`) VALUES
(1, 'Apple iPhone X', '90000', 1, 'image/iphone_x.jpg', 'p1000'),
(2, 'Huawei 10 Pro', '75000', 1, 'image/huawei_mate10_pro.jpg', 'p1001'),
(3, 'LG v30', '65000', 1, 'image/lg_v30.jpg', 'p1002'),
(4, 'MI Note 5 Pro', '15000', 1, 'image/mi_note_5_pro.jpg', 'p1003'),
(5, 'Nokia 7 Plus', '25000', 1, 'image/nokia_7_plus.jpg', 'p1004'),
(6, 'One Plus 6', '35000', 1, 'image/one_plus_6.jpg', 'p1005'),
(7, 'Zenfone Max Pro', '15000', 1, 'image/zenfone_m1.jpg', 'p1006'),
(9, 'Samsung A50', '25000', 1, 'image/samsung_a50.jpg', 'p1007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`matk`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`masp`),
  ADD KEY `product_code` (`masp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `matk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
