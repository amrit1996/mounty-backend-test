-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 04:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productform`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `totalamount` float NOT NULL,
  `createdOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodform`
--

CREATE TABLE `prodform` (
  `id` int(11) NOT NULL,
  `protitle` varchar(60) NOT NULL,
  `prodesc` varchar(60) DEFAULT NULL,
  `procost` float DEFAULT NULL,
  `prosell` float DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodform`
--

INSERT INTO `prodform` (`id`, `protitle`, `prodesc`, `procost`, `prosell`, `image`) VALUES
(1, 'samsung', 'this is samsung mobile', 52000, 45000, 'samsungs10.jpg'),
(2, 'nokia', 'this is nokia mobile', 25000, 20000, 'nokia.jpg'),
(3, 'Apple', 'this is apple iphone', 90000, 85000, 'iphone.jpg'),
(4, 'oneplus', 'this is oneplus 6t', 40000, 37500, 'oneplus.jpg'),
(7, 'vivo', 'this is vivo mobile', 25600, 24000, 'vivo.jpg'),
(8, 'xiaomi', 'this is xiaomi mobile', 28000, 25000, 'xiaomi.jpg'),
(9, 'lava', 'this is a lava mobile', 15000, 12000, 'lava.jpg'),
(10, '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodform`
--
ALTER TABLE `prodform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodform`
--
ALTER TABLE `prodform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
