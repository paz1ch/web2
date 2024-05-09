-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2024 lúc 07:02 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `username`, `name`, `phone`, `country`, `city`, `district`, `detail`, `payment`) VALUES
(4, 'test2', 'nhat truong', '.0.0.0.', 'vietnam', 'trung', ' a', ' b', 'Thanh toán khi nhận hàng'),
(42, '1', 'Truong nhat', '1111111', 'Vietnam', 'đồng nai', 'kalsjd', '1321321', 'Ví điện tử'),
(43, '1', 'Truong nhat', '03452951211', 'Vietnam', 'đồng nai', 'thủ đức', 'nguyễn văn trỗi', 'Thanh toán khi nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
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
  `xuly` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `username`, `hoten`, `diachi`, `sdt`, `payment`, `tensp`, `soluong`, `gia`, `tong`, `tongtien`, `xuly`) VALUES
(7, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY', '1/30/60', '90/200/1000', '90/6000/60000', '66090', 0),
(8, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200', '200', '200', 0),
(9, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200', '200', '200', 0),
(10, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200', '200', '200', 0),
(11, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'BÀN GỖ SỒI', '1', '90', '90', '90', 0),
(12, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', '', '', '', '', '', 0),
(13, '1', 'Truong nhat', 'thủ đức, đồng nai, Vietnam', '03452951211', 'Thanh toán khi nhận hàng', 'ban ghe/BÀN GỖ SỒI', '1/1', '1321321/90', '1321321/90', '1321411', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Giường'),
(2, 'Ghế'),
(3, 'Bàn'),
(4, 'Gương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
  `motachitiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_danhmuc`, `tensp`, `gia`, `sp_active`, `image_sp`, `star`, `motangan`, `motachitiet`) VALUES
(1, 3, 'BÀN NHỎ LOẠI 3', '40', 1, 'table3.jpg', 4, '', ''),
(2, 4, 'GƯƠNG LUXURY FAKE', '300', 1, 'mirror5.jpg', 3, '', ''),
(3, 4, 'GƯƠNG LOẠI 3', '50', 1, 'mirror3.jpg', 5, '', ''),
(4, 3, 'SOFA LOẠI 3', '100', 1, 'sofa3.jpg', 4, '', ''),
(5, 1, 'GIƯỜNG ĐÔI', '120', 1, 'bed3.jpg', 5, '', ''),
(6, 4, 'GƯƠNG SIÊU BỰ', '90', 1, 'mirror4.jpg', 3, '', ''),
(7, 2, 'SOFA LOẠI CỰC ÊM', '260', 1, 'sofa4.jpg', 4, '', ''),
(8, 3, 'BÀN SIÊU CỨNG', '75', 1, 'table4.jpg', 5, '', ''),
(9, 1, 'GIƯỜNG THÔNG MINH', '500', 1, 'bed4.jpg', 3, '', ''),
(10, 1, 'GIƯỜNG GỖ BẠCH DƯƠNG', '300', 1, 'bed1.jpg', 2, '', ''),
(11, 1, 'GIƯỜNG TIỆN LỢI', '290', 1, 'bed2.jpg', 5, '', ''),
(12, 2, 'SOFA LUXURY', '250', 1, 'sofa1.jpg', 3, '', ''),
(13, 2, 'SOFA TRẮNG TINH TẾ', '300', 1, 'sofa2.jpg', 4, '', ''),
(14, 3, 'BÀN KÍNH', '200', 1, 'table1.jpg', 4, '', ''),
(15, 3, 'BÀN VĂN PHÒNG', '230', 1, 'table2.jpg', 5, '', ''),
(16, 4, 'GƯƠNG TRANG ĐIỂM', '130', 1, 'mirror1.jpg', 5, '', ''),
(17, 4, 'GƯƠNG MẶT TRỜI', '100', 1, 'mirror2.jpg', 4, '', ''),
(18, 1, 'GƯỜNG LUXURY', '1000', 1, 'bed5.jpg', 5, '', ''),
(19, 2, 'SOFA LOẠI TỐT', '200', 1, 'sofa5.jpg', 5, '', ''),
(20, 3, 'BÀN GỖ SỒI', '90', 1, 'table5.jpg', 4, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
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
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `ho`, `ten`, `phone`, `email`, `sex`, `date`, `isadmin`, `status`) VALUES
('1', '1', 'do nhat', 'nguyen', '03452951221', 'affg@gmail.com', 'Nam', '3000-01-02', 0, 1),
('123', '', 'do', 'nguyen', '03452951211', 'x@gmail.com', 'Nữ', '2004-01-14', 0, 1),
('admin', '1', '', '', '', '', '', '0000-00-00', 1, 1),
('test2', '1', 'phuc', 'dang', '0345295121', 'asd@gmail.com', 'Nữ', '0004-12-01', 0, 1),
('truongdonguyen', '123', 'nguyen ', 'do', '09432021401', '1234@gmail.com', 'Nam', '2004-01-14', 0, 1),
('user1', '1', 'nhat', 'Truong', '03333333', 'fjjghf@gmail.com', '', '0000-00-00', 0, 1),
('user3', '1', 'nhat', 'Truong', '01111111', '1111@gmail.com', '', '0000-00-00', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_sp_2` (`id_sp`),
  ADD KEY `id_sp_3` (`id_sp`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113147;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmucsp` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
