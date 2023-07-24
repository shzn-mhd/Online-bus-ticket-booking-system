-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 07:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `userName`, `password`) VALUES
('easy', 'easy', '12345'),
('easybooking', 'easyb', '81dc9bdb52d04dc20036dbd8313ed055'),
('Mudith praveen', 'Mudith', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `routeNo` varchar(100) NOT NULL,
  `busNo` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `destin` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `seats` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`routeNo`, `busNo`, `origin`, `destin`, `date`, `time`, `seats`) VALUES
('', '', '', '', '', '', 'YToxOntpOjA7czoyOiIxRiI7fQ=='),
('1', '123', 'Mannar', 'Colombo', '2023-04-20', '16:44', 'YToxMjp7aTowO3M6MjoiMUYiO2k6MTtzOjI6IjFBIjtpOjI7czoyOiIxQiI7aTozO3M6MjoiMUQiO2k6NDtzOjI6IjRBIjtpOjU7czoyOiI0QSI7aTo2O3M6MjoiMUUiO2k6NztzOjI6IjVFIjtpOjg7czoyOiI1RiI7aTo5O3M6MjoiM0IiO2k6MTA7czoyOiIzRSI7aToxMTtzOjI6IjVCIjt9'),
('2', '145', 'Ampara', 'Colombo', '2023-04-30', '16:46', 'YTo0OntpOjA7czoyOiIxRiI7aToxO3M6MjoiNEYiO2k6MjtzOjI6IjVCIjtpOjM7czoyOiI3RiI7fQ=='),
('3', '162', 'Vavuniya', 'Colombo', '2023-04-20', '12:30', 'YToxOntpOjA7czoyOiIxRiI7fQ=='),
('4', '174', 'Colombo', 'Jaffna', '2023-04-22', '08:30', 'YToxOntpOjA7czoyOiIxRiI7fQ=='),
('5', '198', 'Badulla', 'Colombo', '2023-04-22', '10:45', 'YToxOntpOjA7czoyOiIxRiI7fQ=='),
('6', '164', 'Kandy', 'Jaffna', '2023-04-13', '07:30', 'YToxOntpOjA7czoyOiIxRiI7fQ=='),
('7', '197', 'Kandy', 'Colombo', '2023-04-25', '12:40', 'YToxOntpOjA7czoyOiIxRiI7fQ==');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nic` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addresss` varchar(100) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `datee` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nic`, `full_name`, `email`, `addresss`, `contactNo`, `origin`, `destination`, `datee`, `status`) VALUES
('119', 'Althaf', 'playboy@gail.com', 'trinov', '4646', 'Kandy', 'Jaffna', '2023-04-20', 'Unpaid'),
('123', 'Mudith praveen', 'mudithpravin2@gmail.com', 'Karamindula,hewaheta', '0768488721', 'Mannar', 'Colombo', '2023-04-20', 'Unpaid'),
('1564', 'giwjg', 'fjej@jij', 'nfkldajg', '7746', 'Mannar', 'Colombo', '2023-04-20', 'Paid'),
('45464', 'sfkn', 'mjop@o', 'jjib', '454', 'Mannar', 'Colombo', '2023-04-20', 'Unpaid'),
('554', 'Mudith Praveen', 'mudithpravin2@gmail.com', '43/1,Karamidula', '0768488721', 'Mannar', 'Colombo', '2023-04-20', 'Unpaid'),
('56561', 'Mohamad Shazan', 'mohamadshazan221@gmail.com', 'Main Street Balangoda', '0779914186', 'Ampara', 'Colombo', '2023-04-30', 'Paid'),
('74123', 'safkan', 'playboy@srd', 'kmkk', '1999', 'Colombo', 'Jaffna', '2023-04-28', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TicketNo` int(11) NOT NULL,
  `custId` varchar(20) NOT NULL,
  `custName` varchar(50) NOT NULL,
  `routeNo` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `seats` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TicketNo`, `custId`, `custName`, `routeNo`, `price`, `image`, `seats`) VALUES
(49, '123', 'Mudith praveen', '1', 3000, 'Group 22 usecase.png', 'YTozOntpOjA7czoyOiIxQSI7aToxO3M6MjoiMUIiO2k6MjtzOjI6IjFEIjt9'),
(50, '554', 'Mudith Praveen', '1', 1200, 'Group 22 gannt.pdf', 'YToxOntpOjA7czoyOiI0QSI7fQ=='),
(52, '56561', 'Mohamad Shazan', '2', 3400, 'dota-2-sven-4k-gaming-4f5r6znocglkcna6.jpg', 'YTozOntpOjA7czoyOiI0RiI7aToxO3M6MjoiNUIiO2k6MjtzOjI6IjdGIjt9'),
(53, '1564', 'giwjg', '1', 3000, 'days-gone-zombie-strike-poster-808vz2axmhw4zege.jpg', 'YTozOntpOjA7czoyOiIxRSI7aToxO3M6MjoiNUUiO2k6MjtzOjI6IjVGIjt9'),
(54, '45464', 'sfkn', '1', 2900, 'abstract-fantasy-landscape-background.jpg', 'YTozOntpOjA7czoyOiIzQiI7aToxO3M6MjoiM0UiO2k6MjtzOjI6IjVCIjt9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`routeNo`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TicketNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TicketNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
