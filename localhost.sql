-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2022 at 08:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flux`
--
CREATE DATABASE IF NOT EXISTS `flux` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flux`;

-- --------------------------------------------------------

--
-- Table structure for table `toperation`
--

CREATE TABLE `toperation` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pu` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `iduser` int(11) NOT NULL,
  `dateop` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toperation`
--

INSERT INTO `toperation` (`id`, `type`, `pu`, `quantity`, `pt`, `iduser`, `dateop`) VALUES
(4, 'optype', '9', 'po', '0', 2, '2022-02-16'),
(5, 'optype', '88', '9', '0', 2, '2022-02-16'),
(6, 'optype', '4', '4', '16', 2, '2022-02-16'),
(7, 'optype', '00', '00', '0', 2, '2022-02-16'),
(8, 'optype', '2', '5', '10', 2, '2022-02-16'),
(9, 'Sortie', '00', '8', '0', 2, '2022-02-16'),
(10, 'Entree', '', '', '0', 2, '2022-02-16'),
(11, 'Sortie', '939', '3', '2817', 2, '2022-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `firstname`, `phone`, `email`, `password`, `role`) VALUES
(1, 'KASEREKA LAMERK', '09337398373', 'bihango@gmail.com', 'go\"àçyç_\"éoihpç', 'Admin'),
(2, 'ross', '+634346838373', 'rostqnd@gmail.com', '00', 'Invited'),
(3, 'Kamarage ruphin', '9e7o798', 'jus@jdj.com', 'ii', 'Administrator'),
(4, ' ', '', '', '', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toperation`
--
ALTER TABLE `toperation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toperation`
--
ALTER TABLE `toperation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
