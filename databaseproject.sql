-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : mar. 23 avr. 2024 à 21:33
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `databaseproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `duration_unit` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `description`, `author_id`, `amount`, `duration`, `duration_unit`, `created_at`) VALUES
(3, 'ERPNext +', 'Accounting, HR, CRM modules along with non profit app. Set up on frappe cloud, customise, provide basic training and handholding. This is for a very small non proft organisation which expects to grow in future and wants to get it rght in the beginning. Budget under 10k.', 1, 400, 2, 'Month', '2023-04-14 22:51:12'),
(4, 'Samsung Galaxy A22 5G Users - No experience needed', 'Needs to hire 10 Freelancers\r\nPLEASE READ:\r\n\r\nNeeded phone:\r\nSamsung Galaxy A22 5G\r\n\r\n\r\nRead the instructions below:\r\nThere is no right or wrong. Your honest behavior is most important, it will help us.\r\nThe task is simple, it will only take about 10 minutes to complete, and requires you to use your mobile phone\'s camera.\r\nWe will provide you with detailed instructions upon approval of the job.\r\nYou will need to perform heart rate measurements to help us improve our technology.\r\n\r\nRequirements:\r\n1- Have access to a popular android phone.\r\n2- If you read the instructions carefully, write drivingmissmaisy in your proposal\r\n\r\nThis is only 5$ only for using an app.\r\n\r\n\r\nFeel free apply.', 1, 200, 2, NULL, '2023-04-14 23:30:12'),
(25, 'jhvgv', 'qsfjdsgjsg', 1, 200, 1, 'day', '2023-05-19 21:56:09'),
(26, 'acz', 'csdbclbsd\r\n', 1, 0, 12, 'day', '2023-05-19 21:56:47'),
(27, 'dhdfh', ',bfb', 1, 520, 2, 'day', '2023-05-19 21:59:54'),
(28, 'azjbdlj', 'Descrpition\r\n', 1, 0, 123, 'day', '2023-05-19 22:02:00');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `revenue` int(11) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`id`, `user_id`, `name`, `revenue`, `contact`, `language`, `country`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES
(1, 1, 'Adidas', 2150, 'adidas@brand.com', 'Englishs', 'Germany', 'https://www.facebook.com/adidas/', 'https://www.instagram.com/adidas/', 'https://twitter.com/adidas', 'https://www.linkedin.com/company/adidas'),
(2, 2, 'Coca-Cola', 373, 'cocacola@brand.com', 'English', 'United States', 'https://www.facebook.com/cocacola/', 'https://www.instagram.com/cocacola/', 'https://twitter.com/CocaCola', 'https://www.linkedin.com/company/coca-cola'),
(3, 3, 'Apple', 3472, 'apple@brand.com', 'English', 'United States', 'https://www.facebook.com/apple/', 'https://www.instagram.com/apple/', 'https://twitter.com/Apple', 'https://www.linkedin.com/company/apple'),
(4, 4, 'Google', 1817, 'google@brand.com', 'English', 'United States', 'https://www.facebook.com/google/', 'https://www.instagram.com/google/', 'https://twitter.com/Google', 'https://www.linkedin.com/company/google'),
(5, 5, 'Amazon', 3861, 'amazon@brand.com', 'English', 'United States', 'https://www.facebook.com/Amazon/', 'https://www.instagram.com/amazon/', 'https://twitter.com/amazon', 'https://www.linkedin.com/company/amazon'),
(6, 6, 'Microsoft', 1533, 'microsoft@brand.com', 'English', 'United States', 'https://www.facebook.com/Microsoft/', 'https://www.instagram.com/microsoft/', 'https://twitter.com/Microsoft', 'https://www.linkedin.com/company/microsoft'),
(7, 7, 'PepsiCo', 704, 'pepsico@brand.com', 'English', 'United States', 'https://www.facebook.com/PepsiCo/', 'https://www.instagram.com/pepsico/', 'https://twitter.com/PepsiCo', 'https://www.linkedin.com/company/pepsico'),
(8, 8, 'Samsung', 2216, 'samsung@brand.com', 'English', 'South Korea', 'https://www.facebook.com/SamsungUSA/', 'https://www.instagram.com/samsung/', 'https://twitter.com/Samsung', 'https://www.linkedin.com/company/samsung'),
(12, 29, 'aarab', 10000, '545', '', '', '', '', '', ''),
(13, 31, 'abdo1', 10000, 'kdsvhjhv', '', '', '', '', '', ''),
(14, 34, 'pespsi', 1000, '06547896', 'francais', 'Maroc', 'jhgf', 'fgvhbjk', 'gvhbjnk,', 'cgvbhn,');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'Name', 'email@email.com', 'phone', 'subject', 'message', '2023-04-20 21:21:45');

-- --------------------------------------------------------

--
-- Structure de la table `credits`
--

CREATE TABLE `credits` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `credits`
--

INSERT INTO `credits` (`id`, `user_id`, `card_number`, `card_type`, `exp_date`) VALUES
(5, 1, '10123185132', 'visa', '2024-12-01'),
(6, 10, '10123185132', 'mastercard', '2023-12-31'),
(7, 1, '123', 'mastercard', '2023-12-01'),
(9, 2, '845484151545485', 'mastercard', '2025-12-02'),
(10, 11, '4554545545', 'paypal', '2023-02-05'),
(11, 29, '55555', 'mastercard', '2025-02-25'),
(12, 2, '55555', 'paypal', '2023-02-25'),
(13, 31, '884154485848458', 'mastercard', '2025-02-25'),
(14, 32, '55555', 'mastercard', '2023-02-02');

-- --------------------------------------------------------

--
-- Structure de la table `deletedaccounts`
--

CREATE TABLE `deletedaccounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `deletedaccounts`
--

INSERT INTO `deletedaccounts` (`id`, `user_id`, `approved`) VALUES
(3, 32, 0),
(4, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `influencers`
--

CREATE TABLE `influencers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `influencers`
--

INSERT INTO `influencers` (`id`, `user_id`, `first_name`, `last_name`, `age`, `job`, `contact`, `language`, `country`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES
(1, 10, 'abdelhaq', 'el', 35, 'Engineer', 'elattarabdelhak0@gmail.com', 'Spanish', 'Spain', 'https://facebook.com/attar', 'https://instagram.com/attar', 'https://twitter.com/attar', 'https://linkedin.com/in/attar'),
(2, 11, 'Mohammed', 'Ali', NULL, NULL, 'mohammedali@email.com', 'Arabic', 'Saudi Arabia', 'https://facebook.com/mohammedali', 'https://instagram.com/mohammedali', 'https://twitter.com/mohammedali', 'https://linkedin.com/in/mohammedali'),
(3, 12, 'Sophie', 'Liu', NULL, NULL, 'sophieliu@email.com', 'Mandarin', 'China', 'https://facebook.com/sophieliu', 'https://instagram.com/sophieliu', 'https://twitter.com/sophieliu', 'https://linkedin.com/in/sophieliu'),
(4, 13, 'David', 'Gonzalez', NULL, NULL, 'davidgonzalez@email.com', 'Spanish', 'Mexico', 'https://facebook.com/davidgonzalez', 'https://instagram.com/davidgonzalez', 'https://twitter.com/davidgonzalez', 'https://linkedin.com/in/davidgonzalez'),
(5, 14, 'Fatima', 'Ahmed', NULL, NULL, 'fatimaahmed@email.com', 'Arabic', 'Egypt', 'https://facebook.com/fatimaahmed', 'https://instagram.com/fatimaahmed', 'https://twitter.com/fatimaahmed', 'https://linkedin.com/in/fatimaahmed'),
(6, 15, 'Kento', 'Suzuki', NULL, NULL, 'kentosuzuki@email.com', 'Japanese', 'Japan', 'https://facebook.com/kentosuzuki', 'https://instagram.com/kentosuzuki', 'https://twitter.com/kentosuzuki', 'https://linkedin.com/in/kentosuzuki'),
(7, 16, 'Sofia', 'Rodriguez', NULL, NULL, 'sofiarodriguez@email.com', 'Spanish', 'Colombia', 'https://facebook.com/sofiarodriguez', 'https://instagram.com/sofiarodriguez', 'https://twitter.com/sofiarodriguez', 'https://linkedin.com/in/sofiarodriguez'),
(8, 30, 'Aarab', 'Aarab', NULL, NULL, 'kdsvhjhv', '', 'Maroc', '', '', '', ''),
(9, 32, 'abdo2', '2', NULL, NULL, 'kdsvhjhv', '', '', '', '', '', ''),
(10, 33, 'abdelhaq', 'el', 0, '', '06954789632', 'arabic', 'Maroc', 'https/facebook/elattar', 'https/instagram/elattar', 'https/twitter/elattar', 'https/linkedin/elattar');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message_text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message_text`, `created_at`) VALUES
(60, 2, 11, 'hi', '2023-05-17 12:08:19'),
(61, 11, 2, 'hello', '2023-05-17 12:09:58'),
(62, 2, 11, 'hi', '2023-05-17 21:12:25'),
(63, 2, 11, 'Test', '2023-05-17 21:18:45'),
(64, 2, 11, 'Test', '2023-05-17 21:19:23'),
(65, 2, 11, 'ok', '2023-05-17 21:19:30'),
(66, 2, 11, 'test', '2023-05-17 21:19:56'),
(67, 2, 11, 'test', '2023-05-17 21:20:09'),
(68, 2, 11, '.', '2023-05-17 21:21:32'),
(69, 17, 11, 'test', '2023-05-17 21:21:55'),
(70, 17, 11, 'test', '2023-05-17 21:22:58'),
(71, 17, 11, '.', '2023-05-17 21:23:05'),
(72, 17, 11, '.a', '2023-05-17 21:23:16'),
(73, 17, 11, '.a', '2023-05-17 21:23:27'),
(74, 17, 11, '.a', '2023-05-17 21:24:08'),
(75, 17, 11, 'test', '2023-05-17 21:24:11'),
(76, 2, 11, 'vv', '2023-05-17 21:25:28'),
(77, 17, 11, 'ghv', '2023-05-18 13:03:52'),
(78, 30, 29, 'hi', '2023-05-19 16:01:10'),
(79, 29, 30, 'hello', '2023-05-19 16:01:19'),
(80, 30, 29, 'how are you', '2023-05-19 16:01:26'),
(81, 31, 32, 'hi', '2023-05-19 17:18:44'),
(82, 32, 31, 'hello', '2023-05-19 17:18:53'),
(83, 33, 34, 'hii', '2024-04-23 19:00:04'),
(84, 34, 33, 'hillo', '2024-04-23 19:00:55'),
(85, 34, 33, 'how aare you', '2024-04-23 19:01:08'),
(86, 33, 34, 'fine', '2024-04-23 19:01:17');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `created_at`, `avatar`) VALUES
(1, 1, 'Deposit', 'You have deposited 1000 to your account', '2023-05-01 21:51:47', NULL),
(2, 1, 'Partnership #17', 'Your partnership request has been payed', '2023-05-01 21:51:47', NULL),
(3, 10, 'Partnership #17', 'Your partnership request has been payed', '2023-05-01 21:51:47', NULL),
(4, 1, 'Withdraw', 'You have withdrawed 1645.00 from your account', '2023-05-01 21:51:47', NULL),
(5, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-01 21:51:47', NULL),
(6, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-01 21:51:47', NULL),
(7, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-01 21:51:47', NULL),
(8, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-01 21:51:47', NULL),
(9, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-01 21:51:47', NULL),
(10, 1, 'Deposit', 'You have deposited 1000 to your account', '2023-05-01 21:51:47', NULL),
(11, 2, 'Deposit', 'You have deposited 10000 to your account', '2023-05-17 12:04:23', NULL),
(12, 2, 'Deposit', 'You have deposited 10000 to your account', '2023-05-17 12:04:39', NULL),
(13, 2, 'Deposit', 'You have deposited 5000 to your account', '2023-05-17 12:05:03', NULL),
(14, NULL, 'Partnership #22', 'You have new partnership request', '2023-05-17 12:11:29', NULL),
(15, 2, 'Partnership #22', 'Your partnership request has been approved', '2023-05-17 12:11:57', NULL),
(16, 11, 'Partnership #22', 'Your partnership request has been approved', '2023-05-17 12:11:57', NULL),
(17, 2, 'Partnership #22', 'Your partnership request has been payed', '2023-05-17 13:48:45', NULL),
(18, 11, 'Partnership #22', 'Your partnership request has been payed', '2023-05-17 13:48:45', NULL),
(19, NULL, 'Partnership #23', 'You have new partnership request', '2023-05-19 11:04:44', NULL),
(20, 2, 'Partnership #23', 'Your partnership request has been approved', '2023-05-19 11:05:07', NULL),
(21, 11, 'Partnership #23', 'Your partnership request has been approved', '2023-05-19 11:05:07', NULL),
(22, 2, 'Partnership #23', 'Your partnership request has been payed', '2023-05-19 11:05:17', NULL),
(23, 11, 'Partnership #23', 'Your partnership request has been payed', '2023-05-19 11:05:17', NULL),
(24, 11, 'Deposit', 'You have deposited 1000 to your account', '2023-05-19 11:19:45', NULL),
(25, 11, 'Withdraw', 'You have withdrawed 500 from your account', '2023-05-19 11:20:20', NULL),
(26, NULL, 'Partnership #24', 'You have new partnership request', '2023-05-19 11:39:09', NULL),
(27, 29, 'Partnership #24', 'Your partnership request has been approved', '2023-05-19 11:39:33', NULL),
(28, 13, 'Partnership #24', 'Your partnership request has been approved', '2023-05-19 11:39:33', NULL),
(29, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:19', NULL),
(30, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:19', NULL),
(31, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:28', NULL),
(32, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:28', NULL),
(33, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:28', NULL),
(34, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:28', NULL),
(35, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:29', NULL),
(36, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:29', NULL),
(37, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:29', NULL),
(38, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:29', NULL),
(39, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(40, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(41, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(42, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(43, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(44, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:30', NULL),
(45, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:31', NULL),
(46, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:31', NULL),
(47, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:31', NULL),
(48, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:31', NULL),
(49, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:32', NULL),
(50, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:32', NULL),
(51, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:34', NULL),
(52, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:34', NULL),
(53, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:35', NULL),
(54, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:35', NULL),
(55, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:35', NULL),
(56, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:40:35', NULL),
(57, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:17', NULL),
(58, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:17', NULL),
(59, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(60, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(61, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(62, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(63, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(64, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:18', NULL),
(65, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(66, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(67, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(68, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(69, 29, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(70, 13, 'Partnership #24', 'Your partnership request has not been payed', '2023-05-19 11:42:19', NULL),
(71, 29, 'Deposit', 'You have deposited 10000 to your account', '2023-05-19 11:43:01', NULL),
(72, NULL, 'Partnership #25', 'You have new partnership request', '2023-05-19 14:57:37', NULL),
(73, 2, 'Partnership #25', 'Your partnership request has been approved', '2023-05-19 14:58:19', NULL),
(74, 11, 'Partnership #25', 'Your partnership request has been approved', '2023-05-19 14:58:19', NULL),
(75, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:33', NULL),
(76, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:33', NULL),
(77, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:38', NULL),
(78, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:38', NULL),
(79, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:39', NULL),
(80, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:32:39', NULL),
(81, 2, 'Deposit', 'You have deposited 5000 to your account', '2023-05-19 15:33:49', NULL),
(82, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:28', NULL),
(83, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:28', NULL),
(84, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:31', NULL),
(85, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:31', NULL),
(86, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:32', NULL),
(87, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:32', NULL),
(88, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:33', NULL),
(89, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:33', NULL),
(90, 2, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:33', NULL),
(91, 11, 'Partnership #25', 'Your partnership request has not been payed', '2023-05-19 15:35:33', NULL),
(92, 2, 'Deposit', 'You have deposited 500 to your account', '2023-05-19 15:36:13', NULL),
(93, 2, 'Partnership #25', 'Your partnership request has been payed', '2023-05-19 15:36:20', NULL),
(94, 11, 'Partnership #25', 'Your partnership request has been payed', '2023-05-19 15:36:20', NULL),
(95, NULL, 'Partnership #26', 'You have new partnership request', '2023-05-19 15:59:36', NULL),
(96, 29, 'Partnership #26', 'Your partnership request has been approved', '2023-05-19 15:59:42', NULL),
(97, 30, 'Partnership #26', 'Your partnership request has been approved', '2023-05-19 15:59:42', NULL),
(98, 29, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 15:59:53', NULL),
(99, 30, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 15:59:53', NULL),
(100, 29, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:03', NULL),
(101, 30, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:03', NULL),
(102, 29, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:03', NULL),
(103, 30, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:03', NULL),
(104, 29, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:04', NULL),
(105, 30, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:04', NULL),
(106, 29, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:05', NULL),
(107, 30, 'Partnership #26', 'Your partnership request has not been payed', '2023-05-19 16:00:05', NULL),
(108, 29, 'Deposit', 'You have deposited 10000 to your account', '2023-05-19 16:00:32', NULL),
(109, 29, 'Partnership #26', 'Your partnership request has been payed', '2023-05-19 16:00:38', NULL),
(110, 30, 'Partnership #26', 'Your partnership request has been payed', '2023-05-19 16:00:38', NULL),
(111, 31, 'Deposit', 'You have deposited 10000 to your account', '2023-05-19 17:19:40', NULL),
(112, NULL, 'Partnership #27', 'You have new partnership request', '2023-05-19 17:20:23', NULL),
(113, 31, 'Partnership #27', 'Your partnership request has been approved', '2023-05-19 17:20:28', NULL),
(114, 32, 'Partnership #27', 'Your partnership request has been approved', '2023-05-19 17:20:28', NULL),
(115, 31, 'Partnership #27', 'Your partnership request has been payed', '2023-05-19 17:20:33', NULL),
(116, 32, 'Partnership #27', 'Your partnership request has been payed', '2023-05-19 17:20:33', NULL),
(117, 32, 'Deposit', 'You have deposited 1000 to your account', '2023-05-19 17:21:13', NULL),
(118, 32, 'Withdraw', 'You have withdrawed 50 from your account', '2023-05-19 17:21:32', NULL),
(119, 1, 'Partnership #21', 'Your partnership request has been approved', '2023-05-19 20:47:06', NULL),
(120, 10, 'Partnership #21', 'Your partnership request has been approved', '2023-05-19 20:47:06', NULL),
(121, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:39', NULL),
(122, 10, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:39', NULL),
(123, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:41', NULL),
(124, 10, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:41', NULL),
(125, 1, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:42', NULL),
(126, 10, 'Partnership #20', 'Your partnership request has not been payed', '2023-05-19 20:47:42', NULL),
(127, 1, 'Deposit', 'You have deposited 520 to your account', '2023-05-19 20:48:03', NULL),
(128, 1, 'Partnership #20', 'Your partnership request has been payed', '2023-05-19 20:48:09', NULL),
(129, 10, 'Partnership #20', 'Your partnership request has been payed', '2023-05-19 20:48:09', NULL),
(130, 1, 'Partnership #21', 'Your partnership request has been payed', '2023-05-19 20:49:40', NULL),
(131, 10, 'Partnership #21', 'Your partnership request has been payed', '2023-05-19 20:49:40', NULL),
(132, NULL, 'Partnership #28', 'You have new partnership request', '2024-04-23 18:52:29', NULL),
(133, NULL, 'Partnership #29', 'You have new partnership request', '2024-04-23 19:04:19', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `partnerships`
--

CREATE TABLE `partnerships` (
  `id` int(11) NOT NULL,
  `influencer_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `terms` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `duration_unit` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partnerships`
--

INSERT INTO `partnerships` (`id`, `influencer_id`, `brand_id`, `terms`, `amount`, `duration`, `duration_unit`, `start_date`, `sender_id`, `status`) VALUES
(11, 10, 1, '', 160, 3, 'week', '2022-11-01', 1, 'Done'),
(14, 10, 1, '', 500, 5, 'week', '2024-12-31', 1, 'approved'),
(15, 10, 1, '', 400, 3, 'day', '2022-12-01', 1, 'Done'),
(16, 10, 1, '', 50, 1, 'day', '2023-01-01', 1, 'Done'),
(17, 10, 1, '', 400, 1, 'day', '2023-12-01', 1, 'approved'),
(20, 10, 1, '', 450, 2, 'month', '2023-04-13', 10, 'approved'),
(21, 10, 1, '', 50, -1, 'day', '2023-12-31', 1, 'approved'),
(22, 11, 2, 'test test', 5000, 1, 'week', '2023-05-17', 2, 'approved'),
(23, 11, 2, 'test', 300, 1, 'day', '2023-05-19', 2, 'approved'),
(24, 13, 29, 'test', 1000, 1, 'day', '2023-05-19', 29, 'Payment Pending'),
(25, 11, 2, 'test', 100, 1, 'day', '2023-05-19', 2, 'approved'),
(26, 30, 29, 'test', 5000, 1, 'day', '2023-05-19', 29, 'approved'),
(27, 32, 31, 'test', 500, 1, 'day', '2023-05-19', 31, 'approved'),
(28, 33, 2, 'agrre', 100, 8, 'day', '2024-01-01', 33, NULL),
(29, 10, 34, 'agfz', 100, 8, 'week', '2024-04-22', 34, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rated_user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `rated_user_id`, `rating`, `created_at`) VALUES
(1, 1, 14, 1, '2023-04-14 09:53:02'),
(3, 1, 11, 4, '2023-04-14 13:25:02'),
(4, 1, 10, 5, '2023-04-14 20:46:59'),
(5, 10, 1, 5, '2023-04-14 21:00:57'),
(6, 2, 11, 3, '2023-05-19 11:11:53');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `reviewed_user_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer_id`, `reviewed_user_id`, `comment`, `created_at`) VALUES
(6, 1, 14, 'Test Review', '2023-04-14 11:41:52'),
(7, 1, 14, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem quasi distinctio inventore sed, optio reprehenderit quos! Ipsa itaque fugit obcaecati.', '2023-04-14 20:39:04'),
(8, 1, 10, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem quasi distinctio inventore sed, optio reprehenderit quos! Ipsa itaque fugit obcaecati.\r\n', '2023-04-14 20:46:45'),
(9, 10, 1, 'Best services\r\n', '2023-04-14 21:01:05'),
(10, 1, 11, 'Review', '2023-04-29 13:29:36'),
(11, 1, 11, 'Review', '2023-04-29 13:29:41'),
(12, 1, 11, 'Review', '2023-04-29 13:30:45'),
(13, 1, 11, 'Review', '2023-04-29 13:31:28'),
(14, 1, 11, 'Review', '2023-04-29 13:31:35'),
(15, 1, 11, 'Review', '2023-04-29 13:31:43'),
(16, 1, 11, 'Review', '2023-04-29 13:31:51'),
(17, 1, 11, 'Review', '2023-04-29 13:34:03'),
(18, 1, 10, 'Review', '2023-04-29 13:37:23'),
(19, 10, 1, 'Second time\r\n', '2023-04-29 14:08:49');

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `partnership_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `type`, `created_at`, `partnership_id`) VALUES
(0, 2, 500, 'desposit', '2023-05-19 15:36:13', NULL),
(0, 2, -100, 'Partnership', '2023-05-19 15:36:20', 25),
(0, 29, 10000, 'desposit', '2023-05-19 16:00:32', NULL),
(0, 29, -5000, 'Partnership', '2023-05-19 16:00:38', 25),
(0, 31, 10000, 'desposit', '2023-05-19 17:19:40', NULL),
(0, 31, -500, 'Partnership', '2023-05-19 17:20:33', 25),
(0, 32, 1000, 'desposit', '2023-05-19 17:21:13', NULL),
(0, 32, -50, 'withdraw', '2023-05-19 17:21:32', NULL),
(0, 1, 520, 'desposit', '2023-05-19 20:48:03', NULL),
(0, 1, -450, 'Partnership', '2023-05-19 20:48:09', 25),
(0, 1, -50, 'Partnership', '2023-05-19 20:49:40', 25);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `balance` int(11) DEFAULT 0,
  `token` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `avatar`, `balance`, `token`) VALUES
(1, 'Adidas', 'adidas@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'http://localhost/Brand_Inverstissement/public/uploads/6467e0bb004b0.png', 20, NULL),
(2, 'cocacola', 'cocacola@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://is3-ssl.mzstatic.com/image/thumb/Purple5/v4/1e/37/74/1e37748c-6ef6-89fa-022d-311c37f00883/source/256x256bb.jpg', 400, NULL),
(3, 'apple', 'apple@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://cdn.wallpapersafari.com/85/64/Gjov4X.jpg', 0, NULL),
(4, 'google', 'google@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d2abd662597191.5a9589b09ddf5.jpg', 0, NULL),
(5, 'amazon', 'amazon@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://static.vecteezy.com/system/resources/previews/018/780/169/non_2x/3d-illustration-of-amazon-logo-free-png.png', 0, NULL),
(6, 'microsoft', 'microsoft@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iFfff2Dw7Xx4/v0/1200x-1.jpg', 0, NULL),
(7, 'pepsico', 'pepsico@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnZvlmWbGm4CAhRwN_KpNoJrWEiUZUw3x6ryKpjKhj9zChF67PASjJxVZXXCKNLLgWH-g&usqp=CAU', 0, NULL),
(8, 'samsung', 'samsung@brand.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'brand', 'https://static.vecteezy.com/system/resources/thumbnails/020/927/096/small/samsung-brand-logo-phone-symbol-white-design-south-korean-mobile-illustration-with-blue-background-free-vector.jpg', 0, NULL),
(10, 'abdelhaq el', 'maria@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'http://localhost/Brand_Inverstissement/public/uploads/6467e0c40685f.png', 210, NULL),
(11, 'Mohamed', 'med@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png', 500, NULL),
(12, 'sophie', 'sophie@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-3.png', 0, NULL),
(13, 'David', 'david@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png', 0, NULL),
(14, 'Fatima', 'fatima@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-2.png', 0, NULL),
(15, 'Kento', 'kento@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-3.png', 0, NULL),
(16, 'Sofia', 'sofia@influencer.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'influencer', 'https://www.wordpress.codeinsolution.com/influexa/wp-content/uploads/sites/24/2023/03/Team-1.png', 0, NULL),
(17, 'admin', 'admin@admin.com', '$2y$10$fhN9HLtoBpYxzsMuulGl6eCgYRipfb/Tkxxa/NsbSnWZRpKvkoWmS', 'admin', 'https://static.vecteezy.com/system/resources/previews/009/636/683/original/admin-3d-illustration-icon-png.png', 0, NULL),
(29, 'aarab', 'aarab1@brand.com', '$2y$10$t0MRld7i3fmYro0ZM7cU6O0uYDl073OuQtX8BDH2huwya0k1I8Q3S', 'brand', 'http://localhost/Brand_Inverstissement/public/uploads/64675c376195d.jpeg', 5000, NULL),
(30, 'aarab2', 'aarab2@influencer.com', '$2y$10$tdUtSFgTT3K9dDkb02um8.Az7XMcqufi8Oh.YkjX0GCT9KJ00f9ma', 'influencer', NULL, 0, NULL),
(31, 'abdo1', 'abdo1@brand.com', '$2y$10$ou6rhPUnKTGDoiWjXTndqOIFQnWXm04xaT96/thqyvbWU.MNMAczm', 'brand', NULL, 9500, NULL),
(32, 'abdo2', 'abdo2@influencer.com', '$2y$10$8pohWkxlGk/Qfej96/RPLeOqevcb0hl5JfS5T5a/d8vtYkhMNzD8C', 'influencer', NULL, 950, NULL),
(33, 'abdelhaq el', 'tst@gmail.com', '$2y$10$tUhk6med43iqepYbU5KqPebNE1qtYZDWnVIP2jXSzN9oYQXRdLPeS', 'influencer', 'http://localhost:8082/Brand_Inverstissement/public/uploads/66280bc6b326b.jpeg', 0, '8e40cfd0e033cecf98eb7f3b1de8de063a691efc68d6'),
(34, 'pespsi', 'pepsi@pepsi.com', '$2y$10$4ehzpuFCDkRZZ/DwpX7bxOkHR8vXGftAEeigBuUfN/7vmzyOTFrxq', 'brand', NULL, 0, '11786f577742da2d1333f7eefa4b83e64b5da111ed19');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_ibfk_1` (`author_id`);

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `deletedaccounts`
--
ALTER TABLE `deletedaccounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `partnerships`
--
ALTER TABLE `partnerships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `influencer_id` (`influencer_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rated_user_id` (`rated_user_id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviewer_id` (`reviewer_id`),
  ADD KEY `reviewed_user_id` (`reviewed_user_id`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `partnership_id` (`partnership_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `deletedaccounts`
--
ALTER TABLE `deletedaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT pour la table `partnerships`
--
ALTER TABLE `partnerships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `credits`
--
ALTER TABLE `credits`
  ADD CONSTRAINT `credits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `deletedaccounts`
--
ALTER TABLE `deletedaccounts`
  ADD CONSTRAINT `deletedaccounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `influencers`
--
ALTER TABLE `influencers`
  ADD CONSTRAINT `influencers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `partnerships`
--
ALTER TABLE `partnerships`
  ADD CONSTRAINT `partnerships_ibfk_1` FOREIGN KEY (`influencer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `partnerships_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `partnerships_ibfk_3` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`rated_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`reviewed_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`partnership_id`) REFERENCES `partnerships` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
