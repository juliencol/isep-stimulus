-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 05, 2020 at 02:45 AM
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
(13, 'dupont@jean.fr');

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cgu`
--

INSERT INTO `cgu` (`id`, `content`) VALUES
(21, 'Conditions générales d\'utilisation\r\nEn vigueur au 03/06/2020\r\n \r\nLes présentes conditions générales d\'utilisation (dites « CGU ») ont pour objet l\'encadrement juridique des modalités de mise à disposition du site et des services par STIMULUS et de définir les conditions d’accès et d’utilisation des services par « l\'Utilisateur ».\r\nLes présentes CGU sont accessibles sur le site à la rubrique «CGU».\r\nToute inscription ou utilisation du site implique l\'acceptation sans aucune réserve ni restriction des présentes CGU par l’utilisateur. Lors de l\'inscription sur le site via le Formulaire d’inscription, chaque utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : « Je reconnais avoir lu et compris les CGU et je les accepte ».\r\nEn cas de non-acceptation des CGU stipulées dans le présent contrat, l\'Utilisateur se doit de renoncer à l\'accès des services proposés par le site.\r\nhttp://localhost/isep-stimulus/ se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes CGU.\r\nArticle 1 : Les mentions légales\r\nL’édition et la direction de la publication du site http://localhost/isep-stimulus/ est assurée par Patrick Wang, domicilié 28 rue notre dame des champs.\r\nAdresse e-mail patrick.wang@isep.fr.\r\nL\'hébergeur du site http://localhost/isep-stimulus/ est la société isep-stimulus, dont le siège social est situé au 28 rue notre dame des champs.\r\n\r\nARTICLE 2 : Accès au site\r\nLe site http://localhost/isep-stimulus/ permet à l\'Utilisateur un accès gratuit aux services suivants :\r\nLe site internet propose les services suivants :\r\nTests psychotechniques sur des candidats\r\nLe site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l\'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.\r\nL’Utilisateur non membre n\'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le formulaire. En acceptant de s’inscrire aux services réservés, l’Utilisateur membre s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email.\r\nPour accéder aux services, l’Utilisateur doit ensuite s\'identifier à l\'aide de son identifiant et de son mot de passe qui lui seront communiqués après son inscription.\r\nTout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable.\r\nTout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n\'engage pas la responsabilité de http://localhost/isep-stimulus/. Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur de toute interruption ou suspension de service, même sans préavis.\r\nL\'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de l’éditeur communiqué à l’ARTICLE 1.\r\nARTICLE 3 : Collecte des données\r\nLe site assure à l\'Utilisateur une collecte et un traitement d\'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro 0123456789.\r\nEn vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accès, de rectification, de suppression et d\'opposition de ses données personnelles. L\'Utilisateur exerce ce droit :\r\n· par mail à l\'adresse mail support@stimulus.fr\r\n· par voie postale au 28 rue notre dame des champs ;\r\n· via un formulaire de contact ;\r\n \r\n· via son espace personnel ;\r\nARTICLE 4 : Propriété intellectuelle\r\nLes marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l\'objet d\'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d\'auteur.\r\nL\'Utilisateur doit solliciter l\'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus. Il s\'engage à une utilisation des contenus du site dans un cadre strictement privé, toute utilisation à des fins commerciales et publicitaires est strictement interdite.\r\nToute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété intellectuelle.\r\nIl est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.\r\n \r\nARTICLE 5 : Responsabilité\r\nLes sources des informations diffusées sur le site http://localhost/isep-stimulus/ sont réputées fiables mais le site ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.\r\nLes informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jour régulières, le site http://localhost/isep-stimulus/ ne peut être tenu responsable de la modification des dispositions administratives et juridiques survenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.\r\nL\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques liés à l\'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.\r\nLe site http://localhost/isep-stimulus/ ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site.\r\nLa responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d\'un tiers.\r\nARTICLE 6 : Liens hypertextes\r\nDes liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces liens, il sortira du site http://localhost/isep-stimulus/. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.\r\nARTICLE 7 : Cookies\r\nL’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel de navigation.\r\nLes cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site http://localhost/isep-stimulus/. Les cookies ne contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier quelqu’un. Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme. Certains cookies expirent à la fin de la visite de l’Utilisateur, d’autres restent.\r\nL’information contenue dans les cookies est utilisée pour améliorer le site http://localhost/isep-stimulus/.\r\nEn naviguant sur le site, L’Utilisateur les accepte.\r\nL’Utilisateur doit toutefois donner son consentement quant à l’utilisation de certains cookies.\r\nA défaut d’acceptation, l’Utilisateur est informé que certaines fonctionnalités ou pages risquent de lui être refusées.\r\nL’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son logiciel de navigation.\r\nARTICLE 8 : Publication par l’Utilisateur\r\nLe site permet aux membres de publier les contenus suivants :\r\nQuestions.\r\nDans ses publications, le membre s’engage à respecter les règles de la Netiquette (règles de bonne conduite de l’internet) et les règles de droit en vigueur.\r\nLe site peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’en justifier auprès du membre.\r\nLe membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le site, il cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété intellectuelle. Le Membre cède notamment le droit d\'utiliser sa publication sur internet et sur les réseaux de téléphonie mobile.\r\nLa société éditrice s\'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication.\r\nTout contenu mis en ligne par l\'Utilisateur est de sa seule responsabilité. L\'Utilisateur s\'engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge par l\'Utilisateur.\r\nLe contenu de l\'Utilisateur peut être à tout moment et pour n\'importe quelle raison supprimé ou modifié par le site, sans préavis.\r\n \r\nARTICLE 9 : Droit applicable et juridiction compétente\r\nLa législation française s\'applique au présent contrat. En cas d\'absence de résolution amiable d\'un litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître.\r\nPour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux coordonnées inscrites à l’ARTICLE 1.');

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
(62, NULL, 'Sujet n°23', 'Il faut cliquer sur le bouton &quot;Editer&quot; dans son profil.', 'Comment éditer un profil ?', 1);

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
-- Table structure for table `test_codes`
--

CREATE TABLE `test_codes` (
  `id` int(11) NOT NULL,
  `code` int(4) NOT NULL,
  `test_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_codes`
--

INSERT INTO `test_codes` (`id`, `code`, `test_type`) VALUES
(1, 1111, 1),
(2, 2222, 2),
(3, 3333, 3);

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `id` int(11) NOT NULL,
  `test_code` int(11) NOT NULL,
  `test_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_results`
--

INSERT INTO `test_results` (`id`, `test_code`, `test_type`, `user_id`, `score`, `date`) VALUES
(1, 1234, 1, 10554, 5, '2020-06-01 10:22:10'),
(2, 1234, 1, 10554, 3, '2020-06-01 10:37:43'),
(3, 1234, 1, 10554, 6, '2020-06-01 10:54:09'),
(4, 1234, 1, 10554, 4, '2020-06-01 11:06:09'),
(5, 1234, 1, 10554, 4, '2020-06-01 11:39:24'),
(6, 1234, 1, 10554, 3, '2020-06-01 11:46:21'),
(7, 1234, 1, 10554, 5, '2020-06-01 11:48:02'),
(8, 1234, 1, 10554, 4, '2020-06-01 12:09:10'),
(9, 1234, 1, 10554, 6, '2020-06-01 12:09:55'),
(10, 1234, 1, 10554, 3, '2020-06-01 12:14:36'),
(11, 1234, 1, 10554, 6, '2020-06-01 12:19:22'),
(12, 1234, 2, 10554, 33, '2020-06-01 12:22:14'),
(13, 1234, 3, 10554, 4, '2020-06-01 12:24:59'),
(14, 1234, 3, 10554, 6, '2020-06-01 12:28:09'),
(15, 1234, 2, 10554, 49, '2020-06-01 12:28:22'),
(16, 1234, 2, 10554, 59, '2020-06-01 12:28:32'),
(17, 1234, 3, 10554, 6, '2020-06-01 12:28:48'),
(18, 1234, 3, 10554, 4, '2020-06-01 12:28:57');

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
-- Indexes for table `test_codes`
--
ALTER TABLE `test_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `banned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
-- AUTO_INCREMENT for table `test_codes`
--
ALTER TABLE `test_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_results`
--
ALTER TABLE `test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
