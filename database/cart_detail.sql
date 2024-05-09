-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2024 lúc 09:28 AM
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
(7, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY', '1/30/60', '90€/200€/1000€', '90/6000/60000', '66090', 0),
(8, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200€', '200', '200', 0),
(9, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200€', '200', '200', 0),
(10, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'SOFA LOẠI TỐT', '1', '200€', '200', '200', 0),
(11, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', 'BÀN GỖ SỒI', '1', '90€', '90', '90', 0),
(12, '1', 'Truong nhat', 'kalsjd, đồng nai, Vietnam', '1111111', 'Ví điện tử', '', '', '', '', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
