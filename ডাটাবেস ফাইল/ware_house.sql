-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ware_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `requsition_member`
--

CREATE TABLE `requsition_member` (
  `id` int(11) NOT NULL,
  `chalanId` varchar(50) NOT NULL,
  `aria_officer` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `requestBy` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'due'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requsition_member`
--

INSERT INTO `requsition_member` (`id`, `chalanId`, `aria_officer`, `date`, `requestBy`, `status`) VALUES
(5, '1000755722', 'Sylhet-2', '01/20/2022', 'Aman Ullah', 'confirm'),
(6, '1000234144', '', '', '', 'confirm'),
(7, '1000642304', '', '', '', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `type` varchar(60) NOT NULL,
  `source` varchar(100) NOT NULL,
  `activity` varchar(60) NOT NULL,
  `lunch_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `base_unit` varchar(100) NOT NULL,
  `base_qnty_price` double NOT NULL,
  `carton` int(11) NOT NULL,
  `carton_price` double NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `product_name`, `catagory`, `type`, `source`, `activity`, `lunch_date`, `image`, `base_unit`, `base_qnty_price`, `carton`, `carton_price`, `remarks`, `created`) VALUES
(1, 'fgd', 'Skin Care', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', '', 'Blister', 0, 48, 0, 'dfgdf', '2021-12-14 20:12:06'),
(2, 'gg', 'Food and Beverage', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', 'image/bannerImg1.png', 'Piece', 0, 120, 0, 'dfgdfg', '2021-12-14 20:14:12'),
(3, 'fgsdf', 'Skin Care', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', 'image/chat21.jpg', 'Piece', 0, 40, 0, 'sdf', '2021-12-14 20:15:40'),
(4, 'Petrolium jely 50 gm', 'Skin Care', 'Sample', 'Valuka Fectory', '0', '0000-00-00', 'image/rgt2.jpg', 'Packet', 0, 12, 0, 'VPG', '2021-12-14 20:41:43'),
(5, 'sope 48 gm', 'Sope', 'Promotional', 'Valuka Fectory', '0', '0000-00-00', 'image/Laravel1.png', 'Blister', 0, 120, 0, 'per box contain 120', '2021-12-15 05:23:17'),
(6, 'Sampho', 'Promotional', 'Sample', 'Valuka Fectory', 'option2', '2021-12-15', 'image/chat22.jpg', 'Blister', 0, 24, 0, 'This is new product', '2021-12-15 05:29:57'),
(10, '', 'Skin', 'Saleable', 'Valuka Fectory', '', '2022-01-07', 'image/bannerImg2.png', '24', 10, 18, 200, 'AVGS', '2022-01-03 18:30:04'),
(12, 'vasiline', 'Skin Care', 'Sample', 'Valuka Fectory', 'option1', '2022-01-05', 'image/bill4.jpg', 'Piece', 15, 12, 300, 'abg', '2022-01-05 12:59:57'),
(13, 'Kit Kat', 'Food and Beverage', 'Sample', 'Valuka Fectory', 'option1', '2022-01-16', 'image/bannerImg4.png', 'Piece', 15, 8, 96, 'VGA', '2022-01-16 15:19:35'),
(14, 'Kit Kat', 'Food and Beverage', 'Sample', 'Valuka Fectory', 'option1', '2022-01-16', 'image/bannerImg5.png', 'Piece', 15, 8, 96, 'VGA', '2022-01-16 15:22:13'),
(15, 'Stavary Choklet', 'Skin Care', 'Saleable', 'Valuka Fectory', 'option1', '2022-01-17', 'image/bill5.jpg', 'Sachet', 2, 20, 40, 'abc', '2022-01-16 15:26:44'),
(16, 'bodna', 'Food and Beverage', 'Saleable', 'Valuka Fectory', 'option1', '2022-01-16', 'image/blog1.jpg', 'Dispenser', 1, 120, 120, 'ad', '2022-01-16 15:30:41'),
(17, 'Kit Kat', 'Skin Care', 'Saleable', 'Valuka Fectory', 'option1', '2022-01-16', 'image/blog2.jpg', 'Sachet', 4, 20, 20, 'ab', '2022-01-16 15:37:09'),
(18, 'Photato', 'Health and Hygiene', 'Promotional', 'Valuka Fectory', 'option1', '2022-01-17', 'image/bannerImg6.png', 'Piece', 25, 40, 1200, 'abc', '2022-01-16 19:49:24'),
(19, 'Photato', 'Health and Hygiene', 'Promotional', 'Valuka Fectory', 'option1', '2022-01-17', 'image/bannerImg7.png', 'Piece', 25, 40, 1200, 'abc', '2022-01-16 19:51:58'),
(20, 'Photato', 'Health and Hygiene', 'Promotional', 'Valuka Fectory', 'option1', '2022-01-17', 'image/bannerImg8.png', 'Piece', 25, 40, 1200, 'abc', '2022-01-16 19:52:49'),
(21, 'Bomba Photo', 'Food and Beverage', 'Sample', 'Valuka Fectory', 'option1', '2022-01-18', 'image/bannerImg9.png', 'Packet', 10, 40, 400, 'abg', '2022-01-16 19:53:57'),
(22, 'Chilo', 'Skin Care', 'Saleable', 'Valuka Fectory', 'option1', '2022-01-17', 'image/bill6.jpg', 'Packet', 10, 40, 400, 'VGD', '2022-01-16 19:57:26'),
(23, 'Chips', 'Food and Beverage', 'Saleable', 'Valuka Fectory', 'option1', '2022-01-10', 'image/blog3.jpg', 'Packet', 10, 120, 240, 'abc', '2022-01-16 20:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `table_requisition`
--

CREATE TABLE `table_requisition` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `carton` varchar(50) NOT NULL,
  `remark` double NOT NULL DEFAULT current_timestamp(),
  `aria_office` varchar(200) NOT NULL,
  `date` varchar(255) NOT NULL,
  `requestBy` varchar(220) NOT NULL,
  `chalanId` varchar(255) NOT NULL,
  `stockId` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'due'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_requisition`
--

INSERT INTO `table_requisition` (`id`, `product_name`, `quantity`, `stock`, `carton`, `remark`, `aria_office`, `date`, `requestBy`, `chalanId`, `stockId`, `created`, `status`) VALUES
(88, 'Petrolium jely 50 gm', '50', '400', '12', 4.17, 'Sylhet-2', '01/20/2022', 'Aman Ullah', '1000755722', 59, '2022-01-19 22:46:46', 'due'),
(89, 'Sampho', '50', '100', '24', 2.08, 'Sylhet-2', '01/20/2022', 'Aman Ullah', '1000755722', 57, '2022-01-19 22:46:46', 'due'),
(90, 'Chips', '300', '800', '120', 2.5, '', '', '', '1000234144', 71, '2022-01-19 23:41:22', 'due'),
(91, 'Kit Kat', '500', '2000', '100', 5, '', '', '', '1000234144', 62, '2022-01-19 23:41:22', 'due'),
(92, 'Chips', '25', '600', '120', 0.21, '', '', '', '1000642304', 71, '2022-01-20 00:03:25', 'due'),
(93, 'Photato', '25', '800', '40', 0.63, '', '', '', '1000642304', 68, '2022-01-20 00:03:25', 'due');

-- --------------------------------------------------------

--
-- Table structure for table `table_stock_product`
--

CREATE TABLE `table_stock_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `stock` double NOT NULL,
  `carton` double NOT NULL,
  `remark` double NOT NULL,
  `aria_office` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL,
  `requestBy` varchar(250) NOT NULL,
  `chalanId` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_stock_product`
--

INSERT INTO `table_stock_product` (`id`, `product_name`, `quantity`, `stock`, `carton`, `remark`, `aria_office`, `date`, `requestBy`, `chalanId`, `created`) VALUES
(56, 'vasiline', 45, 90, 12, 3.75, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-12 19:25:00'),
(57, 'Sampho', 50, 50, 24, 2.08, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-12 19:25:00'),
(58, 'sope 48 gm', 100, 200, 120, 0.83, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-12 19:25:00'),
(59, 'Petrolium jely 50 gm', 200, 350, 12, 16.67, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-12 19:25:00'),
(61, 'abc', 52, 104, 0, 0, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 15:33:04'),
(62, 'Kit Kat', 1000, 1500, 100, 10, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 15:37:09'),
(63, 'Kit Kat', 500, 400, 20, 25, 'Sylhet-1', '01/20/2022', 'Surujit', '1000226488', '2022-01-16 16:39:03'),
(64, 'bodna', 500, 1000, 120, 4.17, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 16:39:03'),
(65, 'Stavary Choklet', 500, 1000, 20, 25, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 16:39:03'),
(66, 'Kit Kat', 52, 104, 8, 6.5, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 16:39:03'),
(67, 'Kit Kat', 400, 400, 8, 50, 'Sylhet-1', '01/20/2022', 'Surujit', '1000226488', '2022-01-16 16:39:03'),
(68, 'Photato', 500, 775, 40, 12.5, 'Sylhet-3', '01/19/2022', 'Azizul Hakim', '1000443547', '2022-01-16 19:52:49'),
(69, 'Bomba Photo', 100, 200, 25, 4, 'Dhaka-1', '01/17/2022', 'Azizul Hakim', '1000795435', '2022-01-16 19:53:57'),
(70, 'Chilo', 200, 300, 0, 0, 'Sylhet-1', '01/20/2022', 'Surujit', '1000226488', '2022-01-16 19:57:26'),
(71, 'Chips', 400, 575, 120, 3.33, 'Sylhet-3', '01/19/2022', 'Azizul Hakim', '1000443547', '2022-01-16 20:00:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requsition_member`
--
ALTER TABLE `requsition_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_requisition`
--
ALTER TABLE `table_requisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_stock_product`
--
ALTER TABLE `table_stock_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requsition_member`
--
ALTER TABLE `requsition_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `table_requisition`
--
ALTER TABLE `table_requisition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `table_stock_product`
--
ALTER TABLE `table_stock_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
