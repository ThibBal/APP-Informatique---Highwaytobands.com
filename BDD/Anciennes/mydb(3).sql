-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 27 Mai 2014 à 09:10
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
-- Structure de la table `forum_message`
--

CREATE TABLE IF NOT EXISTS `forum_message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(20000) NOT NULL,
  `date_publication` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `forum_message`
--

INSERT INTO `forum_message` (`id_message`, `text`, `date_publication`, `id_user`, `id_sujet`, `actif`) VALUES
(1, 'bonjour a tous', '2014-05-12 00:00:00', 4, 1, 2);

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
(4, 'rock', 'le meilleur rock', 5);

-- --------------------------------------------------------

--
-- Structure de la table `forum_sujet`
--

CREATE TABLE IF NOT EXISTS `forum_sujet` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `titre_sujet` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date_creation` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rubrique` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `forum_sujet`
--

INSERT INTO `forum_sujet` (`id_sujet`, `titre_sujet`, `description`, `date_creation`, `id_user`, `id_rubrique`, `actif`) VALUES
(1, 'jazz', 'sujet jazz', '2014-05-12 00:00:00', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
