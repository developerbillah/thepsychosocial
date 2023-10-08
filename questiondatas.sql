-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 11:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serve_from`
--

-- --------------------------------------------------------

--
-- Table structure for table `questiondatas`
--

CREATE TABLE `questiondatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `PanicDisorder` int(11) DEFAULT NULL,
  `Generalized` int(11) DEFAULT NULL,
  `Separation` int(11) DEFAULT NULL,
  `SocialPhobis` int(11) DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL,
  `PanicDisorder_score` int(11) DEFAULT NULL,
  `Generalized_score` int(11) DEFAULT NULL,
  `SocialPhobis_score` int(11) DEFAULT NULL,
  `Separation_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q44` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questiondatas`
--

INSERT INTO `questiondatas` (`id`, `name`, `email`, `phone`, `age`, `address`, `total`, `PanicDisorder`, `Generalized`, `Separation`, `SocialPhobis`, `total_score`, `PanicDisorder_score`, `Generalized_score`, `SocialPhobis_score`, `Separation_score`, `created_at`, `updated_at`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`) VALUES
(1, 'Lynn Barber', 'kyluko@mailinator.com', 1, 10, 'Et et ipsa non mole', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-10 14:49:33', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Victor Boyle', 'qylyhysy@mailinator.com', 1, 0, 'Dolorem minima venia', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 05:17:25', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Victor Boyle', 'qylyhysy@mailinator.com', 1, 0, 'Dolorem minima venia', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 05:18:05', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Victor Boyle', 'qylyhysy@mailinator.com', 1, 0, 'Dolorem minima venia', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 05:20:28', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Victor Boyle', 'qylyhysy@mailinator.com', 1, 0, 'Dolorem minima venia', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 05:21:02', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Victor Boyle', 'qylyhysy@mailinator.com', 1, 0, 'Dolorem minima venia', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 05:27:09', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Otto Bell', 'zezeh@mailinator.com', 1, 0, 'Ut temporibus eos ve', 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2023-09-11 06:40:37', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Ulysses Flynn', 'bopisoric@mailinator.com', 1, 0, 'Est dolore aliquid', 41, 16, 12, 6, 7, 41, 16, 12, 7, 6, '2023-09-11 23:50:52', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Victor Bennett', 'lyguqivehi@mailinator.com', 1, 0, 'Laborum Tempora quo', 41, 12, 12, 9, 8, 41, 12, 12, 8, 9, '2023-09-11 23:57:26', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Victor Bennett', 'lyguqivehi@mailinator.com', 1, 0, 'Laborum Tempora quo', 76, 29, 20, 14, 13, 76, 29, 20, 13, 14, '2023-09-11 23:58:17', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Velma Frost', 'wasozuvuf@mailinator.com', 1, 0, 'Rerum repudiandae am', 71, 26, 20, 12, 13, 71, 26, 20, 13, 12, '2023-09-12 00:01:47', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Emerald Howell', 'joryvila@mailinator.com', 1, 0, 'Provident iste aliq', 61, 20, 17, 13, 11, 61, 20, 17, 11, 13, '2023-09-12 00:05:35', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Emerald Howell', 'joryvila@mailinator.com', 1, 0, 'Provident iste aliq', 61, 20, 17, 13, 11, 61, 20, 17, 11, 13, '2023-09-12 00:08:19', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Blythe Arnold', 'gymob@mailinator.com', 1, 0, 'Fugiat eos repudian', 69, 26, 21, 12, 10, 69, 26, 21, 10, 12, '2023-09-12 00:12:38', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Ryan Rivers', 'nyrukafovi@mailinator.com', 1, 0, 'Sed deserunt et odit', 54, 22, 13, 9, 10, 54, 22, 13, 10, 9, '2023-09-12 00:14:08', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Raja Craft', 'muxud@mailinator.com', 1, 0, 'Aperiam dicta cillum', 58, 19, 22, 10, 7, 58, 19, 22, 7, 10, '2023-09-12 00:15:57', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Brittany Ortega', 'huwu@mailinator.com', 1, 0, 'Labore quia iste non', 57, 22, 18, 7, 10, 57, 22, 18, 10, 7, '2023-09-12 00:17:33', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Martin Patel', 'cerucuciva@mailinator.com', 1, 0, 'Accusamus sit ut sit', 54, 18, 17, 10, 9, 54, 18, 17, 9, 10, '2023-09-12 00:18:29', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Sheila Robinson', 'jiqupu@mailinator.com', 1, 0, 'Autem itaque dolore', 58, 20, 19, 9, 10, 58, 20, 19, 10, 9, '2023-09-12 00:20:34', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Wynter Vincent', 'capizecif@mailinator.com', 1, 0, 'Dolore veritatis eum', 51, 20, 16, 5, 10, 51, 20, 16, 10, 5, '2023-09-12 00:21:22', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Wynter Vincent', 'capizecif@mailinator.com', 1, 0, 'Dolore veritatis eum', 51, 20, 16, 5, 10, 51, 20, 16, 10, 5, '2023-09-12 00:22:00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'asdf', 'capizecif@mailinator.com', 4536, 0, 'Dolore veritatis eum', 51, 20, 16, 5, 10, 51, 20, 16, 10, 5, '2023-09-12 00:22:35', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Patricia Sellers', 'fokomocado@mailinator.com', 1, 0, 'Voluptas sunt ut sed', 63, 26, 18, 8, 11, 63, 26, 18, 11, 8, '2023-09-12 00:25:16', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Patricia', 'fokomocado@mailinator.com', 1, 0, 'Voluptas sunt ut sed', 63, 26, 18, 8, 11, 63, 26, 18, 11, 8, '2023-09-12 00:25:58', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Lana Jenkins', 'peqodiw@mailinator.com', 1, 0, 'Est possimus omnis', 59, 26, 17, 7, 9, 59, 26, 17, 9, 7, '2023-09-12 00:27:58', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'Victoria Bishop', 'bagy@mailinator.com', 1, 0, 'Et rem ipsa aliquip', 56, 18, 13, 13, 12, 56, 18, 13, 12, 13, '2023-09-12 00:40:43', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'Beatrice Fulton', 'papybomo@mailinator.com', 1, 0, 'Sed enim laboriosam', 52, 20, 15, 9, 8, 52, 20, 15, 8, 9, '2023-09-12 00:54:48', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'Beatrice Fulton', 'papybomo@mailinator.com', 1, 0, 'Sed enim laboriosam', 62, 25, 18, 11, 8, 62, 25, 18, 8, 11, '2023-09-12 00:55:08', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'Harper Caldwell', 'murecicy@mailinator.com', 1, 0, 'Nisi earum velit off', 61, 22, 23, 8, 8, 61, 22, 23, 8, 8, '2023-09-12 00:56:50', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'Rowan Gordon', 'gikuw@mailinator.com', 1, 0, 'Illo dolore hic dolo', 53, 17, 14, 8, 14, 53, 17, 14, 14, 8, '2023-09-12 01:00:45', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'Tatum Gonzalez', 'belenezow@mailinator.com', 1, 0, 'Ex aspernatur quas r', 49, 16, 16, 8, 9, 49, 16, 16, 9, 8, '2023-09-12 01:47:24', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'Gavin Brennan', 'rofihes@mailinator.com', 1, 0, 'Nemo et in adipisci', 47, 17, 15, 7, 8, 47, 17, 15, 8, 7, '2023-09-12 12:30:43', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'Reuben Klein', 'vudo@mailinator.com', 1, 0, 'Obcaecati quis id vo', 52, 17, 13, 11, 11, 52, 17, 13, 11, 11, '2023-09-12 12:32:31', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'Xandra Dillard', 'qovik@mailinator.com', 1, 0, 'Dolores eum voluptat', 46, 16, 13, 8, 9, 46, 16, 13, 9, 8, '2023-09-12 12:35:45', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'Bertha Romero', 'zobiwywatu@mailinator.com', 1, 0, 'Facere doloremque co', 74, 28, 24, 12, 10, 74, 28, 24, 10, 12, '2023-09-12 12:39:19', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 'Brynne Levy', 'mufi@mailinator.com', 1, 0, 'Modi consectetur vol', 46, 16, 15, 7, 8, 46, 16, 15, 8, 7, '2023-09-12 12:40:40', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'Justina Tate', 'cixakotewa@mailinator.com', 1, 0, 'Alias omnis consequa', 53, 18, 18, 7, 10, 53, 18, 18, 10, 7, '2023-09-12 12:45:44', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'Demetrius Lester', 'mygejy@mailinator.com', 1, 0, 'Cumque in laboris qu', 48, 22, 15, 4, 7, 48, 22, 15, 7, 4, '2023-09-12 12:47:38', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'Latifah Stephens', 'tahuva@mailinator.com', 1, 0, 'Ut aut amet eu ex s', 42, 13, 14, 8, 7, 42, 13, 14, 7, 8, '2023-09-12 12:55:29', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'Armando Soto', 'vyhofyxox@mailinator.com', 1, 0, 'Fuga Nobis aut dele', 47, 17, 15, 7, 8, 47, 17, 15, 8, 7, '2023-09-12 13:01:52', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'Wayne Velez', 'momydypi@mailinator.com', 1, 0, 'Officiis id corporis', 42, 12, 18, 5, 7, 42, 12, 18, 7, 5, '2023-09-12 13:04:40', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'Rae Carlson', 'xuhury@mailinator.com', 1, 0, 'Doloribus aspernatur', 50, 21, 16, 5, 8, 50, 21, 16, 8, 5, '2023-09-12 13:29:47', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'Benjamin Stout', 'fuqakibig@mailinator.com', 1, 0, 'Quos quia ea consect', 46, 15, 13, 7, 11, 46, 15, 13, 11, 7, '2023-09-12 13:32:34', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'Benjamin Stout', 'fuqakibig@mailinator.com', 1, 0, 'Quos quia ea consect', 46, 15, 13, 7, 11, 46, 15, 13, 11, 7, '2023-09-12 13:32:48', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'Benjamin Stout', 'fuqakibig@mailinator.com', 1, 0, 'Quos quia ea consect', 42, 13, 13, 7, 9, 42, 13, 13, 9, 7, '2023-09-12 13:33:21', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'Stephanie Griffin', 'byjuxivu@mailinator.com', 1, 0, 'Voluptatem ut neces', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 14:38:18', NULL, 2, 1, 0, 0, 2, 2, 2, 0, 0, 1, 1, 0, 2, 2, 0, 1, 1, 1, 0, 0, 2, 1, 2, 2, 0, 0, 0, 1, 0, 1, 2, 2, 0, 0, 1, 0, 0, 0, 2, 0, 0, 0, 0, 2),
(48, 'Stephanie Griffin', 'byjuxivu@mailinator.com', 1, 0, 'Voluptatem ut neces', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 14:39:50', NULL, 2, 1, 0, 0, 2, 2, 2, 0, 0, 1, 1, 0, 2, 2, 0, 1, 1, 1, 0, 0, 2, 1, 2, 2, 0, 0, 0, 1, 0, 1, 2, 2, 0, 0, 1, 0, 0, 0, 2, 0, 0, 0, 0, 2),
(49, 'Walker Wiley', 'vuvixepeh@mailinator.com', 1, 0, 'Animi fugiat in sin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 14:54:39', NULL, 0, 1, 1, 2, 0, 0, 1, 1, 0, 1, 1, 1, 2, 2, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 1, 0, 2, 2, 0, 0, 0, 2, 2, 1, 2, 2, 0, 2, 1, 2, 1, 2, 2),
(50, 'Dorothy Mcintyre', 'ritaqepys@mailinator.com', 2147483647, 44, 'Optio odit exercita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 14:57:43', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 'Dorothy Mcintyre', 'ritaqepys@mailinator.com', 2147483647, 44, 'Optio odit exercita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-12 15:01:41', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questiondatas`
--
ALTER TABLE `questiondatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questiondatas`
--
ALTER TABLE `questiondatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
