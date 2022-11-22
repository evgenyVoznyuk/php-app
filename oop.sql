-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2021 г., 11:54
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `oop_articles_index`
--

CREATE TABLE `oop_articles_index` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `oop_articles_index`
--

INSERT INTO `oop_articles_index` (`id_article`, `id_user`, `title`, `content`, `dt`) VALUES
(1, 1, 'Happy New Year!', '2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,2022,', '2021-12-29 19:24:48');

-- --------------------------------------------------------

--
-- Структура таблицы `oop_users_index`
--

CREATE TABLE `oop_users_index` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `oop_users_index`
--

INSERT INTO `oop_users_index` (`id_user`, `login`, `password`, `name`) VALUES
(1, 'admin', '$2y$10$JvXEzIH4eXtYeWDOTG4GdeE8MKKwzCWnajCraqui1YybbntMti5Ju', 'Admin'),
(2, 'manager', '$2y$10$2UfEsuHrEyght/UdeR7rlepeP2NFPQUgAKSoh7auiTNFtncpkAICW', 'Dmitry');

-- --------------------------------------------------------

--
-- Структура таблицы `oop_users_sessions`
--

CREATE TABLE `oop_users_sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(64) NOT NULL,
  `started` timestamp(4) NOT NULL DEFAULT current_timestamp(4),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `oop_users_sessions`
--

INSERT INTO `oop_users_sessions` (`id_session`, `id_user`, `token`, `started`, `status`) VALUES
(1, 1, 'a73ff561ec10b13f1167bdf31fc6fc4f5233e4f134c9cf51ed9af8bcd8b0650f', '2021-12-29 19:10:33.9183', 1),
(2, 1, '7c182adb0b94464f4044f32f803a5bec1f8c8577077abf6f464c2304a1c20214', '2021-12-29 19:21:18.1118', 0),
(3, 2, '90863c19686b4c5aa45fd0eed27d3783c5c8c7ef28a57bc65bc523cef64f69be', '2021-12-29 19:25:43.7045', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `oop_articles_index`
--
ALTER TABLE `oop_articles_index`
  ADD PRIMARY KEY (`id_article`);

--
-- Индексы таблицы `oop_users_index`
--
ALTER TABLE `oop_users_index`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `oop_users_sessions`
--
ALTER TABLE `oop_users_sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `oop_articles_index`
--
ALTER TABLE `oop_articles_index`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `oop_users_index`
--
ALTER TABLE `oop_users_index`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `oop_users_sessions`
--
ALTER TABLE `oop_users_sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
