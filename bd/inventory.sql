-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 06 2023 г., 20:06
-- Версия сервера: 5.7.14
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `inventory`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'koji', '3f7c4756e067384eb19e87dcff2baec9');

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE `contents` (
  `content_id` int(11) NOT NULL,
  `content_name` varchar(64) NOT NULL,
  `content_body` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content_desc` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`content_id`, `content_name`, `content_body`, `content_desc`) VALUES
(1, 'index', '<div class="hello">\r\n    <p>Редактирование главной страницы</p>\r\n</div>', 'Главная страница'),
(2, 'author', '<div class="author">\r\n    <p>Об авторе koji</p>\r\n    <p>Почта автора </p> <a href="https://mail.ru">koji@mail.ru</a>\r\n</div>', 'Об авторе'),
(3, 'corpo', '<div class="corpo">\r\n    <p>О нашей компании Oboi Sell</p>\r\n    <p>Мы работаем с 2023 года и продаем обои</p>\r\n    <p>Телефоны: 9876545678, 987656784</p>\r\n    <div class="google-map">\r\n        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d169.30503214101273!2d39.63466868714663!3d47.23848303809276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b8a25f168d53%3A0xf14d40cd574e14f3!2z0JzQuNGAINCe0LHQvtC10LI!5e0!3m2!1sru!2sru!4v1696000088546!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>\r\n    </div>\r\n</div>', 'О компании');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_length` int(11) DEFAULT NULL,
  `page_id` varchar(45) DEFAULT NULL,
  `product_amm` int(11) NOT NULL DEFAULT '0',
  `product_desc` varchar(256) DEFAULT NULL,
  `type_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_by` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_length`, `page_id`, `product_amm`, `product_desc`, `type_name`, `created_by`) VALUES
(1, 'Обои бумажные Московская', 2999, 10, '17983824.webp', 10, 'Обои бумажные декоративные 10 метров московская', 'decor', NULL),
(2, 'Обои флизелиновые под покраску', 1999, 15, '89091856.webp', 10, 'Обои флизелиновые под покраску 10 метров', 'paint', 'koji'),
(3, 'Фотообои флизелиновые Barton', 3999, 10, '90394964.webp', 10, 'Фотообои флизелиновые 10 метров Barton', 'photo', NULL),
(7, 'Московская обойная фабрика', 5313, 13, '81951660.webp', 13, 'Обои бумажные Московская обойная фабрика Лофт бежевые 0.53 м 238532-2', 'decor', 'koji'),
(8, 'Victoria Stenova Dubai', 5999, 2, '83616597.webp', 20, 'Обои флизелиновые Victoria Stenova Dubai серые 1.06м', 'decor', 'koji'),
(9, 'Ateliero Panno', 3999, 1, '87769352.webp', 10, 'Обои флизелиновые Ateliero Panno 1.06м', 'decor', 'koji'),
(10, 'Московская обойная фабрика Лофт', 2980, 1, '81951660.webp', 10, 'Обои бумажные Московская обойная фабрика Лофт серые 0.53 м', 'decor', 'koji'),
(11, 'Аспект ру Ниагара', 5490, 2, '87271076.webp', 10, 'Обои флизелиновые Аспект ру Ниагара темно-серые 1.06 м', 'decor', 'koji'),
(12, 'Wall Decor Гранж', 4999, 2, '85310359.webp', 15, 'Обои флизелиновые Wall Decor Гранж графитовые 1.06 м', 'decor', 'koji'),
(13, 'Русские Обои Каролина', 3950, 2, '91358593.webp', 19, 'Обои флизелиновые Русские Обои Каролина 0.53 м чёрные', 'decor', 'koji'),
(14, 'Rasch Salsa', 3490, 1, '90217509.webp', 5, 'Обои Rasch Salsa', 'decor', 'koji'),
(15, 'Аспект ру Ниагара серые', 5000, 1, '87271077.webp', 25, 'Обои флизелиновые Аспект ру Ниагара серые 1.06 м', 'decor', 'koji'),
(16, 'Practic Vlies Band', 5005, 1, '81988809.webp', 100, 'Малярный флизелин Practic Vlies Band 1.06 м 130 г/м²', 'paint', 'koji'),
(17, 'Белвинил Джут', 5678, 1, '90782208.webp', 54, 'Обои под покраску флизелиновые Белвинил Джут 1.06 м бежевые', 'paint', 'koji'),
(18, 'Rasch Wallton', 3000, 1, '90387345.webp', 20, 'Обои под покраску флизелиновые Rasch Wallton 0.53 м цвет белый', 'paint', 'koji'),
(19, 'Полосы Elysium', 5302, 2, '13704584.webp', 200, 'Обои под покраску флизелиновые Полосы Elysium Фактура 1.06 м', 'paint', 'koji'),
(20, 'NC Antivandal', 3012, 1, '90377140.webp', 30, 'Обои под покраску флизелиновые NC Antivandal 1.06х25 м белые', 'paint', 'koji'),
(21, 'NC Antivandal', 3193, 1, '90377141.webp', 41, 'Обои под покраску флизелиновые NC Antivandal 1.06х25 м белые', 'paint', 'koji'),
(22, 'Inspire Краска', 4912, 1, '85560881.webp', 10, 'Обои под покраску флизелиновые Inspire Краска белые 1.06 м', 'paint', 'koji'),
(23, 'Erismann Defender', 2472, 1, '82800392.webp', 210, 'Обои под покраску флизелиновые Erismann Defender 1.06 м', 'paint', 'koji'),
(24, 'Ateliero Метелица', 8765, 1, '89091857.webp', 10, 'Обои под покраску флизелиновые Ateliero Метелица 1.06 м', 'paint', 'koji'),
(25, 'Fotooboikin "Перья листья"', 9643, 2, '98276270.webp', 124, 'Фотообои флизелиновые Fotooboikin "Перья листья" 400х270 см', 'photo', 'koji'),
(26, 'Verol VEROL Пионы', 9876, 3, '90793748.webp', 135, 'Verol VEROL 400х300 см Пионы', 'photo', 'koji'),
(27, 'Verol VEROL Папоротники', 9833, 3, '90793746.webp', 135, 'Фотообои флизелиновые Verol VEROL 300х270 см Папоротники', 'photo', 'koji'),
(28, 'Verol "Тропические листья"', 7658, 2, '90302015.webp', 100, 'Фотообои бумажные бесшовные Verol "Тропические листья"', 'photo', 'koji'),
(29, 'Fotooboikin "Лес в тумане max"', 9875, 1, '91274984.webp', 65, 'Фотообои Fotooboikin "Лес в тумане max" 400х270', 'photo', 'koji'),
(30, 'Fotooboikin "Силуэты гор"', 7603, 2, '91274905.webp', 75, 'Фотообои Fotooboikin "Силуэты гор" 400х270', 'photo', 'koji'),
(31, '"Панда на фоне кирпичной стене "', 9401, 1, '90230372.webp', 54, 'Фотообои Dekor Vinil "Панда на фоне кирпичной стене " 200х260 см', 'photo', 'koji'),
(32, 'Fotooboikin "Ветви пальмы"', 9315, 1, '91274930.webp', 65, 'Фотообои флизелиновые Fotooboikin "Ветви пальмы" 400х270', 'photo', 'koji'),
(33, 'Verol VEROL Перья 3D', 7876, 1, '90684146.webp', 454, 'Фотообои флизелиновые Verol VEROL 300х270 см Перья 3D', 'photo', 'koji'),
(34, 'Обои', 426, 4652, '123', 12, '135136аурпуер', 'decor', 'koji'),
(35, '123', 123, 123, '123', 123, '123', 'decor', 'koji');

-- --------------------------------------------------------

--
-- Структура таблицы `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sale_amm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `type_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `type_desc` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`type_name`, `type_desc`) VALUES
('decor', 'Декоративные обои'),
('paint', 'Обои под покраску'),
('photo', 'Фотообои');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Индексы таблицы `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `creator_idx` (`created_by`),
  ADD KEY `type_idx` (`type_name`);

--
-- Индексы таблицы `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `product_idx` (`product_id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `type` FOREIGN KEY (`type_name`) REFERENCES `types` (`type_name`);

--
-- Ограничения внешнего ключа таблицы `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
