-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jan-2019 às 21:30
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprojet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `pontuacao` double(8,2) NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `preco`, `pontuacao`, `imagem`, `created_at`, `updated_at`) VALUES
(6, 'DOTA 2', 0.00, 70.00, 'https://steamcdn-a.akamaihd.net/steam/apps/570/header.jpg?t=1543590720', '2019-01-13 20:13:24', '2019-01-13 20:13:24'),
(7, 'Sanic Ball', 0.00, 33.00, 'https://goo.gl/nzFzkn', '2019-01-13 20:16:21', '2019-01-13 20:16:21'),
(8, 'Monster Hunter: World', 50.00, 89.00, 'https://goo.gl/shQeAk', '2019-01-13 20:18:20', '2019-01-13 20:19:36'),
(9, 'Dark Souls III', 25.00, 96.00, 'https://goo.gl/hu1XnK', '2019-01-13 20:21:24', '2019-01-13 20:21:24'),
(10, 'SUPER MEAT BOY', 12.00, 65.00, 'https://goo.gl/Gz4U2R', '2019-01-13 20:28:01', '2019-01-13 20:28:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_plataformas`
--

CREATE TABLE `jogos_plataformas` (
  `jogo_id` int(10) UNSIGNED NOT NULL,
  `plataforma_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogos_plataformas`
--

INSERT INTO `jogos_plataformas` (`jogo_id`, `plataforma_id`, `created_at`, `updated_at`) VALUES
(6, 1, NULL, NULL),
(7, 1, NULL, NULL),
(8, 1, NULL, NULL),
(8, 2, NULL, NULL),
(8, 3, NULL, NULL),
(9, 1, NULL, NULL),
(9, 2, NULL, NULL),
(9, 3, NULL, NULL),
(10, 1, NULL, NULL),
(10, 2, NULL, NULL),
(10, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_13_181622_create_jogos_table', 1),
(4, '2018_12_13_181649_create_plataformas_table', 1),
(5, '2019_01_03_154306_create_jogos_plataformas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataformas`
--

CREATE TABLE `plataformas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `plataformas`
--

INSERT INTO `plataformas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'PC', '2019-01-13 19:01:07', '2019-01-13 19:01:07'),
(2, 'PS4', '2019-01-13 19:01:16', '2019-01-13 19:01:16'),
(3, 'Xbox', '2019-01-13 19:30:54', '2019-01-13 19:30:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd@gmail.com', NULL, '$2y$10$1OQBUcvK0b3AxUGc.BK.bucmK31isvPLUDyJZwkRe0PPJRTF.yAfW', 'lRp8WQkzUbzxmiNcmFM6Vvnm9XO3tNz74qpdL4wpEH0N9sptwi6fa1cJZNNn', '2019-01-13 19:00:52', '2019-01-13 19:00:52'),
(2, 'dsa', 'dsa@gmail.com', NULL, '$2y$10$AvKFPSbRm.1gBuiYr449U.ehz.ToafeZXW1ePMJTFXnj.g77bwvKy', 'yWweR8eMyiGu0jSR362SsvrrxR560FvbEMeOutDyH8W0C12WaJu3RUovu2Qg', '2019-01-13 19:11:32', '2019-01-13 19:11:32'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$HPaXSaZpAONqfFSGFp.CwOgvCuI1jMlWHtw/X0XpBWa32omxDQEea', 'pCG92ovPUN9QnQocBxI6X0tTx9N90PEs9r8uq0ByF4k8t7xNb8FTHqq8SwSs', '2019-01-13 19:24:44', '2019-01-13 19:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogos_plataformas`
--
ALTER TABLE `jogos_plataformas`
  ADD KEY `jogos_plataformas_jogo_id_foreign` (`jogo_id`),
  ADD KEY `jogos_plataformas_plataforma_id_foreign` (`plataforma_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plataformas`
--
ALTER TABLE `plataformas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plataformas`
--
ALTER TABLE `plataformas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogos_plataformas`
--
ALTER TABLE `jogos_plataformas`
  ADD CONSTRAINT `jogos_plataformas_jogo_id_foreign` FOREIGN KEY (`jogo_id`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `jogos_plataformas_plataforma_id_foreign` FOREIGN KEY (`plataforma_id`) REFERENCES `plataformas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
