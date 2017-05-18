-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2017 lúc 10:53 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdanhmuc`
--

CREATE TABLE `chitietdanhmuc` (
  `chitiet_dm_id` int(11) NOT NULL,
  `danhmuc_id` int(2) NOT NULL,
  `ten_chitiet_dm` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdanhmuc`
--

INSERT INTO `chitietdanhmuc` (`chitiet_dm_id`, `danhmuc_id`, `ten_chitiet_dm`) VALUES
(1, 2, 'BỘ BÀN GHẾ'),
(2, 2, 'SẬP GỤ'),
(3, 2, 'ĐỒNG HỒ CÂY'),
(4, 2, 'KỆ TI VI'),
(5, 2, 'TỦ RƯỢU'),
(6, 3, 'TỦ QUẦN ÁO'),
(7, 3, 'GIƯỜNG'),
(8, 3, 'BÀN PHẤN'),
(9, 3, 'ĐỒ TRANG TRÍ PHÒNG NGỦ'),
(10, 4, 'BỘ BÀN ĂN'),
(11, 4, 'TỦ BẾP'),
(12, 5, 'BAN THỜ'),
(13, 5, 'SẬP THỜ'),
(14, 5, 'HOÀNH PHI CÂU ĐỐI'),
(15, 5, 'TỦ THỜ'),
(16, 5, 'ĐỒ THỜ KHÁC'),
(17, 6, 'BÀN GHẾ VĂN PHÒNG'),
(18, 6, 'TỦ TÀI LIỆU'),
(19, 6, 'QUẦY THU NGÂN'),
(20, 6, 'VÁCH NGĂN'),
(21, 7, 'TRANH GỖ'),
(22, 7, 'BÀN GHẾ GỐC CÂY'),
(23, 7, 'TƯỢNG GỖ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `tendanhmuc` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `tendanhmuc`) VALUES
(2, 'PHÒNG KHÁCH'),
(3, 'PHÒNG NGỦ'),
(4, 'PHÒNG ĂN'),
(5, 'PHÒNG THỜ'),
(6, 'NỘI THẤT VĂN PHÒNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondh`
--

CREATE TABLE `dondh` (
  `Dondh_id` int(11) NOT NULL,
  `Ten_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_lap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tong_gia` int(15) NOT NULL,
  `Ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Sodt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_giaohang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ghi_chu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tinh_trang` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondh`
--

INSERT INTO `dondh` (`Dondh_id`, `Ten_sp`, `Ngay_lap`, `Tong_gia`, `Ten_kh`, `Sodt`, `Diachi_giaohang`, `Ghi_chu`, `Tinh_trang`) VALUES
(1, '', '2017-05-08 16:00:00', 200000000, 'Trần văn luyện', '', '', 'Đi bằng máy bay', 'Chưa chuyển hàng'),
(2, '', '2017-05-01 16:00:00', 150000000, 'Vũ Đức Hiển', '', '', 'Chuyển bằng tàu thủy', 'Đã chuyển hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `hoadon_id` int(11) NOT NULL,
  `ngay_lap_hd` datetime NOT NULL,
  `ten_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat_hang` datetime NOT NULL,
  `ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `so_tien` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`hoadon_id`, `ngay_lap_hd`, `ten_sp`, `ngay_dat_hang`, `ten_kh`, `so_tien`) VALUES
(1, '2017-05-18 00:00:00', 'tủ thờ', '2017-05-16 00:00:00', 'Huyền trang', 50000000),
(2, '2017-05-17 00:00:00', 'tủ áo', '2017-05-14 00:00:00', 'Lan anh', 100000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
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
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Khachhang_id`, `Ten_kh`, `Diachi_email`, `Sdt`, `Diachi_giaohang`, `Ghichu`) VALUES
(8, 'Trần Ngọc hải', 'duc.94@gmail.com', '095685485', 'Nam ĐỊnh', ''),
(9, 'Nguyễn Đắc Huy', 'dac.huy.9x@gmail.com', '0123456789', 'ha noi', 'Chuyển máy bay'),
(10, 'Trần văn luyện', 'luyen@gmaul.com', '555', 'hưng yên', '555'),
(11, 'Nguyễn Đắc Huy hip', 'luyen@gmaul.com', '095685485', 'hưng yên', '555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nhanvien_id` int(11) NOT NULL,
  `ho_ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`nhanvien_id`, `ho_ten`, `dia_chi`, `sdt`, `tai_khoan`, `mat_khau`) VALUES
(1, 'Nguyễn thị hương', 'hải dương', '012522', 'huong', 'hd'),
(2, 'Nguyễn thùy trang', 'thái bình', '52222', 'trang', 'tb'),
(4, 'Nguyễn Đắc Huy', 'Hà Nội', '0966599493', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
  `maloai_sp` int(50) NOT NULL,
  `danhmuc_id` int(2) NOT NULL,
  `Baohanh_sp` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_sp`, `Soluong_sp`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `maloai_sp`, `danhmuc_id`, `Baohanh_sp`) VALUES
(6, 'tu', 'giuong2.png', 5000000, 2, '1x5x4', 'v', 'g', 2, 2, '24'),
(7, 'ban', 'giuong3.png', 300000, 5, '2x3x4', 'b', 'g', 3, 2, '18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdanhmuc`
--
ALTER TABLE `chitietdanhmuc`
  ADD PRIMARY KEY (`chitiet_dm_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Chỉ mục cho bảng `dondh`
--
ALTER TABLE `dondh`
  ADD PRIMARY KEY (`Dondh_id`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`hoadon_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Khachhang_id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nhanvien_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdanhmuc`
--
ALTER TABLE `chitietdanhmuc`
  MODIFY `chitiet_dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
