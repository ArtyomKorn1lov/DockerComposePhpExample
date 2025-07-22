-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 01 2024 г., 17:00
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.1.9
USE brand_site_php;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brand_site_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRICE` int(255) NOT NULL,
  `TEXT` text COLLATE utf8mb4_unicode_ci,
  `PICTURE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRODUCT_DAY` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`ID`, `NAME`, `PRICE`, `TEXT`, `PICTURE`, `PRODUCT_DAY`) VALUES
(1, 'HTC HERO', 1000, 'Третий коммуникатор на платформе Android, выпущенный компанией HTC. Это первый телефон серии, оснащённый аудиовыходом 3,5 мм, мультитач-экраном и новым интерфейсом HTC Sense. Телефон был представлен 24 июня 2009 года в Лондоне.', '/template/images/goods/htc.jpg', 0),
(2, 'Iphone 7 ', 4000, 'iPhone 7 и iPhone 7 Plus — смартфоны корпорации Apple, использующие процессор Apple A10 Fusion, процессор содержит 3,3 миллиарда транзисторов на площади в 125 кв. мм и операционную систему iOS 10 (первоначально, поддерживает обновление до iOS 15), представленные 7 сентября 2016 года. Диагональ экрана и разрешение была оставлена такой же по сравнению с предыдущими моделями: iPhone 6s и iPhone 6s Plus. Толщина телефона — 7,1—7,3 мм, без учета модуля камеры, выступающей за пределы (двух камер в iPhone 7 Plus). Смартфоны используют только порт Lightning, лишившись традиционного разъёма TRRS mini-jack (3,5 мм) для подключения проводных наушников. Также телефоны получили защиту от воды и пыли на уровне IP67.\r\n<br><br>\r\nПрием iPhone 7 был неоднозначным. Хотя рецензенты отметили улучшения в камере, особенно в двойной задней камере модели Plus, телефон подвергся критике за отсутствие инноваций в качестве сборки. Во многих обзорах обсуждалось удаление 3,5-мм разъема для наушников; некоторые критики утверждали, что это изменение было направлено на расширение лицензирования фирменного разъема Lightning и продаж собственных беспроводных наушников Apple, и ставили под сомнение влияние изменений на качество звука.', '/template/images/goods/iphone.jpg', 0),
(5, 'Samsung Galaxy Note 4', 2500, 'Samsung Galaxy Note 4 — смартфон компании Samsung Electronics, анонсированный 3 сентября 2014 года на выставке IFA 2014. Является четвёртым по счёту премиальным смартфоном линейки Samsung Galaxy Note. Ввиду размера экрана (5,7 дюйма или 140 мм) является промежуточным между коммуникатором и планшетным компьютером («фаблет»).\r\n<br><br>\r\nПомимо основного устройства, также была анонсирована версия смартфона Samsung Galaxy Edge, с дополнительным экраном на боковой части устройства, расширяющим возможности использования устройства.\r\n<br><br>\r\nУстройство сделано в металлической оправе, задняя крышка устройства сделана из пластика, текстурированного под кожу.',
 '/template/images/goods/samsung.jpg', 1),
(6, 'Пустой телефон', 500, 'Пустое поле!', NULL, 0),
(7, 'Пустой телефон 2!', 1000, NULL, NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
