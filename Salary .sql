-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 12:52 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l5k1d`
--

-- --------------------------------------------------------

--
-- Table structure for table `Salary`
--

CREATE TABLE `Salary` (
  `id` int(20) NOT NULL,
  `staff_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduct` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Salary`
--

INSERT INTO `Salary` (`id`, `staff_id`, `salary`, `deduct`) VALUES
(1, '1', '3000￥', '100￥'),
(2, '4', '5000￥', '0￥'),
(3, '6', '2000￥', '100￥'),
(4, '13', '4000￥', '200￥'),
(5, '10', '8000￥', '200￥'),
(6, '13', '3000￥', '200￥'),
(7, '11', '3000￥', '100￥'),
(8, '16', '7000￥', '50￥');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Salary`
--
ALTER TABLE `Salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Salary`
--
ALTER TABLE `Salary`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
