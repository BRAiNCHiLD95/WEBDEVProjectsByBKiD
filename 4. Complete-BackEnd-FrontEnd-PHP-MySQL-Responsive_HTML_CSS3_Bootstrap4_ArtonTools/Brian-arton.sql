-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2018 at 08:26 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arton`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_data`
--

DROP TABLE IF EXISTS `country_data`;
CREATE TABLE IF NOT EXISTS `country_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `cost` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `mobility` int(11) NOT NULL,
  `life` int(11) NOT NULL,
  `simplicity` int(11) NOT NULL,
  `aindex` int(11) NOT NULL,
  `country_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_data`
--

INSERT INTO `country_data` (`id`, `name`, `cost`, `speed`, `mobility`, `life`, `simplicity`, `aindex`, `country_img`) VALUES
(4, 'Dominica', 19, 20, 11, 6, 20, 76, 'Dominica_flag.png'),
(5, 'Hungary', 27, 8, 20, 8, 13, 76, 'Hungary_flag.png'),
(6, 'Bulgaria', 24, 9, 19, 7, 16, 75, 'Bulgaria_flag.png'),
(7, 'Antigua & Barbuda', 18, 20, 14, 7, 16, 75, 'Antigua & Barbuda_flag.png'),
(8, 'Grenada', 17, 20, 12, 6, 20, 75, 'Grenada_flag.png'),
(9, 'Cyprus', 8, 20, 19, 9, 17, 73, 'Cyprus_flag.png'),
(10, 'Saint Lucia', 13, 20, 11, 4, 20, 68, 'Saint Lucia_flag.png'),
(11, 'Quebec, Canada', 24, 4, 20, 10, 10, 68, 'Quebec, Canada_flag.png'),
(12, 'Montenegro', 12, 20, 11, 7, 17, 67, 'Montenegro_flag.png'),
(13, 'St. Kitts & Nevis', 14, 12, 12, 6, 20, 66, 'St. Kitts & Nevis_flag.png'),
(14, 'USA', 12, 5, 20, 9, 10, 56, 'USA_flag.png'),
(15, 'United Kingdom', 8, 7, 20, 10, 10, 55, 'United Kingdom_flag.png'),
(16, 'Portugal', 13, 9, 20, 8, 3, 53, 'Portugal_flag.png');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `currency` text NOT NULL,
  `net_worth` float NOT NULL,
  `contrib_amt` float NOT NULL,
  `assets` text NOT NULL,
  `invest_guarantee` text NOT NULL,
  `financing` text NOT NULL,
  `govt_fees` float NOT NULL,
  `tt_residence` text NOT NULL,
  `interview` text NOT NULL,
  `physical_residence` text NOT NULL,
  `tt_citizenship` text NOT NULL,
  `visa_free` int(11) NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `country`, `type`, `currency`, `net_worth`, `contrib_amt`, `assets`, `invest_guarantee`, `financing`, `govt_fees`, `tt_residence`, `interview`, `physical_residence`, `tt_citizenship`, `visa_free`) VALUES
(2, '7', 'Donation', 'USD', 0, 200000, 'Donation', 'No', 'No', 117900, 'None', 'No', 'No', '3-4 months', 126),
(3, '7', 'Real Estate', 'USD', 0, 400000, 'Real Estate', 'No', 'No', 167900, 'None', 'No', 'No', '3-4 months', 126),
(4, '6', ' ', 'EUR', 1000000, 511292, 'Bond', 'Yes', 'Yes', 0, '6-12 months', 'No', 'Exempted', '6 years', 143),
(5, '6', 'Fast Track', 'EUR', 2000000, 1022580, 'Bond', 'Yes', 'Yes', 0, '6-12 months', 'No', 'Exempted', '2 years', 143),
(6, '9', ' ', 'EUR', 0, 2500000, 'Deposit', 'No', 'No', 14800, 'None', 'No', 'No', '3 months', 147),
(7, '4', 'Donation', 'USD', 0, 200000, 'Donation', 'No', 'No', 21115, 'None', 'No', 'No', '9-12 months', 114),
(8, '4', 'Real Estate', 'USD', 0, 200000, 'Real Estate', 'No', 'No', 96115, 'None', 'No', 'No', '9-12 months', 114),
(9, '8', 'Donation', 'USD', 0, 202300, 'Donation', 'No', 'No', 21012, 'None', 'No', 'No', '3-4 months', 118),
(10, '8', 'Real Estate', 'USD', 0, 354025, 'Real Estate', 'No', 'No', 8903, 'None', 'No', 'No', '3-4 months', 118),
(11, '5', ' ', 'EUR', 0, 300000, 'Bond', 'Yes', 'no', 0, '3-6 months', 'No', 'Exempted', '8 years', 151),
(12, '16', 'Real Estate', 'EUR', 0, 350000, 'Real Estate', 'Yes', 'No', 22256, '3-6 months', 'No', '2 w/2 years', '7 years', 156),
(13, '11', ' ', 'CAD', 1600000, 800000, 'Bond', 'Yes', 'Yes', 0, '36 months', 'Yes', '3/4 years', '6 years', 155),
(14, '10', 'Donation', 'USD', 0, 190000, 'Donation', 'No', 'No', 17500, 'None', 'No', 'No', '3-4 months', 120),
(15, '10', 'Real Estate', 'USD', 0, 300000, 'Real Estate', 'No', 'No', 152500, 'None', 'No', 'No', '3-4 months', 120),
(16, '13', 'Donation', 'USD', 0, 300000, 'Donation', 'No', 'No', 12565, 'None', 'No', 'No', '4-6 months', 125),
(17, '13', 'Real Estate', 'USD', 0, 400000, 'Real Estate', 'No', 'No', 137565, 'None', 'No', 'No', '4-6 months', 125),
(18, '15', ' ', 'GBP', 4000000, 1000000, 'Bond', 'Yes', 'No', 0, '4-6 months', 'No', '9 m/year', '6.5 years', 157),
(19, '14', ' ', 'USD', 0, 500000, 'Project', 'No', 'No', 61885, '12-18 months', 'No', '3/5 years', '8 years', 157);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fname`, `lname`, `email`, `pwd`) VALUES
(6, 'BkiD', 'Brian Sam', 'Thomas', 'thebrainchild95@gmail.com', 'YnJpYW4xMjM='),
(9, 'admin', 'admin', 'user', 'admin@arton.com', 'YWRtaW4=');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
