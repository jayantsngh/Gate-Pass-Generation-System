-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2024 at 10:16 AM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhelerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `gateerp`
--

CREATE TABLE `gateerp` (
  `id` int(11) NOT NULL,
  `passnumber` varchar(100) NOT NULL,
  `visitorsgender` varchar(50) NOT NULL,
  `visitorsidtype` varchar(100) NOT NULL,
  `iddetails` varchar(100) NOT NULL,
  `purposeofvisit` varchar(500) NOT NULL,
  `visitingdepartment` varchar(200) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `visitorentrytime` datetime NOT NULL DEFAULT current_timestamp(),
  `gatepassgenerationtime` datetime NOT NULL DEFAULT current_timestamp(),
  `passcreatedby` varchar(200) NOT NULL,
  `visitorsphoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gateerp`
--
ALTER TABLE `gateerp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gateerp`
--
ALTER TABLE `gateerp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
