-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2013. Nov 23. 10:39
-- Szerver verzió: 5.5.32
-- PHP verzió: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `modweb013`
--
CREATE DATABASE IF NOT EXISTS `modweb013` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `modweb013`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `felhasznalonev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `utolso_bejelentkezes` datetime DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=6 ;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `felhasznalonev`, `jelszo`, `utolso_bejelentkezes`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 1),
(2, 'felhasznalo', 'f34181804e698225e66669d43b912ffb15e7cf70', NULL, 0),
(3, 'felhasznalo', 'beirtjelszo', NULL, 0),
(4, 'random', 'beirtjelszo', NULL, 0),
(5, 'atis', '07658a91cddae99ff491c9d636924c5e8ca8a480', NULL, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kategoriak`
--

CREATE TABLE IF NOT EXISTS `kategoriak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `kategoriak`
--

INSERT INTO `kategoriak` (`id`, `nev`) VALUES
(1, 'Előételek'),
(2, 'Főételek');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `receptek`
--

CREATE TABLE IF NOT EXISTS `receptek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `elkeszites` text COLLATE utf8_hungarian_ci NOT NULL,
  `szerzo` int(11) NOT NULL,
  `ertekeles` int(11) NOT NULL,
  `kategoria` int(11) NOT NULL,
  `hozzaadva` datetime NOT NULL,
  `nehezseg` tinyint(4) NOT NULL,
  `szuksegesido` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `mennyiseg` tinyint(4) NOT NULL,
  `hozzavalok` text COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=3 ;

--
-- A tábla adatainak kiíratása `receptek`
--

INSERT INTO `receptek` (`id`, `nev`, `elkeszites`, `szerzo`, `ertekeles`, `kategoria`, `hozzaadva`, `nehezseg`, `szuksegesido`, `mennyiseg`, `hozzavalok`) VALUES
(1, 'Pizza', 'előkészítési leírás 1', 2, 5, 1, '2013-11-25 09:12:18', 3, '30', 1, 'Pizzatészta\r\nKolbász\r\nPizzaszósz\r\nPaprika\r\nParadicsom'),
(2, 'Lecsó', 'Egybe mindent a fazékba, tüzet alá, aztán vársz, majd eszed!', 1, 3, 2, '2013-10-08 05:19:26', 1, '15', 1, 'Paradicsom\r\nPaprika\r\nTojás\r\nOlaj\r\nKolbász');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
