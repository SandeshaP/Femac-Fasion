-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 04:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `femac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(3) NOT NULL,
  `A_Name` varchar(20) NOT NULL,
  `A_password` varchar(50) NOT NULL,
  `A_Email` varchar(30) NOT NULL,
  `A_Phone` int(11) NOT NULL,
  `A_Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `A_Name`, `A_password`, `A_Email`, `A_Phone`, `A_Gender`) VALUES
(4, 'Sara_109', 'f728ba1cc5bd9392e3d86d10aa7a4be8', 'sara@gmail.com', 2147483647, 'female'),
(5, 'fcvkgiu', '26cf24b8a2ea808ef8c6abdd65667693', 's5xyycr@grc', 346760987, ''),
(6, 'dcds', '7918271a41fd47bc935599cd855e9010', 'dc@ysbj', 123325, 'other'),
(7, 'Nikhil', '36c4b8fca5177f6513dbbc5c574e1823', 'nikhil@gmail.com', 2147483647, 'male'),
(8, 'Mohit', 'abcd', 'asav@gan.com', 2147483647, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Uname`, `Password`, `Email`, `Phone`, `Gender`) VALUES
(13, 'Maria', '9fd2e7a733c1f92af10e06916953d7b4', 'maria@gmail.com', 2147483647, 'female'),
(14, 'Rehan', '02e601d26ca03415be8646894fe4515a', 'rehan@gmail.com', 2147483647, 'male'),
(15, 'Mehak123', '0b9156e90e2ae16ea349c7e285a320bc', 'mehak_901@gmail.com', 2147483647, 'female'),
(16, 'tfdcghb', 'beda4c3d0a836335e43032aa96f4177c', '', 0, ''),
(17, 'xrftgv', '837d0447694f114e75fbe40b9c74ea9a', 'xfghgfjyg@yg', 37568890, 'other'),
(18, 'vkhbk', '3d631f2e3c0fe81cc34abba73f4dc99c', 'e56tfvgh@fyg', 53456789, ''),
(19, 'bfbddtt', '5910a12d0c597ca3b434fdb16cc1d17d', 'rtvu@ysahy', 123243467, 'other'),
(20, 'dv', 'f115aba39dc33cffdacd83040ad43f05', 'efdfg@dedc', 213344, 'male'),
(21, 'cqefe', 'c63b4f523a76d09fbede59f070584c0f', 'deffee@sdcsd', 12423654, 'female'),
(22, 'mehak', '53ee5de0ce4c6bad29b475486a297218', 'xfbxv@jd', 8234, 'other'),
(23, 'tfdcghb', 'efad7abb323e3d4016284c8a6da076a1', 'ftjvh@e', 35745, ''),
(24, 'vjhb', '4eb81dca9216cabf7e0a51bd48628044', 'vfvefv@jk', 0, 'other'),
(25, 'neha', '7815696ecbf1c96e6894b779456d330e', 'neha@gmail.com', 1214, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
