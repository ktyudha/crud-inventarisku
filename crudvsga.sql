-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 06:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudvsga`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `brand`, `type`, `amount`, `color`, `owner`, `location`) VALUES
(22, 'Liva', 'CPU Core i3', '20', 'Black', 'Management TKJ', 'Lab TKJ D'),
(23, 'AOC', 'LCD 16\"', '20', 'Hitam', 'Management TKJ', 'Lab TKJ A'),
(24, 'Simbadda', 'CPU Core 2 Duo', '20', 'Hitam', 'Management TKJ', 'Lab TKJ B'),
(25, 'LG', 'LCD 16\"', '20', 'Black', 'Management TKJ', 'Lab TKJ B'),
(26, 'Liva', 'LCD 19\"', '15', 'Black', 'Management TKJ', 'Lab TKJ C'),
(27, 'Benq', 'Proyektor', '6', 'White', 'Staff T. U', 'Lab TKJ A, B, C, D'),
(28, 'Layar for Proyektor', '2m x 3m', '4', 'White-Black', 'Staff T. U', 'Lab TKJ A, B, C ,D'),
(29, 'MikroTik', 'RB 941-2nD', '30', 'White-Blue', 'Management TKJ', 'Lab TKJ A'),
(30, 'MikroTik', 'RB951Ui-2HnD', '20', 'White-Blue', 'Management TKJ', 'Lab TKJ B'),
(31, 'MikroTik', 'RB1100AH x4', '2', 'Silver', 'Management TKJ', 'R. Server & Lab TKJ A'),
(32, 'MikroTik', 'RB CCR1016-12G-4S-EMv2', '2', 'White', 'Management TKJ', 'R. Server & Lab TKJ A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
