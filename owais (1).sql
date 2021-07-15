-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 08:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owais`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `user_detail_id` int(11) NOT NULL,
  `license_image` varchar(255) DEFAULT NULL,
  `cnic_image` varchar(255) DEFAULT NULL,
  `shift_status` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `user_detail_id`, `license_image`, `cnic_image`, `shift_status`, `date`) VALUES
(1, 14, NULL, NULL, NULL, '2021-07-11 10:11:44'),
(2, 15, NULL, NULL, NULL, '2021-07-11 10:12:29'),
(3, 17, NULL, NULL, 'Morning', '2021-07-11 10:16:17'),
(4, 18, NULL, NULL, 'Morning', '2021-07-11 10:37:03');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
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

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_detail_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_no_personal` varchar(255) DEFAULT NULL,
  `phone_no_residence` varchar(255) DEFAULT NULL,
  `cnic_no` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_detail_id`, `name`, `father_name`, `date_of_birth`, `age`, `gender`, `marital_status`, `address`, `postal_code`, `phone_no_personal`, `phone_no_residence`, `cnic_no`, `city`, `status`, `date`) VALUES
(1, 'Hello', 'Hello2', '2021-07-06', 12, 'on', 'Single', 'dsfnsdfnsdfnasd', '12987', NULL, NULL, NULL, 'Khi', 'Active', '2021-07-04 18:36:28'),
(2, 'jdsfndsj hello', 'sdjfnasdjkn', '2021-07-04', 12, NULL, 'Single', 'address', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'dsjkfsdjk', 'Active', '2021-07-04 18:53:10'),
(3, 'jdsfndsj hello', 'sdjfnasdjkn', '2021-07-04', 12, NULL, 'Married', 'address', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'dsjkfsdjk', 'Not Active', '2021-07-04 19:24:42'),
(4, 'jdsfndsj hello', 'sdjfnasdjkn', '2021-07-04', 12, NULL, 'Single', 'address', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'dsjkfsdjk', 'Active', '2021-07-04 19:25:04'),
(6, 'Hamza', 'Hello2', '2021-07-11', 20, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Not Active', '2021-07-11 09:45:38'),
(7, 'New 2020 Policy', 'Hello2', '2021-07-11', 20, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Not Active', '2021-07-11 09:55:37'),
(8, 'New 2020 Policy', 'Hello2', '2021-07-15', NULL, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Active', '2021-07-11 09:59:54'),
(9, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, '0987-3343434', '0000-0000000', '23454-9876666-4', NULL, '-- Select one --', '2021-07-11 10:01:31'),
(10, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:03:25'),
(11, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:03:26'),
(12, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:03:29'),
(13, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:11:19'),
(14, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:11:44'),
(15, 'New 2020 Policy', 'Hello2', '2021-07-28', 12, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Active', '2021-07-11 10:12:29'),
(16, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:15:00'),
(17, 'New 2020 Policy', 'Hello2', '2021-07-15', 10, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Active', '2021-07-11 10:16:17'),
(18, 'New 2020 Policy', 'Hello2', '2021-07-15', 10, 'on', 'Single', 'House No A-16', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Active', '2021-07-11 10:37:03'),
(19, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:50:59'),
(20, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:51:19'),
(21, NULL, NULL, NULL, NULL, 'on', '-- Select one --', NULL, NULL, NULL, NULL, NULL, NULL, '-- Select one --', '2021-07-11 10:53:16'),
(22, 'Vendor', 'Hello2', '2021-07-11', 10, 'on', 'Single', 'House No A-34', '55555', '0987-3343434', '0000-0000000', '23454-9876666-4', 'Khi', 'Not Active', '2021-07-11 10:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `user_detail_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `model_no` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `vehicle_description` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `user_detail_id`, `type`, `number`, `color`, `class`, `model_name`, `model_no`, `year`, `manufacturer`, `vehicle_description`, `date`) VALUES
(1, 1, 'dsfs', 'sdfsd', 'sdfasd', 'dsfsad', 'dfds', 'dfsf', 'dsfs', 'dsfas', 'dsfsd', '2021-07-11 10:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `user_detail_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `user_detail_id`, `shop_name`, `shop_address`, `date`) VALUES
(1, 22, 'dfsd@gmail.com', 'dsfsdfs', '2021-07-11 10:54:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
