-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 12 nov. 2019 à 12:39
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hireo`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(16, 'bonjour', 11, 4, 'App\\Services', '2019-10-29 12:26:46', '2019-10-29 12:26:46'),
(17, 'bonjour lobna', 11, 16, 'App\\Comment', '2019-10-29 12:27:24', '2019-10-29 12:27:24'),
(18, 'winek cv !!', 11, 4, 'App\\Services', '2019-10-29 12:27:32', '2019-10-29 12:27:32'),
(19, 'bonjour', 10, 6, 'App\\Services', '2019-10-29 14:05:25', '2019-10-29 14:05:25');

-- --------------------------------------------------------

--
-- Structure de la table `details_users`
--

CREATE TABLE `details_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` int(11) NOT NULL,
  `photo_profil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeinfluencer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlfb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlinstagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `details_users`
--

INSERT INTO `details_users` (`id`, `id_users`, `photo_profil`, `tel1`, `tel2`, `fax`, `ville`, `adress`, `cp`, `poste`, `typeinfluencer`, `urlfb`, `urlinstagram`, `presentation`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-24 11:16:00', '2019-10-24 11:16:00'),
(5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-28 08:59:40', '2019-10-28 08:59:40'),
(6, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-28 09:04:37', '2019-10-28 09:04:37'),
(8, 10, '296055_Monji-Slim-tof.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', NULL, NULL, '\"', '2019-10-28 13:53:12', '2019-10-29 13:29:08'),
(9, 11, '461248_helmi ayedi.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', 'https://www.facebook.com/mosaiquefm/', 'https://www.instagram.com/cristiano/', '\"  \"', '2019-10-29 12:09:49', '2019-10-30 12:47:56');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_23_124550_create_details_users_table', 1),
(4, '2019_09_24_133326_create_services_table', 1),
(5, '2019_09_24_134008_create_mots_table', 1),
(6, '2019_10_17_093423_create_sousservices_table', 1),
(7, '2019_10_17_143355_create_servicesproposes_table', 1),
(8, '2019_10_21_143256_create_messages_table', 1),
(9, '2019_10_24_125401_create_comments_table', 2),
(10, '2019_10_24_144011_create_notifications_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

CREATE TABLE `mots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_offre` int(11) DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mots`
--

INSERT INTO `mots` (`id`, `id_offre`, `tags`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 2, 'Développement', '1', '2019-10-24 11:21:03', '2019-10-24 11:21:03'),
(2, 3, 'Publicté', '4', '2019-10-24 12:37:50', '2019-10-24 12:37:50'),
(3, 4, 'santé', '1', '2019-10-25 11:18:13', '2019-10-25 11:18:13'),
(4, 5, 'FrontEnd', '11', '2019-10-29 12:36:10', '2019-10-29 12:36:10'),
(5, 5, NULL, '11', '2019-10-29 12:36:10', '2019-10-29 12:36:10'),
(6, 6, 'FrontEnd', '10', '2019-10-29 14:02:43', '2019-10-29 14:02:43'),
(7, 7, 'Développement', '11', '2019-10-30 08:36:16', '2019-10-30 08:36:16'),
(8, 8, 'Développement', '11', '2019-10-30 08:51:17', '2019-10-30 08:51:17'),
(9, 9, 'Développement', '11', '2019-10-30 09:40:01', '2019-10-30 09:40:01'),
(10, 10, 'eee', '11', '2019-10-30 11:07:10', '2019-10-30 11:07:10'),
(11, 11, '1111', '11', '2019-10-30 11:10:47', '2019-10-30 11:10:47'),
(12, 12, 'dddd', '11', '2019-10-30 11:14:55', '2019-10-30 11:14:55'),
(13, 13, 'med', '11', '2019-10-30 11:16:56', '2019-10-30 11:16:56'),
(14, 14, 'eee', '11', '2019-10-30 11:28:38', '2019-10-30 11:28:38');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1f206d97-bf38-4b60-ad6a-bfadf7e53571', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"Pieter Parker\",\"serviceTitle\":\"sant\\u00e9\",\"serviceId\":4}', '2019-10-25 11:20:43', '2019-10-25 11:19:39', '2019-10-25 11:20:43'),
('2bd3f441-9be4-46cf-8f49-2b9ec8cd4401', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-07 23:00:00', '2019-10-24 14:27:02', '2019-10-24 14:27:02'),
('447e604b-ecbf-45a9-a24c-4dfd5e94eaf1', 'App\\Notifications\\NewCommentPosted', 'App\\User', 10, '{\"user\":\"med\",\"serviceTitle\":\"D\\u00e9veloppement Angular\",\"serviceId\":6}', '2019-10-29 02:05:44', '2019-10-29 14:05:25', '2019-10-29 14:05:44'),
('463d1f49-d72b-4c04-a3af-d32f45da24c6', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-25 11:18:22', '2019-10-25 07:02:08', '2019-10-25 11:18:22'),
('53f0acae-b02f-46cc-9c12-9a6163c49dda', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"Pieter Parker\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-25 06:59:56', '2019-10-24 13:54:31', '2019-10-25 06:59:56'),
('62901eaa-e30b-4c85-b036-c60320b06fdb', 'App\\Notifications\\NewCommentPosted', 'App\\User', 4, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"Publicit\\u00e9\",\"serviceId\":3}', '2019-10-25 07:08:53', '2019-10-25 07:03:47', '2019-10-25 07:08:53'),
('73ae8414-72bf-4578-94f8-722e09c50c11', 'App\\Notifications\\NewCommentPosted', 'App\\User', 4, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"Publicit\\u00e9\",\"serviceId\":3}', '2019-10-25 07:08:44', '2019-10-25 07:01:41', '2019-10-25 07:08:44'),
('74707cc3-9417-4d2e-839a-761b4b596db5', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"amrilobna\",\"serviceTitle\":\"sant\\u00e9\",\"serviceId\":4}', NULL, '2019-10-29 12:27:32', '2019-10-29 12:27:32'),
('7ec67284-ecaa-407e-85dd-75e2f01de66b', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-25 06:57:30', '2019-10-25 06:46:11', '2019-10-25 06:57:30'),
('b2f55b02-c28f-4eac-ba20-2c74a00fe66b', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"amrilobna\",\"serviceTitle\":\"sant\\u00e9\",\"serviceId\":4}', NULL, '2019-10-29 12:26:46', '2019-10-29 12:26:46'),
('e75382a8-1cc9-4c0f-af95-553a2187f481', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"mohamedRejab\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-25 07:00:51', '2019-10-25 07:00:47', '2019-10-25 07:00:51'),
('fcc210fe-9dbb-42ce-84e2-338e11bb940c', 'App\\Notifications\\NewCommentPosted', 'App\\User', 1, '{\"user\":\"Pieter Parker\",\"serviceTitle\":\"loisir\",\"serviceId\":2}', '2019-10-25 11:20:53', '2019-10-25 11:20:00', '2019-10-25 11:20:53');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localisation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `salaire_min` int(11) DEFAULT NULL,
  `salaire_max` int(11) DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sous_services` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noms_services` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `user_id`, `titre`, `type`, `localisation`, `description`, `salaire_min`, `salaire_max`, `document`, `sous_services`, `noms_services`, `created_at`, `updated_at`) VALUES
(2, 1, 'loisir', 'Facebook', 'sfax', 'text text text', 1111, 20000, '', '2', '1', '2019-10-24 11:21:03', '2019-10-24 11:21:03'),
(4, 1, 'santé', 'Facebook', 'sfax', 'bla bla bla', 400, 1700, '', '7', '3', '2019-10-25 11:18:13', '2019-10-25 11:18:13'),
(6, 10, 'Développement Angular', NULL, 'tunis', 'Full Time Developpement', 1700, 2200, '', '1', '1', '2019-10-29 14:02:43', '2019-10-29 14:02:43'),
(9, 11, 'Développement Angular', NULL, 'tunis', 'Dev', 400, 1700, '', '2', '1', '2019-10-30 09:40:01', '2019-10-30 09:40:01'),
(10, 11, 'vue js', NULL, 'tunis', 'eeeee', 1111, 2222, '', '5', '2', '2019-10-30 11:07:10', '2019-10-30 11:07:10'),
(11, 11, '3D unity', NULL, 'sfax', '3D unity game video', 400, 750, '', '4', '2', '2019-10-30 11:10:47', '2019-10-30 12:36:07'),
(13, 11, 'medina', NULL, 'tunis', NULL, 1200, 1400, '', '3', '2', '2019-10-30 11:16:56', '2019-10-30 12:35:14'),
(14, 11, 'mmm', NULL, 'tunis', NULL, 1400, 1700, '', '5', '2', '2019-10-30 11:28:38', '2019-10-30 12:24:38');

-- --------------------------------------------------------

--
-- Structure de la table `servicesproposes`
--

CREATE TABLE `servicesproposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomservice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `servicesproposes`
--

INSERT INTO `servicesproposes` (`id`, `nomservice`, `created_at`, `updated_at`) VALUES
(1, 'Développement', NULL, NULL),
(2, 'Multimedia', NULL, NULL),
(3, 'Publicité', NULL, NULL),
(4, 'Autre', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sousservices`
--

CREATE TABLE `sousservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomsousservices` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sousservices`
--

INSERT INTO `sousservices` (`id`, `nomsousservices`, `id_service`, `created_at`, `updated_at`) VALUES
(1, 'React', 1, NULL, NULL),
(2, 'Angular', 1, NULL, NULL),
(3, 'Montage Video', 2, NULL, NULL),
(4, 'Photoshop', 2, NULL, NULL),
(5, 'Ilustrator', 2, NULL, NULL),
(7, 'Sur Facebook', 3, NULL, NULL),
(8, 'Sur Instagram', 3, NULL, NULL),
(9, 'Autre', 4, NULL, NULL),
(10, 'Les Deux', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `provider`, `provider_id`, `token`, `etat`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamedRejab', 'https://via.placeholder.com/150', 'mohamedhaoili@gmail.com', '$2y$10$mB4bdTafY2HOxU2GyfOpJe8CZ3Z49LrquvkbqVY3adTyPrFXojeqS', NULL, NULL, 'eZSO1sxhV5Hu6vYwqiwUoYFq66O0lW3RgsqIkBXWtgwU28P249iIiwYiAeQk', 'verifier', NULL, NULL, '2019-10-24 11:16:00', '2019-10-24 11:16:16'),
(7, 'med', 'https://via.placeholder.com/150', 'mohamed.haouali1@gmail.com', '$2y$10$1NvCW4OyW9wIzsgKjeVy/uq3JFYgBsPeHKJoPBxM9ffkHoGASabeW', NULL, NULL, '69b8dEtShRNpxRPBIrXEZfVDXMp1w4yIfcyQDejhafz5I82lsevRmHcudPAv', 'non verifier', NULL, NULL, '2019-10-28 08:59:40', '2019-10-28 08:59:40'),
(8, 'mohamedRejab', 'https://via.placeholder.com/150', 'mohamed.rejab003@gmail.com', '$2y$10$T1Ro9FB1kRjqrh7KmojAHeRfLo5fzJPpSRmP0H6HJUfpLP3b9QULa', NULL, NULL, 'RkGAs6RGwj6HYLfibC2H5nd4vu7LusAxfmwWSCloR9aKGgG5iQOFgLrqJ88w', 'verifier', NULL, NULL, '2019-10-28 09:04:37', '2019-10-28 09:09:03'),
(10, 'med', 'https://via.placeholder.com/150', 'giga466@hotmail.com', '$2y$10$2//7vTjfVRInHFD/2p0.QuDIHsdMGHzDvRVAo0eM2QQutiA9YD62m', NULL, NULL, 'OmVhYoat8EsOTxZZW6NmcGgejsorI8XiDaZbskwD5J835h3Ausu1Coa3Qnv8', 'verifier', NULL, NULL, '2019-10-28 13:53:12', '2019-10-29 13:26:07'),
(11, 'amrilobna', 'https://via.placeholder.com/150', 'amrilobna1@gmail.com', '$2y$10$5qlRYGMOFv3y7YZ4iK4gX.n1z3vdq9Lb8446Se2PHoiZtX20dMceS', NULL, NULL, 'V9NWUoOteXhYJgtWdRG9p14GYA1Q2L7jFDY5MGcu727ryYMy1sIxSJv5U4rb', 'verifier', NULL, NULL, '2019-10-29 12:09:49', '2019-10-29 12:11:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `details_users`
--
ALTER TABLE `details_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mots`
--
ALTER TABLE `mots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Index pour la table `servicesproposes`
--
ALTER TABLE `servicesproposes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sousservices`
--
ALTER TABLE `sousservices`
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
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `details_users`
--
ALTER TABLE `details_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `mots`
--
ALTER TABLE `mots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `servicesproposes`
--
ALTER TABLE `servicesproposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sousservices`
--
ALTER TABLE `sousservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
