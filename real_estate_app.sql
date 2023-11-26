-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 07:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenity_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenity_name`, `created_at`, `updated_at`) VALUES
(2, 'Amenity', NULL, '2023-11-19 08:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_18_063117_create_property_types_table', 2),
(7, '2023_11_18_133314_create_amenities_table', 3),
(8, '2023_11_18_154205_create_permission_tables', 4),
(9, '2023_11_26_042719_create_property_states_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(2, 'type.menu', 'web', 'type', '2023-11-18 22:01:09', '2023-11-18 22:52:03'),
(3, 'all.type', 'web', 'type', '2023-11-18 22:01:57', '2023-11-18 22:01:57'),
(4, 'add.type', 'web', 'type', '2023-11-18 22:02:17', '2023-11-18 22:02:17'),
(5, 'edit.type', 'web', 'type', '2023-11-18 22:02:29', '2023-11-18 22:02:29'),
(6, 'delete.type', 'web', 'type', '2023-11-18 22:02:48', '2023-11-18 22:02:48'),
(7, 'state.menu', 'web', 'state', '2023-11-18 22:03:43', '2023-11-18 22:03:43'),
(8, 'all.state', 'web', 'state', '2023-11-18 22:03:53', '2023-11-19 03:31:38'),
(9, 'add.state', 'web', 'state', '2023-11-18 22:04:03', '2023-11-18 22:04:03'),
(10, 'edit.state', 'web', 'state', '2023-11-18 22:04:17', '2023-11-18 22:04:17'),
(11, 'delete.state', 'web', 'state', '2023-11-18 22:04:58', '2023-11-18 22:04:58'),
(15, 'amenity.menu', 'web', 'amenity', '2023-11-19 06:46:38', '2023-11-19 06:46:38'),
(17, 'add.amenity', 'web', 'amenity', '2023-11-19 06:46:38', '2023-11-19 06:46:38'),
(18, 'edit.amenity', 'web', 'amenity', '2023-11-19 06:46:38', '2023-11-19 06:46:38'),
(19, 'delete.amenity', 'web', 'amenity', '2023-11-19 06:46:38', '2023-11-19 06:46:38'),
(20, 'property.menu', 'web', 'property', '2023-11-19 16:14:55', '2023-11-19 16:14:55'),
(21, 'all.property', 'web', 'property', '2023-11-19 16:15:15', '2023-11-19 16:15:15'),
(23, 'add.property', 'web', 'property', '2023-11-19 16:16:41', '2023-11-19 16:16:41'),
(24, 'delete.property', 'web', 'property', '2023-11-19 16:20:24', '2023-11-19 16:20:24'),
(27, 'all.amenity', 'web', 'amenity', '2023-11-19 16:38:36', '2023-11-19 16:38:36'),
(28, 'edit.property', 'web', 'property', '2023-11-19 16:39:10', '2023-11-19 16:39:10'),
(29, 'category.menu', 'web', 'category', '2023-11-19 16:40:38', '2023-11-19 16:40:38'),
(30, 'add.category', 'web', 'category', '2023-11-19 16:40:55', '2023-11-19 16:40:55'),
(31, 'all.category', 'web', 'category', '2023-11-19 16:41:14', '2023-11-19 16:41:14'),
(32, 'edit.category', 'web', 'category', '2023-11-19 16:41:31', '2023-11-19 16:41:31'),
(33, 'delete.category', 'web', 'category', '2023-11-19 16:41:47', '2023-11-19 16:41:47'),
(34, 'comment.menu', 'web', 'comment', '2023-11-19 16:43:02', '2023-11-19 16:43:02'),
(35, 'all.comment', 'web', 'comment', '2023-11-19 16:43:17', '2023-11-19 16:43:17'),
(36, 'add.comment', 'web', 'comment', '2023-11-19 16:43:32', '2023-11-19 16:43:32'),
(37, 'edit.comment', 'web', 'comment', '2023-11-19 16:43:58', '2023-11-19 16:43:58'),
(38, 'delete.comment', 'web', 'comment', '2023-11-19 16:44:22', '2023-11-19 16:44:22'),
(39, 'history.menu', 'web', 'history', '2023-11-19 16:45:26', '2023-11-19 16:45:26'),
(40, 'add.history', 'web', 'history', '2023-11-19 16:45:40', '2023-11-19 16:45:40'),
(41, 'all.history', 'web', 'history', '2023-11-19 16:45:56', '2023-11-19 16:45:56'),
(42, 'edit.history', 'web', 'history', '2023-11-19 16:46:10', '2023-11-19 16:46:10'),
(43, 'delete.history', 'web', 'history', '2023-11-19 16:46:34', '2023-11-19 16:46:34'),
(44, 'post.menu', 'web', 'post', '2023-11-19 16:49:07', '2023-11-19 16:49:07'),
(45, 'all.post', 'web', 'post', '2023-11-19 16:49:19', '2023-11-19 16:49:19'),
(46, 'add.post', 'web', 'post', '2023-11-19 16:49:30', '2023-11-19 16:49:30'),
(47, 'edit.post', 'web', 'post', '2023-11-19 16:49:42', '2023-11-19 16:49:42'),
(48, 'delete.post', 'web', 'post', '2023-11-19 16:50:00', '2023-11-19 16:50:00'),
(49, 'role.menu', 'web', 'role', '2023-11-19 16:50:46', '2023-11-19 16:50:46'),
(50, 'add.role', 'web', 'role', '2023-11-19 16:50:59', '2023-11-19 16:50:59'),
(51, 'edit.role', 'web', 'role', '2023-11-19 16:51:29', '2023-11-19 16:51:29'),
(52, 'all.role', 'web', 'role', '2023-11-19 16:51:45', '2023-11-19 16:51:45'),
(53, 'delete.role', 'web', 'role', '2023-11-19 16:51:58', '2023-11-19 16:51:58'),
(54, 'site.menu', 'web', 'site', '2023-11-19 16:52:26', '2023-11-19 16:52:26'),
(55, 'add.site', 'web', 'site', '2023-11-19 16:52:39', '2023-11-19 16:52:39'),
(56, 'all.site', 'web', 'site', '2023-11-19 16:52:50', '2023-11-19 16:52:50'),
(58, 'delete.site', 'web', 'site', '2023-11-19 16:53:41', '2023-11-19 16:53:41'),
(59, 'edit.site', 'web', 'site', '2023-11-19 16:54:52', '2023-11-19 16:54:52'),
(60, 'stmp.menu', 'web', 'stmp', '2023-11-19 16:55:45', '2023-11-19 16:55:45'),
(61, 'all.stmp', 'web', 'stmp', '2023-11-19 16:55:57', '2023-11-19 16:55:57'),
(62, 'add.stmp', 'web', 'stmp', '2023-11-19 16:56:09', '2023-11-19 16:56:09'),
(63, 'edit.stmp', 'web', 'stmp', '2023-11-19 16:56:22', '2023-11-19 16:56:22'),
(64, 'delete.stmp', 'web', 'stmp', '2023-11-19 16:56:43', '2023-11-19 16:56:43'),
(65, 'testimonials.menu', 'web', 'testimonials', '2023-11-19 16:57:56', '2023-11-19 16:57:56'),
(66, 'all.testimonials', 'web', 'testimonials', '2023-11-19 16:58:17', '2023-11-19 16:58:17'),
(67, 'add.testimonials', 'web', 'testimonials', '2023-11-19 16:58:32', '2023-11-19 16:58:32'),
(68, 'edit.testimonials', 'web', 'testimonials', '2023-11-19 16:58:48', '2023-11-19 16:58:48'),
(69, 'delete.testimonials', 'web', 'testimonials', '2023-11-19 16:59:04', '2023-11-19 16:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `property_states`
--

CREATE TABLE `property_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_states`
--

INSERT INTO `property_states` (`id`, `state_name`, `state_description`, `created_at`, `updated_at`) VALUES
(1, 'New', 'This property is brand new and has never been occupied.', NULL, '2023-11-26 02:37:48'),
(2, 'Renovated', 'This property has undergone significant renovations and improvements.', NULL, NULL),
(3, 'Foreclosure', 'This property is currently in foreclosure, meaning the lender has repossessed it due to non-payment.', NULL, NULL),
(4, 'Ready for Occupancy', 'This property is completed and ready for immediate occupancy.', NULL, NULL),
(5, 'Vacant', 'This property is currently unoccupied and available for purchase or lease.', NULL, NULL),
(6, 'Leased', 'This property is currently under lease and has tenants occupying the space.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type_name`, `type_icon`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'icon-1', NULL, '2023-11-18 09:06:30'),
(2, 'Office', 'icon-2', NULL, NULL),
(3, 'Floor', 'icon-3', NULL, NULL),
(4, 'Duplex', 'icon-4', NULL, NULL),
(5, 'Building', 'icon-5', NULL, NULL),
(6, 'Warehouse', 'icon-6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-11-19 09:19:03', '2023-11-19 09:54:22'),
(2, 'Manager', 'web', '2023-11-19 09:19:35', '2023-11-19 09:54:36'),
(3, 'Admin', 'web', '2023-11-19 09:32:54', '2023-11-19 09:54:55'),
(5, 'Sales', 'web', '2023-11-19 09:55:02', '2023-11-19 09:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(15, 1),
(15, 2),
(17, 1),
(17, 2),
(17, 5),
(18, 1),
(18, 2),
(18, 5),
(19, 1),
(19, 2),
(19, 5),
(20, 1),
(21, 1),
(23, 1),
(24, 1),
(27, 1),
(27, 2),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(43, 3),
(44, 1),
(45, 1),
(45, 5),
(46, 1),
(46, 5),
(47, 1),
(47, 5),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','agent','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Agent', 'agent', 'agent@gmail.com', NULL, '$2y$12$hmfnJS5kh9eMaKDZtcXmQunh4SdqhjLoTKWhybPBkcfEgpR4Eso/a', NULL, NULL, NULL, 'agent', 'active', NULL, NULL, NULL),
(3, 'User', 'user', 'user@gmail.com', NULL, '$2y$12$A.GDPjUPjo.M4cg1X0DGR.BTFvfTI.pH/Y47FKjn2Ns.URH2i7swC', NULL, NULL, NULL, 'user', 'active', '3YNPzDCHjLefEMMWIq56YUcFAI7ijbsX3Xo1uFOds0edoezCWC7WNvrwWFwm', NULL, NULL),
(5, 'Grayson Metz', 'rwillms', 'yschmitt@example.com', '2023-11-15 14:41:20', '$2y$12$Tvm4OFh8vtjtoXvti2PYIuXdunXD7SPBmPxKx35ZN8Xz/oUf.auVm', 'https://via.placeholder.com/60x60.png/0000dd?text=nesciunt', '(831) 309-3057', '23896 David Springs\nLockmantown, MD 84298-2828', 'user', 'inactive', 'pJe2Or1Zj8WzpaGwntIClyK5GZ6Tc7IOH8T2wBF0dHvWGwM7hVFIdMyWnH2l', '2023-11-15 14:41:21', '2023-11-15 14:41:21'),
(7, 'Dr. Garnett Hand', 'rosie36', 'christiansen.dawn@example.net', '2023-11-15 14:41:20', '$2y$12$Tvm4OFh8vtjtoXvti2PYIuXdunXD7SPBmPxKx35ZN8Xz/oUf.auVm', 'https://via.placeholder.com/60x60.png/00eecc?text=quae', '(651) 839-0469', '7458 Jaskolski Unions Suite 636\nWillmsland, NY 91539', 'agent', 'active', 'm4xfeUkaz9', '2023-11-15 14:41:21', '2023-11-15 14:41:21'),
(8, 'Michael Njoroge', 'mike', 'mike@gmail.com', '2023-11-15 14:41:20', '$2y$12$Tvm4OFh8vtjtoXvti2PYIuXdunXD7SPBmPxKx35ZN8Xz/oUf.auVm', '202311190505me.JPG', '0716002152', '1040 Thika', 'admin', 'active', 'Jf3642B2ecWIP9eQbUDb12PHrs51MdBK9TxIkSCuiTWgApvTk9weyQChnkWl', '2023-11-15 14:41:21', '2023-11-25 07:37:38'),
(23, 'Alex Mutonga', 'alex', 'alex@gmail.com', NULL, '$2y$12$je9VfMcc3gl2nqkp.Rvga.deGOTdJe597cTcWSZDAFbxW4VT5yNZe', '202311251049IMG_4007.JPG', '0100456745', '100Kisumu', 'admin', 'active', NULL, '2023-11-25 07:46:55', '2023-11-25 07:49:49'),
(24, 'Patrick Kimani', 'kim', 'kimani@gmail.com', NULL, '$2y$12$OqnUzVeFU1DvSRBnJBY9QuKTisf3KsOYRnKzXcIRRLGAHcGoFX0ke', NULL, '0100456745', '123Kimbo', 'admin', 'active', NULL, '2023-11-25 09:23:59', '2023-11-25 09:23:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property_states`
--
ALTER TABLE `property_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_states`
--
ALTER TABLE `property_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
