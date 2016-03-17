-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2016 at 02:57 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recipeBox`
--
CREATE DATABASE IF NOT EXISTS `recipeBox` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `recipeBox`;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` mediumint(9) NOT NULL,
  `name` mediumtext NOT NULL,
  `link` mediumtext NOT NULL,
  `fav` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `link`, `fav`) VALUES
(7, 'Lemon Blueberry Waffles', 'http://minimalistbaker.com/lemon-blueberry-waffles-vegan-gluten-free/', 1),
(23, 'Banana & Berry Hemp Seed Pudding', 'http://minimalistbaker.com/banana-hempseed-berry-pudding/', 0),
(24, 'Vegan Snickers Cheesecake', 'http://minimalistbaker.com/vegan-snickers-cheesecake/', 1),
(25, 'Curried Beet Soup and Tandoori Chickpeas', 'http://minimalistbaker.com/curried-beet-soup-with-tandoori-chickpeas/', NULL),
(35, 'Enchilada Sauce', 'http://ohsheglows.com/2016/01/31/enchilada-sauce/', 1),
(36, 'Coconut Oil Chocolate Bark', 'http://ohsheglows.com/2015/03/18/crazy-good-coconut-oil-chocolate-bark/', 1),
(37, 'Cauliflower Vegan "Alfredo" Sauce', 'http://ohsheglows.com/2014/01/20/cauli-power-fettuccine-alfredo-vegan/', 1),
(38, 'Cilantro Lime Garlic Cashew Cream', 'http://ohsheglows.com/2016/01/31/cilantro-lime-garlic-cashew-cream/', 1),
(39, 'Brussel Sprout Fried Rice', 'http://www.theppk.com/2014/02/brussel-sprout-fried-rice/', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
