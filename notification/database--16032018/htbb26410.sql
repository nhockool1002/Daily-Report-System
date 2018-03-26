-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 26, 2018 lúc 12:29 PM
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
  `tongchiphi` int(10) NOT NULL,
  `sonhapchuot` int(10) NOT NULL,
  `uniquevisitor` int(10) NOT NULL,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL,
  `denkham` int(11) DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangnhap`
--

INSERT INTO `bangnhap` (`id`, `ngaythang`, `hienthi`, `tongchiphi`, `sonhapchuot`, `uniquevisitor`, `tongsokhachtuvan`, `hieuqua`, `khonghieuqua`, `dathen`, `denkham`, `ghichu`) VALUES
(10, '2018-02-28 17:00:00', 30016, 77591208, 3777, 1124, 241, 42, 111, 41, NULL, '46'),
(11, '2018-03-01 17:00:00', 29060, 69599351, 3542, 1690, 179, 38, 86, 35, NULL, '20'),
(12, '2018-03-02 17:00:00', 30260, 74008510, 3688, 897, 239, 42, 139, 39, NULL, '19'),
(13, '2018-03-03 17:00:00', 32284, 72073214, 3761, 2803, 193, 30, 96, 36, NULL, '31'),
(16, '2018-03-04 17:00:00', 32720, 90592599, 3999, 2254, 195, 32, 110, 33, NULL, '20'),
(17, '2018-03-05 17:00:00', 30819, 100501729, 3760, 870, 207, 42, 102, 42, NULL, '21'),
(18, '2018-03-06 17:00:00', 32284, 100057277, 3925, 908, 203, 35, 96, 43, NULL, '29'),
(19, '2018-03-07 17:00:00', 28509, 81569959, 3260, 777, 146, 30, 74, 27, NULL, '15'),
(20, '2018-03-09 17:00:00', 34317, 109594645, 4008, 968, 228, 45, 107, 52, NULL, '24'),
(21, '2018-03-08 17:00:00', 34916, 101331082, 4079, 1070, 246, 35, 126, 51, NULL, '34');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangnhapseo`
--

CREATE TABLE `bangnhapseo` (
  `id` int(10) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongsokhachtuvan` int(10) NOT NULL,
  `hieuqua` int(10) NOT NULL,
  `khonghieuqua` int(10) NOT NULL,
  `dathen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(10, 'gdn'),
(11, 'seo');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo`
--

CREATE TABLE `seo` (
  `id` int(10) NOT NULL,
  `ndseo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idnguonden` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo`
--

INSERT INTO `seo` (`id`, `ndseo`, `idnguonden`) VALUES
(1, 'mayo.com.vn', 11),
(2, 'tribenhphukhoa.com', 11);

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
-- Chỉ mục cho bảng `bangnhapseo`
--
ALTER TABLE `bangnhapseo`
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
-- Chỉ mục cho bảng `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnguonden` (`idnguonden`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangnhap`
--
ALTER TABLE `bangnhap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
-- AUTO_INCREMENT cho bảng `bangnhapseo`
--
ALTER TABLE `bangnhapseo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `quyenhan`
--
ALTER TABLE `quyenhan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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

--
-- Các ràng buộc cho bảng `seo`
--
ALTER TABLE `seo`
  ADD CONSTRAINT `seo_ibfk_1` FOREIGN KEY (`idnguonden`) REFERENCES `nguonden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
