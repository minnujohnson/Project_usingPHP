-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 12:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `passport`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `accnt_no` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `bal` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`aid`, `accnt_no`, `pin`, `bal`) VALUES
(1, '11223344', 1234, 43200);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adrs` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `natn` varchar(100) NOT NULL,
  `pin` int(11) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `payment` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `app_id`, `name`, `gen`, `dob`, `email`, `adrs`, `aadhar`, `natn`, `pin`, `mob`, `username`, `password`, `photo`, `type`, `status`, `payment`) VALUES
(1, '2017/123456/001', 'aswin krishna', 'male', '07/09/1994', 'aswin.krishn@gmail.com', 'sreevilla', '112233', 'indian', 673611, '9747675764', 'aswin.krishn@gmail.com', '123', 'aa.jpg', 'tatkal', 'verified', '3600');

-- --------------------------------------------------------

--
-- Table structure for table `fiq`
--

CREATE TABLE IF NOT EXISTS `fiq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL,
  `qstn` varchar(1000) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fiq`
--

INSERT INTO `fiq` (`id`, `uid`, `qstn`, `reply`) VALUES
(1, '2017/123456/001', 'how can i change type ??', 'fqepifqjekfqphiegfbqofqef'),
(2, '2017/123456/001', 'fqfqefqfef', 'dsfsgwgwwgwwg'),
(3, '2017/123456/001', 'haiiii\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uid`, `uname`, `pass`, `type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, '2017/123456/001', 'aswin.krishn@gmail.com', '123', 'user'),
(3, 'police', 'police', 'police', 'police'),
(4, '2017/123456/002', 'aswin.krishn@gmail.com', '12345', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
