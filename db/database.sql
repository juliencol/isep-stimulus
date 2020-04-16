-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  sam. 11 avr. 2020 à 16:05
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
-- Base de données :  `site_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `photo_profil` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `CGU_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  PRIMARY KEY (`CGU_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

DROP TABLE IF EXISTS `gestionnaire`;
CREATE TABLE IF NOT EXISTS `gestionnaire` (
  `gestionnaire_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `entreprise` varchar(100) NOT NULL,
  `num_employe` int(11) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `photo_profil` varchar(100) NOT NULL,
  PRIMARY KEY (`gestionnaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `objet` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `message_date` date NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `test_date` date NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `num_question` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reponse` text NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `question_intitule` text NOT NULL,
  PRIMARY KEY (`num_question`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_date` date NOT NULL,
  `score` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `entreprise` varchar(100) NOT NULL,
  `num_employe` int(11) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `photo_profil` varchar(100) NOT NULL,
  PRIMARY KEY (`utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `CGU_admin` FOREIGN KEY (`admin_id`) REFERENCES `cgu` (`CGU_id`),
  ADD CONSTRAINT `question_admin` FOREIGN KEY (`admin_id`) REFERENCES `question` (`num_question`);

--
-- Contraintes pour la table `cgu`
--
ALTER TABLE `cgu`
  ADD CONSTRAINT `cgu_ibfk_1` FOREIGN KEY (`CGU_ID`) REFERENCES `utilisateur` (`utilisateur_id`),
  ADD CONSTRAINT `cgu_ibfk_2` FOREIGN KEY (`CGU_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_utilisateur` FOREIGN KEY (`test_id`) REFERENCES `utilisateur` (`utilisateur_id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_CGU` FOREIGN KEY (`utilisateur_id`) REFERENCES `cgu` (`CGU_id`),
  ADD CONSTRAINT `utilisateur_question` FOREIGN KEY (`utilisateur_id`) REFERENCES `question` (`num_question`),
  ADD CONSTRAINT `utilisateur_test` FOREIGN KEY (`utilisateur_id`) REFERENCES `test` (`test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
