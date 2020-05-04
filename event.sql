-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2020 at 07:47 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Travel', NULL, NULL),
(2, 'Wildlife ', NULL, NULL),
(3, 'Wedding ', NULL, NULL),
(4, 'Portrait ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `to_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_typing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `from_user_id`, `to_user_id`, `message`, `status`, `is_typing`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'hi how are you', -15, 'no', '2020-03-26 01:56:47', '2020-03-30 22:03:39'),
(2, 2, 1, 'ggj', -3, 'no', '2020-03-26 03:36:02', '2020-03-30 23:22:09'),
(3, 1, 2, 'dgdgd', -15, 'no', '2020-03-26 03:37:14', '2020-03-30 22:03:39'),
(4, 1, 1, 'hjgh', 1, 'no', '2020-03-26 04:12:36', '2020-03-26 04:12:36'),
(5, 1, 1, 'ddfg', 1, 'no', '2020-03-26 05:37:00', '2020-03-26 05:37:00'),
(6, 1, 1, 'bangladse', 1, 'no', '2020-03-26 05:37:16', '2020-03-26 05:37:16'),
(7, 1, 1, 'gj', 1, 'no', '2020-03-26 06:18:00', '2020-03-26 06:18:00'),
(8, 1, 1, 'gjjgjg', 1, 'no', '2020-03-26 06:18:00', '2020-03-26 06:18:00'),
(9, 1, 1, 'gjjgjghghj', 1, 'no', '2020-03-26 06:18:03', '2020-03-26 06:18:03'),
(10, 1, 1, 'gdg', 1, 'no', '2020-03-26 07:19:45', '2020-03-26 07:19:45'),
(11, 1, 1, 'fsdf', 1, 'no', '2020-03-26 09:20:38', '2020-03-26 09:20:38'),
(12, 1, 1, 'fhfh', 1, 'no', '2020-03-26 09:34:55', '2020-03-26 09:34:55'),
(13, 1, 1, 'sfsdf', 1, 'no', '2020-03-26 09:35:26', '2020-03-26 09:35:26'),
(14, 1, 1, 'dgdgdf', 1, 'no', '2020-03-26 09:35:53', '2020-03-26 09:35:53'),
(15, 1, 1, 'sfsdf', 1, 'no', '2020-03-26 09:36:36', '2020-03-26 09:36:36'),
(16, 1, 1, 'sfsdfdgdgdfg', 1, 'no', '2020-03-26 09:36:40', '2020-03-26 09:36:40'),
(17, 1, 1, 'gdfgdf', 1, 'no', '2020-03-26 09:38:07', '2020-03-26 09:38:07'),
(18, 1, 1, 'sfsfsdf', 1, 'no', '2020-03-26 09:47:07', '2020-03-26 09:47:07'),
(19, 1, 1, 'kkkk', 1, 'no', '2020-03-26 10:03:35', '2020-03-26 10:03:35'),
(20, 1, 1, 'fhff', 1, 'no', '2020-03-26 10:05:11', '2020-03-26 10:05:11'),
(21, 1, 1, 'ffhh', 1, 'no', '2020-03-26 10:05:20', '2020-03-26 10:05:20'),
(22, 1, 1, 'gdg', 1, 'no', '2020-03-26 12:27:14', '2020-03-26 12:27:14'),
(23, 1, 1, 'dgdfg', 1, 'no', '2020-03-26 12:50:09', '2020-03-26 12:50:09'),
(24, 1, 1, 'fghf', 1, 'no', '2020-03-26 12:51:14', '2020-03-26 12:51:14'),
(25, 1, 1, 'hfhf', 1, 'no', '2020-03-26 12:51:37', '2020-03-26 12:51:37'),
(26, 1, 1, 'fgfgh', 1, 'no', '2020-03-26 12:57:02', '2020-03-26 12:57:02'),
(27, 1, 1, 'dgdfg', 1, 'no', '2020-03-26 13:56:58', '2020-03-26 13:56:58'),
(28, 1, 1, 'dgdf', 1, 'no', '2020-03-26 21:42:54', '2020-03-26 21:42:54'),
(29, 1, 1, 'xcvxc', 1, 'no', '2020-03-26 21:43:10', '2020-03-26 21:43:10'),
(30, 1, 1, 'dgdfgd', 1, 'no', '2020-03-26 23:46:38', '2020-03-26 23:46:38'),
(31, 1, 1, 'gjg', 1, 'no', '2020-03-26 23:47:00', '2020-03-26 23:47:00'),
(32, 1, 1, 'dfgdfgd', 1, 'no', '2020-03-26 23:47:06', '2020-03-26 23:47:06'),
(33, 1, 1, 'dfgdf', 1, 'no', '2020-03-26 23:50:44', '2020-03-26 23:50:44'),
(34, 1, 1, 'fffh', 1, 'no', '2020-03-26 23:51:32', '2020-03-26 23:51:32'),
(35, 1, 1, 'dfg', 1, 'no', '2020-03-26 23:52:40', '2020-03-26 23:52:40'),
(36, 1, 1, 'gdgdf', 1, 'no', '2020-03-26 23:53:52', '2020-03-26 23:53:52'),
(37, 1, 1, 'fhfh', 1, 'no', '2020-03-26 23:54:34', '2020-03-26 23:54:34'),
(38, 1, 2, 'dgdfg', -15, 'no', '2020-03-26 23:57:40', '2020-03-30 22:03:39'),
(39, 1, 2, 'dgdfg', -15, 'no', '2020-03-26 23:59:47', '2020-03-30 22:03:39'),
(40, 1, 2, 'dgdfg', -15, 'no', '2020-03-27 00:00:26', '2020-03-30 22:03:39'),
(41, 1, 2, 'bang', -15, 'no', '2020-03-27 00:00:37', '2020-03-30 22:03:39'),
(42, 1, 2, 'bang', -15, 'no', '2020-03-27 00:04:35', '2020-03-30 22:03:39'),
(43, 1, 2, 'hkhjkhjk', -15, 'no', '2020-03-27 00:05:10', '2020-03-30 22:03:39'),
(44, 1, NULL, 'hkhjkhjk', 1, 'no', '2020-03-27 00:05:44', '2020-03-27 00:05:44'),
(45, 2, 1, 'check', -4, 'no', '2020-03-27 00:05:46', '2020-03-30 23:22:09'),
(46, 2, 1, 'hkhjkhjk', -4, 'no', '2020-03-27 00:05:47', '2020-03-30 23:22:09'),
(47, 1, 2, 'hkhjkhjk', -15, 'no', '2020-03-27 00:18:35', '2020-03-30 22:03:39'),
(48, 2, 1, 's', -4, 'no', '2020-03-27 00:20:55', '2020-03-30 23:22:09'),
(49, 1, 2, 'dgdfgd', -15, 'no', '2020-03-27 00:21:58', '2020-03-30 22:03:39'),
(50, 1, 2, 'bang', -15, 'no', '2020-03-27 00:22:12', '2020-03-30 22:03:39'),
(51, 1, 2, 'fhfh', -15, 'no', '2020-03-27 00:23:13', '2020-03-30 22:03:39'),
(52, 1, 2, 'dan', -15, 'no', '2020-03-27 00:23:27', '2020-03-30 22:03:39'),
(53, 1, 2, 'fsdfsf', -15, 'no', '2020-03-27 00:23:34', '2020-03-30 22:03:39'),
(54, 1, 2, 'sdfdsf', -15, 'no', '2020-03-27 00:23:35', '2020-03-30 22:03:39'),
(55, 1, 2, 'sdfdsfds', -15, 'no', '2020-03-27 00:23:36', '2020-03-30 22:03:39'),
(56, 1, 2, 'first', -15, 'no', '2020-03-27 03:25:07', '2020-03-30 22:03:39'),
(57, 1, 2, 'aigan', -15, 'no', '2020-03-27 03:38:05', '2020-03-30 22:03:39'),
(58, 1, 3, 'dgdgd', -5, 'no', '2020-03-27 08:42:23', '2020-03-30 22:01:58'),
(59, 1, 3, 'ok', -5, 'no', '2020-03-27 08:42:34', '2020-03-30 22:01:58'),
(60, 1, 3, 'sfsf', -5, 'no', '2020-03-27 08:42:41', '2020-03-30 22:01:58'),
(61, 1, 1, 'dgdfg', 1, 'no', '2020-03-28 04:02:59', '2020-03-28 04:02:59'),
(62, 1, 1, 'fhfghf', 1, 'no', '2020-03-28 04:05:10', '2020-03-28 04:05:10'),
(63, 1, 1, 'dgdfgdf', 1, 'no', '2020-03-28 04:07:44', '2020-03-28 04:07:44'),
(64, 1, 1, 'gfjhfgh', 1, 'no', '2020-03-28 04:07:58', '2020-03-28 04:07:58'),
(65, 1, 1, 'dgdfg', 1, 'no', '2020-03-28 04:09:14', '2020-03-28 04:09:14'),
(66, 1, 1, 'dgdfg', 1, 'no', '2020-03-28 04:09:18', '2020-03-28 04:09:18'),
(67, 1, 1, 'dfgdfg', 1, 'no', '2020-03-28 04:09:22', '2020-03-28 04:09:22'),
(68, 1, 1, 'dgdfgdg', 1, 'no', '2020-03-28 04:09:24', '2020-03-28 04:09:24'),
(69, 1, 1, 'ddgdfgdf', 1, 'no', '2020-03-28 04:09:25', '2020-03-28 04:09:25'),
(70, 1, 1, 'dgfdfg', 1, 'no', '2020-03-28 04:09:31', '2020-03-28 04:09:31'),
(71, 1, 1, 'dgdfg', 1, 'no', '2020-03-28 04:12:29', '2020-03-28 04:12:29'),
(72, 1, 1, 'dgdfg', 1, 'no', '2020-03-28 04:12:42', '2020-03-28 04:12:42'),
(73, 1, 1, 'dgdgf', 1, 'no', '2020-03-28 04:13:14', '2020-03-28 04:13:14'),
(74, 1, 1, 'sdfdsf', 1, 'no', '2020-03-28 04:13:59', '2020-03-28 04:13:59'),
(75, 1, 1, 'gjghj', 1, 'no', '2020-03-28 04:14:04', '2020-03-28 04:14:04'),
(76, 1, 1, 'gdfg', 1, 'no', '2020-03-28 04:14:54', '2020-03-28 04:14:54'),
(77, 1, 1, 'gdfgdgdfg', 1, 'no', '2020-03-28 04:14:59', '2020-03-28 04:14:59'),
(78, 1, 1, 'gdfgdgdfgdgdf', 1, 'no', '2020-03-28 04:15:00', '2020-03-28 04:15:00'),
(79, 1, 1, 'gdfgdgdfgdgdfg', 1, 'no', '2020-03-28 04:16:04', '2020-03-28 04:16:04'),
(80, 1, 2, 'dgdfg', -15, 'no', '2020-03-28 04:18:28', '2020-03-30 22:03:39'),
(81, 1, 9, 'fhfhfh', -6, 'no', '2020-03-29 23:33:13', '2020-03-30 22:01:12'),
(82, 1, 2, 'gjg', -15, 'no', '2020-03-29 23:39:25', '2020-03-30 22:03:39'),
(83, 1, 2, 'fhfghfgh', -15, 'no', '2020-03-29 23:40:02', '2020-03-30 22:03:39'),
(84, 1, 2, 'fhfg', -15, 'no', '2020-03-29 23:45:18', '2020-03-30 22:03:39'),
(85, 1, 2, 'dgdg', -15, 'no', '2020-03-29 23:46:27', '2020-03-30 22:03:39'),
(86, 1, 2, 'gjgj', -15, 'no', '2020-03-29 23:54:29', '2020-03-30 22:03:39'),
(87, 1, 9, 'dgdfg', -6, 'no', '2020-03-29 23:55:19', '2020-03-30 22:01:12'),
(88, 1, 2, 'sdfsfsd', -15, 'no', '2020-03-29 23:55:41', '2020-03-30 22:03:39'),
(89, 1, 2, 'sfsf', -15, 'no', '2020-03-30 00:13:44', '2020-03-30 22:03:39'),
(90, 1, 2, 'dfgdf', -15, 'no', '2020-03-30 00:18:59', '2020-03-30 22:03:39'),
(91, 1, 2, 'dgdf', -15, 'no', '2020-03-30 01:04:33', '2020-03-30 22:03:39'),
(92, 1, 2, 'wewer', -15, 'no', '2020-03-30 05:11:34', '2020-03-30 22:03:39'),
(93, 1, 2, 'final check', -15, 'no', '2020-03-30 05:12:17', '2020-03-30 22:03:39'),
(94, 1, 2, 'fhfgh', -15, 'no', '2020-03-30 05:13:18', '2020-03-30 22:03:39'),
(95, 1, 2, 'gjg', -15, 'no', '2020-03-30 05:13:22', '2020-03-30 22:03:39'),
(96, 1, 2, 'dgdg', -15, 'no', '2020-03-30 05:13:56', '2020-03-30 22:03:39'),
(97, 1, 2, 'dgdf', -15, 'no', '2020-03-30 05:16:31', '2020-03-30 22:03:39'),
(98, 1, 2, 'dgdf', -15, 'no', '2020-03-30 05:23:01', '2020-03-30 22:03:39'),
(99, 1, 2, 'latest first', -15, 'no', '2020-03-30 05:24:46', '2020-03-30 22:03:39'),
(100, 1, 2, 'finally done', -15, 'no', '2020-03-30 05:30:13', '2020-03-30 22:03:39'),
(101, 1, 2, 'ok', -15, 'no', '2020-03-30 05:31:58', '2020-03-30 22:03:39'),
(102, 1, 2, 'ok fine', -15, 'no', '2020-03-30 05:32:07', '2020-03-30 22:03:39'),
(103, 1, 2, 'sfsfs', -15, 'no', '2020-03-30 05:38:33', '2020-03-30 22:03:39'),
(104, 1, 2, 'dgd', -15, 'no', '2020-03-30 05:38:41', '2020-03-30 22:03:39'),
(105, 1, 2, 'dgd', -15, 'no', '2020-03-30 05:38:47', '2020-03-30 22:03:39'),
(106, 1, 2, 'dgdg', -15, 'no', '2020-03-30 05:38:54', '2020-03-30 22:03:39'),
(107, 1, 2, 'ddg', -15, 'no', '2020-03-30 05:39:36', '2020-03-30 22:03:39'),
(108, 1, 2, 'dgd', -15, 'no', '2020-03-30 05:39:39', '2020-03-30 22:03:39'),
(109, 1, 2, 'fhf', -15, 'no', '2020-03-30 05:39:44', '2020-03-30 22:03:39'),
(110, 1, 2, 'hkh', -15, 'no', '2020-03-30 05:43:12', '2020-03-30 22:03:39'),
(111, 1, 2, 'fine this is my last message.ok', -15, 'no', '2020-03-30 06:11:08', '2020-03-30 22:03:39'),
(112, 1, 2, 'ffhfh', -15, 'no', '2020-03-30 06:12:50', '2020-03-30 22:03:39'),
(113, 1, 2, 'dg', -15, 'no', '2020-03-30 06:12:53', '2020-03-30 22:03:39'),
(114, 1, 11, 'dgd', -4, 'no', '2020-03-30 08:00:34', '2020-03-30 21:49:01'),
(115, 1, 11, 'gjghjgh', -4, 'no', '2020-03-30 08:01:29', '2020-03-30 21:49:01'),
(116, 1, 11, 'ghjg', -4, 'no', '2020-03-30 08:01:30', '2020-03-30 21:49:01'),
(117, 1, 11, 'gjgh', -4, 'no', '2020-03-30 08:01:31', '2020-03-30 21:49:01'),
(118, 1, 1, 'hey', 1, 'no', '2020-03-30 08:52:13', '2020-03-30 08:52:13'),
(119, 1, 2, 'ki koros', -5, 'no', '2020-03-30 08:52:53', '2020-03-30 22:03:39'),
(120, 8, 3, 'hei', 1, 'no', '2020-03-30 23:45:22', '2020-03-30 23:45:22'),
(121, 8, 13, 'hi', -1, 'no', '2020-04-01 05:43:45', '2020-04-01 05:47:01'),
(122, 13, 8, 'i am here', 0, 'no', '2020-04-01 05:44:46', '2020-04-01 05:48:17'),
(123, 8, 13, 'how i contact with you', 0, 'no', '2020-04-01 05:45:16', '2020-04-01 05:47:01'),
(124, 13, 8, 'please check my profile', 0, 'no', '2020-04-01 05:45:41', '2020-04-01 05:48:17'),
(125, 8, 13, 'ok', 0, 'no', '2020-04-01 05:45:56', '2020-04-01 05:47:01'),
(126, 8, 2, 'hellow', 1, 'no', '2020-04-07 12:39:28', '2020-04-07 12:39:28'),
(127, 8, 2, 'how are you', 1, 'no', '2020-04-07 12:39:41', '2020-04-07 12:39:41'),
(128, 8, 2, 'fine', 1, 'no', '2020-04-07 12:41:55', '2020-04-07 12:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_tel_unique` (`tel`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `tel`, `email`, `query`, `message`, `created_at`, `updated_at`) VALUES
(1, 'khaled', '01751238771', 'admin@gmail.com', 'gdfgdgdgf', 'dfgdfgdgf dfgdfgdfgdgdf df', '2020-03-30 11:22:37', '2020-03-30 11:22:37'),
(2, 'khaled', '01751238772', 'ujjalbhuiyan123@gmail.com', 'gdfg fgdfg gsd', 'sfdsf sdfsdf sdfdsf', '2020-03-30 11:29:49', '2020-03-30 11:29:49'),
(3, 'khaled', '01751238779', 'admin1@gmail.com', 'gdfg fgdfg gsd', 'xvgxdfgdf sdgfdsgf sdgsdg', '2020-04-25 16:00:30', '2020-04-25 16:00:30'),
(4, 'rakib', '01751238778', 'rafi@gmail.com', 'gdfg fgdfg gsd', 'sgsd sdgsgs sg sdgsdgfs fssdfsdfds', '2020-04-25 16:04:29', '2020-04-25 16:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `decorations`
--

DROP TABLE IF EXISTS `decorations`;
CREATE TABLE IF NOT EXISTS `decorations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `decorations_type_unique` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `decorations`
--

INSERT INTO `decorations` (`id`, `type`, `cost`, `created_at`, `updated_at`) VALUES
(2, 'lighting', 500, '2020-04-18 05:05:32', '2020-04-18 05:05:32'),
(3, 'veil', 5000, '2020-04-18 05:05:54', '2020-04-18 05:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Comilla', NULL, NULL),
(3, 'Noyakhali', NULL, NULL),
(4, 'borishal', '2020-03-19 02:57:01', '2020-03-19 02:57:01'),
(5, 'jassor', '2020-03-19 02:57:48', '2020-03-19 03:01:13'),
(6, 'nator', '2020-04-01 05:22:05', '2020-04-01 05:22:05'),
(7, 'syllet', '2020-04-01 05:49:03', '2020-04-01 05:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `litter` float DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `drinks_type_unique` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `type`, `litter`, `cost`, `created_at`, `updated_at`) VALUES
(3, 'pepsi', 1, 50, '2020-04-18 05:06:31', '2020-04-18 05:06:31'),
(4, '7up', 1, 60, '2020-04-18 05:07:05', '2020-04-18 05:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `equipment_type_unique` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `type`, `cost`, `created_at`, `updated_at`) VALUES
(2, 'microphone', 20, '2020-04-18 05:04:19', '2020-04-18 05:04:19'),
(3, 'sounbox', 200, '2020-04-18 05:05:02', '2020-04-18 05:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

DROP TABLE IF EXISTS `event_types`;
CREATE TABLE IF NOT EXISTS `event_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `event_types_type_unique` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Bouquets & Style', 'storage/app/public/admin/image/event/img_5e99e56a0ab4c7.33277866post-9.jpg', '2020-04-17 11:20:42', '2020-04-17 11:20:42'),
(3, 'Wedding Planning', 'storage/app/public/admin/image/event/img_5e99f038d97163.62054568img2-370x240.jpg', '2020-04-17 11:21:25', '2020-04-17 12:06:48'),
(4, 'Catering & Decoration', 'storage/app/public/admin/image/event/img_5e99e5ac2ae457.23226110img3-370x240.jpg', '2020-04-17 11:21:48', '2020-04-17 11:21:48'),
(5, 'Hotna', 'storage/app/public/admin/image/event/img_5e9a00a7d2be86.96201294gallery_img6.jpg', '2020-04-17 13:16:55', '2020-04-17 13:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `venu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `breakfast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_normal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_deluxe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunch_royal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinner_normal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinner_deluxe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dinner_royal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `foods_venu_id_unique` (`venu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `venu_id`, `breakfast`, `lunch_normal`, `lunch_deluxe`, `lunch_royal`, `dinner_normal`, `dinner_deluxe`, `dinner_royal`, `created_at`, `updated_at`) VALUES
(2, 3, '50', '300', '400', '500', '300', '400', '500', '2020-04-18 05:08:31', '2020-04-18 05:08:31'),
(3, 2, '100', '199', '298', '400', '200', '300', '400', '2020-04-18 05:09:34', '2020-04-18 05:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

DROP TABLE IF EXISTS `hires`;
CREATE TABLE IF NOT EXISTS `hires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photographer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `start_hour` time DEFAULT NULL,
  `end_hour` time DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hires_user_id_foreign` (`user_id`),
  KEY `hires_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hires`
--

INSERT INTO `hires` (`id`, `user_id`, `photographer_id`, `category_id`, `start_date`, `end_date`, `start_hour`, `end_hour`, `total`, `transaction_id`, `process`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-03-21 18:00:00', '2020-03-25 18:00:00', '12:00:00', NULL, '5656', '1245', 'pending', '2020-03-22 21:43:08', '2020-03-22 21:43:08'),
(2, 1, 1, 1, '2020-03-10 18:00:00', '2020-03-21 18:00:00', NULL, NULL, '5656', '1245', 'completed', '2020-03-22 21:43:08', '2020-03-27 21:26:42'),
(3, 1, 2, 1, '2020-03-26 18:00:00', '2020-03-26 18:00:00', NULL, NULL, '2350', '1245', 'pending', '2020-03-23 09:31:41', '2020-03-23 09:31:41'),
(4, 3, 2, 1, '2020-03-27 18:00:00', '2020-03-27 18:00:00', NULL, NULL, '2350', '1245', 'completed', '2020-03-23 09:34:35', '2020-03-23 09:34:35'),
(5, 8, 13, 2, '2020-04-15 18:00:00', '2020-04-16 18:00:00', NULL, NULL, '4700', '12456', 'completed', '2020-04-01 05:46:48', '2020-04-01 05:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_01_31_035019_create_districts_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_02_13_122526_create_categories_table', 2),
(6, '2020_02_13_122841_create_photos_table', 2),
(7, '2020_03_17_054422_create_profiles_table', 3),
(8, '2020_03_17_184228_create_prices_table', 4),
(9, '2020_03_22_152838_create_hires_table', 5),
(10, '2020_03_24_042154_create_ratings_table', 6),
(11, '2020_03_25_125545_create_chats_table', 7),
(12, '2020_03_30_164958_create_contacts_table', 7),
(13, '2020_04_14_212716_create_event_types_table', 8),
(14, '2020_04_15_160326_create_venus_table', 9),
(15, '2020_04_16_013412_create_equipment_table', 10),
(16, '2020_04_16_014340_create_decorations_table', 11),
(17, '2020_04_16_060953_create_foods_table', 12),
(18, '2020_04_16_061051_create_drinks_table', 12),
(20, '2020_04_20_135319_create_reservations_table', 13),
(21, '2020_04_24_233347_create_payments_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('khaled@gmail.com', '$2y$10$RkkYIQWct2N/TxeJLxrkPeaGK3V9XDa6RNlSEqA5DZXXDoSg9GphC', '2020-04-01 07:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `payments_name_unique` (`name`),
  KEY `payments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `name`, `image`, `priority`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Cash_in', NULL, 1, NULL, 'Cash_in', NULL, NULL),
(2, NULL, 'Bkash', NULL, 1, '017512383336', 'Personal', NULL, NULL),
(3, NULL, 'Rocket', NULL, 1, '01817579012', 'Personal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `photos_title_unique` (`title`),
  KEY `photos_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `category_id`, `title`, `photo`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'retret', 'storage/app/public/admin/img/fileupload/img_5e4635ce686398.47572430cap.PNG', 'fsdf', '2020-02-13 23:53:18', '2020-02-13 23:53:18'),
(10, 2, 1, 'Curdd', 'storage/app/public/admin/img/fileupload/img_5e5877a32f1ae8.32062393carpet.jpg', 'dgdfgdf', '2020-02-27 20:14:59', '2020-03-03 05:37:22'),
(13, 2, 1, 'dd', 'storage/app/public/admin/img/fileupload/img_5e5a9cfec48343.16378796carpet.jpg', 'sfdsf', '2020-02-29 11:18:55', '2020-02-29 11:18:55'),
(14, 3, 1, 'physicss', 'storage/app/public/admin/img/fileupload/img_5e5aa6055f77d9.76030220capet-2.jpg', 'fsfs', '2020-02-29 11:57:25', '2020-02-29 11:57:25'),
(15, 1, 1, 'rokomary', 'storage/app/public/admin/img/fileupload/img_5e5aa678acd223.76673573capet-2.jpg', 'sdfsdf', '2020-02-29 11:59:20', '2020-02-29 11:59:20'),
(16, NULL, 2, 'rosmolai', 'storage/app/public/admin/img/fileupload/img_5e5aa702341544.94987905carpet.jpg', 'sfsdf', '2020-02-29 12:01:38', '2020-02-29 12:01:38'),
(17, NULL, 1, 'retrett', 'storage/app/public/admin/img/fileupload/img_5e5aac40297223.237959783.jpg', 'fine', '2020-02-29 12:24:00', '2020-03-16 21:39:26'),
(18, NULL, 3, 'new added', 'storage/app/public/admin/img/fileupload/img_5e5aac88a05709.995953663.jpg', 'new product addede', '2020-02-29 12:25:12', '2020-02-29 12:25:12'),
(19, NULL, 2, 'life captue', 'storage/app/public/admin/img/fileupload/img_5e83495088db08.633368461.jpg', 'bang balafd', '2020-03-31 07:44:48', '2020-03-31 07:44:48'),
(22, 13, 2, 'retret js', 'storage/app/public/admin/img/fileupload/img_5e847b36547d34.735718052.jpg', 'dgdfg dgd', '2020-04-01 05:29:58', '2020-04-01 05:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `day_price` int(11) NOT NULL DEFAULT '1',
  `hour_price` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prices_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `user_id`, `category_id`, `day_price`, `hour_price`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 235, 34, '2020-03-19 01:39:40', '2020-03-19 01:39:40'),
(3, 2, 1, 2350, 34, '2020-03-19 01:44:56', '2020-03-19 02:16:37'),
(4, 3, 2, 2350, 34, '2020-03-19 01:44:56', '2020-03-19 02:16:37'),
(5, 2, 3, 2350, 34, '2020-03-19 01:44:56', '2020-03-19 02:16:37'),
(10, 13, 2, 2350, 34, '2020-04-01 05:30:43', '2020-04-01 05:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profiles_title_unique` (`title`),
  KEY `profiles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'retrett', 'storage/app/public/admin/img/profile/img_5e70a6b49e1d31.657506903.jpg', '2020-03-17 03:26:44', '2020-03-17 04:30:12'),
(2, 1, 'chapter-1', 'storage/app/public/admin/img/profile/img_5e7097fdeacaa7.89030773capet-2.jpg', '2020-03-17 03:27:25', '2020-03-17 03:27:25'),
(3, 2, 'tt', 'storage/app/public/admin/img/profile/img_5e70988cc10fc1.776135783.jpg', '2020-03-17 03:29:48', '2020-03-17 03:29:48'),
(8, 13, 'retret', 'storage/app/public/admin/img/profile/img_5e847da1c5ad58.747687692.jpg', '2020-04-01 05:40:17', '2020-04-01 05:40:17'),
(7, 12, 'physics', 'storage/app/public/admin/img/profile/img_5e8395c0c565f3.42843242photography2.jpg', '2020-03-31 13:10:56', '2020-03-31 13:10:56'),
(9, 13, 'another', 'storage/app/public/admin/img/profile/img_5e847db88a2862.015048851.jpg', '2020-04-01 05:40:40', '2020-04-01 05:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photographer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `photographer_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 'fine', 4, '2020-03-24 00:08:08', '2020-03-24 00:08:08'),
(2, NULL, 3, 'dgdfgdf', 5, '2020-03-24 00:24:55', '2020-03-24 00:24:55'),
(3, NULL, 2, 'dgdgf', 5, '2020-03-24 00:29:01', '2020-03-24 00:29:01'),
(4, 1, 1, 'sfsdfsdf', 1, '2020-03-24 01:29:43', '2020-03-24 01:29:43'),
(5, 1, 2, 'zxcxzc', 4, '2020-03-24 01:31:19', '2020-03-24 01:31:19'),
(6, 1, 2, 'zxcxzc', 3, '2020-03-24 01:31:19', '2020-03-24 01:31:19'),
(7, 8, 1, 'dgfgd d gdf', 4, '2020-03-31 07:01:38', '2020-03-31 07:01:38'),
(8, 13, 13, 'good', 5, '2020-04-01 05:42:13', '2020-04-01 05:42:13'),
(9, 8, 13, 'good photographer', 5, '2020-04-01 05:57:40', '2020-04-01 05:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `food_id` bigint(20) UNSIGNED DEFAULT NULL,
  `foodtype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipmenttype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decorationtype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drink_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `process` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  KEY `reservations_event_type_id_foreign` (`event_type_id`),
  KEY `reservations_food_id_foreign` (`food_id`),
  KEY `reservations_drink_id_foreign` (`drink_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `event_type_id`, `food_id`, `foodtype`, `equipmenttype`, `decorationtype`, `drink_id`, `guest`, `total`, `payment`, `transaction_id`, `start_date`, `end_date`, `process`, `created_at`, `updated_at`) VALUES
(1, 16, 2, 2, '[\"breakfast\",\"lunch\"]', '[\"sounbox\"]', '[\"veil\"]', NULL, '20', '16200', 'Cash_in', NULL, '2020-04-26 18:00:00', '2020-04-26 18:00:00', 'confirmed', '2020-04-24 11:53:08', '2020-04-24 17:52:44'),
(2, 3, 2, 2, '[\"breakfast\",\"lunch\"]', '[\"sounbox\"]', '[\"veil\"]', NULL, '20', '16200', 'Cash_in', NULL, '2020-04-26 18:00:00', '2020-04-26 18:00:00', 'confirmed', '2020-04-24 11:53:08', '2020-04-24 17:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nobi',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'storage/app/public/profile/male.png',
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `about_me` longtext COLLATE utf8mb4_unicode_ci,
  `role` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0=admin,1=photograph,2=user',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_district_id_foreign` (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `district_id`, `name`, `title`, `mobile`, `types`, `gender`, `email`, `email_verified_at`, `password`, `image`, `address`, `about_me`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'khaled', 'retret', '01322334436', 'Admin', 'male', 'admin@gmail.com', NULL, '$2y$10$b023XM7ovWQa2G0AlWfZXee/BKGrk.sgkRDRW8w8zxA7OHVxwl77q', 'storage/app/public/admin/img/profile/img_5e735303c7c3d4.62986695photo-1516357231954-91487b459602 (1).jpg', 'panthapath', 'Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.', 0, 1, 'TZRVWkRvrCm09YgAq1M5qDZFYSB0c5AAmIm7hl239ukjS2CtfZj3ZjplSEAT', '2020-01-31 06:27:47', '2020-03-29 08:36:01'),
(2, 3, 'rakib', NULL, '01242343242', 'user', 'male', 'rakibul9200@gmail.com', NULL, '$2y$10$aMm3aYhgT.DyzSJOgW5iY.MQP3/Ie0ELG0/AfNgfOg8CC/IFp9kSq', 'storage/app/public/profile/male.jpg', 'gertret', 'Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.', 1, 1, NULL, '2020-01-31 13:50:07', '2020-03-29 23:18:12'),
(3, 4, 'rakib', NULL, '01242343241', 'user', 'male', 'rakibul@gmail.com', NULL, '$2y$10$KF4alQ5tat8LjKr74vPPGeyyPcIpzI9jnzN2wZEr/LTX1eLpLyrv6', 'storage/app/public/profile/male.jpg', 'gertret', NULL, 2, 1, NULL, '2020-01-31 13:50:07', '2020-01-31 13:50:07'),
(9, 5, 'khaledd', NULL, '01790123456', 'photographer', 'female', 'khaledmahmud44@gmail.com', NULL, '$2y$10$r3xZUevZ9I0aB2rLROuPGOipZz876kKF9kmatK.cgsv4q/eECv1B6', 'storage/app/public/profile/female.jpg', 'jgjhj', NULL, 1, 1, 'x6Kk2poihGQZHgxywOpp7xfw9o8dgL3DOD7GsEnCp5S93K2eYCl0mxef5YBd', '2020-03-28 08:48:46', '2020-04-01 07:15:05'),
(8, 1, 'khaled', NULL, '01233453453', 'user', 'male', 'khaled@gmail.com', NULL, '$2y$10$HHJDEbq2NCRgDbmqqg/zEeH9RtlWGA6n5lKTGhKcK78rrLRZ/Q3RS', 'storage/app/public/admin/img/profile/img_5e834077da2c52.22403903photography2.jpg', 'dgdfg', NULL, 2, 1, 'f8fGu8Ausbin4ZtmlDCUp6ruAdaI7foVvWxzThWzuPHmQrAnTSGqeRJuGX7K', '2020-03-28 08:32:25', '2020-04-01 07:10:00'),
(7, 2, 'khaleddddd', NULL, '01781757901', 'user', 'male', 'mahmud@gmail.com', NULL, '$2y$10$oh7D5VTIEs32B3XfWG9BuOA5AWVBnesxur9U5lvSAzR.HmfIDN35O', 'storage/app/public/profile/male.png', 'dgdfg', NULL, 2, 1, NULL, '2020-03-28 08:27:07', '2020-03-28 08:27:07'),
(10, 2, 'Rakib', NULL, '01465465756', 'user', 'male', 'golam@gmail.com', NULL, '$2y$10$LeLLEdIC2C2uwI3lT3z/VeqLuzyezoaJQbvlUfcqEvxD4TJ8R2bYS', 'storage/app/public/profile/male.jpg', 'gfjghj', NULL, 2, 1, NULL, '2020-03-28 08:57:30', '2020-03-28 08:57:30'),
(11, NULL, 'Rakib', NULL, '01465465752', 'user', 'male', 'go0lam@gmail.com', NULL, '$2y$10$LeLLEdIC2C2uwI3lT3z/VeqLuzyezoaJQbvlUfcqEvxD4TJ8R2bYS', 'storage/app/public/profile/male.jpg', 'gfjghj', NULL, 2, 1, NULL, '2020-03-28 08:57:30', '2020-04-01 05:49:26'),
(13, 6, 'Golam', 'nature capture', '01751238887', 'photographer', 'male', 'golam4@gmail.com', NULL, '$2y$10$F2OQhtstrGUQ9i1Cfzp9LubviM75CAAnp327IWcrN7UX7mqSK12EC', 'storage/app/public/admin/img/profile/img_5e847d652b81e6.779126333.jpeg', 'panthapath', 'Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.Writing an ‘About Me’ page or section for yourself is never easy. However, the good news is if you follow the formula and tips below, you should be able to generate an engaging ‘About Me’ statement without too much of a struggle. Here’s how to write an ‘About Me’ page you can be proud of.', 1, 1, '0kybTZIGKS60EIjo3kJSGoWD1sqevLJ44RcBnheME8ngkzlGMXlNtmtDVxF8', '2020-04-01 05:28:05', '2020-04-01 06:00:05'),
(14, 1, 'Rakib', NULL, '01757123445', 'user', 'male', 'rafi@gmail.com', NULL, '$2y$10$sR9Kp.Unrt84Jz6QoS5WnuF/CtrOabikZD5EgoO8JY6tS9ot.wj9K', 'storage/app/public/profile/male.jpg', 'dgdfg', NULL, 2, 1, NULL, '2020-04-03 09:00:35', '2020-04-03 09:00:35'),
(15, 1, 'khaledd', NULL, '01325356546', 'photographer', 'male', 'staff@gmail.com', NULL, '$2y$10$.CVZaaZy.qZYg2ojv12vqeZ0aTvlPOdYtvigHljqABeaW//9MT1DO', 'storage/app/public/profile/male.jpg', 'ssf', NULL, 1, 1, NULL, '2020-04-03 09:07:38', '2020-04-03 09:07:38'),
(16, 2, 'jamal', NULL, '01317579013', 'user', 'male', 'jamal@gmail.com', NULL, '$2y$10$CU5ZnO4bkJYas69.ICAsmurFkzmNMDA0Dge1DHLBXFrUoGhXKTVjq', 'storage/app/public/profile/male.jpg', 'sfsdf', NULL, 2, 1, NULL, '2020-05-02 22:48:59', '2020-05-02 22:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `venus`
--

DROP TABLE IF EXISTS `venus`;
CREATE TABLE IF NOT EXISTS `venus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '1',
  `capacity` int(11) DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `venus_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venus`
--

INSERT INTO `venus` (`id`, `name`, `image`, `mobile`, `cost`, `capacity`, `address`, `created_at`, `updated_at`) VALUES
(2, 'kashbon hotel', 'storage/app/public/admin/image/venu/img_5e980992dadb81.779758633.jpeg', '01817579013', 5000, 100, 'dgd dgdfgd dg df', '2020-04-16 01:30:26', '2020-04-16 01:30:26'),
(3, 'koxbazar', 'storage/app/public/admin/image/venu/img_5e9ade8f293853.389058352-layers.jpg', '01817579010', 4000, 100, 'sfsf sd fsgs sfsdf', '2020-04-18 05:03:43', '2020-04-20 09:15:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
