-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 09:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `fathername` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `contact` int(255) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `coursetype` varchar(33) NOT NULL,
  `courseduration` varchar(33) NOT NULL,
  `image` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `username`, `fathername`, `email`, `contact`, `adress`, `coursetype`, `courseduration`, `image`, `date`) VALUES
(78, ' ahmed khan', 'asim iqbal', 'admin@gmail.com', 2147483647, 'h-8 islamabad', 'Devolopement', '3 month', 'aca3.png', '2020-01-19'),
(79, 'aaaaaaaaaaaaa', 'dfdffdf', 'hammad@gmail.com', 323, 'mohalaarra1', 'Computer LAnguages', '4 month', 'shifter.gif', '0000-00-00'),
(80, 'abcdef', 'qwertyuui', 'haiderkayani505@gmail.com', 300, 'kahuta2', 'Architecture', '4 month', 'boys.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`) VALUES
(105, 'hammad@gmail.com', '2fb365790581c082f43a472908939f8c', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`, `date`) VALUES
(103, 'muhammad ali', 'hammad@gmail.com', 'bb1b36fbb04cb8741774d4a09ed15a84', 'admin', '2020-01-19'),
(104, 'muhammad ahmed khan', 'admin@gmail.com', 'ce8e6d08e7207907cbfb9a68376d7fab', 'admin', '2020-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `image` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `usertype`, `image`, `date`) VALUES
(12, 'muhammad ahmed khan', 'hammad@gmail.com', 'd7c394f48959a95890a580b73efd7ab9', 'student', 'ai.jpeg', '2020-01-19'),
(14, 'muhammad ahmed khan', 'hammad@gmail.com', 'bb1b36fbb04cb8741774d4a09ed15a84', 'student', 'ai.jpeg', '2020-01-19'),
(15, 'muhammad ahmed khan', 'hammad@gmail.com', '774942596cd4f4923053f17c1fc3706e', 'student', 'aca3.png', '2020-01-19'),
(16, 'hammad nawaz', 'hammad@gmail.com', 'ebe60f0271454b237a83418ff1676849', 'student', 'client.jpg', '2020-01-19'),
(17, 'tazarraf', 'tashii@gmail.com', 'ebe60f0271454b237a83418ff1676849', 'student', 'shifter.gif', '2020-01-23'),
(19, 'sdsdsdd', 'hammad@gmail.com', '774942596cd4f4923053f17c1fc3706e', 'student', 'shifter.gif', '2020-01-23'),
(20, 'tashfeen', 'tashfeenazeer@gmail.com', 'ce8e6d08e7207907cbfb9a68376d7fab', 'student', 'aca2.jpg', '2020-01-23'),
(21, 'tashfeen', 'hammad@gmail.com', 'd7c394f48959a95890a580b73efd7ab9', 'student', 'ai.jpeg', '2020-01-23'),
(22, 'ggggggg', 'tashii@gmail.com', 'd7c394f48959a95890a580b73efd7ab9', 'student', '91.jpg', '2020-01-23'),
(23, 'wwwwwwww', 'haiderkayani505@gmail.com', 'ffbbe9f6dcaef4fbe1901b9b4c336976', 'student', '1.jpg', '2020-01-23'),
(24, 'rrrrrrr', 'hammad@gmail.com', 'ffbbe9f6dcaef4fbe1901b9b4c336976', 'student', 'abs.jpg', '2020-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(33) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `email`, `password`, `usertype`, `date`) VALUES
(5, 'muhammad ahmed khan', 'hammad@gmail.com', '9ff9256202608b102accf537e908402d', 'teacher', '2020-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
