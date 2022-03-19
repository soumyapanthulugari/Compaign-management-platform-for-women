-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 07:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerstudent`
--

CREATE TABLE `registerstudent` (
  `stid` int(200) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Faculty_no` varchar(30) NOT NULL,
  `Enrollment_no` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Contact_no` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerstudent`
--

INSERT INTO `registerstudent` (`stid`, `Student_name`, `Faculty_no`, `Enrollment_no`, `Branch`, `Contact_no`, `Email`, `Address`, `Password`) VALUES
(7, 'AVANTIKA DIXIT', 'W16DCO1513', 'GJ4844', 'CS', '4567893456', 'ABC@GMAIL.COM', 'LFORWJ', 'GJ4844'),
(10, 'RENU', 'W16DCO1514', 'GJ4845', 'CS', '1233455345', 'renu@gmail.com', 'noida', 'GJ4845'),
(11, 'KANIKA', 'W16DCO1515', 'GJ4848', 'CS', '2334566345', 'kanika@gmail.com', 'delhi', 'GJ4848'),
(13, 'HIMANSHI', 'W16DCO1538', 'GJ8202', 'CS', '1234567898', 'himanshi@gmail.com', 'DELHI', 'himanshi');

-- --------------------------------------------------------

--
-- Table structure for table `sc_login`
--

CREATE TABLE `sc_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_login`
--

INSERT INTO `sc_login` (`username`, `password`, `email`) VALUES
('samyukta', 'sampass', 's@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sc_registration`
--

CREATE TABLE `sc_registration` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `experience` int(2) NOT NULL,
  `projects` text NOT NULL,
  `extracurricular` text NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerstudent`
--
ALTER TABLE `registerstudent`
  ADD PRIMARY KEY (`stid`,`Enrollment_no`,`Faculty_no`),
  ADD UNIQUE KEY `Enrollment_no` (`Enrollment_no`),
  ADD UNIQUE KEY `Faculty_no` (`Faculty_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerstudent`
--
ALTER TABLE `registerstudent`
  MODIFY `stid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
