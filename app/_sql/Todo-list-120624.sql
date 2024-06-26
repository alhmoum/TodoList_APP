-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 12 juin 2024 à 09:57
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Todo-list`
--
-----------


-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `comment`) VALUES
(1, 'admin', 'CRUD'),
(2, 'editor', 'CRU'),
(3, 'user', 'CR');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `name`, `comment`) VALUES
(1, 'started', 'task has started'),
(2, 'on going', 'task is in progress'),
(3, 'pending', 'task  has stopped'),
(4, 'cancelled', 'task  has stopped'),
(5, 'completed', 'task is in progress');

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `started_time` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `id_task_giver` int(11) NOT NULL,
  `id_assigned_to` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `started_time`, `due_date`, `id_task_giver`, `id_assigned_to`, `id_status`) VALUES
(1, 'projet crud ', 'finir le projet crud tasks', '2024-06-12 00:00:00', '2024-07-09 00:00:00', 1, 3, 1),
(2, 'projet react ', 'construire un projet en react', '2024-06-11 00:00:00', '2024-09-09 00:00:00', 1, 2, 1),
(3, ' échequier de sissa', 'résoudre l\'algo de sisa', '2024-05-21 00:00:00', '2024-06-06 00:00:00', 1, 4, 5),
(4, 'Crud ville', 'finir le crud de bouteina', '2024-06-09 00:00:00', '2024-06-13 00:00:00', 1, 3, 4),
(5, 'MCD bdd classicmodels', 'finir le MCD bdd classicmodels', '2024-06-03 00:00:00', '2024-07-12 00:00:00', 1, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `first_name`, `last_name`, `active`, `id_role`) VALUES
(1, '123', 'John ', 'Smith', 1, 1),
(2, '123', 'Apple', 'citron', 1, 1),
(3, '123', 'Lhassan ', 'Alhmoum', 1, 1),
(4, '123', 'Bleza ', 'Plegnon', 1, 1),
(5, '123', 'Leni ', 'Bbop', 1, 1),
(6, '123', 'Alfred ', 'Le Compte', 1, 1),
(7, '123', 'Julie ', 'Maman', 1, 1),
(8, '123', 'Ramzi ', 'zidane', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
