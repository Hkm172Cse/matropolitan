-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 08:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
  `carton` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `product_name`, `catagory`, `type`, `source`, `activity`, `lunch_date`, `image`, `base_unit`, `carton`, `remarks`, `created`) VALUES
(1, 'fgd', 'Skin Care', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', '', 'Blister', 48, 'dfgdf', '2021-12-14 20:12:06'),
(2, 'gg', 'Food and Beverage', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', 'image/bannerImg1.png', 'Piece', 120, 'dfgdfg', '2021-12-14 20:14:12'),
(3, 'fgsdf', 'Skin Care', 'Saleable', 'Valuka Fectory', '0', '0000-00-00', 'image/chat21.jpg', 'Piece', 40, 'sdf', '2021-12-14 20:15:40'),
(4, 'Petrolium jely 50 gm', 'Skin Care', 'Sample', 'Valuka Fectory', '0', '0000-00-00', 'image/rgt2.jpg', 'Packet', 12, 'VPG', '2021-12-14 20:41:43'),
(5, 'sope 48 gm', 'Sope', 'Promotional', 'Valuka Fectory', '0', '0000-00-00', 'image/Laravel1.png', 'Blister', 120, 'per box contain 120', '2021-12-15 05:23:17'),
(6, 'Sampho', 'Promotional', 'Sample', 'Valuka Fectory', 'option2', '2021-12-15', 'image/chat22.jpg', 'Blister', 24, 'This is new product', '2021-12-15 05:29:57'),
(7, 'jhgg', 'Skin Care', 'Saleable', 'Kamalganj Fectory', 'option1', '2021-12-15', 'image/bill2.jpg', 'Piece', 24, 'hjkhgkjb', '2021-12-15 07:38:44'),
(8, 'abc', 'Baby Diaper', 'Sample', 'Kamalganj Fectory', 'option1', '2021-12-15', 'image/bill3.jpg', 'Piece', 20, 'lorem', '2021-12-15 07:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
