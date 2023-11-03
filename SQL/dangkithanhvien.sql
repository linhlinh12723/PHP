-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 06:13 AM
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
-- Cấu trúc bảng cho bảng `dangkithanhvien`
--

CREATE TABLE `dangkithanhvien` (
  `Fullname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gioitinh` varchar(255) NOT NULL,
  `Quoctich` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Hinhanh` varchar(255) NOT NULL,
  `Sothich` varchar(255) NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangkithanhvien`
--

INSERT INTO `dangkithanhvien` (`Fullname`, `Username`, `Password`, `Email`, `Gioitinh`, `Quoctich`, `Diachi`, `Hinhanh`, `Sothich`, `quyen`) VALUES
('Đỗ Thị Linh Linh', 'Linh Linh', '1234', 'linhlinh@gmail.com', 'Nữ', 'Việt Nam', 'Hà Nội', '', 'code=))', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangkithanhvien`
--
ALTER TABLE `dangkithanhvien`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
