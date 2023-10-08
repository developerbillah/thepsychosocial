-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2023 at 11:51 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intertradebd_interbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin_photos` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin_photos`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Intertrade', 'admin@gmail.com', '2022-06-07 01:00:33', '$2y$10$JDrlzQW9LcPkV.tbW9QBmeBdY1RtPAkmFcqhUWU/loQgymCOrz45O', '2023041205261762893546953208.png', 0, '2022-06-07 01:00:34', '2023-04-12 05:26:48'),
(2, 'Admin', 'ward.cecil@example.net', '2022-06-07 01:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, '2022-06-07 01:00:34', '2022-06-07 01:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_photo`, `blog_description`, `status`, `created_at`, `updated_at`, `views`) VALUES
(9, 'The point of using Lorem Ipsum is that it', 'upload/blog/1756535990078992.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', 0, '2023-01-31 19:07:40', '2023-04-26 10:22:20', 40),
(13, 'An art studio is sometimes', 'upload/blog/1756536162917231.jpg', '<p>The studio of any artist, especially from the 15th to the 19th centuries, characterized all the assistants</p>', 1, '2023-01-31 19:10:24', '2023-04-16 07:39:37', 61),
(16, 'one', 'upload/blog/1756539187064627.jpg', '<p>one</p>', 1, '2023-01-31 19:58:29', '2023-04-20 19:51:58', 13),
(17, 'two', 'upload/blog/1756539278284492.jpg', '<p>two</p>', 1, '2023-01-31 19:59:55', '2023-04-19 11:50:45', 10);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(12, 'Steel Mill Waste', 'steel-mill-waste', NULL, '2023-03-05 12:09:59'),
(21, 'Infinite Shipping & Logistics', 'infinite-shipping-&-logistics', NULL, NULL),
(22, 'Abid Agro', 'abid-agro', NULL, NULL),
(23, 'Steel Scrap', 'steel-scrap', NULL, NULL),
(24, 'Kazi Auto Cars', 'kazi-auto-cars', NULL, NULL),
(25, 'Kazi Fashion RMG Stock Lot', 'kazi-fashion-rmg-stock-lot', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `childcategory_name` varchar(255) NOT NULL,
  `childcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `category_id`, `subcategory_id`, `childcategory_name`, `childcategory_slug`, `created_at`, `updated_at`) VALUES
(21, 12, 30, 'Search Engine Optimization (SEO)', 'search-engine-optimization-(seo)', NULL, NULL),
(22, 12, 30, 'Social Media Marketing', 'social-media-marketing', NULL, NULL),
(23, 12, 30, 'Pay Per Click (PPC)', 'pay-per-click-(ppc)', NULL, NULL),
(24, 12, 30, 'Email Marketing', 'email-marketing', NULL, NULL),
(25, 12, 30, 'Media buying', 'media-buying', NULL, NULL),
(26, 12, 30, 'Affiliate Marketing', 'affiliate-marketing', NULL, NULL),
(27, 12, 29, 'Desktop Application', 'desktop-application', NULL, NULL),
(28, 12, 29, 'Android & iOS App Development', 'android-&-ios-app-development', NULL, NULL),
(29, 12, 29, 'Enterprise  Software Solution', 'enterprise--software-solution', NULL, NULL),
(30, 12, 29, 'Custom Software Solution', 'custom-software-solution', NULL, NULL),
(31, 12, 28, 'E-commerce Solution', 'e-commerce-solution', NULL, NULL),
(32, 12, 28, 'Company profile Website', 'company-profile-website', NULL, NULL),
(33, 12, 28, 'School, College, University Website', 'school,-college,-university-website', NULL, NULL),
(34, 12, 28, 'Booking Website', 'booking-website', NULL, NULL),
(35, 12, 27, 'Static post design ,Banner design', 'static-post-design-,banner-design', NULL, NULL),
(36, 12, 27, 'Content writing/copywriting', 'content-writing/copywriting', NULL, NULL),
(37, 12, 27, 'Interview video/Documentary  Video', 'interview-video/documentary--video', NULL, NULL),
(38, 12, 27, 'Corporate AV', 'corporate-av', NULL, NULL),
(39, 12, 27, 'Professional video shoot and studio rent', 'professional-video-shoot-and-studio-rent', NULL, NULL),
(40, 12, 31, 'Web Application Development', 'web-application-development', NULL, NULL),
(41, 12, 31, 'WordPress Website Development', 'wordpress-website-development', NULL, NULL),
(42, 12, 31, 'Ecommerce Web Design and Development', 'ecommerce-web-design-and-development', NULL, NULL),
(43, 12, 31, 'Enterprise Web Design and Development', 'enterprise-web-design-and-development', NULL, NULL),
(44, 12, 31, 'Laravel Website Design Services', 'laravel-website-design-services', NULL, '2022-11-26 06:48:43'),
(45, 12, 31, 'E-Learning System', 'e-learning-system', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_title` varchar(255) NOT NULL,
  `orginal_title` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_title`, `orginal_title`, `client_logo`, `created_at`, `updated_at`) VALUES
(42, 'https://intertradebd.com/frontend/category/12', 'STEEL MILL\'S WASTE', 'upload/client/1762942454178331.jpg', '2023-04-12 04:15:40', NULL),
(43, 'https://intertradebd.com/frontend/category/23', 'STEEL SCRAP', 'upload/client/1762942551342776.jpg', '2023-04-12 04:17:12', NULL),
(44, 'https://intertradebd.com/frontend/category/22', 'ABID AGRO', 'upload/client/1762942633782235.jpg', '2023-04-12 04:18:31', NULL),
(45, 'https://intertradebd.com/frontend/category/25', 'KAZI FASHION HOUSE', 'upload/client/1762942685699393.jpg', '2023-04-12 04:19:20', NULL),
(46, 'https://intertradebd.com/frontend/category/24', 'KAZI AUTO', 'upload/client/1762942739741607.jpg', '2023-04-12 04:20:12', NULL),
(47, 'https://intertradebd.com/frontend/category/21', 'INFINITE SHIPPING & LOGISTICS', 'upload/client/1762942772258651.png', '2023-04-12 04:20:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email_address`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '356436', 'domain verify', 'rffj', NULL, NULL),
(2, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'dfcjfgj', NULL, NULL),
(3, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '01834186970', 'Software', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, NULL),
(4, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '458', 'er', 'ey', NULL, NULL),
(5, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(6, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '466', 'domain verify', 'ey', NULL, NULL),
(7, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(8, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'gy', 'fhtfgj', NULL, NULL),
(9, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(10, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '01778882006', 'a', 'sf', NULL, NULL),
(11, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(12, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '46457', 'domain verify', 'fgt', NULL, NULL),
(13, 'Abir Ahmed', 'shahinsumon2021@gmail.com', '4587569690090', 'domain verify', 'zdgdxg', NULL, NULL),
(14, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '47458897', 'domain verify', 'xdfjg', NULL, NULL),
(15, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '2366', 'Software', 'dfhfj', NULL, NULL),
(16, 'test', 'test1@gmail.com', '4586969', 'domain verify', 'dfhdfj', NULL, NULL),
(17, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(18, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '366', '37y45', 'dsgdd', NULL, NULL),
(19, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '4758', 'dshfd', 'dfhfdj', NULL, NULL),
(20, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(21, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '4367', 'dhh', 'sdxjfj', NULL, NULL),
(22, 'Shahin Reza', 'mdshahinreza2041@gmail.com', '548569', 'ertr', 'dfjfgj', NULL, NULL),
(23, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(24, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '2353', 'saf', 'df', NULL, NULL),
(25, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(26, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '3543', 'domain verify', 'rgdf', NULL, NULL),
(27, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(28, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(29, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(30, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(31, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(32, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(33, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(34, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(35, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(36, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '35346', 'sdgds', 'dsdfh', NULL, NULL),
(37, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(38, 'test2', 'matinagrofarm@gmail.com', '346457', 'gy', 'dfhfj', NULL, NULL),
(39, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'Software', 'front', NULL, NULL),
(40, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '755', 'domain verify', 'ghj', NULL, NULL),
(41, 'Abir Ahmed', 'mdshahinreza2041@gmail.com', '+8801834186970', 'er', 'gfhvnvg  jiil', NULL, NULL),
(42, 'Mahbub', 'mahbub@gmail.com', '08789672', 'digital', 'need', NULL, NULL),
(43, 'Crytosic', 'daquanburt@yahoo.com', '89038419167', 'Wow! This is a fastest way for a financial independence.', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot', NULL, NULL),
(44, 'Crytosic', 'mariela_bedolla@yahoo.com', '89032337630', 'Making money is very easy if you use the financial Robot.', 'Financial robot keeps bringing you money while you sleep. Telegram - @Cryptaxbot', NULL, NULL),
(45, 'Crytosic', 'mylen25@msn.com', '89035632190', 'Find out about the fastest way for a financial independence.', 'Most successful people already use Robot. Do you? Telegram - @Cryptaxbot', NULL, NULL),
(46, 'Crytosic', 'kellymassman@hotmail.com', '89035227741', 'Launch the financial Robot and do your business.', 'One dollar is nothing, but it can grow into $100 here. Telegram - @Cryptaxbot', NULL, NULL),
(47, 'Crytosic', 'wolfgang.w@me.com', '89038981235', 'Find out about the fastest way for a financial independence.', 'The financial Robot is the most effective financial tool in the net! Telegram - @Cryptaxbot', NULL, NULL),
(48, 'Crytosic', 'jwgtwi@yahoo.com', '89037706320', 'Check out the automatic Bot, which works for you 24/7.', 'Financial robot keeps bringing you money while you sleep. Telegram - @Cryptaxbot', NULL, NULL),
(49, 'Md. Farhan Rabby', 'farhanrabby343@gmail.com', '01721413658', 'ECommerce Website', 'Demand-\r\n1. Domain & Hosting (Super Fast)\r\n2. Website (Multivendor) Look Like Arrogga or Foodpanda\r\n3. Mobile App & IOS\r\n4. SEO & Google Ads\r\n5. Marketing Strategy \r\n6. Content Writing\r\n7. Promotional Video\r\n8. FB Page/ Boost/ Promotion\r\n\r\nPlease Share this quotation\r\nAdvance Thank You\r\nContact: 01721413658 (Whatsapp)', NULL, NULL),
(50, 'toriqul', 'toriqulislam@gmail.com', '4641684', 'adf', 'asdfs', NULL, NULL),
(51, 'Kazi Kamrul Islam', 'kazikamrulislam@gmail.com', '+8801535880909', 'test', 'test', NULL, NULL),
(52, 'Kazi Kamrul Islam', 'kazikamrulislam@gmail.com', '+8801535880909', 'test', 'test', NULL, NULL),
(53, 'Kazi Kamrul Islam', 'kazikamrulislam@gmail.com', '+8801535880909', 'test', 'test', NULL, NULL),
(54, 'Brynn Dunlap', 'qorugime@mailinator.com', 'Non qui atque occaec', 'Quasi anim voluptas', 'Incididunt modi exce', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(16, 'upload/portfolio/1756269501956492.jpg', 1, '2022-09-14 04:20:46', '2023-01-28 20:31:57'),
(19, 'upload/portfolio/1756269471981807.jpg', 1, '2022-09-14 04:22:23', '2023-01-28 20:31:28'),
(20, 'upload/portfolio/1756269437907467.jpg', 1, '2022-09-14 04:22:39', '2023-01-28 20:30:56'),
(28, 'upload/portfolio/1756441392948980.jpg', 1, '2022-10-06 05:40:04', '2023-01-30 18:04:05'),
(29, 'upload/portfolio/1756441420572193.jpg', 1, '2022-10-06 05:40:11', '2023-01-30 18:04:31'),
(30, 'upload/portfolio/1756441444393293.jpg', 1, '2022-10-06 05:40:22', '2023-01-30 18:04:54'),
(31, 'upload/portfolio/1756441469865806.jpg', 1, '2022-10-06 05:40:33', '2023-01-30 18:05:18'),
(32, 'upload/portfolio/1756441509937280.jpg', 1, '2022-10-06 05:40:41', '2023-01-30 18:05:56'),
(33, 'upload/portfolio/1756441542573556.jpg', 1, '2022-10-06 05:40:48', '2023-01-30 18:06:28'),
(34, 'upload/portfolio/1756441576125497.jpg', 1, '2022-10-06 05:40:55', '2023-01-30 18:07:00'),
(35, 'upload/portfolio/1756269143828055.jpg', 1, '2022-10-06 05:41:04', '2023-01-28 20:26:15'),
(36, 'upload/portfolio/1756441647528367.jpg', 1, '2022-10-06 05:44:50', '2023-01-30 18:08:08'),
(37, 'upload/portfolio/1756441731514582.jpg', 1, '2022-10-06 05:45:09', '2023-01-30 18:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ind_title` varchar(255) NOT NULL,
  `ind_photo` varchar(255) NOT NULL,
  `ind_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `ind_title`, `ind_photo`, `ind_description`, `created_at`, `updated_at`) VALUES
(2, 'Travels', 'upload/industries/1747196012221211.png', 'This is travels .', '2022-10-20 02:52:42', '2022-10-20 02:52:42'),
(3, 'Technologies', 'upload/industries/1747195463874482.png', 'This is technologies', '2022-10-20 02:43:59', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_05_193812_create_admins_table', 2),
(6, '2022_08_08_050401_create_categories_table', 3),
(7, '2022_08_09_064341_create_sub_categories_table', 4),
(8, '2022_08_09_092147_create_subcategories_table', 5),
(9, '2022_08_10_052744_create_contents_table', 6),
(10, '2022_09_06_061522_create_services_table', 7),
(11, '2022_09_13_130326_create_galleries_table', 8),
(12, '2022_09_14_075608_create_portfolios_table', 9),
(13, '2022_09_14_081818_create_clients_table', 10),
(14, '2022_09_19_162005_create_childcategories_table', 11),
(15, '2022_10_02_073816_create_contacts_table', 12),
(16, '2022_10_04_052157_create_contactuses_table', 13),
(17, '2022_10_04_065644_create_policies_table', 13),
(18, '2022_10_05_171040_create_blogs_table', 13),
(19, '2022_10_06_040643_create_privacies_table', 14),
(20, '2022_10_06_050440_create_terms_table', 15),
(21, '2022_10_20_071552_create_industries_table', 16),
(22, '2022_10_20_072714_create_industries_table', 17),
(23, '2022_10_20_073626_create_industries_table', 18),
(24, '2022_10_23_054943_add_votes_to_services', 19),
(25, '2022_10_23_062145_add_votes_to_blogs', 20),
(26, '2023_01_26_012447_create_settings_table', 21),
(27, '2023_01_31_114201_create_slides_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(255) NOT NULL,
  `port_subtitle` varchar(255) NOT NULL,
  `port_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `port_title`, `port_subtitle`, `port_image`, `status`, `created_at`, `updated_at`) VALUES
(17, 'E-commerce', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740191870692.png', 1, '2022-11-06 09:56:47', '2022-11-06 09:56:47'),
(18, 'School Automation', 'PHP, Laravel,VueJS', 'upload/portfolio/1748740385255987.png', 1, '2022-11-06 09:59:51', '2022-11-06 09:59:51'),
(19, 'Shop Management', 'PHP, Laravel,', 'upload/portfolio/1748740403237389.png', 1, '2022-11-06 10:00:09', '2022-11-06 10:00:09'),
(20, 'Hospital Management', 'PHP, Laravel,', 'upload/portfolio/1748740363844862.png', 1, '2022-11-06 09:59:31', '2022-11-06 09:59:31'),
(21, 'Accounting Software', 'PHP, Laravel,', 'upload/portfolio/1747737782148932.png', 1, '2022-10-26 12:23:55', NULL),
(22, 'Point of Sales', 'PHP, Laravel,', 'upload/portfolio/1748740221435660.png', 1, '2022-11-06 09:57:15', '2022-11-06 09:57:15'),
(23, 'HR-admin Management', 'PHP, Laravel,', 'upload/portfolio/1748740169948759.png', 1, '2022-11-06 09:56:26', '2022-11-06 09:56:26'),
(24, 'Dealership Management', 'PHP, Laravel, VueJS', 'upload/portfolio/1748740203764789.png', 1, '2022-11-06 09:56:58', '2022-11-06 09:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy_title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'policy test admin panel', '<p>policy test admin panel</p>', '2023-04-12 01:53:26', '2023-04-12 01:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `childcategory_id` int(11) NOT NULL,
  `content_slide_title` varchar(255) NOT NULL,
  `breadcrumb` varchar(255) NOT NULL,
  `content_title` varchar(255) NOT NULL,
  `content_descrip` text NOT NULL,
  `long_descrip` text NOT NULL,
  `thamble` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `subcategory_id`, `childcategory_id`, `content_slide_title`, `breadcrumb`, `content_title`, `content_descrip`, `long_descrip`, `thamble`, `status`, `created_at`, `updated_at`, `views`) VALUES
(52, 12, 48, 0, 'Zinc Ash', 'upload/services/1762235450659308.jpg', 'Zinc Ash', 'Zinc Ash', '<p>Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity&nbsp;Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</p>', 'upload/services/1680598689_SGS Sampling 4.jpg', 1, '2023-04-04 02:58:09', '2023-04-19 23:32:43', 14),
(53, 12, 48, 0, 'Zinc Ash', 'upload/services/1762237854379199.jpg', 'Zinc Ash', 'Zinc Ash', '<p>Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity&nbsp;Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</p>', 'upload/services/1680600981_SGS Sampling 5.jpg', 1, '2023-04-04 03:36:21', '2023-04-19 23:32:56', 7),
(54, 12, 48, 0, 'Zinc Ash', 'upload/services/1762237953224521.jpg', 'Zinc Ash', 'Zinc Ash', '<p>Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity&nbsp;Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</p>', 'upload/services/1680601075_SGS Test Report 6.jpg', 1, '2023-04-04 03:37:55', '2023-04-26 09:13:56', 13),
(57, 12, 48, 0, 'Zinc Ash', 'upload/services/1762310302190616.jpeg', 'Zinc Ash', 'Zinc Ash', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670073_Stock Photo 2.jpeg', 1, '2023-04-04 22:47:53', '2023-04-27 09:53:09', 8),
(58, 12, 48, 0, 'Zinc Ash', 'upload/services/1762310407458221.jpg', 'Zinc Ash', 'Zinc Ash', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670173_Zinc Ash 1.jpg', 1, '2023-04-04 22:49:33', '2023-04-18 17:51:33', 2),
(59, 12, 48, 0, 'Zinc Ash', 'upload/services/1762310502080264.jpg', 'Zinc Ash', 'Zinc Ash', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (50% to 65%), Monthly 500-1000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: China, Korea, Thailand, Malaysia, Indonesia etc.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (15% to 35%), Monthly 1000-2000 MT delivery capacity </span></p>', 'upload/services/1680670263_Zinc Ash Delivery 3.jpg', 1, '2023-04-04 22:51:03', '2023-04-18 17:52:24', 5),
(60, 12, 49, 0, 'EAFD', 'upload/services/1762310667089440.jpg', 'EAFD', 'EAFD', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (15% to 35%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670421_SGS Sampling 4.jpg', 1, '2023-04-04 22:53:41', NULL, 0),
(61, 12, 49, 0, 'EAFD', 'upload/services/1762310898341585.jpg', 'EAFD', 'EAFD', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (15% to 35%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670641_Photo.jpg', 1, '2023-04-04 22:57:21', '2023-04-27 06:56:40', 2),
(62, 12, 49, 0, 'EAFD', 'upload/services/1762310967303829.jpg', 'EAFD', 'EAFD', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (15% to 35%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670707_Pic 1.jpg', 1, '2023-04-04 22:58:27', '2023-04-16 05:07:54', 1),
(63, 12, 49, 0, 'EAFD', 'upload/services/1762311148960133.jpg', 'EAFD', 'EAFD', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Zinc% (15% to 35%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670880_Test Report.jpg', 1, '2023-04-04 23:01:20', '2023-04-21 08:18:57', 2),
(64, 12, 50, 0, 'Mill Scale', 'upload/services/1762311269256851.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680670995_Container stuffing1 (1).jpeg', 1, '2023-04-04 23:03:15', '2023-04-15 18:19:44', 2),
(65, 12, 50, 0, 'Mill Scale', 'upload/services/1762311332966846.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671056_Container stuffing1 (2).jpeg', 1, '2023-04-04 23:04:16', '2023-04-21 08:21:23', 5),
(66, 12, 50, 0, 'Mill Scale', 'upload/services/1762311437466921.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span></p>', 'upload/services/1680671155_Container stuffing1 (3).jpeg', 1, '2023-04-04 23:05:55', '2023-04-21 08:21:47', 1),
(67, 12, 50, 0, 'Mill Scale', 'upload/services/1762311889955886.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671587_Container stuffing1 (4).jpeg', 1, '2023-04-04 23:13:07', '2023-04-17 10:21:58', 1),
(68, 12, 50, 0, 'Mill Scale', 'upload/services/1762311963186448.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span></p>', 'upload/services/1680671657_Container stuffing1 (5).jpeg', 1, '2023-04-04 23:14:17', NULL, 0),
(69, 12, 50, 0, 'Mill Scale', 'upload/services/1762312021680108.jpeg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671712_Container stuffing1 (5).jpeg', 1, '2023-04-04 23:15:12', NULL, 0),
(70, 12, 50, 0, 'Mill Scale', 'upload/services/1762312080068785.jpg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671768_Container stuffing1 (6).jpg', 1, '2023-04-04 23:16:08', NULL, 0),
(71, 12, 50, 0, 'Mill Scale', 'upload/services/1762312155091337.jpg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671840_Container stuffing1 (7).jpg', 1, '2023-04-04 23:17:20', NULL, 0),
(72, 12, 50, 0, 'Mill Scale', 'upload/services/1762312229605578.jpg', 'Mill Scale', 'Mill Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 10000-35000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680671911_Container stuffing1 (8).jpg', 1, '2023-04-04 23:18:31', NULL, 0),
(73, 12, 51, 0, 'Iron Red Oxide', 'upload/services/1762312348438869.jpg', 'Iron Red Oxide', 'Iron Red Oxide', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680672024_Iron Red Oxide.jpg', 1, '2023-04-04 23:20:24', '2023-04-27 06:58:15', 3),
(74, 12, 51, 0, 'Iron Red Oxide', 'upload/services/1762312404682733.jpg', 'Iron Red Oxide', 'Iron Red Oxide', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Fe (65- to 75%), Monthly 1000-2000 MT delivery capacity </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Korea, Thailand, Malaysia, Indonesia etc.</span></p>', 'upload/services/1680672078_Test Report.jpg', 1, '2023-04-04 23:21:18', '2023-04-11 21:04:17', 1),
(75, 21, NULL, 0, 'Infinite Shipping', 'upload/services/1762313274673821.jpeg', 'Infinite Shipping', 'Infinite Shipping', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Shipping freight forwarding, all over the world.</span></p>', 'upload/services/1680672907_Container Handling.jpeg', 1, '2023-04-04 23:35:07', NULL, 0),
(76, 21, NULL, 0, 'Infinite Shipping & Logistics', 'upload/services/1762313335310406.jpeg', 'Infinite Shipping & Logistics', 'Infinite Shipping & Logistics', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Shipping freight forwarding, all over the world.</span></p>', 'upload/services/1680672965_Port Operation.jpeg', 1, '2023-04-04 23:36:05', '2023-04-15 18:45:15', 1),
(77, 21, NULL, 0, 'Infinite Shipping', 'upload/services/1762313377262764.jpeg', 'Infinite Shipping', 'Infinite Shipping', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Shipping freight forwarding, all over the world.</span></p>', 'upload/services/1680673005_Trailor delivery.jpeg', 1, '2023-04-04 23:36:45', NULL, 0),
(78, 21, NULL, 0, 'Infinite Shipping', 'upload/services/1762313428869724.jpeg', 'Infinite Shipping', 'Infinite Shipping', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Shipping freight forwarding, all over the world.</span></p>', 'upload/services/1680673054_Vessel Operation.jpeg', 1, '2023-04-04 23:37:34', '2023-04-27 10:07:35', 3),
(79, 22, 52, 0, 'Fish', 'upload/services/1762313550504491.jpeg', 'Fish', 'Fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673170_Bada Fish.jpeg', 1, '2023-04-04 23:39:30', '2023-04-15 18:27:00', 3),
(80, 22, 52, 0, 'Fish', 'upload/services/1762313604760295.jpeg', 'Fish', 'Fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673222_Baila.jpeg', 1, '2023-04-04 23:40:22', '2023-04-16 05:30:13', 3),
(81, 22, 52, 0, 'Fish', 'upload/services/1762313962254188.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673563_Bing Fish.jpeg', 1, '2023-04-04 23:46:03', '2023-04-11 18:07:19', 1),
(82, 22, 52, 0, 'Fish', 'upload/services/1762314072869619.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673669_Chapila Fish.jpeg', 1, '2023-04-04 23:47:49', '2023-04-05 02:02:58', 1),
(83, 22, 52, 0, 'Fish', 'upload/services/1762314124637034.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673718_Elish.jpeg', 1, '2023-04-04 23:48:38', '2023-04-16 05:53:21', 1),
(84, 22, 52, 0, 'Fish', 'upload/services/1762314174090724.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> &nbsp; <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673765_Koi.jpeg', 1, '2023-04-04 23:49:25', '2023-04-11 21:04:11', 1),
(85, 22, 52, 0, 'Fish', 'upload/services/1762314234856431.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673823_Koral Fish.jpeg', 1, '2023-04-04 23:50:23', NULL, 0),
(86, 22, 52, 0, 'Fish', 'upload/services/1762314310204047.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673895_Lal Poya.jpeg', 1, '2023-04-04 23:51:35', '2023-04-15 19:27:16', 1),
(87, 22, 52, 0, 'Fish', 'upload/services/1762314362878797.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680673945_Mola fish.jpeg', 1, '2023-04-04 23:52:25', NULL, 0),
(88, 22, 52, 0, 'Fish', 'upload/services/1762314517909120.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674093_Packing Fish.jpeg', 1, '2023-04-04 23:54:53', NULL, 0),
(89, 22, 52, 0, 'Fish', 'upload/services/1762314574752540.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674147_Poya.jpeg', 1, '2023-04-04 23:55:47', NULL, 0),
(90, 22, 52, 0, 'Fish', 'upload/services/1762314632798168.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674203_Shol Fish.jpeg', 1, '2023-04-04 23:56:43', NULL, 0),
(91, 22, 52, 0, 'Fish', 'upload/services/1762314696082315.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674263_Shor Puti.jpeg', 1, '2023-04-04 23:57:43', NULL, 0),
(92, 22, 52, 0, 'Fish', 'upload/services/1762314756466296.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674321_Shrimp.jpeg', 1, '2023-04-04 23:58:41', '2023-04-25 17:00:28', 1),
(93, 22, 52, 0, 'Fish', 'upload/services/1762314805760823.jpeg', 'Fish', 'fish', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fish Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674368_Tanra.jpeg', 1, '2023-04-04 23:59:28', '2023-04-11 21:04:13', 2),
(94, 22, 53, 0, 'Fish Scale', 'upload/services/1762314939951011.jpg', 'Fish Scale', 'Fish Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:15px\">Dried Fish Scale, HS Code: 05119190 Production Capacity: 5 Forty-Foot Container Per Month Packaging: Bulk, Customized Color: Natural white/ivory Shed life: 24 months Style: Dried and Organic Lead time: 20 - 30 days </span></p>', 'upload/services/1680674495_Fish Scale1.jpg', 1, '2023-04-05 00:01:36', NULL, 0),
(95, 22, 53, 0, 'Fish Scale', 'upload/services/1762314994256574.jpg', 'Fish Scale', 'Fish Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:15px\">Dried Fish Scale, HS Code: 05119190 Production Capacity: 5 Forty-Foot Container Per Month Packaging: Bulk, Customized Color: Natural white/ivory Shed life: 24 months Style: Dried and Organic Lead time: 20 - 30 days </span></p>', 'upload/services/1680674547_Fish Scale2.jpg', 1, '2023-04-05 00:02:27', '2023-04-11 17:12:54', 1),
(96, 22, 53, 0, 'Fish Scale', 'upload/services/1762315047164125.jpg', 'Fish Scale', 'Fish Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:15px\">Dried Fish Scale, HS Code: 05119190 Production Capacity: 5 Forty-Foot Container Per Month Packaging: Bulk, Customized Color: Natural white/ivory Shed life: 24 months Style: Dried and Organic Lead time: 20 - 30 days </span></p>', 'upload/services/1680674598_Fish Scale3.jpg', 1, '2023-04-05 00:03:18', NULL, 0),
(97, 22, 53, 0, 'Fish Scale', 'upload/services/1762315100967064.jpg', 'Fish Scale', 'Fish Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:15px\">Dried Fish Scale, HS Code: 05119190 Production Capacity: 5 Forty-Foot Container Per Month Packaging: Bulk, Customized Color: Natural white/ivory Shed life: 24 months Style: Dried and Organic Lead time: 20 - 30 days </span></p>', 'upload/services/1680674649_Fish Scale4.jpg', 1, '2023-04-05 00:04:09', NULL, 0),
(98, 22, 53, 0, 'Fish Scale', 'upload/services/1762315144236756.jpg', 'Fish Scale', 'Fish Scale', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:15px\">Dried Fish Scale, HS Code: 05119190 Production Capacity: 5 Forty-Foot Container Per Month Packaging: Bulk, Customized Color: Natural white/ivory Shed life: 24 months Style: Dried and Organic Lead time: 20 - 30 days </span></p>', 'upload/services/1680674690_Fish Scale5.jpg', 1, '2023-04-05 00:04:50', NULL, 0),
(99, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315284713710.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674824_Dharosh.jpeg', 1, '2023-04-05 00:07:04', '2023-04-26 04:46:31', 3),
(100, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315331978713.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674869_Khajur Gur.jpeg', 1, '2023-04-05 00:07:49', '2023-04-16 09:05:13', 3),
(101, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315387342050.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674922_Khisha, Shim.jpeg', 1, '2023-04-05 00:08:42', '2023-04-16 05:03:40', 1),
(102, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315441613727.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680674974_Kochu mukhi.jpeg', 1, '2023-04-05 00:09:34', NULL, 0),
(103, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315496258548.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680675026_Kochur Chara.jpeg', 1, '2023-04-05 00:10:26', '2023-04-27 11:12:41', 2),
(104, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315549259935.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680675077_Kochur Lati.jpeg', 1, '2023-04-05 00:11:17', '2023-04-11 21:04:11', 1),
(105, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315604005768.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680675129_Korola.jpeg', 1, '2023-04-05 00:12:09', NULL, 0),
(106, 22, 54, 0, 'Fresh Vegetable', 'upload/services/1762315660615356.jpeg', 'Fresh Vegetable', 'Fresh Vegetable', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of fresh vegetable Supplier (Sea, River and Pond production) </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: UK, USA, Canada, Oman, UAE etc.</span></p>', 'upload/services/1680675183_Shim.jpeg', 1, '2023-04-05 00:13:03', '2023-04-16 05:03:49', 1),
(107, 22, 55, 0, 'Potato', 'upload/services/1762315781178179.jpg', 'Potato', 'Potato', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Potato ( Granola, Diamond, Red Sharp) Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Russaia, Oman, UAE, Malaysia etc.</span></p>', 'upload/services/1680675298_Container inside Picture.jpg', 1, '2023-04-05 00:14:58', '2023-04-09 10:24:23', 1),
(108, 22, 55, 0, 'Potato', 'upload/services/1762315836343619.jpg', 'Potato', 'Potato', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Potato ( Granola, Diamond, Red Sharp) Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Russaia, Oman, UAE, Malaysia etc.</span></p>', 'upload/services/1680675350_Container stuffing.jpg', 1, '2023-04-05 00:15:50', NULL, 0),
(109, 22, 54, 0, 'Potato', 'upload/services/1762315890026748.jpg', 'Potato', 'Potato', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Potato ( Granola, Diamond, Red Sharp) Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Russaia, Oman, UAE, Malaysia etc.</span></p>', 'upload/services/1680675401_Load Container.jpg', 1, '2023-04-05 00:16:41', NULL, 0),
(110, 22, 55, 0, 'Potato', 'upload/services/1762315942330771.jpg', 'Potato', 'Potato', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Potato ( Granola, Diamond, Red Sharp) Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Russaia, Oman, UAE, Malaysia etc.</span></p>', 'upload/services/1680675451_Loading complete container.jpg', 1, '2023-04-05 00:17:31', NULL, 0),
(111, 22, 55, 0, 'Potato', 'upload/services/1762315997531093.jpg', 'Potato', 'Potato', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Potato ( Granola, Diamond, Red Sharp) Supplier&nbsp;</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: Russaia, Oman, UAE, Malaysia etc.</span></p>', 'upload/services/1680675504_Stuffing complete container.jpg', 1, '2023-04-05 00:18:24', '2023-04-15 18:21:51', 1),
(112, 23, 56, 0, 'ABC Scrap', 'upload/services/1762316127772942.jpg', 'ABC Scrap', 'ABC Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All typer of Aluminium, Brass, Cupper scrap supplier.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680675628_Aluminium.jpg', 1, '2023-04-05 00:20:28', '2023-04-25 20:21:34', 6),
(114, 23, 56, 0, 'ABC Scrap', 'upload/services/1762316379347921.jpg', 'ABC Scrap', 'ABC Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All typer of Aluminium, Brass, Cupper scrap supplier.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680675868_Brass-2.jpg', 1, '2023-04-05 00:24:28', '2023-04-16 05:07:19', 1),
(115, 23, 56, 0, 'ABC Scrap', 'upload/services/1762316452169231.jpg', 'ABC Scrap', 'ABC Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All typer of Aluminium, Brass, Cupper scrap supplier.&nbsp;</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680675938_Copper-1.jpg', 1, '2023-04-05 00:25:38', '2023-04-09 06:36:31', 1),
(116, 23, 56, 0, 'ABC Scrap', 'upload/services/1762316505022726.jpg', 'ABC Scrap', 'ABC Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All typer of Aluminium, Brass, Cupper scrap supplier.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680675988_Copper-3.jpg', 1, '2023-04-05 00:26:28', NULL, 0),
(117, 23, 56, 0, 'ABC Scrap', 'upload/services/1762316556067604.jpg', 'ABC Scrap', 'ABC Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All typer of Aluminium, Brass, Cupper scrap supplier.</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680676037_Stainless Steel.jpg', 1, '2023-04-05 00:27:17', '2023-04-05 00:27:38', 0),
(118, 23, 57, 0, 'Cast Iron Scrap', 'upload/services/1762316703889093.jpg', 'Cast Iron Scrap', 'Cast Iron Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Cast Iron Scrap Supplier </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680676179_Cast Iron Scrap.jpg', 1, '2023-04-05 00:29:39', '2023-04-26 04:19:39', 2),
(119, 23, 57, 0, 'Cast Iron Scrap', 'upload/services/1762316757641525.jpg', 'Cast Iron Scrap', 'Cast Iron Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All type of Cast Iron Scrap Supplier </span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Buyers: India, Thailand and Malaysia</span></p>', 'upload/services/1680676230_Cast Iron Scrap1.jpg', 1, '2023-04-05 00:30:30', NULL, 0),
(120, 23, 58, 0, 'HMS Scrap', 'upload/services/1762316829025208.jpg', 'HMS Scrap', 'HMS Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of HMS scrap Importer and Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Importing from UK, USA, Poland, Brasil, Australia</span></p>', 'upload/services/1680676297_HMS.jpg', 1, '2023-04-05 00:31:37', '2023-04-16 06:00:12', 2),
(121, 23, 58, 0, 'HMS Scrap', 'upload/services/1762316885535042.jpg', 'HMS Scrap', 'HMS Scrap', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of HMS scrap Importer and Supplier</span> <span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">Importing from UK, USA, Poland, Brasil, Australia</span></p>', 'upload/services/1680676351_HMS1.jpg', 1, '2023-04-05 00:32:31', '2023-04-12 02:16:01', 1),
(122, 24, 59, 0, 'Kazi Auto Cars', 'upload/services/1762316970036789.jpeg', 'Kazi Auto Cars', 'Kazi Auto Cars', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of Japany reconditioned Car and Industrial Equipment Importer</span></p>', 'upload/services/1680676432_Harier 2021.jpeg', 1, '2023-04-05 00:33:52', '2023-04-26 09:15:16', 1),
(123, 24, 59, 0, 'Kazi Auto Cars', 'upload/services/1762317072205029.jpeg', 'Kazi Auto Cars', 'Kazi Auto Cars', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of Japany reconditioned Car and Industrial Equipment Importer</span></p>', 'upload/services/1680676529_Prado 2022.jpeg', 1, '2023-04-05 00:35:29', '2023-04-27 09:38:11', 2),
(124, 24, 59, 0, 'Kazi Auto Cars', 'upload/services/1762317107809725.jpeg', 'Kazi Auto Cars', 'Kazi Auto Cars', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of Japany reconditioned Car and Industrial Equipment Importer</span></p>', 'upload/services/1680676563_Premio 2021.jpeg', 1, '2023-04-05 00:36:03', NULL, 0),
(125, 24, 59, 0, 'Kazi Auto Cars', 'upload/services/1762317157964780.jpeg', 'Kazi Auto Cars', 'Kazi Auto Cars', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of Japany reconditioned Car and Industrial Equipment Importer</span></p>', 'upload/services/1680676611_X-Trail 2022.jpeg', 1, '2023-04-05 00:36:51', '2023-04-26 04:14:48', 2),
(126, 24, 59, 0, 'Kazi Auto Cars', 'upload/services/1762317191489565.jpeg', 'Kazi Auto Cars', 'Kazi Auto Cars', '<p><span style=\"color:#000000; font-family:\'docs-Calibri\'; font-size:13px\">All Type of Japany reconditioned Car and Industrial Equipment Importer</span></p>', 'upload/services/1680676643_X-Trail 2022a.jpeg', 1, '2023-04-05 00:37:23', '2023-04-15 18:20:40', 2),
(127, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218230403423.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681535941_KAZI FASHION HOUSE (RMG) STOCK LOT. .jpg', 1, '2023-04-14 23:19:01', '2023-04-27 05:01:21', 2),
(128, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218305949056.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536012_RMG 2.jpg', 1, '2023-04-14 23:20:12', '2023-04-16 05:25:16', 1),
(129, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218344881549.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536050_RMG.jpg', 1, '2023-04-14 23:20:50', '2023-04-16 05:42:13', 2),
(130, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218383017544.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536086_RMG3.jpg', 1, '2023-04-14 23:21:26', NULL, 0),
(131, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218736135498.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536423_RMG4.jpg', 1, '2023-04-14 23:27:03', NULL, 0),
(132, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218766033701.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536451_RMG5.jpg', 1, '2023-04-14 23:27:31', '2023-04-18 18:16:37', 2),
(133, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218797636525.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536481_RMG6.jpg', 1, '2023-04-14 23:28:01', '2023-04-26 16:16:45', 3),
(134, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218838742953.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536521_RMG7.jpg', 1, '2023-04-14 23:28:41', NULL, 0),
(135, 25, NULL, 0, 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'upload/services/1763218868990445.jpg', 'KAZI FASHION HOUSE (RMG) STOCK LOT', 'KAZI FASHION HOUSE (RMG) STOCK LOT', '<p>KAZI FASHION HOUSE (RMG) STOCK LOT</p>', 'upload/services/1681536549_RMG8.jpg', 1, '2023-04-14 23:29:09', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook`, `instagram`, `pinterest`, `googleplus`, `linkedin`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1763259384124211.png', '+8802333312689', 'info@intertradebd.com', 'AL-MODINA TOWER, 8TH FLOOR-D 88/89 AGRABAD C/A, CHATTOGRAM, BANGLADESH.', 'https://www.facebook.com/inter.trade.and.logistics.2023?mibextid=ZbWKwL', 'instagram', 'pinterest', 'google-plus', 'https://www.linkedin.com/in/inter-trade-and-logistics-782131244/', 'twitter', NULL, '2023-04-15 16:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_link` varchar(255) NOT NULL,
  `slide_photo` varchar(255) NOT NULL,
  `slide_description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_title`, `slide_link`, `slide_photo`, `slide_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Steel Mill’s Waste', 'https://intertradebd.com/frontend/category/12', 'upload/slide/1763259014030744.jpg', '<p>&nbsp;Steel Mill&rsquo;s Waste</p>', 1, '2023-04-15 16:07:15', '2023-04-15 16:07:15'),
(2, 'STEEL SCRAP', 'https://intertradebd.com/frontend/category/23', 'upload/slide/1763258974065894.jpg', '<p>Steel Scrap</p>', 1, '2023-04-15 16:06:37', '2023-04-15 16:06:37'),
(3, 'ABID AGRO', 'https://intertradebd.com/frontend/category/22', 'upload/slide/1763258913311927.jpg', '<p>ABID AGRO</p>', 1, '2023-04-15 16:05:39', '2023-04-15 16:05:39'),
(4, 'INFINITE SHIPPING & LOGISTICS', 'https://intertradebd.com/frontend/category/21', 'upload/slide/1763258761651463.jpg', '<p>&nbsp;INFINITE SHIPPING &amp; LOGISTICS</p>', 1, '2023-04-15 16:03:14', '2023-04-15 16:03:14'),
(5, 'KAZI AUTO CARS', 'https://intertradebd.com/frontend/category/24', 'upload/slide/1763258815713061.jpg', '<p>KAZI AUTO CARS</p>', 1, '2023-04-15 16:04:06', '2023-04-15 16:04:06'),
(6, 'KAZI FASHION HOUSE (RMG) STOCK LOT.', 'https://intertradebd.com/frontend/category/25', 'upload/slide/1763258864038405.jpg', '<p><span dir=\"ltr\" style=\"font-family:sans-serif; font-size:calc(var(--scale-factor)*11.00px)\">KAZI FASHION HOUSE (RMG) STOCK LOT</span></p>', 1, '2023-04-15 16:04:52', '2023-04-15 16:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(48, 12, 'Zinc Ash (Induction Furnace Dust)', 'zinc-ash-(induction-furnace-dust)', '2023-04-04 02:18:23', NULL),
(49, 12, 'EAFD (Electric Arc Furnace Dust)', 'eafd-(electric-arc-furnace-dust)', '2023-04-04 02:18:52', NULL),
(50, 12, 'Mill Scale', 'mill-scale', '2023-04-04 02:19:12', NULL),
(51, 12, 'Iron Red Oxide', 'iron-red-oxide', '2023-04-04 02:19:32', NULL),
(52, 22, 'Fish', 'fish', '2023-04-04 02:23:21', NULL),
(53, 22, 'Fish Scale', 'fish-scale', '2023-04-04 02:24:32', NULL),
(54, 22, 'Fresh Vegetable', 'fresh-vegetable', '2023-04-04 02:24:54', NULL),
(55, 22, 'Potato', 'potato', '2023-04-04 02:25:48', NULL),
(56, 23, 'ABC Scrap', 'abc-scrap', '2023-04-04 02:26:44', NULL),
(57, 23, 'Cast Iron Scrap', 'cast-iron-scrap', '2023-04-04 02:27:02', NULL),
(58, 23, 'HMS Scrap', 'hms-scrap', '2023-04-04 02:27:19', NULL),
(59, 24, 'Kazi Auto Cars', 'kazi-auto-cars', '2023-04-04 02:28:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_title` varchar(255) NOT NULL,
  `t_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_title`, `t_description`, `created_at`, `updated_at`) VALUES
(2, 'intertradebd  Terms admin panel', '<p>intertradebd &nbsp;Terms tes admin panel</p>', '2023-04-12 01:52:41', '2023-04-12 01:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shahin reza', 'user@gmail.com', NULL, '$2y$10$Gd7l5q5MNH.98RYsxV5XX.YKCnETn4AeD3//nrnbXvMw6t9U6vKZe', NULL, '2022-06-05 13:32:41', '2022-06-05 13:32:41');

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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
