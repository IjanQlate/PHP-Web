-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 09:56 AM
-- Server version: 10.4.8-MariaDB
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
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `assign` varchar(20) NOT NULL,
  `description1` longtext NOT NULL,
  `image1` varchar(1000) NOT NULL,
  `description2` longtext NOT NULL,
  `image2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `assign`, `description1`, `image1`, `description2`, `image2`) VALUES
(1, '1', 'ENTREGREEN was launched in February, 2002 with a goal to provide premium compatible cartridges at reasonable prices, as a cost-effective alternative to Original Equipment Manufacturer (OEM) products. Our procedure is a no compromise approach that reflects in the integrity of our products and services. Where others may cut corners to achieve satisfactory results, we fortify the product to achieve guaranteed results. We are provide printer from original, oem part, and ciss based on our customer. We sale and rent the printer including service for rental printer.', 'banner1.jpg', 'We provide the best service and maintanance from time to time Network management refers to the broad subject of managing computer networks. There exists a wide variety of software and hardware products that help network system administrators manage a network. Network management covers a wide area.   Explore the amazing features that make SQL Accounting GST one the best software for business. Work more efficiently with true real-time posting and seamlessly integrated modules. Store virtually unlimited years of business data for better decision-base analysis with Open Period solution. Generate professional grade business reports with dynamic re-balancing of report structure and self-tuning query optimization. Enjoy scalable cost effective deployment, increased system performance and ease of maintenance powered by a robust client-server architecture.', 'banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '2017-01-24 16:21:18', '20-11-2019 02:32:37 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(41, 'Software', 'This is category software', '2019-11-18 07:07:25', '19-11-2019 03:14:44 PM'),
(42, 'Hardware', 'This is Category Hardware', '2019-11-18 07:07:42', ''),
(43, 'ape', 'aa', '2019-11-29 08:26:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE `clerk` (
  `id` int(11) NOT NULL,
  `clerkname` varchar(255) NOT NULL,
  `clerkemail` varchar(255) NOT NULL,
  `clerkcontact` bigint(12) NOT NULL,
  `clerkaddress` varchar(255) NOT NULL,
  `clerkgender` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `clerkpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`id`, `clerkname`, `clerkemail`, `clerkcontact`, `clerkaddress`, `clerkgender`, `usertype`, `clerkpassword`) VALUES
(21, 'nani', 'fhzolkarnain@gmail.com', 12, 'POS 030 , KG SRI DALAM ,JALAN YUSUF', 'Male', 'Admin', '12');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `position`, `name`, `contact`, `email`, `image1`) VALUES
(2, 'Director', 'John Cadmus', '1270725507', 'johncw@entregreen.com', 'avatar.jpg'),
(3, 'Assistant Director', 'Sulie Rosa', '127172507', 'sulie@entregreen.com', 'avatar.jpg'),
(4, 'IT Support', 'Lufti Zaidi', '135122507', 'lufti.zaidi@entregreen.com', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `first_name`, `email`, `contactno`, `message`) VALUES
(1, 'a', 'anuj.lpu1@gmail.com', '11', 'aaaaaaaaaalllll'),
(2, 'a', 'anuj.lpu1@gmail.com', '11', 'testing pls jadi');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `id` int(11) NOT NULL,
  `linktele` varchar(1000) NOT NULL,
  `linkdescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`id`, `linktele`, `linkdescription`) VALUES
(1, 'tg://user?id=@Mirasyafikah', 'This is link to join telegram group for new event. Please click at the link given.'),
(2, 'tg://user?id=@frhnn', 'This is link to join telegram group for new event. Please click at the link given.'),
(3, 'tg://user?id=@Mirasyafikah', 'This is link to join telegram group for new event. Please click at the link given.'),
(4, 'tg://user?id=@frhnn', 'This is link to join telegram group for new event. Please click at the link given.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 62, '31', 1, '2019-11-29 06:55:36', 'COD', NULL),
(2, 62, '31', 1, '2019-11-29 06:58:58', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ourlocation`
--

CREATE TABLE `ourlocation` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `companyaddress` varchar(1000) NOT NULL,
  `officephone` text NOT NULL,
  `companyemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourlocation`
--

INSERT INTO `ourlocation` (`id`, `link`, `companyaddress`, `officephone`, `companyemail`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3874638506245!2d103.79166631426494!3d1.5345183613829265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6dc393e878a9%3A0x72ae8e4ae438f462!2sEntregreen!5e0!3m2!1sen!2smy!4v1574126218213!5m2!1sen!2smy', '9-01, Jalan Ros Merah 2/12, Taman Johor Jaya', '072878120', 'sales@entregreen.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  `subcat2id` int(11) NOT NULL,
  `subcat3id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCompany` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productPriceBeforeDiscount` int(11) NOT NULL,
  `productDescription` longtext NOT NULL,
  `productImage1` varchar(255) NOT NULL,
  `productImage2` varchar(255) NOT NULL,
  `productImage3` varchar(255) NOT NULL,
  `shippingCharge` int(11) NOT NULL,
  `productAvailability` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `subcat2id`, `subcat3id`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(31, 42, 131, 28, 20, 'Printer Laserjet Pro MFP M126nw', 'HP', 398, 450, 'printer', 'Printerlaserjet.jpg', 'Printerlaserjet.jpg', 'Printerlaserjet.jpg', 0, 'In Stock', '2019-11-18 09:44:37', ''),
(33, 42, 135, 29, 30, 'Epson C13T105290 Ink Cartridge - Cyan', 'Epson', 70, 78, 'Page yield: 2000 pages', 'C13T105290.jpg', 'C13T105290.jpg', 'C13T105290.jpg', 0, 'In Stock', '2019-11-19 02:58:22', ''),
(34, 42, 131, 28, 29, 'HP Printer Inkjet AIO COLOUR 2135', 'HP', 398, 450, 'this is inkjet printer', 'HP Printer INKJET.jpg', 'HP Printer INKJET.jpg', 'HP Printer INKJET.jpg', 0, 'Out of Stock', '2019-11-19 03:00:06', ''),
(35, 41, 141, 0, 0, 'SQL Accounting Software', 'SQL', 1600, 1600, 'this is sql acc', '133707-product576134.jpg', '133707-product576134.jpg', '133707-product576134.jpg', 0, 'In Stock', '2019-11-21 07:16:26', ''),
(36, 44, 131, 28, 20, 'try', 'aa', 50, 50, 'm', '5d9649fc-9b19-4a9a-a28c-69c1551baa91.jpg', 'ayam7.jpg', 'ayamb.png', 0, 'Out of Stock', '2019-11-29 08:39:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcat2`
--

CREATE TABLE `subcat2` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategoryid` int(11) NOT NULL,
  `subcat2` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat2`
--

INSERT INTO `subcat2` (`id`, `categoryid`, `subcategoryid`, `subcat2`, `creationDate`, `updationDate`) VALUES
(28, 42, 131, '(HP)Printer', '2019-11-18 08:11:15', '20-11-2019 10:10:30 AM'),
(29, 42, 135, '(Epson) Toner ', '2019-11-18 08:30:43', '20-11-2019 10:22:42 AM'),
(30, 42, 131, '(HP) Toner', '2019-11-19 03:01:36', '20-11-2019 10:23:45 AM'),
(31, 42, 131, '(HP) Ink Cartridge', '2019-11-19 03:01:50', '20-11-2019 10:27:44 AM'),
(32, 42, 135, '(Epson) Printer', '2019-11-19 03:01:58', '20-11-2019 10:29:30 AM'),
(33, 42, 135, '(Epson) Ink Cartridge', '2019-11-19 03:02:07', '20-11-2019 10:29:43 AM'),
(34, 42, 137, '(Canon) Printer', '2019-11-19 03:02:15', '19-11-2019 12 PM'),
(35, 42, 137, '(Canon) Ink Cartridge', '2019-11-19 03:02:23', '19-11-2019 03:44:36 PM'),
(36, 42, 137, '(Canon) Toner', '2019-11-19 03:02:32', '20-11-2019 10:06:15 AM'),
(37, 42, 139, '(Brother) Ink Cartridge', '2019-11-19 03:02:38', '19-11-2019 03:38:37 PM'),
(38, 42, 139, '(Brother) Toner', '2019-11-19 03:02:48', '19-11-2019 03:42:08 PM'),
(39, 42, 139, '(Brother)Printer', '2019-11-19 03:02:54', '19-11-2019 03:49:09 PM'),
(40, 42, 131, 'HP', '2019-11-21 09:09:17', ''),
(41, 42, 131, 'Epson', '2019-11-21 09:10:10', ''),
(42, 42, 143, 'HP', '2019-11-21 09:12:34', ''),
(43, 44, 144, 'a', '2019-11-29 08:37:07', '');

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
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat3`
--

INSERT INTO `subcat3` (`id`, `categoryid`, `subcategoryid`, `subcat2id`, `subcat3`, `creationDate`, `updationDate`) VALUES
(20, 42, 131, 28, 'Printer Laserjet', '2019-11-18 08:53:21', '19-11-2019 09ï»¿ï»¿ AM'),
(29, 42, 131, 28, 'Printer Inkjet', '2019-11-19 02:55:56', ''),
(30, 42, 135, 29, 'Colour', '2019-11-19 02:56:06', ''),
(31, 42, 135, 29, 'MonoChrome', '2019-11-19 03:00:45', '19-11-2019 09ï»¿ï»¿ AM'),
(32, 42, 131, 40, 'HP Printer Laserjet', '2019-11-21 09:11:22', ''),
(33, 42, 143, 42, 'Colour', '2019-11-21 09:12:48', ''),
(34, 44, 144, 43, 'b', '2019-11-29 08:37:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(131, 42, 'Printer', '2019-11-18 07:08:01', '21-11-2019 02:38:34 PM'),
(135, 42, 'Epson', '2019-11-18 07:12:53', '18-11-2019 01:39:25 PM'),
(137, 42, 'Canon', '2019-11-18 07:13:33', '18-11-2019 01:39:37 PM'),
(139, 42, 'Brother', '2019-11-18 07:13:52', '18-11-2019 01:39:54 PM'),
(140, 41, 'Sql Payroll', '2019-11-18 07:14:04', '19-11-2019 03:18:54 PM'),
(141, 41, 'SQL Accounting', '2019-11-18 07:14:18', ''),
(142, 41, 'SQL Post', '2019-11-18 07:53:44', '20-11-2019 10:21:08 AM'),
(143, 42, 'Toner', '2019-11-21 09:12:19', ''),
(144, 43, 'Brother ', '2019-11-29 08:36:47', '29-11-2019 02:08:15 PM');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(43, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-15 03:21:33', '15-11-2019 09:02:50 AM', 1),
(44, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-15 07:41:29', '15-11-2019 01:17:50 PM', 1),
(45, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-20 03:48:29', '20-11-2019 09:20:17 AM', 1),
(46, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-20 08:45:42', '20-11-2019 02:15:45 PM', 1),
(47, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 01:53:33', '21-11-2019 08:37:16 AM', 1),
(48, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 03:07:29', '21-11-2019 09:58:06 AM', 1),
(49, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 06:16:50', '21-11-2019 11:47:00 AM', 1),
(50, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 06:17:16', '', 0),
(51, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 06:17:22', '', 1),
(52, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 07:48:57', '21-11-2019 01:32:18 PM', 1),
(53, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 08:02:35', '21-11-2019 02:24:17 PM', 1),
(54, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 08:54:37', '21-11-2019 02:29:49 PM', 1),
(55, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 09:42:44', '21-11-2019 03:15:09 PM', 1),
(56, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-21 09:51:47', '21-11-2019 03:33:41 PM', 1),
(57, 'mira@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-25 00:51:01', '', 1),
(58, 'hajar@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-28 01:34:14', '', 0),
(59, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 06:53:07', '', 0),
(60, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 06:53:16', '', 0),
(61, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 06:53:26', '', 0),
(62, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 06:54:24', '29-11-2019 01:33:48 PM', 1),
(63, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 08:05:15', '29-11-2019 01:38:58 PM', 1),
(64, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 08:09:07', '29-11-2019 01:39:27 PM', 1),
(65, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2019-11-29 08:09:34', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `details` varchar(20) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ssm` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `shippingAddress` longtext NOT NULL,
  `shippingState` varchar(255) NOT NULL,
  `shippingCity` varchar(255) NOT NULL,
  `shippingPincode` int(11) NOT NULL,
  `billingAddress` longtext NOT NULL,
  `billingState` varchar(255) NOT NULL,
  `billingCity` varchar(255) NOT NULL,
  `billingPincode` int(11) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `contactno`, `gender`, `details`, `companyname`, `password`, `ssm`, `department`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(48, 'hajar', '', 'hajar97nadhirah@gmail.com', '189641413', 'company', '', 'otak otak', '25d55ad283aa400af464c76d713c07ad', '', '', '', '', '', 0, '', '', '', 0, '2019-10-31 06:26:48', ''),
(49, 'hajar', '', 'hajar97nadhirah@gmail.com', '189641413', 'individual', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '', 0, '2019-11-01 07:27:50', ''),
(50, 'hajar', '', 'hajar97nadhirah@gmail.com', '189641413', 'individual', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-06 08:28:36', ''),
(51, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 01:09:50', ''),
(52, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 04:55:52', ''),
(53, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 04:57:03', ''),
(54, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 08:50:09', ''),
(55, '', '', '', '123456789', 'individual', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 09:13:31', ''),
(56, 'hajar', '', 'hajar@gmail.com', '123', 'company', '', '123', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 09:18:27', ''),
(57, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 09:20:58', ''),
(58, '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 0, '', '', '', 0, '2019-11-20 09:37:58', ''),
(59, 'hajar', 'harip', 'hajar@gmail.com', '01110661413', 'on', '', 'entregreen', '202cb962ac59075b964b07152d234b70', '', '', 'jalan rosmerah', 'johor', 'jb', 81100, '', '', '', 0, '2019-11-20 10:06:02', ''),
(60, 'hajar', 'harip', 'hajar@gmail.com', '01110661413', 'male', 'company', 'entregreen', '202cb962ac59075b964b07152d234b70', '1234567890', 'acc', 'jalan rosmerah', 'johor', 'jb', 81100, '', '', '', 0, '2019-11-25 06:44:09', ''),
(61, 'aa', 'bb', 'ab@gmail.com', '1', 'Female', 'Company', 'aa', '01cfcd4f6b8770febfb40cb906715822', '123', 'ab', 'POS 030 , KG SRI DALAM ,JALAN YUSUF, 83600 SEMERAH , BATU PAHAT, JOHOR', 'JOHOR', 'MUAR', 83600, '', '', '', 0, '2019-11-29 03:45:11', ''),
(62, 'a', 'a', 'anuj.lpu1@gmail.com', '11', 'Male', 'Individual', '', '202cb962ac59075b964b07152d234b70', '', '', 'POS 030 , KG SRI DALAM ,JALAN YUSUF, 83600 SEMERAH , BATU PAHAT, JOHOR', 'JOHOR', 'MUAR', 83600, '', '', '', 0, '2019-11-29 03:51:21', ''),
(63, 'a', 'a', 'anuj.lpu1@gmail.com', 'a', 'Female', 'Individual', '', '202cb962ac59075b964b07152d234b70', '', '', 'a', 'a', 'a', 0, '', '', '', 0, '2019-11-29 06:54:00', ''),
(64, 'nani', 'nani', 'anuj.lpu1@gmail.com', '1', '', 'Individual', '', 'd16fb36f0911f878998c136191af705e', '', '', 'a', 'a', 'a', 0, '', '', '', 0, '2019-11-29 08:04:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17'),
(2, 23, 21, '2019-11-07 07:10:47'),
(3, 24, 21, '2019-11-14 03:32:50'),
(4, 62, 31, '2019-11-29 06:55:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clerk`
--
ALTER TABLE `clerk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourlocation`
--
ALTER TABLE `ourlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat2`
--
ALTER TABLE `subcat2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat3`
--
ALTER TABLE `subcat3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `clerk`
--
ALTER TABLE `clerk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ourlocation`
--
ALTER TABLE `ourlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subcat2`
--
ALTER TABLE `subcat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `subcat3`
--
ALTER TABLE `subcat3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
