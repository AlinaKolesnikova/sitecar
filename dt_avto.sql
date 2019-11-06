-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2019 г., 17:56
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dt_avto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tb_avtom`
--

CREATE TABLE `tb_avtom` (
  `id` int(11) NOT NULL,
  `id_kompany` int(11) NOT NULL,
  `nameavto` varchar(50) NOT NULL,
  `texopic` text NOT NULL,
  `year` year(4) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tb_avtom`
--

INSERT INTO `tb_avtom` (`id`, `id_kompany`, `nameavto`, `texopic`, `year`, `foto`) VALUES
(1, 1, 'Ford Mondeo ', 'Комплектация 2.0 EcoBoost AT Titanium Plus; Марка кузова CD391; Цена 1 799 000;\r\n', 2014, 'https://www.firstvehicleleasing.co.uk/blog/wp-content/uploads/2014/12/First-all-new-Mondeo-Hybrids-leave-the-assembly-line-60868.jpg'),
(2, 2, 'Audi A7 ', ' Тип кузова  купе (5 дв.)Объем 2773 см3 Мощность  204 л.с.\r\n', 2014, 'https://japan-cars.su/uploads/posts/2018-05/1527182254_2016_audi_a7_sedan_prestige-quattro_rq_oem_2_1280.jpg'),
(3, 3, 'Toyota Crown ', 'Объем 2.0 л Мощность 235 л.с.Коробка автомат Тип двигателя бензин\r\n', 2016, 'http://otzyvy-avtovladelcev.ru/img/auto-body-image/6612/107030.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tb_kompany`
--

CREATE TABLE `tb_kompany` (
  `id` int(11) NOT NULL,
  `namekomp` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tb_kompany`
--

INSERT INTO `tb_kompany` (`id`, `namekomp`, `country`) VALUES
(1, 'Ford', 'Америка'),
(2, 'Volkswagen', 'Германия'),
(3, 'Toyota', 'Япония');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tb_avtom`
--
ALTER TABLE `tb_avtom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kompany` (`id_kompany`);

--
-- Индексы таблицы `tb_kompany`
--
ALTER TABLE `tb_kompany`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tb_avtom`
--
ALTER TABLE `tb_avtom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tb_kompany`
--
ALTER TABLE `tb_kompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tb_avtom`
--
ALTER TABLE `tb_avtom`
  ADD CONSTRAINT `tb_avtom_ibfk_1` FOREIGN KEY (`id_kompany`) REFERENCES `tb_kompany` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
