-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 07 juin 2020 à 00:47
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
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prénom`, `CIN`, `tél`, `email`, `password`) VALUES
(1, 'Marhoum', 'Sara', 123, 6, 'sara_maroum@hotmail.com', 'aze');

-- --------------------------------------------------------

--
-- Structure de la table `salarié`
--

CREATE TABLE `salarié` (
  `id` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prénom` varchar(10) NOT NULL,
  `CIN` int(11) NOT NULL,
  `tél` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Service` varchar(50) NOT NULL,
  `Grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salarié`
--

INSERT INTO `salarié` (`id`, `nom`, `prénom`, `CIN`, `tél`, `email`, `password`, `Service`, `Grade`) VALUES
(1, 'Zoldyk', 'Killua', 654, 4, 'killua.hxh@hotmail.com', 'gon', 'Hunter pro', 'étoile'),
(2, 'Freecs', 'Gon', 768, 3, 'gon.hxh@hotmail.com', 'gin', 'hunter pro / assassin', 'étoile'),
(10, '', '', 0, 0, '', '', '', ''),
(11, '', '', 0, 0, '', '', '', ''),
(12, '', '', 0, 0, '', '', '', ''),
(13, '', '', 0, 0, '', '', '', ''),
(14, '', '', 0, 0, '', '', '', ''),
(15, '', '', 0, 0, '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salarié`
--
ALTER TABLE `salarié`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `salarié`
--
ALTER TABLE `salarié`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
