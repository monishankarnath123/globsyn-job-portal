-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 12:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `catid` int(20) NOT NULL,
  `categoryname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`catid`, `categoryname`) VALUES
(1, 'IT JOBS');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyreq`
--

CREATE TABLE `tblcompanyreq` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `noofcandidate` varchar(100) NOT NULL,
  `minimumqualification` varchar(100) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `examdate` date NOT NULL,
  `examtime` time NOT NULL,
  `intdate` date NOT NULL,
  `inttime` time NOT NULL,
  `intplace` varchar(255) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyreq`
--

INSERT INTO `tblcompanyreq` (`id`, `catid`, `companyname`, `noofcandidate`, `minimumqualification`, `experience`, `exam`, `examdate`, `examtime`, `intdate`, `inttime`, `intplace`, `emailid`, `mobilenumber`, `address`, `photo`, `grade`) VALUES
(45, 1, 'TCS', '50', '10 10+2  graduation ', '0', 'yes', '2019-02-08', '11:00:00', '2019-03-09', '02:00:00', 'saltlake sec-V webel more ', 'tcs@gmail.com', '9856231478', 'saltlake sec-V webel more,kolkata-700159', '1547708391tata.jpg', 'A'),
(46, 1, 'COGNIZANT', '50', '10 10+2  graduation ', '0', 'no', '2019-01-01', '00:00:00', '2019-04-11', '11:35:00', 'saltlake,kolkata', 'cognigent@gmail.com', '9874563215', 'saltlake,kolkata', '1547708848cognizant-logo.png', 'B'),
(47, 1, 'DELL', '100', '10  diploma graduation ', '0', 'yes', '2019-02-18', '11:00:00', '2019-05-07', '02:05:00', 'kolkata,jodamondir', 'dell@gmail.com', '9822214521', 'kolkata,jodamondir', '15477092697.jpg', 'C'),
(48, 0, 'ICICI BANK', '20', '  diploma  master', '5', 'no', '2019-01-01', '00:00:00', '2019-05-08', '11:08:00', 'howrah maidan,near howrah station', 'icici@gmail.com', '9874563214', 'howrah maidan,near howrah station', '154770966026.jpg', 'D'),
(49, 1, 'HCL', '20', '10 10+2 diploma  ', '3', 'yes', '2019-05-07', '11:00:00', '2019-07-06', '11:00:03', 'saltlake,kolkata', 'hcl@gmail.com', '7896541235', 'saltlake,kolkata', '154771779611.jpg', 'A'),
(50, 0, 'HDFC BANK', '10', '10 10+2 diploma  ', '2', 'yes', '2019-01-30', '01:00:00', '2019-02-15', '02:00:00', 'Kolkata', 'hdfc@gmail.com', '9836536691', 'Kolkata', '154771850312.jpg', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE `tbllevel` (
  `language` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`language`, `level`, `point`) VALUES
('c', 'beginner', 7),
('c', 'intermediate', 8),
('c', 'advance', 9),
('php', 'beginner', 8),
('php', 'intermediate', 9),
('php', 'advance', 10),
('c++', 'beginner', 9),
('c++', 'intermediate', 10),
('c++', 'advance', 11),
('python', 'beginner', 10),
('python', 'intermediate', 11),
('python', 'advance', 12),
('java', 'beginner', 11),
('java', 'intermediate', 12),
('java', 'advance', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

CREATE TABLE `tblprofile` (
  `id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `Mobile` varchar(25) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `twelve` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `dgpa` float NOT NULL,
  `experience` varchar(55) NOT NULL,
  `project` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprofile`
--

INSERT INTO `tblprofile` (`id`, `dob`, `Mobile`, `ten`, `twelve`, `degree`, `dgpa`, `experience`, `project`, `Email`) VALUES
(1, '0000-00-00', '9431540054', '95', '65', 'Select', 8.5, '5', 'yes', 'singh.sanjana1998@gmail.com'),
(2, '2014-02-12', '', '95', '65', '', 8.5, '5', 'yes', ''),
(3, '2014-02-12', '', '95', '65', '', 8, '5', '', 'moni@gamil.com'),
(4, '0000-00-00', '80980', '45', '', 'Select', 0, '', 'Select', 'monishankarnath123@gmail.com'),
(5, '0000-00-00', '', '95', '64', '', 8.5, '2', '', 'hgfh@gmail.com'),
(6, '0000-00-00', '9836536695', '89', '80', 'B.TECH', 8, '2', 'YES', 'piu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`id`, `firstname`, `lastname`, `Email`, `password`) VALUES
(1, 'moni', 'nath', 'moni@gmail.com', ''),
(2, 'sanjana', 'singh', 'sanjana@gmail.com', '123'),
(7, 'subhanwita', 'saha', 'iamsubhanwita.14@gmail.com', 'piu123'),
(9, 'saswati', 'chatterjee', 'saswati@gmail.com', '6958'),
(10, 'piu', 'roy', 'piu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblresume`
--

CREATE TABLE `tblresume` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(55) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Percentage` varchar(50) NOT NULL,
  `Puagg` varchar(50) NOT NULL,
  `Beagg` float NOT NULL,
  `Cmbcourseb` varchar(50) NOT NULL,
  `cmbskill` varchar(50) NOT NULL,
  `cmbskilllevel` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresume`
--

INSERT INTO `tblresume` (`id`, `Fname`, `Lname`, `Branch`, `Percentage`, `Puagg`, `Beagg`, `Cmbcourseb`, `cmbskill`, `cmbskilllevel`, `grade`) VALUES
(1, 'moni', 'nath', '', '75', '84', 8.2, '0', 'PYTHON C++ C SELECT SELECT', '0', 'A'),
(2, 'ram', 'lakshman', 'select', '96', '90', 9.5, '1', 'PYTHON C++ C SELECT SELECT', 'ADVANCED INTERMEDIATE BEGINNER SELECT SELECT', 'A'),
(3, 'pratk', 'chat', 'select', '85', '95', 8.5, 'Select', 'C C++ SELECT SELECT SELECT', 'INTERMEDIATE INTERMEDIATE SELECT SELECT SELECT', 'B'),
(4, 'moni', 'nath', 'select', '96', '46', 9.6, 'Select', 'C PYTHON SELECT SELECT SELECT', 'INTERMEDIATE BEGINNER SELECT SELECT SELECT', 'A'),
(5, 'a', 'b', 'select', '96', '46', 9.6, 'Select', 'C PYTHON SELECT SELECT SELECT', 'INTERMEDIATE BEGINNER SELECT SELECT SELECT', 'D'),
(42, '', '', 'CSE', '89', '85', 8, '0', 'PHP PYTHON C JAVA SELECT', 'INTERMEDIATE BEGINNER INTERMEDIATE BEGINNER SELECT', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tblselection`
--

CREATE TABLE `tblselection` (
  `id` int(11) NOT NULL,
  `comid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `resumeid` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblselection`
--

INSERT INTO `tblselection` (`id`, `comid`, `userid`, `resumeid`, `datetime`) VALUES
(1, 45, 4, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcompanyreq`
--
ALTER TABLE `tblcompanyreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprofile`
--
ALTER TABLE `tblprofile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresume`
--
ALTER TABLE `tblresume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblselection`
--
ALTER TABLE `tblselection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblprofile`
--
ALTER TABLE `tblprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblresume`
--
ALTER TABLE `tblresume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tblselection`
--
ALTER TABLE `tblselection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
