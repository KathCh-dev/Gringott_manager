-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 13 avr. 2025 à 20:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `account_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE `accounts` (
  `Account_ID` int(11) NOT NULL,
  `RIB` varchar(26) NOT NULL,
  `Account_Type` varchar(50) NOT NULL,
  `Account_Init` float NOT NULL,
  `Account_Balance` float NOT NULL,
  `Client_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `RIB`, `Account_Type`, `Account_Init`, `Account_Balance`, `Client_ID`) VALUES
(1, '17499 12345 12345678901 53', 'Compt_Courant', 150, 1300, 1),
(2, '14889 12345 12345678901 28', 'Compte_Epargne', 3000, 10000, 2),
(3, '17939 12345 12345678901 81', 'Compt_Courant', 2000, 3500, 2),
(4, '14158 12345 12345678901 97', 'Compt_Courant', 200, 1000, 3);

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Mail` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`Admin_ID`, `Admin_Name`, `Admin_Mail`, `Admin_Password`) VALUES
(1, 'DUMBELDORE Albus', 'albus.D@gringotts.fr', '$2y$10$eKrVxxXrw5G28nDk6AalUugrgtfAb3xH6xcsOPU01cry5Ewl1oMxO');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Client_ID` int(11) NOT NULL,
  `Client_LastName` varchar(50) NOT NULL,
  `Client_Name` varchar(50) NOT NULL,
  `Client_Mail` varchar(100) NOT NULL,
  `Client_Address` varchar(200) DEFAULT NULL,
  `Client_Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`Client_ID`, `Client_LastName`, `Client_Name`, `Client_Mail`, `Client_Address`, `Client_Phone`) VALUES
(1, 'GRANGER', 'Hermione', 'hermione.G@gringotts.fr', '9 rue des Hiboux, 77100 UneVille', '0654382947'),
(2, 'POTTER', 'Harry', 'harry.P@gringotts.fr', '53 rue des Baguettes Magiques, 95600 CetteVille', '0736405721'),
(3, 'WEASLEY', 'Ronald', 'ronald.W@gringotts.fr', '9 rue des Hiboux, 77100 UneVille', '0649574425');

-- --------------------------------------------------------

--
-- Structure de la table `contracts`
--

CREATE TABLE `contracts` (
  `Contract_ID` int(11) NOT NULL,
  `Contract_Type` varchar(50) NOT NULL,
  `Contract_Amount` float NOT NULL,
  `Contract_Duration` int(11) NOT NULL,
  `Contract_End` date NOT NULL,
  `Client_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contracts`
--

INSERT INTO `contracts` (`Contract_ID`, `Contract_Type`, `Contract_Amount`, `Contract_Duration`, `Contract_End`, `Client_ID`) VALUES
(2, 'Assurance_Vie', 10000, 120, '2035-05-01', 2),
(3, 'Assurance_Habitation', 50000, 12, '2026-02-01', 1),
(4, 'Credit_Immobilier', 350000, 300, '2050-02-15', 3),
(5, 'Credit_Consommation', 500, 3, '2025-07-31', 3),
(6, 'Compte_Epargne_Logement', 2500, 120, '2030-12-01', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`),
  ADD KEY `accounts_clients_FK` (`Client_ID`);

--
-- Index pour la table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Index pour la table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`Contract_ID`),
  ADD KEY `contracts_clients_FK` (`Client_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `Contract_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_clients_FK` FOREIGN KEY (`Client_ID`) REFERENCES `clients` (`Client_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_clients_FK` FOREIGN KEY (`Client_ID`) REFERENCES `clients` (`Client_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
