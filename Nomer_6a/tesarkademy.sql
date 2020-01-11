-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 01:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesarkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`Id`, `Nama`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Handika Yulma Kristiawan');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Nama`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `gabung`
--

CREATE TABLE `gabung` (
  `Cashier` varchar(50) NOT NULL,
  `Product` varchar(15) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gabung`
--

INSERT INTO `gabung` (`Cashier`, `Product`, `Category`, `Price`) VALUES
('Pevita Pearce', 'Latte', 'Drink', 10000),
('Raisa Andriana', 'Cake', 'Food', 20000),
('Handika Yulma Kristiawan', 'Nasi Goreng', 'Food', 45000),
('Handika Yulma Kristiawan', 'Latte', 'Drink', 10000),
('Handika Yulma Kristiawan', 'Latte', 'Drink', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(15) NOT NULL,
  `Price` int(11) NOT NULL,
  `Id_Category` int(11) NOT NULL,
  `Id_Cashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Nama`, `Price`, `Id_Category`, `Id_Cashier`) VALUES
(1, 'Latte', 10000, 2, 1),
(2, 'Cake', 20000, 1, 2),
(3, 'Nasi Goreng', 45000, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
