-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 08:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `kartela`
--

CREATE TABLE `kartela` (
  `id` int(60) UNSIGNED NOT NULL,
  `titulli` varchar(50) NOT NULL,
  `autori` varchar(30) NOT NULL,
  `viti_i_botimit` varchar(10) DEFAULT NULL,
  `nr_faqesh` int(6) NOT NULL,
  `sasia` int(10) NOT NULL DEFAULT 1,
  `shtepia_botuese` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartela`
--

INSERT INTO `kartela` (`id`, `titulli`, `autori`, `viti_i_botimit`, `nr_faqesh`, `sasia`, `shtepia_botuese`) VALUES
(1, 'Letersia 10', 'Rita Petro', '2005', 156, 4, 'Alba'),
(2, 'Letersia 11', 'Rita Petro', '2008', 180, 4, 'Alba'),
(3, 'Ata kerkonin lumturine', 'Viktor Canosinaj', '2007', 120, 1, 'Dyrrah'),
(4, 'Infiniti blu\r\n', 'Mimoza Hafizi', NULL, 210, 8, 'ALBAS'),
(5, 'Dear John', 'Nicholas Sparks', '1999', 173, 6, ''),
(6, 'A walk to remember', 'Nicholas Sparks', '1999', 173, 6, NULL),
(7, 'aaaa', 'bbbbb', NULL, 0, 1, NULL),
(8, 'kot', 'kot2', NULL, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `emer` varchar(30) NOT NULL,
  `mbiemer` varchar(30) NOT NULL,
  `mosha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `emer`, `mbiemer`, `mosha`) VALUES
(1, 'john@email.com', '231123232', '2021-04-20 07:04:26', '2021-04-20 07:04:26', 'John', 'Doe', '12'),
(3, 'john1@email.com', '231123232', '2021-04-20 07:09:50', '2021-04-20 07:09:50', 'John', 'Doe', '12'),
(4, 'john3@email.com', '654654', '2021-04-20 07:10:50', '2021-04-20 07:10:50', 'asdas', 'dasdasd', 'asdasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartela`
--
ALTER TABLE `kartela`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kartela`
--
ALTER TABLE `kartela`
  MODIFY `id` int(60) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
