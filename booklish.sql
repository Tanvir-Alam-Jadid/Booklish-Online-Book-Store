-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklish`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Name`, `Admin_Password`) VALUES
('Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admindashboard`
--

CREATE TABLE `admindashboard` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(15) NOT NULL,
  `Payment` varchar(30) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindashboard`
--

INSERT INTO `admindashboard` (`id`, `Name`, `Price`, `Payment`, `Status`) VALUES
(1, 'Seeing Ghosts', '920', 'Done', 'On-Process'),
(2, 'Time Shelter', '1200', 'Done', 'On-Process'),
(3, 'Slow Down', '1020', 'Cash-On-Delivery', 'Verified'),
(4, 'Vegetarian Salad for Dinner', '520', 'Done', 'Delivered'),
(5, 'Violets', '985', 'Done', 'On-Process'),
(6, 'Time Shelter', '12200', 'Done', 'Delivered'),
(7, 'Violets', '985', 'Done', 'Delivered'),
(8, 'Seeing Ghosts', '1100', 'Done', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin2', 'admin321');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(15) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Details` text NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Discount` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `MName`, `Author`, `Details`, `Price`, `Discount`, `img`, `rating`) VALUES
(1, 'A New Name', 'Jon Fosse (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '1060', '1200', 'products/a-new-name.jpg', '4.5'),
(2, 'Bootstrapped', 'Tanya Tagaq (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '520', '600', 'products/bootstrapped.jpg', '4.7'),
(3, 'Split Tooth', 'Ann Napolitano (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '345', '450', 'products/split-tooth.jpg', '4.3'),
(4, 'Brother & Sister Enter The Forest', 'Richard Mirabella (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '555', '700', 'products/brother-and-sister.jpg', '4.4'),
(5, 'Dust Child', 'Nguyen Phan Que Mai (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '675', '900', 'products/dust-child.jpg', '4.3'),
(6, 'Final Revival Of Opal & Nev', 'Dawnie Walton (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '360', '500', 'products/final-revival.jpg', '4.9'),
(7, 'Hello Beautiful', 'Ann napolitano (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '415', '600', 'products/hello-beautiful.jpg', '4.2'),
(8, 'Justice On The Brink', 'Linda Greenhouse (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '733', '850', 'products/justice-on-the-brink.jpg', '4.7'),
(9, 'Over And Under The Snow', 'Kate Messner (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '515', '700', 'products/over-and-under-the-snow.jpg', '4.1'),
(10, 'Seeing Ghosts', 'Kat Chow (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '920', '1100', 'products/seeing-ghosts.jpg', '4.4'),
(11, 'Slow Down', 'Rachel Williams (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '650', '800', 'products/slow-down.jpg', '4.5'),
(12, 'The Gospel', 'Maryse Conde (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '700', '900', 'products/the-gospel.jpg', '4.7'),
(13, 'Violets', 'Kyung Sook Shin (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '340', '500', 'products/violets.jpg', '4.5'),
(14, 'Time Shelter', 'Georgi Gospodinov (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '1200', '1500', 'products/time-shelter.jpg', '4.7'),
(15, 'The Tower Of Antilles', 'Achy Obejas (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '815', '1000', 'products/the-tower-of-the-antilers.jpg', '4.4'),
(16, 'Vegetarian Salad for Dinner', 'Jeanne Kelley (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '825', '1050', 'products/vegetarian-salad-dinner.jpg', '4.6');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(15) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Details` text NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Discount` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `MName`, `Author`, `Details`, `Price`, `Discount`, `img`, `rating`) VALUES
(2, 'Bootstrapped', 'Tanya Tagaq (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '520', '600', 'products/bootstrapped.jpg', '4.7'),
(4, 'Brother & Sister Enter The Forest', 'Richard Mirabella (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '555', '700', 'products/brother-and-sister.jpg', '4.4'),
(6, 'Final Revival Of Opal & Nev', 'Dawnie Walton (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '360', '500', 'products/final-revival.jpg', '4.9'),
(7, 'Hello Beautiful', 'Ann napolitano (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '415', '600', 'products/hello-beautiful.jpg', '4.2');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'Jadid', 'Jadid@gmail.com', 'Confused', 'I am confused. What book should i buy?'),
(8, 'Tanvir', 'tanvir@gmail.com', 'Did not get the book', 'I ordered a book 2 days ago and still not delivered'),
(9, 'Atef', 'atefabrar@gmail.com', 'A page is missing', 'A page is missing from my book how can i exchange it?'),
(10, 'Rahat', 'rahat@gmail.com', 'Confusion', 'Does the story book collection you have is good?'),
(11, 'Sopnil', 'sopnil@gmail.com', 'I need a book', 'I need harry potter and the philosopher stone story book. Is it available?'),
(12, 'Afridi', 'afridi@gmail.com', 'page missing', 'Some pages from my book i missing how can i exchange?'),
(13, 'Hasib', 'hasib@gmail.com', 'i need a book', 'I need a good story book any suggessions?');

-- --------------------------------------------------------

--
-- Table structure for table `home1`
--

CREATE TABLE `home1` (
  `id` int(15) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Details` text NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Discount` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home1`
--

INSERT INTO `home1` (`id`, `MName`, `Author`, `Details`, `Price`, `Discount`, `img`, `rating`) VALUES
(1, 'A New Name', 'Jon Fosse (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '1060', '1200', 'products/a-new-name.jpg', '4.5'),
(2, 'Bootstrapped', 'Tanya Tagaq (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '520', '600', 'products/bootstrapped.jpg', '4.7'),
(3, 'Split Tooth', 'Ann Napolitano (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '345', '450', 'products/split-tooth.jpg', '4.3'),
(4, 'Brother & Sister Enter The Forest', 'Richard Mirabella (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '555', '700', 'products/brother-and-sister.jpg', '4.4'),
(5, 'Dust Child', 'Nguyen Phan Que Mai (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '675', '900', 'products/dust-child.jpg', '4.3'),
(6, 'Final Revival Of Opal & Nev', 'Dawnie Walton (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '360', '500', 'products/final-revival.jpg', '4.9'),
(7, 'Hello Beautiful', 'Ann napolitano (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '415', '600', 'products/hello-beautiful.jpg', '4.2'),
(8, 'Justice On The Brink', 'Linda Greenhouse (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '733', '850', 'products/justice-on-the-brink.jpg', '4.7');

-- --------------------------------------------------------

--
-- Table structure for table `home2`
--

CREATE TABLE `home2` (
  `id` int(15) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Details` text NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Discount` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home2`
--

INSERT INTO `home2` (`id`, `MName`, `Author`, `Details`, `Price`, `Discount`, `img`, `rating`) VALUES
(9, 'Over And Under The Snow', 'Kate Messner (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '515', '700', 'products/over-and-under-the-snow.jpg', '4.1'),
(10, 'Seeing Ghosts', 'Kat Chow (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '920', '1100', 'products/seeing-ghosts.jpg', '4.4'),
(11, 'Slow Down', 'Rachel Williams (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '650', '800', 'products/slow-down.jpg', '4.5'),
(12, 'The Gospel', 'Maryse Conde (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '700', '900', 'products/the-gospel.jpg', '4.7'),
(13, 'Violets', 'Kyung Sook Shin (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '340', '500', 'products/violets.jpg', '4.5'),
(14, 'Time Shelter\n', 'Georgi Gospodinov (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '1200', '1500', 'products/time-shelter.jpg', '4.7'),
(15, 'The Tower Of Antilles', 'Achy Obejas (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '815', '1000', 'products/the-tower-of-the-antilers.jpg', '4.4'),
(16, 'Vegetarian Salad for Dinner', 'Jeanne Kelley (Author)', 'About Author:\nHe/She is an well known author with a rich writting style. Everyone loves his/her books for its versatile storyline.', '825', '1050', 'products/vegetarian-salad-dinner.jpg', '4.6');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `username`, `email`, `pass`) VALUES
(6, 'Tanvir', 'Tanvir@gmail.com', '1234'),
(7, 'Optimus', 'optimus123@gmail.com', 'Optimus123'),
(8, 'Jadid', 'Jadid@gmail.com', 'Jadid123'),
(9, 'hghghg', 'Jadid@gmail.com', 'Jadid@gmail.com'),
(11, 'Tanvir', 'tanvir@gmail.com', 'tanvir123'),
(12, 'Optimus', 'Optimus01@gmail.com', 'optimusprime');

-- --------------------------------------------------------

--
-- Table structure for table `sporders`
--

CREATE TABLE `sporders` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `address` varchar(32) NOT NULL,
  `number` int(15) NOT NULL,
  `bdetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sporders`
--

INSERT INTO `sporders` (`id`, `name`, `email`, `bookname`, `address`, `number`, `bdetail`) VALUES
(1, 'Md. Atef Abrar Bhuyian', 'atefabrar07@gmail.com', 'Harry Potter', '2111 no, kolatoli Dhaka', 1512498745, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et'),
(2, 'Asad', 'asad@gmail.com', 'Little Willow', '21 sadar road, Chittagong', 15120000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et'),
(3, 'Samad', 'samad@gmail.com', 'Venom', 'Boalkhali,Chittagong', 2147483647, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et'),
(4, 'Tanvir Alam Jadid', 'Tanvir@gmail.com', 'Wonderland', 'Pakkar matha, ctg', 1790178930, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et'),
(5, 'Sopnil', 'rgffhf@gmail.com', 'Beauty and the beast', 'GEC,Chittagong', 1785845658, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindashboard`
--
ALTER TABLE `admindashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home1`
--
ALTER TABLE `home1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home2`
--
ALTER TABLE `home2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `sporders`
--
ALTER TABLE `sporders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindashboard`
--
ALTER TABLE `admindashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home1`
--
ALTER TABLE `home1`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home2`
--
ALTER TABLE `home2`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sporders`
--
ALTER TABLE `sporders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
