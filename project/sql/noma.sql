-- phpMyAdmin SQL Dump
-- version 4.7.2-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2017 at 04:43 PM
-- Server version: 10.1.24-MariaDB-1~yakkety
-- PHP Version: 7.1.5-1+deb.sury.org~zesty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noma`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accessories_lang`
--

CREATE TABLE `accessories_lang` (
  `id` int(10) UNSIGNED NOT NULL,
  `accessories_id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `cena` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `sid`, `name`, `nr`, `img`) VALUES
(1, 5, 'VW T6 Transporter AdBlue', 'BJ 23', '/img/BJ23.JPG'),
(2, 4, 'VW T6 Transporter AdBlue', 'RI 54', '/img/RI54.JPG'),
(3, 3, 'VW T6 Transporter AdBlue', 'JO 54', '/img/JO54.JPG'),
(4, 1, 'VW T5 Transporter GZ', 'GZ 41', '/img/GZ41ok.jpg'),
(5, 2, 'VW T6 Caravelle 4MOTION LED AdBlue', 'FF 23', '/img/ff23ok.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cars_equipment`
--

CREATE TABLE `cars_equipment` (
  `id` int(11) UNSIGNED NOT NULL,
  `cars_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cars_equipment_lang`
--

CREATE TABLE `cars_equipment_lang` (
  `id` int(11) UNSIGNED NOT NULL,
  `cars_equipment_id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cars_img`
--

CREATE TABLE `cars_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `cars_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img_title` varchar(255) DEFAULT NULL,
  `img_dec` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cars_lang`
--

CREATE TABLE `cars_lang` (
  `id` int(10) UNSIGNED NOT NULL,
  `cars_id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars_tbl`
--

CREATE TABLE `cars_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `cars_id` int(10) UNSIGNED NOT NULL,
  `dienas` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `cena` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars_tbl`
--

INSERT INTO `cars_tbl` (`id`, `cars_id`, `dienas`, `cena`) VALUES
(1, 1, '1-2', '65'),
(3, 1, '3-7', '60'),
(4, 1, '8-30', '55'),
(5, 2, '1-2', '65'),
(6, 2, '3-7', '60'),
(7, 2, '8-30', '55'),
(8, 3, '1-2', '65'),
(9, 3, '3-7', '60'),
(10, 3, '8-30', '55'),
(11, 4, '1-2', '60'),
(12, 4, '3-7', '55'),
(13, 4, '8-30', '50'),
(14, 5, '1-2', '80'),
(15, 5, '3-7', '75'),
(16, 5, '8-10', '70'),
(17, 5, '11-20', '65'),
(18, 5, '21-30', '60');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`) VALUES
(1, 'rental'),
(2, 'transfers'),
(3, 'accessories'),
(4, 'about'),
(5, 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `data_lang`
--

CREATE TABLE `data_lang` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_lang`
--

INSERT INTO `data_lang` (`id`, `data_id`, `lang`, `meta`, `link`, `title`, `h1`, `body`) VALUES
(2, 1, 'lv', 'Automašīnu noma', 'automasinu-noma', 'Automašīnu noma', 'Automašīnu noma', 'Automašīnu noma body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(3, 1, 'en', 'Сar rental', 'car-rental', 'Сar rental', 'Сar rental', 'Сar rental body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(4, 1, 'ru', 'Прокат автомобилей', 'prokat-avtomobilei', 'Прокат автомобилей', 'Прокат автомобилей', 'Прокат автомобилей body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body bodyv'),
(5, 2, 'lv', 'Transfēri', 'transferi', 'Transfēri', 'Transfēri', 'Transfēri body  body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(6, 2, 'en', 'Transfers', 'transfers', 'Transfers', 'Transfers', 'Transfers body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(7, 2, 'ru', 'Переводы', 'perevodi', 'Переводы', 'Переводы', 'Переводы body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(8, 3, 'lv', 'Papildaprīkojums', 'papildaprikojums', 'Papildaprīkojums', 'Papildaprīkojums', 'Papildaprīkojums body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body bo bodydy body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(9, 3, 'en', 'Accessories', 'accessories', 'Accessories', 'Accessories', 'Accessories body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body bodyv'),
(10, 3, 'ru', 'Аксессуары', 'aksessuari', 'Аксессуары', 'Аксессуары', 'Аксессуары body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(11, 4, 'lv', 'Par mums', 'par-mums', 'Par mums', 'Par mums', 'Par mums body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(12, 4, 'en', 'About us', 'about-us', 'About us', 'About us', 'About us body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(13, 4, 'ru', 'О нас', 'o-nas', 'О нас', 'О нас', 'О нас body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(14, 5, 'lv', 'Kontakti', 'kontakti', 'Kontakti', 'Kontakti', 'Kontakti body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(15, 5, 'en', 'Contacts', 'contacts', 'Contacts', 'Contacts', 'Contacts body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body'),
(16, 5, 'ru', 'Контакты', 'kontakti', 'Контакты', 'Контакты', 'Контакты body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2017_06_06_183454_cteate_data_table', 2),
(25, '2017_06_06_192425_create_data_lang_table', 2),
(26, '2017_06_09_001749_create_cars_table', 3),
(27, '2017_06_09_001819_create_cars_lang_table', 3),
(28, '2017_06_11_192202_create_accesories_table', 4),
(29, '2017_06_11_192229_create_accesories_lang_table', 4),
(30, '2017_06_11_194842_create_tbl_table', 5);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.lv', '$2y$10$Gq75TRZ4brdPPmRgCFbOwuMTt6r8eD4LWTL9SaREeK17/ibxazaMW', 'TBU3eXa2KzANZ5vjV50Sbo3T9Q9H3e2lRdrNCxSIPwkolPDcukkkdQ9fgLos', '2017-06-11 15:55:09', '2017-06-14 23:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `accessories_lang`
--
ALTER TABLE `accessories_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accessories_lang_accessories_id_foreign` (`accessories_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `cars_equipment`
--
ALTER TABLE `cars_equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Indexes for table `cars_equipment_lang`
--
ALTER TABLE `cars_equipment_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_equipment_id` (`cars_equipment_id`);

--
-- Indexes for table `cars_img`
--
ALTER TABLE `cars_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Indexes for table `cars_lang`
--
ALTER TABLE `cars_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_lang_cars_id_foreign` (`cars_id`);

--
-- Indexes for table `cars_tbl`
--
ALTER TABLE `cars_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tblg_cars_id_foreign` (`cars_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_lang`
--
ALTER TABLE `data_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_lang_data_id_foreign` (`data_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `accessories_lang`
--
ALTER TABLE `accessories_lang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cars_equipment`
--
ALTER TABLE `cars_equipment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_equipment_lang`
--
ALTER TABLE `cars_equipment_lang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_img`
--
ALTER TABLE `cars_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_lang`
--
ALTER TABLE `cars_lang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cars_tbl`
--
ALTER TABLE `cars_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_lang`
--
ALTER TABLE `data_lang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories_lang`
--
ALTER TABLE `accessories_lang`
  ADD CONSTRAINT `accessories_lang_accessories_id_foreign` FOREIGN KEY (`accessories_id`) REFERENCES `accessories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars_equipment`
--
ALTER TABLE `cars_equipment`
  ADD CONSTRAINT `cars_equipment_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`);

--
-- Constraints for table `cars_equipment_lang`
--
ALTER TABLE `cars_equipment_lang`
  ADD CONSTRAINT `cars_equipment_lang_ibfk_1` FOREIGN KEY (`cars_equipment_id`) REFERENCES `cars_equipment` (`id`);

--
-- Constraints for table `cars_img`
--
ALTER TABLE `cars_img`
  ADD CONSTRAINT `cars_img_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars_lang`
--
ALTER TABLE `cars_lang`
  ADD CONSTRAINT `cars_lang_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cars_tbl`
--
ALTER TABLE `cars_tbl`
  ADD CONSTRAINT `cars_tbl_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_lang`
--
ALTER TABLE `data_lang`
  ADD CONSTRAINT `data_lang_data_id_foreign` FOREIGN KEY (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
