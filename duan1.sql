-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2024 at 11:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `ten_banner` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ten_banner`, `trang_thai`) VALUES
(13, 'uploads/Ảnh chụp màn hình 2024-04-01 124003.png', 2),
(14, 'uploads/logo-5.png', 2),
(15, 'uploads/tải xuống (1).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` int NOT NULL,
  `ten_danh_muc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten_danh_muc`, `trang_thai`) VALUES
(1, 'Iphone', 1),
(2, 'Mac', 0),
(10, 'Phụ Kiện', 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int NOT NULL,
  `nguoi_dung_id` int NOT NULL,
  `ma_don_hang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` int NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `ngay_dat` date NOT NULL,
  `khuyen_mai_id` int NOT NULL,
  `phuong_thuc_thanh_toan` int NOT NULL,
  `trang_thai_thanh_toan` tinyint(1) NOT NULL,
  `thanh_toan` float NOT NULL,
  `trang_thai_id` int NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `nguoi_dung_id`, `ma_don_hang`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat`, `khuyen_mai_id`, `phuong_thuc_thanh_toan`, `trang_thai_thanh_toan`, `thanh_toan`, `trang_thai_id`, `ghi_chu`) VALUES
(1, 49, 'PH54651', 'Phạm Phú Trung', 'phutrung1606a@gmail.com', 355011558, 'Hải Dương', '2024-11-06', 1, 1, 1, 23000, 1, NULL),
(2, 1, 'PH111223', 'Tiên Văn Sư', 'tiensu@gmail.com', 355011558, 'Hà Nam', '2024-11-29', 2, 2, 1, 23000, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mais`
--

CREATE TABLE `khuyen_mais` (
  `id` int NOT NULL,
  `ten_khuyen_mai` varchar(255) NOT NULL,
  `ma_khuyen_mai` varchar(255) NOT NULL,
  `gia_tri` float NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khuyen_mais`
--

INSERT INTO `khuyen_mais` (`id`, `ten_khuyen_mai`, `ma_khuyen_mai`, `gia_tri`, `ngay_bat_dau`, `ngay_ket_thuc`, `mo_ta`, `trang_thai`) VALUES
(1, 'Khuyến mãi Black Friday', 'BF2024', 1, '2024-11-15', '2024-11-30', 'Giảm giá 20% tất cả sản phẩm', 1),
(2, 'Khuyến mãi Giáng Sinh', 'XMAS2024', 30, '2024-12-01', '2024-12-25', 'Giảm giá 30% nhân dịp lễ Giáng Sinh', 0),
(7, '1222', '111', 1111, '2024-11-22', '2024-11-30', '11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lien_hes`
--

CREATE TABLE `lien_hes` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loi_nhan` varchar(255) NOT NULL,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lien_hes`
--

INSERT INTO `lien_hes` (`id`, `ten`, `email`, `loi_nhan`, `trang_thai`) VALUES
(1, 'Nguyễn Văn A', 'nva@a.b', 'qwertâfimiegnornhoernhorgorrmpokskgoiưmirhmoidmhoksentokhtmaronhmeapemnneropgmoianeebhbmheoktnhpismtiounhseihiodrrpithiorthiosrtlbmoitnbbipsryoiseoinhpirtnjỏinthoisethouinsrpigbpapijapefhwewpgnoegpjeowewogyu', 0),
(2, 'Trần Văn B', 'TVB@BB.B', 'asdfghj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dungs`
--

CREATE TABLE `nguoi_dungs` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `so_dien_thoai` int NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoi_dungs`
--

INSERT INTO `nguoi_dungs` (`id`, `ten`, `email`, `mat_khau`, `so_dien_thoai`, `dia_chi`, `hinh_anh`, `ngay_sinh`, `gioi_tinh`, `trang_thai`, `vai_tro`) VALUES
(1, 'Nguyễn Văn A', 'admin@fpt.edu.vn', '123456', 355011558, 'Hà Nội', './uploads/images/avatarUser.jpg', '2024-11-14', 1, 1, 1),
(49, 'Phạm Phú Trung', 'admin@gmail.com', '$2y$10$CgtO7SrfPTXR6hMAGStD..fMhpmSLKMmjw/rpOb0Xcj3rTwTJS3bW', 3245567, '321423', './uploads/images/67332c0d5b83f3_l.png', '2001-03-23', 1, 1, 2),
(50, 'Nguyễn Văn ABC', 'admin@fpt.edu.vn', '$2y$10$PGQTbOYZGJSSiGRAeyKDjOlgm.GKTtZs7y8C.3TpZHS8Hr4C3pqGK', 123456789, 'Hà Nội', './uploads/images/6735d70fdc0acNew-York-Yankees.png', '2011-11-11', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phuong_thuc_thanh_toans`
--

CREATE TABLE `phuong_thuc_thanh_toans` (
  `id` int NOT NULL,
  `ten_phuong_thuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phuong_thuc_thanh_toans`
--

INSERT INTO `phuong_thuc_thanh_toans` (`id`, `ten_phuong_thuc`) VALUES
(1, 'COD(Thanh toán khi nhận hàng)'),
(2, 'VNPAY');

-- --------------------------------------------------------

--
-- Table structure for table `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `luot_xem` int NOT NULL,
  `thong_so` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `so_luong` int NOT NULL,
  `so_luong_ton_kho` int NOT NULL,
  `mo_ta` text COLLATE utf8mb4_general_ci NOT NULL,
  `anh_san_pham` text COLLATE utf8mb4_general_ci,
  `gia_nhap` decimal(10,2) NOT NULL,
  `gia_ban` decimal(10,2) NOT NULL,
  `gia_khuyen_mai` decimal(10,2) NOT NULL,
  `mo_ta_chi_tiet` text COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `danh_muc_id` int NOT NULL,
  `ma_san_pham` int NOT NULL,
  `ngay_nhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_phams`
--

INSERT INTO `san_phams` (`id`, `ten_san_pham`, `luot_xem`, `thong_so`, `so_luong`, `so_luong_ton_kho`, `mo_ta`, `anh_san_pham`, `gia_nhap`, `gia_ban`, `gia_khuyen_mai`, `mo_ta_chi_tiet`, `trang_thai`, `danh_muc_id`, `ma_san_pham`, `ngay_nhap`) VALUES
(85, 'wew', 0, '', 67, 0, 'dsfd', 'uploads/1731313972a.jpg', '0.00', '543.00', '0.00', '', 1, 0, 0, '0000-00-00'),
(88, 'gfgf', 0, '', 676, 0, 'gfg', 'uploads/17313139639.jpg', '0.00', '5.00', '0.00', '', 1, 0, 0, '0000-00-00'),
(89, '4545', 0, '', 5654, 0, '45ffhf', 'uploads/17313115981.jpg', '0.00', '0.00', '0.00', '', 1, 0, 0, '0000-00-00'),
(90, 'grgdfg', 0, '', 54, 0, 'gdf', 'uploads/1731311620a.jpg', '0.00', '454.00', '0.00', '', 2, 0, 0, '0000-00-00'),
(92, 'ere', 0, '', 343, 0, 'fdsf', 'uploads/173131263810.jpg', '0.00', '454.00', '0.00', '', 2, 0, 0, '0000-00-00'),
(93, 'rtr', 0, '', 565, 0, 'gdfg', 'uploads/1731312995banner 3.jpg', '0.00', '454.00', '0.00', '', 2, 0, 0, '0000-00-00'),
(94, 'sd', 0, '', 56, 0, 'fd', 'uploads/17313169604.jpg', '0.00', '344.00', '0.00', '', 2, 0, 0, '0000-00-00'),
(95, 'rtre', 0, '', 54, 0, 'gdfgdfg', 'uploads/1731317893a.jpg', '0.00', '6546.00', '0.00', '', 2, 0, 0, '0000-00-00'),
(96, 'rtrt', 4543, '345', 43, 45, 'egrgrgg', NULL, '33.00', '34.00', '0.00', 'vrttt', 0, 0, 0, '0000-00-00'),
(97, 'asas', 4534, '', 434545, 0, 'ẻtht', './admin/uploads/17314323415.jpg', '3435.00', '23213.00', '2343.00', 'eu h e hewuteutetie', 2, 4, 842, '2024-11-12'),
(99, '4534', 5654, '', 46546, 0, 'ytryg', './admin/uploads/17314286184.jpg', '456.00', '454.00', '46456.00', 'tsdtrtrdt', 1, 4, 56456, '2024-11-12'),
(100, 'hẹhijewf', 43234, '', 32432, 0, 'rgdgre', './admin/uploads/17314922042024-08-09 (2).png', '243.00', '3432.00', '242.00', '4345345rgrg', 1, 1, 454, '2024-11-12'),
(111, 'tgdf', 4354, '', 2423, 0, 'fcrefrr4543', '', '24.00', '34543.00', '242.00', 'erewr4543', 1, 13, 334, '2024-11-13'),
(112, 'erer', 43534, '', 3534, 0, 'rterf4543', './admin/uploads/17314338427.jpg', '435.00', '43.00', '353.00', 'rvr435', 1, 3, 343, '2024-11-13'),
(113, 'erew', 354, '', 543, 0, '3534', './admin/uploads/1731433915a.jpg', '345.00', '564.00', '656.00', '534', 2, 4, 342, '2024-11-13'),
(115, 'asas', 654645, '', 575, 0, 'htyrty66', '', '67.00', '676.00', '5756.00', 'ntyrnyry5656', 2, 4, 842, '2024-11-13'),
(116, 'asas', 654645, '', 575, 0, 'htyrty66', './admin/uploads/17314365285.jpg', '67.00', '676.00', '5756.00', 'ntyrnyry5656', 2, 4, 842, '2024-11-13'),
(117, 'dfds', 3534, '', 453, 0, '32432', './admin/uploads/17314365639.jpg', '353.00', '34324.00', '353.00', '23432', 1, 4, 56456, '2024-11-13'),
(118, 'rrr454354', 46, '', 46, 0, '54644', './admin/uploads/1731436694_10.jpg', '564.00', '46.00', '46.00', '6544', 1, 4, 33, '2024-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tucs`
--

CREATE TABLE `tin_tucs` (
  `id` int NOT NULL,
  `tieu_de_bai_viet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngay_dang_bai` date DEFAULT NULL,
  `luot_xem` int DEFAULT NULL,
  `trang_thai_bai_viet` tinyint(1) NOT NULL,
  `noi_dung_bai_viet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tin_tucs`
--

INSERT INTO `tin_tucs` (`id`, `tieu_de_bai_viet`, `ngay_dang_bai`, `luot_xem`, `trang_thai_bai_viet`, `noi_dung_bai_viet`) VALUES
(1, 'Iphone 16 đỉnh cao công nghệ', '2024-11-08', 12, 1, 'Xin chao moi  nguoi chào mừng mọi người đã đến với...Vậy là bạn đã có thể quản lý thời gian thêm bài viết và số lượt xem một cách dễ dàng. Nếu có điều gì cần làm rõ hơn, hãy cho tôi biết nhé!'),
(7, 'Tai nghe mới nhất của Apple1', NULL, NULL, 2, 'sưedfjgfdsdsdfghjhfgdfsdsdhdh'),
(8, 'Tai nghe mới nhất của Apple1', NULL, NULL, 1, 'wrewtytuyilgkfxvvzjjz'),
(10, 'Tai nghe mới nhất của Apple1', NULL, NULL, 1, '<p>aaaaaa</p>\r\n'),
(11, 'dien thoai', NULL, NULL, 2, '<p><strong>Cử tri đề nghị tăng mức xử phạt hành vi vi phạm liên quan đến thực phẩm chức năng</strong></p><p>Thứ Ba, 12/11/2024 14:15&nbsp;|&nbsp;</p><h4><a href=\"https://baotintuc.vn/thoi-su-472ct0.htm\"><strong>Thời sự</strong></a></h4><p>&nbsp;</p><h2><strong>Sáng 12/11, tại Kỳ họp thứ 8, Quốc hội khóa XV tiếp tục phiên chất vấn và trả lời chất vấn với Bộ trưởng Bộ Y tế Đào Hồng Lan và Bộ trưởng Bộ Thông tin và Truyền thông Nguyễn Mạnh Hùng. Phiên chất vất và trả lời chất vấn được đông đảo cử tri, nhân dân thành phố Đà Nẵng, tỉnh Ninh Thuận quan tâm theo dõi.</strong></h2><h4><a href=\"https://baotintuc.vn/thoi-su/cu-tri-danh-gia-cao-phien-chat-van-tai-ky-hop-thu-8-quoc-hoi-khoa-xv-20241111202757401.htm\">Cử tri đánh giá cao phiên chất vấn tại Kỳ họp thứ 8, Quốc hội khóa XV</a></h4><h4><a href=\"https://baotintuc.vn/thoi-su/ben-le-quoc-hoi-phien-chat-van-linh-vuc-y-te-lam-sang-to-nhieu-van-de-cu-tri-quan-tam-20241111170517186.htm\">Bên lề Quốc hội: Phiên chất vấn lĩnh vực Y tế làm sáng tỏ nhiều vấn đề cử tri quan tâm</a></h4><h4><a href=\"https://baotintuc.vn/thoi-su/phien-chat-van-dau-tien-dien-ra-thanh-cong-soi-noi-voi-nhieu-van-de-nong-20241111110535438.htm\">Phiên chất vấn đầu tiên diễn ra thành công, sôi nổi, với nhiều vấn đề nóng</a></h4><h4><a href=\"https://baotintuc.vn/thoi-su/quoc-hoi-bat-dau-phien-chat-van-va-tra-loi-chat-van-20241111090931679.htm\">Quốc hội bắt đầu phiên chất vấn và trả lời chất vấn</a></h4><p>&nbsp;</p><figure class=\"image\"><img src=\"https://cdnmedia.baotintuc.vn/Upload/DmtgOUlHWBO5POIHzIwr1A/files/2024/11/12/dao-hong-lan-12112024-01.jpg\" alt=\"Chú thích ảnh\"><figcaption><i>Bộ trưởng Bộ Y tế Đào Hồng Lan trả lời chất vấn. Ảnh: Doãn Tấn/TTXVN</i></figcaption></figure><p><strong>Sôi nổi, thẳng thắn</strong></p><p>Nhiều cử tri và người dân tại Đà Nẵng, Ninh Thuận bày tỏ tán thành, đánh giá cao nội dung chất vấn của các đại biểu Quốc hội rất thẳng thắn, đề cập đến vấn đề \"nóng\" đang được xã hội quan tâm cũng như phần trả lời rõ ràng, đầy đủ của các Bộ trưởng và thành viên Chính phủ.</p><p>Cử tri tỉnh Ninh Thuận nhận xét, không khí phiên chất vấn, trả lời chất vấn diễn ra sôi nổi, dân chủ, trên tinh thần xây dựng, có nhiều thông tin phản ánh đúng thực trạng tình hình, nêu nhiều đề xuất, kiến nghị, hiến kế trong chỉ đạo, quản lý và điều hành. Cách điều hành phiên chất vấn của Chủ tịch Quốc hội Trần Thanh Mẫn rất linh hoạt, nhiều vấn đề đặt ra tại nghị trường được giải</p>');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_don_hang`
--

CREATE TABLE `trang_thai_don_hang` (
  `id` int NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trang_thai_don_hang`
--

INSERT INTO `trang_thai_don_hang` (`id`, `ten_trang_thai`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đang giao'),
(4, 'Đã giao'),
(5, 'Đã hoàn thành'),
(6, 'Đã thất bại'),
(7, 'Đã hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_don_hangs_nguoi_dungs` (`nguoi_dung_id`),
  ADD KEY `lk_don_hangs_khuyen_mais` (`khuyen_mai_id`),
  ADD KEY `lk_don_hangs_trang_thai_don_hangs` (`trang_thai_id`),
  ADD KEY `lk_don_hangs_phuong_thuc_thanh_toans` (`phuong_thuc_thanh_toan`);

--
-- Indexes for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lien_hes`
--
ALTER TABLE `lien_hes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phuong_thuc_thanh_toans`
--
ALTER TABLE `phuong_thuc_thanh_toans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_tucs`
--
ALTER TABLE `tin_tucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lien_hes`
--
ALTER TABLE `lien_hes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `phuong_thuc_thanh_toans`
--
ALTER TABLE `phuong_thuc_thanh_toans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tin_tucs`
--
ALTER TABLE `tin_tucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD CONSTRAINT `lk_don_hangs_khuyen_mais` FOREIGN KEY (`khuyen_mai_id`) REFERENCES `khuyen_mais` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_don_hangs_nguoi_dungs` FOREIGN KEY (`nguoi_dung_id`) REFERENCES `nguoi_dungs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_don_hangs_phuong_thuc_thanh_toans` FOREIGN KEY (`phuong_thuc_thanh_toan`) REFERENCES `phuong_thuc_thanh_toans` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_don_hangs_trang_thai_don_hangs` FOREIGN KEY (`trang_thai_id`) REFERENCES `trang_thai_don_hang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
