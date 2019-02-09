-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 05:40 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `pub` varchar(200) NOT NULL,
  `bran` varchar(100) NOT NULL,
  `no` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `author`, `pub`, `bran`, `no`, `image`) VALUES
(28, 'Ruposi Bangla', 'Jibonanondo Das', 'onno prokasoni', 'dhaka', '0', '1.jpg'),
(29, 'Ma', 'Anisul Haq', 'onno prokasoni', 'dhaka', 'Love', '3.jpg'),
(31, 'Himu Rimandy', 'Humayon Ahamed', 'onno prokasoni', 'dhaka', 'fiction', 'Himu Remand.jpg'),
(32, 'Nichachor', 'Bappi Khan', 'onno prokasoni', 'dhaka', 'fiction', '38603818.jpg'),
(33, 'Ruposi Bangla', 'Jibonanondo Das', 'onno prokasoni', 'dhaka', 'history', 'images.jpg'),
(34, 'Bangla o Bangalir Itihas', 'keli n findly', 'onno prokasoni', 'dhaka', 'history', '5.jpg'),
(35, 'Himu mama', 'Humayon Ahamed', 'onno prokasoni', 'dhaka', 'Love', 'himu mama.jpg'),
(36, 'Tin Guyenda', 'Rokib Hasan', 'onno prokasoni', 'dhaka', 'fiction', 'bangla-book-tin-goyenda.jpg'),
(37, 'Lal Shalu', 'Sayed Waliullah', 'onno prokasoni', 'dhaka', 'history', 'Book6207.JPG'),
(38, 'Aj Himur Biye', 'Humayon Ahamed', 'onno prokasoni', 'dhaka', 'Love', '1464925098.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `bid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `fine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `rollno`, `bid`, `date`, `fine`) VALUES
(22, '10', '38', '2019-02-05', '0'),
(25, '4', '36', '2019-02-05', '0'),
(26, '4', '31', '2019-02-05', '0'),
(27, '20', '33', '2019-02-05', '0'),
(28, '20', '38', '2019-02-05', '0'),
(29, '10', '37', '2019-02-09', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rno` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rno`, `pass`, `gender`) VALUES
(18, 'rabby', '5', '123', 'male'),
(19, 'rabby', '4', '1234', 'male'),
(20, 'khan', '6', '123', 'male'),
(21, 'ali', '7', '12', 'male'),
(22, 'Rabby', '10', '10', 'male'),
(23, 'Jeni', '20', '20', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rno` (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
