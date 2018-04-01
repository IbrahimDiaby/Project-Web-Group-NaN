-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 01 avr. 2018 à 01:43
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Forfait` varchar(255) NOT NULL,
  `DatePaye` datetime NOT NULL,
  `DateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`ID`, `Nom`, `Prenom`, `Mail`, `Forfait`, `DatePaye`, `DateFin`) VALUES
(1, 'Diaby', 'Ibrahim', 'ibrahim.diaby@uvci.edu.ci', '1 mois', '2018-04-01 01:37:44', '2018-05-01 01:37:44'),
(2, 'Soro', 'Muhamed', 'muhamed.soro@gmail.com', '2 mois', '2018-04-01 01:38:20', '2018-05-31 01:38:20'),
(3, 'Aziz', 'Bara', 'bara.aziz@yopmail.com', '3 mois', '2018-04-01 01:38:52', '2018-06-30 01:38:52'),
(4, 'Kuroko Naruto', 'Sangoku', 'manga@manga.com', '12 mois', '2018-04-01 01:39:26', '2019-04-01 01:39:26'),
(5, 'ja', 'az', 'dknk', '4 mois', '2018-04-01 01:39:33', '2018-07-30 01:39:33'),
(6, 'Uzumaki', 'Boruto', 'boruto@univers-animeis.com', '12 mois', '2018-04-01 01:40:10', '2019-04-01 01:40:10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
