-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 17, 2016 at 06:02 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ordr`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `description`, `restaurant_id`) VALUES
(1, 'Pasta', 'Yummy Pasta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `menu_item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `dietary_restrictions` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cuisine` varchar(255) NOT NULL,
  `price_range_min` float NOT NULL,
  `price_range_max` float NOT NULL,
  `about` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `theme_color` varchar(10) NOT NULL,
  `profile_photo_url` varchar(255) NOT NULL,
  `cover_photo_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `name`, `location`, `cuisine`, `price_range_min`, `price_range_max`, `about`, `user_id`, `theme_color`, `profile_photo_url`, `cover_photo_url`) VALUES
(1, 'Italianni''s Restaurant', 'Glorietta 4', 'Italian', 300, 1000, 'This is what I love during my free time - I can go to some place I want to chill out and kill time, like visiting some restaurant and try their specialties. I thought that maybe its time for me to use my gift certificate, And since I love pastas, I''ve decided to visit Italianni''s branch at SM Mall of Asia. It is a Filipino-owned restaurant with the Italian-inspired theme, and offers ala-Italian menus, which are also not bad. I like the ambiance of their restaurant, have this very homey feeling, where in you can just relax while drinking your espresso, or reading the latest newspaper while waiting your server for your delizioco cibo.\n', 2, '#0A4923', 'Italianni''sPP.png', 'Italianni''sCP.jpg'),
(2, 'Wee Nam Kee', 'Serendra, BGC', 'Asian', 300, 500, 'My first childhood memory of Wee Nam Kee Chicken Rice (?????), was when my dad who brought me to have a plate of chicken rice in Marina Square. I wasn’t born a foodie of course, and you know lah, as a kid I will just eat whatever my parents buy for me. But to me, going Marina Square always remind of chicken rice. But I can never remember the name until two years ago when I was judging for Food Republic Hawker King, I ate Wee Nam Kee chicken rice at I12 Katong and was very impressed by its roast chicken. It was then that I recalled that they have a stall in Marina Square as well.', 3, '#F8235', 'Italianni''sPP.png', 'Italianni''sCP.jpg'),
(3, 'Mad Mark''s', 'Central Square, BGC', 'American', 200, 500, 'Inlove with their steaks ? We ordered the Millionaire''s steak and smashed potato as its side dish. My friends ordered a burger and imperial chicken curry. It all taste good, but not fulfilling to the stomach since the serving is small for us. The sauce for our steak was yummy! It comes with some potato wedges and beef cubes. We really loved the smashed potato and it''s sauce. Not sure what it was though. For our desserts, we ordered ice creams! Roasted Madagascar is their best seller. But since me and my boyfriend like mint flavor, we got the mint chocolate chip ice cream. It was so minty and comes with few chocolate chips. ? But still tastes so good.', 4, '#F8235', 'Italianni''sPP.png', 'Italianni''sCP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 for admin, 1 for restaurant, 2 for user'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `type`) VALUES
(1, 'admin', 'admin', 'Adminininini', 0),
(2, 'resto1', 'resto1', 'Italiani''s', 1),
(3, 'resto2', 'resto2', 'Wee Nam Kee', 1),
(4, 'resto3', 'resto3', 'Mad Mark''s', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`menu_item_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `menu_item_id` (`menu_item_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `menu_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_restaurant_id` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `fk_menu_id` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_menu_item_id` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`menu_item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
