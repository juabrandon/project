-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 09:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestlist`
--

CREATE TABLE `guestlist` (
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `city_state` varchar(255) DEFAULT NULL,
  `date_visited` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `short_message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guestlist`
--

INSERT INTO `guestlist` (`first_name`, `last_name`, `city_state`, `date_visited`, `short_message`) VALUES
('Justin', 'Brandon', 'Shreveport, LA', '2019-05-12 23:17:30', 'Test message'),
('Bill', 'Gates', 'Redmon, Washinton', '2019-05-12 23:31:44', 'Microsoft is everywhere. Who needs Linux?'),
('Boba', 'Fett', 'Kamino', '2019-05-13 15:37:52', 'Searching For Luke Skywalker. Reward offered.'),
('Han', 'Solo', 'Nomad', '2019-05-13 16:32:46', 'Greedo shot first!'),
('Luke', 'Skywalker', 'Everywhere', '2019-05-13 16:37:03', 'Boba is not looking for me.'),
('Yoda', '', 'Everywhere', '2019-05-13 21:16:41', 'Here, I am.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
