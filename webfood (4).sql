-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 11:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(3, 'img/banners/banner1.jpg'),
(4, 'img/banners/banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(1, 21, 1, 2290000),
(2, 44, 1, 39900000),
(3, 44, 1, 39900000),
(4, 44, 1, 39900000),
(9, 12, 1, 6900000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Rau củ quả'),
(2, 'Bánh kẹo'),
(3, 'Đồ khô, Gạo'),
(4, 'Thịt, cá');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `mahinh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tenhinh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`mahinh`, `masp`, `hinhanh`, `tenhinh`) VALUES
(1, 2, 'products-0013s-0002-3.webp', 'hinhanh1'),
(2, 2, 'products-0013s-0001-3b-1.webp', 'hinhanh2'),
(3, 3, 'pro49-grande.webp', 'hinhanh1'),
(4, 3, 'pro50-grande.webp', 'hinhanh2'),
(5, 3, 'pro51-grande.webp', 'hinhanh3'),
(6, 4, 'pro16-grande.webp', 'hinhanh1'),
(7, 4, 'pro17-grande.webp', 'hinhanh2'),
(8, 5, '5a4acb179b272745b7c2980d84b2b359.png', 'hinhanh1'),
(9, 5, 'ca-chua-beef_534552a9e4db4d9f90678b4593a96de0.webp', 'hinhanh2'),
(10, 5, 'cachuanhapkhau.jpeg', 'hinhanh3'),
(11, 6, 'le_han_quoc_singo__3__1288140c49734873a6acdc9e9eac7057.jpg', 'hinhanh1'),
(12, 6, 'le_han_quoc_singo__3__1288140c49734873a6acdc9e9eac7057.jpg', 'hinhanh2'),
(13, 6, '511-1618387705-8400-1619603902.png', 'hinhanh3'),
(14, 7, '543044b729073c87197aecf11127838a.jpg_1200x1200q80.jpg_.webp', 'hinhanh1'),
(15, 7, 'niBXFcL1uoWqyTRqoSHK.jpg', 'hinhanh2'),
(16, 7, '281563-073449064.jpg', 'hinhanh3'),
(17, 8, 'tao-gala-nhap-khau-new-zealand-tui-1kg-6-7-trai-202101271720530567.jpg', 'hinhanh1'),
(18, 8, 'tao-gala-new-zealand-nhap-khau-hop-1kg-6-7-trai-201910261118388477.jpg', 'hinhanh2'),
(19, 8, 'vrb7g1uvgw0gt.jpg', 'hinhanh3'),
(20, 9, 'trai-cam-mat-loai-xuat-khau-trong-luong-1-kg.jpg', 'hinhanh1'),
(21, 10, 'keonhoxanh.jpg', 'hinhanh1'),
(22, 10, 'Thaco-Raisins-140g-do-247x296.jpg', 'hinhanh2'),
(23, 11, 'mbd1610330667.jpg', 'hinhanh1'),
(24, 11, '23652a8da74e801fcc3f74926af327ed.jpg', 'hinhanh2'),
(25, 12, 'f19429872b739039f86dba049aa9471c.jpg', 'hinhanh1'),
(26, 12, 'cahop3cogai.jpg', 'hinhanh2'),
(27, 13, '20200217_173841_298450_Dau-oliu-duoc-su-du.max-1800x1800.jpg', 'hinhanh1'),
(28, 13, 'dau-oliu-co-tac-dung-gi-1.jpeg', 'hinhanh2'),
(29, 14, 'cach-luoc-bun-kho.jpg', 'hinhanh1'),
(30, 15, 'banh-trung-thu-1629769530136945795794-47-0-460-660-crop-1629769537341793257055.jpg', 'hinhanh1'),
(31, 16, 'banh-phu-the.jpg', 'hinhanh1'),
(32, 17, 'banh-san-moc-chau-copy.jpg', 'hinhanh1'),
(108, 20, 'ou8mn-3ojHv5f6VLjTnOVMiAUbWjgbpHbap-bo-uc-tuoi.jpg', 'hinhanh1'),
(109, 20, 'OIP.jfif', 'hinhanh2'),
(110, 20, 'ou8mn-3ojHv5f6VLjTnOVMiAUbWjgbpHbap-bo-uc-tuoi.jpg', 'hinhanh3'),
(111, 20, 'OIP.jfif', 'hinhanh4'),
(112, 19, 'R.jfif', 'hinhanh1'),
(113, 19, 'R (1).jfif', 'hinhanh2'),
(114, 23, 'R (2).jfif', 'hinhanh1'),
(115, 23, 'OIP (1).jfif', 'hinhanh2'),
(116, 21, '14750448136825_ca-rot.jpg', 'hinhanh1'),
(117, 22, 'R.png', 'hinhanh1'),
(118, 22, 'OIP (2).jfif', 'hinhanh2'),
(121, 31, 'R (3).jfif', 'hinhanh1'),
(122, 31, 'OIP (3).jfif', 'hinhanh2'),
(123, 35, 'R (4).jfif', 'hinhanh1'),
(124, 42, 'OIP (4).jfif', 'hinhanh1'),
(125, 42, 'OIP (5).jfif', 'hinhanh2'),
(126, 117, 'R (5).jfif', 'hinhanh1'),
(127, 117, 'OIP.jfif', 'hinhanh2'),
(128, 117, 'OIP (1).jfif', 'hinhanh3'),
(129, 1, 'R (1).jfif', 'hinhanh1'),
(130, 1, 'OIP (2).jfif', 'hinhanh2'),
(131, 1, 'R.jfif', 'hinhanh3'),
(132, 2, 'OIP (3).jfif', 'hinhanh3'),
(133, 118, 'OIP (5).jfif', 'hinhanh1'),
(134, 118, 'OIP (4).jfif', 'hinhanh2'),
(135, 118, 'bot-ngu-coc-danh-cho-ba-bau-nen-lua-chon-w0zlannn.jpg', 'hinhanh3'),
(136, 43, 'thung-30-goi-mi-kokomi-tom-chua-cay-65g-201912101055035782.jpg', 'hinhanh1'),
(137, 43, 'R (3).jfif', 'hinhanh2'),
(138, 43, 'R (2).jfif', 'hinhanh3'),
(139, 44, 'download (2).jfif', 'hinhanh1'),
(140, 44, 'download (1).jfif', 'hinhanh2'),
(141, 44, 'download.jfif', 'hinhanh3'),
(142, 45, 'OIP (8).jfif', 'hinhanh1'),
(143, 45, 'OIP (7).jfif', 'hinhanh2'),
(144, 45, 'OIP (6).jfif', 'hinhanh3'),
(145, 46, 'download (4).jfif', 'hinhanh1'),
(146, 46, 'OIP (9).jfif', 'hinhanh2'),
(147, 46, 'download (3).jfif', 'hinhanh3'),
(148, 47, 'download (6).jfif', 'hinhanh1'),
(149, 47, 'download (5).jfif', 'hinhanh2'),
(150, 47, 'OIP (10).jfif', 'hinhanh3'),
(151, 48, 'download (9).jfif', 'hinhanh1'),
(152, 48, 'download (7).jfif', 'hinhanh2'),
(153, 48, 'download (8).jfif', 'hinhanh3'),
(154, 54, 'download (12).jfif', 'hinhanh1'),
(155, 54, 'download (11).jfif', 'hinhanh2'),
(156, 54, 'download (10).jfif', 'hinhanh3');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
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
-- Dumping data for table `hoadon`
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
-- Table structure for table `khuyenmai`
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
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', 1),
(2, 'Giảm giá', 'GiamGia', 10, '2019-05-01 00:00:00', 1),
(3, 'Giá rẻ online', 'GiaReOnline', 20, '2019-05-01 00:00:00', 1),
(4, 'Trả góp', 'TraGop', 20, '2019-05-01 00:00:00', 1),
(5, 'Mới ra mắt', 'MoiRaMat', 10, '2019-05-01 00:00:00', 1),
(13, 'Thích thì khuyến mãi', 'Khuyến mãi Ok', 50, '2020-07-18 11:26:06', 1),
(14, '', '', 0, '2020-07-21 10:10:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `loaisanpham`
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
(9, 'Bánh Kẹo Nhập khẩu', 'Bánh Kẹo Nhập khẩu', 2),
(10, 'Bánh kẹo trong nước', 'Hải sản tươi sạch', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
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
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Duong', 'Duong', 'Nam', '0976942493', 'duongls2ls@gmail.com', 'An Vĩnh', 'duongls2ls', 'e99a18c428cb38d5f260853678922e03', 2, 1),
(2, 'Duong', 'A ', 'Nam', '0976942494', 'duonglslata@gmail.com', 'An Hải', 'duongls', 'e99a18c428cb38d5f260853678922e03', 3, 1),
(3, 'Duong', 'B', 'Nữ', '0976942495', 'duongls@gmail.com', 'An Bình', 'duongAB', 'e99a18c428cb38d5f260853678922e03', 3, 1),
(12, 'Trịnh', 'Phúc', 'Nam', '0383425354', 'phucaguero611@gmail.com', 'Đà Nẵng', 'liqin', 'e99a18c428cb38d5f260853678922e03', 2, 1),
(13, 'Nguyễn', 'Trí', '', '02354129852', 'tringuyendb@gmail.com', '', 'trimen', 'e99a18c428cb38d5f260853678922e03', 1, 1),
(14, 'admin', 'admin', 'nam', '23423232343322222111', 'admin@gmail.com', 'tam anh, nui thanh, quảng nam, việt nam, Châu á, Trái đất, Thái Dương Hệ, Ngân hà, Vũ trụ 7, Hệ Vũ Trụsss', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 1),
(15, 'a', 'c', '', '1234567890', 'a@gmail.com', '', '123456', '040d9b33af7249502cd6ec06c422755a', 1, 1),
(16, 'Văn', 'Thiên', '', '0394921219', 'duongls2ls@gmail.com.vn', '', 'duongls2ls@gmail.com.vn', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(17, 'user', 'Thien', '', '23423333333', '1911505310260@sv.ute.udn.vn', '', '1911', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(18, 'abc', 'Thien', '', '23423333333', 'admin@gmail.com.vn', '', 'abc', '202cb962ac59075b964b07152d234b70', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
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
  `ThoiGian` datetime DEFAULT NULL,
  `giaCu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `MaKM`, `SoSao`, `SoDanhGia`, `TrangThai`, `ThoiGian`, `giaCu`) VALUES
(1, 2, 'Nạc lưng bò mát nhập khẩu', 90000, 30, 1, 0, 0, 1, '2021-12-03 16:28:15', 120000),
(2, 1, 'Cá Hồi Tươi Nhập Khẩu', 2220000, 20, 1, 0, 0, 1, '2021-12-03 16:28:19', 2250000),
(3, 5, 'Cà Tím Đà Lạt Loại To', 117000, 20, 1, 0, 0, 1, '2021-12-03 16:28:24', 147000),
(4, 4, 'Dưa Chuột Gai Siêu Giòn', 24000, 20, 1, 0, 0, 1, '2021-12-03 16:28:28', 54000),
(5, 5, 'Cà chua beef túi lưới 500g', 31000, 5, 5, 0, 0, 1, '2020-07-23 14:20:32', 10000),
(6, 4, 'Lê Singo nhập khẩu Trung Quốc hộp 1kg', 30000, 10, 1, 0, 0, 1, '2020-07-21 19:33:15', 10000),
(7, 4, 'Dưa Hấu Siêu Ngọt Nhập Khẩu', 28900, 10, 2, 0, 0, 1, '2020-07-23 15:52:57', 10000),
(8, 4, 'Táo Gala nhập khẩu New Zealand túi 1kg', 96000, 20, 2, 0, 0, 1, '2020-07-23 15:54:12', 10000),
(9, 4, 'Trái cam mật', 49000, 10, 1, 0, 0, 1, '2020-07-23 15:55:13', 10000),
(10, 9, 'Nho xanh sấy khô Thaco Raisins – hộp vàng 140g', 51200, 10, 4, 0, 0, 1, '2020-07-23 15:56:28', 10000),
(11, 8, 'Gạo hoa nhài', 210000, 5, 5, 0, 0, 1, '2020-07-23 15:57:44', 10000),
(12, 6, 'Cá hộp 3 cô gái', 17000, 10, 2, 0, 0, 1, '2020-07-23 15:58:14', 10000),
(13, 7, 'Dầu ôliu', 62000, 10, 4, 0, 0, 1, '2020-07-23 15:59:28', 10000),
(14, 8, 'Bún khô', 9000, 5, 4, 0, 0, 1, '2020-07-23 16:00:23', 10000),
(15, 10, 'Bánh trung thu', 63400, 5, 1, 0, 0, 1, '2020-07-23 16:01:26', 10000),
(16, 10, 'Bánh phu thuê', 42000, 10, 4, 0, 0, 1, '2020-07-23 16:03:30', 10000),
(17, 9, 'Bánh sắn Mộc Châu', 78000, 10, 1, 0, 0, 1, '2020-07-22 09:30:01', 10000),
(18, 8, 'Đậu Cove Đà Lạt GAP', 27500, 10, 4, 0, 0, 1, '2020-07-23 16:04:51', 10000),
(19, 2, 'Ba Chỉ Bò NK Úc', 190000, 5, 3, 0, 0, 1, '2020-07-23 16:07:03', 100000),
(20, 2, 'Bắp Bò Úc', 285000, 20, 3, 0, 0, 1, '2020-07-23 16:08:30', 100000),
(21, 5, 'Cà Rốt Đà Lạt GAP', 39000, 20, 3, 0, 0, 1, '2020-07-23 16:09:52', 100000),
(22, 5, 'Bí Đỏ Tròn Vn Farm Food', 23750, 20, 5, 0, 0, 1, '2020-07-23 16:11:26', 100000),
(23, 1, 'Cá Basa Phi Lê', 92000, 20, 3, 0, 0, 1, '2020-07-23 16:12:46', 100000),
(24, 5, 'Củ Gừng Tươi VietRAT', 13000, 10, 4, 0, 0, 1, '2020-07-23 16:13:52', 100000),
(31, 5, 'Cà Tím Tươi VietRAT', 30000, 10, 1, 0, 0, 1, '2020-07-23 16:21:59', 100000),
(35, 10, 'Bánh nệp nhân kiến Kiên Giang', 50000, 0, 1, 0, 0, 1, '2020-07-23 16:17:43', 100000),
(42, 10, 'Bánh  xèo', 35000, 10, 1, 0, 0, 1, '2020-07-22 20:17:45', 100000),
(43, 8, 'Mỳ kokomi', 849000, 10, 1, 0, 0, 1, '2021-12-03 16:51:34', 879000),
(44, 8, 'Mỳ Hảo Hảo', 60000, 10, 1, 0, 0, 1, '2021-12-03 16:52:54', 90000),
(45, 5, 'Ớt chuông', 36400, 10, 1, 0, 0, 1, '2021-12-03 16:54:19', 66400),
(46, 7, 'Đậu phộng rang', 24990, 10, 1, 0, 0, 1, '2021-12-03 16:55:36', 54990),
(47, 9, 'Hạt óc chó', 23990, 10, 1, 0, 0, 1, '2021-12-03 16:57:10', 53990),
(48, 4, 'Na (mảng cầu)', 15990, 20, 1, 0, 0, 1, '2021-12-03 16:59:03', 45990),
(54, 4, 'Me', 30000, 10, 1, 0, 0, 1, '2021-12-03 17:00:17', 60000),
(117, 8, 'Bột mỳ Ngu Ngốc', 50, 6, 1, 0, 0, 1, '2021-12-03 16:28:34', 30050),
(118, 8, 'Ngũ cốc Linga', 100000, 104, 1, 0, 0, 1, '2021-12-03 16:38:19', 130000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`mahinh`,`masp`),
  ADD KEY `sp_ha` (`masp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `mahinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `sp_ha` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Constraints for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
