-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2017 lúc 10:42 SA
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
(8, 3, 'BÀN PHẤN', 'NBP'),
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
  `sanpham_id` int(11) NOT NULL,
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

INSERT INTO `chitietdondh` (`chitietdondh_id`, `Dondh_id`, `sanpham_id`, `Ten_sp`, `Gia_sp`, `Anh_sp`, `Soluongmua`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `Baohanh_sp`) VALUES
(21, 48, 41, 'Sập hương', 50000000, 'sapgu3.jpg', 1, '300x300x60', 'nâu', 'hương', '7 năm'),
(22, 48, 46, 'Bàn ăn', 20000000, 'banan31.jpg', 1, '14x25x65', 'vàng', 'hương', '3 năm'),
(23, 49, 39, 'Bộ bàn ghế', 15000000, 'banghe61.jpg', 1, '14x25x65', 'nâu', 'sưa', '10 năm'),
(24, 50, 41, 'Sập hương', 50000000, 'sapgu3.jpg', 999, '300x300x60', 'nâu', 'hương', '7 năm'),
(25, 51, 37, 'Bộ bàn ghế', 10000000, 'banghe42.jpg', 1, '14x25x65', 'vàng', 'hương', '7 năm'),
(26, 51, 39, 'Bộ bàn ghế', 15000000, 'banghe61.jpg', 1, '14x25x65', 'nâu', 'sưa', '10 năm'),
(27, 52, 41, 'Sập hương', 50000000, 'goccay3.jpg', 1, '300x300x60', 'nâu', 'hương', '7 năm'),
(28, 53, 41, 'Sập hương', 50000000, 'goccay32.jpg', 1, '300x300x60', 'nâu', 'hương', '7 năm'),
(29, 54, 35, 'Bộ bàn ghế', 30000000, 'banghe22.jpg', 1, '30x40x80', 'nâu', 'gụ', '5 năm'),
(30, 55, 55, 'Tủ áo', 25000000, 'tuao1.jpg', 1, '200x60x180', 'nâu', 'gụ', '7 năm'),
(31, 56, 38, 'Bộ bàn ghế', 30000000, 'banghe5.jpg', 1, '52x64x82', 'nâu', 'hương', '3 năm'),
(32, 56, 35, 'Bộ bàn ghế', 30000000, 'banghe22.jpg', 2, '30x40x80', 'nâu', 'gụ', '5 năm'),
(33, 57, 43, 'Bàn phấn', 5000000, 'banphan3.jpg', 1, '30x50x60', 'vàng', 'hương', '5 năm'),
(34, 58, 41, 'Sập hương', 50000000, 'goccay32.jpg', 10, '300x300x60', 'nâu', 'hương', '7 năm'),
(35, 59, 41, 'Sập hương', 50000000, 'goccay32.jpg', 10, '300x300x60', 'nâu', 'hương', '7 năm'),
(36, 60, 44, 'Giường', 15000000, 'giuong4.jpg', 3, '150x200x30', 'đỏ', 'hương', '5 năm'),
(37, 61, 41, 'Sập hương', 50000000, 'goccay32.jpg', 10, '300x300x60', 'nâu', 'hương', '7 năm'),
(38, 62, 52, 'Tủ tài liệu', 50000000, 'tutailieu2.jpg', 1, '200x60x180', 'trắng', 'gụ', '3 năm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhapkho`
--

CREATE TABLE `chitietnhapkho` (
  `chitiet_nk_id` int(11) NOT NULL,
  `nhapkho_id` int(11) NOT NULL,
  `Ten_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Kich_thuoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mau_sac` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Chat_lieu` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_sp` int(11) NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnhapkho`
--

INSERT INTO `chitietnhapkho` (`chitiet_nk_id`, `nhapkho_id`, `Ten_sp`, `Anh_sp`, `Kich_thuoc`, `Mau_sac`, `Chat_lieu`, `Gia_sp`, `So_luong`, `Thanh_tien`) VALUES
(1, 5, 'Giường', '', '', '', '', 0, 0, 0),
(2, 5, 'tủ thờ', '', '', '', '', 0, 0, 0),
(3, 6, 'Sập', '', '', '', '', 0, 0, 0),
(4, 6, 'duc', '', '', '', '', 0, 0, 0),
(5, 7, 'Tủ tài liệu', '', '', '', '', 0, 0, 0),
(6, 8, 'Tủ tài liệu', '', '', '', '', 0, 0, 0),
(7, 8, 'Tủ học tập', '', '', '', '', 0, 0, 0),
(8, 9, 'Tủ tài liệu', '', '', '', '', 0, 0, 0),
(9, 10, 'duc', '', '', '', '', 0, 0, 0),
(10, 11, 'duc', '', '', '', '', 0, 0, 0),
(11, 12, 'duc', '', '', '', '', 0, 0, 0),
(12, 15, 'Tủ trang', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietxuatkho`
--

CREATE TABLE `chitietxuatkho` (
  `chitiet_xk_id` int(11) NOT NULL,
  `xuatkho_id` int(11) NOT NULL,
  `Ten_sp` int(11) NOT NULL,
  `Kich_thuoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Mau_sac` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Chat_lieu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_sp` int(11) NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(48, '2017-06-09 22:09:26', 70000000, 'nguyễn đắc hiệp', '444', 'h@gm', '4', 'dd', '1'),
(49, '2017-06-13 19:51:07', 15000000, 'ed', '444', 'e@ff', '4', 'ddd', '1'),
(50, '2017-06-13 19:51:09', 2147483647, 'nguyễn đắc hiệp', '4444', 'h@gm', '4', 'dd', '1'),
(51, '2017-06-13 19:51:10', 25000000, 'nguyễn đắc hiệp', '444', 'h@gm', '4', 'd', '1'),
(52, '2017-06-13 09:53:23', 50000000, '', '', '', '', '', '1'),
(53, '2017-06-21 13:16:22', 50000000, 'Nguyễn Đắc Huy', '0966599493', 'dac.huy.9x@gmail.com', 'Hà Nội', '', '1'),
(55, '2017-06-21 18:17:59', 25000000, 'Lại Thị Lan Anh', '0972940495', 'lananh@gmail.com', 'Nam Định', 'Chuyển về BigC Nam Định', '1'),
(56, '2017-06-18 03:04:01', 60000000, 'Nguyễn Đắc Hùng', '0988856452', 'dachung@gmail.com', 'Đông Anh', 'Chuyển trước khi gọi', '1'),
(57, '2017-06-19 09:01:03', 5000000, 'Vũ Đức Hiển', '0125', 'hien@gmail.com', 'hà nội', 'chuyển trước khi gọi', '1'),
(58, '2017-06-19 16:20:57', 500000000, 'Trần Ngọc Đức', '0966599486', 'duc@gmail.com', 'Nam ĐỊnh', 'huy', '1'),
(59, '2017-06-21 19:17:57', 500000000, 'Lan Anh', '1452', 'lananh@gmail.com', 'Nam Định', 'hiển', '1'),
(60, '2017-06-21 18:16:07', 45000000, 'Nguyễn Thị Hương', '01255', 'huong@gmail.com', 'Hải udowng', 'hhhhh', '1'),
(61, '2017-06-21 09:54:08', 500000000, 'Nguyễn Đắc Huy', '0988856452', 'nkoc_tink_ngkick_pro9x@yahoo.com', 'Đông Anh', '', '1'),
(62, '2017-06-21 18:15:36', 50000000, 'gfg', '090', 'trangtdnb9x@gmail.com', 'sss', 'ss', '1'),
(63, '2017-06-23 08:37:15', 10, 'huy híp', '0152', '', 'hà nội', 'chuyển', 'one');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `hoadon_id` int(11) NOT NULL,
  `ngay_lap_hd` text COLLATE utf8_unicode_ci NOT NULL,
  `ten_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat_hang` text COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `so_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`hoadon_id`, `ngay_lap_hd`, `ten_kh`, `ngay_dat_hang`, `trang_thai`, `so_tien`) VALUES
(1, '10/05/2017', 'huy', '01/05/2017', 'đã giao', 10000000);

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
  `Ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Sotienno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Khachhang_id`, `Ten_kh`, `Diachi_email`, `Sdt`, `Diachi_giaohang`, `Ghichu`, `Sotienno`) VALUES
(8, 'Trần Ngọc hải', 'duc.94@gmail.com', '095685485', 'Nam ĐỊnh', '', 50000000),
(9, 'Nguyễn Đắc Huy', 'dac.huy.9x@gmail.com', '0123456789', 'ha noi', 'Chuyển máy bay', 25000000),
(14, 'huyhip', 'luyen@gmaul.com', '095685485', 'giường', '25x36x2', 20000000),
(15, 'Nguyễn Đắc Huy', 'dac.huy.9x@gmail.com', '0966599493', 'giường', '25x36x2', 0),
(16, 'Nguyễn Đắc Huy 22222', 'dac.huy.9x@gmail.com', '0966599493', 'ha noi', 'Hưng yên', 0),
(17, 'Luyện Huy', 'luyenhuy@gmail', '0123456789', 'HCM', 'đưa bằng máy bay', 0),
(18, 'đồ gỗ huy hip', 'dac.huy.9x@gmail.com', '098756413', 'Vân hà đông anh hà nội', 'đưa về tận nhà', 0),
(19, 'hƯƠNG', 'HUONG@gmail.com', '01698642243', 'hải dương', 'chuyển bằng máy bay', 0),
(20, 'trang', 'trang@ggg', '552', 'thía bình', 'dd', 0),
(23, 'Trần Ngọc Đức', 'duc.94@gmail.com', '0966599493', '', 'Chất liệu Hương', 0),
(24, 'Trần Ngọc Đức', 'duc.94@gmail.com', '0966599493', '', 'Chất liệu Hương', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `kho_id` int(11) NOT NULL,
  `Ten_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_nhap` int(11) NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Kichthuoc_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Mausac_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Chatlieu_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_sp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Danhmuc_id` int(11) NOT NULL,
  `Baohanh` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`kho_id`, `Ten_sp`, `Anh_sp`, `Gia_nhap`, `So_luong`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `Ma_sp`, `Danhmuc_id`, `Baohanh`) VALUES
(3, 'tủ thờ', '', 11200, 25, '5x5x5', 'đỏ', 'hương', '', 0, '10'),
(4, 'tủ thờ', 'tuao3.jpg', 7, 21, '5x5x5', 'd', 'd', 'KBG', 2, '10'),
(5, '', 'tuao31.jpg', 0, 0, '', '', '', '', 0, ''),
(6, '', 'tuao61.jpg', 0, 0, '', '', '', '', 0, ''),
(7, 'tủ thờ', 'tuao4.jpg', 5, 10, 'd', 'd', 'd', 'd', 2, '10'),
(8, '', 'tuao32.jpg', 0, 0, '', '', '', '', 0, ''),
(9, '', 'tuao62.jpg', 0, 0, '', '', '', '', 0, ''),
(10, 'giường', 'tuao63.jpg', 5, 5, '5', '5', '5', '5', 5, '5'),
(11, 'giường7', 'tuao64.jpg', 5, 5, '5', '5', '5', '55', 5, '5'),
(12, 'giường4', 'tuao33.jpg', 8, 8, '8', '8', '8', '8', 8, '8');

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
-- Cấu trúc bảng cho bảng `nhapkho`
--

CREATE TABLE `nhapkho` (
  `nhapkho_id` int(11) NOT NULL,
  `ngay_nhap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nhanvien_id` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhapkho`
--

INSERT INTO `nhapkho` (`nhapkho_id`, `ngay_nhap`, `nhanvien_id`, `so_tien`) VALUES
(1, '2017-06-19 17:33:28', 0, 300000000),
(2, '2017-06-19 17:34:17', 0, 300000000),
(3, '2017-06-19 17:34:32', 0, 300000000),
(4, '2017-06-19 17:34:51', 0, 300000000),
(5, '2017-06-19 17:35:02', 0, 300000000),
(6, '2017-06-19 17:37:56', 0, 500050),
(7, '2017-06-19 17:52:03', 0, 200000000),
(8, '2017-06-19 17:57:33', 0, 2147483647),
(9, '2017-06-19 17:59:15', 0, 360000),
(10, '2017-06-19 18:06:28', 0, 225000000),
(11, '2017-06-19 18:09:06', 0, 225000000),
(12, '2017-06-19 18:11:34', 0, 225000000),
(13, '2017-06-19 18:12:55', 0, 0),
(14, '2017-06-20 10:25:23', 0, 0),
(15, '2017-06-22 20:45:39', 0, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidung`
--

CREATE TABLE `noidung` (
  `noidung_id` int(11) NOT NULL,
  `ten_tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `danh_muc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nguoiviet` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidung`
--

INSERT INTO `noidung` (`noidung_id`, `ten_tieu_de`, `noi_dung`, `danh_muc`, `thoi_gian`, `nguoiviet`) VALUES
(1, 'Hình thức thanh toán', '<p>Để mua h&agrave;ng trực tuyến từ c&ocirc;ng ty ch&uacute;ng t&ocirc;i, Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc kỹ những thoả thuận dưới đ&acirc;y v&agrave; phải chắc rằng Qu&yacute; kh&aacute;ch đồng &yacute; với những th&ocirc;ng tin thoả thuận điều khoản n&agrave;y. Nếu kh&ocirc;ng đồng &yacute; vui l&ograve;ng bỏ qua những mục li&ecirc;n quan đến đặt h&agrave;ng trực tuyến để truy cập v&agrave;o c&aacute;c chức năng kh&aacute;c. Việc để trang link thoả thuận ngay đầu ti&ecirc;n của website gi&uacute;p kh&aacute;ch h&agrave;ng xem nhanh ch&oacute;ng hơn. Khi qu&yacute; kh&aacute;ch đ&atilde; truy cập hoặc đặt h&agrave;ng, c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch đ&atilde; chấp nhận với những thoả thuận của ch&uacute;ng t&ocirc;i b&ecirc;n dưới. Tất cả mọi th&ocirc;ng tin về gi&aacute; cả, bản tin, giao diện,&hellip; tr&ecirc;n Website đều c&oacute; thể thay đổi bất cứ l&uacute;c n&agrave;o theo &yacute; của ch&uacute;ng t&ocirc;i m&agrave; kh&ocirc;ng cần b&aacute;o trước. C&aacute;c thoả thuận v&agrave; điều khoản dưới đ&acirc;y đều l&agrave; căn cứ cho những tranh chấp hay khiếu nại của người truy cập website, người thực hiện c&aacute;c giao dịch trực tuyến với c&ocirc;ng ty ch&uacute;ng t&ocirc;i trước ph&aacute;p luật. Khi c&oacute; bất cứ tranh chấp n&agrave;o xảy ra ch&uacute;ng t&ocirc;i lu&ocirc;n chọn giải ph&aacute;p &ocirc;n ho&agrave; l&agrave;m h&agrave;i l&ograve;ng qu&yacute; kh&aacute;ch h&agrave;ng tr&ecirc;n cơ sở t&ocirc;n trọng lẫn nhau. V&agrave; cuối c&ugrave;ng nếu kh&ocirc;ng c&ograve;n bất kỳ giải ph&aacute;p n&agrave;o kh&aacute;c, ch&uacute;ng t&ocirc;i khuyến nghị n&ecirc;n đưa c&aacute;c vấn đề đ&oacute; ra trước ph&aacute;p luật theo đ&uacute;ng c&aacute;c thủ tục tố tụng để đảm bảo c&ocirc;ng bằng v&agrave; quyền lợi của cả hai b&ecirc;n. Mọi chi ph&iacute; tố tụng đều do b&ecirc;n nguy&ecirc;n đơn chi trả. Bất cứ khiếu nại n&agrave;o của qu&yacute; kh&aacute;ch khi chưa đọc kỹ thoả thuận v&agrave; điều khoản n&agrave;y dẫn đến việc khiếu nại l&ecirc;n b&aacute;o ch&iacute; truyền th&ocirc;ng hay một</p>\r\n<p>b&ecirc;n n&agrave;o kh&aacute;c đăng th&ocirc;ng tin l&agrave;m thiệt hại về thương hiệu của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i c&oacute; quyền khởi kiện qu&yacute; kh&aacute;ch v&agrave; cả cơ quan đăng tải th&ocirc;ng tin kh&ocirc;ng ch&iacute;nh x&aacute;c do chưa đọc kỹ thoả thuận n&agrave;y. Qu&yacute; kh&aacute;ch h&agrave;ng đều c&oacute; thể thực hiện c&aacute;c giao dịch mua b&aacute;n</p>\r\n<p>h&agrave;ng h&oacute;a th&ocirc;ng qua nhiều k&ecirc;nh như điện thoại, email,.. nhưng ch&uacute;ng t&ocirc;i lu&ocirc;n khuyến kh&iacute;ch qu&yacute; kh&aacute;ch sử dụng k&ecirc;nh b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i trước hết để đảm bảo mọi th&ocirc;ng tin về đơn h&agrave;ng l&agrave; ch&iacute;nh x&aacute;c nhất v&agrave; qu&aacute; tr&igrave;nh xử l&yacute; l&agrave; nhanh nhất, đồng thời để ủng hộ website ng&agrave;y c&agrave;ng ph&aacute;t triển ho&agrave;n thiện tất cả c&aacute;c chức năng.</p>\r\n<p><strong>&aacute;dasda</strong>zcasca</p>', 'Bài viết', '2017-06-08 10:56:27', ''),
(2, 'Vận chuyển giao nhận', '<p>Vận chuyển giao nhận CH&Iacute;NH S&Aacute;CH VỀ GIAO NHẬN H&Agrave;NG H&Oacute;A Trong trường hợp kh&aacute;ch h&agrave;ng ở H&agrave; Nội, ch&uacute;ng t&ocirc;i sẽ phục vụ tận nơi miến ph&iacute; cho c&aacute;c đơn đặt h&agrave;ng với b&aacute;n k&iacute;nh phục vụ l&agrave; 12km t&iacute;nh từ kho của Noithatnhapkhau.net.vn; Lưu &yacute;, ch&uacute;ng t&ocirc;i chỉ chuyển h&agrave;ng đến đ&uacute;ng một địa điểm cuối c&ugrave;ng m&agrave; kh&aacute;ch h&agrave;ng y&ecirc;u cầu. Trong trường hợp kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh th&agrave;nh kh&aacute;c, ch&uacute;ng t&ocirc;i sẽ sử dụng c&aacute;c dịch vụ vận chuyển v&agrave; giao nhận hiện c&oacute; tr&ecirc;n thị trường để đảm bảo đơn h&agrave;ng sẽ đến đ&uacute;ng địa điểm, đ&uacute;ng thời gian v&agrave; đảm bảo an to&agrave;n cho h&agrave;ng h&oacute;a. Khi nhận h&agrave;ng, qu&yacute; kh&aacute;ch lưu &yacute; kiểm tra thật kỹ sản phẩm &hellip;trước khi k&yacute; nhận v&agrave;o bi&ecirc;n nhận h&agrave;ng ho&aacute;. Trong trường hợp giao nhận sai địa chỉ, ch&uacute;ng t&ocirc;i sẽ xử l&yacute; theo 2 trường hợp như sau: Trường hợp giao nhận sai địa chỉ do lỗi ph&iacute;a ch&uacute;ng t&ocirc;i, ch&uacute;ng t&ocirc;i sẽ chịu ho&agrave;n to&agrave;n tr&aacute;ch nhiệm v&agrave; sẽ đề xuất giải ph&aacute;p đền b&ugrave; với qu&yacute; kh&aacute;ch h&agrave;ng. Trường hợp giao nhận sai địa chỉ do lỗi cung cấp th&ocirc;ng tin kh&ocirc;ng ch&iacute;nh x&aacute;c từ ph&iacute;a kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ ho&agrave;n trả lại tiền sau khi đ&atilde; khấu trừ c&aacute;c chi ph&iacute; ph&aacute;t sinh một c&aacute;ch r&otilde; r&agrave;ng. Nếu qu&yacute; kh&aacute;ch vẫn muốn thực hiện đơn h&agrave;ng, đề nghị qu&yacute; kh&aacute;ch vui l&ograve;ng cung cấp lại th&ocirc;ng tin ch&iacute;nh x&aacute;c v&agrave; c&oacute; y&ecirc;u cầu trực tiếp đến ch&uacute;ng t&ocirc;i, hoặc thực hiện lại một đơn h&agrave;ng online kh&aacute;c. Lưu &yacute;, c&aacute;c c&ocirc;ng ty dịch vụ vận chuyển v&agrave; giao nhận sẽ kh&ocirc;ng hoạt động v&agrave;o thứ Bảy v&agrave; Chủ nhật cũng như những ng&agrave;y Lễ, Tết. V&igrave; vậy, c&aacute;c đơn h&agrave;ng trước những ng&agrave;y n&agrave;y 1 ng&agrave;y hoặc đ&uacute;ng những ng&agrave;y n&agrave;y đều được xử l&yacute; v&agrave;o ng&agrave;y l&agrave;m việc đầu ti&ecirc;n.</p>', 'Chính sách vận chuyển', '2017-06-13 07:46:43', ''),
(3, 'Bộ bàn ăn thiết kế đẹp và vô cùng sang trọng', '<p style=\"text-align: justify;\">Bất k&igrave; một d&ograve;ng sản phẩm nội thất nhập khẩu n&agrave;o được xuất xưởng cũng đều trải qua rất nhiều c&aacute;c c&ocirc;ng đoạn , từ kh&acirc;u l&ecirc;n &yacute; tưởng, thiết kế , chế tạo v&agrave; kiểm định . Do đ&oacute; , khi l&ecirc;n th&agrave;nh sản phẩm , n&oacute; đ&aacute;p ứng đầy đủ c&aacute;c ti&ecirc;u chuẩn về chất lượng , g&oacute;p phần kh&ocirc;ng nhỏ tạo n&ecirc;n một kh&ocirc;ng gian hiện đại v&agrave; v&ocirc; c&ugrave;ng sang trọng. Bởi vậy, ch&uacute;ng ta c&oacute; thể thấy được những mẫu b&agrave;n tr&agrave; nhập khẩu với kiểu d&aacute;ng hiện đại v&agrave; bắt mắt được phủ một lớp sơn Pu cực d&agrave;y, c&oacute; độ b&oacute;ng cực cao v&agrave; c&oacute; độ bền cực tốt. Hầu hết những mẫu<span style=\"color: #0000ff;\"><a style=\"color: #0000ff;\" href=\"http://noithatnhapkhau.net.vn/dmsp/ban-tra-ke-ti-vi-dong-bo/\" target=\"_blank\" rel=\"noopener\"> b&agrave;n tr&agrave; </a></span>nhập khẩu được l&agrave;m từ gỗ c&ocirc;ng nghiệp cao cấp, đ&atilde; qua xử l&yacute; c&ocirc;ng nghiệp , chống được hiện tượng cong v&ecirc;nh mối mọt v&agrave; chịu được kh&iacute; hậu thời tiết kh&aacute;ch nghiệt.</p>\r\n<figure id=\"attachment_12182\" class=\"thumbnail wp-caption aligncenter\" style=\"width: 800px;\"><a href=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" rel=\"attachment wp-att-12182\"><img class=\"size-full wp-image-12182\" src=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" sizes=\"(max-width: 800px) 100vw, 800px\" srcset=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-300x169.jpg 300w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-768x433.jpg 768w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg 800w\" alt=\"ban-tra-mat-da-579\" width=\"800\" height=\"451\" /></a>\r\n<figcaption class=\"caption wp-caption-text\">ban-tra-mat-da-579</figcaption>\r\n</figure>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Một trong những mẫu b&agrave;n tr&agrave; nhập khẩu b&aacute;n chạy nhất tr&ecirc;n thị trường nội thất hiện nay đ&oacute; ch&iacute;nh l&agrave; mẫu b&agrave;n tr&agrave; 579 , n&oacute; dường như hội tụ đầy đủ c&aacute;c yếu tố ở tr&ecirc;n. Ch&iacute;nh v&igrave; vậy, kh&ocirc;ng qu&aacute; ngạc nhi&ecirc;n, khi trong qu&aacute; tr&igrave;nh sinh hoạt thường ng&agrave;y ch&uacute;ng ta lỡ l&agrave;m dơ bẩn l&ecirc;n sản phẩm, nhưng chỉ cần một chiếc dẻ lau sạch ẩm, ch&uacute;ng ta dễ d&agrave;ng l&agrave;m sạch vết bẩn một c&aacute;ch nhanh ch&oacute;ng. Sở hữu một bộ khung v&ocirc; c&ugrave;ng chắc chắn, kết hợp với việc sở hữu mặt đ&atilde; nh&acirc;n tạo m&agrave;u xanh ngọc v&ocirc; c&ugrave;ng thanh nh&atilde;,bắt mắt v&agrave; v&ocirc; c&ugrave;ng sang trọng, đ&acirc;y cũng ch&iacute;nh l&agrave; yếu tố ch&iacute;nh khiến sản phẩm chiếm được nhiều cảm t&igrave;nh của kh&aacute;ch h&agrave;ng v&agrave; tạo n&ecirc;n một sức h&uacute;t cực lớn tr&ecirc;n thị trường nội thất trong thời gian qua.</p>', 'Bài viết tư vấn', '2017-06-13 07:58:11', ''),
(4, 'Chính sách bảo hành', '\r\n\r\n    ĐIỀU KIỆN BẢO HÀNH SẢN PHẨM\r\n\r\nSản phẩm được bảo hành miễn phí nếu sản phẩm đó còn thời hạn bảo hành tính từ ngày giao hàng và hội đủ các điều kiện sau:\r\n\r\n    Xuất trình phiếu bảo hành và hóa đơn hoặc biên nhận khi có yêu cầu bảo hành\r\n    Phiếu bảo hành phải được điền thông tin khách hàng và sản phẩm chính xác, đầy đủ.\r\n    Phiếu bảo hành phải còn nguyên vẹn, không chấp và, bôi xóa, sửa chữa\r\n    Tem bảo hành và tem niêm phong của sản phẩm còn nguyên vẹn.\r\n    Những hư hỏng kỹ thuật của sản phẩm được Trung tâm bảo hành xác nhận do lỗi của nhà sản xuất\r\n    2.   NHỮNG TRƯỜNG HỢP KHÔNG ĐƯỢC BẢO HÀNH:\r\n\r\n    Vi phạm một trong những điều kiện ở mục 1\r\n    Số series, model sản phẩm không phù hợp với Phiếu bảo hành.\r\n    Khách hàng tự ý can thiệp vào sản phẩm hoặc sửa chữa tại những trung tâm bảo hành không được sự ủy nhiệm của Hãng.\r\n    Sản phẩm hư hỏng do sử dụng không đúng hướng dẫn, mục đích, do thiên tai, rỉ sét, bể vỡ, do côn trùng hoặc động vật phá hoại…\r\n    Sản phẩm được dùngsai mục đích\r\n    Các phụ tùng như: … không thuộc diện bảo hành\r\n\r\n', 'Chính sách bảo hành', '2017-06-11 21:25:12', ''),
(6, 'Bộ tủ bếp tiện nghi cho gia đình hiện đại', '<p style=\"text-align: justify;\">Được coi l&agrave; một giải ph&aacute;p ho&agrave;n hảo, hữu &iacute;ch gi&uacute;p cho cuộc sống sinh hoạt thường ng&agrave;y trở n&ecirc;n thuận tiện, mang đến một kh&ocirc;ng gian sống th&ocirc;ng tho&aacute;ng v&agrave; hiện đại . Sofa giường đang l&agrave; một trong những m&oacute;n đồ nội thất được kh&aacute; nhiều gia đ&igrave;nh t&igrave;m kiếm v&agrave; lựa chọn nhằm tạo l&ecirc;n một kh&ocirc;ng gian sống tiện nghi v&agrave; rộng r&atilde;i hơn. Bởi vậy, c&aacute;c nh&agrave; sản xuất đ&atilde; d&agrave;nh kh&aacute; nhiều c&ocirc;ng sức v&agrave; chất x&aacute;m nhằm tạo ra nhiều mẫu sofa giường c&oacute; kiểu d&aacute;ng đẹp đ&aacute;p ứng những nhu cầu sử dụng trong sinh hoạt thường ng&agrave;y.</p>\r\n<figure id=\"attachment_19849\" class=\"thumbnail wp-caption aligncenter\" style=\"width: 800px;\"><a href=\"http://noithatnhapkhau.net.vn/assets/Sofa-giuong-A942-2.jpg\" rel=\"attachment wp-att-19849\"><img class=\"size-full wp-image-19849\" src=\"http://noithatnhapkhau.net.vn/assets/Sofa-giuong-A942-2.jpg\" sizes=\"(max-width: 800px) 100vw, 800px\" srcset=\"http://noithatnhapkhau.net.vn/assets/Sofa-giuong-A942-2-300x196.jpg 300w, http://noithatnhapkhau.net.vn/assets/Sofa-giuong-A942-2-768x502.jpg 768w, http://noithatnhapkhau.net.vn/assets/Sofa-giuong-A942-2.jpg 800w\" alt=\"Sofa giường A942-2\" width=\"800\" height=\"523\" /></a>\r\n<figcaption class=\"caption wp-caption-text\">Sofa giường A942-2</figcaption>\r\n</figure>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hầu hết những mẫu <span style=\"color: #0000ff;\"><a style=\"color: #0000ff;\" href=\"http://noithatnhapkhau.net.vn/dmsp/sofa-giuong/\" target=\"_blank\" rel=\"noopener\">sofa giường </a></span>n&agrave;y c&oacute; khung được l&agrave;m từ gỗ tự nhi&ecirc;n, kết hợp với hệ thống khung th&eacute;p cao cấp nhằm mang đến một sản phẩm c&oacute; độ bền đẹp v&agrave; v&ocirc; c&ugrave;ng chắc chắn. Tuy theo nhu cầu v&agrave; mục đ&iacute;ch sử dụng của mỗi gia đ&igrave;nh m&agrave; c&oacute; thể chọn chất liệu bọc sofa l&agrave; nỉ, vải th&ocirc; , hay da b&ograve;. Đối với những gia đ&igrave;nh chọn sản phẩm cho ph&ograve;ng ngủ , th&igrave; c&oacute; thể chọn những chiếc sofa văng nhỏ gọn c&oacute; k&iacute;ch thước từ 1m 8 đến 2 m . Nếu bạn c&oacute; &yacute; định sử dụng n&oacute; cho ph&ograve;ng kh&aacute;ch của gia đ&igrave;nh , với diện t&iacute;ch ph&ograve;ng kh&aacute;ch rộng, th&igrave; thay v&igrave; chọn sofa văng bạn h&atilde;y chọn những mẫu sofa giường th&ocirc;ng minh g&oacute;c L . Ở những mẫu sản phẩm n&agrave;y, bạn ho&agrave;n to&agrave;n c&oacute; được một bộ sofa ph&ograve;ng kh&aacute;ch sang trọng, vừa c&oacute; một kh&ocirc;ng gian lưu trữ đồ khổng lồ đồng thời c&oacute; một chiếc giường ngủ dự ph&ograve;ng l&yacute; tưởng d&agrave;nh cho hai người. Nếu bạn c&oacute; &yacute; định mua sắm nội thất cho ph&ograve;ng kh&aacute;ch, th&igrave; chắc chắn những mẫu sản phẩm n&agrave;y sẽ l&agrave; sự lựa chọn tuyệt vời v&agrave; ho&agrave;n hảo nhất.</p>\r\n<figure id=\"attachment_8654\" class=\"thumbnail wp-caption aligncenter\" style=\"width: 705px;\"><a href=\"http://noithatnhapkhau.net.vn/assets/sofa-giuong-nhap-khau-939-3.jpg\" rel=\"attachment wp-att-8654\"><img class=\"size-full wp-image-8654\" src=\"http://noithatnhapkhau.net.vn/assets/sofa-giuong-nhap-khau-939-3.jpg\" sizes=\"(max-width: 705px) 100vw, 705px\" srcset=\"http://noithatnhapkhau.net.vn/assets/sofa-giuong-nhap-khau-939-3-300x173.jpg 300w, http://noithatnhapkhau.net.vn/assets/sofa-giuong-nhap-khau-939-3.jpg 705w\" alt=\"sofa giường nhập khẩu 939-3\" width=\"705\" height=\"407\" /></a>\r\n<figcaption class=\"caption wp-caption-text\">sofa giường nhập khẩu 939-3</figcaption>\r\n</figure>', 'Bài viết tư vấn', '2017-06-13 07:55:29', ''),
(7, 'Mẫu bàn trà nhập khẩu có thiết kế đẹp và vô cùng sang trọng', '<p style=\"text-align: justify;\">Bất k&igrave; một d&ograve;ng sản phẩm nội thất nhập khẩu n&agrave;o được xuất xưởng cũng đều trải qua rất nhiều c&aacute;c c&ocirc;ng đoạn , từ kh&acirc;u l&ecirc;n &yacute; tưởng, thiết kế , chế tạo v&agrave; kiểm định . Do đ&oacute; , khi l&ecirc;n th&agrave;nh sản phẩm , n&oacute; đ&aacute;p ứng đầy đủ c&aacute;c ti&ecirc;u chuẩn về chất lượng , g&oacute;p phần kh&ocirc;ng nhỏ tạo n&ecirc;n một kh&ocirc;ng gian hiện đại v&agrave; v&ocirc; c&ugrave;ng sang trọng. Bởi vậy, ch&uacute;ng ta c&oacute; thể thấy được những mẫu b&agrave;n tr&agrave; nhập khẩu với kiểu d&aacute;ng hiện đại v&agrave; bắt mắt được phủ một lớp sơn Pu cực d&agrave;y, c&oacute; độ b&oacute;ng cực cao v&agrave; c&oacute; độ bền cực tốt. Hầu hết những mẫu<span style=\"color: #0000ff;\"><a style=\"color: #0000ff;\" href=\"http://noithatnhapkhau.net.vn/dmsp/ban-tra-ke-ti-vi-dong-bo/\" target=\"_blank\" rel=\"noopener\"> b&agrave;n tr&agrave; </a></span>nhập khẩu được l&agrave;m từ gỗ c&ocirc;ng nghiệp cao cấp, đ&atilde; qua xử l&yacute; c&ocirc;ng nghiệp , chống được hiện tượng cong v&ecirc;nh mối mọt v&agrave; chịu được kh&iacute; hậu thời tiết kh&aacute;ch nghiệt.</p>\r\n<figure id=\"attachment_12182\" class=\"thumbnail wp-caption aligncenter\" style=\"width: 800px;\"><a href=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" rel=\"attachment wp-att-12182\"><img class=\"size-full wp-image-12182\" src=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" sizes=\"(max-width: 800px) 100vw, 800px\" srcset=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-300x169.jpg 300w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-768x433.jpg 768w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg 800w\" alt=\"ban-tra-mat-da-579\" width=\"800\" height=\"451\" /></a>\r\n<figcaption class=\"caption wp-caption-text\">ban-tra-mat-da-579</figcaption>\r\n</figure>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Một trong những mẫu b&agrave;n tr&agrave; nhập khẩu b&aacute;n chạy nhất tr&ecirc;n thị trường nội thất hiện nay đ&oacute; ch&iacute;nh l&agrave; mẫu b&agrave;n tr&agrave; 579 , n&oacute; dường như hội tụ đầy đủ c&aacute;c yếu tố ở tr&ecirc;n. Ch&iacute;nh v&igrave; vậy, kh&ocirc;ng qu&aacute; ngạc nhi&ecirc;n, khi trong qu&aacute; tr&igrave;nh sinh hoạt thường ng&agrave;y ch&uacute;ng ta lỡ l&agrave;m dơ bẩn l&ecirc;n sản phẩm, nhưng chỉ cần một chiếc dẻ lau sạch ẩm, ch&uacute;ng ta dễ d&agrave;ng l&agrave;m sạch vết bẩn một c&aacute;ch nhanh ch&oacute;ng. Sở hữu một bộ khung v&ocirc; c&ugrave;ng chắc chắn, kết hợp với việc sở hữu mặt đ&atilde; nh&acirc;n tạo m&agrave;u xanh ngọc v&ocirc; c&ugrave;ng thanh nh&atilde;,bắt mắt v&agrave; v&ocirc; c&ugrave;ng sang trọng, đ&acirc;y cũng ch&iacute;nh l&agrave; yếu tố ch&iacute;nh khiến sản phẩm chiếm được nhiều cảm t&igrave;nh của kh&aacute;ch h&agrave;ng v&agrave; tạo n&ecirc;n một sức h&uacute;t cực lớn tr&ecirc;n thị trường nội thất trong thời gian qua.</p>', 'Bài viết tư vấn', '2017-06-13 07:48:35', ''),
(8, 'Bộ bàn ghế  sang trọng dành cho gia đình bạn', '', 'Bài viết tư vấn', '2017-06-13 07:53:28', ''),
(9, 'Hà nọi', '<p>Nam định</p>', 'Bài viết tư vấn', '2017-06-22 20:19:42', 'trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `Ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_cu` int(11) NOT NULL,
  `Gia_sp` int(11) NOT NULL,
  `Gia_nhap` int(11) NOT NULL,
  `Soluong_sp` int(11) NOT NULL,
  `Soluong_kho` int(11) NOT NULL,
  `Kichthuoc_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mausac_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Chatlieu_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `danhmuc_id` int(2) NOT NULL,
  `Baohanh_sp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Thong_tin_sp` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Luot_xem` int(11) NOT NULL,
  `Luot_mua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_cu`, `Gia_sp`, `Gia_nhap`, `Soluong_sp`, `Soluong_kho`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `ma_sp`, `danhmuc_id`, `Baohanh_sp`, `Thong_tin_sp`, `Luot_xem`, `Luot_mua`) VALUES
(27, 'Bộ Bàn Ghế', 'banghe1.jpg', 0, 15000000, 1, 100, 100, '30x40x40', 'đỏ', 'sưa', 'KBG', 2, '5 năm', 'huyyy', 4, 0),
(35, 'Bộ bàn ghế', 'banghe22.jpg', 0, 30000000, 455, 97, 108, '30x40x80', 'nâu', 'gụ', 'KBG', 2, '5 năm', 'hương', 4, 3),
(36, 'Bộ bàn ghế', 'banghe31.jpg', 0, 25000000, 0, 100, 100, '30x50x60', 'vàng', 'gụ', 'KBG', 2, '5 năm', 'Bộ bàn ghế gồm 2 ghế ngồi, 1 ghế dài và 1 bàn uốn nước', 3, 0),
(37, 'Bộ bàn ghế', 'banghe42.jpg', 0, 10000000, 0, 99, 99, '14x25x65', 'vàng', 'hương', 'KBG', 2, '7 năm', 'Bộ bàn ghế gồm 3 ghế ngồi, 2 ngế dài và 1 bàn uống nước', 5, 1),
(38, 'Bộ bàn ghế', 'banghe5.jpg', 0, 30000000, 0, 99, 99, '52x64x82', 'nâu', 'hương', 'KBG', 2, '3 năm', 'Bộ bàn ghế gồm 2 ghế đôn, 1 ghế ngồi, 1 ghế dài và 1 bàn uống nước', 13, 1),
(39, 'Bộ bàn ghế', 'banghe61.jpg', 0, 15000000, 0, 98, 98, '14x25x65', 'nâu', 'sưa', 'KBG', 2, '10 năm', 'Bộ bàn ghế gồm có 2 ghế đôn, 4 ghế ngồi và bàn uống nước', 103, 1),
(40, 'Sập', 'sapgu2.jpg', 0, 35000000, 0, 110, 110, '250x300x40', 'đỏ', 'hương', 'KSG', 1, '10 năm', '', 0, 0),
(41, 'Sập hương', 'goccay32.jpg', 55000000, 50000000, 500000000, 70, 69, '300x300x60', 'nâu', 'hương', 'KSG', 2, '7 năm', '<p>Sản phẩm \"Sập Hương cao cấp\", các đường nét trạm khắc đa phần được làm thủ công, bởi bàn tay tài hoa của các nghệ nhân nhiều năm trong nghề.</p>																																', 79, 32),
(42, 'Bàn phấn', 'banphan1.jpg', 0, 7000000, 0, 100, 100, '50x40x60', 'đỏ', 'gụ', 'NBP', 3, '3 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 3, 0),
(43, 'Bàn phấn', 'banphan3.jpg', 0, 5000000, 0, 99, 99, '30x50x60', 'vàng', 'hương', 'NBP', 3, '5 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 1, 1),
(44, 'Giường', 'giuong4.jpg', 0, 15000000, 0, 137, 137, '150x200x30', 'đỏ', 'hương', 'NG', 3, '5 năm', '', 1, 3),
(45, 'Giường hiện đại', 'giuong3.png', 0, 50000000, 0, 100, 100, '250x200x40', 'trắng', 'gụ', 'NG', 3, '5 năm', '', 1, 0),
(46, 'Bàn ăn', 'banan31.jpg', 0, 20000000, 0, 100, 100, '14x25x65', 'vàng', 'hương', 'ABA', 4, '3 năm', 'Bộ bàn ăn gồm 4 ghế và 1 bàn ăn', 1, 0),
(47, 'Bàn ăn', 'banan5.jpg', 0, 60000000, 0, 100, 100, '150x200x30', 'vàng', 'hương', 'ABA', 4, '7 năm', '', 0, 0),
(48, 'Ban thờ', 'bantho4.jpg', 0, 27000000, 0, 3, 0, '150x150x40', 'đỏ', 'gụ', 'TBT', 5, '7 năm', '', 1, 0),
(49, 'Hoành phi câu đối', 'hoanhphi5.jpg', 0, 20000000, 0, 2, 0, '30x200x5', 'vàng - đỏ', 'hương', 'THP', 5, '5 năm', '', 3, 0),
(50, 'Bàn văn phòng', 'banvp5.jpg', 0, 10000000, 0, 1, 0, '120x80x50', 'trắng', 'gụ', 'VBG', 6, '5 năm', '', 0, 0),
(51, 'Bàn giám đốc', 'banvp3.gif', 0, 30000000, 0, 2, 0, '150x200x60', 'đen', 'hương', 'VBG', 6, '5 năm', '', 1, 0),
(52, 'Tủ tài liệu', 'tutailieu2.jpg', 0, 50000000, 0, 51, 49, '200x60x180', 'trắng', 'gụ', 'VTL', 6, '3 năm', '', 2, 1),
(53, 'Tranh tứ quý', 'tranhgo1.jpg', 0, 7000000, 0, 5, 0, '90x20x5', 'đỏ', 'hương', 'DTG', 9, '3 năm', '', 0, 0),
(54, 'Tương quan vũ', 'tuong2.jpg', 0, 9000000, 0, 10, 0, '90x20x20', 'đỏ', 'hương', 'DGT', 9, '7 năm', '', 6, 0),
(55, 'Tủ áo', 'tuao1.jpg', 0, 25000000, 0, 9, -1, '200x60x180', 'nâu', 'gụ', 'NTA', 3, '7 năm', '', 14, 1),
(56, 'Tranh gỗ', 'tranhgo5.jpg', 0, 5, 0, 5, 0, '5', '5', '5', 'TG', 9, '3 năm', '5', 0, 0),
(57, 'duc', 'banan53.jpg', 0, 0, 15000000, 15, 0, '', '', '', '', 0, '', '', 0, 0),
(58, 'duc', 'banan53.jpg', 0, 0, 15000000, 15, 0, '', '', '', '', 0, '', '', 0, 0),
(59, 'duc', 'banan53.jpg', 0, 0, 15000000, 15, 0, '', '', '', '', 0, '', '', 0, 0),
(60, 'Tủ trang', '18921935_1341804509208045_3210894947693400195_n.jpg', 0, 0, 10, 10, 0, '', '', '', '', 0, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timkiem`
--

CREATE TABLE `timkiem` (
  `id_timkiem` int(11) NOT NULL,
  `ngay_tk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Ten_tk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ketqua_tk` int(11) NOT NULL,
  `Luot_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `timkiem`
--

INSERT INTO `timkiem` (`id_timkiem`, `ngay_tk`, `Ten_tk`, `Ketqua_tk`, `Luot_tk`) VALUES
(56, '2017-06-22 17:36:05', 'gi', 0, 0),
(76, '2017-06-22 17:52:10', 'gi', 0, 0),
(77, '2017-06-22 17:55:07', 'gi', 0, 0),
(78, '2017-06-22 17:55:18', 'gi', 0, 0),
(79, '2017-06-22 17:55:38', 't', 0, 0),
(80, '2017-06-22 17:56:43', 't', 0, 0),
(81, '2017-06-22 17:56:49', 'tu', 0, 0),
(82, '2017-06-22 17:58:03', 'tu', 0, 0),
(83, '2017-06-22 18:00:03', 'tu', 0, 0),
(84, '2017-06-22 18:01:51', 'tu', 0, 0),
(85, '2017-06-22 18:02:01', 'tu', 0, 0),
(86, '2017-06-22 18:04:00', 'tu', 0, 0),
(87, '2017-06-22 18:05:30', 'tu', 0, 0),
(88, '2017-06-22 18:09:07', 'tu', 0, 0),
(89, '2017-06-22 18:09:25', 'tu', 0, 0),
(90, '2017-06-22 18:48:28', 'gi', 0, 0),
(91, '2017-06-22 18:50:35', 'g', 0, 0),
(92, '2017-06-22 18:51:46', 'g', 0, 0),
(93, '2017-06-22 18:52:19', 'g', 0, 0),
(94, '2017-06-22 18:52:40', 'g', 0, 0),
(95, '2017-06-22 18:53:22', 'g', 0, 0),
(96, '2017-06-22 18:53:27', 't', 0, 0),
(97, '2017-06-22 18:53:33', 't', 0, 0),
(98, '2017-06-22 18:53:55', 't', 0, 0),
(99, '2017-06-22 18:54:30', 'tu', 0, 0),
(100, '2017-06-22 18:56:10', 'tu', 0, 0),
(101, '2017-06-22 18:57:17', 'tu', 0, 0),
(102, '2017-06-22 19:38:58', 'tu', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatkho`
--

CREATE TABLE `xuatkho` (
  `xuatkho_id` int(11) NOT NULL,
  `ngay_xuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nhanvien_id` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Chỉ mục cho bảng `chitietnhapkho`
--
ALTER TABLE `chitietnhapkho`
  ADD PRIMARY KEY (`chitiet_nk_id`);

--
-- Chỉ mục cho bảng `chitietxuatkho`
--
ALTER TABLE `chitietxuatkho`
  ADD PRIMARY KEY (`chitiet_xk_id`);

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
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`kho_id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nhanvien_id`);

--
-- Chỉ mục cho bảng `nhapkho`
--
ALTER TABLE `nhapkho`
  ADD PRIMARY KEY (`nhapkho_id`);

--
-- Chỉ mục cho bảng `noidung`
--
ALTER TABLE `noidung`
  ADD PRIMARY KEY (`noidung_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `timkiem`
--
ALTER TABLE `timkiem`
  ADD PRIMARY KEY (`id_timkiem`);

--
-- Chỉ mục cho bảng `xuatkho`
--
ALTER TABLE `xuatkho`
  ADD PRIMARY KEY (`xuatkho_id`);

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
  MODIFY `chitietdondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT cho bảng `chitietnhapkho`
--
ALTER TABLE `chitietnhapkho`
  MODIFY `chitiet_nk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `chitietxuatkho`
--
ALTER TABLE `chitietxuatkho`
  MODIFY `chitiet_xk_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `kho_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `nhapkho`
--
ALTER TABLE `nhapkho`
  MODIFY `nhapkho_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `noidung`
--
ALTER TABLE `noidung`
  MODIFY `noidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT cho bảng `timkiem`
--
ALTER TABLE `timkiem`
  MODIFY `id_timkiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT cho bảng `xuatkho`
--
ALTER TABLE `xuatkho`
  MODIFY `xuatkho_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
