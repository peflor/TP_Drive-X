-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 15:30
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `drive_x`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `coverimage` varchar(255) NOT NULL,
  `puissance` int(255) NOT NULL,
  `perf` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `nom`, `pays`, `coverimage`, `puissance`, `perf`) VALUES
(12, 'zenvo tsr s', 'danemark', './assets/img/cars/165210914415650638091928620792.jpg', 1200, '2.8'),
(9, 'Ferrari sf90', 'italie', './assets/img/cars/165210250717239522591557674790.jpg', 1000, '2.5'),
(10, 'mercedes amg one', 'allemagne', './assets/img/cars/165210253817470252321603336011.jpg', 1000, '2.2'),
(11, 'bugatti chiron', 'france', './assets/img/cars/165210258051427713547937342.jpg', 1500, '2.4'),
(13, 'koenisegg agera rs', 'suÃ¨de', './assets/img/cars/165210264523004659757235332.jpg', 1383, '2.6'),
(14, 'pagani hauyra', 'italie', './assets/img/cars/1652102678592466011771981012.jpg', 765, '3.2');

-- --------------------------------------------------------

--
-- Structure de la table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `coverimage` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `likeits` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `drivers`
--

INSERT INTO `drivers` (`id`, `fullname`, `pays`, `coverimage`, `category`, `likeits`) VALUES
(4, 'lewis hamilton', 'angleterre', './assets/img/drivers/1652109610934681405257717075.jpg', 'Formule 1', 2),
(5, 'ken block', 'usa', './assets/img/drivers/165210821018825081801878904418.jpg', 'Gymkhana', -2),
(6, 'danica patrick', 'usa', './assets/img/drivers/1652108237452290831313299378.jpg', 'Formule 1', 0),
(7, 'sebastien loeb', 'france', './assets/img/drivers/1652108273816611093338341118.jpg', 'Rallye', 2),
(8, 'molly taylor', 'australie', './assets/img/drivers/16521083011211183692571180987.jpg', 'Rallye', -1),
(9, 'collin mcrae', 'Ã©cosse', './assets/img/drivers/16521083301329615151945922534.jpg', 'Rallye', 0),
(10, 'shirley muldowney', 'usa', './assets/img/drivers/1652108367458704813483234642.jpg', 'Drag', 0),
(11, 'michael schumacher', 'allemagne', './assets/img/drivers/16521084073159880591163976340.jpg', 'Formule 1', 0),
(12, 'enrica enders', 'usa', './assets/img/drivers/16521084424542637941748501533.jpg', 'Drag', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
