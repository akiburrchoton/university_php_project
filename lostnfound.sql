-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 07:52 PM
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
-- Database: `lostnfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemname` text NOT NULL,
  `found_by` text NOT NULL,
  `contact` text NOT NULL,
  `location` text NOT NULL,
  `item_description` text NOT NULL,
  `item_img` text NOT NULL,
  `id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemname`, `found_by`, `contact`, `location`, `item_description`, `item_img`, `id`) VALUES
('Samsung s7', 'Choton', '123213', 'Dhaka', 'Black color', 'iphone8.jpg', 1),
('Samsung', 'Sayad', '2131234', 'Hazaribag', 'Golden color smart phone', 's7.jpg', 5),
('Money Bag', 'Akibur', '12983123', 'Uttara', 'I found the money bag in BRAC University Cafeteria. ', 'wallet.webp', 6),
('Laptop', 'Hasib', '3423423', 'Kalyanpur', 'Alienware laptop found on the bus. ', 'alien.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `signup_found`
--

CREATE TABLE `signup_found` (
  `id` int(111) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup_found`
--

INSERT INTO `signup_found` (`id`, `username`, `password`) VALUES
(1, 'Akibur', '85136c79cbf9fe36bb9d05d0639c70c265c18d37'),
(5, 'Akibur', 'e28f2ebe7df6baf8bd89e470dd80b12601f03231');

-- --------------------------------------------------------

--
-- Table structure for table `signup_lost`
--

CREATE TABLE `signup_lost` (
  `id` int(111) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup_lost`
--

INSERT INTO `signup_lost` (`id`, `username`, `password`) VALUES
(4, 'Akibur', 'e28f2ebe7df6baf8bd89e470dd80b12601f03231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_found`
--
ALTER TABLE `signup_found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_lost`
--
ALTER TABLE `signup_lost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup_found`
--
ALTER TABLE `signup_found`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup_lost`
--
ALTER TABLE `signup_lost`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
