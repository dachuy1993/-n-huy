-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2017 lúc 10:18 SA
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
(7, 33, 'Bàn phấn', 300000, 'giuong3.png', 1, '2x3x4', 'b', 'g', '18'),
(8, 36, 'Bàn ghế uống nước', 12, '', 2, '2x2x2', 'đỏ', 'gụ', '12'),
(9, 37, 'Tủ áo', 5000000, 'giuong2.png', 10, '1x5x8', 'v', 'g', '24'),
(10, 39, 'Tủ áo', 5000000, 'giuong2.png', 1, '1x5x8', 'v', 'g', '24'),
(11, 0, 'giường', 0, '', 10, '20x12x5', 'đỏ', 'hương', ''),
(12, 0, 'd', 0, '', 25, 'd', 'd', 'd', ''),
(13, 0, 'giường', 0, '', 25, '14x25x65', 'đỏ', 'hương', '');

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
(39, '2017-05-28 08:11:48', 5000000, 'đại bảo', '0999999', 'dai@gmail.com', 'hà nội', 'đông anh hà nội', ''),
(40, '2017-05-30 02:56:32', 0, 'hƯƠNG', '01698642243', 'HUONG@gmail.com', 'hải dương', 'chuyển bằng máy bay', 'Xác nhận');

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
(20, 'trang', 'trang@ggg', '552', 'thía bình', 'dd');

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
(9, '', 'tuao62.jpg', 0, 0, '', '', '', '', 0, '');

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
  `ten_tieu_de` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidung`
--

INSERT INTO `noidung` (`noidung_id`, `ten_tieu_de`, `noi_dung`) VALUES
(1, 'Hình thức thanh toán', 'Để mua hàng trực tuyến từ công ty chúng tôi, Quý khách vui lòng đọc kỹ những thoả thuận dưới đây và phải chắc rằng Quý khách đồng ý với những thông tin thoả thuận điều khoản này. Nếu không đồng ý vui lòng bỏ qua những mục liên quan đến đặt hàng trực tuyến để truy cập vào các chức năng khác.\r\n\r\nViệc để trang link thoả thuận ngay đầu tiên của website giúp khách hàng xem nhanh chóng hơn. Khi quý khách đã truy cập hoặc đặt hàng, có nghĩa là quý khách đã chấp nhận với những thoả thuận của chúng tôi bên dưới.\r\n\r\nTất cả mọi thông tin về giá cả, bản tin, giao diện,… trên Website đều có thể thay đổi bất cứ lúc nào theo ý của chúng tôi mà không cần báo trước.\r\n\r\nCác thoả thuận và điều khoản dưới đây đều là căn cứ cho những tranh chấp hay khiếu nại của người truy cập website, người thực hiện các giao dịch trực tuyến với công ty chúng tôi trước pháp luật. Khi có bất cứ tranh chấp nào xảy ra chúng tôi luôn chọn giải pháp ôn hoà làm hài lòng quý khách hàng trên cơ sở tôn trọng lẫn nhau. Và cuối cùng nếu không còn bất kỳ giải pháp nào khác, chúng tôi khuyến nghị nên đưa các vấn đề đó ra trước pháp luật theo đúng các thủ tục tố tụng để đảm bảo công bằng và quyền lợi của cả hai bên. Mọi chi phí tố tụng đều do bên nguyên đơn chi trả.\r\n\r\nBất cứ khiếu nại nào của quý khách khi chưa đọc kỹ thoả thuận và điều khoản này dẫn đến việc khiếu nại lên báo chí truyền thông hay một bên nào khác đăng thông tin làm thiệt hại về thương hiệu của chúng tôi. Chúng tôi có quyền khởi kiện quý khách và cả cơ quan đăng tải thông tin không chính xác do chưa đọc kỹ thoả thuận này.\r\n\r\nQuý khách hàng đều có thể thực hiện các giao dịch mua bán hàng hóa thông qua nhiều kênh như điện thoại, email,.. nhưng chúng tôi luôn khuyến khích quý khách sử dụng kênh bán hàng trực tuyến của chúng tôi trước hết để đảm bảo mọi thông tin về đơn hàng là chính xác nhất và quá trình xử lý là nhanh nhất, đồng thời để ủng hộ website ngày càng phát triển hoàn thiện tất cả các chức năng.'),
(2, 'Vận chuyển giao nhận', 'Vận chuyển giao nhận\r\n\r\n    CHÍNH SÁCH VỀ GIAO NHẬN HÀNG HÓA\r\n\r\nTrong trường hợp khách hàng ở Hà Nội, chúng tôi sẽ phục vụ tận nơi miến phí cho các đơn đặt hàng với bán kính phục vụ là 12km tính từ kho của Noithatnhapkhau.net.vn;\r\n\r\nLưu ý, chúng tôi chỉ chuyển hàng đến đúng một địa điểm cuối cùng mà khách hàng yêu cầu.\r\n\r\nTrong trường hợp khách hàng ở các tỉnh thành khác, chúng tôi sẽ sử dụng các dịch vụ vận chuyển và giao nhận hiện có trên thị trường để đảm bảo đơn hàng sẽ đến đúng địa điểm, đúng thời gian và đảm bảo an toàn cho hàng hóa.\r\n\r\nKhi nhận hàng, quý khách lưu ý kiểm tra thật kỹ sản phẩm …trước khi ký nhận vào biên nhận hàng hoá.\r\n\r\nTrong trường hợp giao nhận sai địa chỉ, chúng tôi sẽ xử lý theo 2 trường hợp như sau:\r\n\r\n    Trường hợp giao nhận sai địa chỉ do lỗi phía chúng tôi, chúng tôi sẽ chịu hoàn toàn trách nhiệm và sẽ đề xuất giải pháp đền bù với quý khách hàng.\r\n    Trường hợp giao nhận sai địa chỉ do lỗi cung cấp thông tin không chính xác từ phía khách hàng, chúng tôi sẽ hoàn trả lại tiền sau khi đã khấu trừ các chi phí phát sinh một cách rõ ràng. Nếu quý khách vẫn muốn thực hiện đơn hàng, đề nghị quý khách vui lòng cung cấp lại thông tin chính xác và có yêu cầu trực tiếp đến chúng tôi, hoặc thực hiện lại một đơn hàng online khác.\r\n\r\nLưu ý, các công ty dịch vụ vận chuyển và giao nhận sẽ không hoạt động vào thứ Bảy và Chủ nhật cũng như những ngày Lễ, Tết. Vì vậy, các đơn hàng trước những ngày này 1 ngày hoặc đúng những ngày này đều được xử lý vào ngày làm việc đầu tiên.\r\n');

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
  `Thong_tin_sp` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Luot_xem` int(11) NOT NULL,
  `Luot_mua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `Ten_sp`, `Anh_sp`, `Gia_sp`, `Soluong_sp`, `Kichthuoc_sp`, `Mausac_sp`, `Chatlieu_sp`, `ma_sp`, `danhmuc_id`, `Baohanh_sp`, `Thong_tin_sp`, `Luot_xem`, `Luot_mua`) VALUES
(27, 'Bộ Bàn Ghế', 'banghe1.jpg', 15000000, 54, '30x40x40', 'đỏ', 'sưa', 'KBG', 2, '5 năm', 'huyyy', 0, 0),
(35, 'Bộ bàn ghế', 'banghe22.jpg', 30000000, 5, '30x40x80', 'nâu', 'gụ', 'KBG', 2, '5 năm', 'hương', 0, 0),
(36, 'Bộ bàn ghế', 'banghe31.jpg', 25000000, 3, '30x50x60', 'vàng', 'gụ', 'KBG', 2, '5 năm', 'Bộ bàn ghế gồm 2 ghế ngồi, 1 ghế dài và 1 bàn uốn nước', 0, 0),
(37, 'Bộ bàn ghế', 'banghe42.jpg', 10000000, 5, '14x25x65', 'vàng', 'hương', 'KBG', 2, '7 năm', 'Bộ bàn ghế gồm 3 ghế ngồi, 2 ngế dài và 1 bàn uống nước', 0, 0),
(38, 'Bộ bàn ghế', 'banghe5.jpg', 30000000, 6, '52x64x82', 'nâu', 'hương', 'KBG', 2, '3 năm', 'Bộ bàn ghế gồm 2 ghế đôn, 1 ghế ngồi, 1 ghế dài và 1 bàn uống nước', 0, 0),
(39, 'Bộ bàn ghế', 'banghe61.jpg', 15000000, 10, '14x25x65', 'nâu', 'sưa', 'KBG', 2, '10 năm', 'Bộ bàn ghế gồm có 2 ghế đôn, 4 ghế ngồi và bàn uống nước', 0, 0),
(40, 'Sập', 'sapgu2.jpg', 35000000, 6, '250x300x40', 'đỏ', 'hương', 'KSG', 1, '10 năm', '', 0, 0),
(41, 'Sập hương', 'sapgu3.jpg', 50000000, 2, '300x300x60', 'nâu', 'hương', 'KSG', 2, '7 năm', '', 0, 0),
(42, 'Bàn phấn', 'banphan1.jpg', 7000000, 5, '50x40x60', 'đỏ', 'gụ', 'NBP', 3, '3 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 0, 0),
(43, 'Bàn phấn', 'banphan3.jpg', 5000000, 10, '30x50x60', 'vàng', 'hương', 'NBP', 3, '5 năm', 'Bộ bàn phấn gồm 1 ghế nhỏ và 1 bàn trang điểm', 0, 0),
(44, 'Giường', 'giuong4.jpg', 15000000, 3, '150x200x30', 'đỏ', 'hương', 'NG', 3, '5 năm', '', 0, 0),
(45, 'Giường hiện đại', 'giuong3.png', 50000000, 2, '250x200x40', 'trắng', 'gụ', 'NG', 3, '5 năm', '', 0, 0),
(46, 'Bàn ăn', 'banan31.jpg', 20000000, 3, '14x25x65', 'vàng', 'hương', 'ABA', 4, '3 năm', 'Bộ bàn ăn gồm 4 ghế và 1 bàn ăn', 0, 0),
(47, 'Bàn ăn', 'banan5.jpg', 60000000, 3, '150x200x30', 'vàng', 'hương', 'ABA', 4, '7 năm', '', 0, 0),
(48, 'Ban thờ', 'bantho4.jpg', 27000000, 3, '150x150x40', 'đỏ', 'gụ', 'TBT', 5, '7 năm', '', 0, 0),
(49, 'Hoành phi câu đối', 'hoanhphi5.jpg', 20000000, 2, '30x200x5', 'vàng - đỏ', 'hương', 'THP', 5, '5 năm', '', 0, 0),
(50, 'Bàn văn phòng', 'banvp5.jpg', 10000000, 1, '120x80x50', 'trắng', 'gụ', 'VBG', 6, '5 năm', '', 0, 0),
(51, 'Bàn giám đốc', 'banvp3.gif', 30000000, 2, '150x200x60', 'đen', 'hương', 'VBG', 6, '5 năm', '', 0, 0),
(52, 'Tủ tài liệu', 'tutailieu2.jpg', 50000000, 2, '200x60x180', 'trắng', 'gụ', 'VTL', 6, '3 năm', '', 0, 0),
(53, 'Tranh tứ quý', 'tranhgo1.jpg', 7000000, 5, '90x20x5', 'đỏ', 'hương', 'DTG', 9, '3 năm', '', 0, 0),
(54, 'Tương quan vũ', 'tuong2.jpg', 9000000, 10, '90x20x20', 'đỏ', 'hương', 'DGT', 9, '7 năm', '', 0, 0),
(55, 'Tủ áo', 'tuao1.jpg', 25000000, 3, '200x60x180', 'nâu', 'gụ', 'NTA', 3, '7 năm', '', 0, 0);

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
  MODIFY `chitietdondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `dondh`
--
ALTER TABLE `dondh`
  MODIFY `Dondh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `kho_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `noidung`
--
ALTER TABLE `noidung`
  MODIFY `noidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
