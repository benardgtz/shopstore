-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2023 at 09:52 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `kiwango`
--

DROP TABLE IF EXISTS `kiwango`;
CREATE TABLE IF NOT EXISTS `kiwango` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pi` varchar(20) NOT NULL,
  `qty` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kiwango_ibfk_1` (`pi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kiwango`
--

INSERT INTO `kiwango` (`id`, `pi`, `qty`) VALUES
(1, 'N200', -101),
(4, 'PH09897', 7),
(5, 'N300', -29),
(6, 'N100', -16),
(7, 'T200', 4),
(8, 'N900', 45);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` varchar(20) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `price`, `status`, `time`) VALUES
('N100', 'NOKIA', '30000.00', 'dispatch', '2023-08-23 07:04:59'),
('N200', 'NOKIA', '20000.00', 'loaded', '2023-08-23 05:49:32'),
('N300', 'NOKIA', '350000.00', '', '2023-08-23 06:24:03'),
('N900', 'NOKIA', '54000.00', 'loaded', '2023-08-23 06:50:52'),
('PH09897', 'Iphone x Pro', '450000.00', '', '2023-08-29 02:33:01'),
('T200', 'TECNO', '35000.00', 'loaded', '2023-08-23 06:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

DROP TABLE IF EXISTS `production`;
CREATE TABLE IF NOT EXISTS `production` (
  `pi` varchar(20) NOT NULL,
  `pnamee` varchar(20) NOT NULL,
  `pricee` varchar(10) NOT NULL,
  `statuss` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`pi`, `pnamee`, `pricee`, `statuss`, `created_at`) VALUES
('N200', 'NOKIA', '20000', 'loaded', '2023-08-28 09:10:07'),
('N2000', 'NOKIA', '20000', 'loaded', '2023-08-28 09:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `pid`, `amount`, `created_at`) VALUES
(6, 'PH09897', 900000, '2023-08-28 22:47:28'),
(5, 'N200', 20000, '2023-08-28 22:45:42'),
(4, 'N200', 60000, '2023-08-28 20:47:51'),
(7, 'PH09897', 450000, '2023-08-28 22:47:56'),
(8, 'T200', 350000, '2023-08-22 23:36:50'),
(9, 'N200', 1040000, '2023-08-29 03:01:43'),
(10, 'N200', 1120000, '2023-08-29 03:02:57'),
(11, 'N100', 780000, '2023-08-29 03:18:55'),
(12, 'T200', 105000, '2023-08-29 03:58:41'),
(13, 'N300', 12950000, '2023-08-29 03:58:58'),
(14, 'PH09897', 450000, '2023-08-29 04:02:48'),
(15, 'T200', 140000, '2023-08-29 04:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` int(2) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `level`) VALUES
('benardgodfrey59@gmail.com', 'ben5991', 0),
('', '', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kiwango`
--
ALTER TABLE `kiwango`
  ADD CONSTRAINT `kiwango_ibfk_1` FOREIGN KEY (`pi`) REFERENCES `product` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
