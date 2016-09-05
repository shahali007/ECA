-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 01:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eca`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'shahali', 'shahali@gmail.com', '1234', 'admin'),
(2, 'shahali', 'shahali@gmail.com', '1234', ''),
(3, 'one', 'khskdh@gmiail.com', '', ''),
(4, 'saikat', 'saikat@saikat.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(5, 'shuvo', 'hatefull@gmail.com', 'b59c67bf196a4758191e42f76670ceba', ''),
(6, 'rasel', 'rease@gmail.com', '698d51a19d8a121ce581499d7b701668', ''),
(7, 'rase ', 'rasel@rasel.com', 'a3aca2964e72000eea4c56cb341002a4', ''),
(8, 'helal', 'helal@helal.com', '120705de7e61c5b322ad798b8ef225a7', ''),
(9, 'nafiz', 'nafiz@nafiz.com', 'b53086d558f1127993271e8c504ded45', ''),
(10, 'saiful', 'saiful@saiful.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(11, 'shahali', 'khskdh@gmiail.com', '9f6e6800cfae7749eb6c486619254b9c', ''),
(12, 'shahali', 'shahali@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(13, 'shahjahan', 'dccboy321@gmail.com', '510b00862274303d40103d2ed0baa6e8', ''),
(14, 'shahjahan', 'shahjahan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(15, 'amar', 'amar@amar.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(16, 'shah', 'jahan@jahan.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(17, 'saiful', 'saiful@saiful.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(35) NOT NULL,
  `dob` time DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `alt_name` varchar(50) DEFAULT NULL,
  `alt_contact` varchar(20) DEFAULT NULL,
  `cv` longblob,
  `certificate` longblob,
  `experience` varchar(50) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `blood` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `password`, `dob`, `contact`, `email`, `address`, `alt_name`, `alt_contact`, `cv`, `certificate`, `experience`, `reg_date`, `gender`, `blood`) VALUES
(0, 'First man', '202cb962ac59075b964b07152d234b70', '00:00:00', 1234567890, 'hello@replay.com', 'Bangladesh', 'Mr. Rashed', '1234567890', '', 0x526573756d65206f662053686168616c692e706466, '', '0000-00-00 00:00:00', 'male', 'O+'),
(1, 'rashedul', '202cb962ac59075b964b07152d234b70', '00:00:00', 1918453989, 'rashedkhan3787@gmail.com', 'Bangladesh', 'Shah Ali', '01683850124', 0x53637265656e73686f7420283131292e706e67, 0x53637265656e73686f7420283132292e706e67, '5 years', NULL, 'male', 'B+'),
(2, 'Mr. Saiakt', '202cb962ac59075b964b07152d234b70', '00:00:00', 1918453989, 'saiakt@gmail.com', 'Bangladesh', 'Mr. Rashed', '01683850124', 0x53637265656e73686f7420283131292e706e67, 0x53637265656e73686f7420283132292e706e67, '5 years', NULL, 'male', 'B+'),
(5, 'Mr. Emran Huda', '827ccb0eea8a706c4c34a16891f84e7b', '00:00:09', 1918453989, 'emran@gmail.com', 'Bangladesh', 'Mr. Rashed', '01683850124', 0x53637265656e73686f74202837292e706e67, 0x53637265656e73686f74202832292e706e67, '5 years', NULL, 'male', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE IF NOT EXISTS `user_status` (
  `id` int(3) DEFAULT NULL,
  `salary` varchar(15) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `designation` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `salary`, `department`, `designation`) VALUES
(NULL, '15000', 'web', 'web-developer'),
(1, '15000', 'web', 'web-developer'),
(2, '6666666', 'web', 'programmer'),
(5, '1500000', 'web', 'web-developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_status`
--
ALTER TABLE `user_status`
ADD CONSTRAINT `user_status_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
