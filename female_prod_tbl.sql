-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 30, 2024 at 12:02 PM
-- Server version: 8.0.18
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
-- Database: `perfume_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `female_prod_tbl`
--

DROP TABLE IF EXISTS `female_prod_tbl`;
CREATE TABLE IF NOT EXISTS `female_prod_tbl` (
  `female_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_img` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int(5) NOT NULL,
  PRIMARY KEY (`female_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `female_prod_tbl`
--

INSERT INTO `female_prod_tbl` (`female_item_id`, `prod_img`, `name`, `cost`) VALUES
(1, 'img_women/black opium.png', 'Black Opium Female Fragrance', 500),
(2, 'img_women/chanel.jpg', 'Chanel Women Fragrance', 750),
(3, 'img_women/empire.jpeg', 'Empire Fragrance For Women', 620),
(4, 'img_women/flowerbomb.jpg', 'Flowerbomb Women Fragrance ', 670),
(5, 'img_women/jimmy choo.webp', 'Jimmy Choo Women Fragrance', 700),
(6, 'img_women/miss dior.jpg', 'Miss Dior Fragrance For Women', 800),
(7, 'img_women/my way.jpg', 'My Way Women Fragrance', 650),
(8, 'img_women/valentino.jpg', 'Valentino Women Fragrance', 830),
(9, 'img_women/versace.jpeg', 'Versace For Women Fragrance', 740),
(10, 'img_women/yara lataffa.jpg', 'Yara Lataffa', 650);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
