-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 08:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dondh`
--

CREATE TABLE `dondh` (
  `Dondh_id` int(11) NOT NULL,
  `Ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Tinh_trang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Nhanvien_gh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_lap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tong_gia` int(15) NOT NULL,
  `Noi_nhan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ghi_chu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondh`
--

INSERT INTO `dondh` (`Dondh_id`, `Ten_kh`, `Tinh_trang`, `Nhanvien_gh`, `Ngay_lap`, `Tong_gia`, `Noi_nhan`, `Ghi_chu`) VALUES
(1, 'Trần văn luyện', 'Chưa chuyển hàng', 'Lưu Bích Hạnh', '2017-05-08 16:00:00', 200000000, 'Hải Dương', 'Đi bằng máy bay'),
(2, 'Vũ Đức Hiển', 'Đã chuyển hàng', 'Bùi Thu Huyền', '2017-05-01 16:00:00', 150000000, 'Hải Phòng', 'Chuyển bằng tàu thủy'),
(3, 'abc', 'Đã chuyển hàng', '1', '2017-05-14 17:29:09', 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `Khachhang_id` int(11) NOT NULL,
  `Ten_kh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_giaohang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`Khachhang_id`, `Ten_kh`, `Diachi_email`, `Sdt`, `Diachi_giaohang`, `Ghichu`) VALUES
(1, 'Nguyễn Đắc Huy', 'Hà Nội', '0966599493', 'Hà Nội', 'Đi bằng ô tô'),
(2, 'Trần Ngọc Đức', 'Nam ĐỊnh', '01524855', 'Nam ĐỊnh', 'ĐI bằng xe máy');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `Ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_sp` int(11) NOT NULL,
  `Soluong_sp` int(11) NOT NULL,
  `Kichthuoc_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mausac_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Chatlieu_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Loai_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Baohanh_sp` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_sp`, `Soluong_sp`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `Loai_sp`, `Baohanh_sp`) VALUES
(1, 'tủ áo', 'giuong1.png', 12000000, 5, '12x15x20', 'màu nâu', 'gỗ gụ', 'phòng ngủ', '12 năm'),
(2, 'Giường ngủ', 'giuong2.png', 20000000, 3, '12x52x26', 'màu đỏ', 'gỗ hương', 'giường', '12 năm'),
(3, 'Bàn phấn', 'giuong3.png', 50000000, 10, '10x25x32', 'màu đen', 'trắc', '', '52'),
(4, 'huy', 'slide5.jpg', 10000000, 52, '5x2x3', 'đỏ', 'hương', 'giường', '65');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dondh`
--
ALTER TABLE `dondh`
  ADD PRIMARY KEY (`Dondh_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Khachhang_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
