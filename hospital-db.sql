-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2021 at 06:14 PM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `phone`, `photo`) VALUES
(1, 'test', 'test123', '+998906225022', '../images/doctor_01.jpg'),
(2, 'Uzcoin', 'Uzcoin', 'Uzcoin', '../images/rengen/.png'),
(5, '345345', '5345345', '998906225022', '../images/avatar/345345.png'),
(10, 'dasdasd', 'asd', '35345', '../images/avatar/no-photo.jpg'),
(11, 'asdasda', 'dasdasd', '998992564585', '../images/avatar/no-photo.jpg'),
(13, 'aaa', 'AAA', '123', '../images/avatar/no-photo.jpg'),
(20, '4477', 'dfgdf', '4477', '../images/avatar/4477.png');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `login`, `password`, `phone`, `photo`) VALUES
(1, 'test', 'test', '+998906225022', '../images/doctor_02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `patronymic` varchar(60) NOT NULL,
  `sicktype` varchar(60) NOT NULL,
  `age` int(200) NOT NULL,
  `passport` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `arrivaltime` varchar(60) NOT NULL,
  `gonetime` varchar(60) NOT NULL,
  `number` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `patronymic`, `sicktype`, `age`, `passport`, `photo`, `arrivaltime`, `gonetime`, `number`) VALUES
(8, 'Siz ko\'rib', 'turgan', 'ro\'yxat', 'databazadan', 100, 'olib kelingan', '../images/avatar/Rasm-mavjud-emas', '2021-12-09', '2021-12-09', '999999'),
(9, 'Suyunbek', 'Saydazimov', 'gfh', 'gfhgf', 66, 'fghfghgf', '../images/rengen/fghfghgf.png', '2021-12-02', '2021-12-04', '54564565'),
(10, 'test', 'tester', 'testing', 'test', 3, 'tester', '../images/rengen/tester.jpg', '2021-12-04', '2021-12-18', '997854'),
(11, 'vxvc', 'xvcxvcxv', 'cxvcxv', 'xcvcxv', 56546, 'tester', '../images/rengen/tester.png', '2021-12-09', '2021-12-10', '56565'),
(12, 'gfdfgdfgds', 'fgdfgdfg', 'fdgdfgd', 'dfgdfgdfg', 54543, '777', '../images/rengen/777.png', '2021-12-11', '2021-12-11', '6546546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
