-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2023 at 04:16 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE IF NOT EXISTS `tbl_course` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(30) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `coursename`) VALUES
(1, 'BA'),
(2, 'BSC'),
(3, 'BE'),
(4, 'Bcom'),
(5, 'Mcom'),
(6, 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_bavi`
--

DROP TABLE IF EXISTS `tbl_student_bavi`;
CREATE TABLE IF NOT EXISTS `tbl_student_bavi` (
  `studid` int(11) NOT NULL AUTO_INCREMENT,
  `studname` varchar(50) NOT NULL,
  `studdob` date NOT NULL,
  `studgender` varchar(10) NOT NULL,
  `studmobile` varchar(15) NOT NULL,
  `studemail` varchar(50) NOT NULL,
  `studcourseid` varchar(11) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_bavi`
--

INSERT INTO `tbl_student_bavi` (`studid`, `studname`, `studdob`, `studgender`, `studmobile`, `studemail`, `studcourseid`) VALUES
(22, 'Bala', '2023-02-11', 'Male', '7904784307', 'bavi@gmail.com', '1'),
(21, 'Rahul', '2023-01-05', 'Male', '7904784607', 'rahul@gmail.com', '1'),
(14, 'Bavi', '2023-01-07', 'Male', '8760833056', 'bavismart@gmail.com', '1'),
(53, 'Ram', '2023-02-16', 'Male', '7904784107', 'gdfg@gmail.com', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
