-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2015 at 07:16 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kist`
--
-- CREATE DATABASE IF NOT EXISTS `kist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
-- USE `kist`;

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `stuNum` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `noPhone` varchar(14) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`stuNum`, `name`, `noPhone`, `relationship`) VALUES
('', '', '', ''),
('2012127667', 'ALI', '123123123123', 'FATHER'),
('900000', 'ASDASD', '123123', 'FATHER');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `stuNum` varchar(10) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `fatherStatus` varchar(30) NOT NULL,
  `fatherJob` varchar(50) DEFAULT NULL,
  `fatherSalary` float DEFAULT NULL,
  `motherName` varchar(100) NOT NULL,
  `motherStatus` varchar(30) NOT NULL,
  `motherJob` varchar(50) DEFAULT NULL,
  `motherSalary` float DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `poscode` varchar(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`stuNum`, `fatherName`, `fatherStatus`, `fatherJob`, `fatherSalary`, `motherName`, `motherStatus`, `motherJob`, `motherSalary`, `address`, `poscode`, `city`, `state`) VALUES
('', '', '', '', 0, '', '', '', 0, '', '', '', ''),
('2012127667', 'ALI', 'STILL ALIVE', 'SENDIRI', 1000, 'MINAH', 'STILL ALIVE', 'GURU', 2600, 'LOT1414, SKKASD', '12312', 'KOTA BHARU', 'KELANTAN'),
('900000', 'ASDAS', 'STILL ALIVE', 'ASDASD', 123, 'ASDAS', 'STILL ALIVE', 'ASD', 12321, 'ASDAD21134AS', '12344', 'ASDASD', 'NEGERI SEMBILAN');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE IF NOT EXISTS `permohonan` (
  `stuNum` varchar(10) NOT NULL,
  `stuIC` varchar(14) NOT NULL,
  `stuName` varchar(100) NOT NULL,
  `stuProg` varchar(100) NOT NULL,
  `stuPhoneNum` varchar(14) NOT NULL,
  `stuSem` varchar(2) NOT NULL,
  `stuGender` varchar(10) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `roomNum` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`stuNum`, `stuIC`, `stuName`, `stuProg`, `stuPhoneNum`, `stuSem`, `stuGender`, `status`, `roomNum`) VALUES
('2012127667', '920424035867', 'MOHAMAD AFIF BIN AHMAD SUKERY', 'PEMBANTU PERUBATAN', '123', '2', 'MALE', 'Approved', 'KI101'),
('900000', '9999', 'ALI', 'RADIOTERAPI', '3424', '4', 'MALE', 'Approved', 'KI102');

-- --------------------------------------------------------

--
-- Table structure for table `rayuan`
--

CREATE TABLE IF NOT EXISTS `rayuan` (
  `stuNum` varchar(10) NOT NULL,
  `stuIC` varchar(14) NOT NULL,
  `stuName` varchar(100) NOT NULL,
  `stuProg` varchar(100) NOT NULL,
  `stuPhoneNum` varchar(14) NOT NULL,
  `stuSem` varchar(2) NOT NULL,
  `stuGender` varchar(10) NOT NULL,
  `stuGPA` float NOT NULL,
  `fatherSalary` float NOT NULL,
  `motherSalary` float NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `roomNum` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE IF NOT EXISTS `tanggungan` (
  `stuNum` varchar(10) NOT NULL,
  `child` varchar(20) NOT NULL,
  `IPTA` varchar(20) DEFAULT NULL,
  `IPTS` varchar(20) DEFAULT NULL,
  `highSchool` varchar(20) DEFAULT NULL,
  `primSchool` varchar(20) DEFAULT NULL,
  `praSchool` varchar(20) DEFAULT NULL,
  `notSchool` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggungan`
--

INSERT INTO `tanggungan` (`stuNum`, `child`, `IPTA`, `IPTS`, `highSchool`, `primSchool`, `praSchool`, `notSchool`) VALUES
('2010843976', '4', '1', '0', '2', '0', '0', '0'),
('2011842976', '4', '1', '0', '1', '0', '0', '0'),
('2012127667', '1', '1', '0', '0', '0', '0', '0'),
('2012155721', '5', '1', '0', '1', '1', '0', '0'),
('2012333333', '3', '2', '0', '0', '0', '0', '0'),
('2012655555', '3', '1', '0', '0', '0', '0', '0'),
('2012843976', '3', '1', '0', '0', '0', '0', '0'),
('211111111', '7', '2', '0', '0', '2', '0', '0'),
('212345678', '4', '2', '0', '0', '0', '0', '0'),
('2222222222', '5', '2', '0', '0', '0', '0', '0'),
('6444444444', '6', '2', '0', '3', '0', '0', '0'),
('900000', '5', '1', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `stuNum` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`stuNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`stuNum`, `pass`, `name`, `ic`, `email`, `type`) VALUES
('123', '123', 'LUNA MAYA', '871212071232', 'lunamaya@gmail.com', 'STAFF'),
('12345', '12345', 'ZAMRI SAMSUDIN', '8810100567', 'samsudin22@yahoo.com', 'STAFF'),
('2010777777', '7777777777', 'MAT POYO BIN MAN', '7777777777', 'mat@yahoo.com', 'STUDENT'),
('2010843976', '920307116160', 'SITI SARAH', '920307116160', 'sarah@yahoo.com', 'STUDENT'),
('2011842976', '930307036160', 'MOHD AMAR BIN RAFIEE', '930307036160', 'amar@yahoo.com', 'STUDENT'),
('2012127667', 'apih92', 'MOHAMAD AFIF BIN AHMAD SUKERY', '920424035867', 'apihsukery@gmail.com', 'STUDENT'),
('2012155499', '920214035500', 'PUTERI AMALIA ISYREEN BT TUAN GHAZALI', '920214035500', 'tsunade_iris@yahoo.com', 'STUDENT'),
('2012155721', '920307106160', 'SITI HAJAR ATHIRAH BINTI AHMAD RAFIEE', '920307106160', 'cthajar_0703@yahoo.com', 'STUDENT'),
('2012333333', '9233333333', 'LISA SURIHANI BT KHAN', '9233333333', 'lisa@yahoo.com', 'STUDENT'),
('2012655555', '9012655555', 'ROSAINI BT ISMAIL', '9012655555', 'rosaini@yahoo.com', 'STUDENT'),
('2012843976', '12345678', 'CTHAJAR BT BANI', '12345678', 'ct@yahoo.com', 'STUDENT'),
('211111111', '911111111', 'MOHD AMIN BIN AMAR', '9111111111', 'amin@yahoo.com', 'STUDENT'),
('212345678', '912345678', 'EMYLIANA BT HASHNAN', '912345678', 'emy@yahoo.com', 'STUDENT'),
('2222222222', '9999999999', 'MIA SARA BT IJO', '9999999999', 'mia@yahoo.com', 'STUDENT'),
('6444444444', '94444444444', 'FIZO BIN OMAR', '94444444444', 'fizo@yahoo.com', 'STUDENT'),
('900000', '9999', 'ALI', '9999', 'ali@yahoo.com', 'STUDENT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
