-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2020 at 09:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isep-stimulus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE `banned` (
  `banned_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banned`
--

INSERT INTO `banned` (`banned_id`, `email`) VALUES
(11, 'marie@anne.com'),
(12, 'dupont@jean.fr');

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cgu`
--

INSERT INTO `cgu` (`id`, `content`) VALUES
(17, 'zezezezeze');

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `supervisor_id`, `title`, `answer`, `subject`, `visible`) VALUES
(53, NULL, 'ezezez', 'ezezezesdsd', 'dsdsdsdsd', 1),
(51, NULL, 'zeze', 'eeaez', 'eze', 0),
(55, NULL, 'alooo', 'alooooo', 'alooo', 1),
(61, NULL, 'rrerere', 'erererererezezeze', 'rerer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_Question` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `object`, `content`, `date`, `id_Question`) VALUES
(1, NULL, 'ezaeazeaz', 'eazeaeae', '2020-05-30 17:30:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `reaction_time` datetime DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `number_of_tests_done` int(11) DEFAULT NULL,
  `needs_tests` tinyint(1) DEFAULT NULL,
  `isBan` int(1) DEFAULT NULL,
  `test1_to_do` int(11) DEFAULT NULL,
  `test2_to_do` int(11) DEFAULT NULL,
  `test3_to_do` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `supervisor_id`, `first_name`, `last_name`, `email`, `password`, `birthday_date`, `company`, `employee_number`, `gender`, `profile_picture`, `number_of_tests_done`, `needs_tests`, `isBan`, `test1_to_do`, `test2_to_do`, `test3_to_do`) VALUES
(1, NULL, 'Caroline', 'Yan', 'ycaroline1999@gmail.com', '$2y$10$GqTIaPEL8jLOsI9UUkLZ0.Mgp5eDvyACm2pyyAzKBmMCbhi5m0jzW', '1999-12-23', NULL, NULL, 'A', NULL, NULL, NULL, 0, 0, 0, 0),
(2, NULL, 'Cyprian', 'Cunin', 'ccunin@isep.fr', 'cypriancunin', '2020-06-01', 'Stimulus', 10111, 'M', NULL, NULL, NULL, 0, 0, 0, 0),
(3, NULL, 'Julien', 'Colombain', 'jcolombain@isep.fr', 'jcolombain', '1999-11-11', 'Stimulus', 10222, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Célia', 'Houlette', 'choulette@isep.fr', 'choulette', '1999-01-01', 'Stimulus', 10333, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Jean', 'Dupont', 'dupont@jean.fr', 'dupontjean', '1988-02-02', 'Dupont Corp', 12222, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Marie', 'Dupont', 'marie@anne.com', NULL, '1987-03-03', 'Dupont Corp', 33333, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banned`
--
ALTER TABLE `banned`
  ADD PRIMARY KEY (`banned_id`);

--
-- Indexes for table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisor_id` (`supervisor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banned`
--
ALTER TABLE `banned`
  MODIFY `banned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
