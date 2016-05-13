-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 03:08 PM
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
-- Table structure for table `projData`
--

CREATE TABLE IF NOT EXISTS `projData` (
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Task` text NOT NULL,
  `Priority` int(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projData`
--

INSERT INTO `projData` (`username`, `title`, `Task`, `Priority`, `Date`) VALUES
('mike', 'test1', 'hi', 1, '2016-05-11'),
('mike', 'test3', 'aye', 1, '2016-05-20'),
('mike', 'test3', 'heyyy', 1, '2016-05-20'),
('mike', 'test5', 'hi', 1, '2016-05-20'),
('mike', 'test5', 'hello', 1, '2016-05-13'),
('mike', 'test5', 'bye', 1, '2016-05-06'),
('mike', 'test5', 'good', 1, '2016-05-07'),
('mike', 'test5', 'nice', 1, '2016-05-17'),
('red', 't1', '2', 1, '2016-05-02'),
('red', 't1', '3', 1, '2016-05-11'),
('mike', 'test7', 'a', 1, '2016-05-27'),
('mike', 'test7', 's', 4, '2016-05-28'),
('mike', 'test7', 'd', 3, '2016-05-06'),
('mike', 'test7', 'f', 5, '2016-05-17'),
('awang', 'testtest', 'michaelsucks', 1, '2016-05-26'),
('awang', 'testtest', 'michaelsucks', 1, '2016-05-04'),
('awang', 'test15', 'hellothere', 1, '2016-05-06'),
('awang', 'test20', 'michaelsucks', 1, '2016-05-12'),
('awang', 'test21', 'nice', 1, '2016-05-06'),
('awang', 'test21', 'happy', 1, '2016-05-13'),
('awang', 'test21', '', 0, '0000-00-00'),
('awang', 'test22', 'hello', 5, '2016-05-07'),
('awang', 'test22', 'whatsup', 5, '2016-05-31'),
('awang', 'finaltest', 'please for', 1, '2016-05-27'),
('awang', 'finaltest', 'the love', 1, '2016-05-12'),
('awang', 'finaltest', 'of god', 1, '2016-05-12'),
('awang', 'finaltest2', 'why', 4, '2016-05-20'),
('awang', 'finaltest2', 'me', 4, '2016-05-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
