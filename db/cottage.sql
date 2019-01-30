-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 07:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cottage`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `otherName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `nok` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `phoneNumber` int(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `localGovt` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `employeeId` varchar(50) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `firstName`, `otherName`, `lastName`, `sex`, `specialization`, `nok`, `age`, `phoneNumber`, `state`, `localGovt`, `address`, `passport`, `employeeId`, `time`) VALUES
(1, 'Nelson', 'Ogbemi', 'Ejegi', 'Male', '', 'Paul', 25, 2147483647, 'Delta State', 'Warri South L.G.A', 'Warri', 'docpassports/5[1].jpg', 'NEL339', '2017-11-05 13:47:40.000000'),
(2, 'Emma', '', 'Okoaze', 'Male', 'therapy', 'Emmanuel', 25, 2147483647, 'Delta State', 'Ethiope east', 'Asaba', '../docpassports/doc3.jpg', 'EMM899', '2017-11-06 04:01:41.000000'),
(3, 'Kelvin', '', 'Ileramah', 'Male', 'General treatment', 'Lucky', 26, 2147483647, 'Edo', 'Esan', 'Igbe Road', '../docpassports/doc2.jpg', 'KEL406', '2017-11-06 20:46:20.000000'),
(4, 'Happy', 'Osas', 'Momoh', 'Male', 'General Operations', 'Uyi', 35, 2147483647, 'Edo', 'Owan South', 'Sabo', '../docpassports/doc4.jpg', 'HAP370', '2017-11-07 07:18:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `otherName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `nok` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `phoneNumber` int(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `localGovt` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `cardNumber` varchar(50) NOT NULL,
  `doctorId` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstName`, `otherName`, `lastName`, `sex`, `symptoms`, `nok`, `age`, `phoneNumber`, `state`, `localGovt`, `address`, `passport`, `cardNumber`, `doctorId`, `time`) VALUES
(3, 'lovelyn', 'john', 'peter', 'Female', 'headache and cough', 'ada', 56, 900000000, 'Delta State', 'Warri South L.G.A', 'warri', 'passports/6[1].jpg', 'LOV693', '', '2017-11-06 10:30:47.735338'),
(7, 'Anthonia', 'Iwesa', 'John', 'Female', 'Headache and Cold', 'Paul', 34, 2147483647, 'Owerri', 'Ariba South ', 'No. 3 kadija Street', 'passports/bg2.jpg', 'ANT382', 'NEL339', '2017-11-06 12:53:05.000000'),
(8, 'john', 'doe', 'mene', 'Male', 'fever', 'sunny', 76, 900000000, 'Benin', 'Etsako', 'Sabo', 'passports/6[1].jpg', 'JOH535', 'EMM899', '2017-11-05 16:34:36.000000'),
(9, 'oghenemena', 'mena', 'Peter', 'Male', 'COLD', 'Harrison', 36, 2147483647, 'Delta', 'Ethiope East', 'Warri', 'passports/6[1].jpg', 'OGH191', 'EMM899', '2017-11-06 16:42:18.000000'),
(10, 'Jane', 'Peace', 'Peter', 'Male', 'Fever', 'Paul', 24, 2147483647, 'Delta', 'Warri South L.G.A', 'Warri', 'passports/5[1].jpg', 'JAN558', 'EMM899', '2017-11-06 17:03:43.000000'),
(11, 'Vincent', '', 'Harrison', 'Male', 'Pains', 'John', 23, 809788654, 'Edo State', 'Esan', 'Sabo', 'passports/12[1].jpg', 'VIN323', 'EMM899', '2017-11-06 17:14:44.000000'),
(12, 'Kessena', 'Blanca', 'Aristotle', 'Female', 'Neck Pain', 'Funke', 23, 900000000, 'Delta State', 'Warri North', 'Warri', 'passports/1450764594140.jpg', 'KES652', 'KEL965', '2017-11-06 20:59:21.000000'),
(13, 'Harriet', 'Nkem', 'Anderson', 'Female', 'Cold', 'John', 34, 2147483647, 'Delta State', 'Udu local govt', 'Effurun', 'passports/15[1].jpg', 'HAR253', 'EMM899', '2017-11-07 07:24:37.000000'),
(14, 'James', 'Bisi', 'Kollington', 'Male', 'Headache', 'Isa', 34, 2147483647, 'Edo state', 'Etsako', 'Auchi', 'passports/2go_1168873630.jpg', 'JAM063', 'NEL339', '2017-11-07 12:53:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(2, 'administrator', 'administrator@cottage.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
