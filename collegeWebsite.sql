-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2016 at 10:18 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeWebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `isConfirmed` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `metatags` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `title`, `author`, `content`, `date`, `isConfirmed`, `views`, `category`, `metatags`) VALUES
(1, 'kite runner', 'khaled hosseini', 'The Kite Runner is the first novel by Afghan-American author Khaled Hosseini. Published in 2003 by Riverhead Books, it tells the story of Amir, a young boy from the Wazir Akbar Khan district of Kabul, ', '2001-07-09', 0, 0, '', ''),
(2, 'The Great Gatsby', 'Scott', 'Nick Carraway, a World War I veteran, shares his experience on being attracted to Gatsby and his flamboyant lifestyle.', '2008-08-08', 1, 10, '', ''),
(3, '3 idiots', 'Rajkumar Hirani', 'In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.', '2016-08-22', 0, 0, '', ''),
(4, 'Fault in our stars', 'John Green', 'You gave me infinity within our finite numbered days', '2004-12-25', 1, 20, '', ''),
(5, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(6, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(7, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(8, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(9, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(10, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', ''),
(11, 'The Champs', 'Brown Pets', 'Content is cloned.', '2024-12-14', 1, 12, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
