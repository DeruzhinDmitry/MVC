-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 29, 2019 at 10:44 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_items`
--

CREATE TABLE `todo_items` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `done` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo_items`
--

INSERT INTO `todo_items` (`id`, `email`, `text`, `status`, `name`, `done`) VALUES
(1, 'test@test.com', 'test', '1231', 'Test user', 1),
(2, 'test2@test.com', 'test2', 'in progress', 'Test user2', 0),
(3, 'test3@test.com', 'test3', 'In progress', 'User name 3', 0),
(4, 'test4@test.com', 'test3', 'In progress', 'User name 4', 0),
(5, 'test5@test.com', 'test3', 'In progress', 'User name 5', 0),
(6, 'test6@test.com', 'test3', 'In progress', 'User name 6', 0),
(7, 'test7@test.com', 'test3', 'In progress', 'User name 7', 0),
(8, '2@we.com', '3', '4', '1', 0),
(9, '2@we.com', '3', '4', '1', 0),
(10, '2@we.com', '3', '4', '1', 0),
(11, '2@we.com', '3', '4', '1', 0),
(12, '2@we.com', '3', '4', '1', 0),
(13, '2@s2.sdas', '4', '3', '1', 1),
(14, '', '', '', '', 0),
(15, '3@3.com', '2', '7', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_items`
--
ALTER TABLE `todo_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_items`
--
ALTER TABLE `todo_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
