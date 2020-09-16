-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 12:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2020_08_26_164202_create_simcards_table', 1),
(41, '2020_08_26_164239_create_tipo_ventas_table', 1),
(42, '2020_08_26_164305_create_operadors_table', 1),
(43, '2020_08_26_164330_create_productos_table', 1),
(44, '2020_08_26_164415_create_revenues_table', 1),
(45, '2020_08_26_164416_create_reportes_table', 1),
(46, '2020_09_13_173509_create_rols_table', 1),
(47, '2020_09_13_173635_create_rol_user_table', 1),
(48, '2020_09_13_174319_create_permisos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operadors`
--

CREATE TABLE `operadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operadors`
--

INSERT INTO `operadors` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Tigo', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(2, 'Claro', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(3, 'Movistar', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(4, 'Virgin', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(5, 'Flash mobile', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(6, 'Exito', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(7, 'Avantel', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(8, 'Etb', '2020-09-14 01:09:34', '2020-09-14 01:09:34'),
(9, 'Ronnin', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(10, 'Scarlet', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(11, 'Kaley mobile', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(12, 'Uff', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(13, 'Wom', '2020-09-14 01:09:35', '2020-09-14 01:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Chip Especial', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(2, 'Portabilidad Prepago', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(3, 'Promocion Portabilidad Prepago', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(4, 'Chip Prepago 3 dias', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(5, 'Chip Prepago 7 dias', '2020-09-14 01:09:36', '2020-09-14 01:09:36'),
(6, 'Chip Prepago 15 dias', '2020-09-14 01:09:36', '2020-09-14 01:09:36'),
(7, 'Portabilidad Pospago', '2020-09-14 01:09:36', '2020-09-14 01:09:36'),
(8, 'Migracio Pospago', '2020-09-14 01:09:36', '2020-09-14 01:09:36'),
(9, 'Portabilidad Pospago', '2020-09-14 01:09:36', '2020-09-14 01:09:36'),
(10, 'Pospago 5.11', '2020-09-14 01:09:37', '2020-09-14 01:09:37'),
(11, 'Pospago 5.2', '2020-09-14 01:09:37', '2020-09-14 01:09:37'),
(12, 'Pospago 5.3', '2020-09-14 01:09:37', '2020-09-14 01:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `reportes`
--

CREATE TABLE `reportes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iccid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operador_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_venta_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `revenue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revenues`
--

INSERT INTO `revenues` (`id`, `valor`, `created_at`, `updated_at`) VALUES
(1, '3000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(2, '5000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(3, '10000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(4, '15000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(5, '20000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(6, '60000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(7, '75000', '2020-09-14 01:09:35', '2020-09-14 01:09:35'),
(8, '100000', '2020-09-14 01:09:35', '2020-09-14 01:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-09-14 01:09:37', '2020-09-14 01:09:37'),
(2, 'supervisor', '2020-09-14 01:09:37', '2020-09-14 01:09:37'),
(3, 'asesor', '2020-09-14 01:09:37', '2020-09-14 01:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `rol_user`
--

CREATE TABLE `rol_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rol_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `simcards`
--

CREATE TABLE `simcards` (
  `id` bigint(20) NOT NULL,
  `iccid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_ventas`
--

CREATE TABLE `tipo_ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipo_ventas`
--

INSERT INTO `tipo_ventas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Prepago', '2020-09-14 01:09:33', '2020-09-14 01:09:33'),
(2, 'Pospago', '2020-09-14 01:09:34', '2020-09-14 01:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'asesor',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `rol`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Santander Acuña', 'santanderjose19@gmail.com', 'admin', NULL, '$2y$10$K3pbW0/okddFiFP.oud33e.R6AQbNrSvQH6wFddnCmeh.sZAG4yXG', NULL, '2020-09-14 01:09:37', '2020-09-14 01:09:37'),
(2, 'Fredy cala', 'freddycala@hotmail.com', 'admin', NULL, '$2y$10$Iqpfw3A7B.SiPuP6OojaLOLxHvL1zdbTlKWU3KzUo7CSNP.xxAgUO', NULL, '2020-09-14 01:09:37', '2020-09-14 02:46:34'),
(3, 'Lizeth margarita Rudas locarno', 'Rudaslocarnolizethmargarita@gmail.com', 'asesor', NULL, '$2y$10$8dog/TmdLJdP5xNqy/PeWekcBsFml9IQt7Y1dZ4orIOzbMU5eDQ6C', NULL, '2020-09-14 01:09:38', '2020-09-14 01:09:38'),
(4, 'Amanda Salazar romero', 'salazar.20166@gmail.com', 'asesor', NULL, '$2y$10$ovDdRwoOev2/J6k2TtUo3eBJ/1vBn1cnLT7QF/JXyDfV8J0cF0faK', NULL, '2020-09-14 01:09:38', '2020-09-14 01:09:38'),
(5, 'Nasly rocio mier perdomo', 'shadiilmendi2012@gmail.com', 'asesor', NULL, '$2y$10$7p3.OYZ7efIpTpRr7D55NOmmCG9qZM63To/Cjq2TgYdaC.GnvTqyq', NULL, '2020-09-14 01:09:38', '2020-09-14 01:09:38'),
(6, 'Keomad Polanco Moscote', 'bellarosapv@gmail.com', 'asesor', NULL, '$2y$10$yBUtbT1hVJQwyMCoecT6ouWQ9HcwR6vvrhp2ZCQiTbG0fKO7Hmarm', NULL, '2020-09-14 01:09:38', '2020-09-14 01:09:38'),
(7, 'Yamile Portillo', 'YAMILEPORTILLO@HOTMAIL.COM', 'asesor', NULL, '$2y$10$msNl9J19NKam7RYvrukzVOirvsf6/dC28BuwcJ5o7HU1TphzXFjlG', NULL, '2020-09-14 01:09:38', '2020-09-14 01:09:38'),
(8, 'Celene Encarnación Rodriguez Sarabia', 'celenesamuel03@gmail.com', 'asesor', NULL, '$2y$10$aAMWWfmSh596M6Q/8WjLC.aK7iDaQ.aw5nnPpQJ/.d45vRNICFuve', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(9, 'Alba Afanador carrasquilla', 'alfa.83@live.com', 'asesor', NULL, '$2y$10$zQLvoIDoFvSrX7540sw7rORwSFP7XYsK9jacA.1AeHxI19wsC4kRO', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(10, 'Jorge Alberto Celis Molina', 'hentaisamario@hotmail.com', 'asesor', NULL, '$2y$10$TvG7Ic.VstrCeoVXVSIeU.BpKfrRnyyTH2OqheC.selO1Kmt7qgnS', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(11, 'Yeimy Hernández', 'hernandezasencioestrella@gmail.com', 'asesor', NULL, '$2y$10$N01PUpjJVmIvgVN.I5gCJuAsjrNPdvuk9x006d41tKCgsV45e9.Hu', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(12, 'Lilian Susana Villada Bovea', 'liliansusavillabo@gmail.com', 'asesor', NULL, '$2y$10$szdSK/a2OUtmIV0v68sY1uPGP4KErAIfRSWxfkrqI6v9cTnXDDaG2', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(13, 'Osman Hoyos Beltran', 'osmanlds@gmail.com', 'asesor', NULL, '$2y$10$S5PYo/5Q7cpaycbWMt1KiOc1wUPQeRrbj78SI42PxnjCyE52..2tm', NULL, '2020-09-14 01:09:39', '2020-09-14 01:09:39'),
(14, 'Teresa de jesus Maldonado mateus', 'notiene@gmail.com', 'asesor', NULL, '$2y$10$Ysr9zzxfP7V5iWnNiWhoDu9x7ZDGYKJREP73Ist0yMhQ734/1ovrW', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40'),
(15, 'Sharik Jlabe Marin', 'sharikswag@gmail.com', 'asesor', NULL, '$2y$10$SxY35sHpzcsRoqEVJTciP.O//aseya9emWXCSpWDzCGZ0XaCfDsvS', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40'),
(16, 'Cristián Santodomingo', 'cristiansan01@hotmail.com', 'asesor', NULL, '$2y$10$1DlKFddl9540Rfg3RUy06uOBLrmjiRb2Pen/VQfnHiTEJQ756Xdk2', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40'),
(17, 'Lisbeth maria Ortiz orozco', 'limaoro.92@hotmail.com', 'asesor', NULL, '$2y$10$76ymyYJqG5GElPu.NqTKh.l4v.HUnqd1jt4ELcFpzdPqZ30Jv40KO', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40'),
(18, 'Laura Karina Fernández montaño', 'laurakarinafernandez@gmail.com', 'asesor', NULL, '$2y$10$7TWKbn6uRYJgi6bO4/vQvOxUEruNAPgevbNFd0.atvG0li1kjurXS', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40'),
(19, 'Maryuris Galan Polo', 'heleny-galan@hotmail.com', 'asesor', NULL, '$2y$10$aCBKgmk8gLvwvCnNl7XYlOyLXJ/cfqWd/pzKcLytnnJJWaUH/lw2a', NULL, '2020-09-14 01:09:40', '2020-09-14 01:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operadors`
--
ALTER TABLE `operadors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reportes_numero_unique` (`numero`),
  ADD KEY `reportes_user_id_foreign` (`user_id`),
  ADD KEY `reportes_operador_id_foreign` (`operador_id`),
  ADD KEY `reportes_tipo_venta_id_foreign` (`tipo_venta_id`),
  ADD KEY `reportes_producto_id_foreign` (`producto_id`),
  ADD KEY `reportes_revenue_id_foreign` (`revenue_id`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rols_nombre_unique` (`nombre`);

--
-- Indexes for table `rol_user`
--
ALTER TABLE `rol_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_user_user_id_foreign` (`user_id`),
  ADD KEY `rol_user_rol_id_foreign` (`rol_id`);

--
-- Indexes for table `simcards`
--
ALTER TABLE `simcards`
  ADD UNIQUE KEY `simcards_id_unique` (`id`);

--
-- Indexes for table `tipo_ventas`
--
ALTER TABLE `tipo_ventas`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `operadors`
--
ALTER TABLE `operadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rol_user`
--
ALTER TABLE `rol_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_ventas`
--
ALTER TABLE `tipo_ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_operador_id_foreign` FOREIGN KEY (`operador_id`) REFERENCES `operadors` (`id`),
  ADD CONSTRAINT `reportes_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `reportes_revenue_id_foreign` FOREIGN KEY (`revenue_id`) REFERENCES `revenues` (`id`),
  ADD CONSTRAINT `reportes_tipo_venta_id_foreign` FOREIGN KEY (`tipo_venta_id`) REFERENCES `tipo_ventas` (`id`),
  ADD CONSTRAINT `reportes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rol_user`
--
ALTER TABLE `rol_user`
  ADD CONSTRAINT `rol_user_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
