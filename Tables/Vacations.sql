-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2021 at 11:47 PM
-- Server version: 10.2.39-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codebrak917882_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Vacations`
--

CREATE TABLE `Vacations` (
  `ApplicationId` int(25) NOT NULL,
  `VacationStart` date NOT NULL,
  `VacationEnd` date NOT NULL,
  `DaysRequested` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'pending',
  `Reason` longtext NOT NULL,
  `EmployeeId` int(11) NOT NULL,
  `DateSubmitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vacations`
--

INSERT INTO `Vacations` (`ApplicationId`, `VacationStart`, `VacationEnd`, `DaysRequested`, `Status`, `Reason`, `EmployeeId`, `DateSubmitted`) VALUES
(54, '2021-07-08', '2021-07-13', 5, 'pending', ' Family issues', 18, '2021-07-08 20:41:47'),
(55, '2021-12-20', '2022-01-01', 12, 'pending', ' Christmas Vacation', 18, '2021-07-08 20:42:29'),
(56, '2021-08-10', '2021-08-17', 7, 'pending', ' Summer Vacation', 17, '2021-07-08 20:44:01'),
(57, '2021-12-20', '2022-01-08', 19, 'pending', ' Christmas Vacation', 17, '2021-07-08 20:44:34'),
(58, '2021-07-08', '2021-08-01', 24, 'pending', ' Summer Vacation', 21, '2021-07-08 20:46:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Vacations`
--
ALTER TABLE `Vacations`
  ADD PRIMARY KEY (`ApplicationId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Vacations`
--
ALTER TABLE `Vacations`
  MODIFY `ApplicationId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Vacations`
--
ALTER TABLE `Vacations`
  ADD CONSTRAINT `Vacations_ibfk_1` FOREIGN KEY (`EmployeeId`) REFERENCES `Users` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
