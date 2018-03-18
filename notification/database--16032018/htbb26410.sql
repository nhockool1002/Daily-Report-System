-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2018 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htbb26410`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhap`
--

CREATE TABLE `bangnhap` (
  `id` int(10) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hienthi` int(11) NOT NULL,
  `tongchiphi` float NOT NULL,
  `sonhapchuot` int(10) NOT NULL,
  `uniquevisitor` int(10) NOT NULL,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL,
  `denkham` int(11) NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhap`
--

INSERT INTO `bangnhap` (`id`, `ngaythang`, `hienthi`, `tongchiphi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `denkham`, `ghichu`) VALUES
(5, '2018-03-16 17:00:00', 32, 432141, 123, 3213, 32, 321, 32, 3213, 123, NULL),
(6, '2018-03-17 17:00:00', 32, 321, 321, 43, 32, 32, 43, 321, 321, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `masokham`
--

CREATE TABLE `masokham` (
  `id` int(10) NOT NULL,
  `msk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idbangnhap` int(10) NOT NULL,
  `idnguonden` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `masokham`
--

INSERT INTO `masokham` (`id`, `msk`, `idbangnhap`, `idnguonden`) VALUES
(4, 'PHATIT', 5, 7),
(5, 'TUNGXL', 6, 8),
(6, 'NGA', 6, 8),
(7, 'NGAO', 6, 8),
(8, 'VINHVL', 5, 7),
(9, 'TAODIENMER', 6, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguonden`
--

CREATE TABLE `nguonden` (
  `id` int(10) NOT NULL,
  `nguonden` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguonden`
--

INSERT INTO `nguonden` (`id`, `nguonden`) VALUES
(7, 'zalo'),
(8, 'facebook'),
(9, 'coccoc.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyenhan`
--

CREATE TABLE `quyenhan` (
  `id` int(10) NOT NULL,
  `quyenhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `masokham`
--
ALTER TABLE `masokham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbangnhap` (`idbangnhap`),
  ADD KEY `idnguonden` (`idnguonden`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idr` (`idr`),
  ADD KEY `idr_2` (`idr`);

--
-- Chỉ mục cho bảng `nguonden`
--
ALTER TABLE `nguonden`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quyenhan`
--
ALTER TABLE `quyenhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `masokham`
--
ALTER TABLE `masokham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nguonden`
--
ALTER TABLE `nguonden`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `quyenhan`
--
ALTER TABLE `quyenhan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `masokham`
--
ALTER TABLE `masokham`
  ADD CONSTRAINT `masokham_ibfk_1` FOREIGN KEY (`idbangnhap`) REFERENCES `bangnhap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `masokham_ibfk_2` FOREIGN KEY (`idnguonden`) REFERENCES `nguonden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`idr`) REFERENCES `quyenhan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
