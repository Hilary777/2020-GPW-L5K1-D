-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 12:48 PM
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
-- Table structure for table `Bus_route`
--

CREATE TABLE `Bus_route` (
  `route_id` int(11) NOT NULL,
  `station1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Bus_route`
--

INSERT INTO `Bus_route` (`route_id`, `station1`, `station2`, `station3`, `station4`, `time`) VALUES
(1, 'Chengdu bus terminus', 'bien road', 'jiepai', 'king hui ling', '8.am - 4.pm'),
(2, 'Chengdu bus terminus', 'xihe road', 'yudai street', 'luodaiancient town', '7.am - 5.pm'),
(3, 'Chengdu bus terminus', 'xi pu bus station', 'zhanqi village', 'lidui park', '10.am - 3.pm'),
(4, 'Chengdu bus terminus', 'shiling overpass', 'donglin second road', 'panda base', '1.pm - 6.pm'),
(5, 'Chengdu bus terminus', 'yinhui road', 'jinmaqiao', 'xiyuan hotel', '11.am - 4.pm'),
(6, 'Chengdu bus terminus', 'lianshanshan', 'honghe', 'longping road', '11.am - 5.pm'),
(7, 'Chengdu bus terminus', 'chengdu-chongqing interchange', 'yidu east road', 'peach blossom hometown', '6.am - 12.am'),
(8, 'Chengdu bus terminus', 'niuwangmiao', 'shamo street', 'chunxi road', '7.am - 2.pm'),
(9, 'Chengdu bus terminus', 'yulin road', 'second municipal hospital', 'gaoshengqiao', '11.am - 6.pm'),
(10, 'Chengdu bus terminus', 'jinjiang avenue', 'huabo', 'sansheng flower township', '3.pm - 9.pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bus_route`
--
ALTER TABLE `Bus_route`
  ADD PRIMARY KEY (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bus_route`
--
ALTER TABLE `Bus_route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
