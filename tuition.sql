-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2015 at 08:08 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `edu` varchar(100) NOT NULL,
  `latitude` double NOT NULL COMMENT 'address latitude',
  `longitude` double NOT NULL COMMENT 'address longitude',
  `description` text NOT NULL,
  `admitcard` varchar(100) NOT NULL,
  `check` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `photo`, `name`, `area`, `medium`, `class`, `email`, `gender`, `mobile`, `address`, `edu`, `latitude`, `longitude`, `description`, `admitcard`, `check`) VALUES
(26, 'io.jpg', 'alex    ', 'dhanmondi    ', 'English', '6,7,8', 'alex@gmail.com', 'male', '01916900511', '12/A,Dhaka', 'Bsc in math', 23.7464653, 90.3760125, 'vhbnmb', 'eee.jpg', 1),
(25, 'dd.jpg', 'bob', 'dhanmondi', 'English', 'All', 'bob@gmail.com', 'male', '01678954378', '12/A,Dhaka', 'Bsc in cse', 23.7464653, 90.3760125, 'gghhmjh', 'eee.jpg', 1),
(27, 'dds.jpg', 'bipasha   ', 'bashabo   ', 'English', 'All', 'bipasha@gmail.com', 'male', '01916900511', '12/A,Dhaka', 'Bsc in math', 23.7425676, 90.4322836, 'dsdd', 'jjj.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarea` varchar(100) NOT NULL,
  `tsub` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `tschedule` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `tarea`, `tsub`, `gender`, `no`, `tschedule`, `salary`, `address`, `email`, `mobile`, `date`, `description`) VALUES
(2, 'Rampura', 'Math', 'Male', '2', 'Evening', 'Negotiable', '12/6,rampura,Dhaka', 'bb@gmail.com', '013456789', '2015-05-07', 'I want to a muslim math teacher for class 8 students.'),
(3, 'Shantibag', 'All', 'Female', '1', 'Afternoon', '5000', '23/87,Shantibag,dhaka', 'ahsan.shaan@yahoo.com', '015568999776', '2015-05-07', 'I want to a female teacher for class 6 student.'),
(4, 'Bashabo', 'English', 'Male', '1', 'Evening', 'Negotiable', '12/6,bashabo,Dhaka', 'bbgh@gmail.com', '015568999776', '2015-05-09', 'I want to a english teacher for class 9 student.'),
(5, 'bashabo', 'math', 'male', '1', 'morning', 'negotiable', '12/A,Dhaka', 'ahsan.shaan@yahoo.com', '01678954378', '2015-02-06', 'fghghghmhm');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `pass`, `address`, `type`) VALUES
(19, 'saeed', 'saeed@gmail.com', '123', '12/A,Dhaka', 'user'),
(18, 'jon', 'jon@gmail.com', '123', '15/B,Dhaka', 'user'),
(17, 'Bob', 'bob@gmail.com', '123', '15/A,Dhaka', 'user'),
(16, 'alex', 'alex@gmail.com', '123', '12/A,Dhaka', 'user'),
(20, 'bipasha', 'bipasha@gmail.com', '123', 'ramna', 'user');
