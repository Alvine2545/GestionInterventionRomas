-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 21 sep. 2022 à 08:22
-- Version du serveur :  8.0.21
-- Version de PHP : 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `romas_gestintervention`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `raisonSocial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`) VALUES
('6f30ef5b-d090-4b01-a174-2a60e0a941dc', 'Evenement 1', '2021-04-02', NULL),
('5d09338b-5828-4799-98fd-d7854963405f', 'Evenement 2', '2021-04-10T08:00:00', '2021-04-10T16:00:00'),
('40faa286-cbf3-47c5-acee-f1ff11d03efd', 'Evenement 3', '2021-04-20', '2021-04-22');

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

DROP TABLE IF EXISTS `factures`;
CREATE TABLE IF NOT EXISTS `factures` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `prix` bigint NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer` tinyint(1) NOT NULL,
  `type` enum('Proformat','Facture_vente','Facture_annulation') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `interventions_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `factures_user_id_foreign` (`user_id`),
  KEY `factures_interventions_id_foreign` (`interventions_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `installations`
--

DROP TABLE IF EXISTS `installations`;
CREATE TABLE IF NOT EXISTS `installations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `installations_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `interventions`
--

DROP TABLE IF EXISTS `interventions`;
CREATE TABLE IF NOT EXISTS `interventions` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `solution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appreciation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer` tinyint(1) NOT NULL DEFAULT '0',
  `plannings_id` bigint UNSIGNED NOT NULL,
  `plannings_users_id` bigint UNSIGNED NOT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `interventions_plannings_id_foreign` (`plannings_id`),
  KEY `interventions_plannings_users_id_foreign` (`plannings_users_id`),
  KEY `interventions_type_id_foreign` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interventions`
--

INSERT INTO `interventions` (`id`, `details`, `lieu`, `code`, `date`, `solution`, `reference`, `appreciation`, `payer`, `plannings_id`, `plannings_users_id`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'hk kihun hbjugyuoipkk, kbjhuioj, kbjio', 'gfchb hyguij', 'Intervention N°001', '2022-09-07 00:00:00', 'ghujk bgyui ghjkl rtyui', 'N°001', '', 0, 1, 1, 1, '2022-09-06 14:42:03', '2022-09-06 14:42:03'),
(2, 'hk kihun hbjugyuoipkk, kbjhuioj, kbjio', 'gfchb hyguij', 'Intervention N°001', '2022-09-07 00:00:00', 'ghujk bgyui ghjkl rtyui', 'N°001', '', 0, 1, 1, 1, '2022-09-06 14:42:03', '2022-09-06 14:42:03'),
(3, 'dgfhbjh tyguyijk, nbgyiujk oiok', 'nhbg j', 'Intervention N°002', '2022-09-08 00:00:00', '²iokn dfsjn sqjnbhkn,', 'N°002', '', 0, 2, 1, 1, '2022-09-06 15:53:05', '2022-09-06 15:53:05'),
(4, 'gf\'h-j khgfdgr\'\'jkgi', 'jhy-k;,jjn', 'Intervention N°002', '2022-09-08 00:00:00', 'hhgdfstdredf fjhjugyfdtsed', 'N°002', '', 0, 2, 1, 2, '2022-09-06 15:55:24', '2022-09-06 15:55:24');

-- --------------------------------------------------------

--
-- Structure de la table `lesroles`
--

DROP TABLE IF EXISTS `lesroles`;
CREATE TABLE IF NOT EXISTS `lesroles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `roles_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lesroles_roles_id_foreign` (`roles_id`),
  KEY `lesroles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(85, '2014_10_12_000000_create_users_table', 1),
(86, '2014_10_12_100000_create_password_resets_table', 1),
(87, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(88, '2019_08_19_000000_create_failed_jobs_table', 1),
(89, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(90, '2022_06_21_122837_create_client_table', 1),
(91, '2022_06_21_144607_create_pannes_table', 1),
(92, '2022_06_21_144708_create_installations_table', 1),
(93, '2022_06_21_145023_create_produits_table', 1),
(94, '2022_06_21_145116_create_utilisateurs_table', 1),
(95, '2022_06_21_145201_create_produitinstalles_table', 1),
(96, '2022_06_21_145308_create_responsables_table', 1),
(97, '2022_06_21_145331_create_techniciens_table', 1),
(98, '2022_06_21_145453_create_type_devis_table', 1),
(99, '2022_06_21_145543_create_rapports_table', 1),
(100, '2022_06_21_145603_create_paiements_table', 1),
(101, '2022_06_21_145634_create_plannings_table', 1),
(102, '2022_06_21_145709_create_type_interventions_table', 1),
(103, '2022_06_29_084128_create_roles_table', 1),
(104, '2022_06_30_111312_create_lesroles_table', 1),
(105, '2022_07_04_173957_create_sessions_table', 1),
(106, '2022_07_05_142802_create_roles_users_table', 1),
(107, '2022_07_11_165850_create_events_table', 1),
(108, '2022_07_21_155757_create_plannings_users_table', 1),
(109, '2022_07_27_120430_create_notifications_table', 1),
(110, '2022_08_23_135858_create_pannes_plannings_table', 1),
(111, '2022_08_25_145519_create_interventions_table', 1),
(112, '2022_08_26_145423_create_factures_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `reste` bigint NOT NULL,
  `montantpayer` bigint NOT NULL,
  `devis_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paiements_devis_id_foreign` (`devis_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pannes`
--

DROP TABLE IF EXISTS `pannes`;
CREATE TABLE IF NOT EXISTS `pannes` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `traite` text COLLATE utf8mb4_unicode_ci,
  `nom` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produitinstalles_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pannes_produitinstalles_id_foreign` (`produitinstalles_id`),
  KEY `pannes_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pannes`
--

INSERT INTO `pannes` (`id`, `description`, `traite`, `nom`, `photo`, `produitinstalles_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ghjkl uhyftc oik, hyguoi guyyu uhuiuj giug', NULL, '2_PANNE_1', 'photosPanne/6hL5MIxbdQ2f6B0G09SFnadaHlTOnjLMCbdbYHyM.jpg', 1, 2, '2022-09-06 13:32:24', '2022-09-06 13:32:24'),
(2, 'dtyuh gftr(t-èuyiun gt-è_uj t-è_ijon ty-èèui', NULL, '2_PANNE_1', 'photosPanne/Sq0uHa9wKMu6SLcPS1HUttvVmrC7fgFwfhasfHwb.png', 1, 2, '2022-09-06 15:51:58', '2022-09-06 15:51:58');

-- --------------------------------------------------------

--
-- Structure de la table `pannes_plannings`
--

DROP TABLE IF EXISTS `pannes_plannings`;
CREATE TABLE IF NOT EXISTS `pannes_plannings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `estTraiter` tinyint(1) NOT NULL DEFAULT '0',
  `panne_id` bigint UNSIGNED NOT NULL,
  `planning_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pannes_plannings_panne_id_foreign` (`panne_id`),
  KEY `pannes_plannings_planning_id_foreign` (`planning_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pannes_plannings`
--

INSERT INTO `pannes_plannings` (`id`, `estTraiter`, `panne_id`, `planning_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, '2022-09-06 15:55:24'),
(2, 1, 1, 2, NULL, '2022-09-06 15:55:24'),
(3, 1, 2, 2, NULL, '2022-09-06 15:55:24'),
(4, 0, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plannings`
--

DROP TABLE IF EXISTS `plannings`;
CREATE TABLE IF NOT EXISTS `plannings` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `priorite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `responsables_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plannings_responsables_id_foreign` (`responsables_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plannings`
--

INSERT INTO `plannings` (`id`, `title`, `start`, `end`, `priorite`, `photo`, `date`, `responsables_id`, `created_at`, `updated_at`) VALUES
(1, 'Planning2022-09-07', '2022-09-07 08:38:00', '2022-09-07 17:38:00', 'eleve', 'eleve', '2022-09-07', 1, '2022-09-06 14:38:15', '2022-09-06 14:38:15'),
(2, 'Planning2022-09-08', '2022-09-08 12:52:00', '2022-09-08 19:52:00', 'eleve', 'eleve', '2022-09-08', 1, '2022-09-06 15:52:24', '2022-09-06 15:52:24'),
(3, 'Planning2022-09-06', '2022-09-06 11:18:00', '2022-09-06 13:18:00', 'eleve', 'eleve', '2022-09-06', 1, '2022-09-21 07:18:18', '2022-09-21 07:18:18');

-- --------------------------------------------------------

--
-- Structure de la table `planning_user`
--

DROP TABLE IF EXISTS `planning_user`;
CREATE TABLE IF NOT EXISTS `planning_user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `planning_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `planning_user_user_id_foreign` (`user_id`),
  KEY `planning_user_planning_id_foreign` (`planning_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `planning_user`
--

INSERT INTO `planning_user` (`id`, `user_id`, `planning_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `produitinstalles`
--

DROP TABLE IF EXISTS `produitinstalles`;
CREATE TABLE IF NOT EXISTS `produitinstalles` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateInstallation` date NOT NULL,
  `produit_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produitinstalles_produit_id_foreign` (`produit_id`),
  KEY `produitinstalles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produitinstalles`
--

INSERT INTO `produitinstalles` (`id`, `version`, `description`, `dateInstallation`, `produit_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2.0', 'fghj fghjkl jk,', '2022-09-01', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `type`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Kapersky', 'Matériel', 'Produits/LzBNLw5R5lKdejI6NLhKrpLcOIw88kfPHJNL1yuu.jpg', '2022-09-06 13:18:36', '2022-09-06 13:18:36');

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

DROP TABLE IF EXISTS `rapports`;
CREATE TABLE IF NOT EXISTS `rapports` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `paiement` tinyint(1) NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appreciations` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipes_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rapports_equipes_id_foreign` (`equipes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `responsables`
--

DROP TABLE IF EXISTS `responsables`;
CREATE TABLE IF NOT EXISTS `responsables` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Client', NULL, NULL),
(2, 'Technicien', NULL, NULL),
(3, 'Responsable', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `roles_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_users_roles_id_foreign` (`roles_id`),
  KEY `roles_users_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles_users`
--

INSERT INTO `roles_users` (`id`, `roles_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('29u3JKW2heEtLHIOqEevYpqHEeyfb4NkTrTOnWvO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNnlTVmlTUVZnb0dPblVtV3lTU1ppa2VWTm5SeWljOTJhRHFxN084NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1663748171),
('AOQ6ZAvyRNMeCoUvM1b6lXi2EivAcnXXMPjKUBVJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.42', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieWhZNE11VmI0d1k5Tmp6SmVndldXRVRlbkxYMnZuV3kxdVg2TWw2aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kZXZpcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkMnB2aHpxSkNXMVFTZjRPSFc2clFrZVhwSEF2NEtNY2F4TkFZcmE1UWk4SGZRTnZzRUgxRTIiO30=', 1663748367);

-- --------------------------------------------------------

--
-- Structure de la table `techniciens`
--

DROP TABLE IF EXISTS `techniciens`;
CREATE TABLE IF NOT EXISTS `techniciens` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_devis`
--

DROP TABLE IF EXISTS `type_devis`;
CREATE TABLE IF NOT EXISTS `type_devis` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_interventions`
--

DROP TABLE IF EXISTS `type_interventions`;
CREATE TABLE IF NOT EXISTS `type_interventions` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_interventions`
--

INSERT INTO `type_interventions` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Diagnostiques', '2022-09-16 10:55:54', '2022-09-16 10:55:54'),
(2, 'Réparation', '2022-09-16 11:03:36', '2022-09-16 11:03:36');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siege` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raisonSocial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `demande` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `siege`, `raisonSocial`, `poste`, `nom`, `prenom`, `ifu`, `disponibilite`, `status`, `demande`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ali ABDOULAYE', 'tadjivehoun@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '$2y$10$2pvhzqJCW1QSf4OHW6rQkeXpHAv4KMcaxNAYra5Qi8HfQNvsEH1E2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 13:17:01', '2022-09-06 13:17:01'),
(2, 'QCT SERVICES', 'qctservice@gmail.com', '62545745', 'Zogbohoué', 'Réseautage', NULL, NULL, NULL, '123456789123', 1, 1, 1, NULL, '$2y$10$xa6cXct/WR/3oDQUdGbzMOiop8dqauo7r2wuTxAlv0qsv4PAPmCmC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 13:17:41', '2022-09-06 13:27:33'),
(3, NULL, 'iugfdun@gmail.com', '96457862', 'Cotonou', NULL, 'Maintenancier', 'SAIBOU', 'Atikatou', NULL, 1, 0, 0, NULL, '$2y$10$LfpgZgfR2MtH3G4eiIEXSOaP1DE11r.de..Hayr6shhbtiLln2LH.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-06 13:18:13', '2022-09-06 13:18:13');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raisonSocial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
