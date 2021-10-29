-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 05:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asbackes`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`) VALUES
(101, 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `itemname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`itemname`, `price`, `quantity`, `total`) VALUES
('DOSA', 30, 4, 120);


-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `cphone` decimal(10,0) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cmail` varchar(500) DEFAULT NULL,
  `names` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `cphone` decimal(10,0) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cmail` varchar(500) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `iprice` int(10) NOT NULL,
  `iqty` int(11) NOT NULL,
  `itotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `deliverdwa`
--

CREATE TABLE `deliverdwa` (
  `cphone` decimal(10,0) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `iqty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `enum` decimal(10,0) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `place` varchar(2000) NOT NULL,
  `name` varchar(20) NOT NULL,
  `iname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `sal` int(20) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `num` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `sal`, `address`, `num`) VALUES
(184, 'ABHI', 60000, 'MULKI', '8722014850'),
(185, 'RAJU', 5000, 'MULKI', '8722814859');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_namme` varchar(70) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_namme`, `price`) VALUES
(145, 'DOSA', 30),
(147, 'IDLI', 20),
(149, 'cookies', 40),
(158, 'SHEERA', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `num` (`eid`),
  ADD UNIQUE KEY `num_2` (`num`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
