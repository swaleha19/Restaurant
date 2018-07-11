-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 10:51 AM
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
CREATE DATABASE IF NOT EXISTS `rk_restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rk_restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  `food_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `order_status` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_address_master`
--

CREATE TABLE `delivery_address_master` (
  `address_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `food_category_id` bigint(20) NOT NULL,
  `food_category_name` text NOT NULL,
  `food_category_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(17, 'Non Veg Starters', 'chciken.jpg'),
(18, 'Non Veg Soup', 'chicken soup.jpeg'),
(19, ' Biryani', 'chicken-briyani.jpg'),
(20, 'Desi Chicken', 'desi chicken.jpg'),
(21, 'Chinese starters', 'chole bhature.jpg'),
(22, 'Fish', 'fish.jpg'),
(23, 'THALI', 'thali.jpg'),
(24, 'Non Veg Main Course', 'Veg-platter.jpg'),
(25, 'Mutton', 'mutton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_name`
--

CREATE TABLE `food_name` (
  `food_id` bigint(20) NOT NULL,
  `food_category_id` bigint(20) NOT NULL,
  `food_name` text NOT NULL,
  `food_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(73, 8, 'Veg Pakoda', 50),
(74, 9, 'Veg Fried Rice', 110),
(75, 9, 'Veg Fried Rice with noodles', 140),
(76, 9, 'paneer chowmein', 110),
(77, 9, 'schezwan rice', 130),
(78, 9, 'songhai rice', 140),
(79, 9, 'mashroom chowmein', 110),
(80, 9, 'veg triple rice', 150),
(81, 9, 'veg chowmein', 80),
(82, 9, 'schezwan noodles', 110),
(83, 9, 'veg hakka noodles', 90),
(84, 9, 'schezwan noodles', 140),
(85, 9, 'veg singapuri noodles', 140),
(86, 9, 'veg songhai chopsy', 160),
(87, 10, 'adraki kebab', 110),
(88, 10, 'aalu nazakat', 120),
(89, 10, 'paneer tikka', 150),
(90, 10, 'paneer tikka lahori', 150),
(91, 10, 'paneer bhuna tikka', 180),
(92, 10, 'paneer hazari tikka', 180),
(93, 10, 'potato tanduri', 90),
(94, 10, 'tanduri gobi', 120),
(95, 10, 'tanduri capsicum', 120),
(96, 10, 'veg seek kebab', 130),
(97, 10, 'veg platter', 180),
(98, 11, 'palak paneer', 110),
(99, 11, 'paneer korma', 130),
(100, 11, 'paneer bhurji', 130),
(101, 11, 'paneer butter masala', 140),
(102, 11, 'paneer masala', 120),
(103, 11, 'paneer kadhai', 130),
(104, 11, 'paneer nawabi kofta', 160),
(105, 11, 'paneer patyala', 140),
(106, 11, 'paneer lakhnavi', 150),
(107, 11, 'paneer punjabi', 140),
(108, 11, 'paneer pasanda', 150),
(109, 11, 'paneer mumtaj', 150),
(110, 11, 'paneer handi', 140),
(111, 11, 'paneer R.K special', 160),
(112, 11, 'paneer maratha', 140),
(113, 11, 'paneer tiranga', 150),
(114, 11, 'paneer bhurji curry', 150),
(115, 11, 'shahi paneer', 150),
(116, 11, 'paneer kolhapuri', 110),
(117, 12, 'Aalu palak', 80),
(118, 12, 'Aalu dam', 75),
(119, 12, 'Aalu dam punjab', 110),
(120, 12, 'Aalu Jeera', 60),
(121, 12, 'Aalu methi', 60),
(122, 12, 'Aalu dam kashmiri', 110),
(123, 12, 'Aalu gobhi matar', 110),
(124, 12, 'Baby corn', 120),
(125, 12, 'grreen peas', 120),
(126, 12, 'Kaju Curry', 160),
(127, 12, 'Kaju Handi', 180),
(128, 12, 'Malai Kofta', 150),
(129, 12, 'Mushroom Handi', 150),
(130, 12, 'Methi Matar Malai', 150),
(131, 12, 'Mix veg', 90),
(132, 12, 'Palak Matar', 90),
(133, 12, 'Stuffed Capsicum', 100),
(134, 12, 'Stuffed Tomato', 100),
(135, 12, 'Veg Kadhai', 110),
(136, 12, 'Veg kolhapuri', 110),
(137, 12, 'Veg makhanwal', 130),
(138, 12, 'Veg bhujiya', 110),
(139, 12, 'Veg bhuna', 110),
(140, 12, 'Veg jaipuri', 110),
(141, 12, 'Veg chilly milly M/S', 130),
(142, 12, 'Veg malai', 120),
(143, 12, 'Veg R.K.Special', 140),
(144, 13, 'Tanduri roti', 10),
(145, 13, 'Tanduri Butter roti', 15),
(146, 13, 'plain nan', 20),
(147, 13, 'butter nan', 30),
(148, 13, 'tawa roti', 10),
(149, 13, 'Tawa butter roti', 15),
(150, 13, 'Garlic nan', 40),
(151, 13, 'Stuffed kulcha', 50),
(152, 13, 'lachcha paratha', 0),
(153, 13, 'Butter paratha', 30),
(154, 13, 'Aalu paratha', 50),
(155, 13, 'Paneer paratha', 50),
(156, 13, 'Kashmiri naan', 60),
(157, 14, 'Dal jeera', 45),
(158, 14, 'Dal butter fry', 50),
(159, 14, 'Dal Tadka', 60),
(160, 14, 'Dal double tadka', 65),
(161, 14, 'Dal Handi', 70),
(162, 14, 'Dal Mughlai veg', 80),
(163, 14, 'Dal Mughlai nonveg', 80),
(164, 14, 'Dal kolhapuri', 70),
(165, 14, 'Plain Dal ', 40),
(166, 15, 'Plain rice', 35),
(167, 15, 'Jera rice', 40),
(168, 15, 'Masala rice', 60),
(169, 15, 'Onion tomato rice', 75),
(170, 15, 'Lemon rice', 60),
(171, 15, 'Dal butter kadhai', 80),
(172, 15, 'Veg pulao', 60),
(173, 15, 'Green peas pulao', 60),
(174, 15, 'curd rice', 70),
(175, 15, 'Navaratan pulao', 80),
(176, 15, 'Veg biryani', 80),
(177, 15, 'Veg  hyderabadi biryani', 90),
(178, 15, 'Kashmiri pualo', 80),
(179, 16, 'Bater currry', 180),
(180, 16, 'Bater masala', 190),
(181, 16, 'Bater bhuna', 200),
(182, 16, 'Bater tanduri', 230),
(183, 17, 'Chicken roast', 160),
(184, 17, 'Mutton shahi kebab', 200),
(185, 17, 'Chicken kadi', 60),
(186, 17, 'Chicken kebab', 150),
(187, 17, 'Chicken aachari', 150),
(188, 17, 'Chicken manchurian', 160),
(189, 17, 'Chicken garlic', 180),
(190, 17, 'Chicken chilly', 160),
(191, 17, 'Chicken soya garlic ', 150),
(192, 17, 'Chicken schezwan style', 180),
(193, 17, 'Chicken spring roll', 200),
(194, 17, 'Chicken cream any', 160),
(195, 17, 'Chicken lolipop', 160),
(196, 17, 'Chicken kungfu', 180),
(197, 17, 'Chicken black pepper', 180),
(198, 17, 'Chicken majestic', 160),
(199, 17, 'egg roll', 30),
(200, 17, 'Tanduri chicken chilly', 200),
(201, 17, 'Chicken tanduri roast', 50),
(202, 18, 'Chicken clear soup', 55),
(203, 18, 'Chicken hot and sour soup', 60),
(204, 18, 'Chicken Sweetcorn soup', 70),
(205, 18, 'Chicken manchaw soup', 70),
(206, 18, 'Chicken sorba', 80),
(207, 19, 'Chicken biryani', 160),
(208, 19, 'Chicken biryani half', 80),
(209, 19, 'Egg biryani', 90),
(210, 19, 'Khuska', 70),
(211, 19, 'Mutton Biryani', 200),
(212, 19, 'Mutton Biryani half', 110),
(213, 20, 'Desi Chicken curry', 200),
(214, 20, 'Desi Chicken kadhai', 220),
(215, 20, 'Desi Chicken kolhapuri', 220),
(216, 20, 'Desi Chicken masala', 210),
(217, 20, 'Desi Chicken kassa', 220),
(218, 21, 'Paneer chilly', 110),
(219, 21, 'Chana chilly', 90),
(220, 21, 'Gobhi chilly', 80),
(221, 21, 'Aalu chilly', 80),
(222, 21, 'Veg manchurian', 100),
(223, 21, 'Paneer suty futy', 120),
(224, 21, 'Veg bulet', 100),
(225, 21, 'Paneer Four spic', 110),
(226, 21, 'Paneer shezwan chilly', 120),
(227, 21, 'Veg crispy', 100),
(228, 21, 'Veg crunchy', 110),
(229, 21, 'lovely corn', 120),
(230, 21, 'sweet corn', 100),
(231, 21, 'baby corn', 130),
(232, 21, 'Paneer in hot Garlic soup', 140),
(233, 21, 'Mashroom Chilly', 120),
(234, 21, 'Chinese bhel', 70),
(235, 21, 'Paneer dragon', 140),
(236, 21, 'Paneer manchurian', 150),
(237, 21, 'Paneer 65', 120),
(238, 21, 'Veg spring roll', 120),
(239, 21, 'American chopsy', 120),
(240, 22, 'Fish roast ', 60),
(241, 22, 'Fish curry', 60),
(242, 22, 'Fish masala', 70),
(243, 23, 'sada thali', 60),
(244, 23, 'special thali', 100),
(245, 23, 'shahi thali', 150),
(246, 24, 'Chicken butter Masala ', 150),
(247, 24, 'Chicken butter masala boneless', 180),
(248, 24, 'Chicken rara', 150),
(249, 24, 'Chicken korma', 140),
(250, 24, 'Chicken palak', 140),
(251, 24, 'Chicken roast masala', 160),
(252, 24, 'Chicken aftabi', 140),
(253, 24, 'Chicken rogan josh', 160),
(254, 24, 'Chicken curry', 110),
(255, 24, 'Chicken masala', 120),
(256, 24, 'Chicken tikka masala', 120),
(257, 24, 'Chicken kolhapuri', 140),
(258, 24, 'Chicken shaam savera', 150),
(259, 24, 'Chicken patyala', 170),
(260, 24, 'Chicken kadhai', 140),
(261, 24, 'Chicken mughlai', 150),
(262, 24, 'Chicken hyderbadi', 170),
(263, 24, 'Chicken handi', 150),
(264, 24, 'Chicken do pizza', 150),
(265, 25, 'Mutton Curry', 150),
(266, 25, 'Mutton kadhai', 210),
(267, 25, 'Mutton kolapuri', 210),
(268, 25, 'Mutton masala', 200),
(269, 25, 'Mutton rogan josh', 220),
(270, 25, 'Mutton kassa', 230),
(271, 25, 'Mutton rara', 240),
(272, 25, 'Mutton do pizza', 240),
(273, 25, 'Mutton bhuna', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login_control_master`
--

CREATE TABLE `login_control_master` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_userpassword` text NOT NULL,
  `user_email` text NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user_details_master`
--
ALTER TABLE `user_details_master`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_address_master`
--
ALTER TABLE `delivery_address_master`
  MODIFY `address_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `food_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `food_name`
--
ALTER TABLE `food_name`
  MODIFY `food_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details_master`
--
ALTER TABLE `user_details_master`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
