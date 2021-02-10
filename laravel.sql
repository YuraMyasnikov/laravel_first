-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 10 2021 г., 13:46
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Мобильные телефоны', 'mobile', 'Мобильные телефоны описание категории', NULL, NULL, NULL),
(2, 'Портативная техника', 'portable', 'Портативная техника описание данной категории', NULL, NULL, NULL),
(3, 'Бытовая техника', 'technicks', 'Бытовая техника это описание категории', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_02_01_094419_create_categories_table', 1),
(6, '2021_02_01_094436_create_products_table', 1),
(7, '2021_02_03_080914_create_orders_table', 1),
(8, '2021_02_03_082616_create_order_product_table', 1),
(10, '2021_02_03_141353_update_order_product_table', 2),
(11, '2021_02_04_142442_create_users_table', 3),
(15, '2021_02_08_121626_alter_users_table', 4),
(18, '2021_02_08_135845_alter_user', 5),
(19, '2021_02_08_142356_create_cache_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(11, 1, 'Юра', '89501850053', '2021-02-08 11:44:23', '2021-02-08 11:44:53', 9),
(12, 1, 'Вова', '45645645646', '2021-02-08 11:45:18', '2021-02-08 11:45:33', 7),
(13, 1, 'Егор', '87978797898', '2021-02-08 11:45:55', '2021-02-08 11:46:28', 8),
(14, 1, 'Вован', '234765721313', '2021-02-08 11:47:05', '2021-02-08 11:47:40', 7),
(15, 1, 'Илья', '2222232333', '2021-02-08 11:48:01', '2021-02-08 11:48:45', 10),
(16, 1, 'Вова', '+7 950 185 00 53', '2021-02-08 12:36:27', '2021-02-08 12:36:43', 7),
(17, 1, 'Вова', '+7 950 185 00 53', '2021-02-08 12:41:27', '2021-02-08 12:41:48', 7),
(18, 1, 'Юра', '89501850053', '2021-02-08 13:02:59', '2021-02-08 13:03:15', 9),
(19, 0, NULL, NULL, '2021-02-09 05:06:52', '2021-02-09 05:06:52', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(45, 6, 1, 2, '2021-02-08 11:28:30', '2021-02-08 11:28:36'),
(46, 6, 6, 1, '2021-02-08 11:28:54', '2021-02-08 11:28:54'),
(47, 6, 8, 1, '2021-02-08 11:29:04', '2021-02-08 11:29:04'),
(48, 6, 10, 1, '2021-02-08 11:29:15', '2021-02-08 11:29:15'),
(50, 7, 3, 1, '2021-02-08 11:30:59', '2021-02-08 11:30:59'),
(51, 7, 7, 1, '2021-02-08 11:31:15', '2021-02-08 11:31:15'),
(52, 8, 9, 1, '2021-02-08 11:33:53', '2021-02-08 11:33:53'),
(53, 8, 11, 2, '2021-02-08 11:34:10', '2021-02-08 11:34:16'),
(54, 9, 8, 1, '2021-02-08 11:36:40', '2021-02-08 11:36:40'),
(55, 9, 4, 1, '2021-02-08 11:37:58', '2021-02-08 11:37:58'),
(56, 10, 4, 1, '2021-02-08 11:39:29', '2021-02-08 11:39:29'),
(57, 11, 8, 1, '2021-02-08 11:44:23', '2021-02-08 11:44:23'),
(58, 11, 4, 1, '2021-02-08 11:44:35', '2021-02-08 11:44:35'),
(59, 12, 6, 1, '2021-02-08 11:45:18', '2021-02-08 11:45:18'),
(60, 13, 2, 1, '2021-02-08 11:45:56', '2021-02-08 11:45:56'),
(61, 13, 5, 2, '2021-02-08 11:46:07', '2021-02-08 11:46:12'),
(62, 14, 9, 2, '2021-02-08 11:47:05', '2021-02-08 11:47:09'),
(63, 14, 11, 1, '2021-02-08 11:47:22', '2021-02-08 11:47:22'),
(64, 15, 12, 1, '2021-02-08 11:48:01', '2021-02-08 11:48:01'),
(65, 15, 4, 1, '2021-02-08 11:48:25', '2021-02-08 11:48:25'),
(66, 16, 6, 1, '2021-02-08 12:36:27', '2021-02-08 12:36:27'),
(67, 17, 4, 3, '2021-02-08 12:41:27', '2021-02-08 12:41:35'),
(68, 18, 7, 2, '2021-02-08 13:02:59', '2021-02-08 13:03:04');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'iPhone X 64GB', 'iphone_X_64GB', 55300, 'Отличный продвинутый телефон с памятью на 64 gb', NULL, NULL, NULL),
(2, 1, 'iPhone X 256GB', 'iphone_X_256GB', 85600, 'Отличный продвинутый телефон с памятью на 256 gb', NULL, NULL, NULL),
(3, 1, 'HTC One S', 'htc_one_s', 9600, 'Зачем платить за лишнее? Легендарный HTC One S', NULL, NULL, NULL),
(4, 1, 'iPhone 5SE', 'iphone_5se', 12600, 'Отличный классический iPhone', NULL, NULL, NULL),
(5, 2, 'Наушники Beats Audio', 'beats_audio', 20221, 'Отличный звук от Dr. Dre', NULL, NULL, NULL),
(6, 2, 'Камера GoPro', 'gopro', 120000, 'Снимай самые яркие моменты с помощью этой камеры', NULL, NULL, NULL),
(7, 2, 'Камера Panasonic HC-V770', 'panasonic_hc-v770', 27900, 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!', NULL, NULL, NULL),
(8, 3, 'Кофемашина DeLongi', 'de_longi', 25200, 'Хорошее утро начинается с хорошего кофе!', NULL, NULL, NULL),
(9, 3, 'Холодильник Haier', 'haier', 40200, 'Для большой семьи большой холодильник!', NULL, NULL, NULL),
(10, 3, 'Блендер Moulinex\r\n', 'moulinex', 4200, 'Для самых смелых идей', NULL, NULL, NULL),
(11, 3, 'Мясорубка Bosch', 'bosch', 9200, 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!', NULL, NULL, NULL),
(12, 1, 'Samsung Galaxy J6', 'samsunggalaxyj6', 11980, 'Современный телефон начального уровня', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repeatPassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `repeatPassword`, `created_at`, `updated_at`, `is_admin`) VALUES
(7, 'Вова', 'putin@mail.ru', '$2y$10$W7OVbC2wKYRJwUwAncM2r.dQuJUow0xAiXbTsg0ghdaaesJnkkQh2', NULL, '2021-02-08 11:26:35', '2021-02-08 11:26:35', 0),
(8, 'Егор', 'egor@mail.ru', '$2y$10$JaC2uNtYWeSDSj5cnhc/VOVC2/2S1owz1K6mXbmi35Ul5eH8dR4dO', NULL, '2021-02-08 11:30:18', '2021-02-08 11:30:18', 0),
(9, 'Юра', 'yuriy.myasnikov.88@mail.ru', '$2y$10$xfjSMmprBsZoew6Ik7nJMu.WE6GsVJovBX61AMifAj2.eRyoy94HS', NULL, '2021-02-08 11:32:11', '2021-02-08 11:32:11', 1),
(10, 'Илья', 'Iliya@mail.ru', '$2y$10$DOXjcwE5vCTP1igJBpRMvunbE8e1zs5WKsmZn/IOdHvqFIRNv4c02', NULL, '2021-02-08 11:35:10', '2021-02-08 11:35:10', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
