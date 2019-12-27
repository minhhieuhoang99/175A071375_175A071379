-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2019 lúc 09:31 AM
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
-- Cơ sở dữ liệu: `test`
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
  `MaTK` int(10) DEFAULT NULL
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
  `MaGV` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
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
  `MaGV` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `MaLHP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLopHP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaTGH` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopmonhoc`
--

CREATE TABLE `lopmonhoc` (
  `MaLTM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLopMon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MaMon` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
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

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`TenMon`, `MaMon`, `MaNganh`) VALUES
('Công Nghệ Web', 'CNW', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenNganh` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`) VALUES
('CNTT', 'Công Nghệ Thông Tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `MaQL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenQL` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaTK` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenTaiKhoan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CapDo` tinyint(4) DEFAULT NULL,
  `NgayTao` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `MaTK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenTaiKhoan`, `MatKhau`, `email`, `CapDo`, `NgayTao`, `MaTK`) VALUES
('quanly1', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly1@mail.com', 2, '0000-00-00 00:00:00', 1),
('quanly2', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly2@mail.com', 2, '0000-00-00 00:00:00', 2),
('quanly3', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly3@mail.com', 2, '0000-00-00 00:00:00', 3),
('quanly4', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly4@mail.com', 2, '0000-00-00 00:00:00', 4),
('quanly5', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly5@mail.com', 2, '0000-00-00 00:00:00', 5),
('quanly6', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly6@mail.com', 2, '0000-00-00 00:00:00', 6),
('quanly7', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly7@mail.com', 2, '0000-00-00 00:00:00', 7),
('quanly8', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly8@mail.com', 2, '0000-00-00 00:00:00', 8),
('quanly9', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly9@mail.com', 2, '0000-00-00 00:00:00', 9),
('quanly10', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly10@mail.com', 2, '0000-00-00 00:00:00', 10),
('quanly11', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly11@mail.com', 2, '0000-00-00 00:00:00', 11),
('quanly12', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly12@mail.com', 2, '0000-00-00 00:00:00', 12),
('quanly13', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly13@mail.com', 2, '0000-00-00 00:00:00', 13),
('quanly14', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly14@mail.com', 2, '0000-00-00 00:00:00', 14),
('quanly15', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly15@mail.com', 2, '0000-00-00 00:00:00', 15),
('quanly16', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly16@mail.com', 2, '0000-00-00 00:00:00', 16),
('quanly17', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly17@mail.com', 2, '0000-00-00 00:00:00', 17),
('quanly18', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly18@mail.com', 2, '0000-00-00 00:00:00', 18),
('quanly19', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly19@mail.com', 2, '0000-00-00 00:00:00', 19),
('quanly20', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly20@mail.com', 2, '0000-00-00 00:00:00', 20),
('quanly21', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly21@mail.com', 2, '0000-00-00 00:00:00', 21),
('quanly22', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly22@mail.com', 2, '0000-00-00 00:00:00', 22),
('admin1', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin1@mail.com', 1, '0000-00-00 00:00:00', 23),
('admin2', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin2@mail.com', 1, '0000-00-00 00:00:00', 24),
('admin3', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin3@mail.com', 1, '0000-00-00 00:00:00', 25),
('admin4', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin4@mail.com', 1, '0000-00-00 00:00:00', 26),
('admin5', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin5@mail.com', 1, '0000-00-00 00:00:00', 27),
('admin6', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin6@mail.com', 1, '0000-00-00 00:00:00', 28),
('admin7', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin7@mail.com', 1, '0000-00-00 00:00:00', 29),
('admin8', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin8@mail.com', 1, '0000-00-00 00:00:00', 30),
('admin9', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin9@mail.com', 1, '0000-00-00 00:00:00', 31),
('admin10', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin10@mail.com', 1, '0000-00-00 00:00:00', 32),
('admin11', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin11@mail.com', 1, '0000-00-00 00:00:00', 33),
('admin12', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin12@mail.com', 1, '0000-00-00 00:00:00', 34),
('admin13', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin13@mail.com', 1, '0000-00-00 00:00:00', 35),
('admin14', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin14@mail.com', 1, '0000-00-00 00:00:00', 36),
('admin15', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin15@mail.com', 1, '0000-00-00 00:00:00', 37),
('admin16', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin16@mail.com', 1, '0000-00-00 00:00:00', 38),
('admin17', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin17@mail.com', 1, '0000-00-00 00:00:00', 39),
('admin18', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin18@mail.com', 1, '0000-00-00 00:00:00', 40),
('admin19', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin19@mail.com', 1, '0000-00-00 00:00:00', 41),
('admin20', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin20@mail.com', 1, '0000-00-00 00:00:00', 42),
('admin21', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin21@mail.com', 1, '0000-00-00 00:00:00', 43),
('admin22', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin22@mail.com', 1, '0000-00-00 00:00:00', 44),
('admin23', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin23@mail.com', 1, '0000-00-00 00:00:00', 45),
('admin24', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin24@mail.com', 1, '0000-00-00 00:00:00', 46),
('admin25', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin25@mail.com', 1, '0000-00-00 00:00:00', 47),
('admin26', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin26@mail.com', 1, '0000-00-00 00:00:00', 48),
('admin27', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin27@mail.com', 1, '0000-00-00 00:00:00', 49),
('admin28', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin28@mail.com', 1, '0000-00-00 00:00:00', 50),
('admin29', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin29@mail.com', 1, '0000-00-00 00:00:00', 51),
('admin30', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin30@mail.com', 1, '0000-00-00 00:00:00', 52),
('admin31', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin31@mail.com', 1, '0000-00-00 00:00:00', 53),
('admin32', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin32@mail.com', 1, '0000-00-00 00:00:00', 54),
('admin33', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin33@mail.com', 1, '0000-00-00 00:00:00', 55),
('admin34', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin34@mail.com', 1, '0000-00-00 00:00:00', 56),
('admin35', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin35@mail.com', 1, '0000-00-00 00:00:00', 57),
('admin36', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin36@mail.com', 1, '0000-00-00 00:00:00', 58),
('admin37', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin37@mail.com', 1, '0000-00-00 00:00:00', 59),
('admin38', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin38@mail.com', 1, '0000-00-00 00:00:00', 60),
('giangvien1', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien1@mail.com', 3, '0000-00-00 00:00:00', 61),
('giangvien2', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien2@mail.com', 3, '0000-00-00 00:00:00', 62),
('giangvien3', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien3@mail.com', 3, '0000-00-00 00:00:00', 63),
('giangvien4', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien4@mail.com', 3, '0000-00-00 00:00:00', 64),
('giangvien5', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien5@mail.com', 3, '0000-00-00 00:00:00', 65),
('giangvien6', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien6@mail.com', 3, '0000-00-00 00:00:00', 66),
('giangvien7', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien7@mail.com', 3, '0000-00-00 00:00:00', 67),
('giangvien8', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien8@mail.com', 3, '0000-00-00 00:00:00', 68),
('giangvien9', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien9@mail.com', 3, '0000-00-00 00:00:00', 69),
('giangvien10', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien10@mail.com', 3, '0000-00-00 00:00:00', 70),
('giangvien11', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien11@mail.com', 3, '0000-00-00 00:00:00', 71),
('giangvien12', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien12@mail.com', 3, '0000-00-00 00:00:00', 72),
('giangvien13', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien13@mail.com', 3, '0000-00-00 00:00:00', 73),
('giangvien14', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien14@mail.com', 3, '0000-00-00 00:00:00', 74),
('giangvien15', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien15@mail.com', 3, '0000-00-00 00:00:00', 75),
('giangvien16', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien16@mail.com', 3, '0000-00-00 00:00:00', 76),
('giangvien17', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien17@mail.com', 3, '0000-00-00 00:00:00', 77),
('giangvien18', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien18@mail.com', 3, '0000-00-00 00:00:00', 78),
('giangvien19', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien19@mail.com', 3, '0000-00-00 00:00:00', 79),
('giangvien20', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien20@mail.com', 3, '0000-00-00 00:00:00', 80),
('giangvien21', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien21@mail.com', 3, '0000-00-00 00:00:00', 81),
('giangvien22', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien22@mail.com', 3, '0000-00-00 00:00:00', 82),
('giangvien23', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien23@mail.com', 3, '0000-00-00 00:00:00', 83),
('giangvien24', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien24@mail.com', 3, '0000-00-00 00:00:00', 84),
('giangvien25', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien25@mail.com', 3, '0000-00-00 00:00:00', 85),
('giangvien26', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien26@mail.com', 3, '0000-00-00 00:00:00', 86),
('giangvien27', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien27@mail.com', 3, '0000-00-00 00:00:00', 87),
('giangvien28', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien28@mail.com', 3, '0000-00-00 00:00:00', 88),
('giangvien29', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien29@mail.com', 3, '0000-00-00 00:00:00', 89),
('giangvien30', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'giangvien30@mail.com', 3, '0000-00-00 00:00:00', 90),
('quanly', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'quanly@mail.com', 2, '2019-12-26 19:46:56', 99),
('admin', '$2y$10$rCpnHGtra.axVLHRJS1fMOdyofMUPeIamkwIHR10H7u1tVB1CptkW', 'admin@mail.com', 1, '0000-00-00 00:00:00', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `NamHoc` date DEFAULT NULL,
  `HocKy` tinyint(4) DEFAULT NULL,
  `GiaiDoan` tinyint(4) DEFAULT NULL,
  `MaTGH` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`NamHoc`, `HocKy`, `GiaiDoan`, `MaTGH`) VALUES
('0000-00-00', 1, 1, '1');

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
  ADD KEY `MaTK` (`MaTK`),
  

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
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD PRIMARY KEY (`MaLTTT`),
  ADD KEY `MaGV` (`MaGV`);

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
  ADD KEY `MaMon` (`MaMon`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),


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
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD CONSTRAINT `lichtrinhthucte_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`MaTGH`) REFERENCES `thoigianhoc` (`MaTGH`);

--
-- Các ràng buộc cho bảng `lopmonhoc`
--
ALTER TABLE `lopmonhoc`
  ADD CONSTRAINT `lopmonhoc_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`);

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
