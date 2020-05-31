-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 30 mai 2020 à 23:41
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stimulus`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `CGU` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`id`, `content`) VALUES
(1, 'CGU');

-- --------------------------------------------------------

--
-- Structure de la table `faq_questions`
--

DROP TABLE IF EXISTS `faq_questions`;
CREATE TABLE IF NOT EXISTS `faq_questions` (
  `id` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  KEY `supervisor_id` (`supervisor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `supervisor_id`, `title`, `answer`, `subject`) VALUES
(1, 2, 'Comment', 'Passer des tests', 'Question simple');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `supervisors`
--

DROP TABLE IF EXISTS `supervisors`;
CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(255) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `reaction_time` datetime DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`id`, `Type`, `user_id`, `description`, `number`, `date`, `score`, `title`, `reaction_time`, `result`) VALUES
(1, 'Son', 1, 'Test de temps de réaction à un son', 36, '2020-05-19 00:00:00', 123, 'Test en vue du pilotage d\'un Boeing', '2000-00-20 00:00:00', 'Bon résultat'),
(9, 'time_sound', 1, 'Test simple', 36, '2020-05-26 00:00:00', 23, 'OI', '2020-05-26 00:00:00', 'BIEN'),
(56, 'Son', 4, 'OUI', 23, '2020-05-20 00:00:00', 23, 'AAA', '2020-05-04 00:00:00', 'ASEZ'),
(8, 'reproduct_sound', 1, 'Test général', 234, '2020-05-19 00:00:00', 23, 'AA', '2000-00-10 00:00:00', 'Bien'),
(7, 'time_light', 1, 'AA', 123, '2020-05-27 00:00:00', 123, 'AA', '2020-05-26 00:00:00', 'ASZER'),
(6, 'repr_sound', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'repr_sound', 1, 'Test général', 34, '2020-05-27 00:00:00', 234, 'BER', '2020-05-20 00:00:00', 'Bien');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `number_of_tests_done` int(11) DEFAULT NULL,
  `needs_tests` tinyint(1) DEFAULT NULL,
  KEY `supervisor_id` (`supervisor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `supervisor_id`, `first_name`, `last_name`, `email`, `password`, `birthday_date`, `company`, `employee_number`, `is_female`, `profile_picture`, `number_of_tests_done`, `needs_tests`) VALUES
(1, 2, 'Gabriel', 'ENRIQUEZ', 'enriquezgabriel426@gmail.com', NULL, '2020-05-06', 'Stimulus', 324, 0, NULL, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
