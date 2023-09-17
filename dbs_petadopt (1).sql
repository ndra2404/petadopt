-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_petadopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adopter`
--

CREATE TABLE `tbl_adopter` (
  `id_adopter` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_adopter`
--

INSERT INTO `tbl_adopter` (`id_adopter`, `nama_lengkap`, `alamat`, `nomor_telepon`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'ahmad nugraha', 'jalan ahmad yani gg mesjid', '+6287839361821', 7, '2023-08-06 01:08:23', '2023-08-06 01:08:23'),
(2, 'Indra', 'Cilebut barat', '+6287839361821', 6, '2023-08-06 01:08:23', '2023-08-06 01:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(25) NOT NULL,
  `id_hewan` int(11) NOT NULL,
  `tgl_checkout` datetime NOT NULL,
  `id_adopter` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_wa` varchar(16) NOT NULL,
  `kode_pos` varchar(8) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id`, `no_transaksi`, `id_hewan`, `tgl_checkout`, `id_adopter`, `id_penjual`, `status`, `alamat`, `no_wa`, `kode_pos`, `ongkir`, `total`, `notes`, `tgl_kirim`, `created_at`, `updated_at`) VALUES
(1, 'TRA23091700001', 2, '2023-09-17 04:12:23', 2, 1, '4', 'Cilebut barat', '+6287839361821', '16167', 25000, 84999, 'test', NULL, '2023-09-17 04:12:23', '2023-09-17 05:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hewan`
--

CREATE TABLE `tbl_hewan` (
  `id_hewan` int(11) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `rekam_medis` text NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `ras` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `bukti_vaksin` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hewan`
--

INSERT INTO `tbl_hewan` (`id_hewan`, `nama_hewan`, `id_type`, `deskripsi`, `rekam_medis`, `jenis_kelamin`, `ras`, `foto`, `harga`, `bukti_vaksin`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Popow', 1, NULL, 'awelkajlkj alkejkl a jakl;jeh akjhwek hakjhakjw ehkla kja hwekja hdjkah wekjwah', 'jantan', 'ceper', '20230806020900_foto.png', 10000, '20230806020900_foto.png', 4, '2023-08-06 02:29:43', '2023-08-05 19:09:00'),
(2, 'Albert', 2, NULL, 'awelkajlkj alkejkl a jakl;jeh akjhwek hakjhakjw ehkla kja hwekja hdjkah wekjwah', 'betina', 'ceper', '20230806020832_foto.png', 59999, '20230806020832_foto.png', 4, '2023-08-06 02:40:17', '2023-08-05 19:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `id` int(11) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`id`, `no_rekening`, `nominal`, `bukti_bayar`, `id_checkout`, `created_at`, `updated_at`) VALUES
(1, 12344343, 84999, 'upload/pembayaran/TRA23091700001-buktiBayar.png', 1, '2023-09-17 05:06:26', '2023-09-17 05:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id` int(11) NOT NULL,
  `level_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id`, `level_name`) VALUES
(1, 'administrator'),
(2, 'penjual'),
(3, 'Pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 'Pembayaran dengan nomor transaksi \r\n[no_transaksi] sudah berhasil di verifikasi', '2023-09-17 07:16:45', '2023-09-17 07:16:45'),
(2, 4, 'Pesanan dengan nomor\r\n[no_transaksi] akan dikirimkan pada tgl\r\n[tgl]', '2023-09-17 07:16:45', '2023-09-17 07:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjual`
--

CREATE TABLE `tbl_penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_rek` int(11) NOT NULL,
  `no_rek_nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penjual`
--

INSERT INTO `tbl_penjual` (`id_penjual`, `nama_lengkap`, `nomor_telepon`, `alamat`, `id_user`, `no_rek`, `no_rek_nama`, `created_at`, `updated_at`) VALUES
(1, 'Indra', '+6285817558374', 'Jl.golf Gunung Geulis Rt001/002', 4, 87120121, 'Indra', '2023-07-16 02:06:23', '2023-07-16 02:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `code`, `value`) VALUES
(1, 'ONGKIR', '25000'),
(2, 'BANK', 'BCA 70687888 an Indra');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Kucing', '2023-08-06 01:42:55', NULL),
(2, 'Anjing', '2023-08-06 01:42:55', NULL),
(3, 'Kelinci', '2023-08-06 01:42:55', NULL),
(4, 'Ayam terbang', '2023-08-06 01:47:27', '2023-08-05 18:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@kitaberkarya.com', '$2y$10$oUlmq/w1kNN0q2LUx7RlCexaTpY4cH0gpV6sefcmv6RJ9ReZcJgX2', 1, 1, '2023-07-17 04:12:14', NULL),
(4, 'ndra2404@gmail.com', '$2y$10$oUlmq/w1kNN0q2LUx7RlCexaTpY4cH0gpV6sefcmv6RJ9ReZcJgX2', 2, 1, '2023-07-16 02:06:23', '2023-07-16 02:06:23'),
(6, 'indra@kitaberkarya.com', '$2y$10$oUlmq/w1kNN0q2LUx7RlCexaTpY4cH0gpV6sefcmv6RJ9ReZcJgX2', 3, 1, '2023-08-05 23:29:24', '2023-08-05 23:29:24'),
(7, 'Ahmadnugraha442@gmail.com', '$2y$10$oUlmq/w1kNN0q2LUx7RlCexaTpY4cH0gpV6sefcmv6RJ9ReZcJgX2', 3, 1, '2023-08-06 01:08:23', '2023-08-06 01:08:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adopter`
--
ALTER TABLE `tbl_adopter`
  ADD PRIMARY KEY (`id_adopter`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penjual`
--
ALTER TABLE `tbl_penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adopter`
--
ALTER TABLE `tbl_adopter`
  MODIFY `id_adopter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penjual`
--
ALTER TABLE `tbl_penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
