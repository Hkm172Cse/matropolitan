-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 09:37 PM
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
(12, 'vasiline', 'Skin Care', 'Sample', 'Valuka Fectory', 'option1', '2022-01-05', 'image/bill4.jpg', 'Piece', 15, 12, 300, 'abg', '2022-01-05 12:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `table_stock_product`
--

CREATE TABLE `table_stock_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `stock` double NOT NULL,
  `base_unit` double NOT NULL,
  `remark` double NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_stock_product`
--

INSERT INTO `table_stock_product` (`id`, `product_name`, `quantity`, `stock`, `base_unit`, `remark`, `created`) VALUES
(46, 'vasiline', 12, 50, 12, 1, '2022-01-11 19:27:30'),
(47, 'vasiline', 12, 50, 12, 1, '2022-01-11 19:28:04'),
(48, 'sope 48 gm', 240, 0, 120, 2, '2022-01-11 19:28:04'),
(49, 'vasiline', 12, 50, 12, 1, '2022-01-11 19:42:34'),
(50, 'sope 48 gm', 240, 0, 120, 2, '2022-01-11 19:42:34'),
(51, 'Petrolium jely 50 gm', 24, 0, 12, 2, '2022-01-11 19:42:34'),
(52, 'vasiline', 12, 50, 12, 1, '2022-01-11 19:47:14'),
(53, 'sope 48 gm', 240, 0, 120, 2, '2022-01-11 19:47:14'),
(54, 'Petrolium jely 50 gm', 24, 0, 12, 2, '2022-01-11 19:47:14'),
(55, '', 18, 0, 18, 1, '2022-01-11 19:47:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
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
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_stock_product`
--
ALTER TABLE `table_stock_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
