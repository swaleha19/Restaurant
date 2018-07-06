-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 06:29 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rk_restaurant`
--
CREATE DATABASE `rk_restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rk_restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE IF NOT EXISTS `cart_details` (
  `cart_id` bigint(20) NOT NULL,
  `food_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `order_status` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `delivery_address_master`
--

CREATE TABLE IF NOT EXISTS `delivery_address_master` (
  `address_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `delivery_address_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE IF NOT EXISTS `food_category` (
  `food_category_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `food_category_name` text NOT NULL,
  `food_category_image` text NOT NULL,
  PRIMARY KEY (`food_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`food_category_id`, `food_category_name`, `food_category_image`) VALUES
(1, 'Beverages', 'drinks.jpg'),
(2, 'Salad', 'salad.jpg'),
(3, 'Raita', 'raita.jpg'),
(4, 'Pizza', 'pizza.jpg'),
(5, 'Burger', 'burger.jpg'),
(6, 'Sandwich', 'sandwich.png'),
(7, 'Veg Soup', 'soup.png'),
(8, 'Veg Starters', 'starters.jpg'),
(9, 'Rice N Noodles', 'rice  n noodles.jpg'),
(10, 'Veg Tandoori', 'veg tanduri.jpg'),
(11, 'Paneer Dishes', 'paneer dishes.jpg'),
(12, 'Veg Curry', 'veg curry.jpg'),
(13, 'Naan and Roti', 'naan.jpg'),
(14, 'Dal', 'dal.jpg'),
(15, 'Rice', 'rice.jpg'),
(16, 'Bater', 'bater.jpg'),
(17, 'Chicken Dishes', 'chciken.jpg'),
(18, 'Chicken Soup', 'chicken soup.jpeg'),
(19, 'Chicken Biryani', 'chicken-briyani.jpg'),
(20, 'Desi Chicken', 'desi chicken.jpg'),
(21, 'Chole Bhature', 'chole bhature.jpg'),
(22, 'Fish', 'fish.jpg'),
(23, 'THALI', 'thali.jpg'),
(24, 'Veg Platter', 'Veg-platter.jpg'),
(25, 'Mutton', 'mutton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_name`
--

CREATE TABLE IF NOT EXISTS `food_name` (
  `food_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `food_category_id` bigint(20) NOT NULL,
  `food_name` text NOT NULL,
  `food_price` int(11) NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `food_name`
--

INSERT INTO `food_name` (`food_id`, `food_category_id`, `food_name`, `food_price`) VALUES
(1, 1, 'Mineral Water', 20),
(2, 1, 'Mineral Water', 20),
(3, 1, 'Cold Drink', 20),
(4, 1, 'Masala Cold Drink', 25),
(5, 1, 'Butter Milk', 20),
(6, 1, 'Fresh Lime Soda', 25),
(7, 1, 'Fresh Lime Water', 15),
(8, 1, 'Sweet Lassi', 30),
(9, 1, 'Kesar Lassi', 40),
(10, 1, 'R K Special Lassi', 50),
(11, 1, 'Tea', 15),
(12, 1, 'Black Tea', 10),
(13, 1, 'Hot Coffee', 20),
(14, 2, 'Green Salad', 30),
(15, 2, 'Kachumber Salad', 40),
(16, 2, 'Kheera Salad', 30),
(17, 2, 'Lachha Salad', 40),
(18, 2, 'Onion Salad', 15),
(19, 2, 'Russian Salad', 50),
(20, 3, 'Aalu Raita', 40),
(21, 3, 'Boondi Raita', 40),
(22, 3, 'Curd', 40),
(23, 3, 'Fruit Raita', 60),
(24, 3, 'Onion Raita', 35),
(25, 3, 'Pineapple Raita', 55),
(26, 3, 'Veg Raita', 45),
(27, 4, 'American Pizza', 140),
(28, 4, 'Cheese Pizza', 110),
(29, 4, 'Mexican Pizza', 120),
(30, 4, 'Mushroom Pizza', 150),
(31, 4, 'Nepolian Pizza', 180),
(32, 4, 'Onion Capsicum Pizza', 120),
(33, 4, 'Onion Capsicum Pizza Double Base', 160),
(34, 4, 'Pineapple Pizza', 160),
(35, 4, 'Paneer Spicy Pizza', 160),
(36, 4, 'Paneer Pizza', 140),
(37, 4, 'R K Special Pizza', 180),
(38, 4, 'Sweet Corn Pizza', 180),
(39, 4, 'Veg Pizza', 120),
(40, 4, 'Veggie Lover Pizza', 160),
(41, 5, 'American Burger', 80),
(42, 5, 'Cheese Burger', 70),
(43, 5, 'Club Burger', 70),
(44, 5, 'Indian Burger', 75),
(45, 5, 'R K Special Burger', 100),
(46, 5, 'Veg Burger', 60),
(47, 6, 'Cheese Sandwich', 60),
(48, 6, 'Club Sandwich', 70),
(49, 6, 'Veg Grilled Sandwich', 80),
(50, 6, 'Veg Sandwich', 80),
(51, 6, 'Bread Butter', 20),
(52, 6, 'Bread Toast', 30),
(53, 6, 'Bread Butter Jam', 50),
(54, 7, 'Cream of Tomato Soup', 50),
(55, 7, 'Lemon Coriander Soup', 50),
(56, 7, 'Mushroom Soup', 60),
(57, 7, 'Tomato Dhania Sorba', 70),
(58, 7, 'Tomato Soup', 40),
(59, 7, 'Veg Clear Soup', 50),
(60, 7, 'Veg Hot Soup', 60),
(61, 7, 'Veg Sweet Corn Soup', 60),
(62, 7, 'Veg Manchow Soup', 50),
(63, 8, 'Finger Chips', 60),
(64, 8, 'Chana Roast', 70),
(65, 8, 'Hara Bhara Kabab', 90),
(66, 8, 'Veg Kadak Kabab', 100),
(67, 8, 'Shahi Petro', 130),
(68, 8, 'Veg Cutlet', 40),
(69, 8, 'Cheese Cutlet', 40),
(70, 8, 'Chhole Bhature', 40),
(71, 8, 'Paneer Kurkure', 130),
(72, 8, 'Veg Platter', 130),
(73, 8, 'Veg Pakoda', 50);

-- --------------------------------------------------------

--
-- Table structure for table `login_control_master`
--

CREATE TABLE IF NOT EXISTS `login_control_master` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_userpassword` text NOT NULL,
  `user_email` text NOT NULL,
  `user_status` int(11) NOT NULL,
  PRIMARY KEY (`user_username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_control_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE IF NOT EXISTS `user_cart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_details_master`
--

CREATE TABLE IF NOT EXISTS `user_details_master` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_date_of_joining` date NOT NULL,
  `user_image` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_details_master`
--

