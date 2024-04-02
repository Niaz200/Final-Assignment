-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 07:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newjobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applieds`
--

CREATE TABLE `applieds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(200) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `compa_name` varchar(200) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `emplo_id` varchar(255) NOT NULL,
  `jobspost_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applieds`
--

INSERT INTO `applieds` (`id`, `job_title`, `job_type`, `location`, `compa_name`, `status`, `emplo_id`, `jobspost_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Web developer', 'Full Time', 'Dhanmondi,Dhaka', 'Star Paradise Ltd', 'Approved', '3', 1, 1, '2024-03-28 03:30:33', '2024-03-29 08:48:10'),
(2, 'Web', 'Junior', 'Dhanmondi,Dhaka2', 'te', 'Pending', '2', 2, 4, '2024-03-28 03:40:34', '2024-03-28 03:40:34'),
(3, 'Web developer', 'Full Time', 'Dhanmondi,Dhaka', 'Star Paradise Ltd', 'Approved', '3', 1, 4, '2024-03-28 03:41:03', '2024-03-28 04:38:28'),
(4, 'Web', 'Junior', 'Dhanmondi,Dhaka2', 'te', 'Pending', '2', 2, 1, '2024-03-29 07:48:51', '2024-03-29 07:48:51'),
(5, 'DSM', 'Part Time', 'Dhanmondi,Dhaka', 'Fair electronics', 'Approved', '3', 6, 1, '2024-03-29 12:17:24', '2024-04-02 11:08:15'),
(6, 'HR Manager', 'Full Time', 'Dhanmondi,Dhaka', 'walton ltd', 'Pending', '5', 7, 4, '2024-04-02 10:53:18', '2024-04-02 10:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Get Credit Card from jobstock Agency', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.', 'post_image_d274d2181e923143e83b6c3d95d866781711978192.jpg', 2, '2024-04-01 07:28:57', '2024-04-01 07:29:52'),
(2, 'Want To Work with jobstock Agency?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.', 'post_image_b533a946c2f6b136cde009d2398838fd1711978228.jpg', 2, '2024-04-01 07:30:28', '2024-04-01 07:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web & Application', '2024-03-24 12:31:27', '2024-03-24 12:31:27'),
(2, 'Accounting & Finance', '2024-03-24 12:31:59', '2024-03-24 12:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `title`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(2, 'niaz', 'abc@gmail.com', 'text', '01977207200', 'perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.', '2024-04-01 12:56:09', '2024-04-01 12:56:09'),
(3, 'niaz', 'admin@gmail.com', 'test', '01765476455', 'ru64ru4eweewdf', '2024-04-02 10:59:40', '2024-04-02 10:59:40');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'For Candidate', '2024-03-24 12:29:55', '2024-03-24 12:29:55'),
(2, 'For Employer', '2024-03-24 12:30:02', '2024-03-24 12:30:02'),
(3, 'Pages', '2024-03-24 12:30:09', '2024-03-24 12:30:09');

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
(5, '2024_03_14_105516_create_roles_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 2),
(57, '2024_03_14_153302_create_menus_table', 2),
(58, '2024_03_14_154820_create_submenus_table', 2),
(59, '2024_03_14_155648_create_categories_table', 2),
(60, '2024_03_14_160137_create_postjobs_table', 2),
(61, '2024_03_14_160806_create_profiles_table', 2),
(63, '2024_03_17_172823_create_applications_table', 2),
(64, '2024_03_21_071324_create_applieds_table', 2),
(65, '2024_03_22_105938_create_shortlists_table', 2),
(68, '2024_03_14_162148_create_blogs_table', 3),
(70, '2024_04_01_172547_create_contacts_table', 4);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$lzxT/YysT1iopNhNUcoxzOnJ6.V1ziIlybUeCzDnen.rqsR2X5I8S', '2024-04-01 04:52:41');

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
-- Table structure for table `postjobs`
--

CREATE TABLE `postjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `job_des` longtext DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `job_level` varchar(100) DEFAULT NULL,
  `experience` varchar(150) DEFAULT NULL,
  `qualification` varchar(150) DEFAULT NULL,
  `gender` varchar(150) DEFAULT NULL,
  `min_salary` int(11) DEFAULT NULL,
  `max_salary` int(11) DEFAULT NULL,
  `job_exp_date` date NOT NULL,
  `job_fee_type` varchar(100) DEFAULT NULL,
  `requiremment` longtext DEFAULT NULL,
  `responsibilities` longtext DEFAULT NULL,
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skills`)),
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `location` varchar(400) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cats_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postjobs`
--

INSERT INTO `postjobs` (`id`, `job_title`, `company_name`, `status`, `job_des`, `job_type`, `job_level`, `experience`, `qualification`, `gender`, `min_salary`, `max_salary`, `job_exp_date`, `job_fee_type`, `requiremment`, `responsibilities`, `skills`, `website`, `address`, `city`, `country`, `state`, `postcode`, `location`, `user_id`, `cats_id`, `created_at`, `updated_at`) VALUES
(1, 'Web developer', 'Star Paradise Ltd', 'approved', 'frgswergwsf123', 'Full Time', 'Manager', '3+ Years', 'Master Degree', 'male', 40000, 60000, '2024-03-29', 'Normal', '\"ertgwetg\\r\\nrtgwsry\\r\\nretger\"', '\"fdffhjt\\r\\ndrfghr\\r\\ntyhrtki\"', '[\"PHP,Laravel\"]', 'www.abc1.com', 'dhanmondi', NULL, 'Bangladesh', 'Dhaka', 1209, 'Dhanmondi,Dhaka', 3, 1, '2024-03-24 12:40:52', '2024-03-29 13:50:58'),
(2, 'Web', 'te', 'approved', 'fhxs', 'Junior', 'junior', '1+ Years', '12th Class', 'female', 10000, 20000, '2024-03-30', 'Normal', '\"ghxfdh\\r\\nxdgz\"', '\"swrfaw\\r\\ntgutfr\\r\\nfrhd\"', '[\"PHP,Laravel\"]', 'https://www.rydoduhoqypos.co', 'dhanmondi2', NULL, 'Bangladesh', 'Dhaka2', 12092, 'Dhanmondi,Dhaka2', 2, 2, '2024-03-25 01:19:36', '2024-03-25 01:21:27'),
(6, 'DSM', 'Star Paradise Ltd', 'approved', 'fhrtjyntf', 'Part Time', 'Manager', '5+ Years', 'Master Degree', 'male', 40000, 60000, '2024-04-05', 'Normal', '\"hgjf\\r\\nuyitg\"', '\"drfyedr\\r\\ndy\\r\\ngujt\"', '[\"PHP,Laravel\"]', 'www.abc.com', 'dhanmondi2', NULL, 'Bangladesh2', 'Dhaka', 1209, 'Dhanmondi,Dhaka', 3, 2, '2024-03-29 12:16:02', '2024-03-30 20:43:25'),
(7, 'HR Manager', 'walton ltd', 'approved', 'htttsgrhswws', 'Full Time', 'Manager', '5+ Years', 'Master Degree', 'male', 25000, 55000, '2024-04-06', 'Normal', '\"fhdg\\r\\nhdhu\\r\\ntgtu\"', '\"tgjf\\r\\nhttu\"', '[\"PHP,Laravel ,Java\"]', 'www.abc.com', 'dhanmondi2', NULL, 'Bangladesh', 'Dhaka', 1209, 'Dhanmondi,Dhaka', 5, 2, '2024-03-30 04:59:50', '2024-03-30 20:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `work_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`work_type`)),
  `website` varchar(50) DEFAULT NULL,
  `Total_experience` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `language` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`language`)),
  `education` varchar(400) DEFAULT NULL,
  `info` longtext DEFAULT NULL,
  `skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skills`)),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cats_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `full_name`, `mobile`, `age`, `gender`, `job_title`, `work_type`, `website`, `Total_experience`, `birthday`, `address`, `city`, `state`, `country`, `postcode`, `language`, `education`, `info`, `skills`, `user_id`, `cats_id`, `created_at`, `updated_at`) VALUES
(1, 'saiful islam', '01734939307', 35, 'Male', 'Software Engineer', '[\"Full time,Remote,Part Time\"]', 'www.abc.com', '3 years', '2024-03-13', 'Uttora', 'Dhaka', NULL, 'Bangladesh', 1205, '[\"English,Bangla,Hindi\"]', 'ECE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '[\"HTML,CSS,Bootstrap\"]', 2, 2, '2024-03-24 12:32:19', '2024-04-02 10:43:31'),
(2, 'Star paradise ltd', '01734939307', 25, 'Male', 'Software Engineer', '[\"Full time,Part Time\"]', 'https://www.sizyvyhyhivex.org.uk', '2 years', '2018-01-31', 'dhanmondi', 'Dhaka', NULL, 'Bangladesh', 12092, '[\"English,Bangla,Hindi\"]', 'CSE', 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available', '[\"PHP,Laravel\"]', 3, 2, '2024-03-29 03:55:43', '2024-04-02 11:01:22'),
(3, 'user1', '01734939307', 25, 'Male', 'Software Engineer', '[\"Full time,Part Time\"]', 'www.abc.com', '4 years', '2024-03-04', 'dhanmondi2', 'Dhaka', NULL, 'Dolore dolore qui si', 1209, '[\"English,Bangla,Hindi\"]', 'ECE', 'gfjhrftjdrs', '[\"HTML,CSS,Bootstrap\"]', 1, 1, '2024-03-29 07:31:21', '2024-03-29 11:02:42'),
(5, 'walton ltd', '01977207200', 25, 'Male', 'Web developer', '[\"Full time,Part Time\"]', 'https://www.sizyvyhyhivex.org.uk', '3 years', '2021-01-31', 'banani', 'Dhaka', NULL, 'Bangladesh', 1210, '[\"English,Bangla,Hindi\"]', 'MBA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '[null]', 5, 2, '2024-03-30 13:23:38', '2024-04-02 10:34:23'),
(6, 'asik', '01734939308', 30, 'Male', 'Web', '[\"Full time,Remote,Part Time\"]', 'https://www.rydoduhoqypos.co', '4 years', '2024-04-03', 'Gulsan', 'Dhaka', NULL, 'Bangladesh', 1209, '[\"English,Bangla,Hindi\"]', 'ECE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '[null]', 4, 2, '2024-04-02 10:37:47', '2024-04-02 10:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Employer', NULL, NULL),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shortlists`
--

CREATE TABLE `shortlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `job_title` varchar(200) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `compa_name` varchar(200) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `jobspost_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'All Jobs', 'user/alljob', '2024-03-24 12:30:33', '2024-03-24 12:30:33'),
(2, 1, 'All Category Jobs', 'user/allcategory', '2024-03-24 12:30:46', '2024-03-24 12:30:46'),
(3, 2, 'All Employer', 'user/allemployer', '2024-03-30 11:14:37', '2024-03-30 11:14:37'),
(4, 3, 'All Blogs', 'user/allblog', '2024-04-01 06:59:22', '2024-04-01 06:59:22'),
(5, 3, 'Contact us', 'user/contact', '2024-04-01 07:18:14', '2024-04-01 07:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
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

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user vai', 3, 'user@gmail.com', NULL, '$2y$12$O0HAVDgk46GgvXnIuwqv7OTPP9Ox5jitMBKy/n77mflh3P93NlFCm', 'VU3VOwFF9Wy4qbEUs8JFqAx9eqGXWkkWXURyaSYnlrHnR1uTZdyEllDuOKou', '2024-03-14 07:47:58', '2024-04-01 05:39:28'),
(2, 'admin vai', 1, 'admin@gmail.com', NULL, '$2y$12$E84lG2owt9kNoawP/InzauFlTdzDTwqWphgd.eG5ZxKmBy87WiyR2', NULL, '2024-03-14 08:00:08', '2024-03-14 08:00:08'),
(3, 'Employer vai', 2, 'employer@gmail.com', NULL, '$2y$12$193wGxmB1tQ5r6ixkYjQjejx6pQmM62yRKtjTidS5ptVViy7lVM5u', NULL, '2024-03-14 08:33:22', '2024-03-14 08:33:22'),
(4, 'user2', 3, 'user2@gmail.com', NULL, '$2y$12$ay9o4meKU16qzV6qidDu5.1nNmYcpqNlwYwCrB5cTHeVod1xs06Gy', NULL, '2024-03-22 10:24:01', '2024-03-22 10:24:01'),
(5, 'Employer2', 2, 'employer2@gmail.com', NULL, '$2y$12$veYnhzI.a0vQ5Z8r4AXqtuvtpquKPI9Eze4lkuBl5R.nkjpvF.rYO', NULL, '2024-03-22 10:25:49', '2024-03-22 10:25:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applieds`
--
ALTER TABLE `applieds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applieds_jobspost_id_foreign` (`jobspost_id`),
  ADD KEY `applieds_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postjobs`
--
ALTER TABLE `postjobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postjobs_user_id_foreign` (`user_id`),
  ADD KEY `postjobs_cats_id_foreign` (`cats_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_user_id_unique` (`user_id`),
  ADD KEY `profiles_cats_id_foreign` (`cats_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortlists`
--
ALTER TABLE `shortlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shortlists_jobspost_id_foreign` (`jobspost_id`),
  ADD KEY `shortlists_user_id_foreign` (`user_id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_menu_id_foreign` (`menu_id`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applieds`
--
ALTER TABLE `applieds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postjobs`
--
ALTER TABLE `postjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shortlists`
--
ALTER TABLE `shortlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applieds`
--
ALTER TABLE `applieds`
  ADD CONSTRAINT `applieds_jobspost_id_foreign` FOREIGN KEY (`jobspost_id`) REFERENCES `postjobs` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `applieds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `postjobs`
--
ALTER TABLE `postjobs`
  ADD CONSTRAINT `postjobs_cats_id_foreign` FOREIGN KEY (`cats_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postjobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_cats_id_foreign` FOREIGN KEY (`cats_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `shortlists`
--
ALTER TABLE `shortlists`
  ADD CONSTRAINT `shortlists_jobspost_id_foreign` FOREIGN KEY (`jobspost_id`) REFERENCES `postjobs` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shortlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
