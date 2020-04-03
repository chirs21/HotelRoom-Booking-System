-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2020 at 08:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_management`
--
CREATE DATABASE IF NOT EXISTS `hotel_management` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel_management`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `room_no` int(11) NOT NULL,
  `room_category` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`room_no`, `room_category`, `check_in`, `check_out`, `name`, `phone`, `status`) VALUES
(101, 'Single', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(102, 'Single', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(103, 'Single', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(104, 'Single', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(105, 'Single', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(201, 'Double', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(202, 'Double', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(203, 'Double', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(204, 'Double', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(205, 'Double', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(301, 'Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(302, 'Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(303, 'Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(304, 'Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(305, 'Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(401, 'Super Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(402, 'Super Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(403, 'Super Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(404, 'Super Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE'),
(405, 'Super Deluxe', '0000-00-00', '0000-00-00', '', 0, 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE IF NOT EXISTS `room_types` (
  `room_category` varchar(20) NOT NULL,
  `room_quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  UNIQUE KEY `room_category` (`room_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`room_category`, `room_quantity`, `available`, `booked`, `price`) VALUES
('Deluxe', 5, 5, 0, 2500),
('Double', 5, 5, 0, 1500),
('Single', 5, 5, 0, 1000),
('Super Deluxe', 5, 5, 0, 3000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
