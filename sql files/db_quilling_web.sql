-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2023 at 03:27 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quilling_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_projects`
--

DROP TABLE IF EXISTS `tb_projects`;
CREATE TABLE IF NOT EXISTS `tb_projects` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(100) NOT NULL,
  `p_dscrptn` longtext NOT NULL,
  `p_image` longtext NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_projects`
--

INSERT INTO `tb_projects` (`p_id`, `p_title`, `p_dscrptn`, `p_image`) VALUES
(1, 'Flower Wall Art', 'This is a Wall Art that created with paper quilling flowers and designs.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2Fhome-decoration-quilling-artpaper-quilling-wall-art-unframed-etsy-uk--584271751670768126%2F&psig=AOvVaw1ZxjewvAT9qkfGtlj4O0e4&ust=1691937985317000&source=images&cd=vfe&opi=89978449&ved=0CA4QjRxqFwoTCPDAh6iu14ADFQAAAAAdAAAAABAD'),
(2, 'Birds Wall Art', 'This is a Wall Art that created with paper quilling birds and designs.', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ebay.com%2Fitm%2F324323173755&psig=AOvVaw2HuTcai1_6Qhsd15U-w9dM&ust=1691938087733000&source=images&cd=vfe&opi=89978449&ved=0CA4QjRxqFwoTCPiBjduu14ADFQAAAAAdAAAAABAI'),
(3, 'Quilling Jewlerry Box', 'A small size jewlerry box using quilling shapes.', 'https://i.pinimg.com/736x/3c/1b/c6/3c1bc69bd927a818817955f1ede2debe.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
