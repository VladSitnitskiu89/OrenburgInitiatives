-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 06 2023 г., 13:13
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `orenburginitiatives`
--

-- --------------------------------------------------------

--
-- Структура таблицы `initiatives`
--

CREATE TABLE `initiatives` (
  `id` int(10) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `header` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `initiatives`
--

INSERT INTO `initiatives` (`id`, `state`, `image`, `header`, `description`, `user_id`) VALUES
(1, 'removed', 'f2d212192614c54ef8af8632e6a7d1cb.png', 'sdgd', 'dsfghsd', 1),
(2, 'removed', 'b33be528e62d7488ba2bc7d24da65c2a.png', 'sfgsd', 'sdgsdg', 1),
(3, 'removed', 'f8649af9765252aad8f186c7004d0216.png', 'sfdgsdf', 'sdgfsadgs', 1),
(4, 'removed', '98420bf154132d0b844e4cbae99d18a3.png', 'sfdgsdf', 'sdgfsadgs', 1),
(5, 'removed', '2ae4b9bafbeb6b021f2d7b414697ee5f.png', 'asdas', 'asdas', 1),
(6, 'removed', '24bbd74ac448744b8e8de5df9f245aaf.png', 'asdas', 'asdas', 1),
(7, 'removed', '714848c4e93ab6df344e699392d8d8a3.png', 'asdas', 'asdas', 1),
(8, 'removed', 'c9f4b13bbfed078966d03ce7cdd7ae6e.png', 'dasd', 'asdas', 1),
(9, 'removed', 'd8e008a6ef4988166990ad4812bba4e7.png', 'erftgerd', 'dfgdf', 1),
(10, 'completed', '8b59bbba8873f00de0aa64273888355f.png', 'Посади дерево', 'Благодаря национальному проекту «Экология» у каждого есть возможность посадить дерево. \r\n\r\nСамая масштабная кампания по лесовосстановлению в стране — всероссийская акция «Сохраним лес»: она длится буквально круглый год, начинаясь с теплых весенних дней и заканчиваясь с приходом холодов. Чтобы отправиться на высадку деревьев, достаточно зайти на сайт, выбрать свой регион на интерактивной карте, найти ближайшую точку высадки и написать куратору. \r\nОфициальный сайт акции: сохранимлес.рф. \r\n\r\nЕще одна инициатива по восстановлению лесного фонда — акция «Сад памяти» — стартовала в 2020 году в честь 75-летия Победы в Великой Отечественной войне. \r\n\r\nНа официальном сайте акции садпамяти2022.рф можно не только присоединиться к высадке деревьев, но также рассказать о том, кому вы посвящаете свое дерево и получить электронный сертификат, который будет напоминать вашей семье об этом событии. Каждое посаженное дерево — это вклад в экологическое благополучие, а значит — в наше общее будущее. \r\n\r\nПо нацпроекту «Экология» к 2024 году площадь зеленых насаждений в России будет увеличена на более 1,2 млн га. Благодаря неравнодушию и участию россиян этот результат практически был достигнут уже в конце 2021 года: тогда было восстановлено 1,18 млн га леса. ', 1),
(11, 'completed', 'c119118f8af662a9df37477dab9b2e1c.jpg', 'Ямы на дорогах', 'Яма на дороге, не горит фонарь, не убран снег или столкнулись с другой проблемой – сообщите о ней, и мы доставим это сообщение до ответственного ведомства и проконтролируем решение.', 1),
(18, 'completed', 'd8f979ab87d6a13f23f87f729d477fdb.jpg', 'Реставрация памятников архитектуры', 'Реставрация памятников архитектуры — процесс восстановления и подновление подлинных древних частей памятника архитектуры с учётом его исторического прошлого и аутентичности. Такие работы проводятся специализированными организациями по реставрации, где работает квалифицированный персонал (архитекторы, мастера-реставраторы, руководители работы).\r\nПопытки реставрации культурного наследия известны уже в античный период, в то время это были ремонт или обновление объекта. Сегодня современная реставрация видит своей целью восстановление состояния памятника архитектуры как можно ближе к первоначальному его виду, если есть такая возможность.\r\n\r\n\r\nРеставраторы XIX века часто не столько восстанавливали, сколько домысливали первоначальный облик памятника. При реставрации применялись современные материалы, в особенности портлендский цемент.\r\nВ XIX веке намечается два основных направления архитектурной реставрации — художественная и техническая. Художественная реставрация имела старые и богатые традиции, так как восполнением утрат занимались всегда. В то время как техническая реставрация заключалась в консервации и постоянном уходе за объектом архитектуры. Именно она потеснила художественную реставрацию. Чуть позже появился новый вид реставрационных работ, который назывался «научной реставрацией», где главной целью является минимальное вмешательство.', 1),
(19, 'actual', '5922648460006fb521071b1ad78dcec7.jfif', 'Ремонт и постройка новых школ', 'Уже в конце марта большинство российских школьников отправится на традиционные весенние каникулы перед финальной четвертью этого учебного года. Пока же, несмотря на новую волну COVID-19, образовательные учреждения в регионах, за некоторым исключением, работают очно: там либо не вводили дистант, либо уже успешно вернулись с него из-за снижения уровня заболеваемости. Благодаря нацпроекту «Образование» ученики из самых разных уголков нашей страны посещают красивые и комфортные школы. Портал национальныепроекты.рф рассказывает о том, как в России строят новые современные образовательные учреждения, а также ремонтируют и оснащают всем необходимым уже используемые школьные здания.\r\nОсновная задача нацпроекта «Образование» состоит в том, чтобы обеспечить равный доступ всех детей к качественному обучению, отвечающему последним требованиям. Именно для достижения этой цели строятся новые корпуса школ и создаются новые места для школьников по всей стране. За два года благодаря нацпроекту в России открыли уже 181 школу на 115 тыс. мест.\r\n\r\nКроме того, к началу 2021-2022 учебного года больше восьми тысяч сельских школ были оснащены необходимым оборудованием, а до конца года к ним прибавятся еще 1500. Всего же к 2024 году все 27 тысяч школ в российских селах и деревнях будут оборудованы согласно современным нормам.\r\n\r\nВдобавок к этому в ближайшие пять лет правительство планирует выполнить масштабную федеральную программу капитального ремонта и технического обновления действующих школ: в не', 1),
(20, 'actual', '14ea9b8321fd67be6eb125435adeb272.jpg', 'Почистить город от пыльцы', 'Почему тема так актуальна, да потому, что приблизительно 25% человеческой популяции (среди взрослых и детей) имеют генетическую предрасположенность к развитию в любом возрасте любых аллергических заболеваний и состояний, включая жизнеугрожающие. Поэтому на вопрос некоторых родителей: «Откуда у нас эта напасть, ведь у нас в семье аллергии ни у кого нет»,- можно ответить, что они недостаточно хорошо знают состояние здоровья своих ближайших и отдаленных родственников, а иногда и свое собственное. Законы наследования аллергии таковы, что даже минимальные клинические проявления могут накапливаться и передаваться от поколения к поколению в усиленном виде, причем реализация клинических проявлений аллергии происходит с каждым новым поколением в более раннем возрасте. Пример: у дедушки ребенка по линии мамы в 70 летнем возрасте впервые возник аллергический насморк, у мамы ребенка в 30 лет появился дерматит на стиральный порошок и лекарственная аллергия, у старшего брата ребенка сформировался поллиноз в возрасте 6 лет, а у самого ребенка с 2 лет отмечаются проявления тяжелого атопического дерматита и возможно развитие бронхиальной астмы.\r\n\r\nПри этом «вклад» материнской и отцовской наследственности в формирование аллергических заболеваний у ребенка неравнозначен. Так, если только отец страдает аллергией, риск возникновения подобных заболеваний у ребенка составляет 25-30%; если только мать — 50%; а если оба родителя имеют те или иные проявления аллергии, риск у ребенка повторить их «судь', 1),
(21, 'actual', '0c33497ec290ed957a01afbbf31725b3.jpg', 'Улицы завалены снегом!', 'Заваленные снегом улицы превратились для жителей Северной столицы в обыденность. Утро субботы для горожан не стало исключением.\r\n\r\nОбильные снегопады обрушились на Петербург около недели назад. Однако наступление зимнего сезона снова застало Смольный врасплох.\r\n\r\nСМИ сообщали, что в преддверии холодов власти города на Неве расширили численность снегоуборочной техники. Однако почему-то ее не торопятся выпускать на улицы. Так, 10 декабря утром на дорогах мегаполиса работали менее 300 единиц техники.\r\n\r\nLet It Snow: пока снегоуборочная техника «спит», дороги Петербурга тонут в сугробах\r\nГорожане жалуются, что изо дня в день снег не чистится, а только копится. Водители периодически застревают в километровых пробках, а пешеходы буквально протаптывают себе тропинки на тротуарах. Однако администрация города во главе с губернатором Александром Бегловым просто игнорирует ситуацию.', 1),
(22, 'actual', 'd4f50369f3f3de14ce944f15b2e35d95.jpg', 'Мусорки постоянно переполнены!', 'Часто вижу, как на контейнерной площадке стоят переполненные мусоросборники, мусор и отходы валяются рядом. Почему так? Ведь при систематическом вывозе такого быть не должно. Значит либо контейнеров не хватает, либо они редко вывозятся. В любом случае картина для глаз нерадостная! И кажется, что виноватых нет.\r\n\r\nК счастью, в \"мусорном деле\" виноватые есть всегда и их легко отыскать. Да и закон не только позволяет, но и заставляет это делать. Зоны ответственности строго поделены.', 1),
(23, 'toModerate', '3000781d1cff3a57d78b2c398be03d5f.jpg', 'Нашествие комаров', 'После первого «летнего» дождя жители Москвы сообщили в соцсетях о необычном явлении: к окнам «причалили» сотни мелких жучков. На ум сразу пришли романы Маркеса и прочие описания тропической природы — но в средней полосе такое выглядит как апокалипсис. «МК» выяснил у специалистов, почему такое произошло, чего следует ожидать летом и как можно бороться с нашествием насекомых.\r\n\r\nПосле дождя горожане обнаружили на окнах множество жучков\r\nФОТО: GLOBALLOOKPRESS.COM\r\nОписание очевидцев простое: размер жучков, как сообщают жители «пострадавших» домов - до 2 мм, цвет темный (черно-коричневый), после дождя в середине дня 11 мая летали большими роями и приземлялись на стекла и подоконники. Замечены на юге и юго-западе, а также на северо-востоке Москвы. \r\n\r\nПо характерному виду и поведению насекомых они были опознаны энтомологами как клопы Kleidocerys resedae (наземник березовый). Это насекомое из семейства наземников отряда полужесткокрылых. Обычно эти клопы вылетают летом и в начале осени, подчеркивают ученые.', 1),
(24, 'toModerate', '1ef25b8e6e5b69bee7f3d4faed658527.jpg', 'Реставрация памятника', 'Памятнику совсем уже плохо, пора бы что-нибудь сделать!', 1),
(25, 'toModerate', '49785f341d798e65a436e68151d697ca.jpg', 'Осторожно, сосульки!', 'В зимнее и весеннее время на крышах зданий может скапливаться большое количество снега, а также могут образовываться сосульки, которые достигают значительных размеров. Особенно опасны в настоящее время крыши и карнизы, украшенные «гирляндами» из ледяных сосулек. Свисая с крыш, они угрожают здоровью и жизни людей.\r\n\r\nПадение «остроносой» ледышки на человека чревато, в лучшем случае, увечьями различной степени тяжести. Все зависит от высоты полета и размера сосульки. Известны случаи, когда опасное «украшение» убивало прохожих.\r\nЕжегодно падающие сосульки уносят жизни десятков россиян. Нам только кажется, что сосульки намертво «прирастают» к крышам. На самом деле они готовы упасть в любой момент. Легкая оттепель, ветер и ледышки норовят упасть на головы пешеходов.\r\n\r\nЧтобы избежать несчастных случаев в результате падения сосулек, необходимо быть внимательными, стараться не передвигаться близко к стенам зданий, под балконами. Стоит обходить стороной места возможного падения сосулек или снежных пластов с крыши.\r\n\r\nНаходясь в опасной зоне, человек может получить от падающего снега и сосулек очень тяжелые и опасные травмы и даже погибнуть.\r\n\r\nЧтобы не оказаться в подобной ситуации следует:\r\n\r\nне приближаться к крышам зданий, с которых возможен сход снега, и не позволять находиться в таких местах детям;\r\n\r\nпредупредите об опасности детей. Игра под опасной крышей может закончиться печально;\r\n\r\nпри наличии ограждения, предупреждающих аншлагов (табличек) опасного места, не пытайтесь про', 1),
(26, 'actual', '1fe27ccff482757b1be896862d8ea2c1.jpg', 'Город заполонили бродячие собаки!', 'Российские города заполонили агрессивные бродячие собаки: как работает закон об ответственном обращении с животными на деле\r\n\r\nЗакон действует уже два года, и засилье бродячих псов уже привело к первым жертвам.\r\n\r\nПочти два года в Российской Федерации работает измененный федеральный закон № 498-ФЗ «Об ответственном обращении с животными». Сам закон был создан 27 декабря 2018 года.\r\n\r\nИзменения в законе вступили в силу 1 января 2020 года, они предполагают гуманное отношение к животным. Если кратко, то закон запрещает выбрасывать своих питомцев на улицу, делать ветпроцедуры без обезболивающего (если процедура – болезненная), устраивать бои и, конечно же, запрещает жестокое обращение с животными, в том числе и пропаганду такого обращения.\r\n\r\nА что делать с собаками, которые уже родились вне воли и бегают стаями, пугая прохожих? Закон подразумевает отлов таких животных. Затем их стерилизуют, прививают от бешенства, чипируют и в теории наблюдают за их поведением. Если животное агрессивное, его оставляют в приюте, если же нет – отпускают на волю. За счет стерилизации бродячие животные не плодятся, не увеличивая тем самым популяцию.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `initiative_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `initiative_id`) VALUES
(1, 1, 10),
(2, 1, 7),
(3, 1, 1),
(4, 1, 2),
(5, 1, 3),
(6, 1, 4),
(7, 1, 5),
(8, 1, 6),
(9, 6, 1),
(10, 6, 2),
(11, 6, 10),
(12, 1, 18),
(13, 1, 19),
(14, 1, 20),
(15, 1, 21),
(16, 1, 22),
(17, 3, 18),
(18, 3, 19),
(19, 3, 21);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `birthDate`, `phone`, `address`, `mail`, `password`, `role`) VALUES
(1, 'Владислав Ситницкий', '2001-01-09', 2147483647, 'г. Санкт-Петербург', 'vladsitnitskiu@gmail.com', '$2y$10$w7uawXbgFv5pP0DUiM.jTOIRj9hxXC4IhLPJUkOR1TwYYZeucCF3.', 'admin'),
(3, 'Ситников Владислав Дмитриевич', '2001-01-09', 2147483647, 'г. Дубна', 'vladsitnitskiu2@gmail.com', '$2y$10$8vWe2nPw3TYPC1YyrMJzx.kVIYLJlgmxiaOiOPjupgwkjMBjd/fby', NULL),
(4, 'а а а', '1010-01-01', 2147483647, '12312', 'vladsitnitskiu3@gmail.com', '$2y$10$cXS7vMU5hVpx6JNsYy.3GOFb.YVqkvt1KYwi1/j8/4O.frWcg0GTS', NULL),
(5, 'a a a', '1010-01-01', 2147483647, '12312', 'vladsitnitskiu4@gmail.com', '$2y$10$ddoRirDxZOI2ApcO0iLMxue7z2lQ8.DKWxWK6IdeYbl1ejX3mnNBy', NULL),
(6, 'в в в', '1111-01-01', 2147483647, 'ыфпфывпаф', 'vladsitnitskiu5@gmail.com', '$2y$10$o7hZ2N6ZK8ufSSFtmWIG/u6mtQzdrEafKvxxIRo9XZmgLU7Q9bOea', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `initiatives`
--
ALTER TABLE `initiatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `initiative_id` (`initiative_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `initiatives`
--
ALTER TABLE `initiatives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `initiatives`
--
ALTER TABLE `initiatives`
  ADD CONSTRAINT `initiatives_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`initiative_id`) REFERENCES `initiatives` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
