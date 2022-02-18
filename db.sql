SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `adress_recipient` (
  `id_adress_recipient` int(11) NOT NULL,
  `recipient_city` varchar(45) NOT NULL,
  `recipient_street` varchar(45) NOT NULL,
  `recipient_house` int(11) NOT NULL,
  `recipient_flat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `adress_recipient` (`id_adress_recipient`, `recipient_city`, `recipient_street`, `recipient_house`, `recipient_flat`) VALUES
(14, 'Город2', 'Улица2', 2, 2),
(16, 'Город1', 'Улица33', 2, 1),
(17, 'Город1', 'Улица2', 1, 1),
(18, 'Город1', 'Улица2', 1, 2),
(19, 'Москва', 'Улица333', 1, 1),
(20, 'Саратов', 'Улица56', 1, 1);

CREATE TABLE `adress_sender` (
  `id_adress_sender` int(11) NOT NULL,
  `sender_city` varchar(45) NOT NULL,
  `sender_street` varchar(45) NOT NULL,
  `sender_house` int(11) NOT NULL,
  `sender_flat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `adress_sender` (`id_adress_sender`, `sender_city`, `sender_street`, `sender_house`, `sender_flat`) VALUES
(14, 'Город', 'Улица', 1, 1),
(15, 'Город4', 'Улица4', 1, 1),
(16, 'Город2', 'Улица22', 1, 1),
(17, 'Город4', 'Улица1', 1, 1),
(18, 'Москва', 'Каширская', 32, 1),
(19, 'Самара', 'Улица4', 1, 1),
(20, 'Новосибирск', 'Улица5', 1, 1);

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `client_fname` varchar(45) NOT NULL,
  `client_lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `email_status` tinyint(1) NOT NULL,
  `client_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `client` (`id_client`, `client_fname`, `client_lname`, `email`, `email_status`, `client_password`) VALUES
(2, 'Люкс', 'Краунгард', 'yu@yandex.ru', 0, '4828140403f6eaee3b5af62a0b09ae61'),
(3, 'Игорь', 'Игорев', 'q@q.ru', 0, '3ec8ca01ee95bd5b3b0a3e5955f63dfd'),
(4, 'Геннадий', 'Игорев', 'ya@mail.ru', 0, '4828140403f6eaee3b5af62a0b09ae61');

CREATE TABLE `contract` (
  `id_contract` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_recipient` int(11) DEFAULT NULL,
  `id_adress_sender` int(11) DEFAULT NULL,
  `id_manager` int(11) DEFAULT NULL,
  `id_adress_recipient` int(11) DEFAULT NULL,
  `contract_status` varchar(45) NOT NULL,
  `creation_date` date NOT NULL,
  `closing_date` date DEFAULT NULL,
  `contract_price` int(11) DEFAULT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `count_loader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `contract` (`id_contract`, `id_client`, `id_recipient`, `id_adress_sender`, `id_manager`, `id_adress_recipient`, `contract_status`, `creation_date`, `closing_date`, `contract_price`, `id_driver`, `count_loader`) VALUES
(23, 4, 25, 14, NULL, 14, 'создана', '2021-02-04', NULL, NULL, NULL, 1),
(24, 4, 4, 15, NULL, 14, 'создана', '2021-02-04', NULL, NULL, NULL, 1),
(25, 2, 27, 16, NULL, 16, 'создана', '2021-02-04', NULL, NULL, NULL, 2),
(26, 2, 28, 17, NULL, 17, 'создана', '2021-02-04', NULL, NULL, NULL, 1),
(27, 2, 29, 18, NULL, 18, 'создан', '2021-02-04', NULL, NULL, NULL, 3),
(28, 2, 30, 19, NULL, 19, 'создана', '2021-02-04', NULL, NULL, NULL, 1),
(29, 2, 31, 20, NULL, 20, 'создана', '2021-02-04', NULL, NULL, NULL, 1);

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `driver_fname` varchar(45) NOT NULL,
  `driver_lname` varchar(45) NOT NULL,
  `driver_car_number` varchar(45) NOT NULL,
  `driver_login` varchar(45) NOT NULL,
  `driver_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loader` (
  `id_loader` int(11) NOT NULL,
  `loader_fname` varchar(45) NOT NULL,
  `loader_lname` varchar(45) NOT NULL,
  `loader_login` varchar(45) NOT NULL,
  `loader_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loaders_list` (
  `id_loader` int(11) NOT NULL,
  `id_contract` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `manager_fname` varchar(45) NOT NULL,
  `manager_lname` varchar(45) NOT NULL,
  `manager_login` varchar(45) NOT NULL,
  `manager_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `recipient` (
  `id_recipient` int(11) NOT NULL,
  `recipient_fname` varchar(45) NOT NULL,
  `recipient_lname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `recipient` (`id_recipient`, `recipient_fname`, `recipient_lname`) VALUES
(1, 'Галина', 'Иванова'),
(2, 'Леонид', 'Литвинов'),
(3, 'Веня', 'Иванов'),
(4, 'Оля', 'Олева'),
(7, 'Гена', 'Попов'),
(9, 'Леля', 'Лелина'),
(12, 'Инна', 'Иннова'),
(25, 'Федор', 'Фыхов'),
(26, 'Петр', 'Петров'),
(27, 'Иван', 'Иванов'),
(28, 'Иван', 'Сидоров'),
(29, 'Петр', 'Сидоров'),
(30, 'Гарен', 'Краунгард'),
(31, 'Петр', 'Иванов');


ALTER TABLE `adress_recipient`
  ADD PRIMARY KEY (`id_adress_recipient`);

ALTER TABLE `adress_sender`
  ADD PRIMARY KEY (`id_adress_sender`);

ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

ALTER TABLE `contract`
  ADD PRIMARY KEY (`id_contract`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_manager` (`id_manager`),
  ADD KEY `id_recipient` (`id_recipient`),
  ADD KEY `id_adress_recipient` (`id_adress_recipient`),
  ADD KEY `id_adress_sender` (`id_adress_sender`);

ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

ALTER TABLE `loader`
  ADD PRIMARY KEY (`id_loader`);

ALTER TABLE `loaders_list`
  ADD KEY `id_loader` (`id_loader`,`id_contract`),
  ADD KEY `id_contract` (`id_contract`);

ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

ALTER TABLE `recipient`
  ADD PRIMARY KEY (`id_recipient`);


ALTER TABLE `adress_recipient`
  MODIFY `id_adress_recipient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `adress_sender`
  MODIFY `id_adress_sender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `contract`
  MODIFY `id_contract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `loader`
  MODIFY `id_loader` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `recipient`
  MODIFY `id_recipient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;


ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `contract_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`),
  ADD CONSTRAINT `contract_ibfk_3` FOREIGN KEY (`id_manager`) REFERENCES `manager` (`id_manager`),
  ADD CONSTRAINT `contract_ibfk_4` FOREIGN KEY (`id_recipient`) REFERENCES `recipient` (`id_recipient`),
  ADD CONSTRAINT `contract_ibfk_5` FOREIGN KEY (`id_adress_recipient`) REFERENCES `adress_recipient` (`id_adress_recipient`),
  ADD CONSTRAINT `contract_ibfk_6` FOREIGN KEY (`id_adress_sender`) REFERENCES `adress_sender` (`id_adress_sender`);

ALTER TABLE `loaders_list`
  ADD CONSTRAINT `loaders_list_ibfk_1` FOREIGN KEY (`id_contract`) REFERENCES `contract` (`id_contract`),
  ADD CONSTRAINT `loaders_list_ibfk_2` FOREIGN KEY (`id_loader`) REFERENCES `loader` (`id_loader`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
