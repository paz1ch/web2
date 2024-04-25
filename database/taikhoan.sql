-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2024 lúc 01:46 PM
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
('1', '1', 'nhat', 'truong', '0123', '0@gmail.com', 'Nam', '2004-01-02', 0, 1),
('abc', '1', 'nhat', 'abc', '03131313213', 'x@gmail.com', 'Nam', '2000-01-02', 0, 1),
('admin', '1', '', '', '', '', '', '0000-00-00', 1, 1),
('test', '1', 'nhat', 'truong', '000', '01@gmail.com', '', '2004-12-03', 0, 1),
('test2', '1', 'phuc', 'dang', '0345295121', 'asd@gmail.com', 'Nữ', '0004-12-01', 0, 1),
('user', '1', 'nhat', 'truong do', '0345295121', 'huureongk4@gmail.com.vn', 'Nữ', '0001-12-31', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
