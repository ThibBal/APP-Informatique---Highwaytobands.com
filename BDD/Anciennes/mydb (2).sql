-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 01 Juin 2014 à 20:56
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
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`id`, `artiste_id`, `salle_id`, `artiste_name`, `salle_name`, `titre`, `contenu`, `date`) VALUES
(5, 6, 0, NULL, NULL, NULL, NULL, '0000-00-00'),
(6, 6, 0, 'Lordi', '0', NULL, NULL, '0000-00-00'),
(7, 6, 0, 'Lordi', '0', 'ooooo', ' oooo', '0000-00-00'),
(8, 6, 0, 'Lordi', '0', 'ooo', ' oo', '0000-00-00'),
(9, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' Bonjour un concert bientÃ´t ici !', '0000-00-00'),
(10, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' coucou', '0000-00-00'),
(11, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' COUCOU', '0000-00-00'),
(12, 6, 0, 'Lordi', '0', '', ' ', '0000-00-00'),
(13, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' coucou les loulous', '0000-00-00'),
(14, 6, 0, 'Lordi', '0', 'goijgdlhgbhj', 'hjkfgjhggjfh ', NULL),
(15, 6, 0, 'Lordi', '0', 'ooooooooooooooo', ' oooooooooooooooooooooooo', '2014-05-22'),
(16, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' Alors, vous venez ?', '2014-05-22'),
(17, 6, 0, 'Lordi', '0', 'Concert bientÃ´t !', ' coucou', '2014-05-22'),
(18, 6, 0, 'Lordi', '0', 'xoxo', 'xoxo ', '2014-05-22'),
(19, 0, 7, '0', 'LeDÃ´meDeMarseille', 'DPDA', ' Votons !', '2014-05-22'),
(20, 0, 7, 'NULL', 'LeDÃ´meDeMarseille', 'DPDA', ' Votons !', '2014-05-22'),
(21, 0, 7, '', 'LeDÃ´meDeMarseille', 'Votons', 'votons votons  ', '2014-05-22'),
(22, 3, 0, 'Electric Light Orchestra', '', 'Concert bientÃ´t !', ' Bonjour ! Vous allez bien ? Vous savez que nous allons bientÃ´t nous reformer !!!!', '2014-05-27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`id`, `login`, `password`, `name`, `style`, `description`, `mail`, `photo`) VALUES
(1, 'thotel', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Tokio Hotel', 'Rock', 'Tokio Hotel est un groupe de pop-rock originaire de Magdebourg, en Allemagne.', 'th@gmail.com', '1.jpg'),
(2, 'muse', 'ae5b05ab3cd47f4a88d7b0da49eb96fd034406d0', 'Muse', 'Pop', 'Muse est un groupe originaire de Teignmouth, Devon en Angleterre. Apparu en 1994, Matthew Bellamy (chant, guitare, piano), Christopher Wolstenholme (basse, chant) et Dominic Howard (batterie, percussions) forment le trio du groupe.', 'tbalmette@gmail.com', '1.jpg'),
(3, 'ELO', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Electric Light Orchestra', 'Rock', 'Electric Light Orchestra (ELO), est un groupe de rock britannique originaire de Birmingham. Sa musique se veut un croisement d''influences classiques, rock et pop.', 'elo@mail.com', '3.jpg'),
(4, 'TCHOU', 'ae5b05ab3cd47f4a88d7b0da49eb96fd034406d0', 'Shakira', 'Rock', 'wESSSH', 'tba@gmail.com', '1.jpg'),
(5, 'Europe', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Europa', 'Rap', 'Eurovisiooooooo', 'elysee@gmail.com', '5.jpg'),
(6, 'Lordi', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Lordi', 'Rock', 'Groupe de hard rock finlandais', 'lordi@gmail.com', '6.jpg'),
(7, 'NTM', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'NTM', 'Rap', 'NTM est un groupe de rap fondÃ© en 1990', 'tba@gmail.com', '7.jpg');

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
  `artiste` varchar(45) DEFAULT NULL,
  `salle` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `valider` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`id`, `artiste`, `salle`, `date`, `description`, `price`, `name`, `valider`) VALUES
(6, 'Europa', 'Olympia', '2014-10-04', 'Descriptiiiion', 1240, 'Wesh in town 2', 0),
(7, 'Europa', 'Olympia', '2014-05-15', 'iffififi', 0, 'Rockooooo', 0),
(8, 'Europa', 'Olympia', '2014-05-30', 'COucou', 0, 'Shakira', 1),
(9, 'Europa', 'Olympia', '2014-05-16', 'Descriptiiion', 0, 'Rififi', 0),
(10, 'Europa', 'Olympia', '2014-05-16', 'Descriptiiionooooo', 0, 'Rififi', 0),
(11, 'Europa', 'Olympia', '2014-05-10', 'didididi', 0, 'aoaoaoa', 0),
(12, 'Europa', 'Olympia', '2014-05-15', 'dodddo', 0, 'Shakira', 1),
(13, 'Europa', 'Olympia', '2014-08-09', 'odododo', 0, 'Wesh in town 5', 1),
(14, 'Europa', 'Olympia', '2014-05-12', 'Wesh in town 4 wesh wesh', 0, 'Wesh in town 4', 1),
(15, 'Europa', 'Olympia', '2014-05-25', 'dododod', 0, 'Shakira', 0),
(16, 'Europa', 'Olympia', '2014-05-09', 'dododododaozhubjvdfkj;', 0, 'Super concert test', 0),
(17, 'Europa', 'Olympia', '2014-05-25', 'dodododccoco', 0, 'Shakira', 0),
(20, 'Europa', 'Bercy', '2014-08-16', 'Wahou trop bien', 0, 'Hija', 0),
(21, 'Europa', 'Casa Paco', '2014-08-08', 'Un petit concert bien sympa dans une salle bi', 135, 'Rock My Gig', 0),
(22, 'Lordi', 'Olympia', '2014-05-15', 'Coucou', 0, 'Eurovision', 0),
(23, 'Lordi', 'Weshou', '2014-05-15', 'Lordi revient en concert tout proche de chez ', 0, 'Eurovision', 1),
(24, 'Electric Light Orchestra', 'Olympia', '2014-05-07', '', 0, 'COUCOU', 0),
(25, 'Electric Light Orchestra', 'LeDÃ´meDeMarseille', '2014-05-16', 'Un concert trop gÃ©nial prÃ¨s de chez toi en plus ! Viens stp ! Allez viens !', 0, 'Un concert au top', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `extrait`
--

INSERT INTO `extrait` (`id`, `nom`, `album`, `artiste_id`, `fichier`, `artiste`) VALUES
(14, 'MarioBros', 'SuperMarioBros', NULL, 'SuperMarioBrosTheme.mp3', '56'),
(17, 'Mario Theme', 'Super Mario Bros', NULL, 'SuperMarioBrosTheme.mp3', '57'),
(20, 'Hard Rock', 'Rock&Roll', NULL, 'musique_du_20140509211351.mp3', '57'),
(32, 'Hard Rock Hallelujah', 'The Arockalypse', NULL, '32_6.mp3', '6');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

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
(31, ' +2', '2014-06-01 22:51:54', 59, 5, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `forum_rubrique`
--

INSERT INTO `forum_rubrique` (`id_rubrique`, `titre_rub`, `description`, `actif`) VALUES
(1, 'Jazz', 'Le meilleur Jazz', 5),
(2, 'Rap', 'Du rap du rap du rap', 0),
(4, 'Rock', 'le meilleur rock', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `forum_sujet`
--

INSERT INTO `forum_sujet` (`id_sujet`, `titre_sujet`, `description`, `date_creation`, `id_user`, `id_rubrique`, `actif`) VALUES
(1, 'jazz', 'sujet jazz', '2014-05-12 00:00:00', 1, 1, 0),
(2, 'Coucou test', 'foofofofof', '2014-06-24 08:05:24', 40, 1, 2),
(3, 'Concert trÃ¨s bientÃ´t !', NULL, NULL, NULL, NULL, NULL),
(4, 'ROGER', NULL, '2014-06-01 14:17:40', 56, 1, NULL),
(5, 'Wesh', NULL, '2014-06-01 14:21:28', 56, 2, NULL),
(6, 'Ca marche ?', NULL, '2014-06-01 14:30:39', 56, 1, NULL),
(7, 'Aaaaa', NULL, '2014-06-01 14:31:41', 56, 4, NULL),
(8, 'Foot', NULL, '2014-06-01 22:36:12', 59, 2, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `password`, `zipcode`, `mail`, `photo`, `name`) VALUES
(9, 'Titi', 'isep', '75006', 'isep@isep.fr', '95.jpg', 'Titi'),
(31, 'Manuel', 'adc16fa41a38b174232f206e0b2bd006baaace68', '91240', 'azert@gmail.com', '95.jpg', 'Manuel'),
(33, 'isepien', '05d1a295fb45fd8b022034a620f4869fce62572f', '75006', 'titi@gmail.com', '95.jpg', 'isepien'),
(35, 'Guigui91', 'fa7f6473b1cbf2515e7fa08a0ead39e925c7b65a', '91260', 'titi@gmail.com', '95.jpg', 'Guillaume'),
(37, 'yvette', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', '91260', 'tba@gmail.com', '95.jpg', 'Yvette'),
(40, 'login', 'd83177daa22aeba3081abf055f98fd39cb8ecf4a', '11111', 'login@email.com', '92.jpg', 'Login'),
(41, 'Donald', '30f6508881e0f0ce26e49047c929e3b5696e75b7', '11111', 'login@email.com', '92.jpg', 'Donald'),
(42, 'pierre', 'ff019a5748a52b5641624af88a54a2f0e46a9fb5', '91260', 'pierre@pierre.fr', '92.jpg', 'Pierre'),
(43, 'piere', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'azert@gmail.com', '92.jpg', 'Pierre'),
(44, 'vincent', 'd311b1c8e5fe83187cf2d83c8e080dbcff9fc4ef', '91240', 'patate@gmail.com', '92.jpg', 'Vincent'),
(48, 'benoit', 'ecd1f14f7c1c6dc7a40210bdcc3810e0107ecbc8', '91236', 'benoit@benoit.com', '92.jpg', 'Benoit'),
(51, 'mario', 'addb47291ee169f330801ce73520b96f2eaf20ea', '91240', 'mario@mario.com', '92.jpg', 'Mario'),
(54, 'picsou', 'e333d1ce5f25b2d2ac0a06ee4310d92dc9dbe37b', '91260', 'pierre@pierre.fr', 'photo2.jpg', 'picsou'),
(56, 'Cocacola', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'soda@coke.com', 'coca.jpg', 'Soda Light'),
(57, 'DonaldDuck', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '29449', 'donald@duck.com', 'donald.jpg', 'Donald Duck'),
(58, 'Potatoes', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91240', 'tba@gmail.com', 'photo3.JPG', 'Patate'),
(59, 'tbalmette', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault'),
(61, 'thib', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'tbalmette@gmail.com', '8bit_r2d2.jpg', 'Thibault B'),
(94, 'Clement', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91250', 'azert@gmail.com', '94.png', 'Clermont'),
(95, 'canal', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'mistertiti91@hotmail.fr', '95.jpg', 'Canal'),
(96, 'chirac', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '75008', 'elysee@gmail.com', '96.jpg', 'Jacques'),
(97, 'eurovision', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'mistertiti91@hotmail.fr', '97.png', 'Eurovision'),
(98, 'euro', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91360', 'azert@gmail.com', '98.png', 'euro'),
(99, 'elsa', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'ooo@ooo.oo', '99.', 'Elsa'),
(100, 'coucou', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91250', 'mistertiti91@hotmail.fr', '92.jpg', 'Bercy'),
(101, 'benoitgu', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', '91260', 'pouet@mail.com', '101.jpg', 'Benoit');

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_id` int(11) DEFAULT NULL,
  `concert_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_participation_membre1_idx` (`membre_id`),
  KEY `fk_participation_concert1_idx` (`concert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `participation`
--

INSERT INTO `participation` (`id`, `membre_id`, `concert_id`) VALUES
(3, 57, 13),
(4, 56, 9),
(5, 57, 10),
(6, 57, 7);

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
  PRIMARY KEY (`id`),
  KEY `fk_photo_artiste1_idx` (`artiste_id`),
  KEY `fk_photo_salle1_idx` (`salle_id`),
  KEY `fk_photo_concert1_idx` (`concert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `name`, `date`, `artiste_id`, `salle_id`, `concert_id`, `fichier`) VALUES
(14, 'Mika en concert', '2014-05-27', NULL, 7, NULL, '14_7.jpg'),
(15, 'nous', '2014-05-27', 3, NULL, NULL, '15_3.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `login`, `password`, `name`, `capacity`, `zipcode`, `mail`, `phone`, `adress`, `description`, `hours`, `photo`, `voie`, `ville`, `pays`) VALUES
(1, 'olympia', '08cf32d7f7bbd7395535521042d96127cd68cf09', 'Olympia', 1996, 75009, 'olympia@salle.com', '012595939', '28 Boulevard des Capucines', 'L Olympia est une salle de spectacle. C''est le plus ancien music-hall de Paris encore existant.', '16h-19h', 'olympia-hall.gif', NULL, NULL, NULL),
(2, 'Bercy', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Bercy', 25000, 75000, 'bercy@mail.com', '0123456789', '8 Boulevard de Bercy', 'Le palais omnisports de Paris-Bercy est une salle polyvalente', '10h - 20h', 'bercy.jpg', NULL, NULL, NULL),
(3, 'casapaco', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Casa Paco', 50, 75000, 'casa@mail.com', '0123456789', '13 Rue de Bassano', 'La Casa Paco est un bar typique espagnol, toute la chaleur, on retrouve la bonne humeur de Madrid dans ce bar restaurant.', '17h - 20h', 'casa.jpg', NULL, NULL, NULL),
(7, 'dome', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'LeDÃ´meDeMarseille', 8500, 13004, 'dome@email.com', '3367894560', '48 Avenue de Saint-Just', NULL, '14h-15h', 'ledome-810j.jpg', NULL, NULL, NULL),
(8, 'Cocacola', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Weshou', 6543, 91260, 'azert@gmail.com', '3367894560', 'Hihi rue du troc', 'WESH', '14h', 'donald.jpg', NULL, NULL, NULL),
(9, 'ESC', '36a32e96cbfd11fd98e8c98e38d9ad9b41f57f1a', 'Eurovision', 12345, 76489, 'esc@mail.com', '3367894560', 'Danemark', 'Good evening Europe', '13h-15h', '9.png', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `suivre`
--

INSERT INTO `suivre` (`id`, `membre_id`, `salle_id`, `artiste_id`) VALUES
(1, 40, NULL, 1),
(3, 56, NULL, 1),
(4, 56, 1, NULL),
(6, 57, NULL, 6),
(7, 56, NULL, 6),
(16, 59, 3, NULL),
(17, 57, 2, NULL),
(18, 57, 3, NULL),
(20, 57, 8, NULL);

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
