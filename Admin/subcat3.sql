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
-- Table structure for table `subcat3`
--

CREATE TABLE `subcat3` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `subcat2id` int(11) NOT NULL,
  `subcat3` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat3`
--

INSERT INTO `subcat3` (`id`, `categoryid`, `subcategoryid`, `subcat2id`, `subcat3`, `creationDate`, `updationDate`) VALUES
(6, 0, 0, 0, 'what', '2019-11-13 04:39:09', '13-11-2019 10ï»¿ï»¿ AM'),
(7, 0, 0, 0, 'haa', '2019-11-13 04:54:39', '13-11-2019 10ï»¿ï»¿ AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subcat3`
--
ALTER TABLE `subcat3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subcat3`
--
ALTER TABLE `subcat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
