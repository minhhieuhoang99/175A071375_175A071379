-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`0
--


Create Table TaiKhoan(
TenTaiKhoan varchar(30) ,
 MatKhau varchar(30),
 CapDo tinyint,
 NgayTao datetime,
 MaTK varchar(10)  Primary Key
);
Create Table GiangVien(
 MaGV varchar(10) Primary Key,
 HoTenGV varchar(30),
 NgaySinh date,
 DiaChi varchar(30),
 MaTK varchar(10) ,foreign key (MaTK) references TaiKhoan(MaTK)
 );
Create Table Nganh(
 MaNganh varchar(10) Primary Key,
 TenNganh varchar(30)
 );
Create Table Mon(
TenMon varchar(30) ,
MaMon varchar(10) Primary Key,
MaNganh varchar(10) ,foreign key (MaNganh) references Nganh(MaNganh)
);
Create Table GV_Mon(
MaGV varchar(10) ,foreign key (MaGV) references GiangVien(MaGV),
MaMon varchar(10),foreign key (MaMon) references Mon(MaMon) ,
Primary Key(MaGV,MaMon)
);
Create Table QuanLy(
 MaQL varchar(10) Primary Key,
 HoTenQL varchar(30),
 NgaySinh date,
 DiaChi varchar(30),
 MaTK varchar(10) ,foreign key (MaTK) references TaiKhoan(MaTK)
);
Create Table ThoiGianHoc(
NamHoc date,
HocKy tinyint,
GiaiDoan tinyint,
MaTGH varchar(10) Primary Key
);
Create Table KeHoachGiangDay (
MaKHGD varchar(10) Primary Key,
BaiHocDK varchar(50),
DiaDiemDK varchar(30),
ThoiGianDK Datetime,
MaGV varchar(10) , foreign key (MaGV) references GiangVien(MaGV)
);
Create Table LichTrinhThucTe (
MaLTTT varchar(10) Primary Key,
BaiHocTT varchar(50),
DiaDiemTT varchar(30),
ThoiGianTT Datetime,
MaGV varchar(10) ,foreign key (MaGV) references GiangVien(MaGV)
);
Create Table LopMonHoc(
MaLTM varchar(10) Primary Key,
MaMon varchar(10) ,foreign key (MaMon) references Mon(MaMon)
);
Create Table LopHocPhan(
MaLHP varchar(10) Primary Key,
MaTGH varchar(10) ,foreign key (MaTGH) references ThoiGianHoc(MaTGH)
);
Create Table CTLopHP(
MaLTM varchar(10) ,foreign key (MaLTM) references LopMonHoc(MaLTM),
MaLHP varchar(10) ,foreign key (MaLHP) references LopHocPhan(MaLHP)
);
	