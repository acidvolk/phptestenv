CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testdb`;

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` char(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blacklist` (`id`, `phone`, `description`) VALUES
(1, '+380661234567 ', 'testphone1'),
(2, '+380991234567 ', 'телефон 2'),
(3, '+380677654321', 'Телефон 3');


ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

