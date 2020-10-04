-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2019 at 01:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9284607_foodfactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `Id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `location` varchar(40) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`Id`, `fname`, `lname`, `dob`, `gender`, `mobile`, `email`, `password`, `address`, `zipcode`, `location`, `city`, `state`) VALUES
(1, 'Mehul', 'Jain', '1998-06-03', 'Male', 885606184, 'mehuljain3698@gmail.com', 'mehul', 'SHIVAJI CHOWK MOHOPADA RASAYNI', 410222, 'Khargar', 'Navi Mumbai', 'Maharashtra'),
(3, 'Mahek', 'Jain', '2019-02-04', 'Male', 8850085013, 'mahekjain1248@gmail.com', 'mahek', 'SHIVAJI CHOUK,MOHAPADA,RASAYNI,, Khalapur, Raigad(Maharashtra) -410202', 410207, 'Khargar', 'Navi Mumbai', 'Maharashtra'),
(4, 'Asmita ', 'Jain', '2009-11-30', 'Female', 7276804626, 'asmitajain63@gmail.com', 'asmita', 'SHIVAJI CHOWK MOHOPADA RASAYNI', 410222, 'Khargar', 'Navi Mumbai', 'Maharashtra'),
(5, 'Richard', 'Tex', '1979-08-18', 'Female', 1111111111, 'abc@abc.com', '123456789', 'test 123', 11, 'Khargar', 'Navi Mumbai', 'Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
