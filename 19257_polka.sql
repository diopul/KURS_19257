-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Ноя 30 2022 г., 05:36
-- Версия сервера: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `19257_polka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Oplata`
--

CREATE TABLE `Oplata` (
  `oplataid` int(11) NOT NULL,
  `card_nomber` int(11) DEFAULT NULL,
  `card_validity_date` int(11) DEFAULT NULL,
  `security_code` int(11) DEFAULT NULL,
  `data_oplati` date DEFAULT NULL,
  `time_oplati` time DEFAULT NULL,
  `Product_productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `Product`
--

CREATE TABLE `Product` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `product_specifications` varchar(99) DEFAULT NULL,
  `product_description` varchar(99) DEFAULT NULL,
  `product_price` varchar(45) DEFAULT NULL,
  `User_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `userid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `Login` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateofBerth` date DEFAULT NULL,
  `Region` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`userid`, `name`, `surname`, `Login`, `password`, `dateofBerth`, `Region`, `address`) VALUES
(1, NULL, NULL, 'qweqwe', '$2y$10$CcCjQ2SEHHMjiim7ta6JvupGP9QqsqWcPYzR3npomjYTwza0uRj56', NULL, NULL, 'qweqwe@mail.ru'),
(2, NULL, NULL, 'rtyrty', '$2y$10$s/y4PwbKBnTXRHv6sBeGL.R4HOYOKXrhfIzS6oR4u9SYwr.g8psYK', NULL, NULL, 'rtyrty@mail.ru'),
(3, NULL, NULL, 'zxc', '$2y$10$ZHmpzDbLss.ySpLW9i8iEumQPZgVbiSoYaQPb/LfKTCMDrH1DN6.y', NULL, NULL, 'zxc@mail.ru'),
(4, NULL, NULL, 'vbnvbn', '$2y$10$bdrVrkp2KPEc/fMGb2AWQe.qhUiHGLVQUqUqadYap3YsanVmURD0W', NULL, NULL, 'vbnvbn@mail.ru'),
(5, NULL, NULL, 'iopiop', '$2y$10$nIUA1e8mFqMcT8XtdgYCEeDYu4LXOmRpSXDzN73miQQ8V6BVlVbla', NULL, NULL, 'iopiop@mail.ru'),
(6, NULL, NULL, 'tyu', '$2y$10$h4F8bedLIyAu8.i8gcC27.W0XebHpvXnaBQx9tJ96Vn4XaozOQ9S2', NULL, NULL, 'tyutyu@mail.ru'),
(7, NULL, NULL, 'tyu1', '$2y$10$R3uaJuazfHtEMmAsEEm9E.mean7GmpxChGuSEupAhHKdLUp3GINkW', NULL, NULL, 'tyutyu1@mail.ru'),
(8, NULL, NULL, 'dfv', '$2y$10$rc2Wv/wNccuHeaXp8KsJuOJm4sMEDJpcjM6qxfRQgzqhCfhpg8sC2', NULL, NULL, 'dfvdfv@mail.ru'),
(9, NULL, NULL, '111111', '$2y$10$/DwMu3bi4wMf6f6S8UuG5OfzDIXoXqu/0gmfZTeSVeAABYJx7I4DG', NULL, NULL, '11111111@mail.ru'),
(10, NULL, NULL, 'rty', '$2y$10$zVqCWMSdCjG5e.0hojYhDekGdOjZMChuc6ckQ4jKVfbN9meckIqa.', NULL, NULL, 'rty@mail.ru'),
(11, NULL, NULL, 'xsa', '$2y$10$LK2yg5hRP8hSrJ7.yS1jv.blZRhmhYocaKvucFN5BGfRFT97z6XH.', NULL, NULL, 'xsa@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Oplata`
--
ALTER TABLE `Oplata`
  ADD PRIMARY KEY (`oplataid`,`Product_productid`),
  ADD KEY `fk_Oplata_Product1_idx` (`Product_productid`);

--
-- Индексы таблицы `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `User_userid` (`User_userid`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Oplata`
--
ALTER TABLE `Oplata`
  ADD CONSTRAINT `fk_Oplata_Product1` FOREIGN KEY (`Product_productid`) REFERENCES `Product` (`productid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`User_userid`) REFERENCES `User` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
