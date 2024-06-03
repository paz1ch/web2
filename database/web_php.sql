-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL DEFAULT 'Việt Nam',
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL DEFAULT 'Thanh toán khi nhận hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `username`, `name`, `phone`, `country`, `city`, `district`, `detail`, `payment`) VALUES
(4, 'test2', 'nhat truong', '034623612', 'vietnam', 'hồ chí minh', 'tân phú', 'hai bà trưng', 'Thanh toán khi nhận hàng'),
(42, '1', 'Truong nhat', '0312654823', 'Vietnam', 'đồng nai', 'phu xuan', '132/12 nguyen van huong', 'Thanh toán khi nhận hàng'),
(43, '1', 'Truong do', '0345295121', 'Vietnam', 'đồng nai', 'tan phu', 'phu lam', 'Thanh toán khi nhận hàng'),
(44, 'nhattruong', 'nhat truong', '0974121320', 'Vietnam', 'dong nai', 'tan phu ', '89/15 ap phu tho, xa phu loc', 'Ví điện tử');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `image_sp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `tong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_sp`, `username`, `tensp`, `image_sp`, `soluong`, `gia`, `tong`) VALUES
(69, 14, '1', 'BÀN KÍNH', 'table1.jpg', 1, '200', '200');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `tensp` varchar(500) NOT NULL,
  `soluong` varchar(500) NOT NULL,
  `gia` varchar(500) NOT NULL,
  `tong` varchar(50) NOT NULL,
  `tongtien` varchar(50) NOT NULL,
  `xuly` varchar(50) NOT NULL,
  `time_shipping` date NOT NULL,
  `time_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `username`, `hoten`, `diachi`, `sdt`, `payment`, `tensp`, `soluong`, `gia`, `tong`, `tongtien`, `xuly`, `time_shipping`, `time_order`) VALUES
(14, '1', 'Truong nhat', 'thủ đức, đồng nai, Vietnam', '03452951211', 'Thanh toán khi nhận hàng', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/BÀN KÍNH/BÀN VĂN PHÒNG', '1/1/1/1', '90/200/200/230', '90/200/200/230', '720', '3', '2000-10-30', '0000-00-00'),
(15, '1', 'Truong nhat', 'tan phu, đồng nai, Vietnam', '0345295121', 'Ví điện tử', 'SOFA LOẠI TỐT/GƯƠNG MẶT TRỜI/BÀN KÍNH', '1/9/5', '200/100/200', '200/900/1000', '2100', '3', '2000-10-30', '0000-00-00'),
(16, '1', 'Truong nhat', 'tan phu, đồng nai, Vietnam', '0345295121', 'Ví điện tử', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY/GƯƠNG MẶT TRỜI', '1/1/1/1', '90/200/1000/100', '90/200/1000/100', '1390', '3', '2024-05-10', '0000-00-00'),
(17, 'test2', 'nhat truong', 'tân phú, hồ chí minh, vietnam', '034623612', 'Thanh toán khi nhận hàng', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY', '1/1/1', '90/200/1000', '90/200/1000', '1290', '3', '2024-05-10', '0000-00-00'),
(18, '1', 'Truong do', 'tan phu, đồng nai, Vietnam', '0345295121', 'Thanh toán khi nhận hàng', 'BÀN GỖ SỒI/GƯỜNG LUXURY/SOFA TRẮNG TINH TẾ', '1/1/1', '90/1000/300', '90/1000/300', '1390', '1', '2024-05-18', '2024-05-15'),
(19, '1', 'Truong do', 'tan phu, đồng nai, Vietnam', '0345295121', 'Thanh toán khi nhận hàng', 'GIƯỜNG THÔNG MINH', '1', '500', '500', '500', '1', '2024-05-19', '2024-05-16'),
(20, '1', 'Truong nhat', 'phu xuan, đồng nai, Vietnam', '0312654823', 'Thanh toán khi nhận hàng', 'GƯƠNG TRANG ĐIỂM', '1', '130', '130', '130', '1', '2024-05-27', '2024-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Giường'),
(2, 'Ghế'),
(3, 'Bàn'),
(4, 'Gương');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `sp_active` int(11) NOT NULL,
  `image_sp` varchar(50) NOT NULL,
  `star` int(11) NOT NULL,
  `motangan` text NOT NULL,
  `motachitiet` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_danhmuc`, `tensp`, `gia`, `sp_active`, `image_sp`, `star`, `motangan`, `motachitiet`, `trang_thai`) VALUES
(3, 4, 'GƯƠNG LOẠI 3', '50', 1, 'mirror3.jpg', 5, '', '', 0),
(4, 3, 'SOFA LOẠI 3', '100', 1, 'sofa3.jpg', 4, '', '', 0),
(5, 1, 'GIƯỜNG ĐÔI', '120', 1, 'bed3.jpg', 5, '', '', 1),
(6, 4, 'GƯƠNG SIÊU BỰ', '90', 1, 'mirror4.jpg', 3, '', '', 1),
(7, 2, 'SOFA LOẠI CỰC ÊM', '260', 1, 'sofa4.jpg', 4, '', '', 1),
(8, 3, 'BÀN SIÊU CỨNG', '75', 1, 'table4.jpg', 5, '', '', 1),
(9, 1, 'GIƯỜNG THÔNG MINH', '500', 1, 'bed4.jpg', 3, '', '', 0),
(10, 1, 'GIƯỜNG GỖ BẠCH DƯƠNG', '300', 1, 'bed1.jpg', 2, '', '', 1),
(11, 1, 'GIƯỜNG TIỆN LỢI', '290', 1, 'bed2.jpg', 5, '', '', 1),
(12, 2, 'SOFA LUXURY', '250', 1, 'sofa1.jpg', 3, '', '', 1),
(13, 2, 'SOFA TRẮNG TINH TẾ', '300', 1, 'sofa2.jpg', 4, '', '', 1),
(14, 3, 'BÀN KÍNH', '200', 1, 'table1.jpg', 4, '', '', 1),
(15, 3, 'BÀN VĂN PHÒNG', '230', 1, 'table2.jpg', 5, '', '', 1),
(16, 4, 'GƯƠNG TRANG ĐIỂM', '130', 1, 'mirror1.jpg', 5, '', '', 1),
(17, 4, 'GƯƠNG MẶT TRỜI', '100', 1, 'mirror2.jpg', 4, '', '', 1),
(18, 1, 'GƯỜNG LUXURY', '1000', 1, 'bed5.jpg', 5, '', '', 1),
(19, 2, 'SOFA LOẠI TỐT', '200', 1, 'sofa5.jpg', 5, '', '', 1),
(20, 3, 'BÀN GỖ SỒI', '90', 1, 'table5.jpg', 4, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ho` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `ho`, `ten`, `phone`, `email`, `sex`, `date`, `isadmin`, `status`) VALUES
('1', '', 'do nhat', 'nguyen', '03452951221', 'affg@gmail.com', 'Nam', '3000-01-02', 0, 1),
('123', '', 'do', 'nguyen', '03452951211', 'x@gmail.com', 'Nữ', '2004-01-14', 0, 1),
('admin', '1', '', '', '', '', '', '0000-00-00', 1, 1),
('nhattruong', '1', 'nhat', 'truong', '0974121320', 'nhattruong@gmail.com', '', '0000-00-00', 0, 1),
('test2', '1', 'phuc', 'dang', '0345295121', 'asd@gmail.com', 'Nữ', '0004-12-01', 0, 1),
('truong1', '1', 'nhat', 'truong', '0315131659', 'huureongk4@gmail.com', '1', '2004-01-14', 0, 1),
('truongdo1', '1', 'truong', 'do', '0312456123', 'truongdo1@gmail.com', '1', '2004-01-14', 0, 1),
('user1', '1', 'nhat', 'Truong', '03333333', 'fjjghf@gmail.com', '', '0000-00-00', 0, 1),
('user3', '1', 'nhat', 'Truong', '01111111', '1111@gmail.com', '', '0000-00-00', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_sp_2` (`id_sp`),
  ADD KEY `id_sp_3` (`id_sp`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113147;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmucsp` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
