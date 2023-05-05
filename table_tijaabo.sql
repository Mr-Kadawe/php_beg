-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 09:05 AM
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
-- Database: `tijaabo`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_tijaabo`
--

CREATE TABLE `table_tijaabo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_tijaabo`
--

INSERT INTO `table_tijaabo` (`id`, `name`, `phone`, `email`, `password`, `address`, `date`, `country`, `created_at`) VALUES
(1, 'Eng Mahad', '+252613991129', 'mahad2023@gmail.com', '99112988', 'Hiliwa', '2023-05-05', 'Somalia', '2023-05-05 07:01:59'),
(2, 'Eng Abdullahi', '+252618323601', 'Abdalla2022@gmail.com', '32360177', 'Hiliwa', '2023-05-05', 'Somalia', '2023-05-05 07:03:31'),
(3, 'Eng Ali', '61666334', 'Abdi393@gmqaai.com', '1122', 'Waabari', '2023-05-05', 'Somalia', '2023-05-05 06:57:18'),
(4, 'Abdirahmaan', '6253244', 'Farhaan@gmail.com', '1213a', '', '2023-05-05', 'Somalia', '2023-05-05 06:58:45'),
(5, 'Farhiyo', '6253244', 'Farhiyo@gmail.com', '1213a', 'Warta', '2023-05-05', 'Somalia', '2023-05-05 06:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_tijaabo`
--
ALTER TABLE `table_tijaabo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_tijaabo`
--
ALTER TABLE `table_tijaabo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
