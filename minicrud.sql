-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 12:10
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--
CREATE DATABASE IF NOT EXISTS `minicrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `minicrud`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `function` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `adminlogin`
--

INSERT INTO `adminlogin` (`adminname`, `password`, `function`, `id`) VALUES
('admin', 'admin', 'admin', 1),
('stijn', 'stijn', 'admin\r\n', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(31, 'Brood', '2', 'bread.png'),
(34, 'Vis', '3', 'fish1.png'),
(35, 'pizza', '4', 'pizza_cheese.png'),
(36, 'kip', '4', 'rock2.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppingbasket`
--

CREATE TABLE `shoppingbasket` (
  `ID` int(255) NOT NULL,
  `name` varchar(22) NOT NULL,
  `Price` int(21) NOT NULL,
  `Image` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `shoppingbasket`
--
ALTER TABLE `shoppingbasket`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT voor een tabel `shoppingbasket`
--
ALTER TABLE `shoppingbasket`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
