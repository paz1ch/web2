-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2024 lúc 06:00 PM
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
  `xuly` varchar(50) NOT NULL,
  `time_shipping` date NOT NULL,
  `time_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `username`, `hoten`, `diachi`, `sdt`, `payment`, `tensp`, `soluong`, `gia`, `tong`, `tongtien`, `xuly`, `time_shipping`, `time_order`) VALUES
(14, '1', 'Truong nhat', 'thủ đức, đồng nai, Vietnam', '03452951211', 'Thanh toán khi nhận hàng', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/BÀN KÍNH/BÀN VĂN PHÒNG', '1/1/1/1', '90/200/200/230', '90/200/200/230', '720', '3', '2000-10-30', '0000-00-00'),
(15, '1', 'Truong nhat', 'tan phu, đồng nai, Vietnam', '0345295121', 'Ví điện tử', 'SOFA LOẠI TỐT/GƯƠNG MẶT TRỜI/BÀN KÍNH', '1/9/5', '200/100/200', '200/900/1000', '2100', '4', '2000-10-30', '0000-00-00'),
(16, '1', 'Truong nhat', 'tan phu, đồng nai, Vietnam', '0345295121', 'Ví điện tử', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY/GƯƠNG MẶT TRỜI', '1/1/1/1', '90/200/1000/100', '90/200/1000/100', '1390', '4', '2024-05-10', '0000-00-00'),
(17, 'test2', 'nhat truong', 'tân phú, hồ chí minh, vietnam', '034623612', 'Thanh toán khi nhận hàng', 'BÀN GỖ SỒI/SOFA LOẠI TỐT/GƯỜNG LUXURY', '1/1/1', '90/200/1000', '90/200/1000', '1290', '2', '2024-05-10', '0000-00-00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
