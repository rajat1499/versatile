-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2020 at 08:29 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Phone`, `Email`, `Message`) VALUES
('Rajat Soni', '9411448399', 'rajatverma1498@gmail.com', 'I want to join.'),
('Nitin', '7526098940', 'nitinverma@gmail.com', 'We can check free trail??'),
('Prabhakar mishra', '9760800504', 'pd1499@gmail.com', 'We can payment with debit card??'),
('Ankit soni', '123654789', 'ankitsoni@gmail.com', 'How to get online course????'),
('rishabh soni', '4569871', 'rishabhsoni@gamil.com', 'Is there any course of node.js'),
('Rajat Soni', '9411448399', 'rajatverma1498@gmail.com', 'HIii hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmPassword` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `collegeName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `email`, `password`, `confirmPassword`, `phone`, `city`, `collegeName`) VALUES
(1, 'Rajat Soni', 'rajatverma1498@gmail.com', 'rajat', 'rajat', '9411448399', 'BULANDSHAHR', 'LPU U'),
(2, 'Nitin verma', 'pd1499@gmail.com', 'admin', 'admin', '9411448399', 'BULANDSHAHR', 'vfrty'),
(3, 'Rajat Soni', 'rajatverma1498@gmail.com', 'rajat', 'rajat', '9411448399', 'BULANDSHAHR', 'abcde'),
(4, 'nitin', 'nitinverma@gmail.com', 'nitin', 'nitin', '9760800504', 'Bulandshahr', 'sdfgh'),
(6, 'Rajat Soni', 'rajatsoni1499@gmail.com', 'rajat', 'raj', '9411448399', 'BULANDSHAHR', 'LPU'),
(7, 'Rishabh soni', 'rishabhsoni3508@gmail.com', 'rishabh', 'rishabh', '6397563438', 'BSR', 'vsvm'),
(8, 'Raj', 'rajatsoni1499@gmail.com', 'Rajat@123', 'Rajat@123', '1234567891', 'JAlandhar', 'LPU'),
(9, 'Pintu', 'pintu123@gmail.com', 'pintu', 'pintu', '9760800504', 'goa', 'Lpu'),
(10, 'sourabh', 'sourabh123@gmail.com', 'sourabh@123', 'sourabh@123', '7526098940', 'Chhattisgarh', 'LPU');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
