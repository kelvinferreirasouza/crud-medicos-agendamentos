-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2020 às 21:20
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `facil_consulta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `doctors`
--

INSERT INTO `doctors` (`id`, `email`, `name`, `password`, `address`, `created_at`, `updated_at`, `remember_token`) VALUES
(3, 'kelvinferreirasouza1@gmail.com', 'Kelvin Ferreira Souza', '$2y$10$2iaGm2vtJ33lRK2a5kWJFO8CxdlQNAo5QjaNcseinU6ULoUZfD.aa', 'Av. Pinheiro Machado, 676', '2020-03-08 06:22:31', '2020-03-11 03:07:40', NULL),
(4, 'rotta@hotmail.com', 'Eduardo Rotta', '$2y$10$14Ly5PBHK9jCszBoyw.kz.01P0Aak9RPKq5KCCioAmJ.CYD4cec92', 'R. Lôbo da Costa, 726', '2020-03-10 19:16:27', '2020-03-10 19:16:27', NULL),
(5, 'felixinsaurriaga@hotmail.com', 'Felix Antonio Insaurriaga', '$2y$10$wQkL0wnP/JoxhYeZqdwa8u2AsLWnkFM5xtodjtiPwJ7KuXnmHkgZ.', 'R. Santos Dumont, 172', '2020-03-10 19:19:45', '2020-03-10 19:19:45', NULL),
(6, 'marcelorocha@hotmail.com', 'Marcelo Passos da Rocha', '$2y$10$ARfcbN7j624xLSCuE02NMe2WqINQGs8780bxm2se0bt/qBd7aG7vS', 'R. Félix Xavier da Cunha, 824', '2020-03-10 19:20:50', '2020-03-10 19:20:50', NULL),
(7, 'eniopauloaraujo@hotmail.com', 'Enio Paulo Araujo', '$2y$10$/ntrd/LjliX7Rhmw3eXP0uSb/1Bd2lI4JWVJ0ycJtOaMhg7UI9sgm', 'R. Félix Xavier da Cunha, 755', '2020-03-10 19:22:48', '2020-03-10 19:22:48', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_03_07_170352_create_doctors_table', 2),
(5, '2020_03_07_171720_create_schedules_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `busy` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `schedules`
--

INSERT INTO `schedules` (`id`, `doctor_id`, `date`, `busy`, `created_at`, `updated_at`) VALUES
(9, 3, '2020-03-09 20:00:00', 0, '2020-03-08 06:03:37', '2020-03-09 15:53:21'),
(10, 3, '2020-03-09 21:30:00', 1, '2020-03-08 12:03:29', '2020-03-09 16:04:32'),
(13, 3, '2020-03-10 14:00:00', 1, '2020-03-10 14:03:38', '2020-03-10 19:39:50'),
(15, 4, '2020-03-10 18:45:00', 0, '2020-03-10 07:03:50', '2020-03-10 19:16:50'),
(16, 5, '2020-03-11 14:00:00', 1, '2020-03-10 07:03:53', '2020-03-11 03:15:00'),
(17, 6, '2020-03-15 21:00:00', 0, '2020-03-10 07:03:04', '2020-03-10 19:21:04'),
(18, 7, '2020-03-18 13:45:00', 0, '2020-03-10 07:03:00', '2020-03-10 19:23:00'),
(19, 4, '2020-03-10 20:00:00', 0, '2020-03-10 07:03:03', '2020-03-10 19:53:03'),
(20, 4, '2020-03-10 21:00:00', 0, '2020-03-10 07:03:24', '2020-03-10 19:53:24'),
(21, 5, '2020-03-11 16:00:00', 1, '2020-03-10 07:03:57', '2020-03-10 19:54:13'),
(22, 5, '2020-03-12 17:00:00', 0, '2020-03-10 07:03:06', '2020-03-10 19:54:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kelvin Souza', 'kelvinferreirasouza1@gmail.com', NULL, '$2y$10$XEh8dl/4QYTEyPk0qDku5e54.nc57SLDWZoh2zrKizaL9GuV1nKQK', NULL, '2020-03-07 20:47:22', '2020-03-07 20:47:22'),
(2, 'Greicy', 'greicylapschies@hotmail.com', NULL, '$2y$10$TeKthZxvw0CL6wn//T.bC.rowAiUSDTAMuvG1db6GASVWhfgRyrd.', NULL, '2020-03-07 20:48:36', '2020-03-07 20:48:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_doctor_id_foreign` (`doctor_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
