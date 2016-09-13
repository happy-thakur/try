-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 09:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`s_no`, `user_name`, `subject_name`, `class`) VALUES
(1, 'Shivani Agarwal', 'Digital Logic Design', 'cs-3'),
(2, 'Shivani Agarwal', 'Digital Logic Design', 'cs-1'),
(3, 'Shivani Agarwal', 'Soft Computing', 'cs-2'),
(4, 'Shivani Agarwal', 'Soft Computing', 'IT-1'),
(5, 'Deepali Aggarwal', 'Soft Computing', '2cs'),
(6, 'Deepali Aggarwal', 'Data Structures Using C', 'cs-3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `user_name`, `password`) VALUES
(1, 'Shivani Agarwal', 'ashivani'),
(2, 'Priya Ranjan Kumar', 'kpriya'),
(3, 'Deepali Aggarwal', 'adeepali'),
(4, 'Amit Kumar', 'kamit'),
(5, 'Shomini Parashar', 'pshomini'),
(6, ' KVVNS Sundari Kameshwari', 'ksundari');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
