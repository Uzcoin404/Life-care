-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2021 at 12:00 PM
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
  `phone-number` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `phone-number`) VALUES
(1, 'test', 'test123', '+998902161577');

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
  `age` int(11) NOT NULL,
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
(1, 'test', '1-foydalanuvchi', 'test', 'grip', 99, 'AAdsdsadas', '', 'sdfdsf', 'sdfsdf', '9844694545'),
(2, 'gdfgdf', 'gdfgdf', 'gdfgdf', 'dfgdfgg', 65654, 'ghfhgfh', '../img/avatar/noneAvatar.svg', '2021-12-11', '2021-12-09', '5345345'),
(3, 'gdfgdf', 'gdfgdf', 'gdfgdf', 'dfgdfgg', 65654, 'ghfhgfh', './images/avatar/Rasm-mavjud-emas', '2021-12-11', '2021-12-09', '5345345'),
(4, 'werwe', 'werw ', 'asdasd', 'asdasd', 34324, 'sdfsdfs', './images/avatar/Rasm-mavjud-emas', '2021-12-02', '2021-12-10', '43534534543'),
(5, 'werwe', 'werw ', 'asdasd', 'asdasd', 34324, 'sdfsdfs', './images/avatar/Rasm-mavjud-emas', '2021-12-02', '2021-12-10', '43534534543'),
(6, 'fgdfgdf', 'fdgdfgdf', 'dfgdf', 'gdfgdfg', 324324, 'efdsfsdfs', './images/avatar/fgdfgdf.png', '2021-12-17', '2021-12-02', '534534'),
(7, 'fgdfgdf', 'fdgdfgdf', 'dfgdf', 'gdfgdfg', 324324, 'efdsfsdfs', '../images/avatar/fgdfgdf.png', '2021-12-17', '2021-12-02', '534534');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
