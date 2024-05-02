-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/05/2024 às 02:15
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wt_anime`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animes`
--

CREATE TABLE `animes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(150) NOT NULL,
  `estreia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `temporada` varchar(20) NOT NULL,
  `episodio` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `data_semana` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `animes`
--

INSERT INTO `animes` (`id`, `nome`, `estreia`, `temporada`, `episodio`, `genero`, `image`, `data_semana`, `created_at`, `updated_at`) VALUES
(1, 'Maou Gakuin no Futekigousha II', '2023-11-23 23:20:54', 'Inverno/Winter - jan', 12, '[\"A\\u00e7\\u00e3o\",\"Fantasia\"]', 'maou-gakuin-no-futekigousha.jpg', '2023-12-06', '2023-01-12 06:08:37', '2023-11-23 03:21:09'),
(2, 'Tokyo Revengers S2', '2023-12-22 01:28:02', 'Inverno/Winter - jan', 24, '[\"A\\u00e7\\u00e3o\",\"Drama\"]', 'tokyo-revengers-2.png', '0000-00-00', '2023-01-12 06:15:45', '2023-01-12 06:15:45'),
(3, 'Dungeon ni Deia IV parte 2', '2023-12-22 01:26:52', 'Inverno/Winter - jan', 11, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', 'dungeon-nidai-parte-2.jpg', '0000-00-00', '2023-01-12 06:17:26', '2023-01-12 06:17:26'),
(4, 'Ningen Fushin no Boukensha-tachi ga Sekai wo Sukuu you desu', '2023-11-23 20:14:49', 'Inverno/Winter - jan', 12, '[\"A\\u00e7\\u00e3o\",\"Com\\u00e9dia\"]', 'ningen-fushin.jpg', '0000-00-00', '2023-01-12 06:23:10', '2023-01-12 06:23:10'),
(5, 'Itai no wa Iya nano de Bougyoryoku ni Kyokufuri Shitai to Omoimasu. 2', '2023-11-23 19:16:49', 'Inverno/Winter - jan', 12, '[\"A\\u00e7\\u00e3o\",\"RPG\"]', 'itai-no-wa-2.jpg', '0000-00-00', '2023-01-12 06:24:24', '2023-01-12 06:24:24'),
(6, 'Mobile Suit Gundam: The Witch from Mercury', '2023-11-22 23:37:44', 'Inverno/Winter - jan', 0, '[\"A\\u00e7\\u00e3o\"]', 'gundam-mercury.webp', '0000-00-00', '2023-01-12 06:26:36', '2023-01-12 06:26:36'),
(8, 'Samurai X 2023', '2023-12-17 15:50:02', 'Abril Primavera 2023', 30, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Com\\u00e9dia\"]', 'samurai-x-2023.jpg', '2023-12-22', '2023-11-23 02:59:06', '2023-12-17 15:50:02'),
(9, 'Seijo no Maryoku wa Bannou desu 2nd', '2023-11-28 23:07:02', 'Outubro 2023', 13, '[\"Fantasia\",\"Slice of Life\"]', 'seijo-no-maryoku-2-2023.jpg', '2023-10-31', '2023-11-23 03:23:35', '2023-11-29 02:07:02'),
(10, 'Shangri la Frontier', '2024-04-15 23:10:42', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"RPG\"]', 'Shangri-La-2023.jpg', '2024-04-06', '2023-11-23 03:30:15', '2024-04-15 23:10:42'),
(11, 'Tate no Yuusha no Nariagari Season 3', '2023-12-11 02:32:27', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Fantasia\"]', 'tate-no-yuusha-3.jpg', '2023-11-01', '2023-11-23 03:33:58', '2023-12-10 03:25:24'),
(12, 'Goblin Slayer 2', '2023-11-23 00:38:02', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', 'goblin-slayer-2.jpg', '2023-11-24', '2023-11-23 03:36:34', '2023-11-23 03:36:34'),
(21, 'Tsuki ga Michibiku Isekai Douchuu 2', '2024-05-01 19:47:52', 'Janeiro Inverno 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Jogos\"]', 'tsuki-ga-michibiku-isekai-douchuu-2nd-season_1703198239.jpg', '2024-05-06', '2023-12-22 01:37:19', '2024-04-23 03:09:59'),
(22, 'Solo Leveling', '2024-04-15 23:09:38', 'Janeiro Inverno 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', '5e7f533c3b4f46244ca228af62e83dfa_1706825512.jpe', '2024-03-23', '2024-02-02 01:11:52', '2024-04-15 23:09:38'),
(23, 'Nozomanu Fushi no Boukensha', '2024-04-15 23:14:58', 'Janeiro Inverno 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', 'tyZ3DQPsg3sLa2rXy8w898f7swe_1706957983.jpg', '2024-03-22', '2024-02-03 13:59:43', '2024-04-15 23:14:58'),
(24, 'Sengoku Youko', '2024-03-01 04:19:54', 'Janeiro Inverno 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Com\\u00e9dia\"]', 'lrDZp18LeTj6iJFcc01SAMB50xv_1707088885.jpg', '2024-02-22', '2024-02-05 02:21:25', '2024-03-01 04:19:54'),
(25, 'Ragna Crimson', '2024-04-21 03:22:59', 'Outubro 2024', 25, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Fantasia\"]', '1696162636-2290-137709_1708033895.jpg', '2024-04-06', '2024-02-16 00:51:35', '2024-04-21 03:22:59'),
(26, 'Tensei Shitara Slime Datta Ken III', '2024-04-27 11:56:25', 'Abril Primavera 2024', 0, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', '140405l-212x300_1713208973.jpg', '2024-05-03', '2024-04-15 22:22:53', '2024-04-21 03:22:55'),
(27, 'Kami wa Game ni Ueteiru', '2024-05-01 23:58:37', 'Abril Primavera 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Jogos\"]', '136758l-208x300_1713212709.jpg', '2025-01-07', '2024-04-15 23:25:10', '2024-05-02 02:58:37'),
(28, 'Mushoku Tensei II: Isekai Ittara Honki Dasu Part 2', '2024-05-01 19:48:48', 'Abril Primavera 2024', 12, '', '141251l-213x300_1713212968.jpg', '2024-05-05', '2024-04-15 23:29:28', '2024-05-01 21:34:34'),
(29, 'Kainju 8-gou', '2024-04-29 23:38:20', 'Abril Primavera 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Com\\u00e9dia\"]', 'kaijuu-no-8_1713699677.jpg', '2024-05-04', '2024-04-21 14:41:17', '2024-04-21 14:41:17'),
(30, 'The New Gate', '2024-04-29 23:37:51', 'Abril Primavera 2024', 12, '[\"Aventura\",\"RPG\"]', '139549l-214x300_1713827697.jpg', '2024-05-04', '2024-04-23 02:14:57', '2024-04-23 02:14:57'),
(31, 'Wind Break', '2024-04-26 23:45:38', 'Abril Primavera 2024', 12, '[\"A\\u00e7\\u00e3o\",\"Luta\"]', '139255l-212x300_1713827889.jpg', '2024-05-02', '2024-04-23 02:18:09', '2024-04-23 02:18:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `assistindo`
--

CREATE TABLE `assistindo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anime` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(255) NOT NULL,
  `nota` int(11) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `assistindo`
--

INSERT INTO `assistindo` (`id`, `id_anime`, `id_user`, `episodio`, `dia_semana`, `nota`, `descricao`, `link`, `created_at`, `updated_at`) VALUES
(20, 21, 1, 17, 'Segunda-Feira', 9, 'menino, dragão e aranha', 'https://animefire.plus/animes/tsuki-ga-michibiku-isekai-douchuu-2nd-season-todos-os-episodios', '2024-02-10 00:21:58', '2024-04-30 03:03:38'),
(22, 26, 1, 4, 'Sexta-Feira', 9, '-', 'https://animefire.plus/animes/tensei-shitara-slime-datta-ken-3rd-season-todos-os-episodios', '2024-04-15 22:24:34', '2024-04-27 14:55:53'),
(23, 28, 1, 4, 'Domingo', 7, '-', 'https://animefire.plus/animes/mushoku-tensei-ii-isekai-ittara-honki-dasu-part-2-todos-os-episodios', '2024-04-15 23:31:06', '2024-05-01 21:34:33'),
(24, 27, 1, 39, 'Segunda-Feira', 6, 'game de aposta', 'https://animefire.plus/animes/kami-wa-game-ni-ueteiru-dublado-todos-os-episodios', '2024-04-15 23:34:03', '2024-05-02 02:58:37'),
(25, 29, 1, 3, 'sábado', 10, '-', 'https://animefire.plus/animes/kaijuu-8-gou-todos-os-episodios', '2024-04-21 14:41:45', '2024-04-28 14:27:11'),
(26, 30, 1, 3, 'sabado', 8, '-', 'https://animefire.plus/animes/the-new-gate-todos-os-episodios', '2024-04-23 02:15:34', '2024-04-30 02:37:27'),
(27, 31, 1, 4, 'Quinta-feira', 10, 'luta', 'https://animefire.plus/animes/wind-breaker-todos-os-episodios', '2024-04-23 02:18:41', '2024-04-26 01:46:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('9585eff6dc69493eedbfc9bd0cf35aa1', 'i:1;', 1714577153),
('9585eff6dc69493eedbfc9bd0cf35aa1:timer', 'i:1714577153;', 1714577153),
('f89801ed06bf9866865edf0b266a0338', 'i:1;', 1714413869),
('f89801ed06bf9866865edf0b266a0338:timer', 'i:1714413869;', 1714413869),
('jimytavares@hotmail.com|127.0.0.1', 'i:1;', 1714413870),
('jimytavares@hotmail.com|127.0.0.1:timer', 'i:1714413870;', 1714413870);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_23_221706_add_two_factor_columns_to_users_table', 1),
(5, '2024_04_23_221743_create_personal_access_tokens_table', 1),
(6, '2024_04_24_001108_animes', 1),
(7, '2024_04_24_114156_add_level_to_users', 1),
(8, '2024_04_24_122817_assistindo', 1),
(9, '2024_04_26_165727_create_parados', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `parados`
--

CREATE TABLE `parados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anime` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `episodio` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Dp308I8f9YIdsPZ3o1YbldBiPHUgGFhIGIEYb5rC', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS0lBV20zUVFVNGpXMGtldDdzU0tHTDBBMDk2QlN5MGZqa3RkdUNkaCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0L3d0LWFuaW1lL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkbTZ4QjZES25GN2RTUUZiQXNLY1N3ZWtEb3RNcXRDZS4vejJNb2JRNUVva2c0ZGxnbURCSFMiO30=', 1714607917);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL,
  `exp` decimal(8,2) NOT NULL,
  `classe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `level`, `exp`, `classe`) VALUES
(1, 'Jimy Dickson Jales da Silva', 'jimytavares@hotmail.com', NULL, '$2y$12$m6xB6DKnF7dSQFbAsKcSwekDotMqtCe./z2MobQ5Eokg4dlgmDBHS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-25 00:07:34', '2024-05-02 02:58:37', 2, 27.00, 'Aprendiz');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `assistindo`
--
ALTER TABLE `assistindo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assistindo_id_anime_foreign` (`id_anime`),
  ADD KEY `assistindo_id_user_foreign` (`id_user`);

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `parados`
--
ALTER TABLE `parados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parados_id_anime_foreign` (`id_anime`),
  ADD KEY `parados_id_user_foreign` (`id_user`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animes`
--
ALTER TABLE `animes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `assistindo`
--
ALTER TABLE `assistindo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `parados`
--
ALTER TABLE `parados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `assistindo`
--
ALTER TABLE `assistindo`
  ADD CONSTRAINT `assistindo_id_anime_foreign` FOREIGN KEY (`id_anime`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `assistindo_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `parados`
--
ALTER TABLE `parados`
  ADD CONSTRAINT `parados_id_anime_foreign` FOREIGN KEY (`id_anime`) REFERENCES `animes` (`id`),
  ADD CONSTRAINT `parados_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
