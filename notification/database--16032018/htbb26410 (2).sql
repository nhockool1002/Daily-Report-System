-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2018 lúc 06:40 AM
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
(5, '2018-03-15 17:00:00', 30016, 77591200, 3777, 1124, 240, 42, 111, 41, 0, NULL),
(6, '2018-03-18 08:46:47', 32, 321, 321, 43251, 32, 32, 43, 321, 321, NULL),
(7, '2018-03-16 17:00:00', 66, 55, 99, 44, 88, 33, 77, 11, 5, NULL),
(8, '2018-03-19 17:00:00', 3232, 65, 2, 75, 234, 54, 321, 34, 54, NULL),
(9, '2018-03-18 17:00:00', 41, 341, 23, 34, 321, 43, 321, 41, 41, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapcc`
--

CREATE TABLE `bangnhapcc` (
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
  `ghichu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhapcc`
--

INSERT INTO `bangnhapcc` (`id`, `ngaythang`, `hienthi`, `tongchiphi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `ghichu`) VALUES
(5, '2018-03-15 17:00:00', 30016, 77591200, 3777, 1124, 240, 42, 111, 41, '0'),
(6, '2018-03-18 08:46:47', 32, 321, 321, 43251, 32, 32, 43, 321, '321'),
(7, '2018-03-16 17:00:00', 66, 5555560, 99, 44, 88, 33, 77, 22, '5'),
(8, '2018-03-19 17:00:00', 3232, 65, 2, 75, 234, 54, 321, 34, '54'),
(9, '2018-03-18 17:00:00', 41, 341, 23, 34, 321, 43, 321, 41, '41'),
(10, '2018-03-20 17:00:00', 321, 32, 31231, 321, 12, 321, 32, 21, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapdt`
--

CREATE TABLE `bangnhapdt` (
  `id` int(10) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL,
  `adwords` int(10) NOT NULL,
  `facebook` int(10) NOT NULL,
  `seo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhapdt`
--

INSERT INTO `bangnhapdt` (`id`, `ngaythang`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `adwords`, `facebook`, `seo`) VALUES
(1, '2018-03-15 17:00:00', 99, 99, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapfb`
--

CREATE TABLE `bangnhapfb` (
  `id` int(10) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongchiphi` float NOT NULL,
  `hienthi` int(10) NOT NULL,
  `sonhapchuot` int(10) NOT NULL,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL,
  `giathanh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhapfb`
--

INSERT INTO `bangnhapfb` (`id`, `ngaythang`, `tongchiphi`, `hienthi`, `sonhapchuot`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `giathanh`) VALUES
(1, '2018-03-19 17:00:00', 12, 22, 22, 22, 51, 22, 75, 54),
(2, '2018-03-17 17:00:00', 99, 99, 99, 99, 99, 99, 99, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapgdn`
--

CREATE TABLE `bangnhapgdn` (
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
-- Đang đổ dữ liệu cho bảng `bangnhapgdn`
--

INSERT INTO `bangnhapgdn` (`id`, `ngaythang`, `hienthi`, `tongchiphi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `denkham`, `ghichu`) VALUES
(10, '2018-03-18 17:00:00', 123, 4141, 321, 3232, 141, 54, 3213, 23, 3231, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapzl`
--

CREATE TABLE `bangnhapzl` (
  `id` int(10) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhapzl`
--

INSERT INTO `bangnhapzl` (`id`, `ngaythang`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`) VALUES
(1, '2018-03-19 17:00:00', 99, 98, 99, 99);

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
(8, 'VINHVLK', 5, 7),
(9, 'TAODIENMES', 6, 9),
(10, 'YTHT2', 8, 7),
(11, 'TRET', 9, 10);

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

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `idr`) VALUES
(4, 'nhockool1002', '6ac66b5cb3d198e4587a747c13ac3c9d', 1),
(5, 'thanhvien1', '25f9e794323b453885f5181f1b624d0b', 1);

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
(9, 'coccoc.com'),
(10, 'gdn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyenhan`
--

CREATE TABLE `quyenhan` (
  `id` int(10) NOT NULL,
  `quyenhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quyenhan`
--

INSERT INTO `quyenhan` (`id`, `quyenhan`) VALUES
(1, 'Administrators');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhapcc`
--
ALTER TABLE `bangnhapcc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhapdt`
--
ALTER TABLE `bangnhapdt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhapfb`
--
ALTER TABLE `bangnhapfb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhapgdn`
--
ALTER TABLE `bangnhapgdn`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bangnhapzl`
--
ALTER TABLE `bangnhapzl`
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
  ADD KEY `idr` (`idr`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `bangnhapcc`
--
ALTER TABLE `bangnhapcc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `bangnhapdt`
--
ALTER TABLE `bangnhapdt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `bangnhapfb`
--
ALTER TABLE `bangnhapfb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `bangnhapgdn`
--
ALTER TABLE `bangnhapgdn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `bangnhapzl`
--
ALTER TABLE `bangnhapzl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `masokham`
--
ALTER TABLE `masokham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `nguonden`
--
ALTER TABLE `nguonden`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `quyenhan`
--
ALTER TABLE `quyenhan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
