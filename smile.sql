-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 05:35 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smile`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_email`
--

CREATE TABLE `auth_email` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `org_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_email`
--

INSERT INTO `auth_email` (`id`, `email`, `org_type`) VALUES
(1, 'kjkhbjkb', 'ngo'),
(2, 'khan44169@gmail.com', 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `foodraised`
--

CREATE TABLE `foodraised` (
  `id` int(100) NOT NULL,
  `food_type` varchar(10) NOT NULL,
  `food_weight` int(100) NOT NULL,
  `raiser_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodreciever`
--

CREATE TABLE `foodreciever` (
  `raiser_id` int(10) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `food_weight` int(100) NOT NULL,
  `food_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(100) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_license` varchar(20) NOT NULL,
  `hotel_address` varchar(50) NOT NULL,
  `hotel_email` varchar(20) NOT NULL,
  `hotel_password` varchar(10) NOT NULL,
  `hotel_number` int(10) NOT NULL,
  `hotel_photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `hotel_license`, `hotel_address`, `hotel_email`, `hotel_password`, `hotel_number`, `hotel_photo`) VALUES
(1, 'abc', '1313ss', 'sfa', 'sfsdfsad', 'sdfsf', 6464, ''),
(2, 'abcd', 'aa16356', 'SHASTRI NAGAR', 'khan44169@gmail.com', '1646wda', 2147483647, ''),
(3, 'aa', 'aa', 'SHASTRI NAGAR', 'khan44169@gmail.com', 'aa', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(100) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `ngo_registeration` int(20) NOT NULL,
  `ngo_address` varchar(50) NOT NULL,
  `ngo_email` varchar(20) NOT NULL,
  `ngo_password` varchar(10) NOT NULL,
  `ngo_number` int(10) NOT NULL,
  `ngo_photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `ngo_name`, `ngo_registeration`, `ngo_address`, `ngo_email`, `ngo_password`, `ngo_number`, `ngo_photo`) VALUES
(1, 'sdfsd', 6546665, '4984sdjbfkjsjdhbbjhbdb', 'sdkbskdfjka', '69698', 98646, ''),
(2, 'abcd', 0, 'SHASTRI NAGAR', 'khan44169@gmail.com', 'abc', 2147483647, ''),
(3, 'abc', 65464646, 'SHASTRI NAGAR', 'khan44169@gmail.com', '6464', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `singleowner`
--

CREATE TABLE `singleowner` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adhar` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `number` int(10) NOT NULL,
  `photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singleowner`
--

INSERT INTO `singleowner` (`id`, `name`, `adhar`, `address`, `email`, `password`, `number`, `photo`) VALUES
(1, 'ggg', 0, 'gfjggfjhfhfghjsf', 'dfghdf', 'fhdfgdf', 1641616, ''),
(2, 'ksdja', 0, 'SHASTRI NAGAR', 'khan44169@gmail.com', 'd', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_email`
--
ALTER TABLE `auth_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodraised`
--
ALTER TABLE `foodraised`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotel_license` (`hotel_license`,`hotel_email`,`hotel_number`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ngo_registeration` (`ngo_registeration`,`ngo_email`,`ngo_number`);

--
-- Indexes for table `singleowner`
--
ALTER TABLE `singleowner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adhar` (`adhar`,`email`),
  ADD UNIQUE KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_email`
--
ALTER TABLE `auth_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodraised`
--
ALTER TABLE `foodraised`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `singleowner`
--
ALTER TABLE `singleowner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
