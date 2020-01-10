-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctlophp`
--

CREATE TABLE `ctlophp` (
  `MaLTM` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaLHP` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `ctlophp`
--

INSERT INTO `ctlophp` (`MaLTM`, `MaLHP`) VALUES
('CSE1', '59TH1'),
('PTTK1', '59TH1'),
('LTNC1', '59TH1'),
('CSE2', '59PM1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `HoTenGV` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `HoTenGV`, `NgaySinh`, `DiaChi`, `MaTK`) VALUES
('gv1', 'Giảng Viên 1', '1985-05-24', 'Hà Nội', '3'),
('gv2', 'Giảng Viên 2', '1990-11-18', 'Hà Nội', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gv_mon`
--

CREATE TABLE `gv_mon` (
  `MaGV` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `gv_mon`
--

INSERT INTO `gv_mon` (`MaGV`, `MaMon`) VALUES
('gv1', 'CSE'),
('gv1', 'PTTK'),
('gv2', 'LTNC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachgiangday`
--

CREATE TABLE `kehoachgiangday` (
  `MaKHGD` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `BaiHocDK` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `DiaDiemDK` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `ThoiGianDK` datetime DEFAULT NULL,
  `MaLTM` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `kehoachgiangday`
--

INSERT INTO `kehoachgiangday` (`MaKHGD`, `BaiHocDK`, `DiaDiemDK`, `ThoiGianDK`, `MaLTM`) VALUES
('1', 'Bài Mở Đầu', '305B5', '0000-00-00 00:00:00', 'CSE1'),
('2', 'Bài Mở Đầu', '305B5', '0000-00-00 00:00:00', 'PTTK1'),
('3', 'Bài Mở Đầu', '305B5', '0000-00-00 00:00:00', 'LTNC1'),
('4', 'Bài Mở Đầu', '304B5', '0000-00-00 00:00:00', 'CSE2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinhthucte`
--

CREATE TABLE `lichtrinhthucte` (
  `MaLTTT` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `BaiHocTT` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `DiaDiemTT` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `ThoiGianTT` datetime DEFAULT NULL,
  `MaLTM` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinhthucte`
--

INSERT INTO `lichtrinhthucte` (`MaLTTT`, `BaiHocTT`, `DiaDiemTT`, `ThoiGianTT`, `MaLTM`) VALUES
('1', 'Bài Mở Đầu', '305B5', '0000-00-00 00:00:00', 'CSE1'),
('2', 'Bài Mở Đầu', '305B5', '0000-00-00 00:00:00', 'PTTK1'),
('3', 'Bài Mở Đầu aaaaaaaaaaaaaaaaaaa', '305B5', '2020-01-16 00:00:00', 'LTNC1'),
('4', 'Bài Mở Đầu', '304B5', '0000-00-00 00:00:00', 'CSE2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `TenLopHP` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaLHP` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `MaTGH` varchar(20) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `lophocphan`
--

INSERT INTO `lophocphan` (`TenLopHP`, `MaLHP`, `MaTGH`) VALUES
('Hệ Thống Thông Tin 2', '59HT2', 'HKII-19/20-GD2'),
('Phần Mềm 1', '59PM1', 'HKII-19/20-GD2'),
('Công Nghệ Thông Tin 1', '59TH1', 'HKII-19/20-GD2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopmonhoc`
--

CREATE TABLE `lopmonhoc` (
  `TenLopMon` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaLTM` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaGV` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `lopmonhoc`
--

INSERT INTO `lopmonhoc` (`TenLopMon`, `MaLTM`, `MaMon`, `MaGV`) VALUES
('Công Nghệ Web 1', 'CSE1', 'CSE', 'gv1'),
('Công Nghệ Web 2', 'CSE2', 'CSE', 'gv1'),
('Lập Trình Nâng Cao', 'LTNC1', 'LTNC', 'gv1'),
('Phân Tích Thiết Kế 1', 'PTTK1', 'PTTK', 'gv2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `TenMon` varchar(50) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `MaNganh` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`TenMon`, `MaMon`, `MaNganh`) VALUES
('Công Nghệ Web ', 'CSE', 'CNTT'),
('Lập Trình Nâng Cao', 'LTNC', 'CNTT'),
('Phân Tích Thiết Kế Hệ Thống', 'PTTK', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `TenNganh` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`) VALUES
('CNTT', 'Công Nghệ Thông Tin ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `MaQL` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `HoTenQL` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`MaQL`, `HoTenQL`, `NgaySinh`, `DiaChi`, `MaTK`) VALUES
('ql1', 'Họ Quản Tên Lý', '1980-01-16', 'Hà Nội', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenTaiKhoan` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `MatKhau` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `CapDo` tinyint(4) DEFAULT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `MaTK` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenTaiKhoan`, `MatKhau`, `email`, `CapDo`, `NgayTao`, `MaTK`) VALUES
('admin', '$2y$10$jomuW4plcEjBUz.oiXqglercbt/6FES6IT6/b27jgvSs16kR5Bjf6', 'mail@gmail.com', 2, '2020-01-10 00:00:00', '1'),
('quanly', '$2y$10$jomuW4plcEjBUz.oiXqglercbt/6FES6IT6/b27jgvSs16kR5Bjf6', 'mail1@gmail.com', 2, '2020-01-10 00:00:00', '2'),
('giangvien', '$2y$10$jomuW4plcEjBUz.oiXqglercbt/6FES6IT6/b27jgvSs16kR5Bjf6', 'mail2@gmail.com', 3, '2020-01-10 00:00:00', '3'),
('giangvien1', '$2y$10$jomuW4plcEjBUz.oiXqglercbt/6FES6IT6/b27jgvSs16kR5Bjf6', 'mail3@gmail.com', 3, '2020-01-10 00:00:00', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `NamHoc` date DEFAULT NULL,
  `HocKy` tinyint(4) DEFAULT NULL,
  `GiaiDoan` varchar(3) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `MaTGH` varchar(20) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`NamHoc`, `HocKy`, `GiaiDoan`, `NgayBatDau`, `NgayKetThuc`, `MaTGH`) VALUES
('0000-00-00', 1, '1', '2019-09-03', '2019-01-27', 'HKI-19/20-GD1'),
('0000-00-00', 1, '1', '2020-09-03', '2020-01-27', 'HKI-20/21-GD1'),
('0000-00-00', 2, '2', '2019-02-03', '2019-06-27', 'HKII-19/20-GD2'),
('0000-00-00', 3, '3', '2019-07-03', '2019-08-27', 'HKIII-19/20-GD3');

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
  ADD KEY `MaLTM` (`MaLTM`);

--
-- Chỉ mục cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD PRIMARY KEY (`MaLTTT`),
  ADD KEY `MaLTM` (`MaLTM`);

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
  ADD PRIMARY KEY (`MaNganh`);

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
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`MaLTM`) REFERENCES `lopmonhoc` (`MaLTM`);

--
-- Các ràng buộc cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD CONSTRAINT `lichtrinhthucte_ibfk_1` FOREIGN KEY (`MaLTM`) REFERENCES `lopmonhoc` (`MaLTM`);

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
-- Các ràng buộc cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
