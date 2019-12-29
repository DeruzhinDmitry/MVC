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
(1, 'test1@test.com', 'test1', 'in progress', 'User name 1', 1),
(2, 'test2@test.com', 'test2', 'in progress', 'User name 2', 0),
(3, 'test3@test.com', 'test3', 'In progress', 'User name 3', 0),
(4, 'test4@test.com', 'test4', 'In progress', 'User name 4', 0),
(5, 'test5@test.com', 'test5', 'In progress', 'User name 5', 0),
(6, 'test6@test.com', 'test6', 'In progress', 'User name 6', 0),
(7, 'test7@test.com', 'test7', 'In progress', 'User name 7', 0),
(8, 'test8@test.com', 'test8', 'In progress', 'User name 8', 0),
(9, 'test9@test.com', 'test9', 'In progress', 'User name 9', 0),
(10, 'test10@test.com', 'test10', 'In progress', 'User name 10', 0),
(11, 'test11@test.com', 'test11', 'In progress', 'User name 11', 0),
(12, 'test12@test.com', 'test12', 'In progress', 'User name 12', 0),
(13, 'test13@test.com', 'test13', 'In progress', 'User name 13', 1),
(14, 'test14@test.com', 'test14', 'In progress', 'User name 14', 0),
(15, 'test15@test.com', 'test15', 'In progress', 'User name 15', 0);

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
