-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2017 lúc 11:41 CH
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
  `ten_chitiet_dm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdanhmuc`
--

INSERT INTO `chitietdanhmuc` (`chitiet_dm_id`, `danhmuc_id`, `ten_chitiet_dm`, `ma_sp`) VALUES
(1, 2, 'BỘ BÀN GHẾ', 'KBG'),
(2, 2, 'SẬP GỤ', 'KSG'),
(3, 2, 'ĐỒNG HỒ CÂY', 'KDH'),
(4, 2, 'KỆ TI VI', 'KTV'),
(5, 2, 'TỦ RƯỢU', 'KTR'),
(6, 3, 'TỦ QUẦN ÁO', 'NTA'),
(7, 3, 'GIƯỜNG', 'NG'),
(8, 3, 'BÀN PHẤN', 'KBP'),
(9, 3, 'ĐỒ TRANG TRÍ PHÒNG NGỦ', 'NTT'),
(10, 4, 'BỘ BÀN ĂN', 'ABA'),
(11, 4, 'TỦ BẾP', 'ATB'),
(12, 5, 'BAN THỜ', 'TBT'),
(13, 5, 'SẬP THỜ', 'TST'),
(14, 5, 'HOÀNH PHI CÂU ĐỐI', 'THP'),
(15, 5, 'TỦ THỜ', 'TTT'),
(16, 5, 'ĐỒ THỜ KHÁC', 'TDT'),
(17, 6, 'BÀN GHẾ VĂN PHÒNG', 'VBG'),
(18, 6, 'TỦ TÀI LIỆU', 'VTL'),
(19, 6, 'QUẦY THU NGÂN', 'TQT'),
(20, 6, 'VÁCH NGĂN', 'TVN'),
(21, 9, 'TRANH GỖ', 'DTG'),
(22, 9, 'BÀN GHẾ GỐC CÂY', 'DBG'),
(23, 9, 'TƯỢNG GỖ', 'DGT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondh`
--

CREATE TABLE `chitietdondh` (
  `chitietdondh_id` int(11) NOT NULL,
  `Dondh_id` int(3) NOT NULL,
  `Ten_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_sp` int(11) NOT NULL,
  `Anh_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Soluongmua` int(11) NOT NULL,
  `Kichthuoc_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Mausac_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Chatlieu_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Baohanh_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdondh`
--

INSERT INTO `chitietdondh` (`chitietdondh_id`, `Dondh_id`, `Ten_sp`, `Gia_sp`, `Anh_sp`, `Soluongmua`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `Baohanh_sp`) VALUES
(1, 1, 'Tủ thờ', 15000000, '', 3, '33x5x3', 'đỏ', 'gụ', '15 năm'),
(2, 1, 'Giường', 20000000, '', 3, '15x52x2', 'đỏ', 'trắc', '10 năm'),
(3, 30, 'Tủ áo', 5000000, 'giuong2.png', 1, '1x5x8', 'v', 'g', '24'),
(4, 31, 'Tủ áo', 5000000, 'giuong2.png', 1, '1x5x8', 'v', 'g', '24'),
(5, 32, 'Tủ áo', 5000000, 'giuong2.png', 1, '1x5x8', 'v', 'g', '24'),
(6, 33, 'Tủ áo', 5000000, 'giuong2.png', 1, '1x5x8', 'v', 'g', '24'),
(7, 33, 'Bàn phấn', 300000, 'giuong3.png', 1, '2x3x4', 'b', 'g', '18');

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
(6, 'NỘI THẤT VĂN PHÒNG'),
(9, 'ĐỒ GỖ TRANG TRÍ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondh`
--

CREATE TABLE `dondh` (
  `Dondh_id` int(11) NOT NULL,
  `Ngay_lap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tong_gia` int(15) NOT NULL,
  `Ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Sodt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_giaohang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ghi_chu` text COLLATE utf8_unicode_ci NOT NULL,
  `Tinh_trang` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondh`
--

INSERT INTO `dondh` (`Dondh_id`, `Ngay_lap`, `Tong_gia`, `Ten_kh`, `Sodt`, `Diachi_email`, `Diachi_giaohang`, `Ghi_chu`, `Tinh_trang`) VALUES
(1, '2017-05-08 16:00:00', 200000000, 'Trần văn luyện', '', '', '', 'Đi bằng máy bay', 'Chưa chuyển hàng'),
(32, '2017-05-24 19:35:21', 0, '1dđ', '015222', 'huy@dd', 'hưng yên44444', 'hhhh', ''),
(33, '2017-05-24 19:37:47', 0, 'Ngọc đức lan anhdddđ', '015222', 'huy@dd', 'hưng yêndddddđ', 'ddđ', '');

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
(14, 'huyhip', 'luyen@gmaul.com', '095685485', 'giường', '25x36x2'),
(15, 'Nguyễn Đắc Huy', 'dac.huy.9x@gmail.com', '0966599493', 'giường', '25x36x2'),
(16, 'Nguyễn Đắc Huy 22222', 'dac.huy.9x@gmail.com', '0966599493', 'ha noi', 'Hưng yên');

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
  `ma_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `danhmuc_id` int(2) NOT NULL,
  `Baohanh_sp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Thong_tin_sp` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_sp`, `Soluong_sp`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `ma_sp`, `danhmuc_id`, `Baohanh_sp`, `Thong_tin_sp`) VALUES
(6, 'Tủ áo', 'giuong2.png', 5000000, 1, '1x5x8', 'v', 'g', 'NTA', 3, '24', ''),
(7, 'Bàn phấn', 'giuong3.png', 300000, 4, '2x3x4', 'b', 'g', 'NBP', 3, '18', ''),
(11, 'Bàn ghế uống nước', '', 12, 2, '2x2x2', 'đỏ', 'gụ', 'KBG', 2, '12', ''),
(12, 'Bàn ăn', '', 25, 2, '3x3x3', 'đen', 'trắc', 'ABA', 4, '10', ''),
(13, 'tủ thờ', '', 12, 5, '20', 'đỏ', 'gụ', '', 0, 'one', ''),
(14, '123', 'do-go-my-nghe-tam-da.jpg', 3, 3, '3', '3', '3', '', 0, 'one', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdanhmuc`
--
ALTER TABLE `chitietdanhmuc`
  ADD PRIMARY KEY (`chitiet_dm_id`);

--
-- Chỉ mục cho bảng `chitietdondh`
--
ALTER TABLE `chitietdondh`
  ADD PRIMARY KEY (`chitietdondh_id`);

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
-- AUTO_INCREMENT cho bảng `chitietdondh`
--
ALTER TABLE `chitietdondh`
  MODIFY `chitietdondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
