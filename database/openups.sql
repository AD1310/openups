-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 06:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openups`
--

-- --------------------------------------------------------

--
-- Table structure for table `adimgs`
--

CREATE TABLE `adimgs` (
  `aid` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `aid` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `tperiod` int(5) NOT NULL,
  `visibility` int(5) NOT NULL,
  `uid` int(10) NOT NULL,
  `scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`aid`, `title`, `description`, `brand`, `price`, `tperiod`, `visibility`, `uid`, `scid`) VALUES
(7, 'wrist watch', 'my watch to sell', 'g shock', 5000, 30, 1, 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cid`, `cname`) VALUES
(1, 'property'),
(2, 'vehicle4'),
(3, 'vehicle2'),
(4, 'electronics'),
(5, 'fashion'),
(6, 'services');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `aid` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `landmark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scat`
--

CREATE TABLE `scat` (
  `scid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `scname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scat`
--

INSERT INTO `scat` (`scid`, `cid`, `scname`) VALUES
(1, 1, 'saleh'),
(2, 1, 'renth'),
(3, 1, 'sales'),
(4, 1, 'rents'),
(5, 2, 'cars'),
(6, 2, 'otherv'),
(7, 2, 'spare4'),
(8, 3, 'bikes'),
(9, 3, 'bicycle'),
(10, 3, 'spare2'),
(11, 4, 'computer'),
(12, 4, 'games'),
(13, 4, 'camera'),
(14, 5, 'men'),
(15, 5, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `create_datetime` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `userphoto` varchar(100) NOT NULL,
  `phonenum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `create_datetime`, `location`, `userphoto`, `phonenum`) VALUES
(1, 'psgaikwad', '202cb962ac59075b964b07152d234b70', 'pragatigaikwad280@gmail.com', '2020-08-26', 'chakan', 'fb1.jpg', 2147483647),
(2, 'psgaikwad', '202cb962ac59075b964b07152d234b70', 'amolgaikwad280@gmail.com', '2020-08-26', 'mumbai', 'fb3.jpg', 1234567890),
(3, 'Atharva Deshpande', '25f9e794323b453885f5181f1b624d0b', 'asdeshpande@mitaoe.ac.in', '2020-08-26', 'pune', 'Photograph.jpg', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adimgs`
--
ALTER TABLE `adimgs`
  ADD KEY `fk_aid` (`aid`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `fk_uid` (`uid`),
  ADD KEY `fk_scid` (`scid`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD KEY `fk_aid_loc` (`aid`);

--
-- Indexes for table `scat`
--
ALTER TABLE `scat`
  ADD PRIMARY KEY (`scid`),
  ADD KEY `fk_cid` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scat`
--
ALTER TABLE `scat`
  MODIFY `scid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adimgs`
--
ALTER TABLE `adimgs`
  ADD CONSTRAINT `fk_aid` FOREIGN KEY (`aid`) REFERENCES `ads` (`aid`);

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `fk_scid` FOREIGN KEY (`scid`) REFERENCES `scat` (`scid`),
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk_aid_loc` FOREIGN KEY (`aid`) REFERENCES `ads` (`aid`);

--
-- Constraints for table `scat`
--
ALTER TABLE `scat`
  ADD CONSTRAINT `fk_cid` FOREIGN KEY (`cid`) REFERENCES `cat` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
