SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `modweb013` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `modweb013`;

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `felhasznalonev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `utolso_bejelentkezes` datetime DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=3 ;

INSERT INTO `felhasznalok` (`id`, `felhasznalonev`, `jelszo`, `utolso_bejelentkezes`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 1),
(2, 'felhasznalo', 'f34181804e698225e66669d43b912ffb15e7cf70', NULL, 0);

GRANT USAGE ON *.* TO 'modweb'@'localhost' IDENTIFIED BY PASSWORD '*B314A965EF4A0FA3E62B272D2A3E60FCF1C36D9E';
GRANT ALL PRIVILEGES ON `modweb013`.* TO 'modweb'@'localhost';