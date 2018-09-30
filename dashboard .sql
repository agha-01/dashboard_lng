-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 30 2018 г., 20:59
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dashboard`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `r_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `save_me` int(1) NOT NULL,
  `giris` datetime NOT NULL,
  `cixis` datetime NOT NULL,
  `lng` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `sname`, `email`, `password`, `r_date`, `status`, `save_me`, `giris`, `cixis`, `lng`) VALUES
(33, 'Aghaa', 'Murthuzova', 'agaverdi0123@mail.ru', 'c72f5359811af711f29b1fac7150042f', '2018-08-22 11:33:53', 1, 1, '2018-09-27 13:54:23', '2018-09-26 21:16:00', 'az'),
(38, 'Aghaa', 'Murthuzov', 'aga@mail.ru', '0144712dd81be0c3d9724f5e56ce6685', '2018-09-14 01:37:38', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'az');

-- --------------------------------------------------------

--
-- Структура таблицы `elanlar`
--

CREATE TABLE `elanlar` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `basliq` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `tarix` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `lng` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `elanlar`
--

INSERT INTO `elanlar` (`id`, `uname`, `sname`, `basliq`, `text`, `image`, `tarix`, `status`, `lng`) VALUES
(1, 'Aghaverd', 'Murthuzov', 'Salamm', '                                                                                                                                               Diqqət! Müəllif hüquqları CrimeTimeRu kanalı tərəfindən qorunur. Müəllifin icazəsi olmadan başqa kanala yüklənən video və səs yazıları xəbərdarlıq olmadan şikayət olunacaq. Bu isə kanalınızın bağlanmağına səbəb ola bilər.                                                                                                                                                                                                                   ', 'images/uploads/68077228.c3000.jpg   ', '2018-08-23 00:40:45', 1, 'az'),
(2, 'agha', '', 'salalaldkmckcdk', 'textextetdgxdh', 'images/uploads/68077228.c3000.jpg', '0000-00-00 00:00:00', 2, 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `name`) VALUES
(1, 'Az'),
(2, 'Ru'),
(3, 'En\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `movzu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mesaj`
--

INSERT INTO `mesaj` (`id`, `name`, `lastname`, `email`, `text`, `movzu`) VALUES
(2, 'agha', 'Murthuzov', 'aghaverdi@maul.ru', 'Salam aleykum', 'Salamlasma');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `basliq` text NOT NULL,
  `text` text NOT NULL,
  `tarix` datetime NOT NULL,
  `baxis` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `kate` tinyint(1) NOT NULL,
  `lng` varchar(4) NOT NULL,
  `n_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `basliq`, `text`, `tarix`, `baxis`, `status`, `kate`, `lng`, `n_id`) VALUES
(15, 'images/uploads/373043246.c3000.jpg', 'donqiuli', '                                                                                                                        sssadaass                           aaa   Donqiliiii                                                                                                                                                                                                                                                                                                                ', '2018-09-08 01:20:12', 0, 1, 11, 'az', 0),
(16, 'images/uploads/862701538.c3000.jpg', 'agaliiiss', '                                                                                                                                                                                    Salam   sasxa                                                                                                                                                                                 ', '0000-00-00 00:00:00', 0, 1, 9, 'az', 0),
(17, 'images/uploads/1148819649.c300.JPG', 'pjfh', '                              Salam aleykum                              ', '2018-09-14 12:21:19', 0, 1, 3, 'az', 0),
(18, 'images/uploads/373043246.c3000.jpg', 'nodd', 'birinci tercumesi', '2018-09-18 00:00:00', 0, 2, 0, 'en', 0),
(31, 'images/uploads/312970922.Screenshot_3.jpg', 'basligi', 'texti                                                            te                                                            ', '2018-09-25 08:49:14', 0, 1, 3, 'az', 0),
(32, 'images/uploads/768634131.meadnflag.png', 'no ad', '                              russian text                              ', '2018-09-25 08:49:14', 0, 2, 3, 'ru', 31),
(33, 'images/uploads/312970922.Screenshot_3.jpg', 'adio', '                              simle ex                              ', '2018-09-25 08:49:14', 0, 1, 3, 'en', 31),
(37, 'images/uploads/956855009.c3000.jpg', 'Azerbaycan', 'Azercan xeberi', '2018-09-27 12:06:03', 0, 1, 1, 'az', 0),
(38, 'images/uploads/956855009.c3000.jpg', 'Rus Xeberi', 'Rusiya xeberi', '2018-09-27 12:06:03', 0, 1, 1, 'ru', 37),
(39, 'images/uploads/956855009.c3000.jpg', 'Ingilis xeberi', 'Ingilis xeberi', '2018-09-27 12:06:03', 0, 1, 1, 'en', 37);

-- --------------------------------------------------------

--
-- Структура таблицы `order_pages`
--

CREATE TABLE `order_pages` (
  `id` int(2) NOT NULL,
  `admin_id` int(2) NOT NULL,
  `page_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_pages`
--

INSERT INTO `order_pages` (`id`, `admin_id`, `page_id`) VALUES
(12, 35, 2),
(13, 35, 3),
(14, 37, 2),
(15, 37, 3),
(16, 37, 4),
(17, 36, 2),
(20, 33, 1),
(21, 33, 2),
(22, 33, 3),
(23, 33, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_id` varchar(3) NOT NULL,
  `s_id` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `l_id`, `s_id`, `url`, `type`) VALUES
(1, 'adminler', 'az', 0, 'adminlist/', 0),
(2, 'xeberler', 'az', 0, 'news/', 0),
(3, 'istifadeciler', 'az', 0, 'userlist/', 0),
(4, 'elanlar', 'az', 0, 'elanlar/', 0),
(5, 'Admins\r\n', 'en', 0, 'adminlist/', 0),
(6, 'News', 'en', 0, 'news/', 0),
(7, 'Users', 'en', 0, 'userlist/', 0),
(8, 'Advertisements', 'en', 0, 'elanlar/', 0),
(9, 'Hamısı', 'az', 2, 'news/', 3),
(10, 'Aktiv', 'az', 2, 'news/', 1),
(11, 'Passiv', 'az', 2, 'news/', 2),
(13, 'All', 'en', 6, 'news/', 3),
(14, 'Active', 'en', 6, 'news/', 1),
(15, 'Passiv', 'en', 6, 'news/', 2),
(17, 'Aktiv', 'az', 3, 'userlist/', 1),
(18, 'Passiv', 'az', 3, 'userlist/', 2),
(19, 'Hamsi', 'az', 3, 'userlist/', 3),
(20, 'Active', 'en', 7, 'userlist/', 1),
(21, 'Passiv', 'en', 7, 'userlist/', 2),
(22, 'All', 'en', 7, 'userlist/', 3),
(23, 'Aktiv', 'az', 4, 'elanlar/', 1),
(24, 'Passiv', 'az', 4, 'elanlar/', 2),
(25, 'Hamsi', 'az', 4, 'elanlar/', 3),
(35, 'Active', 'en', 8, 'elanlar/', 1),
(41, 'Passiv', 'en', 8, 'elanlar/', 2),
(42, 'all', 'en', 8, 'elanlar/', 3),
(43, 'админы', 'ru', 0, 'adminlist/', 0),
(44, 'новости', 'ru', 0, 'news/', 0),
(45, 'пользователи', 'ru', 0, 'userlist/', 0),
(46, 'Объявления', 'ru', 0, 'elanlar/', 0),
(47, 'активный', 'ru', 44, 'news/', 1),
(48, 'пассивный', 'ru', 44, 'news/', 2),
(49, 'все', 'ru', 44, 'news/', 3),
(50, 'активный', 'ru', 45, 'userlist/', 1),
(51, 'пассивный', 'ru', 45, 'userlist/', 2),
(52, 'все', 'ru', 45, 'userlist/', 3),
(53, 'активный', 'ru', 46, 'elanlar/', 1),
(54, 'пассивный', 'ru', 46, 'elanlar/', 2),
(55, 'все', 'ru', 46, 'elanlar/', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `b_day` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL,
  `confirm` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `b_day`, `email`, `phone`, `password`, `image`, `gender`, `reg_date`, `confirm`, `status`) VALUES
(1, 'Aghaverdi', 'murthuzov', '1996-08-01', 'agaverdi0123@mail.ru', '0554387880', 'c72f5359811af711f29b1fac7150042f', 'images/uploads/475458813.c3000.jpg', 'kisi', '2018-08-22 00:00:00', 1, 1),
(2, 'agha', '', '0000-00-00', '', '', '', 'images/uploads/475458813.c3000.jpg', '', '0000-00-00 00:00:00', 0, 2),
(3, 'Agha Murtuzov', 'donqili', '1996-08-01', 'agaverdi0123@mail.ru', '055', '', 'images/uploads/475458813.c3000.jpg', 'kisi', '0000-00-00 00:00:00', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `elanlar`
--
ALTER TABLE `elanlar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_pages`
--
ALTER TABLE `order_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `elanlar`
--
ALTER TABLE `elanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `order_pages`
--
ALTER TABLE `order_pages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
