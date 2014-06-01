-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 06 Mai 2014 à 06:18
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `style` varchar(45) DEFAULT NULL,
  `description` text,
  `mail` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`id`, `login`, `password`, `name`, `style`, `description`, `mail`, `photo`) VALUES
(1, 'thotel', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Tokio Hotel', 'Rock', 'Tokio Hotel est un groupe de pop-rock originaire de Magdebourg, en Allemagne.', 'th@gmail.com', NULL),
(2, 'muse', 'ae5b05ab3cd47f4a88d7b0da49eb96fd034406d0', 'Muse', 'Pop', 'Muse est un groupe originaire de Teignmouth, Devon en Angleterre. Apparu en 1994, Matthew Bellamy (chant, guitare, piano), Christopher Wolstenholme (basse, chant) et Dominic Howard (batterie, percussions) forment le trio du groupe.', 'tbalmette@gmail.com', 'photo2.jpg'),
(3, 'ELO', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Electric Light Orchestra', 'Rock', 'Electric Light Orchestra (ELO), est un groupe de rock britannique originaire de Birmingham. Sa musique se veut un croisement d''influences classiques, rock et pop.', 'elo@mail.com', 'photo1.jpg'),
(4, 'TCHOU', 'ae5b05ab3cd47f4a88d7b0da49eb96fd034406d0', 'Shakira', 'Rock', 'wESSSH', 'tba@gmail.com', 'ledome-810j.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `commentaire` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `membre_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `artiste_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_avis_membre1_idx` (`membre_id`),
  KEY `fk_avis_salle1_idx` (`salle_id`),
  KEY `fk_avis_artiste1_idx` (`artiste_id`),
  KEY `fk_avis_concert1_idx` (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie forum`
--

CREATE TABLE IF NOT EXISTS `categorie forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `artist` varchar(45) DEFAULT NULL,
  `salle` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `login`, `artist`, `salle`, `date`, `description`, `price`) VALUES
(1, NULL, '$artist', '$sale', '$date', '$description', 0);

-- --------------------------------------------------------

--
-- Structure de la table `extrait`
--

CREATE TABLE IF NOT EXISTS `extrait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `duree` decimal(20,0) DEFAULT NULL,
  `album` varchar(45) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `artiste` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_extrait_artiste_idx` (`artiste_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `extrait`
--

INSERT INTO `extrait` (`id`, `nom`, `duree`, `album`, `artiste_id`, `fichier`, `artiste`) VALUES
(13, 'Mario Theme', '4', 'Super Mario Bros', NULL, 'SuperMarioBrosTheme.mp3', NULL),
(14, 'MarioBros', '2', 'SuperMarioBros', NULL, 'SuperMarioBrosTheme.mp3', '56'),
(17, 'Mario Theme', '0', 'Super Mario Bros', NULL, 'SuperMarioBrosTheme.mp3', '57');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `zipcode` varchar(5) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `password`, `zipcode`, `mail`, `photo`, `name`) VALUES
(9, 'Titi', 'isep', '75006', 'isep@isep.fr', NULL, NULL),
(31, 'Manuel', 'adc16fa41a38b174232f206e0b2bd006baaace68', '91240', 'azert@gmail.com', NULL, NULL),
(33, 'isepien', '05d1a295fb45fd8b022034a620f4869fce62572f', '75006', 'titi@gmail.com', NULL, NULL),
(35, 'Guigui91', 'fa7f6473b1cbf2515e7fa08a0ead39e925c7b65a', '91260', 'titi@gmail.com', NULL, NULL),
(37, 'yvette', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', '91260', 'tba@gmail.com', NULL, NULL),
(40, 'login', 'd83177daa22aeba3081abf055f98fd39cb8ecf4a', '11111', 'login@email.com', NULL, NULL),
(41, 'Donald', '30f6508881e0f0ce26e49047c929e3b5696e75b7', '11111', 'login@email.com', NULL, NULL),
(42, 'pierre', 'ff019a5748a52b5641624af88a54a2f0e46a9fb5', '91260', 'pierre@pierre.fr', NULL, NULL),
(43, 'piere', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'azert@gmail.com', NULL, NULL),
(44, 'vincent', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', '91240', 'patate@gmail.com', NULL, NULL),
(48, 'benoit', 'ecd1f14f7c1c6dc7a40210bdcc3810e0107ecbc8', '91236', 'benoit@benoit.com', '', NULL),
(51, 'mario', 'addb47291ee169f330801ce73520b96f2eaf20ea', '91240', 'mario@mario.com', '', NULL),
(54, 'picsou', 'e333d1ce5f25b2d2ac0a06ee4310d92dc9dbe37b', '91260', 'pierre@pierre.fr', 'photo2.jpg', NULL),
(56, 'Cocacola', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'soda@coke.com', 'coca.jpg', NULL),
(57, 'DonaldDuck', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '34645', 'donald@duck.com', 'donald.jpg', NULL),
(58, 'Potatoes', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91240', 'tba@gmail.com', 'photo3.JPG', NULL),
(59, 'tbalmette', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault'),
(61, 'Thibault', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault B');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `sujet` varchar(45) DEFAULT NULL,
  `membre_id` int(11) NOT NULL,
  `membre_id1` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_message_membre1_idx` (`membre_id`),
  KEY `fk_message_membre2_idx` (`membre_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `date` datetime DEFAULT NULL,
  `topic_id` int(11) NOT NULL,
  `membre_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `artiste_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_messages_topic1_idx` (`topic_id`),
  KEY `fk_messages_membre1_idx` (`membre_id`),
  KEY `fk_messages_salle1_idx` (`salle_id`),
  KEY `fk_messages_artiste1_idx` (`artiste_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL,
  `membre_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_participation_membre1_idx` (`membre_id`),
  KEY `fk_participation_concert1_idx` (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `artiste_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photo_artiste1_idx` (`artiste_id`),
  KEY `fk_photo_salle1_idx` (`salle_id`),
  KEY `fk_photo_concert1_idx` (`concert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `adress` varchar(45) DEFAULT NULL,
  `description` text,
  `hours` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `voie` int(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Pseudo_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `login`, `password`, `name`, `capacity`, `zipcode`, `mail`, `phone`, `adress`, `description`, `hours`, `photo`, `voie`, `ville`, `pays`) VALUES
(1, 'olympia', '08cf32d7f7bbd7395535521042d96127cd68cf09', 'Olympia', 1996, 75009, 'olympia@salle.com', '012595939', '28 Boulevard des Capucines', 'L Olympia est une salle de spectacle. C''est le plus ancien music-hall de Paris encore existant.', '16h-19h', 'olympia-hall.gif', NULL, NULL, NULL),
(2, 'Bercy', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Bercy', 25000, 75000, 'bercy@mail.com', '0123456789', '8 Boulevard de Bercy', 'Le palais omnisports de Paris-Bercy est une salle polyvalente', '10h - 20h', 'bercy.jpg', NULL, NULL, NULL),
(3, 'casapaco', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Casa Paco', 50, 75000, 'casa@mail.com', '0123456789', '13 Rue de Bassano', 'La Casa Paco est un bar typique espagnol, toute la chaleur, on retrouve la bonne humeur de Madrid dans ce bar restaurant.', '17h - 20h', 'casa.jpg', NULL, NULL, NULL),
(7, 'dome', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'LeDÃ´meDeMarseille', 8500, 13004, 'dome@email.com', '3367894560', '48 Avenue de Saint-Just', NULL, '14h-15h', 'ledome-810j.jpg', NULL, NULL, NULL),
(8, 'Cocacola', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Weshou', 6543, 91260, 'azert@gmail.com', '3367894560', 'Hihi rue du troc', 'WESH', '14h', 'donald.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE IF NOT EXISTS `suivre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_id` int(11) NOT NULL,
  `salle_id` int(11) NOT NULL,
  `artiste_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_suivre_membre1_idx` (`membre_id`),
  KEY `fk_suivre_salle1_idx` (`salle_id`),
  KEY `fk_suivre_artiste1_idx` (`artiste_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `nombre_message` int(11) DEFAULT NULL,
  `creation` date DEFAULT NULL,
  `categorie forum_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topic_categorie forum1_idx` (`categorie forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_avis_artiste1` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avis_concert1` FOREIGN KEY (`concert_id`) REFERENCES `concert` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avis_membre1` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avis_salle1` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `extrait`
--
ALTER TABLE `extrait`
  ADD CONSTRAINT `fk_extrait_artiste` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_membre1` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_membre2` FOREIGN KEY (`membre_id1`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_artiste1` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_messages_membre1` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_messages_salle1` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_messages_topic1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk_participation_concert1` FOREIGN KEY (`concert_id`) REFERENCES `concert` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participation_membre1` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_artiste1` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_photo_concert1` FOREIGN KEY (`concert_id`) REFERENCES `concert` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_photo_salle1` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `fk_suivre_artiste1` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_suivre_membre1` FOREIGN KEY (`membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_suivre_salle1` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `fk_topic_categorie forum1` FOREIGN KEY (`categorie forum_id`) REFERENCES `categorie forum` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
