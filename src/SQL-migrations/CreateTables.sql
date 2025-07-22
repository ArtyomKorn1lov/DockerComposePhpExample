USE brand_site_php;

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog`
(
    `ID`          int(255) NOT NULL,
    `NAME`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `PRICE`       int(255) NOT NULL,
    `TEXT`        text COLLATE utf8mb4_unicode_ci,
    `PICTURE`     varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `PRODUCT_DAY` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;