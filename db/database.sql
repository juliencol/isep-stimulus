-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 juin 2020 à 22:21
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthday_date` date DEFAULT NULL,
  `is_female` tinyint(1) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `banned`
--

DROP TABLE IF EXISTS `banned`;
CREATE TABLE IF NOT EXISTS `banned` (
  `banned_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`banned_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `banned`
--

INSERT INTO `banned` (`banned_id`, `email`) VALUES
(11, 'marie@anne.com'),
(12, 'dupont@jean.fr');

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`id`, `content`) VALUES
(18, 'Conditions gÃ©nÃ©rales d\'utilisation\r\nEn vigueur au 03/06/2020\r\n \r\nLes prÃ©sentes conditions gÃ©nÃ©rales d\'utilisation (dites Â« CGU Â») ont pour objet l\'encadrement juridique des modalitÃ©s de mise Ã  disposition du site et des services par ________________ et de dÃ©finir les conditions dâ€™accÃ¨s et dâ€™utilisation des services par Â« l\'Utilisateur Â».\r\nLes prÃ©sentes CGU sont accessibles sur le site Ã  la rubrique Â«CGUÂ».\r\nToute inscription ou utilisation du site implique l\'acceptation sans aucune rÃ©serve ni restriction des prÃ©sentes CGU par lâ€™utilisateur. Lors de l\'inscription sur le site via le Formulaire dâ€™inscription, chaque utilisateur accepte expressÃ©ment les prÃ©sentes CGU en cochant la case prÃ©cÃ©dant le texte suivant : Â« Je reconnais avoir lu et compris les CGU et je les accepte Â».\r\nEn cas de non-acceptation des CGU stipulÃ©es dans le prÃ©sent contrat, l\'Utilisateur se doit de renoncer Ã  l\'accÃ¨s des services proposÃ©s par le site.\r\nhttp://localhost/isep-stimulus/ se rÃ©serve le droit de modifier unilatÃ©ralement et Ã  tout moment le contenu des prÃ©sentes CGU.\r\nArticle 1 : Les mentions lÃ©gales\r\nLâ€™Ã©dition et la direction de la publication du site http://localhost/isep-stimulus/ est assurÃ©e par Patrick Wang, domiciliÃ© 28 rue notre dame des champs.\r\nNumÃ©ro de tÃ©lÃ©phone est ________________\r\nAdresse e-mail patrick.wang@isep.fr.\r\nL\'hÃ©bergeur du site http://localhost/isep-stimulus/ est la sociÃ©tÃ© isep-stimulus, dont le siÃ¨ge social est situÃ© au 28 rue notre dame des champs, avec le numÃ©ro de tÃ©lÃ©phone : ________________.\r\nARTICLE 2 : AccÃ¨s au site\r\nLe site http://localhost/isep-stimulus/ permet Ã  l\'Utilisateur un accÃ¨s gratuit aux services suivants :\r\nLe site internet propose les services suivants :\r\nTests psychotechniques sur des candidats\r\nLe site est accessible gratuitement en tout lieu Ã  tout Utilisateur ayant un accÃ¨s Ã  Internet. Tous les frais supportÃ©s par l\'Utilisateur pour accÃ©der au service (matÃ©riel informatique, logiciels, connexion Internet, etc.) sont Ã  sa charge.\r\nLâ€™Utilisateur non membre n\'a pas accÃ¨s aux services rÃ©servÃ©s. Pour cela, il doit sâ€™inscrire en remplissant le formulaire. En acceptant de sâ€™inscrire aux services rÃ©servÃ©s, lâ€™Utilisateur membre sâ€™engage Ã  fournir des informations sincÃ¨res et exactes concernant son Ã©tat civil et ses coordonnÃ©es, notamment son adresse email.\r\nPour accÃ©der aux services, lâ€™Utilisateur doit ensuite s\'identifier Ã  l\'aide de son identifiant et de son mot de passe qui lui seront communiquÃ©s aprÃ¨s son inscription.\r\nTout Utilisateur membre rÃ©guliÃ¨rement inscrit pourra Ã©galement solliciter sa dÃ©sinscription en se rendant Ã  la page dÃ©diÃ©e sur son espace personnel. Celle-ci sera effective dans un dÃ©lai raisonnable.\r\nTout Ã©vÃ©nement dÃ» Ã  un cas de force majeure ayant pour consÃ©quence un dysfonctionnement du site ou serveur et sous rÃ©serve de toute interruption ou modification en cas de maintenance, n\'engage pas la responsabilitÃ© de http://localhost/isep-stimulus/. Dans ces cas, lâ€™Utilisateur accepte ainsi ne pas tenir rigueur Ã  lâ€™Ã©diteur de toute interruption ou suspension de service, mÃªme sans prÃ©avis.\r\nL\'Utilisateur a la possibilitÃ© de contacter le site par messagerie Ã©lectronique Ã  lâ€™adresse email de lâ€™Ã©diteur communiquÃ© Ã  lâ€™ARTICLE 1.\r\nARTICLE 3 : Collecte des donnÃ©es\r\nLe site assure Ã  l\'Utilisateur une collecte et un traitement d\'informations personnelles dans le respect de la vie privÃ©e conformÃ©ment Ã  la loi nÂ°78-17 du 6 janvier 1978 relative Ã  l\'informatique, aux fichiers et aux libertÃ©s. Le site est dÃ©clarÃ© Ã  la CNIL sous le numÃ©ro 0123456789.\r\nEn vertu de la loi Informatique et LibertÃ©s, en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accÃ¨s, de rectification, de suppression et d\'opposition de ses donnÃ©es personnelles. L\'Utilisateur exerce ce droit :\r\nÂ· par mail Ã  l\'adresse mail support@stimulus.fr\r\nÂ· par voie postale au 28 rue notre dame des champs ;\r\nÂ· via un formulaire de contact ;\r\n \r\nÂ· via son espace personnel ;\r\nARTICLE 4 : PropriÃ©tÃ© intellectuelle\r\nLes marques, logos, signes ainsi que tous les contenus du site (textes, images, sonâ€¦) font l\'objet d\'une protection par le Code de la propriÃ©tÃ© intellectuelle et plus particuliÃ¨rement par le droit d\'auteur.\r\nL\'Utilisateur doit solliciter l\'autorisation prÃ©alable du site pour toute reproduction, publication, copie des diffÃ©rents contenus. Il s\'engage Ã  une utilisation des contenus du site dans un cadre strictement privÃ©, toute utilisation Ã  des fins commerciales et publicitaires est strictement interdite.\r\nToute reprÃ©sentation totale ou partielle de ce site par quelque procÃ©dÃ© que ce soit, sans lâ€™autorisation expresse de lâ€™exploitant du site Internet constituerait une contrefaÃ§on sanctionnÃ©e par lâ€™article L 335-2 et suivants du Code de la propriÃ©tÃ© intellectuelle.\r\nIl est rappelÃ© conformÃ©ment Ã  lâ€™article L122-5 du Code de propriÃ©tÃ© intellectuelle que lâ€™Utilisateur qui reproduit, copie ou publie le contenu protÃ©gÃ© doit citer lâ€™auteur et sa source.\r\n \r\nARTICLE 5 : ResponsabilitÃ©\r\nLes sources des informations diffusÃ©es sur le site http://localhost/isep-stimulus/ sont rÃ©putÃ©es fiables mais le site ne garantit pas quâ€™il soit exempt de dÃ©fauts, dâ€™erreurs ou dâ€™omissions.\r\nLes informations communiquÃ©es sont prÃ©sentÃ©es Ã  titre indicatif et gÃ©nÃ©ral sans valeur contractuelle. MalgrÃ© des mises Ã  jour rÃ©guliÃ¨res, le site http://localhost/isep-stimulus/ ne peut Ãªtre tenu responsable de la modification des dispositions administratives et juridiques survenant aprÃ¨s la publication. De mÃªme, le site ne peut Ãªtre tenue responsable de lâ€™utilisation et de lâ€™interprÃ©tation de lâ€™information contenue dans ce site.\r\nL\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques liÃ©s Ã  l\'utilisation de son identifiant et mot de passe. Le site dÃ©cline toute responsabilitÃ©.\r\nLe site http://localhost/isep-stimulus/ ne peut Ãªtre tenu pour responsable dâ€™Ã©ventuels virus qui pourraient infecter lâ€™ordinateur ou tout matÃ©riel informatique de lâ€™Internaute, suite Ã  une utilisation, Ã  lâ€™accÃ¨s, ou au tÃ©lÃ©chargement provenant de ce site.\r\nLa responsabilitÃ© du site ne peut Ãªtre engagÃ©e en cas de force majeure ou du fait imprÃ©visible et insurmontable d\'un tiers.\r\nARTICLE 6 : Liens hypertextes\r\nDes liens hypertextes peuvent Ãªtre prÃ©sents sur le site. Lâ€™Utilisateur est informÃ© quâ€™en cliquant sur ces liens, il sortira du site http://localhost/isep-stimulus/. Ce dernier nâ€™a pas de contrÃ´le sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, Ãªtre responsable de leur contenu.\r\nARTICLE 7 : Cookies\r\nLâ€™Utilisateur est informÃ© que lors de ses visites sur le site, un cookie peut sâ€™installer automatiquement sur son logiciel de navigation.\r\nLes cookies sont de petits fichiers stockÃ©s temporairement sur le disque dur de lâ€™ordinateur de lâ€™Utilisateur par votre navigateur et qui sont nÃ©cessaires Ã  lâ€™utilisation du site http://localhost/isep-stimulus/. Les cookies ne contiennent pas dâ€™information personnelle et ne peuvent pas Ãªtre utilisÃ©s pour identifier quelquâ€™un. Un cookie contient un identifiant unique, gÃ©nÃ©rÃ© alÃ©atoirement et donc anonyme. Certains cookies expirent Ã  la fin de la visite de lâ€™Utilisateur, dâ€™autres restent.\r\nLâ€™information contenue dans les cookies est utilisÃ©e pour amÃ©liorer le site http://localhost/isep-stimulus/.\r\nEn naviguant sur le site, Lâ€™Utilisateur les accepte.\r\nLâ€™Utilisateur doit toutefois donner son consentement quant Ã  lâ€™utilisation de certains cookies.\r\nA dÃ©faut dâ€™acceptation, lâ€™Utilisateur est informÃ© que certaines fonctionnalitÃ©s ou pages risquent de lui Ãªtre refusÃ©es.\r\nLâ€™Utilisateur pourra dÃ©sactiver ces cookies par lâ€™intermÃ©diaire des paramÃ¨tres figurant au sein de son logiciel de navigation.\r\nARTICLE 8 : Publication par lâ€™Utilisateur\r\nLe site permet aux membres de publier les contenus suivants :\r\nQuestions.\r\nDans ses publications, le membre sâ€™engage Ã  respecter les rÃ¨gles de la Netiquette (rÃ¨gles de bonne conduite de lâ€™internet) et les rÃ¨gles de droit en vigueur.\r\nLe site peut exercer une modÃ©ration sur les publications et se rÃ©serve le droit de refuser leur mise en ligne, sans avoir Ã  sâ€™en justifier auprÃ¨s du membre.\r\nLe membre reste titulaire de lâ€™intÃ©gralitÃ© de ses droits de propriÃ©tÃ© intellectuelle. Mais en publiant une publication sur le site, il cÃ¨de Ã  la sociÃ©tÃ© Ã©ditrice le droit non exclusif et gratuit de reprÃ©senter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisÃ©, dans le monde entier, sur tout support (numÃ©rique ou physique), pour la durÃ©e de la propriÃ©tÃ© intellectuelle. Le Membre cÃ¨de notamment le droit d\'utiliser sa publication sur internet et sur les rÃ©seaux de tÃ©lÃ©phonie mobile.\r\nLa sociÃ©tÃ© Ã©ditrice s\'engage Ã  faire figurer le nom du membre Ã  proximitÃ© de chaque utilisation de sa publication.\r\nTout contenu mis en ligne par l\'Utilisateur est de sa seule responsabilitÃ©. L\'Utilisateur s\'engage Ã  ne pas mettre en ligne de contenus pouvant porter atteinte aux intÃ©rÃªts de tierces personnes. Tout recours en justice engagÃ© par un tiers lÃ©sÃ© contre le site sera pris en charge par l\'Utilisateur.\r\nLe contenu de l\'Utilisateur peut Ãªtre Ã  tout moment et pour n\'importe quelle raison supprimÃ© ou modifiÃ© par le site, sans prÃ©avis.\r\n \r\nARTICLE 9 : Droit applicable et juridiction compÃ©tente\r\nLa lÃ©gislation franÃ§aise s\'applique au prÃ©sent contrat. En cas d\'absence de rÃ©solution amiable d\'un litige nÃ© entre les parties, les tribunaux franÃ§ais seront seuls compÃ©tents pour en connaÃ®tre.\r\nPour toute question relative Ã  lâ€™application des prÃ©sentes CGU, vous pouvez joindre lâ€™Ã©diteur aux coordonnÃ©es inscrites Ã  lâ€™ARTICLE 1.');

-- --------------------------------------------------------

--
-- Structure de la table `faq_questions`
--

DROP TABLE IF EXISTS `faq_questions`;
CREATE TABLE IF NOT EXISTS `faq_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `supervisor_id` (`supervisor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `supervisor_id`, `title`, `answer`, `subject`, `visible`) VALUES
(62, NULL, 'Sujet1', 'Message1', 'Question1', 1),
(63, NULL, 'Sujet2', 'message2', 'Question2', 1),
(64, NULL, 'Sujet3', 'message3', 'Question3', 1),
(65, NULL, 'Sujet', 'message', 'Question', 0);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `id_Question` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `object`, `content`, `date`, `id_Question`) VALUES
(1, NULL, 'ezaeazeaz', 'eazeaeae', '2020-05-30 17:30:26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `supervisors`
--

DROP TABLE IF EXISTS `supervisors`;
CREATE TABLE IF NOT EXISTS `supervisors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `reaction_time` datetime DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `test3_to_do` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supervisor_id` (`supervisor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `supervisor_id`, `first_name`, `last_name`, `email`, `password`, `birthday_date`, `company`, `employee_number`, `gender`, `profile_picture`, `number_of_tests_done`, `needs_tests`, `isBan`, `test1_to_do`, `test2_to_do`, `test3_to_do`) VALUES
(1, NULL, 'Caroline', 'Yan', 'ycaroline1999@gmail.com', '$2y$10$GqTIaPEL8jLOsI9UUkLZ0.Mgp5eDvyACm2pyyAzKBmMCbhi5m0jzW', '1999-12-23', NULL, NULL, 'A', NULL, NULL, NULL, 0, 0, 0, 0),
(2, NULL, 'Cyprian', 'Cunin', 'ccunin@isep.fr', 'cypriancunin', '2020-06-01', 'Stimulus', 10111, 'M', NULL, NULL, NULL, 0, 0, 0, 0),
(3, NULL, 'Julien', 'Colombain', 'jcolombain@isep.fr', 'jcolombain', '1999-11-11', 'Stimulus', 10222, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Célia', 'Houlette', 'choulette@isep.fr', 'choulette', '1999-01-01', 'Stimulus', 10333, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Jean', 'Dupont', 'dupont@jean.fr', 'dupontjean', '1988-02-02', 'Dupont Corp', 12222, 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Marie', 'Dupont', 'marie@anne.com', NULL, '1987-03-03', 'Dupont Corp', 33333, 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
