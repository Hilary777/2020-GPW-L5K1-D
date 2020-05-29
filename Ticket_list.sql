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
-- Table structure for table `Ticket_list`
--

CREATE TABLE `Ticket_list` (
  `ticket_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Ticket_list`
--

INSERT INTO `Ticket_list` (`ticket_id`, `route_id`, `time`, `pay`, `price`) VALUES
(1, 1, '8.am', 'Online', '200'),
(2, 2, '9.am', 'Cash', '250'),
(3, 3, '1.pm', 'Credit card', '300'),
(4, 4, '2.pm', 'Online', '180'),
(5, 5, '1.pm', 'Cash', '180');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ticket_list`
--
ALTER TABLE `Ticket_list`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ticket_list`
--
ALTER TABLE `Ticket_list`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
