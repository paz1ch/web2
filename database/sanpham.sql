-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2024 lúc 06:42 PM
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
(1, 3, 'BÀN NHỎ LOẠI 3', '40€', 1, 'table3.jpg', 4, '', ''),
(2, 4, 'GƯƠNG LUXURY FAKE', '300€', 1, 'mirror5.jpg', 3, '', ''),
(3, 4, 'GƯƠNG LOẠI 3', '50€', 1, 'mirror3.jpg', 5, '', ''),
(4, 3, 'SOFA LOẠI 3', '100€', 1, 'sofa3.jpg', 4, '', ''),
(5, 1, 'GIƯỜNG ĐÔI', '120€', 1, 'bed3.jpg', 5, '', ''),
(6, 4, 'GƯƠNG SIÊU BỰ', '90€', 1, 'mirror4.jpg', 3, '', ''),
(7, 2, 'SOFA LOẠI CỰC ÊM', '260€', 1, 'sofa4.jpg', 4, '', ''),
(8, 3, 'BÀN SIÊU CỨNG', '75€', 1, 'table4.jpg', 5, '', ''),
(9, 1, 'GIƯỜNG THÔNG MINH', '500€', 1, 'bed4.jpg', 3, '', ''),
(10, 1, 'GIƯỜNG GỖ BẠCH DƯƠNG', '300€', 1, 'bed1.jpg', 2, '', ''),
(11, 1, 'GIƯỜNG TIỆN LỢI', '290€', 1, 'bed2.jpg', 5, '', ''),
(12, 2, 'SOFA LUXURY', '250€', 1, 'sofa1.jpg', 3, '', ''),
(13, 2, 'SOFA TRẮNG TINH TẾ', '300€', 1, 'sofa2.jpg', 4, '', ''),
(14, 3, 'BÀN KÍNH', '200€', 1, 'table1.jpg', 4, '', ''),
(15, 3, 'BÀN VĂN PHÒNG', '230€', 1, 'table2.jpg', 5, '', ''),
(16, 4, 'GƯƠNG TRANG ĐIỂM', '130€', 1, 'mirror1.jpg', 5, '', ''),
(17, 4, 'GƯƠNG MẶT TRỜI', '100€', 1, 'mirror2.jpg', 4, '', ''),
(18, 1, 'GƯỜNG LUXURY', '1000€', 1, 'bed5.jpg', 5, '', ''),
(19, 2, 'SOFA LOẠI TỐT', '200€', 1, 'sofa5.jpg', 5, '', ''),
(20, 3, 'BÀN GỖ SỒI', '90€', 1, 'table5.jpg', 4, '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmucsp` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
