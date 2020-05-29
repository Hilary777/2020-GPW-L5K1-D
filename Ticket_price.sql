-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 12:49 PM
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
-- Table structure for table `Ticket_price`
--

CREATE TABLE `Ticket_price` (
  `ticket_pid` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Ticket_price`
--

INSERT INTO `Ticket_price` (`ticket_pid`, `route_id`, `level`, `capacity`, `price`, `type`) VALUES
(1, 1, 'LEVEL1', 'High', '300', 'Normal'),
(2, 2, 'LEVEL2', 'HIgh', '250', 'Normal'),
(3, 5, 'LEVEL3', 'Medium', '300', 'Luxury'),
(4, 3, 'LEVEL2', 'Medium', '180', 'Normal'),
(5, 4, 'LEVEL1', 'Low', '150', 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ticket_price`
--
ALTER TABLE `Ticket_price`
  ADD PRIMARY KEY (`ticket_pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ticket_price`
--
ALTER TABLE `Ticket_price`
  MODIFY `ticket_pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
