-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2017 lúc 10:36 CH
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
(26, 51, 39, 'Bộ bàn ghế', 15000000, 'banghe61.jpg', 1, '14x25x65', 'nâu', 'sưa', '10 năm');

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
(49, '2017-06-09 22:21:08', 15000000, 'ed', '444', 'e@ff', '4', 'ddd', '0'),
(50, '2017-06-09 22:23:52', 2147483647, 'nguyễn đắc hiệp', '4444', 'h@gm', '4', 'dd', '0'),
(51, '2017-06-10 11:06:23', 25000000, 'nguyễn đắc hiệp', '444', 'h@gm', '4', 'd', '0');

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
(16, 'Nguyễn Đắc Huy 22222', 'dac.huy.9x@gmail.com', '0966599493', 'ha noi', 'Hưng yên'),
(17, 'Luyện Huy', 'luyenhuy@gmail', '0123456789', 'HCM', 'đưa bằng máy bay'),
(18, 'đồ gỗ huy hip', 'dac.huy.9x@gmail.com', '098756413', 'Vân hà đông anh hà nội', 'đưa về tận nhà'),
(19, 'hƯƠNG', 'HUONG@gmail.com', '01698642243', 'hải dương', 'chuyển bằng máy bay'),
(20, 'trang', 'trang@ggg', '552', 'thía bình', 'dd'),
(23, 'Trần Ngọc Đức', 'duc.94@gmail.com', '0966599493', '', 'Chất liệu Hương'),
(24, 'Trần Ngọc Đức', 'duc.94@gmail.com', '0966599493', '', 'Chất liệu Hương');

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
-- Cấu trúc bảng cho bảng `noidung`
--

CREATE TABLE `noidung` (
  `noidung_id` int(11) NOT NULL,
  `ten_tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `danh_muc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidung`
--

INSERT INTO `noidung` (`noidung_id`, `ten_tieu_de`, `noi_dung`, `danh_muc`, `thoi_gian`) VALUES
(1, 'Hình thức thanh toán', '<p>Để mua h&agrave;ng trực tuyến từ c&ocirc;ng ty ch&uacute;ng t&ocirc;i, Qu&yacute; kh&aacute;ch vui l&ograve;ng đọc kỹ những thoả thuận dưới đ&acirc;y v&agrave; phải chắc rằng Qu&yacute; kh&aacute;ch đồng &yacute; với những th&ocirc;ng tin thoả thuận điều khoản n&agrave;y. Nếu kh&ocirc;ng đồng &yacute; vui l&ograve;ng bỏ qua những mục li&ecirc;n quan đến đặt h&agrave;ng trực tuyến để truy cập v&agrave;o c&aacute;c chức năng kh&aacute;c. Việc để trang link thoả thuận ngay đầu ti&ecirc;n của website gi&uacute;p kh&aacute;ch h&agrave;ng xem nhanh ch&oacute;ng hơn. Khi qu&yacute; kh&aacute;ch đ&atilde; truy cập hoặc đặt h&agrave;ng, c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch đ&atilde; chấp nhận với những thoả thuận của ch&uacute;ng t&ocirc;i b&ecirc;n dưới. Tất cả mọi th&ocirc;ng tin về gi&aacute; cả, bản tin, giao diện,&hellip; tr&ecirc;n Website đều c&oacute; thể thay đổi bất cứ l&uacute;c n&agrave;o theo &yacute; của ch&uacute;ng t&ocirc;i m&agrave; kh&ocirc;ng cần b&aacute;o trước. C&aacute;c thoả thuận v&agrave; điều khoản dưới đ&acirc;y đều l&agrave; căn cứ cho những tranh chấp hay khiếu nại của người truy cập website, người thực hiện c&aacute;c giao dịch trực tuyến với c&ocirc;ng ty ch&uacute;ng t&ocirc;i trước ph&aacute;p luật. Khi c&oacute; bất cứ tranh chấp n&agrave;o xảy ra ch&uacute;ng t&ocirc;i lu&ocirc;n chọn giải ph&aacute;p &ocirc;n ho&agrave; l&agrave;m h&agrave;i l&ograve;ng qu&yacute; kh&aacute;ch h&agrave;ng tr&ecirc;n cơ sở t&ocirc;n trọng lẫn nhau. V&agrave; cuối c&ugrave;ng nếu kh&ocirc;ng c&ograve;n bất kỳ giải ph&aacute;p n&agrave;o kh&aacute;c, ch&uacute;ng t&ocirc;i khuyến nghị n&ecirc;n đưa c&aacute;c vấn đề đ&oacute; ra trước ph&aacute;p luật theo đ&uacute;ng c&aacute;c thủ tục tố tụng để đảm bảo c&ocirc;ng bằng v&agrave; quyền lợi của cả hai b&ecirc;n. Mọi chi ph&iacute; tố tụng đều do b&ecirc;n nguy&ecirc;n đơn chi trả. Bất cứ khiếu nại n&agrave;o của qu&yacute; kh&aacute;ch khi chưa đọc kỹ thoả thuận v&agrave; điều khoản n&agrave;y dẫn đến việc khiếu nại l&ecirc;n b&aacute;o ch&iacute; truyền th&ocirc;ng hay một</p>\r\n<p>b&ecirc;n n&agrave;o kh&aacute;c đăng th&ocirc;ng tin l&agrave;m thiệt hại về thương hiệu của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i c&oacute; quyền khởi kiện qu&yacute; kh&aacute;ch v&agrave; cả cơ quan đăng tải th&ocirc;ng tin kh&ocirc;ng ch&iacute;nh x&aacute;c do chưa đọc kỹ thoả thuận n&agrave;y. Qu&yacute; kh&aacute;ch h&agrave;ng đều c&oacute; thể thực hiện c&aacute;c giao dịch mua b&aacute;n</p>\r\n<p>h&agrave;ng h&oacute;a th&ocirc;ng qua nhiều k&ecirc;nh như điện thoại, email,.. nhưng ch&uacute;ng t&ocirc;i lu&ocirc;n khuyến kh&iacute;ch qu&yacute; kh&aacute;ch sử dụng k&ecirc;nh b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i trước hết để đảm bảo mọi th&ocirc;ng tin về đơn h&agrave;ng l&agrave; ch&iacute;nh x&aacute;c nhất v&agrave; qu&aacute; tr&igrave;nh xử l&yacute; l&agrave; nhanh nhất, đồng thời để ủng hộ website ng&agrave;y c&agrave;ng ph&aacute;t triển ho&agrave;n thiện tất cả c&aacute;c chức năng.</p>\r\n<p><strong>&aacute;dasda</strong>zcasca</p>', 'Bài viết', '2017-06-08 10:56:27'),
(2, 'Vận chuyển giao nhận', '<p>Vận chuyển giao nhận CH&Iacute;NH S&Aacute;CH VỀ GIAO NHẬN H&Agrave;NG H&Oacute;A Trong trường hợp kh&aacute;ch h&agrave;ng ở H&agrave; Nội, ch&uacute;ng t&ocirc;i sẽ phục vụ tận nơi miến ph&iacute; cho c&aacute;c đơn đặt h&agrave;ng với b&aacute;n k&iacute;nh phục vụ l&agrave; 12km t&iacute;nh từ kho của Noithatnhapkhau.net.vn; Lưu &yacute;, ch&uacute;ng t&ocirc;i chỉ chuyển h&agrave;ng đến đ&uacute;ng một địa điểm cuối c&ugrave;ng m&agrave; kh&aacute;ch h&agrave;ng y&ecirc;u cầu. Trong trường hợp kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh th&agrave;nh kh&aacute;c, ch&uacute;ng t&ocirc;i sẽ sử dụng c&aacute;c dịch vụ vận chuyển v&agrave; giao nhận hiện c&oacute; tr&ecirc;n thị trường để đảm bảo đơn h&agrave;ng sẽ đến đ&uacute;ng địa điểm, đ&uacute;ng thời gian v&agrave; đảm bảo an to&agrave;n cho h&agrave;ng h&oacute;a. Khi nhận h&agrave;ng, qu&yacute; kh&aacute;ch lưu &yacute; kiểm tra thật kỹ sản phẩm &hellip;trước khi k&yacute; nhận v&agrave;o bi&ecirc;n nhận h&agrave;ng ho&aacute;. Trong trường hợp giao nhận sai địa chỉ, ch&uacute;ng t&ocirc;i sẽ xử l&yacute; theo 2 trường hợp như sau: Trường hợp giao nhận sai địa chỉ do lỗi ph&iacute;a ch&uacute;ng t&ocirc;i, ch&uacute;ng t&ocirc;i sẽ chịu ho&agrave;n to&agrave;n tr&aacute;ch nhiệm v&agrave; sẽ đề xuất giải ph&aacute;p đền b&ugrave; với qu&yacute; kh&aacute;ch h&agrave;ng. Trường hợp giao nhận sai địa chỉ do lỗi cung cấp th&ocirc;ng tin kh&ocirc;ng ch&iacute;nh x&aacute;c từ ph&iacute;a kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ ho&agrave;n trả lại tiền sau khi đ&atilde; khấu trừ c&aacute;c chi ph&iacute; ph&aacute;t sinh một c&aacute;ch r&otilde; r&agrave;ng. Nếu qu&yacute; kh&aacute;ch vẫn muốn thực hiện đơn h&agrave;ng, đề nghị qu&yacute; kh&aacute;ch vui l&ograve;ng cung cấp lại th&ocirc;ng tin ch&iacute;nh x&aacute;c v&agrave; c&oacute; y&ecirc;u cầu trực tiếp đến ch&uacute;ng t&ocirc;i, hoặc thực hiện lại một đơn h&agrave;ng online kh&aacute;c. Lưu &yacute;, c&aacute;c c&ocirc;ng ty dịch vụ vận chuyển v&agrave; giao nhận sẽ kh&ocirc;ng hoạt động v&agrave;o thứ Bảy v&agrave; Chủ nhật cũng như những ng&agrave;y Lễ, Tết. V&igrave; vậy, c&aacute;c đơn h&agrave;ng trước những ng&agrave;y n&agrave;y 1 ng&agrave;y hoặc đ&uacute;ng những ng&agrave;y n&agrave;y đều được xử l&yacute; v&agrave;o ng&agrave;y l&agrave;m việc đầu ti&ecirc;n.</p>', 'Bài viết tư vấn', '2017-06-08 10:57:01'),
(3, 'Mẫu bàn trà nhập khẩu có thiết kế đẹp và vô cùng sang trọng', '<p style=\"text-align: justify;\">Bất k&igrave; một d&ograve;ng sản phẩm nội thất nhập khẩu n&agrave;o được xuất xưởng cũng đều trải qua rất nhiều c&aacute;c c&ocirc;ng đoạn , từ kh&acirc;u l&ecirc;n &yacute; tưởng, thiết kế , chế tạo v&agrave; kiểm định . Do đ&oacute; , khi l&ecirc;n th&agrave;nh sản phẩm , n&oacute; đ&aacute;p ứng đầy đủ c&aacute;c ti&ecirc;u chuẩn về chất lượng , g&oacute;p phần kh&ocirc;ng nhỏ tạo n&ecirc;n một kh&ocirc;ng gian hiện đại v&agrave; v&ocirc; c&ugrave;ng sang trọng. Bởi vậy, ch&uacute;ng ta c&oacute; thể thấy được những mẫu b&agrave;n tr&agrave; nhập khẩu với kiểu d&aacute;ng hiện đại v&agrave; bắt mắt được phủ một lớp sơn Pu cực d&agrave;y, c&oacute; độ b&oacute;ng cực cao v&agrave; c&oacute; độ bền cực tốt. Hầu hết những mẫu<span style=\"color: #0000ff;\"><a style=\"color: #0000ff;\" href=\"http://noithatnhapkhau.net.vn/dmsp/ban-tra-ke-ti-vi-dong-bo/\" target=\"_blank\" rel=\"noopener\"> b&agrave;n tr&agrave; </a></span>nhập khẩu được l&agrave;m từ gỗ c&ocirc;ng nghiệp cao cấp, đ&atilde; qua xử l&yacute; c&ocirc;ng nghiệp , chống được hiện tượng cong v&ecirc;nh mối mọt v&agrave; chịu được kh&iacute; hậu thời tiết kh&aacute;ch nghiệt.</p>\r\n<figure id=\"attachment_12182\" class=\"thumbnail wp-caption aligncenter\" style=\"width: 800px;\"><a href=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" rel=\"attachment wp-att-12182\"><img class=\"size-full wp-image-12182\" src=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg\" sizes=\"(max-width: 800px) 100vw, 800px\" srcset=\"http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-300x169.jpg 300w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579-768x433.jpg 768w, http://noithatnhapkhau.net.vn/assets/ban-tra-mat-da-579.jpg 800w\" alt=\"ban-tra-mat-da-579\" width=\"800\" height=\"451\" /></a>\r\n<figcaption class=\"caption wp-caption-text\">ban-tra-mat-da-579</figcaption>\r\n</figure>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Một trong những mẫu b&agrave;n tr&agrave; nhập khẩu b&aacute;n chạy nhất tr&ecirc;n thị trường nội thất hiện nay đ&oacute; ch&iacute;nh l&agrave; mẫu b&agrave;n tr&agrave; 579 , n&oacute; dường như hội tụ đầy đủ c&aacute;c yếu tố ở tr&ecirc;n. Ch&iacute;nh v&igrave; vậy, kh&ocirc;ng qu&aacute; ngạc nhi&ecirc;n, khi trong qu&aacute; tr&igrave;nh sinh hoạt thường ng&agrave;y ch&uacute;ng ta lỡ l&agrave;m dơ bẩn l&ecirc;n sản phẩm, nhưng chỉ cần một chiếc dẻ lau sạch ẩm, ch&uacute;ng ta dễ d&agrave;ng l&agrave;m sạch vết bẩn một c&aacute;ch nhanh ch&oacute;ng. Sở hữu một bộ khung v&ocirc; c&ugrave;ng chắc chắn, kết hợp với việc sở hữu mặt đ&atilde; nh&acirc;n tạo m&agrave;u xanh ngọc v&ocirc; c&ugrave;ng thanh nh&atilde;,bắt mắt v&agrave; v&ocirc; c&ugrave;ng sang trọng, đ&acirc;y cũng ch&iacute;nh l&agrave; yếu tố ch&iacute;nh khiến sản phẩm chiếm được nhiều cảm t&igrave;nh của kh&aacute;ch h&agrave;ng v&agrave; tạo n&ecirc;n một sức h&uacute;t cực lớn tr&ecirc;n thị trường nội thất trong thời gian qua.</p>', 'Giới thiệu', '2017-06-08 10:58:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `Ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_sp`, `Gia_nhap`, `Soluong_sp`, `Soluong_kho`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `ma_sp`, `danhmuc_id`, `Baohanh_sp`, `Thong_tin_sp`, `Luot_xem`, `Luot_mua`) VALUES
(27, 'Bộ Bàn Ghế', 'banghe1.jpg', 15000000, 1, 100, 100, '30x40x40', 'đỏ', 'sưa', 'KBG', 2, '5 năm', 'huyyy', 0, 0),
(35, 'Bộ bàn ghế', 'banghe22.jpg', 30000000, 455, 100, 110, '30x40x80', 'nâu', 'gụ', 'KBG', 2, '5 năm', 'hương', 0, 0),
(36, 'Bộ bàn ghế', 'banghe31.jpg', 25000000, 0, 100, 100, '30x50x60', 'vàng', 'gụ', 'KBG', 2, '5 năm', 'Bộ bàn ghế gồm 2 ghế ngồi, 1 ghế dài và 1 bàn uốn nước', 0, 0),
(37, 'Bộ bàn ghế', 'banghe42.jpg', 10000000, 0, 99, 100, '14x25x65', 'vàng', 'hương', 'KBG', 2, '7 năm', 'Bộ bàn ghế gồm 3 ghế ngồi, 2 ngế dài và 1 bàn uống nước', 2, 1),
(38, 'Bộ bàn ghế', 'banghe5.jpg', 30000000, 0, 100, 100, '52x64x82', 'nâu', 'hương', 'KBG', 2, '3 năm', 'Bộ bàn ghế gồm 2 ghế đôn, 1 ghế ngồi, 1 ghế dài và 1 bàn uống nước', 11, 0),
(39, 'Bộ bàn ghế', 'banghe61.jpg', 15000000, 0, 98, 100, '14x25x65', 'nâu', 'sưa', 'KBG', 2, '10 năm', 'Bộ bàn ghế gồm có 2 ghế đôn, 4 ghế ngồi và bàn uống nước', 100, 1),
(40, 'Sập', 'sapgu2.jpg', 35000000, 0, 100, 100, '250x300x40', 'đỏ', 'hương', 'KSG', 1, '10 năm', '', 0, 0),
(41, 'Sập hương', 'sapgu3.jpg', 50000000, 0, -899, 100, '300x300x60', 'nâu', 'hương', 'KSG', 2, '7 năm', '<p>huy hip</p>', 58, 0),
(42, 'Bàn phấn', 'banphan1.jpg', 7000000, 0, 100, 100, '50x40x60', 'đỏ', 'gụ', 'NBP', 3, '3 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 1, 0),
(43, 'Bàn phấn', 'banphan3.jpg', 5000000, 0, 100, 100, '30x50x60', 'vàng', 'hương', 'NBP', 3, '5 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 0, 0),
(44, 'Giường', 'giuong4.jpg', 15000000, 0, 100, 100, '150x200x30', 'đỏ', 'hương', 'NG', 3, '5 năm', '', 0, 0),
(45, 'Giường hiện đại', 'giuong3.png', 50000000, 0, 100, 100, '250x200x40', 'trắng', 'gụ', 'NG', 3, '5 năm', '', 0, 0),
(46, 'Bàn ăn', 'banan31.jpg', 20000000, 0, 100, 100, '14x25x65', 'vàng', 'hương', 'ABA', 4, '3 năm', 'Bộ bàn ăn gồm 4 ghế và 1 bàn ăn', 0, 0),
(47, 'Bàn ăn', 'banan5.jpg', 60000000, 0, 100, 100, '150x200x30', 'vàng', 'hương', 'ABA', 4, '7 năm', '', 0, 0),
(48, 'Ban thờ', 'bantho4.jpg', 27000000, 0, 3, 0, '150x150x40', 'đỏ', 'gụ', 'TBT', 5, '7 năm', '', 1, 0),
(49, 'Hoành phi câu đối', 'hoanhphi5.jpg', 20000000, 0, 2, 0, '30x200x5', 'vàng - đỏ', 'hương', 'THP', 5, '5 năm', '', 3, 0),
(50, 'Bàn văn phòng', 'banvp5.jpg', 10000000, 0, 1, 0, '120x80x50', 'trắng', 'gụ', 'VBG', 6, '5 năm', '', 0, 0),
(51, 'Bàn giám đốc', 'banvp3.gif', 30000000, 0, 2, 0, '150x200x60', 'đen', 'hương', 'VBG', 6, '5 năm', '', 0, 0),
(52, 'Tủ tài liệu', 'tutailieu2.jpg', 50000000, 0, 2, 0, '200x60x180', 'trắng', 'gụ', 'VTL', 6, '3 năm', '', 0, 0),
(53, 'Tranh tứ quý', 'tranhgo1.jpg', 7000000, 0, 5, 0, '90x20x5', 'đỏ', 'hương', 'DTG', 9, '3 năm', '', 0, 0),
(54, 'Tương quan vũ', 'tuong2.jpg', 9000000, 0, 10, 0, '90x20x20', 'đỏ', 'hương', 'DGT', 9, '7 năm', '', 0, 0),
(55, 'Tủ áo', 'tuao1.jpg', 25000000, 0, 3, 0, '200x60x180', 'nâu', 'gụ', 'NTA', 3, '7 năm', '', 0, 0),
(56, 'Tranh gỗ', 'tranhgo5.jpg', 5, 0, 5, 0, '5', '5', '5', 'TG', 9, '3 năm', '5', 0, 0);

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
  MODIFY `chitietdondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
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
-- AUTO_INCREMENT cho bảng `noidung`
--
ALTER TABLE `noidung`
  MODIFY `noidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
