-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van dabvinci wordt geschreven
CREATE DATABASE IF NOT EXISTS `dabvinci` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dabvinci`;

-- Structuur van  tabel dabvinci.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `postalcode` varchar(45) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `stylist` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel dabvinci.users: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `city`, `postalcode`, `phonenumber`, `stylist`) VALUES
	(5, 'Sbakker', '$2y$10$ASn3QUQELqpnBXTsoDPaVeQaGpXt5GFhamgqAF37TXyHMzImdGt3m', 'Stef', 'Bakker', 'Rijksweg', 'stefbakker@live.nl', 'Nieuwendijk', '4255GJ', '620910693', 0),
	(6, 'Psnoek', '$2y$10$LrHR/nQMMSAjfxPixdeMZOD1LxJo1B1UA.rXxHHXtvxlihU3Iptcy', 'Peter', 'Snoek', 'Mollenburgseweg 82', 'peter@peter.nl', 'Gorinchem', '2632HA', '273912873', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
