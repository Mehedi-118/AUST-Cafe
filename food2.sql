-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 10:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Id`, `Name`, `Price`) VALUES
(2, 'Combo1', 499),
(3, 'Combo2', 999),
(4, 'Combo3', 1599),
(10, 'Combo4', 250),
(11, 'Combo4', 450);

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

CREATE TABLE `packagedetails` (
  `Id` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL,
  `ItemName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`Id`, `PackageId`, `ItemName`) VALUES
(1, 2, 'Thai Clear/Corn Soup'),
(2, 2, 'Wonthon'),
(3, 2, 'Wedges'),
(4, 2, 'Pasta Salad'),
(5, 2, 'Steam Rice'),
(6, 2, 'Thai Rice'),
(7, 2, 'Chicken Massala'),
(8, 2, 'Ice Cream'),
(9, 3, 'Chicken Pasta-1'),
(10, 3, 'Mexican Hot Pizza - 6 inc'),
(11, 3, 'Chicken/Beef Burger - 1pc'),
(12, 3, 'pasta Salad'),
(13, 3, 'Thai soup'),
(14, 3, 'Dosa'),
(15, 3, 'Special Apple Juice'),
(16, 3, 'Ice Cream'),
(17, 3, 'Pepsi/Coca Cola/Dew'),
(18, 4, 'T-Bone Steak'),
(19, 4, 'BBQ Half Chicken'),
(20, 4, 'Mexican Half Chicken'),
(21, 4, 'Rib eye Steak'),
(22, 4, 'Meat Supreme Pizza'),
(23, 4, 'Pepperoni Pizza'),
(24, 4, 'Red valvet Cake'),
(25, 4, 'Ice Cream'),
(26, 4, 'Pepsi/Coca Cola/Dew');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Id`, `UserId`, `PackageId`) VALUES
(1, 2, 2),
(2, 2, 4),
(3, 2, 2),
(4, 2, 2),
(5, 2, 2),
(6, 2, 4),
(7, 2, 4),
(8, 2, 4),
(9, 2, 4),
(10, 2, 4),
(11, 2, 4),
(12, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'Admin', 'admin@cafe.com', 'admin123'),
(2, 'Mehedi Hasan', 'm@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `packagedetails`
--
ALTER TABLE `packagedetails`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Package_PackageDetailsId` (`PackageId`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Purchase_UserId` (`UserId`),
  ADD KEY `Package_Purchase_PackageId` (`PackageId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packagedetails`
--
ALTER TABLE `packagedetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `packagedetails`
--
ALTER TABLE `packagedetails`
  ADD CONSTRAINT `Package_PackageDetailsId` FOREIGN KEY (`PackageId`) REFERENCES `package` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `Package_Purchase_PackageId` FOREIGN KEY (`PackageId`) REFERENCES `package` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `User_Purchase_UserId` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
