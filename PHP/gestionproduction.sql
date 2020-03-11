-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 13:36
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12
=======
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 mars 2020 à 14:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionproduction`
--

-- --------------------------------------------------------

--
-- Structure de la table `productions`
--

DROP TABLE IF EXISTS `productions`;
CREATE TABLE IF NOT EXISTS `productions` (
  `idProduction` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `ordreFabrication` int(11) NOT NULL,
<<<<<<< HEAD
  `dateHeureDebutProd` datetime NOT NULL,
  `dateHeureFinProd` datetime DEFAULT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idReference` varchar(50) NOT NULL,
  PRIMARY KEY (`idProduction`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `productions`
--

INSERT INTO `productions` (`idProduction`, `quantite`, `ordreFabrication`, `dateHeureDebutProd`, `dateHeureFinProd`, `idUtilisateur`, `idReference`) VALUES
(6, 818, 419, '2020-03-10 13:26:31', '2020-03-10 13:30:50', 11, 'PROD1');
=======
  `dateHeureDebutProd` date NOT NULL,
  `dateHeureFinProd` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idProduction`),
  KEY `Productions_Utilisateurs_FK` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  `idLot` varchar(50) NOT NULL,
  `dateHeure` datetime NOT NULL,
  `millisecondes` varchar(50) NOT NULL,
  `idProduction` int(11) NOT NULL,
  `idReference` varchar(50) NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=382 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idProduit`, `idLot`, `dateHeure`, `millisecondes`, `idProduction`, `idReference`) VALUES
(353, 'AS35KL45\n', '2020-03-10 10:24:13', '685069', 5, 'PROD3'),
(354, '6D59FR4\n', '2020-03-10 10:24:14', '915806', 5, 'PROD3'),
(355, '30D219A4\n', '2020-03-10 10:24:16', '797762', 5, 'PROD3'),
(356, '30D219A4\n', '2020-03-10 10:24:17', '916084', 5, 'PROD3'),
(357, 'CDGH45\n', '2020-03-10 10:24:19', '303070', 5, 'PROD3'),
(358, '5F45E41D\n', '2020-03-10 10:24:20', '790713', 5, 'PROD3'),
(359, '985D62\n', '2020-03-10 10:24:21', '852621', 5, 'PROD3'),
(360, '5F45E41D\n', '2020-03-10 10:24:23', '339416', 5, 'PROD3'),
(361, '30D219A4\n', '2020-03-10 10:24:25', '134016', 5, 'PROD3'),
(362, '30D219A4\n', '2020-03-10 10:24:25', '718664', 5, 'PROD3'),
(363, 'CDGH45\n', '2020-03-10 10:24:26', '285915', 5, 'PROD3'),
(364, '6D59FR4\n', '2020-03-10 10:24:27', '835799', 5, 'PROD3'),
(365, '5F45E41D\n', '2020-03-10 10:24:29', '439727', 5, 'PROD3'),
(366, 'AS35KL45\n', '2020-03-10 10:24:31', '324570', 5, 'PROD3'),
(367, '5F45E41D\n', '2020-03-10 10:24:32', '673999', 5, 'PROD3'),
(368, 'AS35KL45\n', '2020-03-10 10:24:34', '079497', 5, 'PROD3'),
(369, 'AS35KL45\n', '2020-03-10 10:24:34', '953503', 5, 'PROD3'),
(370, '6D59FR4\n', '2020-03-10 10:24:35', '546923', 5, 'PROD3'),
(371, '5F45E41D\n', '2020-03-10 10:24:36', '145669', 5, 'PROD3'),
(372, 'CDGH45\n', '2020-03-10 10:24:37', '428320', 5, 'PROD3'),
(373, 'AS35KL45\n', '2020-03-10 10:24:39', '081678', 5, 'PROD3'),
(374, 'AS35KL45\n', '2020-03-10 10:24:41', '040403', 5, 'PROD3'),
(375, '30D219A4\n', '2020-03-10 10:24:43', '001738', 5, 'PROD3'),
(376, 'CDGH45\n', '2020-03-10 13:30:28', '205125', 6, 'PROD1'),
(377, '5F45E41D\n', '2020-03-10 13:30:30', '032204', 6, 'PROD1'),
(378, '6D59FR4\n', '2020-03-10 13:30:31', '318173', 6, 'PROD1'),
(379, '5F45E41D\n', '2020-03-10 13:30:32', '496472', 6, 'PROD1'),
(380, 'ZM456C\n', '2020-03-10 13:30:32', '883402', 6, 'PROD1'),
(381, '6D59FR4\n', '2020-03-10 13:30:34', '345248', 6, 'PROD1');
=======
  `nomProduit` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `idLot` varchar(50) NOT NULL,
  `dateHeure` date NOT NULL,
  `reference` varchar(50) NOT NULL,
  `idProduction` int(11) NOT NULL,
  `idReference` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  UNIQUE KEY `Produits_Reference_AK` (`idReference`),
  KEY `Produits_Productions_FK` (`idProduction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

DROP TABLE IF EXISTS `reference`;
CREATE TABLE IF NOT EXISTS `reference` (
<<<<<<< HEAD
  `idReference` varchar(50) NOT NULL,
  `nomReference` varchar(50) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idReference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reference`
--

INSERT INTO `reference` (`idReference`, `nomReference`, `actif`) VALUES
('PROD1', 'Produit 1', 1),
('PROD2', 'Produit 2gergr', 1),
('PROD3', 'Produit 3', 1);

=======
  `idReference` int(11) NOT NULL AUTO_INCREMENT,
  `nomReference` varchar(50) NOT NULL,
  PRIMARY KEY (`idReference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `pseudoUtilisateur` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
<<<<<<< HEAD
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `mdp`, `role`, `actif`) VALUES
(9, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 1),
(11, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 1, 0),
(12, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 1, 1);
=======
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `Productions_Utilisateurs_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `Produits_Productions_FK` FOREIGN KEY (`idProduction`) REFERENCES `productions` (`idProduction`),
  ADD CONSTRAINT `Produits_Reference0_FK` FOREIGN KEY (`idReference`) REFERENCES `reference` (`idReference`);
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
