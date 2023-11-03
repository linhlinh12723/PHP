-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 06:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `makh` varchar(50) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi_lienhe` varchar(300) NOT NULL,
  `diachi_giaohang` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`makh`, `tenkh`, `phone`, `email`, `diachi_lienhe`, `diachi_giaohang`) VALUES
('kh42', 'linh linh', 5799999, 'kaka@gmail.com', 'hà nội', ''),
('kh5343', 'Đỗ Thị Linh Linh', 12345678, 'linhlinh12723@gmail.com', 'Hà Nội', 'núi'),
('kh5657', 'linhlinh', 2147483647, 'pro@gmail.com', 'Hà Nội', 'TP Hồ Chí Minh'),
('kh7123', 'php căn bản', 24567889, 'php.@gmail.com', 'ULSA', 'ULSA'),
('kh7539', 'linh', 91234567, 'donal@gmail.com', 'Ninh Bình', 'Huế'),
('kh8654', 'Linh Linh', 2147483647, 'linh@gmail.com', 'Hà Nội', 'Canada');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
