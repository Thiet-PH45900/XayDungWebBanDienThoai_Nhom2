-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 08:09 AM
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
  `id_cv` int(11) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_danh_muc_sp`
--

CREATE TABLE `tb_danh_muc_sp` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh_anh`
--

CREATE TABLE `tb_hinh_anh` (
  `id_ha` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoi_dung`
--

CREATE TABLE `tb_nguoi_dung` (
  `id_nd` int(11) NOT NULL,
  `ten_tk` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `id_vc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `id_ha` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `gia_sp` double NOT NULL,
  `id_km` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id_cv`);

--
-- Indexes for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  ADD PRIMARY KEY (`id_ha`);

--
-- Indexes for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Indexes for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_danh_muc_sp`
--
ALTER TABLE `tb_danh_muc_sp`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hinh_anh`
--
ALTER TABLE `tb_hinh_anh`
  MODIFY `id_ha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id_nd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
