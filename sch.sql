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
-- Database: `sch`
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
(1, 'BHAVANA SHARMA', 'W16DCO1517', 'GJ4850', 'COMPUTER', '8670234557', 'gloriousbhavanasharma@gmail.com', 'Aligarh', 'GJ4850'),
(2, 'SANDHYA SINGH', 'W16DCO1516', 'GJ4849', 'COMPUTER', '8670234556', 'sandhya@gmail.com', 'ALIGARH', 'GJ4849'),
(3, 'MUNIRA SULTAN', 'W16DCO1518', 'GJ2501', 'COMPUTER', '9359503028', 'munirasultan812@gamil.com', 'ALIGARH', 'GJ2501'),
(4, 'YATI GUPTA', 'W16DCO1519', 'GJ4851', 'COMPUTER', '9876654535', 'yati@gamil.com', 'ALIGARH', 'GJ4851'),
(6, 'SAMYUKTA VARSHNEY', 'W16DIT1580', 'GJ4888', 'IT', '8057324374', 'xyz@gmail.com', 'jsghuigs', 'samyukta'),
(7, 'AVANTIKA DIXIT', 'W16DCO1513', 'GJ4844', 'CS', '4567893456', 'ABC@GMAIL.COM', 'LFORWJ', 'GJ4844'),
(10, 'RENU', 'W16DCO1514', 'GJ4845', 'CS', '1233455345', 'renu@gmail.com', 'noida', 'GJ4845'),
(11, 'KANIKA', 'W16DCO1515', 'GJ4848', 'CS', '2334566345', 'kanika@gmail.com', 'delhi', 'GJ4848'),
(12, 'HUMA', 'W16DCO1529', 'GJ4866', 'CS', '2345678913', 'huma@gmail.com', 'delhi', 'GJ4866'),
(13, 'HIMANSHI', 'W16DCO1538', 'GJ8202', 'CS', '1234567898', 'himanshi@gmail.com', 'DELHI', 'himanshi'),
(14, 'HH', 'W16DCO1533', 'GJ2992', 'CS', '9876543212', 'aaa@gmail.com', 'noida', 'samyukta'),
(15, '', '', '', '', '1111111111', 'a@gmail.com', '', 'Aaaaaaaa'),
(17, 'a', ' a', ' a', 'a', '2222222222', 'b@gmail.com', 's', 'wddeded'),
(18, 'Arp', '11d', ' R', 'FER', '9969696999', 'STV@G.VC', 'AAA', 'AAAAAAAA'),
(19, 'Mukul', ' mu', ' mu', 'mu', '7878787878', 'mu@gmail.com', 'mu', 'mmmmmmmm'),
(23, 'ami', ' ami', ' ami', 'ami', '4567456745', 'ami@gmail.com', 'ami', 'amiamiam'),
(24, 'Zab', ' zab', ' zab', 'zab', '3456734567', 'zab@gmail.com', 'zab', 'zabzabza'),
(25, 'zoe', 'aaaaaaa', 'aaaaei iurtnu', 'hbtrgb iubtr iu', '1010101010', 'a@gn.c', 'nfin', '11111111'),
(26, 'Samyy', ' WRS', ' Xyz', 'Abs', '2345678912', 'samyy@gmail.com', 'wer', 'sammsamm'),
(27, 'test', 'qwerty, wetey,tfevt', ' SPEAKING, DANCING', 'READING', '9292929292', 'test@gmail.com', 'Aligarh, UP', 'AAAAAAAA');

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
  MODIFY `stid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
