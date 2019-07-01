-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 juil. 2019 à 21:16
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gest_tele`
--

-- --------------------------------------------------------

--
-- Structure de la table `ligne_reservation`
--

DROP TABLE IF EXISTS `ligne_reservation`;
CREATE TABLE IF NOT EXISTS `ligne_reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `prix` double NOT NULL,
  `heure_arrive` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligne_reservation`
--

INSERT INTO `ligne_reservation` (`id_reservation`, `id_bus`, `prix`, `heure_arrive`) VALUES
(1, 1, 18, '04:13'),
(1, 2, 30, '07:40');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`login`, `pwd`, `type`, `image`, `email`) VALUES
('admin', 'azert123', 'admin', 'ad.png', 'adminadmin@gmail.com'),
('clt1', 'aaaa', 'client', 'clie.png', 'client@gmail.com'),
(' mouhssine', 'azert123', 'client', 'logo.PNG', 'dtf@gmail.com'),
(' anass', 'azert123', 'client', '777.PNG', 'anass@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `serie` text NOT NULL,
  `image` text NOT NULL,
  `stock` int(20) NOT NULL,
  `marque` text NOT NULL,
  `prix` float NOT NULL,
  `ville_depart` text NOT NULL,
  `ville_arriver` text NOT NULL,
  `HD` text NOT NULL,
  `HA` text NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`num`, `serie`, `image`, `stock`, `marque`, `prix`, `ville_depart`, `ville_arriver`, `HD`, `HA`) VALUES
(2, 'BredaMenarinibus', '2.jpg', 3, 'De Rabat A Casa', 30, 'Rabat ', 'Casa', '18:55', '20:30'),
(4, 'Solaris Bus ', '4.jpg', 1, 'de Kenitra A Casa', 50, 'Kenitra ', 'Casa', '9:50', '11:45'),
(5, 'trolleybus', '5.jpg', 1, 'De Rabat A Marrakech ', 150, 'Rabat ', 'Marrakech ', '6:05', '11:30'),
(6, 'Iveco Bus', '5.jpg', 2, 'De Rabat A Fes', 180, 'Rabat ', 'Fes', '8:00', '10:30'),
(7, 'Solaris Bus', '4.jpg', 1, 'de Kenitra A Casa', 50, 'Kenitra', 'Casa', '9:50', '11:45');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `num_clt` text NOT NULL,
  `date_reservation` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `num_clt`, `date_reservation`) VALUES
(1, '1', '2019-06-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
