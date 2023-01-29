-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 29 jan. 2023 à 15:51
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hospital_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `idC` int(11) NOT NULL,
  `idM` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `dateC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idM` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `idS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idM`, `nom`, `prenom`, `telephone`, `idS`) VALUES
(1, 'DIONE', 'Coumba', '776541234', 1),
(2, 'GAYE', 'Abdoulaye', '771800510', 2);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idP` int(11) NOT NULL,
  `numDossier` varchar(30) DEFAULT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idP`, `numDossier`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(6, 'PAT@20230129032612#', 'DIOUF', 'mady', 'Parcelles Assainies U 21', '781800510'),
(7, 'PAT@20230129032637#', 'gassama', 'issa diaby', 'Thies', '763007889');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `idS` int(11) NOT NULL,
  `nomS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`idS`, `nomS`) VALUES
(1, 'Dermatologie'),
(2, 'Ophtalmologie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`idC`),
  ADD KEY `idM` (`idM`),
  ADD KEY `idP` (`idP`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idM`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD KEY `idS` (`idS`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idP`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idS`),
  ADD UNIQUE KEY `nomS` (`nomS`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consulter`
--
ALTER TABLE `consulter`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `consulter_ibfk_1` FOREIGN KEY (`idM`) REFERENCES `medecin` (`idM`),
  ADD CONSTRAINT `consulter_ibfk_2` FOREIGN KEY (`idP`) REFERENCES `patient` (`idP`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`idS`) REFERENCES `specialite` (`idS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
