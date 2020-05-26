-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2020 lúc 09:09 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `buoi3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `chitietsp` text NOT NULL,
  `giasp` int(100) NOT NULL,
  `hinhanhsp` varchar(100) NOT NULL,
  `idtv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `chitietsp`, `giasp`, `hinhanhsp`, `idtv`) VALUES
(3, 'Thanh Phucs ne', 'huhuh', 99999, 'products/A-Guide-on-Grooming-Brushes-for-Dogs.jpg', 7),
(5, 'Bua yeu 2', 'qweqw cung la bua', 999, 'products/A-Guide-on-Grooming-Brushes-for-Dogs.jpg', 45),
(7, 'Bua yeu', 'đâs', 20, 'products/FB_IMG_1569024367304.jpg', 47),
(11, 'con heo', 'sa', 20, 'products/hp.jpg', 48),
(14, '7895áda', 'acc da ádasd', 224, 'products/tokyo-ghoul-tokiyskiy-gul-311.jpg', 49),
(15, 'con heo', 'kjkln', 8, 'products/41F9mSK8IjL.jpg', 45),
(16, 'nvjq', 'kjhkh', 33, 'products/d98e82bef1b534c66c6f8395bc4eccff.jfif', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hinhanh` varchar(500) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `nghenghiep` varchar(50) NOT NULL,
  `sothich` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `tendangnhap`, `matkhau`, `hinhanh`, `gioitinh`, `nghenghiep`, `sothich`) VALUES
(5, 'thansdasc', '1234', 'uploads/FB_IMG_1569024367304.jpg', 'nam', 'hocsinh', 'Thể Thao'),
(7, 'lengan', 'phuc', 'uploads/a.jpg', 'nu', 'hocsinh', 'Du lịch'),
(8, 'khanhthuan', '1234', 'uploads/b.jpg', 'nam', 'giaovien', 'Array'),
(40, 'thanhphucln', '1234', 'uploads/12c620e32e2bd5392cbaa857bad1f977.jpg', 'nam', 'hocsinh', ' Thể Thao'),
(43, 'thanhphuc99', '1234', 'uploads/code.png', 'nam', 'giaovien', ' Thể Thao , Du lịch'),
(45, 'thanhphuc123', '1234', 'uploads/20952382_1897266690536503_6045578974958977024_n.gif', 'nam', 'hocsinh', ' Thể Thao'),
(47, 'LeNgan99', '1234', 'uploads/FB_IMG_1569024367304.jpg', 'nam', 'khac', ' Thể Thao , Du lịch , Âm Nhạc'),
(48, 'congacongnhiep', 'ga', 'uploads/tokyo-ghoul-tokiyskiy-gul-311.jpg', 'nam', 'giaovien', ''),
(49, 'KimNgan99', 'phuc', 'uploads/FB_IMG_1569024367304.jpg', 'nu', 'khac', ' Thể Thao , Du lịch , Âm Nhạc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idtv` (`idtv`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idtv`) REFERENCES `thanhvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
