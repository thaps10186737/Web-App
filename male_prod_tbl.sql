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
-- Table structure for table `male_prod_tbl`
--

DROP TABLE IF EXISTS `male_prod_tbl`;
CREATE TABLE IF NOT EXISTS `male_prod_tbl` (
  `male_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `perfume_name` varchar(50) NOT NULL,
  `cost` int(5) NOT NULL,
  PRIMARY KEY (`male_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `male_prod_tbl`
--

INSERT INTO `male_prod_tbl` (`male_item_id`, `prod_img`, `perfume_name`, `cost`) VALUES
(1, 'img_men/Charuto.jpeg', 'Charuto Tobacco Vanille', 499),
(2, 'img_men/Hugo boss.jpg', 'Hugo Boss For Men', 650),
(3, 'img_men/Bleu de Chanel.webp', 'Bleu de Chanel For Men', 700),
(4, 'img_men/Jean Paul Gaultier.jpeg', 'Jean Paul Gaultier Men Fragrance', 670),
(5, 'img_men/emporiamen.jpg', 'Emporiamen Men Fragrance', 750),
(6, 'img_men/fashionBean.jpg', 'Polo Fashion Bean For Men', 780),
(7, 'img_men/sauvage.png', 'Sauvage Fragrance For Men', 850),
(8, 'img_men/Tom Ford.jpg', 'Tom Ford Fragrance For Men', 720),
(9, 'img_men/Mr.Burbery.jpg', 'Mr Burbery Fragrance For Men', 650),
(10, 'img_men/Noir Epices.webp', 'Noir Epice Fragrance', 750),
(11, 'img_men/Barrakat.webp', 'Barrakat Oud De Perfum', 500),
(12, 'img_men/icon.webp', 'Icon Men Fragrance', 850);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
