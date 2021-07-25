-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 08:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_date`) VALUES
(1, 'SakuraIn', 'Indahlestari', 'hallo', '2020-02-11 14:12:08'),
(2, 'SakuraIn', 'Indahlestari', 'HALLO', '2020-02-12 00:43:15'),
(3, 'Indahlestari', 'SakuraIn', 'ya??', '2020-02-12 01:14:35'),
(4, 'SakuraIn', 'Indahlestari', 'hallo', '2020-02-14 01:18:50'),
(5, 'SakuraIn_15', 'Shim Chang Min', 'ha', '2020-02-18 07:18:37'),
(6, 'SakuraIn_15', 'Shim Chang Min', 'ha', '2020-02-18 07:18:41'),
(7, 'SakuraIn_15', 'Shim Chang Min', 'oi', '2020-08-30 14:41:09'),
(8, 'SakuraIn_15', 'Shim Chang Min', 'oi', '2020-08-30 14:41:18'),
(9, 'SakuraIn_15', 'Shim Chang Min', 'yuhuuu', '2020-08-30 14:41:27'),
(10, 'SakuraIn_15', 'Shim Chang Min', 'yuhuuu', '2020-08-30 14:41:33'),
(11, 'SakuraIn_15', 'Indahlestari', 'yuhuuu', '2020-08-30 14:41:43'),
(12, 'SakuraIn_15', 'Indahlestari', 'yuhuuu', '2020-08-30 14:41:48'),
(13, 'SakuraIn_15', 'SakuraIn_15', 'sdada', '2020-09-01 06:08:14'),
(14, 'SakuraIn_15', 'SakuraIn_15', 'sdada', '2020-09-01 06:08:17'),
(15, '', 'SakuraIn_15', 'hello', '2020-09-04 14:43:49'),
(16, '', 'SakuraIn_15', 'hello', '2020-09-04 14:43:53'),
(17, '', 'SakuraIn_15', 'hello', '2020-09-04 14:45:32'),
(18, '', 'SakuraIn_15', 'halo', '2020-09-04 14:46:07'),
(19, '', 'Shim Chang Min', 'halo', '2020-09-04 14:48:10'),
(20, '', 'Shim Chang Min', 'halo', '2020-09-04 14:48:14'),
(21, '', 'Shim Chang Min', 'halo', '2020-09-04 14:49:14'),
(22, '', 'SakuraIn_15', 'hello', '2020-09-04 14:55:33'),
(23, '', 'SakuraIn_15', 'hello', '2020-09-04 14:57:19'),
(24, '', 'SakuraIn_15', 'anyeong', '2020-09-04 14:57:25'),
(25, '', 'SakuraIn_15', 'anyeong', '2020-09-04 15:01:12'),
(26, '', 'SakuraIn_15', 'yuhhuu', '2020-09-04 15:01:16'),
(27, '', 'SakuraIn_15', 'yuhuu', '2020-09-04 15:01:29'),
(28, '', 'SakuraIn_15', 'yuhuu', '2020-09-04 15:02:43'),
(29, '', 'SakuraIn_15', 'ada?', '2020-09-04 15:03:10'),
(30, '', 'SakuraIn_15', 'ada?', '2020-09-04 15:04:56'),
(31, '', 'SakuraIn_15', 'ada?', '2020-09-04 15:05:32'),
(32, '', 'SakuraIn_15', 'ada?', '2020-09-04 15:09:21'),
(33, '', 'SakuraIn_15', 'sd', '2020-09-04 15:09:32'),
(34, '', '', 'das', '2020-09-04 15:10:24'),
(35, '', '', 'das', '2020-09-04 15:10:49'),
(36, '', 'SakuraIn_15', 'das', '2020-09-04 15:23:29'),
(37, '', 'SakuraIn_15', 'das', '2020-09-04 15:24:57'),
(38, '', '', 'das', '2020-09-04 15:28:03'),
(39, '', '', 'das', '2020-09-04 15:31:06'),
(40, 'indah lestari', '', 'Hello', '2020-09-06 05:54:40'),
(41, 'indah lestari', '', 'Hello', '2020-09-06 05:54:44'),
(42, 'indah lestari', 'Admin', 'Hello', '2020-09-06 06:00:46'),
(43, 'indah lestari', 'Admin', 'dowowowo', '2020-09-06 06:00:53'),
(44, 'indah lestari', 'Admin', 'dowowowo', '2020-09-06 06:01:29'),
(45, 'indah lestari', 'Admin', 'dowowowo', '2020-09-06 06:02:00'),
(46, 'Admin', 'Admin', 'hello', '2020-09-06 11:54:23'),
(47, 'Admin', 'Admin', 'hello', '2020-09-06 11:54:27'),
(48, 'Indahlestari', 'Admin', 'hello', '2020-09-06 11:56:20'),
(49, 'Indahlestari', 'Admin', 'hello', '2020-09-06 11:56:24'),
(50, 'Indahlestari', 'Admin', 'hello', '2020-09-06 11:58:25'),
(51, 'Indahlestari', 'Admin', 'hello', '2020-09-06 11:59:53'),
(52, 'Indahlestari', 'Admin', 'hello', '2020-09-06 12:01:15'),
(53, 'Indahlestari', 'Admin', 'hello', '2020-09-06 12:01:35'),
(54, 'Indahlestari', 'Admin', 'hello', '2020-09-06 12:01:50'),
(55, 'Indahlestari', 'Admin', 'anyone', '2020-09-06 13:54:34'),
(56, 'Indahlestari', 'Admin', 'anyone', '2020-09-06 13:54:38'),
(57, 'Indahlestari', 'Admin', 'anyone', '2020-09-06 13:54:52'),
(58, 'Indahlestari', 'Admin', 'anyone', '2020-09-06 13:55:39'),
(59, 'Indahlestari', 'Admin', 'anyone', '2020-09-06 13:56:04'),
(60, 'Shim Chang Min', 'Admin', 'hallo', '2020-11-10 01:34:52'),
(61, 'Shim Chang Min', 'Admin', 'hallo', '2020-11-10 01:34:57'),
(62, 'Shim Chang Min', 'Admin', 'tidak dapat mengakses', '2020-11-10 02:00:40'),
(63, 'Shim Chang Min', 'Admin', 'tidak dapat mengakses', '2020-11-10 02:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(100) NOT NULL,
  `user_nik` varchar(255) NOT NULL,
  `nama_data` varchar(255) NOT NULL,
  `file_1` varchar(255) NOT NULL,
  `file_2` varchar(255) NOT NULL,
  `file_3` varchar(255) NOT NULL,
  `file_4` varchar(255) NOT NULL,
  `file_5` varchar(255) NOT NULL,
  `file_6` varchar(255) NOT NULL,
  `file_7` varchar(255) NOT NULL,
  `file_8` varchar(255) NOT NULL,
  `file_9` varchar(255) NOT NULL,
  `file_10` varchar(255) NOT NULL,
  `file_11` varchar(255) NOT NULL,
  `file_12` varchar(255) NOT NULL,
  `file_13` varchar(255) NOT NULL,
  `file_14` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `user_nik`, `nama_data`, `file_1`, `file_2`, `file_3`, `file_4`, `file_5`, `file_6`, `file_7`, `file_8`, `file_9`, `file_10`, `file_11`, `file_12`, `file_13`, `file_14`) VALUES
(1, '333456789009', 'Update Data', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '333456789009', 'Update Data', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '333456789009', 'Update Data', 'files/kk/Screenshot (321).png', 'files/ktp_el/Screenshot (323).png', 'files/ss/Screenshot (324).png', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '333456789009', 'Update Data', '/files/SK/Cookingcookingsjh.jpg', '/files/KK_asli/sujuuu.jpg', '/files/akta_nikah/super-junior-t.jpg', '/files/ktp_ibu/', '/files/ktp_ayah/', '/files/ktp_pelapor/', '/files/ktp_saksi1/', '/files/ktp_saksi2/', '/files/surat_kematian_ibu/', '/files/surat_kematian_ayah/', '/files/surat_keterangan_lahir/', '/files/surat_kuasa/', '/files/ijasah_terakhir/', '/files/surat_pernyataan_jarak_anak/'),
(5, '333456789009', 'Akta Kematian', '/files/Surat_Kematian_Desa/suju-m-.jpg', '/files/KTP_Pelapor/super junior.jpg', '/files/KK_Asli/suju.jpg', '/files/Surat_kematian_dokter/leeteuk.jpg', '/files/ktp_asli_meninggal/w644 (2).jpg', '/files/ktp_pasangan/suju-m-.jpg', '/files/surat_kuasa/w644 (1).jfif', '-', '-', '-', '-', '-', '-', '-'),
(6, '333456789009', 'KTP Elektronik', '/files/suket/suju-m-.jpg', '/files/e-ktp/dne.jpg', '/files/surat_kehilangan/suju.jpg', '/files/kk/suju.jpg', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(7, '12345678', 'KTP Elektronik', '/files/suket/suju-m-.jpg', '/files/e-ktp/super-junior-t.jpg', '/files/surat_kehilangan/suju-m-.jpg', '/files/kk/suju-m-.jpg', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(8, '12345678', 'KTP Elektronik', '/files/suket/suju-m-.jpg', '/files/e-ktp/suju-m-.jpg', '/files/surat_kehilangan/w644 (2).jpg', '/files/kk/w644 (2).jpg', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(9, '12345678', 'Update Data', 'files/kk/super-junior-t.jpg', 'files/ktp_el/dne.jpg', 'files/ss/w644 (2).jpg', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(10, '333456789009', 'Update Data', 'files/kk/sujuuu.jpg', 'files/ktp_el/Heechul4.jpg', 'files/ss/suju-m-.jpg', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id` int(100) NOT NULL,
  `user_nik` varchar(255) NOT NULL,
  `nama_data` varchar(255) NOT NULL,
  `daftar` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `proses` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`id`, `user_nik`, `nama_data`, `daftar`, `upload`, `proses`, `selesai`) VALUES
(1, '789832934787626', 'Update Data', 'Terdaftar', 'Telah diupload', 'Dalam Proses', 'Belum'),
(2, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(3, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(4, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(5, '333456789009', 'Akta Kelahiran', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(6, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(7, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(8, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(9, '12345678', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(10, '12345678', 'KTP Elektronik', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(11, '12345678', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum'),
(12, '333456789009', 'Update Data', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_nik` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_kecamatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_nik`, `user_profile`, `user_kecamatan`) VALUES
(1, 'Indahlestari', '12345678', '789832934787626', 'images/koya.png', 'Banyubiru'),
(2, 'SakuraIn_15', '87654321', '1234', 'images/kimjae3465345.jpg.31', 'Ambarawa'),
(3, 'Shim Chang Min', '12345678', '12345678', 'images/29416055_420630618350769_1420768524317491200_n.jpg.7', 'Pabelan'),
(4, 'indah lestari', 'qwertyuiop', '333456789009', 'images/krunk.jpg', 'Susukan'),
(5, 'Admin', 'Admin', '123456', 'images/users.png', 'Getasan'),
(6, 'sakura', 'Sakura', '321341311231', 'images/users.png', 'Banyubiru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
