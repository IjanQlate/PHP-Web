-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 07:59 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppinglama`
--

-- --------------------------------------------------------

--
-- Table structure for table `subcat2`
--

CREATE TABLE `subcat2` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `subcat2` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat2`
--

INSERT INTO `subcat2` (`id`, `categoryid`, `subcategoryid`, `subcat2`, `creationDate`, `updationDate`) VALUES
(6, 0, 0, 'Brother (Colour Laserjet Toner Cartridge)', '2019-11-12 02:20:12', '13-11-2019 10ï»¿ï»¿ AM'),
(11, 0, 0, 'Test 5', '2019-11-13 02:53:11', '13-11-2019 08ï»¿ï»¿ AM'),
(12, 0, 0, 'Uncategorised', '2019-11-13 03:16:59', '13-11-2019 10ï»¿ï»¿ AM'),
(13, 5, 4, 'LEXMARK (Toner Cartridge - Monochrome Laserjet)', '2019-11-13 05:02:02', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subcat2`
--
ALTER TABLE `subcat2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subcat2`
--
ALTER TABLE `subcat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
