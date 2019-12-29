-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2019 lúc 05:14 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctlophp`
--

CREATE TABLE `ctlophp` (
  `MaLTM` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaLHP` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenGV` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gv_mon`
--

CREATE TABLE `gv_mon` (
  `MaGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachgiangday`
--

CREATE TABLE `kehoachgiangday` (
  `MaKHGD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `BaiHocDK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaDiemDK` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThoiGianDK` datetime DEFAULT NULL,
  `MaLHP` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinhthucte`
--

CREATE TABLE `lichtrinhthucte` (
  `MaLTTT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `BaiHocTT` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaDiemTT` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThoiGianTT` datetime DEFAULT NULL,
  `MaLHP` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `MaLHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaTGH` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopmonhoc`
--

CREATE TABLE `lopmonhoc` (
  `MaLTM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `TenMon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaNganh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenNganh` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKhoa` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `MaQL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenQL` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenTaiKhoan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CapDo` tinyint(4) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `NamHoc` date DEFAULT NULL,
  `HocKy` tinyint(4) DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `MaTGH` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctlophp`
--
ALTER TABLE `ctlophp`
  ADD KEY `MaLTM` (`MaLTM`),
  ADD KEY `MaLHP` (`MaLHP`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Chỉ mục cho bảng `gv_mon`
--
ALTER TABLE `gv_mon`
  ADD PRIMARY KEY (`MaGV`,`MaMon`),
  ADD KEY `MaMon` (`MaMon`);

--
-- Chỉ mục cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD PRIMARY KEY (`MaKHGD`),
  ADD KEY `MaLHP` (`MaLHP`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD PRIMARY KEY (`MaLTTT`),
  ADD KEY `MaLHP` (`MaLHP`);

--
-- Chỉ mục cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`MaLHP`),
  ADD KEY `MaTGH` (`MaTGH`);

--
-- Chỉ mục cho bảng `lopmonhoc`
--
ALTER TABLE `lopmonhoc`
  ADD PRIMARY KEY (`MaLTM`),
  ADD KEY `MaMon` (`MaMon`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`MaMon`),
  ADD KEY `MaNganh` (`MaNganh`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`MaQL`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- Chỉ mục cho bảng `thoigianhoc`
--
ALTER TABLE `thoigianhoc`
  ADD PRIMARY KEY (`MaTGH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctlophp`
--
ALTER TABLE `ctlophp`
  ADD CONSTRAINT `ctlophp_ibfk_1` FOREIGN KEY (`MaLTM`) REFERENCES `lopmonhoc` (`MaLTM`),
  ADD CONSTRAINT `ctlophp_ibfk_2` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`MaLHP`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Các ràng buộc cho bảng `gv_mon`
--
ALTER TABLE `gv_mon`
  ADD CONSTRAINT `gv_mon_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `gv_mon_ibfk_2` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`);

--
-- Các ràng buộc cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`MaLHP`);

--
-- Các ràng buộc cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD CONSTRAINT `lichtrinhthucte_ibfk_1` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`MaLHP`);

--
-- Các ràng buộc cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`MaTGH`) REFERENCES `thoigianhoc` (`MaTGH`);

--
-- Các ràng buộc cho bảng `lopmonhoc`
--
ALTER TABLE `lopmonhoc`
  ADD CONSTRAINT `lopmonhoc_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`),
  ADD CONSTRAINT `lopmonhoc_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
