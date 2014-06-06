-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 06 Juin 2014 à 15:40
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `forum_rubrique`
--

CREATE TABLE `forum_rubrique` (
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
-- Structure de la table `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `style` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

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
(12, 'Capoeira'),
(13, 'Blues'),
(14, 'Ballet'),
(15, 'Boogie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
