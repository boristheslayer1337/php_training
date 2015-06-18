-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Чрв 18 2015 р., 16:49
-- Версія сервера: 5.6.13
-- Версія PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `db`
--
CREATE DATABASE IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db`;

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `heading`, `intro`, `content`) VALUES
(1, 'Post 1\r\n', 'intro of post 1', 'Content of post 1'),
(2, 'Post 2', 'intro of post 2', 'Content of post 2');
--
-- База даних: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
