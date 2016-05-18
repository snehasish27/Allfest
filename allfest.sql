-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 05:29 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `creg`
--

CREATE TABLE `creg` (
  `orgname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `name` varchar(35) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creg`
--

INSERT INTO `creg` (`orgname`, `emailid`, `name`, `mobno`, `password`) VALUES
('NIT Durgapur', 'shivam@gmail.com', 'Snehasish', '9038294623', 'kools');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `name` varchar(30) NOT NULL,
  `orgteam` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `etype` varchar(15) NOT NULL,
  `satt` varchar(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `s_date` varchar(10) NOT NULL,
  `e_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`name`, `orgteam`, `c_name`, `url`, `etype`, `satt`, `month`, `s_date`, `e_date`) VALUES
('technoshine', 'CAD', 'NIT durgapur', 'cad.2015.technoshine.ca', 'techno-manageme', 'Coding,facepainting', 'October', '2016-09-02', '2016-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `comment` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `city`, `phno`, `comment`) VALUES
('Snehasish Das Gupta', 'kolkata', '9038294623', 'its a good website');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user registration';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creg`
--
ALTER TABLE `creg`
  ADD PRIMARY KEY (`orgname`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`phno`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`emailid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
