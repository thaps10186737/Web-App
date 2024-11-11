-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 29, 2024 at 10:14 AM
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
-- Table structure for table `all_colognes_tbl`
--

DROP TABLE IF EXISTS `all_colognes_tbl`;
CREATE TABLE IF NOT EXISTS `all_colognes_tbl` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `item_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` int(5) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `all_colognes_tbl`
--

INSERT INTO `all_colognes_tbl` (`item_id`, `item_img`, `item_name`, `cost`) VALUES
(1, 'all_img/Charuto.jpeg', 'Charuto', 499),
(2, 'all_img/Hugo boss.jpg', 'Hugo Boss', 650),
(3, 'all_img/Bleu de Chanel.webp', 'Bleu de Chanel For Men', 700),
(4, 'all_img/Jean Paul Gaultier.jpeg', 'Jean Paul Gaultier Men Fragrance', 670),
(5, 'all_img/emporiamen.jpg', 'Emporiamen Men Fragrance', 750),
(6, 'all_img/fashionBean.jpg', 'Polo Fashion Bean For Men', 780),
(7, 'all_img/sauvage.png', 'Sauvage Fragrance For Men', 850),
(8, 'all_img/Tom Ford.jpg', 'Tom Ford Fragrance For Men', 720),
(9, 'all_img/Mr.Burbery.jpg', 'Mr Burbery Fragrance For Men', 650),
(10, 'all_img/Noir Epices.webp', 'Noir Epice Fragrance', 750),
(11, 'all_img/Barrakat.webp', 'Barrakat Oud De Perfum', 500),
(12, 'all_img/icon.webp', 'Icon Men Fragrance', 850),
(13, 'all_img/black opium.png', 'Black Opium Female Fragrance', 500),
(14, 'all_img/chanel.jpg', 'Chanel Women Fragrance', 750),
(15, 'all_img/empire.jpeg', 'Empire Fragrance For Women', 620),
(16, 'all_img/flowerbomb.jpg', 'Flowerbomb Women Fragrance', 670),
(17, 'all_img/jimmy choo.webp', 'Jimmy Choo Women Fragrance', 700),
(18, 'all_img/miss dior.jpg', 'Miss Dior Fragrance For Women', 800),
(19, 'all_img/my way.jpg', 'My Way Women Fragrance', 650),
(20, 'all_img/valentino.jpg', 'Valentino Women Fragrance', 830),
(21, 'all_img/versace.jpeg', 'Versace For Women Fragrance', 740),
(22, 'all_img/yara lataffa.jpg', 'Yara Lataffa', 650),
(23, 'all_img/Low White -30ml.jpg', 'Low White -30ml', 150),
(24, 'all_img/Luxe edition.jpeg', 'Luxe edition -30ml', 180),
(25, 'all_img/IMG-20240519-WA0007.jpg', 'White Oud Classic', 150),
(26, 'img/IMG-20240519-WA0011.jpg', 'Dezire Red Fragrance For Men', 170),
(27, 'img/Flawless 30ml.jpg', 'Flawless -30ml', 160),
(28, 'img/lattafa la collection1.jpeg', 'Lattafa la Collection Men Fragrance', 200),
(29, 'img/Berry-Berry-Eeu-De-Parfum-60ml.jpg\r\n', 'Berry-Berry_Eeu-De-Perfum-60ml', 150),
(30, 'img/lattafa ana abiyedh 30ml.jpeg', 'Lattafa ana Abiyedh -30ml', 180);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
