-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 09:10 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rk_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_address_master`
--

CREATE TABLE `delivery_address_master` (
  `address_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `food_category_id` bigint(20) NOT NULL,
  `food_category_name` text NOT NULL,
  `food_category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_name`
--

CREATE TABLE `food_name` (
  `food_id` bigint(20) NOT NULL,
  `food_category_id` bigint(20) NOT NULL,
  `food_name` text NOT NULL,
  `food_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_control_master`
--

CREATE TABLE `login_control_master` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_userpassword` text NOT NULL,
  `user_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details_master`
--

CREATE TABLE `user_details_master` (
  `user_id` bigint(20) NOT NULL,
  `user_name` text NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_date_of_joining` date NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_address_master`
--
ALTER TABLE `delivery_address_master`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`food_category_id`);

--
-- Indexes for table `food_name`
--
ALTER TABLE `food_name`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `login_control_master`
--
ALTER TABLE `login_control_master`
  ADD PRIMARY KEY (`user_username`);

--
-- Indexes for table `user_details_master`
--
ALTER TABLE `user_details_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_address_master`
--
ALTER TABLE `delivery_address_master`
  MODIFY `address_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `food_category_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_name`
--
ALTER TABLE `food_name`
  MODIFY `food_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details_master`
--
ALTER TABLE `user_details_master`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
