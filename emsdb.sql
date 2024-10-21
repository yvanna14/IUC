-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2021 at 03:39 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE IF NOT EXISTS `tbldepartments` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(30) NOT NULL,
  `deptsn` varchar(15) NOT NULL,
  `deptcode` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`ID`, `deptname`, `deptsn`, `deptcode`) VALUES
(1, 'Information Technology', 'IT', 'IT001'),
(2, 'Human Resources', 'HR', 'HR002'),
(3, 'Marketing', 'MKT', 'MKT003'),
(5, 'Digital Banking', 'DB', 'DB004'),
(7, 'System Analysis', 'SA', 'SA006'),
(8, 'Graphics Design', 'GD', 'GD007'),
(9, 'Accounting', 'ACC', 'ACC005');

-- --------------------------------------------------------

--
-- Table structure for table `tbleaves`
--

CREATE TABLE IF NOT EXISTS `tbleaves` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(15) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `leave_type` varchar(30) NOT NULL,
  `leave_date` date NOT NULL,
  `return_date` date NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbleaves`
--

INSERT INTO `tbleaves` (`ID`, `matricule`, `firstname`, `lastname`, `dept`, `leave_type`, `leave_date`, `return_date`, `Status`) VALUES
(1, 'EMP002', 'RAWDA', 'ABDOU', 'MGT', 'SICK', '2021-03-02', '2021-03-15', 'Accepted'),
(3, 'EMP001', 'AICHA', 'ABDOU', 'IT', 'HOLIDAYS', '2021-03-03', '2021-04-03', 'Accepted'),
(4, 'EMP002', 'RAWDA', 'ABDOU', 'MGT', 'HOLIDAYS', '2020-02-02', '2015-11-12', 'Accepted'),
(5, 'EMP003', 'FRITZ', 'FUNYUI', 'IT', 'HONEY MOON', '2021-02-14', '2021-03-14', 'Accepted'),
(6, 'EMP009', 'CABREL', 'WILFRIED', 'MKT', 'SICK', '2021-03-18', '2021-03-24', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE IF NOT EXISTS `tblemployees` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `matricule` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(20) NOT NULL,
  `contact` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pic` longblob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`ID`, `firstname`, `lastname`, `matricule`, `email`, `gender`, `dob`, `dept`, `contact`, `address`, `password`, `pic`) VALUES
(3, 'AICHA', 'ABDOU', 'EMP001', 'abdouaichaa99@gmail.com', 'Female', '2002-09-09', 'IT', 693096424, 'Akwa', 'passwordaicha', 0x6169636861322e6a706567),
(5, 'RAWDA', 'ABDOU', 'EMP002', 'abdourawda2701@gmail.com', 'Female', '2000-01-27', 'MGT', 693097798, 'Bonanjo', 'rawdaabdou', 0x72617764612e6a706567),
(8, 'FRITZ', 'FUNYUI', 'EMP003', 'fritz@gmail.com', 'Male', '2003-09-04', 'IT', 698989898, 'Beri', 'qwerty', 0x667269747a2e6a706567),
(9, 'KAMILA', 'AIDA', 'EMP004', 'aidakamila@gmail.com', 'Female', '2025-09-07', 'HR', 654307292, 'Bonapriso', 'password', 0x6169636861312e6a706567),
(10, 'WILFRIED', 'JR', 'EMP005', 'wilfriedjunior@gmail.com', 'Male', '1999-03-07', 'SA', 654307292, 'Bonapriso', 'jr777', 0x77696c66726965642e6a706567),
(11, 'BRANDAO', 'PICTURE', 'EMP006', 'chichebrandon@gmail.com', 'Male', '2000-07-12', 'MGT', 681994747, '4 etages', 'brandaopic88', 0x6272616e64616f2e6a706567),
(12, 'LONGLA', 'ONEILLA', 'EMP007', 'oneillatasha@gmail.com', 'Female', '2001-01-10', 'DB', 650273732, 'Makepe', 'passwordtasha', 0x6f6e65696c6c612e6a706567),
(13, 'EUGENIE', 'CLAIRE', 'EMP008', 'eugenieclaire@gmail.com', 'Female', '2001-08-03', 'HR', 690302234, 'Deido', 'eugenie33', 0x636c616972652e6a706567),
(14, 'CABREL', 'WILFRIED', 'EMP009', 'cabrelwilfried@gmail.com', 'Male', '2001-01-06', 'MKT', 69999999, 'Village', 'cabrel18', 0x63616272656c2e6a706567),
(15, 'FREE', 'BOY', 'EMP010', 'arnoldsisse@gmail.com', 'Male', '1999-01-02', 'GD', 650013594, 'Bonaberi', 'freeboy02', 0x73697373652e6a706567),
(16, 'NDOGNOU', 'MALVINA', 'EMP011', 'ndognoumalvina@gmail.com', 'Female', '1998-07-22', 'GD', 694305047, 'Bonaberi', 'malvina00', 0x6d616c76696e612e6a706567),
(19, 'SAMYATOU ', 'NASS', 'EMP014', 'samyatounass@gmail.com', 'Female', '1966-02-20', 'HR', 699996356, 'Bali', 'samyatou99', 0x6169636861332e6a706567),
(20, 'FRANK', 'DESSALLI', 'EMP013', 'frankdessalli@gmail.com', 'Male', '2001-04-02', 'IT', 676260792, 'Bonaberi', 'frank02', 0x6e696b652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `firstname`, `lastname`, `gender`, `contact`, `address`) VALUES
(1, 'admin1@gmail.com', 'adminpassword', 'ADMIN', 'AICHA', 'Femal', 693096424, 'Akwa');
