-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 03:25 PM
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
-- Database: `sistem`
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
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(1, 'SakuraIn', 'Indahlestari', 'hallo', 'read', '2020-02-11 14:12:08'),
(2, 'SakuraIn', 'Indahlestari', 'HALLO', 'read', '2020-02-12 00:43:15'),
(3, 'Indahlestari', 'SakuraIn', 'ya??', 'read', '2020-02-12 01:14:35'),
(4, 'SakuraIn', 'Indahlestari', 'hallo', 'unread', '2020-02-14 01:18:50'),
(5, 'SakuraIn_15', 'Shim Chang Min', 'ha', 'read', '2020-02-18 07:18:37'),
(6, 'SakuraIn_15', 'Shim Chang Min', 'ha', 'read', '2020-02-18 07:18:41'),
(7, 'SakuraIn_15', 'Shim Chang Min', 'oi', 'read', '2020-08-30 14:41:09'),
(8, 'SakuraIn_15', 'Shim Chang Min', 'oi', 'read', '2020-08-30 14:41:18'),
(9, 'SakuraIn_15', 'Shim Chang Min', 'yuhuuu', 'read', '2020-08-30 14:41:27'),
(10, 'SakuraIn_15', 'Shim Chang Min', 'yuhuuu', 'read', '2020-08-30 14:41:33'),
(11, 'SakuraIn_15', 'Indahlestari', 'yuhuuu', 'unread', '2020-08-30 14:41:43'),
(12, 'SakuraIn_15', 'Indahlestari', 'yuhuuu', 'unread', '2020-08-30 14:41:48'),
(13, 'SakuraIn_15', 'SakuraIn_15', 'sdada', 'read', '2020-09-01 06:08:14'),
(14, 'SakuraIn_15', 'SakuraIn_15', 'sdada', 'read', '2020-09-01 06:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_hp` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_kecamatan` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_hp`, `user_profile`, `user_kecamatan`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(1, 'Indahlestari', '12345678', '789832934787626', 'images/koya.png', 'Banyubiru', 'Perempuan', '', 'Offline'),
(2, 'SakuraIn_15', '87654321', '1234', 'images/kimjae3465345.jpg.31', 'Ambarawa', 'Perempuan', 'Indah', 'online'),
(3, 'Shim Chang Min', '12345678', '12345678', 'images/29416055_420630618350769_1420768524317491200_n.jpg.7', 'Pabelan', 'Laki-laki', '', 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`msg_id`);

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
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
