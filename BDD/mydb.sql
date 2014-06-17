-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 17 Juin 2014 à 18:48
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
-- Structure de la table `actu`
--

CREATE TABLE IF NOT EXISTS `actu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artiste_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `artiste_name` varchar(255) DEFAULT NULL,
  `salle_name` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`id`, `artiste_id`, `salle_id`, `artiste_name`, `salle_name`, `titre`, `contenu`, `date`) VALUES
(9, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' Bonjour un concert bientÃ´t ici !', '0000-00-00 00:00:00'),
(10, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' coucou', '0000-00-00 00:00:00'),
(11, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' COUCOU', '0000-00-00 00:00:00'),
(13, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' coucou les loulous', '0000-00-00 00:00:00'),
(16, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' Alors, vous venez ?', '2014-05-22 00:00:00'),
(17, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' coucou', '2014-05-22 00:00:00'),
(22, 3, 0, 'Electric Light Orchestra', '', 'Concert bientÃ´t !', ' Bonjour ! Vous allez bien ? Vous savez que nous allons bientÃ´t nous reformer !!!!', '2014-05-27 00:00:00'),
(23, 6, 0, 'Lordi', '', 'Concert bientÃ´t !', ' Bonjour Ã  tous, nous allons bientÃ´t lancer notre tournÃ©e !', '2014-06-05 00:00:00'),
(24, 8, 0, 'Queen', '', 'Concert hommage', 'Bonjour nous organisons un concert hommage Ã  Freddie Mercury trÃ¨s prochainement dans une grande salle parisienne, venez nombreux ! ', '2014-06-05 00:00:00'),
(25, 8, 0, 'Queen', '', 'Concert hommage', 'Concert hommage trÃ¨s bientÃ´t', '2014-06-05 00:00:00'),
(28, 3, 0, 'Electric Light Orchestra', '', 'Rock en Seine : nous y serons !', ' Nous avons le plaisir de vous annoncer que nous serons prÃ©sents cette annÃ©e au festival de la musique Rock en Seine qui se dÃ©roulera cet Ã©tÃ© dans la rÃ©gion Parisienne. Venez y nombreux pour Ã©couter nos nouveaux morceaux et dÃ©couvrir nos performances Live.', '2014-06-08 00:00:00'),
(29, 3, 0, 'Electric Light Orchestra', '', 'Nouvel', 'album !', '2014-06-09 23:30:57'),
(30, 3, 0, 'Electric Light Orchestra', '', 'Nouvel album', 'Bonjour, nous pouvons vous annoncer la sortie de notre nouvel album ! ', '2014-06-09 23:31:42'),
(32, 3, 0, 'Electric Light Orchestra', '', 'Concert bientÃ´t !', ' Alors est-ce que Ã§a fonction l''ami ?', '2014-06-10 11:01:18'),
(36, 10, 0, 'Jennifer Lopez', '', 'JLO On Tour', 'Bonjour ! Je vous annonce que je serai trÃ¨s bientÃ´t en concert Ã  Marseille au DÃ´me ! Venez nombreux ! ', '2014-06-14 23:15:03'),
(40, 0, 1, '', 'Olympia', 'Polo en concert', 'Polo sera en concert !', '2014-06-17 17:42:25'),
(41, 0, 12, '', 'L''AÃ©ronef', 'Concert hommage', 'Michael Jackson nous a quittÃ© il y a 5 ans, concert hommage en approche !', '2014-06-17 19:51:27');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `mail`) VALUES
(1, 'tbalmette@gmail.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`id`, `login`, `password`, `name`, `style`, `description`, `mail`, `photo`) VALUES
(1, 'thotel', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Tokio Hotel', 'Rock', 'Tokio Hotel est un groupe de pop-rock originaire de Magdebourg, en Allemagne.', 'th@gmail.com', '1.jpg'),
(3, 'ELO', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Electric Light Orchestra', 'Pop', 'Electric Light Orchestra (ELO) est un groupe de rock britannique originaire de Birmingham. Sa musique se veut un croisement d''influences classiques, rock et pop.', 'elo@gmail.com', '3.jpg'),
(4, 'TCHOU', 'ae5b05ab3cd47f4a88d7b0da49eb96fd034406d0', 'Shakira', 'Rock', 'wESSSH', 'tba@gmail.com', '1.jpg'),
(5, 'Europe', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Europa', 'Rap', 'Eurovisiooooooo', 'elysee@gmail.com', '5.jpg'),
(6, 'Lordi', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Lordi', 'Rock', 'Groupe de hard rock finlandais', 'lordi@gmail.com', '6.jpg'),
(7, 'NTM', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'NTM', 'Rap', 'NTM est un groupe de rap fondÃ© en 1990', 'tba@gmail.com', '7.jpg'),
(8, 'queen', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Queen', 'Rock', 'Queen est un groupe de rock britannique, formÃ© en 1970 Ã  Londres par Freddie Mercury, Brian May et Roger Taylor.', 'queen@isep.fr', '8.png'),
(9, 'orelsan', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Orelsan', 'Rap', 'Rappeur franÃ§ais.', 'orelsan@gmail.com', '9.jpg'),
(10, 'lopez', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Jennifer Lopez', 'Pop', 'Jennifer Lynn Lopez, plus connue sous le nom de Jennifer Lopez et souvent surnommÃ©e J.Lo, est une artiste amÃ©ricaine notamment actrice, chanteuse, danseuse et productrice nÃ©e le 24 juillet 1969 Ã  Castle Hill, dans le quartier du Bronx Ã  New York.', 'lopez@mail.com', '10.jpg'),
(12, 'muse', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Muse', 'Rock', 'Muse est un groupe de rock alternatif originaire de Teignmouth, Devon en Angleterre. Apparu sur la scÃ¨ne musicale en 1994, le trio est composÃ© de Matthew Bellamy (chant, guitare, piano), Christopher Wolstenholme (basse, chant, chÅ“urs) et Dominic Howard (batterie, percussions).', 'mario@mario.com', '12.jpg'),
(13, 'griffons', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Les Griffons', 'MÃ©tal', 'Les Griffons est un groupe de mÃ©tal anglais.', 'griffons@mail.com', '13.jpg'),
(14, 'polo', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Polo le guitariste', 'VariÃ©tÃ©', 'Je suis actuellement guitariste. Je me suis dÃ©jÃ  produit dans des salles.', 'polo@mail.fr', '14.jpg');

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
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `contenu` text,
  `membre_id` int(11) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `concert_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `contenu` (`contenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `date`, `contenu`, `membre_id`, `artiste_id`, `salle_id`, `concert_id`) VALUES
(4, '2014-06-09 00:00:00', ' Un excellent groupe', 59, 8, 0, 0),
(5, '2014-06-09 00:00:00', ' Ca fonctionne ?', 59, 3, 0, 0),
(6, '2014-06-09 00:00:00', ' Ensemble nous gagnerons !', 59, 6, 0, 0),
(7, '2014-06-09 00:00:00', ' Vive Lordi !', 101, 6, 0, 0),
(8, '2014-06-09 00:00:00', ' YEP', 59, 8, 0, 0),
(9, '2014-06-09 00:00:00', ' Oui !', 56, 3, 0, 0),
(10, '2014-06-09 00:00:00', ' Oui?', 56, 3, 0, 0),
(11, '2014-06-09 00:00:00', ' Oui !', 56, 3, 0, 0),
(12, '2014-06-09 00:00:00', ' Oui ?', 56, 3, 0, 0),
(13, '2014-06-09 00:00:00', ' Pourquoi !', 56, 3, 0, 0),
(14, '2014-06-09 00:00:00', 'Pourquoi ? ', 56, 2, 0, 0),
(15, '2014-06-09 00:00:00', ' Ca fonctionne !', 56, 2, 0, 0),
(16, '2014-06-09 00:00:00', '  ', 56, 1, 0, 0),
(17, '2014-06-09 00:00:00', ' Ah bah Ã§a fonctionne !', 56, 1, 0, 0),
(18, '2014-06-09 00:00:00', ' Ouaiiis !', 40, 7, 0, 0),
(19, '2014-06-09 00:00:00', ' Ouaiiis !', 40, 7, 0, 0),
(20, '2014-06-09 00:00:00', ' Hi Shakira ! I love your work !', 40, 4, 0, 0),
(21, '2014-06-09 00:00:00', ' Vivement votre nouvel album !', 40, 3, 0, 0),
(22, '2014-06-09 00:00:00', ' Mr Blue Sky !', 40, 3, 0, 0),
(23, '2014-06-09 00:00:00', ' En accoustique version !', 40, 3, 0, 0),
(24, '2014-06-09 23:11:30', 'Voila', 40, 3, 0, 0),
(25, '2014-06-09 23:17:35', ' Oui !', 40, 3, 0, 0),
(26, '2014-06-09 23:19:04', ' oui', 40, 3, 0, 0),
(27, '2014-06-09 23:50:29', ' oui', 3, 3, 0, 0),
(28, '2014-06-09 23:50:44', ' oui', 3, 3, 0, 0),
(29, '2014-06-09 23:53:03', ' oui', 56, 3, 0, 0),
(30, '2014-06-09 23:58:18', ' oui', 56, 3, 0, 0),
(31, '2014-06-09 23:58:22', ' oui', 56, 3, 0, 0),
(32, '2014-06-09 23:58:24', ' oui', 56, 3, 0, 0),
(33, '2014-06-10 00:09:54', 'Jaime', 56, 8, 0, 0),
(38, '2014-06-10 11:02:26', 'J''adore votre groupe !', 56, 8, 0, 0),
(39, '2014-06-10 12:45:49', 'Coucou', 59, 6, 0, 0),
(40, '2014-06-10 15:06:08', 'Wesh wesh', 59, 6, 0, 0),
(41, '2014-06-12 00:01:21', 'On se rapproche !', 59, 8, 0, 0),
(45, '2014-06-14 21:10:27', 'Je t''adore JLO !', 40, 10, 0, 0),
(50, '2014-06-15 22:47:12', 'A quand un concert ?', 59, 10, 0, 0),
(51, '2014-06-16 20:23:51', 'Bonjour', 37, 3, 0, 0),
(52, '2014-06-17 17:30:22', 'hÃ¢te de vous voir en live !!!!!!!', 57, 14, 0, 0),
(56, '2014-06-17 19:30:23', 'Marseille la ville de toutes les musiques !', 59, 0, 7, 0),
(57, '2014-06-17 19:31:31', 'Un endroit calme et trÃ¨s sympa !', 59, 0, 3, 0),
(58, '2014-06-17 19:32:30', 'Lordi Ã  Paris, mon rÃªve !', 59, 0, 0, 36);

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artiste` varchar(45) DEFAULT NULL,
  `salle` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `valider` int(11) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `artiste`, `salle`, `date`, `description`, `price`, `name`, `valider`, `artiste_id`, `salle_id`) VALUES
(6, 'Europa', 'Olympia', '2014-10-04', 'Un petit concert bien sympa dans une salle bien sympa aussi', 1240, 'Wesh in town 2', 1, 5, 1),
(7, 'Europa', 'Olympia', '2014-05-15', 'Un petit concert bien sympa dans une salle bien sympa aussi', 0, 'Rockooooo', 1, 5, 1),
(8, 'Europa', 'Olympia', '2014-05-30', 'Un petit concert bien sympa dans une salle bien sympa aussi', 0, 'Shakira', 1, 5, 1),
(9, 'Europa', 'Olympia', '2014-05-16', 'Un petit concert bien sympa dans une salle bien sympa aussi', 0, 'Rififi', 1, 5, 1),
(10, 'Europa', 'Olympia', '2014-05-16', 'Un petit concert bien sympa dans une salle bien sympa aussi', 0, 'Rififi', 1, 5, 1),
(11, 'Europa', 'Olympia', '2014-05-10', 'Didi en live', 0, 'Didi live', 1, 5, 1),
(12, 'Europa', 'Olympia', '2014-05-15', 'Une troupe', 0, 'Troupe en live', 1, 5, 1),
(13, 'Europa', 'Olympia', '2014-08-09', 'Wesh in town 5', 0, 'Wesh in town 5', 1, 5, 1),
(14, 'Europa', 'Olympia', '2014-05-12', 'Wesh in town 4', 0, 'Wesh in town 4', 1, 5, 1),
(15, 'Europa', 'Olympia', '2014-05-25', 'Une troupe en live trop bien', 0, 'Une troupe en live', 1, 5, 1),
(16, 'Europa', 'Olympia', '2014-05-09', 'Un super concert', 0, 'Super concert test', 1, 5, 1),
(17, 'Europa', 'Olympia', '2014-05-25', 'Un petit concert bien sympa dans une salle bien sympa aussi', 0, 'Shakira', 1, 5, 1),
(20, 'Europa', 'Bercy', '2014-08-16', 'Wahou trop bien', 0, 'Hija', 1, 5, 2),
(21, 'Europa', 'Casa Paco', '2014-08-08', 'Un petit concert bien sympa dans une salle bien', 135, 'Rock My Gig', 0, 5, 3),
(22, 'Lordi', 'Olympia', '2014-05-15', 'Un petit concert bien sympa dans une salle bien', 0, 'Eurovision', 1, 6, 1),
(23, 'Lordi', 'Weshou', '2014-05-15', 'Lordi revient en concert tout proche de chez ', 0, 'Eurovision', 1, 6, 8),
(24, 'Electric Light Orchestra', 'Olympia', '2014-05-07', 'Electric Light Orchestra se reforme et arrive en concert Ã  Olympia ! Venez nombreux!', 0, 'Reformation ELO', 1, 3, 1),
(25, 'Electric Light Orchestra', 'LeDÃ´meDeMarseille', '2014-05-16', 'Un concert trop gÃ©nial prÃ¨s de chez toi en plus ! Viens stp ! Allez viens !', 0, 'Un concert au top', 1, 3, 7),
(26, 'Electric Light Orchestra', 'Bercy', '2014-07-14', 'Electric Light Orchestra se reforme et arrive en concert Ã  Bercy pour le 14 Juillet prochain ! Venez !', 135, 'ELO en concert Ã  Bercy', 1, 3, 2),
(27, 'Lordi', 'Bercy', '2014-06-29', 'Lordi is back !', 0, 'Wesh in town 8', 1, 6, 2),
(28, 'Electric Light Orchestra', 'Olympia', '2014-06-13', 'We are back out of the blue', 0, 'Out of the blue', 1, 3, 1),
(29, 'Lordi', 'Olympia', '2014-06-05', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi in Paris', 1, 6, 1),
(30, 'Lordi', 'Bercy', '2014-06-05', 'Un petit concert bien sympa dans une salle bien', 0, 'Eurovision', 1, 6, 2),
(31, 'Lordi', 'LeDÃ´meDeMarseille', '2014-06-05', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi in Marseille', 1, 6, 7),
(32, 'Lordi', 'Bercy', '2014-06-17', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi in Bercy', 1, 6, 2),
(33, 'Lordi', 'Eurovision', '2014-06-17', 'Un petit concert bien sympa dans une salle bien', 0, 'Eurovision', 1, 6, 9),
(34, 'Lordi', 'Bercy', '2014-06-14', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi en live', 1, 6, 2),
(35, 'Lordi', 'Weshou', '2014-06-14', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi en live', 1, 6, 8),
(36, 'Lordi', 'Casa Paco', '2014-06-14', 'Un petit concert bien sympa dans une salle bien', 0, 'Lordi en live', 1, 6, 3),
(40, 'Orelsan', 'LeDÃ´meDeMarseille', '2013-12-30', 'Orelsan en tournÃ©e Ã  Marseille.', 0, 'Orelsan en tournÃ©e', 1, 9, 7),
(41, 'Orelsan', 'Olympia', '2014-06-22', 'Les vieux loups arrivent !', 0, 'Les vieux loups #3', 1, 9, 1),
(42, 'Orelsan', 'Olympia', '2014-06-05', 'Les vieux loups font leur re-re-retour.', 0, 'Les vieux loups #4', 1, 9, 1),
(43, 'Electric Light Orchestra', 'Olympia', '2014-05-29', 'Les vieux loups sont de retour', 0, 'Les vieux loups #10', 1, 3, 1),
(44, 'Jennifer Lopez', 'Le DÃ´me De Marseille', '2014-06-19', 'Jennifer Lopez vient Ã  Marseille pou la sortie de son nouvel album, un concert Ã©vÃ©nement au DÃ´me !', 100, 'JLO On Tour', 1, 10, 7),
(45, 'Jennifer Lopez', 'l''AÃ©ronef', '2014-06-27', 'Dans le cadre de sa tournÃ©e europÃ©enne, Jennifer Lopez sera en concert dans le nord Ã  l''AÃ©ronef !', 123, 'JLO On Tour #2', 1, 10, 12),
(46, 'Queen', 'Le DÃ´me De Marseille', '2014-07-11', 'Concert hommage avec les membres encore vivants de Queen', 124, 'Concert hommage', 1, 8, 7),
(47, 'Les Griffons', 'Casa Paco', '2014-06-21', 'Pour la fÃªte de la musique, les Griffons seront en concert Ã  Casa Paco', 20, 'Griffons en live', 1, 13, 3),
(48, '', 'O2 Arena (Londres)', '2014-06-05', 'Shakira is living in London', 1240, 'Shaki live in London', 0, 4, 8),
(49, 'Polo le guitariste', 'Olympia', '2014-06-21', 'Guitariste solo', 5, 'Polo le guitariste live', 1, 14, 1),
(50, 'Polo le guitariste', 'Olympia', '2014-06-19', 'BientÃ´t la fin ?', 123, 'BientÃ´t la fin', 1, 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `extrait`
--

CREATE TABLE IF NOT EXISTS `extrait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `album` varchar(45) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `artiste` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_extrait_artiste_idx` (`artiste_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `extrait`
--

INSERT INTO `extrait` (`id`, `nom`, `album`, `artiste_id`, `fichier`, `artiste`) VALUES
(14, 'MarioBros', 'SuperMarioBros', NULL, 'SuperMarioBrosTheme.mp3', '56'),
(17, 'Mario Theme', 'Super Mario Bros', NULL, 'SuperMarioBrosTheme.mp3', '57'),
(20, 'Hard Rock', 'Rock&Roll', NULL, 'musique_du_20140509211351.mp3', '57'),
(32, 'Hard Rock Hallelujah', 'The Arockalypse', NULL, '32_6.mp3', '6'),
(34, 'Mario Theme', 'Super Mario Bros', 6, '', NULL),
(37, 'Nos premiÃ¨res annÃ©es', 'The Arockalypse', NULL, '37_6.mp3', '6'),
(38, 'Mario Theme', 'Super Mario Bros', NULL, '38_6.mp3', '6'),
(39, 'Mes premiÃ¨res annÃ©es', 'Moi moi', NULL, '39_14.mp3', '14');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `reponse` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(3, 'L''inscription Ã  Highway to bands est-elle payante ?', 'Non, l''accÃ¨s au site Internet est entiÃ¨rement gratuit'),
(4, 'Comment crÃ©er un compte ?', 'Vous pouvez crÃ©er un compte &quot;membre&quot;, &quot;artiste&quot; ou &quot;salle&quot; en fonction de ce que vous souhaitez faire sur Highwaytobands.com, pour plus d''informations, cliquez sur &quot;Inscription&quot; !'),
(5, 'Puis-je vous contacter ?', 'Vous pouvez ! Pour cela, rendez-vous dans la section &quot;Contact&quot; !'),
(6, 'Puis-je Ã©couter de la musique sur Highwaytobands.com ?', 'Oui, les artistes peuvent ajouter des extraits de morceaux de musique sur leur page perso.'),
(7, 'Comment affichez-vous les concerts proches de chez moi ?', 'Pour cela, nous utilisons votre code postal et nous le rapprochons de celui des salles inscrites sur notre site afin de vous proposer les salles situÃ©es dans le mÃªme dÃ©partement que le votre.');

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE IF NOT EXISTS `forum_message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `date_publication` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Contenu de la table `forum_message`
--

INSERT INTO `forum_message` (`id_message`, `text`, `date_publication`, `id_user`, `id_sujet`, `actif`) VALUES
(4, ' Coucou !', '0000-00-00 00:00:00', 40, 1, 0),
(5, 'Un premier message bien sympa ', '0000-00-00 00:00:00', 40, 1, 0),
(6, ' Coucou les gens on essaye !', '0000-00-00 00:00:00', 40, 1, 0),
(7, ' Allez Mary !', '2014-06-01 12:53:44', 40, 1, 0),
(8, 'Un premier message ', '2014-06-01 12:56:23', 40, 2, 0),
(9, ' Bonjour les gens !', '2014-06-01 13:04:51', 40, 1, 0),
(10, 'Test ', '2014-06-01 13:07:54', 40, 1, 0),
(11, ' dididif', '2014-06-01 13:11:07', 56, 1, 0),
(12, 'Rock rock rock ', '2014-06-01 13:16:37', 56, 1, 0),
(13, 'coucou les loulous', '0000-00-00 00:00:00', 56, 1, 0),
(14, 'merde ', '2014-06-01 14:05:17', 56, 2, 0),
(15, 'FEDERER ', '2014-06-01 14:09:46', 56, 2, 0),
(16, ' ', '2014-06-01 14:12:20', 56, 3, 0),
(17, 'FEDERER ', '2014-06-01 14:17:40', 56, 4, 0),
(18, 'wesh wesh wesh ', '2014-06-01 14:21:28', 56, 5, 0),
(19, 'coucou els choux', '0000-00-00 00:00:00', 56, 0, 0),
(20, ' Deux sets partout !', '0000-00-00 00:00:00', 56, 4, 0),
(21, ' Ca fonctionne !', '2014-06-01 14:30:39', 56, 6, 0),
(22, 'aaaaaa ', '2014-06-01 14:31:41', 56, 7, 0),
(23, ' Coucou', '0000-00-00 00:00:00', 56, 7, 0),
(24, 'TF1!!!', '2014-06-01 19:10:23', 56, 7, 0),
(25, ' Bonne heure ?', '2014-06-01 21:17:10', 56, 7, 0),
(26, ' Bonsoir !', '2014-06-01 21:40:08', 59, 1, 0),
(27, '  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s  trÃ¨s trÃ¨s ong', '2014-06-01 22:03:18', 59, 1, 0),
(28, ' trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s ongtrÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s ongtrÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s ongtrÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s trÃ¨s ong', '2014-06-01 22:04:32', 59, 1, 0),
(29, 'Football ', '2014-06-01 22:36:12', 59, 8, 0),
(30, ' Ca fonctionne oui !', '2014-06-01 22:41:26', 59, 6, 0),
(31, ' +2', '2014-06-01 22:51:54', 59, 5, 0),
(33, ' Coucou', '2014-06-04 22:12:56', 101, 8, 0),
(34, ' +3', '2014-06-04 22:13:13', 101, 5, 0),
(35, '?', '2014-06-04 22:15:29', 101, 6, 0),
(36, ' Je vais bientÃ´t Ã  un concert !', '2014-06-04 22:16:07', 101, 9, 0),
(37, 'mmmmm ', '2014-06-04 22:50:55', 101, 10, 0),
(38, ' Oui !', '2014-06-04 23:05:22', 101, 2, 0),
(39, ' Cool moi aussi !', '2014-06-04 23:31:27', 59, 9, 0),
(40, ' Au revoir', '2014-06-04 23:32:18', 59, 8, 0),
(41, ' Les Daft Punk sont gÃ©niaux', '2014-06-10 09:10:37', 56, 11, 0),
(42, 'Bonjour Ã  tous ! C''est bientÃ´t le jour J et l''heure h n''est ce pas ?', '2014-06-14 15:13:50', 59, 12, 0),
(43, ' Casa Paco est trop gÃ©nial !', '2014-06-17 15:26:12', 40, 13, 0);

-- --------------------------------------------------------

--
-- Structure de la table `forum_rubrique`
--

CREATE TABLE IF NOT EXISTS `forum_rubrique` (
  `id_rubrique` int(3) NOT NULL AUTO_INCREMENT,
  `titre_rub` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `actif` int(11) NOT NULL,
  PRIMARY KEY (`id_rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `forum_rubrique`
--

INSERT INTO `forum_rubrique` (`id_rubrique`, `titre_rub`, `description`, `actif`) VALUES
(1, 'Amateurs de saxos et trompettes...', 'Le meilleur Jazz', 5),
(2, 'Le Hip-hop depuis ses debuts', 'Du rap du rap du rap', 0),
(4, 'Retrospective', 'Les genres les plus plebiscites', 5),
(5, 'Un peu de culture electronique', 'Les DJs qui ont fait naitre la techno', 0);

-- --------------------------------------------------------

--
-- Structure de la table `forum_sujet`
--

CREATE TABLE IF NOT EXISTS `forum_sujet` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `titre_sujet` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_rubrique` int(11) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `forum_sujet`
--

INSERT INTO `forum_sujet` (`id_sujet`, `titre_sujet`, `description`, `date_creation`, `id_user`, `id_rubrique`, `actif`) VALUES
(1, 'jazz', 'sujet jazz', '2014-05-12 00:00:00', 40, 1, 0),
(2, 'Coucou test', 'foofofofof', '2014-06-24 08:05:24', 40, 1, 2),
(3, 'Concert trÃ¨s bientÃ´t !', NULL, NULL, NULL, NULL, NULL),
(4, 'ROGER', NULL, '2014-06-01 14:17:40', 56, 1, NULL),
(5, 'Wesh', NULL, '2014-06-01 14:21:28', 56, 2, NULL),
(6, 'Ca marche ?', NULL, '2014-06-01 14:30:39', 56, 1, NULL),
(7, 'Aaaaa', NULL, '2014-06-01 14:31:41', 56, 4, NULL),
(8, 'Foot', NULL, '2014-06-01 22:36:12', 59, 2, NULL),
(9, 'Concert bientÃ´t !', NULL, '2014-06-04 22:16:07', 101, 4, NULL),
(10, 'Mhmm', NULL, '2014-06-04 22:50:55', 101, 2, NULL),
(11, 'Daft Punk', NULL, '2014-06-10 09:09:49', 56, 5, NULL),
(12, 'BientÃ´t le Jour J', NULL, '2014-06-14 15:13:50', 59, 5, NULL),
(13, 'Casa Paco !', NULL, '2014-06-17 15:26:12', 40, 1, NULL);

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
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `password`, `zipcode`, `mail`, `photo`, `name`, `admin`) VALUES
(9, 'Titi', 'isep', '75006', 'isep@isep.fr', '95.jpg', 'Titi', NULL),
(31, 'Manuel', 'adc16fa41a38b174232f206e0b2bd006baaace68', '91240', 'azert@gmail.com', '95.jpg', 'Manuel', NULL),
(33, 'isepien', '05d1a295fb45fd8b022034a620f4869fce62572f', '75006', 'titi@gmail.com', '95.jpg', 'isepien', NULL),
(35, 'Guigui91', 'fa7f6473b1cbf2515e7fa08a0ead39e925c7b65a', '91260', 'titi@gmail.com', '95.jpg', 'Guillaume', NULL),
(37, 'yvette', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tba@gmail.com', '95.jpg', 'Yvette', NULL),
(40, 'login', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '13004', 'login@email.com', '92.jpg', 'Lo Gin', NULL),
(41, 'Donald', '30f6508881e0f0ce26e49047c929e3b5696e75b7', '11111', 'login@email.com', '92.jpg', 'Donald', NULL),
(42, 'pierre', 'ff019a5748a52b5641624af88a54a2f0e46a9fb5', '91260', 'pierre@pierre.fr', '92.jpg', 'Pierre', NULL),
(44, 'vincent', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', '91240', 'patate@gmail.com', '92.jpg', 'Vincent', NULL),
(48, 'benoit', 'ecd1f14f7c1c6dc7a40210bdcc3810e0107ecbc8', '91236', 'benoit@benoit.com', '92.jpg', 'Benoit', NULL),
(54, 'picsou', 'e333d1ce5f25b2d2ac0a06ee4310d92dc9dbe37b', '91260', 'pierre@pierre.fr', '01.jpeg', 'picsou', NULL),
(56, 'Cocacola', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '75006', 'soda@coke.com', 'coca.jpg', 'Soda Light', NULL),
(57, 'DonaldDuck', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '29449', 'donald@duck.com', 'donald.jpg', 'Donald Duck', NULL),
(58, 'Potatoes', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91240', 'tba@gmail.com', '01.jpeg', 'Patate', NULL),
(59, 'tbalmette', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '75006', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault BALMETTE', 1),
(61, 'thib', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault B', NULL),
(94, 'Clement', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91250', 'azert@gmail.com', '01.jpeg', 'Clermont', NULL),
(95, 'canal', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'mistertiti91@hotmail.fr', '95.jpg', 'Canal', NULL),
(96, 'chirac', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '75008', 'elysee@gmail.com', '96.jpg', 'Jacques', NULL),
(97, 'eurovision', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'mistertiti91@hotmail.fr', '97.png', 'Eurovision', NULL),
(98, 'euro', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91360', 'azert@gmail.com', '98.png', 'euro', NULL),
(100, 'coucou', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91250', 'mistertiti91@hotmail.fr', '92.jpg', 'Bercy', NULL),
(101, 'benoitgu', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'pouet@mail.com', '101.jpg', 'Benoit', NULL),
(102, 'moi', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '102.jpg', 'moi', NULL),
(103, 'login2', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '12345', 'login@email.com', '103.jpg', 'Logue Hein', NULL),
(104, 'Valentin', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91240', 'patate@patate.com', '104.jpg', 'Patate', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_id` int(11) DEFAULT NULL,
  `concert_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_participation_membre1_idx` (`membre_id`),
  KEY `fk_participation_concert1_idx` (`concert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `participation`
--

INSERT INTO `participation` (`id`, `membre_id`, `concert_id`) VALUES
(3, 57, 13),
(4, 56, 9),
(5, 57, 10),
(6, 57, 7),
(7, 40, 6),
(8, 40, 40),
(9, 56, 6),
(10, 59, 22),
(11, 59, 29),
(12, 40, 29),
(13, 59, 40),
(14, 40, 47),
(15, 40, 44),
(16, 57, 49);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `concert_id` int(11) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `artiste` varchar(50) DEFAULT NULL,
  `salle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photo_artiste1_idx` (`artiste_id`),
  KEY `fk_photo_salle1_idx` (`salle_id`),
  KEY `fk_photo_concert1_idx` (`concert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `name`, `date`, `artiste_id`, `salle_id`, `concert_id`, `fichier`, `artiste`, `salle`) VALUES
(17, 'Out of the blue', '2014-06-17', 3, NULL, NULL, '17_3.jpg', 'Electric Light Orchestra', NULL),
(18, 'Nous', '2014-06-06', 3, NULL, NULL, '18_3.jpg', 'Electric Light Orchestra', NULL),
(19, 'Mika en concert', '2014-07-05', NULL, 2, NULL, '19_2.jpg', NULL, 'Bercy'),
(20, 'Johnny', '2014-05-26', NULL, 2, NULL, '20_2.jpg', NULL, 'Bercy'),
(26, 'Olympia', '2014-06-04', NULL, 1, NULL, '26.jpg', NULL, 'Olympia'),
(27, 'Lordi', '2014-06-04', 6, NULL, NULL, '27.jpg', 'Lordi', NULL),
(28, 'Photo de groupe', '2014-06-20', 6, NULL, NULL, '28.jpg', 'Lordi', NULL),
(29, 'Nous', '1986-07-11', 8, NULL, NULL, '29.jpg', 'Queen', NULL),
(34, 'Le DÃ´me de Marseille', '2014-06-11', NULL, 7, NULL, '34.jpg', NULL, 'LeDÃ´meDeMarseille'),
(35, 'Le DÃ´me De Marseille', '2014-05-26', NULL, 7, NULL, '35.jpg', NULL, 'LeDÃ´meDeMarseille'),
(37, 'JLO On Tour', '2014-06-14', 10, NULL, NULL, '37.jpg', 'Jennifer Lopez', NULL),
(38, 'Casa Paco', '2014-05-31', NULL, 3, NULL, '38.jpg', NULL, 'Casa Paco');

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
  `zipcode` varchar(20) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `adress` varchar(45) DEFAULT NULL,
  `description` text,
  `hours` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `voie` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `departement` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Pseudo_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `login`, `password`, `name`, `capacity`, `zipcode`, `mail`, `phone`, `adress`, `description`, `hours`, `photo`, `voie`, `ville`, `pays`, `numero`, `departement`) VALUES
(1, 'olympia', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Olympia', 1996, '75009', 'olympia@salle.com', '012595939', '28 Boulevard des Capucines', 'L Olympia est une salle de spectacle. C''est le plus ancien music-hall de Paris encore existant.', '16h-19h', 'olympia-hall.gif', 'Boulevard des Capucines', 'Paris', 'France', 28, 75),
(2, 'Bercy', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Bercy', 25000, '75000', 'bercy@mail.com', '0123456789', '8 Boulevard de Bercy', 'Le palais omnisports de Paris-Bercy est une salle polyvalente', '10h - 20h', 'bercy.jpg', 'Boulevard de Bercy', 'Paris', 'France', 8, 75),
(3, 'casapaco', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Casa Paco', 50, '75000', 'casa@mail.com', '0123456789', '13 Rue de Bassano', 'La Casa Paco est un bar typique espagnol, toute la chaleur, on retrouve la bonne humeur de Madrid dans ce bar restaurant.', '17h - 20h', 'casa.jpg', 'Rue de Bassano', 'Paris', 'France', 13, 75),
(7, 'dome', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Le DÃ´me De Marseille', 8500, '13004', 'dome@email.com', '0214748364', '48 Avenue de Saint-Just', 'Salle de concert Ã  Marseille', '14h-15h', 'ledome-810j.jpg', 'Avenue de Saint-Just', 'Marseille', 'France', 48, 13),
(8, 'o2', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'O2 Arena (Londres)', 23000, '', 'azert@gmail.com', '0123456789', 'Hihi rue du troc', 'L''O2 Arena, aussi dÃ©nommÃ© North Greenwich Arena dans le contexte des Jeux olympiques d''Ã©tÃ© de 2012, est une salle omnisports situÃ©e dans le complexe du DÃ´me du millÃ©naire (The O2) Ã  Londres, en Angleterre.', '14h-22h', '8.jpg', 'Drawdock Road', 'Londres', 'Angleterre', 0, 91),
(9, 'zenithrouen', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Zenith de Rouen', 76120, '76489', 'esc@mail.com', '2147483647', 'Danemark', 'Le ZÃ©nith de Rouen est une salle de concerts situÃ©e au Grand-Quevilly dans l''agglomÃ©ration rouennaise. Sa capacitÃ© varie entre 850 et 8 000 places selon la nature du spectacle et bÃ©nÃ©ficie d''une scÃ¨ne de 450 mÂ².', '13h-15h', '9.png', 'Avenue des Canadiens', 'Le Grand-Quevilly', 'France', 44, 76),
(10, 'cannes', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Palais des Festivals', 1200, '06400', 'cannes@gmail.com', '0492998400', 'Boulevard des Festivals', 'Palais top cool', '10h-20h', '10.jpg', 'Boulevard des Festivals', 'Cannes', 'France', 1, 6),
(11, 'bootleg', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Le Bootleg', 35, '33000', 'bootleg@gmail.com', '0951910254', NULL, 'La salle de concert / club hÃ©tÃ©roclite Ã  Bordeaux.', '9h-22h', '11.jpg', 'Rue LacornÃ©e', 'Bordeaux', 'France', 6, 33),
(12, 'aeronef', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'L''AÃ©ronef', 4000, '33000', 'azert@gmail.com', '0320135000', NULL, 'L''AÃ©ronef est une salle de spectacle consacrÃ©e aux musiques actuelles et autres disciplines artistiques. Elle est situÃ©e Ã  Lille dans le bÃ¢timent d''Euralille dessinÃ© par Jean Nouvel, Ã  proximitÃ© de la gare de Lille-Flandres.', '12h-14h', '12.jpg', 'Avenue Willy Brandt', 'Euralille', 'France', 168, 33);

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `style`
--

INSERT INTO `style` (`id`, `style`) VALUES
(1, 'Rock'),
(2, 'Rap'),
(3, 'Electronique'),
(4, 'Pop'),
(5, 'Alternative'),
(6, 'Classique'),
(7, 'Reggae'),
(8, 'Indie'),
(9, 'Opera'),
(10, 'Dancehall'),
(11, 'Country'),
(13, 'Blues'),
(14, 'Ballet'),
(15, 'Boogie'),
(17, 'VariÃ©tÃ©'),
(18, 'Funk'),
(19, 'MÃ©tal'),
(20, 'OpÃ©ra');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE IF NOT EXISTS `suivre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_suivre_membre1_idx` (`membre_id`),
  KEY `fk_suivre_salle1_idx` (`salle_id`),
  KEY `fk_suivre_artiste1_idx` (`artiste_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `suivre`
--

INSERT INTO `suivre` (`id`, `membre_id`, `salle_id`, `artiste_id`) VALUES
(1, 40, NULL, 1),
(16, 59, 3, NULL),
(21, 59, NULL, 3),
(23, 40, NULL, 6),
(27, 56, NULL, 6),
(34, 57, NULL, 4),
(36, 57, 2, NULL),
(37, 57, 1, NULL),
(38, 57, 3, NULL),
(39, 57, NULL, 3),
(40, 57, NULL, 1),
(41, 40, NULL, 3),
(42, 56, NULL, 3),
(44, 40, NULL, 8),
(46, 59, NULL, 6),
(47, 59, 8, NULL),
(48, 59, 12, NULL),
(49, 59, 7, NULL),
(50, 59, 1, NULL),
(56, 40, 12, NULL),
(57, 40, 1, NULL),
(59, 57, NULL, 14),
(60, 56, 12, NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
