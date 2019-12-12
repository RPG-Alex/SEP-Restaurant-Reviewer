-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 01:30 PM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.3.11-0ubuntu0.19.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_reviews`
--
CREATE DATABASE IF NOT EXISTS `restaurant_reviews` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant_reviews`;

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `diningID` int(11) NOT NULL,
  `diningtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diningbyreview`
--

CREATE TABLE `diningbyreview` (
  `reviewID` int(11) NOT NULL,
  `diningID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foodbyreview`
--

CREATE TABLE `foodbyreview` (
  `reviewID` int(11) NOT NULL,
  `foodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `foodID` int(11) NOT NULL,
  `food` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE `occasion` (
  `occasionID` int(11) NOT NULL,
  `occasion` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `occasionbyreview`
--

CREATE TABLE `occasionbyreview` (
  `reviewID` int(11) NOT NULL,
  `occasionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantID`, `name`, `description`, `location`, `contact`) VALUES
(1, 'taco johns', 'good tacos', 'wherever you are', 'john of course');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `restaurantID` int(11) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `qfood` int(11) NOT NULL,
  `qservice` int(11) NOT NULL,
  `qclean` int(11) NOT NULL,
  `spservice` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `allergyInfo` tinyint(1) NOT NULL,
  `overall` int(11) NOT NULL,
  `shortReview` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servicebyreview`
--

CREATE TABLE `servicebyreview` (
  `serviceID` int(11) NOT NULL,
  `reviewID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceID` int(11) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`diningID`);

--
-- Indexes for table `diningbyreview`
--
ALTER TABLE `diningbyreview`
  ADD PRIMARY KEY (`reviewID`,`diningID`),
  ADD KEY `reviewID` (`reviewID`,`diningID`),
  ADD KEY `diningID` (`diningID`);

--
-- Indexes for table `foodbyreview`
--
ALTER TABLE `foodbyreview`
  ADD KEY `reviewID` (`reviewID`,`foodID`),
  ADD KEY `foodID` (`foodID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`occasionID`);

--
-- Indexes for table `occasionbyreview`
--
ALTER TABLE `occasionbyreview`
  ADD PRIMARY KEY (`reviewID`,`occasionID`),
  ADD KEY `reviewID` (`reviewID`,`occasionID`),
  ADD KEY `occasionID` (`occasionID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurantID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `restaurantID` (`restaurantID`);

--
-- Indexes for table `servicebyreview`
--
ALTER TABLE `servicebyreview`
  ADD PRIMARY KEY (`serviceID`,`reviewID`),
  ADD KEY `serviceID` (`serviceID`,`reviewID`),
  ADD KEY `reviewID` (`reviewID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dining`
--
ALTER TABLE `dining`
  MODIFY `diningID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `occasionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diningbyreview`
--
ALTER TABLE `diningbyreview`
  ADD CONSTRAINT `IDofreview` FOREIGN KEY (`reviewID`) REFERENCES `review` (`reviewID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `diningID` FOREIGN KEY (`diningID`) REFERENCES `dining` (`diningID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `foodbyreview`
--
ALTER TABLE `foodbyreview`
  ADD CONSTRAINT `foodID` FOREIGN KEY (`foodID`) REFERENCES `foods` (`foodID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `revID` FOREIGN KEY (`reviewID`) REFERENCES `review` (`reviewID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `occasionbyreview`
--
ALTER TABLE `occasionbyreview`
  ADD CONSTRAINT `occasionID` FOREIGN KEY (`occasionID`) REFERENCES `occasion` (`occasionID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `reviewbyID` FOREIGN KEY (`reviewID`) REFERENCES `review` (`reviewID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `restuarantID` FOREIGN KEY (`restaurantID`) REFERENCES `restaurant` (`restaurantID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `servicebyreview`
--
ALTER TABLE `servicebyreview`
  ADD CONSTRAINT `reviewID` FOREIGN KEY (`reviewID`) REFERENCES `review` (`reviewID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `serviceID` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
