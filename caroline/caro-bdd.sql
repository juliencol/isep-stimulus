-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2020 at 09:38 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appsiteweb_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE `banned` (
  `ban_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banned`
--

INSERT INTO `banned` (`ban_id`, `email`) VALUES
(3, 'uuu@m.com'),
(15, 'cyan@isep.fr'),
(16, 'jbon@email.com'),
(17, 'jbon@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `employee_number` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `birthdate`, `company_name`, `employee_number`, `gender`) VALUES
(1, 'Caroline', 'Yan', 'cyan@isep.fr', 'carolineyan', '1999-12-23', 'Stimulus', 10554, 'F'),
(3, 'Cyprian', 'Cunin', 'ccunin@isep.fr', 'cypriancunin', '2020-04-01', 'Stimulus', 10111, 'M'),
(7, 'Célia', 'Houlette', 'choulette@isep.fr', 'celiahoulette', '2020-04-06', 'Stimulus', 10222, 'F'),
(8, 'Jean', 'Bon', 'jbon@email.com', 'jeanbon', '2020-04-05', 'Alimentcorp', 10009, 'A'),
(9, 'Julien', 'Colombain', 'jcolombain@isep.fr', 'juliencolombain', '2020-03-09', 'Stimulus', 10333, 'M'),
(10, 'Gabriel', 'Enriquez', 'genriquez@isep.fr', 'gabrielenriquez', '2019-12-29', 'Stimulus', 10444, 'M'),
(11, 'Paul', 'Chansou', 'pchansou@isep.fr', 'paulchanson', '2020-01-05', 'Stimulus', 10555, 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banned`
--
ALTER TABLE `banned`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banned`
--
ALTER TABLE `banned`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
