-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 07 2025 г., 20:03
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `publishing_house`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `img_path` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `magazine_id` int(11) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `img_path`, `name`, `magazine_id`, `text`, `author`, `year`) VALUES
(1, 'images/articles/lit1.jpg', 'Возрождение интереса к русской классике', 1, 'Анализ тенденций в современном книгоиздании и рост интереса к произведениям XIX века.', 'Анна Петрова', '2022'),
(2, 'images/articles/lit2.jpg', 'Интервью с лауреатом премии “Большая книга”', 1, 'Беседа с писателем о современном литературном процессе и вдохновении.', 'Игорь Смирнов', '2024'),
(3, 'images/articles/lit3.jpg', 'Как выбрать современного автора', 1, 'Рекомендации критиков и редакторов издательства ЭКСМО.', 'Мария Соколова', '2025'),
(4, 'images/articles/lit4.jpg', 'Будущее бумажной книги', 1, 'Размышления о роли печатных изданий в цифровую эпоху.', 'Виктор Андреев', '2022'),
(5, 'images/articles/sci1.jpg', 'Нейросети и искусство письма', 2, 'Как технологии искусственного интеллекта помогают создавать литературные тексты.', 'Дмитрий Лебедев', '2024'),
(6, 'images/articles/sci2.jpg', 'Издательские технологии будущего', 2, 'Современные способы печати и цифровые платформы для публикаций.', 'Александр Кузнецов', '2025'),
(7, 'images/articles/sci3.jpg', 'Чтение как когнитивная тренировка', 2, 'Психологи объясняют, почему регулярное чтение повышает интеллект.', 'Ольга Чернова', '2023'),
(8, 'images/articles/sci4.jpg', 'Научно-популярные журналы: возвращение интерес', 2, 'Аналитика продаж научных изданий в 2020–2025 годах.', 'Евгений Павлов', '2025'),
(9, 'images/articles/auth1.jpg', 'Как издать свою первую книгу', 3, 'Пошаговая инструкция для начинающих авторов от издательского эксперта.', 'Светлана Романова', '2025'),
(10, 'images/articles/auth2.jpg', 'Роль редактора в создании бестселлера\'', 3, 'Опыт профессиональных редакторов ЭКСМО.', 'Максим Орлов', '2023'),
(11, 'images/articles/auth3.jpg', 'Самоиздание: мифы и реальность', 3, 'Сравнение традиционного и независимого издания книг.', 'Дарья Федорова', '2024'),
(12, 'images/articles/auth4.jpg', 'Как написать книгу, которую захотят читать', 3, 'Советы по структуре и стилистике от известных писателей.', 'Алексей Морозов', '2022'),
(13, 'images/articles/cult1.jpg', 'Иллюстрации в книгах XXI века', 4, 'Как визуальное оформление влияет на восприятие текста.', 'Юлия Белова', '2024'),
(14, 'images/articles/cult2.jpg', 'Книжные выставки России и Европы', 4, 'Обзор крупнейших книжных ярмарок и участие российских издательств.', 'Татьяна Иванова', '2024'),
(15, 'images/articles/cult3.jpg', 'Музыка и литература: диалог искусств', 4, 'Как композиторы вдохновляются прозой и поэзией.', 'Илья Сафонов', '2022'),
(16, 'images/articles/cult4.jpg', 'Коллекционные издания: мода или инвестиция?', 4, 'Почему люди покупают дорогие издания в эпоху электронных книг.', 'Оксана Воронова', '2025'),
(17, 'images/articles/young1.jpg', 'Лучшие книги для подростков 2025 года', 5, 'Обзор новинок подростковой литературы.', 'Марина Тарасова', '2025'),
(18, 'images/articles/young2.jpg', 'Как приучить ребёнка к чтению', 5, 'Практические советы родителей и педагогов.', 'Ирина Беляева', '2025'),
(19, 'images/articles/young3.jpg', 'Комиксы как инструмент развития мышления', 5, 'Почему визуальные истории становятся частью образования.', 'Сергей Криволапов', '2022'),
(20, 'images/articles/young4.jpg', 'Чтение вслух: новая семейная традиция', 5, 'Как совместное чтение укрепляет отношения и развивает речь.', 'Екатерина Парших', '2022');

-- --------------------------------------------------------

--
-- Структура таблицы `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `magazine`
--

INSERT INTO `magazine` (`id`, `name`) VALUES
(1, 'Литературный мир'),
(2, 'Наука и жизнь'),
(3, 'Современный автор'),
(4, 'Культура и искусство'),
(5, 'Молодой читатель');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `magazine_id` (`magazine_id`);

--
-- Индексы таблицы `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`magazine_id`) REFERENCES `magazine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
