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
-- Table structure for table `promotions_tbl`
--

DROP TABLE IF EXISTS `promotions_tbl`;
CREATE TABLE IF NOT EXISTS `promotions_tbl` (
  `promo_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_img` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int(5) NOT NULL,
  `statuses` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `promotions_tbl`
--

INSERT INTO `promotions_tbl` (`promo_id`, `prod_img`, `name`, `cost`, `statuses`) VALUES
(1, 'img/Low White -30ml.jpg', 'Low White -30ml', 150, 'no'),
(2, 'img/Luxe edition.jpeg', 'Luxe edition -30ml', 180, 'no'),
(3, 'img/IMG-20240519-WA0007.jpg', 'White Oud Classic', 150, 'no'),
(4, 'img/IMG-20240519-WA0011.jpg', 'Dezire Red Fragrance For Men', 170, 'no'),
(5, 'img/Flawless 30ml.jpg', 'Flawless -30ml', 160, ''),
(6, 'img/lattafa la collection1.jpeg', 'Lattafa la Collection Men Fragrance', 200, ''),
(7, 'img/Berry-Berry-Eeu-De-Parfum-60ml.jpg', 'Berry-Berry_Eeu-De-Perfum-60ml', 150, ''),
(8, 'img/lattafa ana abiyedh 30ml.jpeg', 'Lattafa ana Abiyedh -30ml', 180, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
