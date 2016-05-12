-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 03:09 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `djoseph`
--

-- --------------------------------------------------------

--
-- Table structure for table `projUsers`
--

CREATE TABLE IF NOT EXISTS `projUsers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `projUsers`
--

INSERT INTO `projUsers` (`ID`, `User`, `Password`) VALUES
(1, 'deejay', 'relaxvsnl'),
(2, 'rjay', 'relaxvsnl'),
(3, 'rayban', 'jealous'),
(4, 'rayjean', '$2y$10$HuWhMUti9LCw.bLg4kXfueOYQruhBmtn63Xxp3a/VZOT.wKsWAJ6q'),
(5, 'dravid', '$2y$10$GFi1wZghfjo/Mi4eo3Ceh.4ggTAb.5ZKK/9wSy/0eWT0cTVLomdDO'),
(6, 'mike', 'mike'),
(7, 'dravidj', 'dravidj'),
(8, 'awang', 'hi'),
(9, 'red', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
