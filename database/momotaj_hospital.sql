-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momotaj_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT 1,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('a','b','c') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `image`, `role_id`, `block`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'Admin', 'admin@gmail.com', NULL, '$2y$10$xVSRN32XUWseVtIiGER5auYNjZPwIufIP2Uy40rzP5vdQSRRpuLs2', '1234567890', 'dhaka', 'avatar-372-456324.png', 1, 0, 'a', 'Qc2bENYRS0phiJ1VEcjH9QUK2qCUzCqROV24r8faBCyJktX0FB9GGz3iVmSZ', NULL, '2021-06-06 07:10:20'),
(3, 'shohan', 'shohan', 'shohan@gmail.com', NULL, '$2y$10$BcBKEo7n19JuSZX//1Q35OglO6YjnyncZCuPdheGX7ZG.Yj7e0JqS', '024564', NULL, NULL, 2, 0, 'a', 'uHDoCr50XkwOfeHuq6SxBXquSqR10f7mYaskGl2VM2FumnRfVE3wbeDiEUfB', '2021-06-03 06:55:05', '2021-06-03 06:55:05'),
(4, 'staff', 'jahan', 'staff@gmail.com', NULL, '$2y$10$n9RIwakKVbQ/ryRthZjFhudlHUCVCQ8kw5jTH8D5oyjYR3.kayyr6', '0164544', NULL, NULL, 3, 0, 'a', 'uPIlQJdIg2iireRy7Qp5LD6vtLmnaSstp7Q5TL6JLtbDvKrlUH5cxb1M5Kur', '2021-06-03 10:42:19', '2021-06-03 10:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('a','b','c') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defult.jpg',
  `status` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `short_desc`, `long_desc`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(4, 'GENERAL & LAPAROSCOPIC SURGERY', 'The Department of General &amp; Laparoscopic Surgery at BSHL is committed to providing medical stude', '<p>The Department of General &amp; Laparoscopic Surgery at BSHL is committed to providing medical students, residents and fellows with a wide array of surgical training including open general surgery procedures in the treatment of morbid obesity, gastroesophageal reflux disease, pancreatic and biliary diseases, hernias and colorectal diseases with the focus of providing the best in patient care.The Department of General &amp; Laparoscopic Surgery at BSHL is committed to providing medical students, residents and fellows with a wide array of surgical training including open general surgery procedures in the treatment of morbid obesity, gastroesophageal reflux disease, pancreatic and biliary diseases, hernias and colorectal diseases with the focus of providing the best in patient care.</p>', 'upload/sites/C1wupjCReEixCwjfBqnc845mrEtZhvlMvryjRPFa.png', 1, '2021-06-06 01:10:30', '2021-06-07 01:40:43'),
(5, 'CARDIOLOGY', 'The Department of Cardiology provides a broad range of services in the diagnosis and management of h', '<p>The Department of Cardiology provides a broad range of services in the diagnosis and management of h.The Department of Cardiology provides a broad range of services in the diagnosis and management of h.The Department of Cardiology provides a broad range of services in the diagnosis and management of h.The Department of Cardiology provides a broad range of services in the diagnosis and management of h.The Department of Cardiology provides a broad range of services in the diagnosis and management of h.The Department of Cardiology provides a broad range of services in the diagnosis and management of h.</p>', 'upload/sites/bSsjmNzAZLm4TThcCpm8Nx83Lx1cJEEymq2eZVyM.png', 1, '2021-06-06 01:12:25', '2021-06-07 01:43:38'),
(6, 'GASTROENTEROLOGY & HEPATOLOGY', 'Department of Gastroenterology &amp; Hepatology is devoted to the clinical care of patients', '<p>Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gasDepartment of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas...Department of Gastroenterology &amp;amp; Hepatology is devoted to the clinical care of patients with gas</p>', 'upload/sites/ECsIlxJI1ZmJhtYDpL289JSL4c7OwwP5PtuDWYeP.png', 1, '2021-06-06 01:19:22', '2021-06-07 01:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `dominions`
--

CREATE TABLE `dominions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dominions`
--

INSERT INTO `dominions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(2, 'Role', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(14, 'Permission', '2020-06-01 11:53:39', '2020-06-01 11:53:39'),
(16, 'Dominion', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(17, 'Process', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(19, 'Menu', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(72, 'Department', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(73, 'Services', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(74, 'Slider', '2021-06-08 01:48:01', '2021-06-08 01:48:01');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `dominion_id` int(11) DEFAULT NULL,
  `process_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `params` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `dominion_id`, `process_id`, `name`, `params`, `icon`, `route_name`, `guard`, `position`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'System Settingss', NULL, '<i class=\"fa fa-cogs\"></i>', NULL, 'admin', 50, '2020-06-05 14:20:28', '2021-01-03 03:04:11'),
(2, 1, 2, 8, 'Role', NULL, '<i class=\"fa fa-circle-o\"></i>', 'role.index', 'admin', 1, '2020-06-05 14:24:46', '2020-06-05 14:24:46'),
(3, 1, 16, 38, 'Dominion', NULL, '<i class=\"fa fa-circle-o\"></i>', 'dominion.index', 'admin', 2, '2020-06-05 14:25:21', '2020-06-05 14:25:21'),
(4, 1, 17, 45, 'Process', NULL, '<i class=\"fa fa-circle-o\"></i>', 'process.index', 'admin', 3, '2020-06-07 10:58:49', '2020-06-07 10:58:49'),
(5, 1, 14, 30, 'Permission', NULL, '<i class=\"fa fa-circle-o\"></i>', 'permission.index', 'admin', 4, '2020-06-07 11:00:46', '2020-06-07 11:00:46'),
(6, 1, 19, 52, 'Authorized Menu', NULL, '<i class=\"fa fa-circle-o\"></i>', 'menu.index', 'admin', 5, '2020-06-07 11:01:28', '2020-06-07 11:01:28'),
(7, NULL, 1, 1, 'Admins', NULL, '<i class=\"fa fa-users\"></i>', 'admin.index', 'admin', 49, '2020-06-07 11:02:26', '2020-06-29 07:51:03'),
(11, NULL, NULL, NULL, 'Master Setup', NULL, '<i class=\"fa fa-asterisk\" aria-hidden=\"true\"></i>', NULL, 'admin', 1, '2020-06-19 07:54:59', '2020-06-29 07:51:53'),
(61, NULL, 72, 330, 'Department', NULL, '<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>', 'department.index', 'admin', 2, '2021-06-05 22:35:39', '2021-06-05 22:35:39'),
(62, NULL, 73, 337, 'Services', NULL, '<i class=\"fa fa-cog\" aria-hidden=\"true\"></i>', 'services.index', 'admin', 2, '2021-06-06 23:57:56', '2021-06-06 23:57:56'),
(63, NULL, 74, 344, 'Slider', NULL, '<i class=\"fa fa-flag\" aria-hidden=\"true\"></i>', 'slider.index', 'admin', 3, '2021-06-08 01:49:05', '2021-06-08 01:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_31_144317_create_admins_table', 1),
(6, '2020_06_01_142131_create_dominions_table', 1),
(7, '2020_06_01_142319_create_processes_table', 1),
(8, '2020_06_01_174452_create_permissions_table', 1),
(9, '2020_06_05_080001_create_menus_table', 1),
(57, '2020_06_01_072036_create_roles_table', 17),
(58, '2014_10_12_000000_create_users_table', 18),
(59, '2021_05_09_155435_create_categories_table', 19),
(60, '2021_05_09_155452_create_brands_table', 19),
(61, '2021_05_29_043934_create_collections_table', 19),
(62, '2021_05_29_045755_create_flashings_table', 19),
(63, '2021_05_29_051435_create_materials_table', 19),
(64, '2021_06_06_042608_create_departments_table', 20),
(65, '2021_06_07_055115_create_services_table', 21),
(66, '2021_06_08_073222_create_sliders_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permissions`, `created_at`, `updated_at`) VALUES
(9, 1, '[\"{\\\"id\\\":1,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"admin.index\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-03T16:01:42.000000Z\\\"}\",\"{\\\"id\\\":2,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"admin.create\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":3,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"admin.store\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":4,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"admin.show\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":5,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"admin.edit\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":6,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"admin.update\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":7,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"admin.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":37,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"profile\\\",\\\"route_name\\\":\\\"admin.profile\\\",\\\"created_at\\\":\\\"2020-06-03T15:45:31.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-03T15:45:31.000000Z\\\"}\",\"{\\\"id\\\":66,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"updateProfile\\\",\\\"route_name\\\":\\\"admin.updateprofile\\\",\\\"created_at\\\":\\\"2020-06-05T09:35:42.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-05T09:35:42.000000Z\\\"}\",\"{\\\"id\\\":82,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"changePassword\\\",\\\"route_name\\\":\\\"admin.changepassword\\\",\\\"created_at\\\":\\\"2020-06-19T13:46:30.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T13:46:30.000000Z\\\"}\",\"{\\\"id\\\":8,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"role.index\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":9,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"role.create\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":10,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"role.store\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":11,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"role.show\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":12,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"role.edit\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":13,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"role.update\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":14,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"role.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":30,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"permission.index\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:39.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:39.000000Z\\\"}\",\"{\\\"id\\\":31,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"permission.create\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":32,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"permission.store\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":33,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"permission.show\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":34,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"permission.edit\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":35,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"permission.update\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":36,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"permission.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":38,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"dominion.index\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":39,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"dominion.create\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":40,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"dominion.store\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":41,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"dominion.show\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":42,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"dominion.edit\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":43,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"dominion.update\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":44,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"dominion.destroy\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":45,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"process.index\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":46,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"process.create\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":47,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"process.store\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":48,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"process.show\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":49,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"process.edit\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":50,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"process.update\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":51,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"process.destroy\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":52,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"menu.index\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":53,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"menu.create\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":54,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"menu.store\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":55,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"menu.show\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":56,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"menu.edit\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":57,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"menu.update\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":58,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"menu.destroy\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":330,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"department.index\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":331,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"department.create\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":332,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"department.store\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":333,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"department.show\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":334,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"department.edit\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":335,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"department.update\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":336,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"department.destroy\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":337,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"services.index\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":338,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"services.create\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":339,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"services.store\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":340,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"services.show\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":341,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"services.edit\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":342,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"services.update\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":343,\\\"dominion_id\\\":73,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"services.destroy\\\",\\\"created_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-07T05:56:45.000000Z\\\"}\",\"{\\\"id\\\":344,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"slider.index\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":345,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"slider.create\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":346,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"slider.store\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":347,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"slider.show\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":348,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"slider.edit\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":349,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"slider.update\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\",\"{\\\"id\\\":350,\\\"dominion_id\\\":74,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"slider.destroy\\\",\\\"created_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-08T07:48:01.000000Z\\\"}\"]', NULL, '2021-06-08 01:48:18'),
(10, 2, '[\"{\\\"id\\\":1,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"admin.index\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-03T16:01:42.000000Z\\\"}\",\"{\\\"id\\\":2,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"admin.create\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":3,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"admin.store\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":4,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"admin.show\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":5,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"admin.edit\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":6,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"admin.update\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":7,\\\"dominion_id\\\":1,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"admin.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:00:24.000000Z\\\"}\",\"{\\\"id\\\":37,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"profile\\\",\\\"route_name\\\":\\\"admin.profile\\\",\\\"created_at\\\":\\\"2020-06-03T15:45:31.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-03T15:45:31.000000Z\\\"}\",\"{\\\"id\\\":66,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"updateProfile\\\",\\\"route_name\\\":\\\"admin.updateprofile\\\",\\\"created_at\\\":\\\"2020-06-05T09:35:42.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-05T09:35:42.000000Z\\\"}\",\"{\\\"id\\\":82,\\\"dominion_id\\\":1,\\\"guard\\\":null,\\\"name\\\":\\\"changePassword\\\",\\\"route_name\\\":\\\"admin.changepassword\\\",\\\"created_at\\\":\\\"2020-06-19T13:46:30.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T13:46:30.000000Z\\\"}\",\"{\\\"id\\\":8,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"role.index\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":9,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"role.create\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":10,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"role.store\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":11,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"role.show\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":12,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"role.edit\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":13,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"role.update\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":14,\\\"dominion_id\\\":2,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"role.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T15:01:49.000000Z\\\"}\",\"{\\\"id\\\":30,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"permission.index\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:39.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:39.000000Z\\\"}\",\"{\\\"id\\\":31,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"permission.create\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":32,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"permission.store\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":33,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"permission.show\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":34,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"permission.edit\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":35,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"permission.update\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":36,\\\"dominion_id\\\":14,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"permission.destroy\\\",\\\"created_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-01T17:53:40.000000Z\\\"}\",\"{\\\"id\\\":38,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"dominion.index\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":39,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"dominion.create\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":40,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"dominion.store\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":41,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"dominion.show\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":42,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"dominion.edit\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":43,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"dominion.update\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":44,\\\"dominion_id\\\":16,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"dominion.destroy\\\",\\\"created_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:03:54.000000Z\\\"}\",\"{\\\"id\\\":45,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"process.index\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":46,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"process.create\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":47,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"process.store\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":48,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"process.show\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":49,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"process.edit\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":50,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"process.update\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":51,\\\"dominion_id\\\":17,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"process.destroy\\\",\\\"created_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-04T09:04:11.000000Z\\\"}\",\"{\\\"id\\\":52,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"menu.index\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":53,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"menu.create\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":54,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Store\\\",\\\"route_name\\\":\\\"menu.store\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":55,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Show\\\",\\\"route_name\\\":\\\"menu.show\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":56,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Edit\\\",\\\"route_name\\\":\\\"menu.edit\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":57,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Update\\\",\\\"route_name\\\":\\\"menu.update\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\",\"{\\\"id\\\":58,\\\"dominion_id\\\":19,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Destroy\\\",\\\"route_name\\\":\\\"menu.destroy\\\",\\\"created_at\\\":\\\"2020-06-05T08:11:40.000000Z\\\",\\\"updated_at\\\":\\\"2020-06-19T08:35:47.000000Z\\\"}\"]', '2021-06-03 06:55:30', '2021-06-03 06:55:30'),
(11, 3, '[\"{\\\"id\\\":330,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Index\\\",\\\"route_name\\\":\\\"department.index\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\",\"{\\\"id\\\":331,\\\"dominion_id\\\":72,\\\"guard\\\":\\\"admin\\\",\\\"name\\\":\\\"Create\\\",\\\"route_name\\\":\\\"department.create\\\",\\\"created_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\",\\\"updated_at\\\":\\\"2021-06-06T04:32:13.000000Z\\\"}\"]', '2021-06-03 10:41:20', '2021-06-06 01:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dominion_id` bigint(20) UNSIGNED NOT NULL,
  `guard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `dominion_id`, `guard`, `name`, `route_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Index', 'admin.index', '2020-06-01 09:00:24', '2020-06-03 10:01:42'),
(2, 1, 'admin', 'Create', 'admin.create', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(3, 1, 'admin', 'Store', 'admin.store', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(4, 1, 'admin', 'Show', 'admin.show', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(5, 1, 'admin', 'Edit', 'admin.edit', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(6, 1, 'admin', 'Update', 'admin.update', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(7, 1, 'admin', 'Destroy', 'admin.destroy', '2020-06-01 09:00:24', '2020-06-01 09:00:24'),
(8, 2, 'admin', 'Index', 'role.index', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(9, 2, 'admin', 'Create', 'role.create', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(10, 2, 'admin', 'Store', 'role.store', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(11, 2, 'admin', 'Show', 'role.show', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(12, 2, 'admin', 'Edit', 'role.edit', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(13, 2, 'admin', 'Update', 'role.update', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(14, 2, 'admin', 'Destroy', 'role.destroy', '2020-06-01 09:01:49', '2020-06-01 09:01:49'),
(30, 14, 'admin', 'Index', 'permission.index', '2020-06-01 11:53:39', '2020-06-01 11:53:39'),
(31, 14, 'admin', 'Create', 'permission.create', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(32, 14, 'admin', 'Store', 'permission.store', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(33, 14, 'admin', 'Show', 'permission.show', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(34, 14, 'admin', 'Edit', 'permission.edit', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(35, 14, 'admin', 'Update', 'permission.update', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(36, 14, 'admin', 'Destroy', 'permission.destroy', '2020-06-01 11:53:40', '2020-06-01 11:53:40'),
(37, 1, NULL, 'profile', 'admin.profile', '2020-06-03 09:45:31', '2020-06-03 09:45:31'),
(38, 16, 'admin', 'Index', 'dominion.index', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(39, 16, 'admin', 'Create', 'dominion.create', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(40, 16, 'admin', 'Store', 'dominion.store', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(41, 16, 'admin', 'Show', 'dominion.show', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(42, 16, 'admin', 'Edit', 'dominion.edit', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(43, 16, 'admin', 'Update', 'dominion.update', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(44, 16, 'admin', 'Destroy', 'dominion.destroy', '2020-06-04 03:03:54', '2020-06-04 03:03:54'),
(45, 17, 'admin', 'Index', 'process.index', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(46, 17, 'admin', 'Create', 'process.create', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(47, 17, 'admin', 'Store', 'process.store', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(48, 17, 'admin', 'Show', 'process.show', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(49, 17, 'admin', 'Edit', 'process.edit', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(50, 17, 'admin', 'Update', 'process.update', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(51, 17, 'admin', 'Destroy', 'process.destroy', '2020-06-04 03:04:11', '2020-06-04 03:04:11'),
(52, 19, 'admin', 'Index', 'menu.index', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(53, 19, 'admin', 'Create', 'menu.create', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(54, 19, 'admin', 'Store', 'menu.store', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(55, 19, 'admin', 'Show', 'menu.show', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(56, 19, 'admin', 'Edit', 'menu.edit', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(57, 19, 'admin', 'Update', 'menu.update', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(58, 19, 'admin', 'Destroy', 'menu.destroy', '2020-06-05 02:11:40', '2020-06-19 02:35:47'),
(66, 1, NULL, 'updateProfile', 'admin.updateprofile', '2020-06-05 03:35:42', '2020-06-05 03:35:42'),
(82, 1, NULL, 'changePassword', 'admin.changepassword', '2020-06-19 07:46:30', '2020-06-19 07:46:30'),
(330, 72, 'admin', 'Index', 'department.index', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(331, 72, 'admin', 'Create', 'department.create', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(332, 72, 'admin', 'Store', 'department.store', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(333, 72, 'admin', 'Show', 'department.show', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(334, 72, 'admin', 'Edit', 'department.edit', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(335, 72, 'admin', 'Update', 'department.update', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(336, 72, 'admin', 'Destroy', 'department.destroy', '2021-06-05 22:32:13', '2021-06-05 22:32:13'),
(337, 73, 'admin', 'Index', 'services.index', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(338, 73, 'admin', 'Create', 'services.create', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(339, 73, 'admin', 'Store', 'services.store', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(340, 73, 'admin', 'Show', 'services.show', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(341, 73, 'admin', 'Edit', 'services.edit', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(342, 73, 'admin', 'Update', 'services.update', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(343, 73, 'admin', 'Destroy', 'services.destroy', '2021-06-06 23:56:45', '2021-06-06 23:56:45'),
(344, 74, 'admin', 'Index', 'slider.index', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(345, 74, 'admin', 'Create', 'slider.create', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(346, 74, 'admin', 'Store', 'slider.store', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(347, 74, 'admin', 'Show', 'slider.show', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(348, 74, 'admin', 'Edit', 'slider.edit', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(349, 74, 'admin', 'Update', 'slider.update', '2021-06-08 01:48:01', '2021-06-08 01:48:01'),
(350, 74, 'admin', 'Destroy', 'slider.destroy', '2021-06-08 01:48:01', '2021-06-08 01:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', NULL, NULL),
(2, 'Admin', 'admin', NULL, NULL),
(3, 'Staff', 'staff', '2021-06-03 10:40:55', '2021-06-03 10:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defult.jpg',
  `status` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `short_desc`, `long_desc`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Emergency service', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'upload/sites/AuaVaFoduJl89RX6KfgKgLzY87UVlVuyFfkeO4W1.png', 1, '2021-06-07 01:42:31', '2021-06-07 01:44:55'),
(3, 'Pathology', 'it to make a type specimen book. It has survived not only five centuries, but also the leap into', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'upload/sites/6nARViV5dNQivX8odvLYXduB6YBlD38UEs5iRSYl.png', 1, '2021-06-07 01:43:26', '2021-06-07 01:43:26'),
(4, 'Ambulance service', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', '<p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'upload/sites/8OcoOx3OQEPcRCs81QtDGzQdqxxjawne9QSWDkdX.png', 1, '2021-06-07 01:44:34', '2021-06-07 01:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'slider.jpg',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `line_one`, `line_two`, `short_desc`, `button_text`, `button_url`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'fafaf', 'fafaf', 'fafa', NULL, 'fafaf', 'fafafaf', 'upload/slider/mBeLaJJQ8FeKBUs0HHxfatrZ8F19S3xCG5D23rZ7.jpg', '1', '2021-06-08 03:59:50', '2021-06-08 03:59:50'),
(5, 'dadad', 'dad', 'dadad', '<p>dadadadad</p>', 'dad', 'dadad', 'upload/slider/sWWq5f2B5ufGCWZx5My9MxJTvXAPS9SJcWGC0kQh.jpg', '1', '2021-06-08 04:03:56', '2021-06-08 04:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dominions`
--
ALTER TABLE `dominions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `processes_dominion_id_foreign` (`dominion_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dominions`
--
ALTER TABLE `dominions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `processes`
--
ALTER TABLE `processes`
  ADD CONSTRAINT `processes_dominion_id_foreign` FOREIGN KEY (`dominion_id`) REFERENCES `dominions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
