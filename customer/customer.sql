-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 04:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `Id` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `cPerson` varchar(50) NOT NULL,
  `cNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`Id`, `Name`, `cPerson`, `cNumber`, `Email`) VALUES
('1478926362', 'retghjh', 'tyjjukyk', '443567', 'ertyutiug'),
('1478927255', 'errtyty', 'errtfgh', '243546576', 'rerttyy'),
('1478926352', 'scdxbf', 'efddgd', '324567', 'dfghjmh');

-- --------------------------------------------------------

--
-- Table structure for table `tempdelete`
--

CREATE TABLE `tempdelete` (
  `Id` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `cPerson` varchar(50) NOT NULL,
  `cNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `tDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempdelete`
--

INSERT INTO `tempdelete` (`Id`, `Name`, `cPerson`, `cNumber`, `Email`, `tDate`) VALUES
('1478879426', 'Hnin Hnin', 'yu yu Ag', '098765424', 'Email', '2016-11-11'),
('1478926264', 'ssd', 'er', '323444', 'rt45t5y4', '2016-11-12'),
('1478927329', 'drftyyuuy', 'sdfghj', '132345678', 'dsdffghj', '2016-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tempedit`
--

CREATE TABLE `tempedit` (
  `Id` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `cPerson` varchar(50) NOT NULL,
  `cNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `tDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempedit`
--

INSERT INTO `tempedit` (`Id`, `Name`, `cPerson`, `cNumber`, `Email`, `tDate`) VALUES
('1478879065', 'yu yu hlaing', 'su su ', '093333222', 'Email', '2016-11-11'),
('1478879323', 'Ag Ag', 'Aye Aye', '094436423234', 'Email', '2016-11-11'),
('1478879426', 'Hnin Hnin', 'yu yu', '098765424', 'Email', '2016-11-11'),
('1478879065', 'yu yu hlaing', 'su su Ag', '093333222', 'yuyuhlaing@gmail.com', '2016-11-12'),
('1478879263', 'su su ', 'yu yu', '0924344646', 'susuhlaing@gmail.com', '2016-11-12'),
('1478923176', 'sdfgh', 'sdfg', '234567', 'wertyu@gmail.com', '2016-11-12'),
('1478923176', 'sdfgh', 'sdfg', '234567', 'wertyu@gmail.com', '2016-11-12'),
('1478923176', 'sdfgh', 'sdfgeret', '234567', 'wertyu@gmail.com', '2016-11-12'),
('1478926362', 'retghjh', 'tyjjukyk', '443567', 'ertyutiug', '2016-11-12'),
('1478927329', 'drftyyuuy', 'sdfghj', '132345678', 'dsdffghj', '2016-11-12'),
('1478927255', 'errty', 'errtfgh', '243546576', 'rerttyy', '2016-11-12'),
('1478926352', 'scdxbf', 'efddgd', '324567', 'dfghjmh', '2016-11-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
