-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 06:14 AM
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
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `mahd` varchar(40) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`mahd`, `masp`, `tensp`, `soluong`, `dongia`, `khuyenmai`) VALUES
('hd987', 'AA', 'Đồng hồ thông minh', 2, 23000000, 10000000),
('hd2264', 'AA', 'Đồng hồ thông minh', 6, 23000000, 10000000),
('hd2180', 'AA', 'Đồng hồ thông minh', 6, 23000000, 10000000),
('hd4079', 'SP1', 'Tivi', 1, 2000000, 1500000),
('hd4079', 'SP2', 'Tai nghe', 1, 3000000, 2500000),
('hd1503', 'SP2', 'Tai nghe', 2, 3000000, 2500000),
('hd7082', 'SP2', 'Tai nghe', 2, 3000000, 2500000),
('hd3464', 'SP4', 'Hoa tulip', 2, 30000, 25000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
