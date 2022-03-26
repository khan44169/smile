-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 01:40 PM
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
(2, 'khan44169@gmail.com', 'hotel'),
(3, '', 'single'),
(4, 'khan44169@gmail.co', 'NGO'),
(5, 'khan44169', 'NGO'),
(6, 'khan44169@gmail.', 'single'),
(7, 'khan44', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `foodraised`
--

CREATE TABLE `foodraised` (
  `id` int(100) NOT NULL,
  `food_type` varchar(10) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `food_weight` int(100) NOT NULL,
  `raiser_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodraised`
--

INSERT INTO `foodraised` (`id`, `food_type`, `foodname`, `food_weight`, `raiser_id`) VALUES
(1, 'nonveg', '', 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foodreciever`
--

CREATE TABLE `foodreciever` (
  `id` int(10) NOT NULL,
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
  `id` int(50) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_license` varchar(20) NOT NULL,
  `hotel_address` varchar(50) NOT NULL,
  `hotel_email` varchar(50) NOT NULL,
  `hotel_password` varchar(10) NOT NULL,
  `hotel_number` int(10) NOT NULL,
  `hotel_photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `hotel_license`, `hotel_address`, `hotel_email`, `hotel_password`, `hotel_number`, `hotel_photo`) VALUES
(1, 'abc', '1313ss', 'sfa', 'sfsdfsad', 'sdfsf', 6464, ''),
(3, 'aa', 'aa', 'SHASTRI NAGAR', 'khan44169@gmail.com', 'aa', 2147483647, ''),
(2, 'abcd', 'aa16356', 'SHASTRI NAGAR', 'khan44169@gmail.com', '1646wda', 2147483647, '');

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
(0, 'aa', 0, 'SHASTRI NAGAR', 'khan44169@gmail.co', 'aa', 9619, ''),
(2, 'abcd', 0, 'SHASTRI NAGAR', 'khan44169@gmail.com', 'abc', 2147483647, ''),
(5, 'aa', 55, 'SHASTRI NAGAR', 'khan44169', 'aa', 96, ''),
(1, 'sdfsd', 6546665, '4984sdjbfkjsjdhbbjhbdb', 'sdkbskdfjka', '69698', 98646, ''),
(3, 'abc', 65464646, 'SHASTRI NAGAR', 'khan44169@gmail.com', '6464', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `singleowner`
--

CREATE TABLE `singleowner` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adhar` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `number` int(10) NOT NULL,
  `photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singleowner`
--

INSERT INTO `singleowner` (`id`, `name`, `adhar`, `address`, `email`, `password`, `number`, `photo`) VALUES
(3, '', 0, '', '', '', 0, ''),
(7, 'aa', 0, 'aaa', 'khan44', 'aa', 96, ''),
(2, 'aaa', 516651, 'adsddfsd', 'aaaa', 'aa', 961, ''),
(6, 'aaa', 0, 'SHASTRI NAGAR', 'khan44169@gmail.', 'aa', 9619, ''),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `raisers_forign_key` (`raiser_id`);

--
-- Indexes for table `foodreciever`
--
ALTER TABLE `foodreciever`
  ADD PRIMARY KEY (`id`),
  ADD KEY `for_record_who_give_raise_food` (`raiser_id`),
  ADD KEY `for_record_who_recive_food` (`reciever_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD UNIQUE KEY `hotel_license` (`hotel_license`,`hotel_email`,`hotel_number`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD UNIQUE KEY `ngo_registeration` (`ngo_registeration`,`ngo_email`,`ngo_number`);

--
-- Indexes for table `singleowner`
--
ALTER TABLE `singleowner`
  ADD UNIQUE KEY `number` (`number`),
  ADD KEY `single_owner_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_email`
--
ALTER TABLE `auth_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foodraised`
--
ALTER TABLE `foodraised`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foodreciever`
--
ALTER TABLE `foodreciever`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foodraised`
--
ALTER TABLE `foodraised`
  ADD CONSTRAINT `raisers_forign_key` FOREIGN KEY (`raiser_id`) REFERENCES `auth_email` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foodreciever`
--
ALTER TABLE `foodreciever`
  ADD CONSTRAINT `for_record_who_give_raise_food` FOREIGN KEY (`raiser_id`) REFERENCES `auth_email` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `for_record_who_recive_food` FOREIGN KEY (`reciever_id`) REFERENCES `auth_email` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
