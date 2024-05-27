-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 01 2023 г., 22:57
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `id_player` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id_article`, `id_player`, `title`, `date`, `link`) VALUES
(27, 1, ';oiujhb', '0000-00-00', 'https://www.studik.kiev.ua/wp-content/uploads/2018/04/??????????-??-??????????-?-????????-????????-????????-???????-???????-?.?.-????????-?.?.-??????????.pdf');

-- --------------------------------------------------------

--
-- Структура таблицы `conf`
--

CREATE TABLE `conf` (
  `id_conf` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `player` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `conf`
--

INSERT INTO `conf` (`id_conf`, `title`, `date`, `player`) VALUES
(1, '', '0000-00-00', ''),
(2, 'Всероссийская научно-практическая конференция и выставка «Корпоративные библиотечные системы: технологии и инновации»', '0000-00-00', 'оргкомитет ');

-- --------------------------------------------------------

--
-- Структура таблицы `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `id_conf` int(11) DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `work` varchar(100) NOT NULL,
  `place_of_work` varchar(100) NOT NULL,
  `position` tinyint(1) DEFAULT NULL,
  `topic` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `player`
--

INSERT INTO `player` (`id_player`, `id_conf`, `full_name`, `work`, `place_of_work`, `position`, `topic`, `phone`, `email`) VALUES
(1, NULL, 'Татьяна Вадимовна Багрий', 'СПБТБИИТ', 'техник', 2, ' ', '+7921764936', 'tanyabagry134543@gmail.com'),
(5, NULL, 'Иван Иванович Иванов', 'Политех', 'Профессор', 1, 'Вызовы XX века', '+7926449586', 'iva@yandex.ru'),
(6, NULL, '', '', '', NULL, ' ', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `status_p`
--

CREATE TABLE `status_p` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `status_p`
--

INSERT INTO `status_p` (`id`, `status`) VALUES
(1, 'выступление с докладом'),
(2, 'предоставление материалов');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accsess` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `role`, `login`, `email`, `password`, `accsess`) VALUES
(1, 1, 'tanyabagry134543@gmail.com', NULL, '2af9b1ba42dc5eb01743e6b3759b6e4b', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_group` (`id_player`);

--
-- Индексы таблицы `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`id_conf`);

--
-- Индексы таблицы `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`),
  ADD KEY `id_conf` (`id_conf`),
  ADD KEY `position` (`position`);

--
-- Индексы таблицы `status_p`
--
ALTER TABLE `status_p`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `conf`
--
ALTER TABLE `conf`
  MODIFY `id_conf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `status_p`
--
ALTER TABLE `status_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_player`) REFERENCES `player` (`id_player`);

--
-- Ограничения внешнего ключа таблицы `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id_conf`) REFERENCES `conf` (`id_conf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
