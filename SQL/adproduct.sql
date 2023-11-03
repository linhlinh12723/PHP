-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 06:09 AM
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
-- Cấu trúc bảng cho bảng `adproduct`
--

CREATE TABLE `adproduct` (
  `Ma_loaisp` varchar(50) NOT NULL,
  `ma_sp` varchar(50) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `anhsp` varchar(255) NOT NULL,
  `motasp` text NOT NULL,
  `gianhap` int(11) NOT NULL,
  `giaxuat` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `adproduct`
--

INSERT INTO `adproduct` (`Ma_loaisp`, `ma_sp`, `tensp`, `anhsp`, `motasp`, `gianhap`, `giaxuat`, `khuyenmai`, `soluong`, `ngay_nhap`) VALUES
('SP3', '3', 'Đồng hồ', '3h1.jpg', 'dây đeo màu trắng', 5000000, 12000000, 9000000, 5, '2023-09-30'),
('SP001', 'SP1', 'Tivi soni', 'SP1h5.jpg', 'màu đen', 1000000, 2000000, 0, 127, '2023-11-01'),
('SP1', 'SP2', 'Tai nghe 5', 'SP2h4.jpg', 'màu trắng', 2000000, 3000000, 0, 30, '2023-12-01'),
('SP1', 'SP4', 'Hoa tulip', 'SP4hoa.jpg', 'màu hồng', 20000, 30000, 25000, 50, '2023-09-22'),
('SP1', 'SP5', 'Hoa Hướng Dương', 'SP5huongduong.jpg', 'màu vàng', 3000, 4000, 3500, 70, '2023-09-22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adproduct`
--
ALTER TABLE `adproduct`
  ADD PRIMARY KEY (`ma_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
