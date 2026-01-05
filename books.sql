-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2026 at 03:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE `doct` (
  `NO` int(10) NOT NULL,
  `ENAME` varchar(50) NOT NULL,
  `SECTION` varchar(15) NOT NULL,
  `IMAGE_PATH` varchar(250) NOT NULL,
  `FILE_PATH` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`NO`, `ENAME`, `SECTION`, `IMAGE_PATH`, `FILE_PATH`) VALUES
(10, 'الاصول الثلاثة', 'العقيدة', 'صورة شرح ثلاثة الاصول.jpg', 'شرح ثلاثة الاصول.pdf'),
(11, 'القواعد الأربع', 'العقيدة', 'شرح القواعد الأربع .jpg', 'شرح القواعد الأربع.pdf'),
(13, 'العقيدة الواسطية', 'العقيدة', 'العقيدة الواسطية صورة.jpg', 'العقيدة الواسطية 2.pdf'),
(16, 'شرح السنة للبربهاري', 'العقيدة', 'شرح السنة صورة.jpg', 'مكتبة_أبو أسوة- شرح السنة للبربهاري.pdf'),
(18, 'كتاب التوحيد', 'العقيدة', 'كتاب التوحيد صورة.jpg', 'التوحيد.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine`
--

CREATE TABLE `doctrine` (
  `BOKNO` int(10) NOT NULL,
  `BOKNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mutn_doct_0`
--

CREATE TABLE `mutn_doct_0` (
  `NO` int(10) NOT NULL,
  `ENAME` varchar(50) NOT NULL,
  `SECTION` varchar(20) NOT NULL,
  `IMAGE_PATH` varchar(100) NOT NULL,
  `FILE_PATH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mutn_doct_0`
--

INSERT INTO `mutn_doct_0` (`NO`, `ENAME`, `SECTION`, `IMAGE_PATH`, `FILE_PATH`) VALUES
(1, 'متن الاصول الثلاثة', 'العقيدة', 'صورة متن الاصول الثلاثة.jpg', 'متن الأصول الثلاثة.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone`, `password`, `created_at`) VALUES
(1, 'أحمد المنتصر', '776109348', '$2y$10$NwVQINQuOgFDobN/KT3bPeRwHZYWvsNqOkWN9d0pxrTjfu9K2rd7S', '2025-12-31 23:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `doctrine`
--
ALTER TABLE `doctrine`
  ADD PRIMARY KEY (`BOKNO`);

--
-- Indexes for table `mutn_doct_0`
--
ALTER TABLE `mutn_doct_0`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doct`
--
ALTER TABLE `doct`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doctrine`
--
ALTER TABLE `doctrine`
  MODIFY `BOKNO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutn_doct_0`
--
ALTER TABLE `mutn_doct_0`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
