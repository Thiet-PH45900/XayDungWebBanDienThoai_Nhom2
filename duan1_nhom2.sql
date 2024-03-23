-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 05:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1_nhom2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id` int(11) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_chuc_vu`
--

INSERT INTO `tb_chuc_vu` (`id`, `chuc_vu`) VALUES
(1, 'admin'),
(2, 'nguoi dung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danh_muc_sp`
--

CREATE TABLE `tb_danh_muc_sp` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danh_muc_sp`
--

INSERT INTO `tb_danh_muc_sp` (`id`, `ten_dm`, `mo_ta`, `hinh_anh`, `trang_thai`) VALUES
(1, 'iPhone', '', '', 'show'),
(2, 'Samsung', '', '', 'show'),
(3, 'Oppo', '', '65fe4ffae6c37.jpeg', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh_anh`
--

CREATE TABLE `tb_hinh_anh` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `hinh_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoi_dung`
--

CREATE TABLE `tb_nguoi_dung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `id_cv` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nguoi_dung`
--

INSERT INTO `tb_nguoi_dung` (`id`, `email`, `mat_khau`, `ho_ten`, `gioi_tinh`, `avatar`, `dia_chi`, `ngay_sinh`, `so_dien_thoai`, `id_cv`) VALUES
(1, 'lamnxph45877@fpt.edu.vn', '12345678', 'Nguyễn Xuân Lâm', '', '', '', '2004-09-08', '', 1),
(2, 'test@test.com', '', 'Test', 'male', '65fe565bea11c.jpeg', '123123', '2024-03-11', '011001010101', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `id_ha` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `gia_sp` double NOT NULL,
  `id_km` int(11) DEFAULT NULL,
  `mo_ta` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id`, `ten_sp`, `id_ha`, `id_dm`, `ngay_nhap`, `so_luong`, `trang_thai`, `gia_sp`, `id_km`, `mo_ta`, `thumbnail`) VALUES
(15, 'Iphone 13', 0, 1, '2024-03-23', 13, 'show', 13000000, NULL, '2 cam chéo', '65fe28ce7f009.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
