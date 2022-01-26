-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 05:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'coderspoint2020@gmail.com', NULL, '$2y$10$xsuTLWtTUjhNVz1NQ4Q0uOLbZW490WRHdRhGYhssOqP2u2nCcG/E6', NULL, NULL, '202201100957Untitled-w2s32.png', NULL, '2022-01-10 03:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `future_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `future_img`, `title`, `meta_tag`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, 'backend/upload/post_image/1722287566745751.jpeg', 'ghfybhjlhbjlhujlf6t7yuiogy', '[{\"value\":\"xfbnc\"},{\"value\":\"tuoy\"},{\"value\":\"hljh\"},{\"value\":\"njiop\"}]', 'iterwetyweteyhtewy', 1, '2022-01-18 01:07:02', '2022-01-18 04:59:19'),
(8, 'backend/upload/post_image/1722284884705026.jpg', 'fghfrghn', '[{\"value\":\"dfhdxh\"}]', 'dh', 1, '2022-01-18 03:41:00', '2022-01-18 03:41:07'),
(9, 'backend/upload/post_image/1722289970975670.png', 'Creating Interactive', '[{\"value\":\"codepan\"},{\"value\":\"html\"},{\"value\":\"css\"},{\"value\":\"js\"}]', 'y89gy678678t678r5675r7r547546', 1, '2022-01-18 05:01:12', '2022-01-18 05:01:50'),
(10, 'backend/upload/post_image/1722289998861248.jpeg', 'drtrdtyh', '[{\"value\":\"drtudrtu\"}]', 'drtudrtu', 1, '2022-01-18 05:02:17', '2022-01-18 05:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_logo`, `client_title`, `status`, `created_at`, `updated_at`) VALUES
(2, 'backend/upload/client/1722107209814172.jpeg', 'color', 0, '2022-01-16 04:36:56', '2022-01-18 00:56:52'),
(3, 'backend/upload/client/1722107320076182.png', 'bns', 1, '2022-01-16 04:38:41', '2022-01-16 04:38:45'),
(4, 'backend/upload/client/1722107359739912.png', 'coolor', 0, '2022-01-16 04:39:19', '2022-01-18 00:56:35'),
(5, 'backend/upload/client/1722107375783967.jpg', 'color', 0, '2022-01-16 04:39:37', '2022-01-18 01:13:09'),
(6, 'backend/upload/client/1722108862526737.png', 'vvhnmvh', 1, '2022-01-16 05:03:12', '2022-01-16 05:03:16'),
(7, 'backend/upload/client/1722271942704486.jpg', 'rtjdrt', 0, '2022-01-18 00:15:20', '2022-01-18 01:13:12'),
(8, 'backend/upload/client/1722481222784732.jpg', 'efhst', 1, '2022-01-20 07:41:42', '2022-01-20 07:41:47'),
(9, 'backend/upload/client/1722739867001960.png', 'dfs', NULL, '2022-01-23 04:12:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_contacts`
--

CREATE TABLE `customer_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(30) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_contacts`
--

INSERT INTO `customer_contacts` (`id`, `full_name`, `email`, `phone_number`, `address`, `message`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Test', 'admin@gmail.com', '01836849437', 'Hillview', 'Hi there', 0, '2021-11-17 00:23:49', '2021-11-17 00:24:47'),
(8, 'Test', 'kamrul@echem.com.bd', '01836849437', 'Test', 'no Problem!!!!!', 0, '2021-11-17 00:24:24', '2021-11-17 00:25:17'),
(9, 'Test 5', 'moniuddin045@gmail.com', '01836849437', 'Hillview', 'Hi there', 0, '2021-11-18 05:59:47', '2021-12-20 02:35:21'),
(10, 'Jamesvesia', 'no-replyBivepreerm@gmail.com', '87825653622', 'https://www.no-site.com', 'Good day!  aliftechinternational.com \r\n \r\nWe advance \r\n \r\nSending your message through the feedback form which can be found on the sites in the contact partition. Feedback forms are filled in by our application and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This method improve the probability that your message will be read. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', 0, '2021-12-07 07:16:29', '2021-12-20 02:33:31'),
(11, 'Donald Cole', 'lanj7962@gmail.com', '83944845323', 'https://www.no-site.com', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email coledd11@cloedcolela.com if you\'re still interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', 0, '2021-12-12 21:41:51', '2021-12-20 02:32:57'),
(12, 'Charmain Wynkoop', 'charmain.wynkoop81@gmail.com', '081 280 91 52', 'Via Verbano 119', 'You can submit your site to over 30 different business directories for free with one click https://bit.ly/addyoursitehere', 0, '2021-12-19 07:27:01', '2021-12-20 02:34:02'),
(13, 'Adnun Bin Abdullah Chowdhury', 'adnuncse@gmail.com', 'trui', 'Chittagong, Bangladesh', 'trirti', 0, '2022-01-18 06:15:53', '2022-01-18 07:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 1),
(8, '2021_11_04_082634_create_categories_table', 2),
(9, '2021_11_06_060645_create_subcategories_table', 2),
(10, '2021_11_06_094519_create_subsubcategories_table', 2),
(11, '2021_11_07_051307_create_products_table', 2),
(12, '2021_11_07_083553_create_product_multi_images_table', 2),
(13, '2021_11_09_053339_create_sitesettings_table', 2),
(14, '2021_11_09_085505_create_siteseos_table', 2),
(15, '2021_11_15_060627_create_site_banners_table', 3),
(16, '2021_11_15_075249_create_customer_contacts_table', 4),
(17, '2021_11_20_045917_create_projectdetails_table', 5),
(18, '2022_01_16_051604_add_address_to_sitesettings_table', 6),
(19, '2022_01_16_092044_create_clients_table', 7),
(20, '2022_01_17_072243_create_blogs_table', 8),
(21, '2022_01_23_060636_create_portfolios_table', 9),
(22, '2022_01_23_062742_create_portfolio_categories_table', 10),
(23, '2022_01_23_093900_create_portfolios_table', 11),
(24, '2022_01_25_101809_create_video_gellaries_table', 12);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_id`, `portfolio_image`, `title`, `web_link`, `created_at`, `updated_at`) VALUES
(2, 2, 'backend/upload/portfolio/1722740449329757.png', 'ftgujft', 'http://127.0.0.1:8000/frontend/portfolio', '2022-01-23 04:22:01', NULL),
(3, 2, 'backend/upload/portfolio/1722741254568952.png', 'uj', 'http://127.0.0.1:8000/frontend/portfolio', '2022-01-23 04:34:49', NULL),
(4, 4, 'backend/upload/portfolio/1722741273971155.png', 'ubyh', 'http://127.0.0.1:8000/frontend/portfolio', '2022-01-23 04:35:07', NULL),
(5, 2, 'backend/upload/portfolio/1722903111886741.png', 'ghkdty', 'http://127.0.0.1:8000/frontend/portfolio', '2022-01-24 23:27:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `portfolio_category`, `created_at`, `updated_at`) VALUES
(2, 'web', NULL, NULL),
(4, 'Android', NULL, NULL),
(5, 'Software development', NULL, NULL),
(6, 'video', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_multi_images`
--

CREATE TABLE `product_multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE `projectdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_to_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_pages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectdetails`
--

INSERT INTO `projectdetails` (`id`, `full_name`, `email`, `phone`, `company_name`, `website`, `address`, `project_budget`, `date_to_start`, `project_type`, `service_type`, `country`, `no_of_pages`, `reference_site`, `hosting`, `domain`, `content`, `logo`, `project_details`, `created_at`, `updated_at`) VALUES
(1, 'Hasan Abdullah', 'admin@gmail.com', '01836849437', 'IT Company', 'facebook.com', 'Hillview', 'Tk20000-Tk50000', 'Within 2 weeks', 'Event Management ERP', 'Banking & FinTech Solution', 'Bangladesh', '10 - 15', 'twittwer', 'Yes', 'No', 'Yes', 'Yes', 'I need everything', '2021-11-19 23:41:02', NULL),
(2, 'snuihgusg sjgpjsgshg', 'snuihgusg@gmail.com', '01525644884561', 'alif', 'alifatech', 'dhaka', 'Less Than Tk20000', 'Within 3 weeks', 'Garments Management ERP', 'ERP Solution', 'Bangladesh', '1 - 5', 'http://www.aliftechinternational.com', 'Yes', 'Yes', 'Yes', 'Yes', 'nahfhaot jafoihsgpowkgtw pastgjsgiseiogj9as90 g paktpjwt9phjwegjpsejf 0it[0jkpogjophjgioha', '2021-12-02 04:57:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0UZ1IKvZsiVGydljRcAFUiHUSKD3BKkU4K9LHEpL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzBlbHE5MFozVkY3SWIyeUVEUzBRck5YZUxJRm9yWHZ5UGhYSWlKdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112556),
('At1QTCkjGBEWUwRQxOzJSoRnSjy3lrXnB9pkFwdN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkJnRWVQcGcxNEFpTG5ZSVcxbWJsSHA0VVh5dVoxenZqcVJNekVFUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112450),
('b73mxOx5hgMUgCuWH55BndfWbHiE2XxOzEEw4kwf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWxFRzBhVjFLTGNwNXJHaUZ5S0M3ZzFzdUxTcERFU3hKRkxBQURkTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112506),
('dWyJN3fkEnNqzJqB75JORbWKFCSi5uOZY6rCtZid', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmNvdkhrcm53bUU0dlRwRkIya1pENTluSUU2eFRHbUVMS3BhTUFWbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643118425),
('g6bwzv5FzqqT5ha2Unq7jeahfhW7eL8hJAwAC5B3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:96.0) Gecko/20100101 Firefox/96.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjJaMnVrYVZBcWcwbXUxUEdCcm12a0dIRDVRd0wyNFhPYldzTFJsQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mcm9udGVuZC92aWRlb19nZWxsYXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1643118540),
('j2xm4laIMhAkDFzTQwH60JDSA6VlNqYXtKVpWzWK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUZMRXNDajlrSVFRMnpMZWJUUTRqSXFFQTFITzV2dTlMYUpqQnlmdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112538),
('lpDI5GBwt7PJxrny4x40uuMDrEnsI2KMQFUgpYby', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUlZUHFBQWhpRWxrZDhvajBnamN2emdjQjhpSkFwUkZEWUNhNEI3ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112439),
('LVsmjYkn476lzlf3LSmDi34q38otbogqu0zm7gur', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM29UVFdCelM2d3FaMU83U3RYbHNHZzRsNnUwVnRaRXZ5dkJWcXVYSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112431),
('Mfq5c91W5sB1oBwrQhuCWgQpO2c8OAShT9vCDqAQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGhZRlNKVmZMcEs1Y013Z2I2WXJ0dzlWMHpsaXc1TVhsTkx2bnZXTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112616),
('SG8wZchJx0kkuGnqHgDQYlOE8vhgH8mLbN3NyuZ3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFVpSU12TXFEUGlOdFd4ejdNQmVmOFJURmJkeW55ZVFRcHRqaUZGTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112611),
('u1g9vQh3Hpra5s6XOrn7Uv5EQb13ssLEE0E2LxXa', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUVLR3Q1UnB6NFpFdmNRZ2xwRExyTXd6TmQwYXFMdW5IUFN0V2RqbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112515),
('uLZmTua557Y7L8v8jRLwDWO6gq7xMzxCjxrZypzv', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY21Sb21nM2Z3NDU0b2Z6YnhRNXlNSUhrNDJ5eW83a282N0hkQzVMbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112510),
('WcPpdNSLLr9BZmjgmv9BklfYfpuSRkso4Qwym5Hy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUFSUm91RVJWbHlscTlNWGdmQnJhU3BQV1c3Y0JFa29uZGxRcE1xeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112464),
('WTq9bJxYPX4T65IoFqziLKuZ2gDJam1y7Ay1mVkK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzRVQ05vVjZtYldFWG56WUZqVHVwU1ByVkQyWnEySkhWR2FPNmRXRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112457),
('xqzkzxl40VIDeR2yV5GKv1JKJYqi9BIdUEedoXYU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEtGWkxVMmZpNmpkaGZWc0RudWkwVkZaNjdWT0lPNHhoT01UYmVUVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112453),
('yklUiTcJVQQJT0XhoBPfVyJSAP5PmQNFHeQ5VaAA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ09nSU1JbkFLNHhBekttdjdOcmdwS2t1WU5zeDZYTXdwVjZ1RUQ0VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112469),
('Z7ybT8HipN7qEpWDaD779JpfrHduREeQHy7NijUN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOE16U2w2QnhzSm9jUzhDZTZDMk1ycUdHTHRNYmtOQUU0eW1SQ1JFTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6MjAwL2Zyb250ZW5kL3BvcnRmb2xpbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1643119536),
('Zzg2607raHk1cAxQ0NFVPEfaNTGPKuXe3Wj2MeQi', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekJWQ2VKYlNKUDJzUnd1cG5YNTBEMGtpZ3FQWjhIQW4ySTdMQ1FDdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1643112460);

-- --------------------------------------------------------

--
-- Table structure for table `siteseos`
--

CREATE TABLE `siteseos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteseos`
--

INSERT INTO `siteseos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Coders Point', 'Coders Point', 'website, Animation, Graphics.', 'Coders Point is a software based company where we create software for different companies and agencies. if you are looking for a software for your business, This is the correct place to share your thoughts.', NULL, '2022-01-10 03:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_titile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `logo`, `site_titile`, `site_description`, `email`, `address`, `city`, `telephone`, `facebook_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, 'backend/upload/logo/1721560466567846.png', 'Coders Point', 'Your Web Solution.', 'info@coderspoint.dev', '1st (Floor), Hakim Centre', '4212- Bahaddarhat, Chattogram', '01752742031', 'https://facebook.com/codpont', 'https://youtube.com', 'https://twitter.com', 'https://linkedin.com', NULL, '2022-01-15 23:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_banners`
--

CREATE TABLE `site_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_banners`
--

INSERT INTO `site_banners` (`id`, `banner_image`, `banner_title`, `status`, `created_at`, `updated_at`) VALUES
(9, 'backend/upload/banner/1716653902032511.jpg', 'Restaurant Management', 1, '2021-11-16 23:58:56', '2022-01-10 03:59:50'),
(10, 'backend/upload/banner/1716653924237170.jpg', 'Wordpress Website', 1, '2021-11-16 23:59:17', '2022-01-10 03:59:56'),
(11, 'backend/upload/banner/1716654199224199.jpg', 'E-commerce Management', 1, '2021-11-17 00:03:40', '2022-01-15 06:32:00'),
(12, 'backend/upload/banner/1722112137128130.png', 'Delivery', 1, '2022-01-16 05:55:15', NULL),
(13, 'backend/upload/banner/1722481047529303.jpg', 'dfgherh', 1, '2022-01-20 07:38:58', NULL),
(14, 'backend/upload/banner/1722481206274602.png', '4tyhet', 1, '2022-01-20 07:41:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subsubcategories`
--

CREATE TABLE `subsubcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_gellaries`
--

CREATE TABLE `video_gellaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vedio_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_gellaries`
--

INSERT INTO `video_gellaries` (`id`, `vedio_link`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/embed/S-yxeerfqFo', NULL, NULL),
(3, 'https://www.youtube.com/embed/oyFFq0yMZJU', NULL, NULL);

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_multi_images`
--
ALTER TABLE `product_multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectdetails`
--
ALTER TABLE `projectdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siteseos`
--
ALTER TABLE `siteseos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_banners`
--
ALTER TABLE `site_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_gellaries`
--
ALTER TABLE `video_gellaries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_multi_images`
--
ALTER TABLE `product_multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectdetails`
--
ALTER TABLE `projectdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siteseos`
--
ALTER TABLE `siteseos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_banners`
--
ALTER TABLE `site_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subsubcategories`
--
ALTER TABLE `subsubcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_gellaries`
--
ALTER TABLE `video_gellaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
