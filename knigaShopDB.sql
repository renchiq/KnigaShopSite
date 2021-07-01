-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2021 г., 03:12
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int NOT NULL,
  `nazvanie` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `god_izd` varchar(255) DEFAULT NULL,
  `cena` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `oblozh` varchar(255) DEFAULT NULL,
  `izd_id` int NOT NULL,
  `stranitsy` varchar(255) DEFAULT NULL,
  `tirazh` varchar(255) DEFAULT NULL,
  `ves` varchar(255) DEFAULT NULL,
  `vozrast` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(1, 'Купол зонта', 15, '2020', '594', 'Бенцианов М.', '20.5 x 13.6 x 0.8', '978-5-6043669-6-7', 'Твердая бумажная', 1, '80', '400', '210', '16+', '/template/images/1book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(2, 'Я не люблю…', 15, '2021', '203', 'Высоцкий В.', '18 x 11.5 x 2.8', '978-5-17-136252-2', 'Мягкая бумажная', 2, '416', '4000', '250', '16+', '/template/images/2book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(4, 'Непарадный Петербург: наследие промышленной архитектуры', 28, '2021', '1188', 'Штиглиц М.', '24.2 x 17 x 2.5', '978-5-89826-596-0', 'Твердая бумажная', 3, '368', '300', '800', '0+', '/template/images/4book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(5, 'Где бьется сердце Петербурга? Доходные дома в историях и фотографиях', 28, '2021', '1540', 'Пода В.', '24.7 x 19.3 x 3.3', '978-5-04-114213-1', 'Твердая бумажная', 4, '432', '3000', '1130', '16+', '/template/images/5book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(19, 'Книжка', 1, '11', '1', '1', '1', '1', 'Мягкая бумажная', 1, '1', '1', '1', '0+', '/template/images/19book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(28, 'Буратино', 18, '1953', '9999', ' А. Н. Толстой', '20.5 x 13.6 x 0.8', '978-5-17-136252-2', 'Мягкая бумажная', 0, '54', '3333', '1000', '3+', '/template/images/28book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(29, 'БОЕВЫЕ ПСЫ НЕ ПЛЯШУТ', 15, '2005', '1050', 'ПЕРЕС-РЕВЕРТЕ А.', '13.5 x 16 x 0.8', '978-5-17-136252-2', 'Мягкая бумажная', 4, '312', '300', '100', '18+', '/template/images/29book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(35, 'Сохраним планету! Сократить, использовать повторно и переработать', 20, ' 2021', '495', 'Годжерли Л.', ' 28.8 x 21.4 x 1', ' 978-5-17-136430-4', 'Твердая бумажная', 2, ' 48', '2000', '440', '6+', '/template/images/35book.jpg');
INSERT INTO `book` (`id`, `nazvanie`, `category_id`, `god_izd`, `cena`, `author`, `format`, `isbn`, `oblozh`, `izd_id`, `stranitsy`, `tirazh`, `ves`, `vozrast`, `image`) VALUES(36, 'Буратино12', 48, '2005', '1234', ' А. Н. Толстой', '', '', 'Мягкая бумажная', 4, '', '', '', '0+', '/template/images/36book.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(1, 'Художественная литература', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(2, 'Книги для детей', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(3, 'Книги на иностранных языках', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(4, 'Деловая литература', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(5, 'Образование', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(6, 'Искусство', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(7, 'Философия и религия', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(8, 'Общество', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(9, 'Наука и техника', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(10, 'Красота. Здоровье. Спорт', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(11, 'Увлечения', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(12, 'Психология', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(13, 'Эзотерика', 0);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(15, 'Поэзия', 1);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(16, 'Романтика', 1);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(17, 'Фольклор', 1);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(18, 'Приключения', 1);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(19, 'Подготовка к школе', 5);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(20, 'Начальная школа', 5);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(21, 'Педагогика', 5);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(22, 'История и теория психологии', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(23, 'Общая психология', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(24, 'Детская психология', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(25, 'Социальная психология', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(26, 'Прикладная отраслевая психология', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(27, 'История искусств. Искусствоведение', 6);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(28, 'Архитектура', 6);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(29, 'Экономика. Экономическая теория', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(30, 'Бухгалтерский и налоговый учет. Аудит', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(31, 'Управление финансами', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(32, 'Менеджмент', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(33, 'Маркетинг. Реклама', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(34, 'Бизнес. Торговля', 4);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(35, 'На английском языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(36, 'На немецком языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(37, 'На французском языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(38, 'На испанском языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(39, 'На итальянском языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(40, 'На прочих языках', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(41, 'На армянском языке', 3);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(42, 'Здоровый образ жизни. Фитнес', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(43, 'Спорт. Самооборона', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(44, 'Популярная медицина', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(45, 'Внешность. Имидж. Этикет', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(46, 'Любовь. Эротика. Секс', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(47, 'Прочие издания', 10);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(48, 'Психоанализ', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(49, 'Практическая психология. Психотерапия', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(50, 'Популярная литература по психологии', 12);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(51, 'Теория и история эзотерических учений', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(52, 'Астрология. Гороскопы', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(53, 'Гадания. Толкование снов. Толкование имени', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(54, 'Предсказания. Пророки. Ченнелинг', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(55, 'Магия. Колдовство. Суеверия', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(56, 'Парапсихология. Экстрасенсорика', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(57, 'Таинственные явления. Уфология', 13);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(58, 'Технические науки', 9);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(59, 'Прикладные науки. Медицина', 9);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(60, 'Естественные науки. Математика', 9);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(61, 'Гуманитарные науки', 9);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(62, 'Мой дом', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(63, 'Рукоделие. Ремесла', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(64, 'Кулинария', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(65, 'Досуг. Хобби', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(66, 'Туризм', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(67, 'Личный транспорт', 11);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(68, 'Общественные науки в целом', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(69, 'Культура', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(70, 'История', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(71, 'Военное дело', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(72, 'Право. Юридические науки', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(73, 'Политика. Социология', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(74, 'Демография. Статистика', 8);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(75, 'Философия', 7);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(76, 'Религия', 7);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(77, 'Детская художественная литература', 2);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(78, 'Детская научно-популярная литература', 2);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(79, 'Детское творчество и досуг', 2);
INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES(80, 'Детская религиозная литература', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(1, 'login', '5f4dcc3b5aa765d61d8327deb882cf99', 'Серега Гвоздь', 'serega333@google.com', '+79174664797', 1);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(2, 'renchiq', '9650f2ca8d5a46ac4dd8774d7e14d188', 'Rinat Galyamshin', 'risky0@mail.ru', '+79174664797', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(3, 'klemchik111', '8e39b3d6d618121245952de9496b442c', 'Клементин', 'emael@emael.er', '', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(4, 'ben', 'e10adc3949ba59abbe56e057f20f883e', 'Бенедикт', 'ben@ben.ben', NULL, 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(5, 'doshik', '69e3705dab6416b7f22d04dee275ae90', 'Дошман', 'd0shman@doshman.chik', '', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(6, 'pawl', '5079f40d98dab0a2353dc9165b85484c', 'Поул', 'pawl@pawl.pawl', '+77777777777', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(7, 'vor_v_zakone', 'e10adc3949ba59abbe56e057f20f883e', 'Bandittt', 'kitty@cat.dog', '', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(8, 'jokyboy', '0bf5d3fb6a9e6bb090fdb91f9fda5edb', 'boboba', 'boboba@boboba.boboba', NULL, 1);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(9, 'login', '526c1cfa45160419181a530ea4ba3d01', 'Rinat Galyamshin', 'risky00@mail.ru', '+79174664797', 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(10, 'asdfsafdsfg', 'adca4977cb42016071530fb8888105c7', 'fhdhfdh', 'a@a.a', NULL, 0);
INSERT INTO `customer` (`id`, `login`, `pass`, `name`, `email`, `phone`, `is_admin`) VALUES(11, 'rinat', '6469181db32a79f52dbd27f90baf0c21', 'Ринат', 'risky0111@mail.ru', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `izdatelstvo`
--

CREATE TABLE `izdatelstvo` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `izdatelstvo`
--

INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(0, 'Неизвестно');
INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(1, 'Просвещение');
INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(2, 'АСТ');
INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(3, 'Прогресс-традиция');
INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(4, 'Бомбора');
INSERT INTO `izdatelstvo` (`id`, `name`) VALUES(5, 'Ленанд');

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `book_list` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `customer_id`, `customer_name`, `address`, `phone`, `book_list`, `comment`, `payment_type`, `order_date`) VALUES(1, 8, 'Rinat Galyamshin', 'asdsadsa', '+79174664797', '{\"1\": 6}', 'cccccc', 'Картой онлайн на сайте', '2021-06-06 13:00:09');
INSERT INTO `purchase` (`id`, `customer_id`, `customer_name`, `address`, `phone`, `book_list`, `comment`, `payment_type`, `order_date`) VALUES(2, 9, 'Rinat Galyamshin', 'Туда-сюда', '+79174664797', '{\"1\": 1, \"2\": 2, \"4\": 3, \"21\": 1}', '', 'Наличными при получении', '2021-06-06 22:54:56');
INSERT INTO `purchase` (`id`, `customer_id`, `customer_name`, `address`, `phone`, `book_list`, `comment`, `payment_type`, `order_date`) VALUES(3, 9, 'Rinat Galyamshin', 'Сюда-туда', '+79174664797', '{\"1\": 1, \"2\": 1, \"4\": 1}', '', 'Картой при получении', '2021-06-06 22:56:22');
INSERT INTO `purchase` (`id`, `customer_id`, `customer_name`, `address`, `phone`, `book_list`, `comment`, `payment_type`, `order_date`) VALUES(4, 1, 'Серега Гвоздь', 'Москва', '+79173333333', '{\"1\":4,\"2\":3,\"4\":2,\"5\":3,\"19\":2}', 'Везите долго очень', 'Картой при получении', '2021-06-08 02:09:14');
INSERT INTO `purchase` (`id`, `customer_id`, `customer_name`, `address`, `phone`, `book_list`, `comment`, `payment_type`, `order_date`) VALUES(5, 11, 'Ринат', 'Москва', '+79174664797', '{\"28\":6}', 'Везите очень быстро', 'Картой при получении', '2021-06-08 11:10:31');

-- --------------------------------------------------------

--
-- Структура таблицы `saved_carts`
--

CREATE TABLE `saved_carts` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `book_list` varchar(255) NOT NULL,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `saved_carts`
--

INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(1, 3, '{\"2\": 4, \"5\": 1}', '2021-06-05 13:31:59');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(4, 1, '{\"1\": 1, \"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:09:12');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(5, 1, '{\"1\": 1, \"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:13:17');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(6, 1, '{\"1\": 1, \"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:14:00');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(7, 1, '{\"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:14:24');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(8, 1, '{\"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:16:16');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(9, 1, '{\"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:17:03');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(10, 1, '{\"2\": 2, \"4\": 1, \"6\": 2}', '2021-06-05 14:20:20');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(11, 1, '{\"2\": 4, \"4\": 4, \"5\": 3, \"6\": 2}', '2021-06-05 16:55:49');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(12, 1, '{\"2\": 4, \"4\": 4, \"5\": 3, \"6\": 2}', '2021-06-05 16:56:03');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(13, 6, '{\"1\": 4, \"2\": 2, \"4\": 2, \"5\": 2}', '2021-06-05 16:59:08');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(14, 6, '{\"1\": 4, \"2\": 2, \"4\": 2, \"5\": 2}', '2021-06-05 18:08:16');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(15, 6, '{\"1\": 4, \"2\": 2, \"4\": 2, \"5\": 2}', '2021-06-05 18:08:32');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(16, 1, '{\"2\": 4, \"4\": 4, \"5\": 3, \"6\": 2}', '2021-06-05 18:08:40');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(17, 5, '{\"1\": 3, \"2\": 5, \"4\": 3, \"5\": 2, \"6\": 6}', '2021-06-05 18:19:30');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(18, 5, '{\"1\": 3, \"2\": 5, \"4\": 3, \"5\": 2, \"6\": 6}', '2021-06-05 19:39:24');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(19, 8, '{\"1\": 1, \"4\": 1, \"19\": 1, \"29\": 1}', '2021-06-06 17:31:02');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(20, 1, '{\"2\": 4, \"4\": 4, \"5\": 3, \"6\": 2}', '2021-06-06 19:40:31');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(21, 1, '{\"1\": 5, \"2\": 2, \"5\": 3, \"21\": 1, \"28\": 1}', '2021-06-06 19:50:02');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(22, 1, '{\"1\": 5, \"2\": 2, \"5\": 3, \"21\": 1, \"28\": 1}', '2021-06-06 21:11:52');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(23, 1, '{\"1\": 5, \"2\": 2, \"5\": 3, \"21\": 1, \"28\": 1}', '2021-06-06 21:35:41');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(24, 1, '{\"1\": 5, \"2\": 2, \"5\": 3, \"21\": 1, \"28\": 1}', '2021-06-06 22:31:30');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(25, 10, '{\"1\":19,\"2\":12,\"4\":3,\"5\":34,\"28\":5}', '2021-06-07 20:27:37');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(26, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-07 22:31:18');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(27, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:02:42');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(28, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:03:30');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(29, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:03:41');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(30, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:04:27');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(31, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:05:48');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(32, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:05:53');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(33, 1, '{\"1\":14,\"2\":11,\"5\":8,\"29\":3,\"35\":4,\"28\":1}', '2021-06-08 00:06:26');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(34, 1, '{\"1\":4,\"2\":3,\"4\":2,\"5\":3,\"19\":2}', '2021-06-08 00:36:25');
INSERT INTO `saved_carts` (`id`, `customer_id`, `book_list`, `add_date`) VALUES(35, 1, '{\"4\":5,\"29\":4,\"36\":1}', '2021-06-08 11:01:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_id_uindex` (`id`),
  ADD KEY `book_izdatelstvo_id_fk` (`izd_id`),
  ADD KEY `book_category_id_fk` (`category_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id_uindex` (`id`);

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id_uindex` (`id`);

--
-- Индексы таблицы `izdatelstvo`
--
ALTER TABLE `izdatelstvo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `izdatelstvo_id_uindex` (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id_uindex` (`id`),
  ADD KEY `order_customer_id_fk` (`customer_id`);

--
-- Индексы таблицы `saved_carts`
--
ALTER TABLE `saved_carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `saved_carts_id_uindex` (`id`),
  ADD KEY `saved_carts_customer_id_fk` (`customer_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `izdatelstvo`
--
ALTER TABLE `izdatelstvo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `saved_carts`
--
ALTER TABLE `saved_carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `book_izdatelstvo_id_fk` FOREIGN KEY (`izd_id`) REFERENCES `izdatelstvo` (`id`);

--
-- Ограничения внешнего ключа таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `order_customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Ограничения внешнего ключа таблицы `saved_carts`
--
ALTER TABLE `saved_carts`
  ADD CONSTRAINT `saved_carts_customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
