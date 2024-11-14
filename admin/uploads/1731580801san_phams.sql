-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 03:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1_astore`
--

-- --------------------------------------------------------

--
-- Table structure for table `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `luot_xem` int(10) NOT NULL,
  `thong_so` varchar(50) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `so_luong_ton_kho` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `anh_san_pham` text DEFAULT NULL,
  `gia_nhap` decimal(10,2) NOT NULL,
  `gia_ban` decimal(10,2) NOT NULL,
  `gia_khuyen_mai` decimal(10,2) NOT NULL,
  `mo_ta_chi_tiet` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `danh_muc_id` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_phams`
--

INSERT INTO `san_phams` (`id`, `ten_san_pham`, `luot_xem`, `thong_so`, `so_luong`, `so_luong_ton_kho`, `mo_ta`, `anh_san_pham`, `gia_nhap`, `gia_ban`, `gia_khuyen_mai`, `mo_ta_chi_tiet`, `trang_thai`, `danh_muc_id`, `ma_san_pham`, `ngay_nhap`) VALUES
(85, 'wew', 0, '', 67, 0, 'dsfd', 'uploads/1731313972a.jpg', 0.00, 543.00, 0.00, '', 1, 0, 0, '0000-00-00'),
(88, 'gfgf', 0, '', 676, 0, 'gfg', 'uploads/17313139639.jpg', 0.00, 5.00, 0.00, '', 1, 0, 0, '0000-00-00'),
(89, '4545', 0, '', 5654, 0, '45ffhf', 'uploads/17313115981.jpg', 0.00, 0.00, 0.00, '', 1, 0, 0, '0000-00-00'),
(90, 'grgdfg', 0, '', 54, 0, 'gdf', 'uploads/1731311620a.jpg', 0.00, 454.00, 0.00, '', 2, 0, 0, '0000-00-00'),
(92, 'ere', 0, '', 343, 0, 'fdsf', 'uploads/173131263810.jpg', 0.00, 454.00, 0.00, '', 2, 0, 0, '0000-00-00'),
(93, 'rtr', 0, '', 565, 0, 'gdfg', 'uploads/1731312995banner 3.jpg', 0.00, 454.00, 0.00, '', 2, 0, 0, '0000-00-00'),
(94, 'sd', 0, '', 56, 0, 'fd', 'uploads/17313169604.jpg', 0.00, 344.00, 0.00, '', 2, 0, 0, '0000-00-00'),
(95, 'rtre', 0, '', 54, 0, 'gdfgdfg', 'uploads/1731317893a.jpg', 0.00, 6546.00, 0.00, '', 2, 0, 0, '0000-00-00'),
(96, 'rtrt', 4543, '345', 43, 45, 'egrgrgg', NULL, 33.00, 34.00, 0.00, 'vrttt', 0, 0, 0, '0000-00-00'),
(97, 'asas', 4534, '', 434545, 0, 'ẻtht', './admin/uploads/17314323415.jpg', 3435.00, 23213.00, 2343.00, 'eu h e hewuteutetie', 2, 4, 842, '2024-11-12'),
(99, '4534', 5654, '', 46546, 0, 'ytryg', './admin/uploads/17314286184.jpg', 456.00, 454.00, 46456.00, 'tsdtrtrdt', 1, 4, 56456, '2024-11-12'),
(100, 'hẹhijewf', 43234, '', 32432, 0, 'rgdgre', './admin/uploads/17314290538.jpg', 243.00, 3432.00, 242.00, '4345345rgrg', 1, 3, 454, '2024-11-12'),
(111, 'tgdf', 4354, '', 2423, 0, 'fcrefrr4543', '', 24.00, 34543.00, 242.00, 'erewr4543', 1, 13, 334, '2024-11-13'),
(112, 'erer', 43534, '', 3534, 0, 'rterf4543', './admin/uploads/17314338427.jpg', 435.00, 43.00, 353.00, 'rvr435', 1, 3, 343, '2024-11-13'),
(113, 'erew', 354, '', 543, 0, '3534', './admin/uploads/1731433915a.jpg', 345.00, 564.00, 656.00, '534', 2, 4, 342, '2024-11-13'),
(115, 'asas', 654645, '', 575, 0, 'htyrty66', '', 67.00, 676.00, 5756.00, 'ntyrnyry5656', 2, 4, 842, '2024-11-13'),
(116, 'asas', 654645, '', 575, 0, 'htyrty66', './admin/uploads/17314365285.jpg', 67.00, 676.00, 5756.00, 'ntyrnyry5656', 2, 4, 842, '2024-11-13'),
(117, 'dfds', 3534, '', 453, 0, '32432', './admin/uploads/17314365639.jpg', 353.00, 34324.00, 353.00, '23432', 1, 4, 56456, '2024-11-13'),
(118, 'rrr454354', 46, '', 46, 0, '54644', './admin/uploads/1731436694_10.jpg', 564.00, 46.00, 46.00, '6544', 1, 4, 33, '2024-11-13'),
(119, 'er', 0, '', 353, 0, '3eter', './admin/uploads/17314566836.jpg', 353.00, 453.00, 35.00, 'etrevr', 1, 3, 34, '2024-11-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
