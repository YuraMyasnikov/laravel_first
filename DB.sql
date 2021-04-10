-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 10 2021 г., 16:09
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
(1, 'Мобильные телефоны', 'mobile', 'В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!', 'category/mobile.jpg', NULL, NULL),
(2, 'Портативная техника', 'portable', 'Раздел с портативной техникой.', 'category/portable.jpg', NULL, NULL),
(3, 'Бытовая техника', 'technicks', 'Раздел с бытовой техникой', 'category/technicks.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` tinyint(4) NOT NULL DEFAULT 0,
  `ratio` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `symbol`, `main`, `ratio`, `created_at`, `updated_at`) VALUES
(1, 'RUB', '₽', 1, 1, NULL, NULL),
(2, 'USA', '$', 0, 72, NULL, NULL),
(3, 'EUR', '€', 0, 90, NULL, NULL);

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
(1, '2021_02_01_094419_create_categories_table', 1),
(2, '2021_02_01_094436_create_products_table', 1),
(3, '2021_02_03_080914_create_orders_table', 1),
(4, '2021_02_03_082616_create_order_product_table', 1),
(5, '2021_02_03_141353_update_order_product_table', 1),
(6, '2021_02_04_142442_create_users_table', 1),
(7, '2021_02_08_121626_alter_users_table', 1),
(8, '2021_02_08_135845_alter_user', 1),
(9, '2021_02_16_112152_alter_product_table', 1),
(10, '2021_02_19_112826_alter_products_count_soft_dell_view', 1),
(11, '2021_02_24_104949_create_subscripe_products_table', 2),
(12, '2021_02_26_082208_create_currencies_table', 2),
(13, '2021_03_01_113807_create_trade_offers_table', 2),
(14, '2021_03_01_113916_create_properties_table', 2),
(15, '2021_03_01_113939_create_property_options_table', 2),
(16, '2021_03_01_125111_create_property_options_trade_offers_table', 2),
(17, '2021_03_01_125811_create_product_property', 2);

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
(1, 1, 'Юра', '89501850053', '2021-02-16 09:10:25', NULL, 3),
(2, 1, 'Юра', '89501850053', '2021-02-16 09:10:25', NULL, 3),
(3, 1, 'Юра', '89501850053', '2021-02-16 09:10:25', NULL, 3),
(4, 1, 'Савелий', '6565656565', '2021-03-02 06:18:35', '2021-03-02 06:19:35', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 1, 1, 1, '2021-02-16 09:10:25', NULL),
(2, 1, 2, 2, NULL, NULL),
(3, 1, 4, 4, NULL, NULL),
(4, 1, 14, 4, NULL, NULL),
(5, 1, 16, 3, NULL, NULL),
(7, 4, 21, 5, '2021-03-02 06:18:46', '2021-03-02 06:18:59');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0,
  `hit` tinyint(4) NOT NULL DEFAULT 0,
  `sale` tinyint(4) NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `show` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `price`, `description`, `image`, `created_at`, `updated_at`, `new`, `hit`, `sale`, `count`, `show`, `deleted_at`) VALUES
(1, 1, 'iPhone X 64GB', 'iphone_X_64GB', 44990, 'Вы можете купить Смартфон Apple iPhone XR 64GB Black (MH6M3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XR 64GB Black (MH6M3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_X_64GB.png', NULL, NULL, 0, 1, 1, 3, 1, NULL),
(2, 1, 'iPhone X 256GB', 'iphone_X_256GB', 48990, 'Вы можете купить Смартфон Apple iPhone XR 128GB (PRODUCT)RED (MH7N3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XR 128GB (PRODUCT)RED (MH7N3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_X_256GB.png', NULL, NULL, 1, 0, 0, 3, 1, NULL),
(3, 1, 'HTC One Dual Slim', 'htc_one_dual_slim', 9800, 'HTC ONE dual sim - усовершенствованная версия флагманского смартфона HTC ONE. Учтя пожелания пользователей, разработчики внесли ряд изменений в популярную модель, главным из которых является Dual SIM и наличие слота под SD-карты. Также HTC ONE dual sim имеет съемную крышку от аккумулятора (сама батарея по-прежнему остается встроенной). Как и его предшественник, новый флагманский телефон от HTC оснащен 4,7-дюймовым дисплеем с разрешением Full HD (1080p) и плотностью экрана 468 ppi.', 'product/htc_one_dual_slim.webp', NULL, NULL, 0, 1, 0, 4, 1, NULL),
(4, 1, 'iPhone 5SE', 'iphone_5se', 13300, 'Операционная система Операционная система iOS Вы можете купить Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары система Операционная система iOS. Вы можете купить Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_5se.jpg', NULL, NULL, 0, 0, 1, 3, 1, NULL),
(5, 2, 'Камера GoPro', 'gopro', 43990, 'Экшен-камера GoPro Hero 8 Black Edition – новая версия знаменитого девайса, готовая порадовать нас улучшенной системой стабилизации HyperSmooth 2.0. Она компенсирует тряску при быстром движении, автоматически выравнивает линию горизонта и удаляет помехи. Попробуйте сами и убедитесь, какими плавными могут быть ваши движения во время спортивных соревнований и экстремальных трюков.', 'product/gopro.jpg', NULL, NULL, 0, 0, 0, 4, 1, NULL),
(6, 2, 'Наушники Beats Audio', 'beats_audio', 14990, 'Наушники Beats Solo3 могут работать до 40 часов без подзарядки, чтобы вы могли пользоваться ими каждый день. 5‑минутной зарядки Fast Fuel хватит ещё на 3 часа воспроизведения. Фирменное звучание Beats в наушниках с технологией Bluetooth класса 1 будет сопровождать вас повсюду — куда бы вы ни отправились. Расположение чашек с мягкими амбушюрами можно регулировать — вы сможете носить их целый день. Беспроводные наушники Beats Solo3 готовы к работе в любой момент. Включите их и поднесите к своему iPhone — они мгновенно подключатся к нему, а заодно и к вашим Apple Watch, iPad и Mac. Точная настройка акустической системы обеспечивает чистое сбалансированное звучание в широком диапазоне. Складные наушники обтекаемой формы прослужат вам долго — а ещё их удобно брать с собой куда угодно. Отвечайте на звонки, управляйте воспроизведением и обращайтесь к Siri, используя многофункциональные элементы управления на чашке наушников.', 'product/beats_audio.jpg', NULL, NULL, 1, 0, 0, 3, 1, NULL),
(7, 2, 'Камера Panasonic HC-V770', 'panasonic_hc-v770', 33990, 'Сохраняйте естественную красоту каждой сцены. Снимайте то, что хотите с помощью простых функций зуммирования, обеспечивающих высокое качество. Используйте новейшую в мире технологи. -Фильм HDR-, представляющую из себя расширенный динамический диапазон для получения четких снимков при задней подсветке. Используйте планшет в качестве дополнительной камеры.', 'product/panasonic_hc-v770.jpg', NULL, NULL, 0, 0, 0, 10, 1, NULL),
(8, 2, 'Кофемашина DeLongi', 'de_longi', 54990, 'Кофемашина De Longhi ECAM22.360.S оснащается встроенной кофемолкой, позволяющей выбирать одну из 13 степеней помола. Она позволяет использовать кофе в зёрнах, который намного дольше сохраняет свой аромат и вкусовые качества. СТРОЕ ПРИГОТОВЛЕНИЕ В устройстве предусмотрено шесть программ приготовления напитков. Для их активации достаточно нажать на соответствующую кнопку - все процессы выполняются в автоматическом режиме.', 'product/de_longi.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(9, 3, 'Мясорубка Bosch Pro Power MF 440', 'bosch_pro_power_mf_440', 11990, 'Электромясорубка Bosch ProPower MFW67440 не только переработает мясо в фарш, но и поможет вам в приготовлении других блюд. Она укомплектована насадками для кеббе, набивки домашних колбасок и барабанами для шинковки и резки овощей. За считаные минуты вы получите пережарку для супа или заготовки для салата. БЫСТРАЯ РАБОТА Высокая мощность мотора (700 Вт – номинальная, 2000 Вт – при блокировке) обеспечивает производительность 3,5 кг фарша в минуту.', 'product/bosch_pro_power_mf_440.jpg', NULL, NULL, 0, 1, 1, 10, 1, NULL),
(10, 3, 'Холодильник Haier A3FE742CGBJRU', 'kholodilnik_haier_a3fe742cgbjru', 100990, 'Haier A3FE742CGBJRU – стильный вместительный холодильник с инверторным компрессором и выдвижными морозильными камерами. Он экономно расходует электроэнергию, необходимую для создания оптимальных условий для хранения продуктов, и работает с низким уровнем шума. Панель, расположенная на внешней стороне двери, даёт возможность легко контролировать состояние холодильника и пользоваться всеми его функциями.', 'product/kholodilnik_haier_a3fe742cgbjru.jpg', NULL, NULL, 1, 0, 1, 3, 1, NULL),
(11, 3, 'Блендер Moulinex', 'moulinex', 3490, 'Блендер Moulinex DD643132 способен заменить сразу несколько кухонных приборов. Сливки, яичные белки взобьёт венчик, он же поможет в замешивании лёгкого теста, например, для блинчиков. Измельчитель (500 мл) быстро подготовит овощную пережарку для супа, мясо для запеканки или порубит орехи. Погружная насадка сделает пюре, такое однородное и нежное, что его можно будет использовать даже для детского питания.', 'product/moulinex.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(12, 1, 'Samsung Galaxy A71 Black', 'samsung_galaxy_a71_black', 11980, 'Samsung Galaxy A71 – большой и стильный смартфон с уникальным дизайном корпуса. Динамичный узор на задней панели подчеркнёт вашу индивидуальность. Благодаря плавным линиям девайс удобно лежит в руке. БЕЗ ГРАНИЦ Безрамочный 6,7-дюймовый дисплей выполнен по технологии Super AMOLED Plus. Он гарантирует реалистичную цветопередачу при просмотре кино, пользовании интернетом.', 'product/samsung_galaxy_a71_black.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(13, 1, 'iPhone 11', 'iphone_11', 85400, 'Вы можете купить Смартфон Apple iPhone 11 64GB Black (MHDA3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 11 64GB Black (MHDA3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_11.jpg', NULL, NULL, 1, 1, 0, 10, 1, NULL),
(14, 1, 'iPhone 11Pro', 'iphone_11_pro', 96990, 'Вы можете купить Смартфон Apple iPhone 11 Pro 256GB Midnight Green (MWCC2RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 11 Pro 256GB Midnight Green (MWCC2RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_11_pro.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(15, 1, 'iPhone 12Pro', 'iphone_12_pro', 99990, 'iPhone 12 Pro. Новая эра. Новые скорости. Это iPhone 12 Pro. A14 Bionic, самый быстрый процессор iPhone. Система камер Pro, которая обеспечивает потрясающее качество снимков при слабом освещении. Это новая прекрасная эра для iPhone.', 'product/iphone_12_pro.jpg', NULL, NULL, 1, 1, 0, 5, 1, NULL),
(16, 1, 'iPhone 12Pro max', 'iphone_12_pro_max', 109990, 'Встречайте iPhone 12 Pro Max. Это iPhone 12 Pro Max. A14 Bionic, самый быстрый процессор iPhone. Система камер Pro, которая обеспечивает потрясающее качество снимков при слабом освещении. И увеличенный дисплей Super Retina XDR. Это новая эра для iPhone.', 'product/iphone_12_pro_max.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(17, 1, 'iPhone SE 2020', 'iphone_se_2020', 39990, 'Phone SE. Компактный iPhone. Огромные возможности. Легко держать. Сложно не влюбиться. Всё, как вы любите. iPhone SE. A13 Bionic — самый быстрый процессор iPhone. Портретный режим и видео 4K. Великолепный дисплей Retina HD 4,7 дюйма и Touch ID.1 Долгое время работы без подзарядки.2 Это компактный и невероятно мощный iPhone.', 'product/iphone_se_2020.jpg', NULL, NULL, 0, 1, 0, 3, 1, NULL),
(18, 1, 'iPhone XS max', 'iphone_XS_max', 70990, 'Вы можете купить Смартфон Apple iPhone XS Max 512Gb Space Grey (FT562RU/A) восст. в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XS Max 512Gb Space Grey (FT562RU/A) восст.: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/iphone_XS_max.jpg', NULL, NULL, 0, 0, 0, 3, 1, NULL),
(19, 3, 'Холодильник Indesit DS-4160', 'kholodilnik-indesit-ds-4160', 23990, 'Indesit DS 4180 E – это холодильник высотой 185 сантиметров с нижней морозильной камерой. Класс энергоэффективности А позволит значительно сократить расходы на электроэнергию. Холодильное отделение дополнено капельной технологией размораживания. Она работает в автоматическом режиме, эффективно препятствует образованию наледи на стенках прибора и существенно упрощает уход за холодильником. В морозильной камере предусмотрен контейнер для льда.', 'product/kholodilnik-indesit-ds-4160.jpg', NULL, NULL, 0, 0, 0, 6, 1, NULL),
(20, 3, 'Холодильник Indesit ITF-120 X', 'kholodilnik-indesit-itf-120-x', 36490, 'Холодильник Indesit ITF 120 X – отличный выбор для большой семьи. В нём реализована работающая в автоматическом режиме система Total No Frost, которая избавит вас от наледи на стенках.', 'product/kholodilnik-indesit-itf-120-x.jpg', NULL, NULL, 0, 0, 1, 3, 1, NULL),
(21, 3, 'Samsung WF60F1R2E2W', 'samsung_wf60f1r2e2w', 26990, 'Вы можете купить Стиральная машина узкая Samsung WF 60 F1R2E2S/DLP в магазинах М.Видео по доступной цене. Стиральная машина узкая Samsung WF 60 F1R2E2S/DLP: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/samsung_wf60f1r2e2w.jpg', NULL, '2021-03-02 06:19:35', 1, 0, 0, 3, 1, NULL),
(22, 3, 'Samsung Galaxy Buds', 'samsung-galaxy-buds', 11990, 'Наушники Samsung Buds Live мягко и плотно прилегают к ушам благодаря эргономичной форме, которая обеспечивает комфортную и надёжную посадку. Ими удобно пользоваться в течение всего дня – в офисе, по пути домой, во время длительного авиаперелёта и вечерней пробежки.', 'product/samsung-galaxy-buds.webp', NULL, NULL, 0, 0, 0, 7, 1, NULL),
(23, 3, 'Стиральная машина Weissgauff WM 4927', 'stiralnaia-mashina-weissgauff-wm-4927', 66990, 'Вы можете купить Стиральная машина стандартная Whirlpool WM E104A S RU в магазинах М.Видео по доступной цене. Стиральная машина стандартная Whirlpool WM E104A S RU: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/stiralnaia-mashina-weissgauff-wm-4927.webp', NULL, NULL, 0, 0, 0, 4, 1, NULL),
(24, 2, 'Беспроводные наушники Xiaomi AirDots Pro 2', 'xiaomi_air_dots_pro_2', 3890, 'При разработке наушников специально для смартфонов Xiaomi на базе ОС MIUI был оптимизирован Bluetooth-кодек LHDC. Этот аудиокодек считается одним из самых качественных благодаря чрезвычайно низкой задержке, высокой четкости сигнала и поддержке на уровне системы. Благодаря кодеку LHDC аудиофайлы передаются с битрейтом до 900 кбит/сек, битовой глубиной до 24 бит и частотой дискретизации до 96 кГц. Каждый из наушников оснащен двумя микрофонами с поддержкой технологии шумоподавления ENC. Больше никакого шума улицы, автомобилей и разговоров вокруг. Собеседник будет слышать только ваш голос, причем с минимальными задержками и в отличном качестве. Динамик диаметром 14.2 мм с композитной катушкой и мембраной Благодаря продуманной конструкции динамик передает глубокие и насыщенные низкие частоты, естественные и мягкие средние частоты, не обрезая при этом яркие и чистые высокие частоты. Приятный звук определенно придется по душе внимательных к мелочам меломанов, удивляя наполненностью не слышимых ранее деталей любимой музыки. Для управления наушниками вам даже не нужно доставать телефон. Простыми прикосновениями вы можете управлять воспроизведением музыки, вызывать голосового помощника и отвечать на звонки. Дважды нажмите на любой наушник для принятия или завершения вызова. Когда вы не говорите по телефону, дважды нажмите на левый наушник для вызова голосового помощника. Чтобы начать воспроизведение музыки или поставить ее на паузу дважды нажмите на правый наушник или просто снимите один из них, инфракрасный датчик распознает ваше движение и остановит музыку. Наушники Xiaomi AirDots Pro 2 спроектированы таким образом, при котором обеспечивается плотная и удобная посадка в ушном канале. Даже при длительном ношении вы не будете ощущать дискомфорта. При весе каждого наушника всего по 4.2 грамма вы даже не заметите как носите их.', 'product/xiaomi_air_dots_pro_2.jpg', NULL, NULL, 0, 0, 0, 5, 1, NULL),
(25, 2, 'Беспроводные наушники Xiaomi Redmi AairDots', 'xiaomi-redmi-airdots', 1490, 'Универсальная Bluetooth-гарнитура с чехлом - зарядной станцией. Redmi Airdots 2 можно использовать как в паре, так и по отдельности, максимально просто и быстро переключаясь между режимами работы одного и двух наушников. Не нужно изменять настройки, надели один наушник - включился один наушник, надели второй наушник - и автоматически включается объемное звучание.Благодаря тщательной и профессиональной калибровке звучания из динамика размером 7.2 мм можно выжать низкие и средние частоты превосходного качества, а применение технологии цифрового шумоподавления позволяет отсеивать окружающие шумы и сохранять поразительную четкость голоса в самом шумном окружении. лючевым отличием между AirDots и AirDots 2 стало наличие у последних Bluetooth 5.0, который обеспечивает быстрое подключение гарнитуры к смартфону и лучшую энергоэффективность. По умолчанию AirDots 2 поддерживают функции голосового ассистента XiaoAI.', 'product/xiaomi-redmi-airdots.webp', NULL, NULL, 1, 1, 1, 6, 1, NULL),
(26, 3, 'Мультиварка Tefa RK 802 B-32', 'multivarka_tefal_RK802B32', 11990, 'Tefal RK802B32 – компактная мультиварка со стильным дизайном, которая позволит готовить блюда почти как в русской печи. И всё благодаря быстрому индукционному нагреву и равномерному распределению воздуха в сферической чаше объёмом 4,8 литра. РАЗБЕРЁТЕСЬ В ДВА СЧЁТА а панели управления расположены кнопки с информативными символами. Все же выставленные вами изменения отображаются на чётком дисплее.', 'product/multivarka_tefal_RK802B32.jpg', NULL, NULL, 1, 0, 0, 3, 1, NULL),
(27, 3, 'Рисоварка Xiaomi Heating Rice Cooker 2 4L', 'risovarka_xiaomi_heating_rice_cooker_2_4l', 8190, 'С мультиваркой Mi Induction Heating Rice Cooker у вас всегда будет получаться идеальный рис. Если для вас важна рассыпчатость, активируйте соответствующий режим. То же самое касается и каши: для неё предусмотрена отдельная программа. ЧТО ЕЩЁ? Кроме традиционного для стран Азии и Карибского бассейна гарнира, прибор приготовит и гречку, и пшено, и перловку. А специальная функция Keep warm не даст блюду быстро остыть.', 'product/risovarka_xiaomi_heating_rice_cooker_2_4l.jpg', NULL, NULL, 0, 1, 0, 2, 1, NULL),
(28, 3, 'Утюг MIE E5', 'utyg_mie_e5', 10290, 'Вы можете купить Утюг Mie E5 (380804) в магазинах М.Видео по доступной цене. Утюг Mie E5 (380804): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.', 'product/utyg_mie_e5.jpg', NULL, NULL, 0, 1, 0, 1, 1, NULL),
(29, 3, 'Утюг Philips GC4556_20 Azur', 'utyg_philips_gs_4556_20_azur', 9990, 'Утюг Philips GC4556/20 очень удобен вы использовании благодаря прорезиненной ручке, которая хорошо лежит в ладони, и шарнирному креплению сетевого шнура. ПРЕВОСХОДНЫЙ РЕЗУЛЬТАТ Мощность 2 500 Вт обеспечивает быстрый нагрев. Подошва Steel Glide хорошо скользит по ткани, а для разглаживания жёстких складок можно воспользоваться паровым ударом.', 'product/utyg_philips_gs_4556_20_azur.jpg', NULL, NULL, 1, 0, 1, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_property`
--

CREATE TABLE `product_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `property_options`
--

CREATE TABLE `property_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `property_option_trade_offer`
--

CREATE TABLE `property_option_trade_offer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_option_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subscripe_products`
--

CREATE TABLE `subscripe_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `trade_offers`
--

CREATE TABLE `trade_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `property_orders_id` int(10) UNSIGNED NOT NULL,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@mail.ru', '$2y$10$AL5TiuyajEJ2x9AcF5Hl5.zl8p4FUd3Pu5.VRAuwV8aBlyQusJAj2', NULL, NULL, NULL, 1),
(2, 'user', 'user@mail.ru', '$2y$10$0f4psTr07qPtGN4i1uAPu.kOmrs9EASZkMB2J6bI4Ikwnrox9tOYy', NULL, NULL, NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
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
-- Индексы таблицы `product_property`
--
ALTER TABLE `product_property`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `property_options`
--
ALTER TABLE `property_options`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `property_option_trade_offer`
--
ALTER TABLE `property_option_trade_offer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscripe_products`
--
ALTER TABLE `subscripe_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trade_offers`
--
ALTER TABLE `trade_offers`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `product_property`
--
ALTER TABLE `product_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `property_options`
--
ALTER TABLE `property_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `property_option_trade_offer`
--
ALTER TABLE `property_option_trade_offer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subscripe_products`
--
ALTER TABLE `subscripe_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `trade_offers`
--
ALTER TABLE `trade_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
