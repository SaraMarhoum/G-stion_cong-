-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 18 juin 2020 à 11:08
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appconge`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `CIN` int(11) NOT NULL,
  `tél` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prénom`, `CIN`, `tél`, `email`, `password`) VALUES
(1, 'Marhoum', 'Sara', 123, 6, 'sara_maroum@hotmail.com', 'azed'),
(2, 'admin', 'admin', 111, 6111, 'admin@hotmail.com', 'admin'),
(3, 'admin2', 'admin2', 222, 6222, 'admin2@hotmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Structure de la table `demandeconge`
--

CREATE TABLE `demandeconge` (
  `id` int(11) NOT NULL,
  `datedemande` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `typeconge` varchar(100) NOT NULL,
  `datedebut` varchar(50) NOT NULL,
  `dateretour` varchar(50) NOT NULL,
  `nbrjours` int(11) NOT NULL,
  `decision` varchar(100) NOT NULL,
  `CIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandeconge`
--

INSERT INTO `demandeconge` (`id`, `datedemande`, `typeconge`, `datedebut`, `dateretour`, `nbrjours`, `decision`, `CIN`) VALUES
(1, '2020-06-01 13:30:00', 'Congé annuel ', '01/07/2020', '21/07/2020', 21, 'Approuvé', 12),
(8, '2020-06-16 15:31:11', 'Congé exceptionnel / permissions d’absence', '12/05/2020', '30/05/2020', 8, 'Refusé', 13),
(10, '2020-06-16 15:32:51', 'Congé annuel', '2020-07-13', '2020-08-03', 21, 'Refusé', 40),
(11, '2020-06-16 15:34:55', 'Congé exceptionnel / permissions d’absence', '2020-06-22', '2020-06-29', 7, 'Approuvé', 30),
(12, '2020-06-17 10:11:17', 'Congé maladie', '2020-06-29', '2020-07-06', 7, 'Approuvé', 12),
(13, '2020-06-16 15:40:00', 'Congé annuel', '2020-06-21', '2020-07-05', 15, 'En attente', 20),
(14, '2020-06-16 15:40:50', 'Congé maladie', '2020-06-20', '2020-06-27', 7, 'En attente', 150);

-- --------------------------------------------------------

--
-- Structure de la table `salarié`
--

CREATE TABLE `salarié` (
  `id` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prénom` varchar(10) NOT NULL,
  `CIN` varchar(50) NOT NULL,
  `tél` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `Service` varchar(50) NOT NULL,
  `Grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salarié`
--

INSERT INTO `salarié` (`id`, `nom`, `prénom`, `CIN`, `tél`, `email`, `password`, `Service`, `Grade`) VALUES
(8, 'Gon', 'Freecs', '12', 612, 'gon.hxh@hotmail.com', '$2y$10$dvPeBfznPrTyY3KGu/eZ4.XIM4o9rOuFZnYnCnbqknM', 'Hunter pro', '2 étoiles'),
(9, 'Kurapika', 'Koruta', '14', 616, 'kurapika.hxh@hotmail.com', 'ecarlate', 'Hunter pro', '2 étoiles'),
(10, 'Killua', 'Zoldyk', '13', 613, 'killua.hxh@hotmail.com', '$2y$10$TC8ASIvqp6uRrRvM6T7Cbe57yWBo6y/NQYK94gVFJmG', 'Assassin', '2 étoiles'),
(12, 'Wing', 'San', '30', 627, 'wing.hxh@hotmail.com', '$2y$10$rYtgbmFR3ntqx19KH2PlMuwFc2kWC6dsu6rLOIqfW.2nwgoilZeae', 'Hunter pro', '2 étoiles'),
(13, '???', 'Leoryo', '16', 616, 'Leorio.hxh@hotmail.com', '$2y$10$LxqEyPYWDZKKj2wjFwR3suhDAe5kiZboCBjzhOOTz5v7kaWrnGXfu', 'Hunter pro', '1 étoile'),
(14, '???', 'Bisquet', '50', 650, 'bisquet.hxh@hotmail.com', '$2y$10$FZ4A4nBApssHQKUWQPqgQuAmET2L0xxZ4H3ou1myVxsGMq00TR1N.', 'Hunter pro', '3 étoiles'),
(15, '??', 'Netero', '150', 6150, 'netero.hxh@hotmail.com', '$2y$10$UVNXyn3NdYWGOCkvkqdKtOR3FMh8utZqmRho./XQADpI8.e4kYVRe', 'Hunter pro', '3 étoiles'),
(16, 'Illumi', 'Zoldyck', '20', 620, 'illumi.hxh@hotmail.com', '$2y$10$ht/PxAlxNTLRshKN8ArsY.FJPTuoOG2TeyC.h8C.rJuCgIgN6V4IK', 'Assassin', '3 étoiles'),
(17, '??', 'Kuroro', '000', 6000, 'kuroro@gmail.com', '$2y$10$0HNr6LYh8inQGkGSpSoh2O2F7bFgU.MafcEruWRdRt9QEChj7CzGy', 'Civil', '2 étoiles'),
(18, '??', 'Kaito', '20', 620, 'kaito.hxh@hotmail.com', 'ant', 'Hunter pro', '2 étoiles'),
(19, 'Gin', 'Uvo', '40', 630, 'uvo.hxh@hotmail.com', 'kurapika', 'assassin', '3 étoiles'),
(21, 'Marhoum', 'Sara', '555', 6555, 'sara@hotmail.com', ' sara', 'Hunter pro', '1 étoile');

-- --------------------------------------------------------

--
-- Structure de la table `typeconge`
--

CREATE TABLE `typeconge` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typeconge`
--

INSERT INTO `typeconge` (`id`, `type`, `description`) VALUES
(1, 'Congé annuel', '21 jours par an, cumulable.'),
(2, 'Congé exceptionnel / permissions d’absence', '10 jours par an. Liée aux évènements familiaux.\r\nLe pèlerinage aux Lieux saints de l’Islam.'),
(3, 'Congé maladie', 'Les congés pour raison de santé.'),
(4, 'Congé maternité ', '14 semaines.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandeconge`
--
ALTER TABLE `demandeconge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeconge` (`typeconge`),
  ADD KEY `idsalarie` (`CIN`);

--
-- Index pour la table `salarié`
--
ALTER TABLE `salarié`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CIN` (`CIN`);

--
-- Index pour la table `typeconge`
--
ALTER TABLE `typeconge`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `demandeconge`
--
ALTER TABLE `demandeconge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `salarié`
--
ALTER TABLE `salarié`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `typeconge`
--
ALTER TABLE `typeconge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
