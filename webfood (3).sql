-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2021 lúc 06:50 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(3, 'img/banners/banner1.jpg'),
(4, 'img/banners/banner2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(1, 56, 1, 8590000),
(1, 21, 1, 2290000),
(2, 44, 1, 39900000),
(3, 44, 1, 39900000),
(4, 44, 1, 39900000),
(6, 57, 1, 14490000),
(7, 56, 1, 8590000),
(8, 56, 1, 8590000),
(9, 12, 1, 6900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Rau củ quả'),
(2, 'Bánh kẹo'),
(3, 'Đồ khô, Gạo'),
(4, 'Thịt, cá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `mahinh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`mahinh`, `masp`, `hinhanh`) VALUES
(1, 2, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/products-0013s-0002-3.jpg?v=1634266801473'),
(2, 2, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/products-0013s-0001-3b-1.jpg?v=1634266801057'),
(3, 3, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/pro49-grande.jpg?v=1634206944893'),
(4, 3, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/pro50-grande.jpg?v=1634206945323'),
(5, 3, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/pro51-grande.jpg?v=1634206946413'),
(6, 4, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/pro16-grande.jpg?v=1634206473713'),
(7, 4, 'https://bizweb.dktcdn.net/thumb/large/100/439/653/products/pro17-grande.jpg?v=1634206474517'),
(8, 5, 'https://bizweb.dktcdn.net/100/439/653/themes/838421/assets/frame4.png?1635678921397'),
(9, 5, 'https://product.hstatic.net/1000282430/product/ca-chua-beef_534552a9e4db4d9f90678b4593a96de0.jpg'),
(10, 5, 'https://img.sosanhgia.com/images/500x0/cf8972f20f3346218af6d85b9997b6b0/ca-chua-beef.jpeg'),
(11, 6, 'https://bizweb.dktcdn.net/100/439/653/themes/838421/assets/frame4.png?1635678921397'),
(12, 6, 'https://thuonghieuvaphapluat.vn/Images/dinhhai/2021/10/07/le_han_quoc_singo__3__1288140c49734873a6acdc9e9eac7057.jpg'),
(13, 6, 'https://vcdn-giadinh.vnecdn.net/2021/04/28/511-1618387705-8400-1619603902.png'),
(14, 7, 'https://lh3.googleusercontent.com/proxy/daz2nvPvnXgAJl7Q6JBB0EkAsXHP_9Z5sA-		joMgIms5gK9yY2mHk10AQ_CV2HLoO0NXkIv2ixkpbUnayvvssBlwfTAcqiinFCBEak8N9CFK7SkfjiOJH30wcHUCRk6jGTZCvreMSE8iwpg'),
(15, 7, 'https://lh3.googleusercontent.com/proxy/Oju6P_18CgOG4JjemDvIZ-oAvnWiokSorZNcjeUL-D1Z0TFvldMfY-lIr5JzKq696H-	x7dG_e2DI5hxYd3sPmWVSUc8q0i0fXcfVQiGT2mJHgaXCXQ5EN1edlxb7QRI3WVnb3r5_TRUI4mTbF2s'),
(16, 7, 'https://timlathay.vn/Attachs/Items/2021-08-24/Si%C3%AAu%20ch%E1%BB%A3%20Th%E1%BA%ADt%20T%E1%BB%91t/281563-073449064.jpg'),
(17, 8, 'https://cdn.tgdd.vn/Products/Images/8788/202932/bhx/tao-gala-nhap-khau-new-zealand-tui-1kg-6-7-trai-202101271720530567.jpg'),
(18, 8, 'https://cdn.tgdd.vn/Products/Images/7578/202932/bhx/tao-gala-new-zealand-nhap-khau-hop-1kg-6-7-trai-201910261118388477.jpg'),
(19, 8, 'http://img.websosanh.vn/v2/users/wss/images/tao-gala-new-100g/vrb7g1uvgw0gt.jpg'),
(20, 9, 'https://storage.googleapis.com/ifarmer-vn/be28752203434b8e844628a1d5133e53/trai-cam-mat-loai-xuat-khau-trong-luong-1-kg.jpg'),
(21, 10, 'https://thucphamplaza.com/tpplaza_content/uploads/products_img/Nho-xanh-Thaco-hop-vang-140g-247x296.jpg'),
(22, 10, 'https://thucphamplaza.com/tpplaza_content/uploads/products_img/Thaco-Raisins-140g-do-247x296.jpg'),
(23, 11, 'https://viamclinic.vn/upload/banner/mbd1610330667.jpg'),
(24, 11, 'https://vn-test-11.slatic.net/p/23652a8da74e801fcc3f74926af327ed.jpg'),
(25, 12, 'https://salt.tikicdn.com/cache/w1200/ts/product/7b/85/b0/f19429872b739039f86dba049aa9471c.jpg'),
(26, 12, 'https://cdn.tgdd.vn/Products/Images/3237/77106/bhx/ca-nuc-xot-ca-3-co-gai-hop-190g-201905220355494058.jpg'),
(27, 13, 'https://vinmec-prod.s3.amazonaws.com/images/20200217_173841_298450_Dau-oliu-duoc-su-du.max-1800x1800.jpg'),
(28, 13, 'https://toshiko.vn/wp-content/uploads/2021/07/dau-oliu-co-tac-dung-gi-1.jpeg'),
(29, 14, 'https://lh3.googleusercontent.com/proxy/bZv7rXJpbqpDtQ1EC3BY7Vfwd3T_1hsOQwZCv_-JP6VhhHl1q0_cYn5gWhv7ChpFM3rLEpGGaNujipq2h-lcRgdo6La_zRGjKBPtjHeH_28ncdwu-kvb42m3Rc4SXqGbrQrTMMB5IF7LXN1DX1BcMNk26sDE5dTVqeaurGK1bFOvzkuKDA'),
(30, 15, 'https://suckhoedoisong.qltns.mediacdn.vn/thumb_w/1200/324455921873985536/2021/8/24/banh-trung-thu-1629769530136945795794-47-0-460-660-crop-1629769537341793257055.jpg'),
(31, 16, 'https://xoichecohoa.com/wp-content/uploads/2019/09/banh-phu-the.jpg'),
(32, 17, 'https://mocchautourism.com/uploads/news/2021_01/banh-san-moc-chau-copy.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(1, 1, '2020-07-23 17:44:22', 'Duong Duong', '0976942493', 'An Vĩnh', '', 10880000, '0'),
(2, 1, '2020-07-24 21:54:03', 'Duong Duong', '0976942493', 'An Vĩnh', '', 39932000, '1'),
(3, 1, '2020-07-24 22:05:07', 'Duong Duong', '0976942493', 'An Vĩnh', '', 39932000, '0'),
(4, 1, '2020-07-24 22:06:01', 'Duong Duong', '0976942493', 'An Vĩnh', '', 39932000, '0'),
(6, 13, '2020-07-25 11:59:47', 'Nguyễn Trí', '02354129852', '39 đường 3/2 Đà Nẵng', '', 15340000, '0'),
(7, 1, '2020-07-27 10:49:40', 'Duong Duong', '0976942493', 'An Vĩnh', '', 9440000, '0'),
(8, 14, '2020-10-19 14:41:42', 'admin admin', '23423', 'nui thanh', '', 8590000, '0'),
(9, 15, '2020-10-22 08:05:50', 'a c', '1234567890', 'abc', '', 6900000, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', 1),
(2, 'Giảm giá', 'GiamGia', 500000, '2019-05-01 00:00:00', 1),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, '2019-05-01 00:00:00', 1),
(4, 'Trả góp', 'TraGop', 0, '2019-05-01 00:00:00', 1),
(5, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', 1),
(13, 'Thích thì khuyến mãi', 'Khuyến mãi Ok', 100, '2020-07-18 11:26:06', 1),
(14, '', '', 0, '2020-07-21 10:10:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `Mota`, `MaDM`) VALUES
(1, 'Hải sản', 'Hải sản tươi sạch', 4),
(2, 'Gia súc', 'Hải sản tươi sạch', 4),
(3, 'Gia cầm', 'Hải sản tươi sạch', 4),
(4, 'Trái cây', 'Hải sản tươi sạch', 1),
(5, 'Rau củ', 'Hải sản tươi sạch', 1),
(6, 'Đồ hộp', 'Hải sản tươi sạch', 3),
(7, 'Hương liệu', 'Hải sản tươi sạch', 3),
(8, 'Lương thực', 'Sản phẩm của VsMartaHải sản tươi sạch', 3),
(9, 'Kẹo Nhập khẩu', 'Hải sản tươi sạch', 2),
(10, 'Kẹo Trong nước', 'Hải sản tươi sạch', 2),
(11, 'Cá', '', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Duong', 'Duong', 'Nam', '0976942493', 'duongls2ls@gmail.com', 'An Vĩnh', 'duongls2ls', 'e99a18c428cb38d5f260853678922e03', 2, 1),
(2, 'Duong', 'A ', 'Nam', '0976942494', 'duonglslata@gmail.com', 'An Hải', 'duongls', 'e99a18c428cb38d5f260853678922e03', 3, 1),
(3, 'Duong', 'B', 'Nữ', '0976942495', 'duongls@gmail.com', 'An Bình', 'duongAB', 'e99a18c428cb38d5f260853678922e03', 3, 1),
(12, 'Trịnh', 'Phúc', 'Nam', '0383425354', 'phucaguero611@gmail.com', 'Đà Nẵng', 'liqin', 'e99a18c428cb38d5f260853678922e03', 2, 1),
(13, 'Nguyễn', 'Trí', '', '02354129852', 'tringuyendb@gmail.com', '', 'trimen', 'e99a18c428cb38d5f260853678922e03', 1, 1),
(14, 'admin', 'admin', 'nam', '23423', 'admin@gmail.com', 'nui thanh', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 1),
(15, 'a', 'c', '', '1234567890', 'a@gmail.com', '', '123456', '040d9b33af7249502cd6ec06c422755a', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `MaKM` int(11) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `ThoiGian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `MaKM`, `SoSao`, `SoDanhGia`, `TrangThai`, `ThoiGian`) VALUES
(1, 2, 'Nạc lưng bò mát nhập khẩu', 360000, 30, 1, 0, 0, 1, '2020-07-23 15:48:09'),
(2, 1, 'Cá Hồi Tươi Nhập Khẩu', 3490000, 20, 4, 0, 0, 1, '2020-07-21 19:19:36'),
(3, 5, 'Cà Tím Đà Lạt Loại To', 1250000, 20, 1, 0, 0, 1, '2020-07-21 19:23:16'),
(4, 4, 'Dưa Chuột Gai Siêu Giòn', 8890000, 20, 1, 0, 0, 1, '2020-07-21 19:28:23'),
(5, 10, 'Cà chua beef túi lưới 500g', 36000000, 5, 5, 0, 0, 1, '2020-07-23 14:20:32'),
(6, 4, 'Lê Singo nhập khẩu Trung Quốc hộp 1kg', 18990000, 10, 1, 0, 0, 1, '2020-07-21 19:33:15'),
(7, 4, 'Dưa Hấu Siêu Ngọt Nhập Khẩu', 4490000, 10, 2, 0, 0, 1, '2020-07-23 15:52:57'),
(8, 4, 'Táo Gala nhập khẩu New Zealand túi 1kg', 4490000, 20, 2, 0, 0, 1, '2020-07-23 15:54:12'),
(9, 4, 'Trái cam mật', 5990000, 10, 1, 0, 0, 1, '2020-07-23 15:55:13'),
(10, 9, 'Nho xanh sấy khô Thaco Raisins – hộp vàng 140g', 6490000, 10, 4, 0, 0, 1, '2020-07-23 15:56:28'),
(11, 8, 'Gạo hoa nhài', 21990000, 5, 5, 0, 0, 1, '2020-07-23 15:57:44'),
(12, 6, 'Cá hộp 3 cô gái', 6900000, 10, 2, 0, 0, 1, '2020-07-23 15:58:14'),
(13, 7, 'Dầu ôliu', 11490000, 10, 4, 0, 0, 1, '2020-07-23 15:59:28'),
(14, 8, 'Bún khô', 3490000, 5, 4, 0, 0, 1, '2020-07-23 16:00:23'),
(15, 10, 'Bánh trung thu', 5690000, 5, 1, 0, 0, 1, '2020-07-23 16:01:26'),
(16, 10, 'Bánh phu thuê', 9990000, 10, 4, 0, 0, 1, '2020-07-23 16:03:30'),
(17, 9, 'Bánh sắn Mộc Châu', 13900000, 10, 1, 0, 0, 1, '2020-07-22 09:30:01'),
(18, 8, 'Xiaomi Redmi Note 9s', 5990000, 10, 4, 0, 0, 1, '2020-07-23 16:04:51'),
(19, 8, 'VsMart Active 3', 3960000, 5, 3, 0, 0, 1, '2020-07-23 16:07:03'),
(20, 8, 'VsMart Bee 3', 1590000, 20, 3, 0, 0, 1, '2020-07-23 16:08:30'),
(21, 8, 'VsMart Joy 3', 2290000, 20, 3, 0, 0, 1, '2020-07-23 16:09:52'),
(22, 8, 'VsMart Star 4', 2490000, 20, 5, 0, 0, 1, '2020-07-23 16:11:26'),
(23, 9, 'Realme 5Pro', 4990000, 20, 3, 0, 0, 1, '2020-07-23 16:12:46'),
(24, 9, 'Realme 6 Pro', 7990000, 10, 4, 0, 0, 1, '2020-07-23 16:13:52'),
(31, 10, 'Sạc dự phòng 10.000mAh', 850000, 10, 1, 0, 0, 1, '2020-07-23 16:21:59'),
(35, 10, 'Sạc dây Nokia e.Saver X032', 50000, 0, 1, 0, 0, 1, '2020-07-23 16:17:43'),
(42, 10, 'Đế điện thoại eSaver', 35000, 10, 1, 0, 0, 1, '2020-07-22 20:17:45'),
(43, 1, 'iPhone 7 32GB', 8490000, 10, 1, 0, 0, 1, '2020-07-22 22:02:11'),
(44, 1, 'iPhone 11 Pro Max 512GB', 39900000, 10, 4, 0, 0, 1, '2020-07-22 22:01:48'),
(45, 1, 'iPhone 11 Pro Max 256GB', 36490000, 10, 4, 0, 0, 1, '2020-07-23 14:08:58'),
(46, 1, 'iPhone 11 256GB', 24990000, 10, 4, 0, 0, 1, '2020-07-22 22:01:11'),
(47, 1, 'iPhone Xs Max 64GB', 23990000, 10, 2, 0, 0, 1, '2020-07-22 22:00:53'),
(48, 1, 'iPhone 8 Plus 128GB', 15990000, 20, 1, 0, 0, 1, '2020-07-22 22:01:02'),
(54, 7, ' phong cách mùa hè', 30000, 10, 1, 0, 0, 1, '2020-07-23 17:06:27'),
(55, 7, 'Mềm trong suốt', 30000, 10, 1, 0, 0, 1, '2020-07-23 17:10:19'),
(56, 2, 'Điện thoại Vivo V19', 8590000, 10, 1, 0, 0, 1, '2020-07-23 17:15:27'),
(57, 1, 'Điện thoại iPhone SE 12', 14490000, 10, 1, 0, 0, 1, '2020-07-23 17:20:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`mahinh`,`masp`),
  ADD KEY `sp_ha` (`masp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `mahinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `sp_ha` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
