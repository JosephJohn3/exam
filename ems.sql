-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2016 at 04:55 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(30) NOT NULL,
  `issue` text NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`comp_id`, `reg_no`, `date`, `title`, `issue`) VALUES
(1, 'BBT595-0222/2013', '2016-04-11', 'Retake', 'Lorem ipsum dolor sit amet, co'),
(2, 'CIT54-900/2012', '2016-04-11', 'Sit in Cat', 'Lorem ipsum dolor sit amet, co'),
(11, 'dfgfdg', '2016-04-15', 'heloo', 'd do eiusmod tempor incididunt'),
(12, '80823084', '2016-04-15', 'Failled exam', 'Can i have a resit cat?');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `telephone`, `email`, `title`, `message`) VALUES
(1, '325525636', 'james@must.ac.ke', 'join probellm', 'hey joining is pretty hard'),
(2, '237856823', 'shan@doc.im', 'sick ', 'hi you know am sick and i want');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(1, 'programming'),
(2, 'computer science'),
(4, 'business information technolog'),
(6, 'Forensic Science');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(30) NOT NULL,
  `subcode` varchar(30) NOT NULL,
  `subname` varchar(30) NOT NULL,
  `scored` double NOT NULL,
  `grade` varchar(30) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `reg_no`, `subcode`, `subname`, `scored`, `grade`) VALUES
(5, 'student', 'CIT 503', 'programming', 75, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `staff_no` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `staff_no`, `type`, `telephone`, `email`, `password`) VALUES
(1, 'matthew', 'mucheru', 'lecturer', 'lecturer', '235235', 'dan@nod.vi', 'maingi'),
(2, 'dolly', 'patron', 'admin', 'admin', '1223456789', 'danns@must.ac.ke', 'danny');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `reg_no` varchar(30) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `reg_no`, `telephone`, `email`, `course`, `password`) VALUES
(1, 'james', 'Maingi', 'student', '+1223456789', 'cool@gmail.com', 'food science', 'maingi');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcode` varchar(30) NOT NULL,
  `subname` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subcode`, `subname`, `course`) VALUES
(1, 'CIT 503', 'programming', 'computer sciece'),
(2, 'COC 234', 'programming', 'computer science'),
(5, 'dgfdgfd', 'business', 'ladona'),
(6, 'ertg345', 'fgfedvdftrev reter', 'Forensic science'),
(7, 'BON123', 'botany', 'Agriculture'),
(8, 'frin13', 'actuary', 'Acturial science'),
(10, 'dgfdgfd', 'business', 'Agriculture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
