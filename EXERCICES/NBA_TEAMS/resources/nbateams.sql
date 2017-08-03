-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 30 Novembre 2016 à 11:18
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nbateams`
--
CREATE DATABASE IF NOT EXISTS `nbateams` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nbateams`;

-- --------------------------------------------------------

--
-- Structure de la table `conference`
--

DROP TABLE IF EXISTS `conference`;
CREATE TABLE IF NOT EXISTS `conference` (
  `con_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `con_name` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `conference`
--

INSERT INTO `conference` (`con_id`, `con_name`) VALUES
(1, 'Ouest'),
(2, 'Est');

-- --------------------------------------------------------

--
-- Structure de la table `division`
--

DROP TABLE IF EXISTS `division`;
CREATE TABLE IF NOT EXISTS `division` (
  `div_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `con_id` int(10) UNSIGNED NOT NULL,
  `div_name` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`div_id`),
  KEY `division_FKIndex1` (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `division`
--

INSERT INTO `division` (`div_id`, `con_id`, `div_name`) VALUES
(1, 1, 'Nord-Ouest'),
(2, 1, 'Pacifique'),
(3, 1, 'Sud-Ouest'),
(4, 2, 'Atlantique'),
(5, 2, 'Centrale'),
(6, 2, 'Sud-Est');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `div_id` int(10) UNSIGNED NOT NULL,
  `tea_name` varchar(64) DEFAULT NULL,
  `tea_ville` varchar(64) DEFAULT NULL,
  `tea_created` datetime DEFAULT NULL,
  `tea_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `team_FKIndex1` (`div_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `div_id`, `tea_name`, `tea_ville`, `tea_created`, `tea_updated`) VALUES
(1, 1, 'Nuggets', 'Denver', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(2, 1, 'Timberwolves', 'Minesota', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(3, 1, 'Thunder', 'Okhlahoma City', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(4, 1, 'Trail Blazers', 'Portland', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(5, 1, 'Jazz', 'Utah', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(6, 2, 'Warriors', 'Golden State', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(7, 2, 'Clippers', 'Los Angeles', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(8, 2, 'Lakers', 'Los Angeles', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(9, 2, 'Suns', 'Phoenix', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(10, 2, 'Kings', 'Sacramento', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(11, 3, 'Mavericks', 'Dallas', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(12, 3, 'Rockets', 'Houston', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(13, 3, 'Grizzlies', 'Memphis', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(14, 3, 'Pelicans', 'Nouvelle-Orléans', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(15, 3, 'Spurs', 'San Antonio', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(16, 4, 'Celtics', 'Boston', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(17, 4, 'Nets', 'Brooklyn', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(18, 4, 'Knicks', 'New York', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(19, 4, '76ers', 'Philadelphie', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(20, 4, 'Raptors', 'Toronto', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(21, 5, 'Bulls', 'Chicago', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(22, 5, 'Cavaliers', 'Cleveland', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(23, 5, 'Pistons', 'Detroit', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(24, 5, 'Pacers', 'Indiana', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(25, 5, 'Bucks', 'Milwaukee', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(26, 6, 'Hawks', 'Atlanta', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(27, 6, 'Hornets', 'Charlotte', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(28, 6, 'Heat', 'Miami', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(29, 6, 'Magic', 'Orlando', '2016-02-29 18:11:04', '2016-02-29 18:11:04'),
(30, 6, 'Wizards', 'Washington', '2016-02-29 18:11:04', '2016-02-29 18:11:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
