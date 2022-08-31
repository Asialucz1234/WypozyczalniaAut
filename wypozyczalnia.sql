-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Sie 2022, 16:34
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auta`
--

CREATE TABLE `auta` (
  `id` int(11) NOT NULL,
  `marka` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `rocznik` int(11) NOT NULL,
  `os_wypoz` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `data_wypoz` date NOT NULL,
  `ost_przeglad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `auta`
--

INSERT INTO `auta` (`id`, `marka`, `model`, `rocznik`, `os_wypoz`, `data_wypoz`, `ost_przeglad`) VALUES
(6, 'Opel', 'Vectra', 2000, 'Mroczek Stanisław', '2022-02-01', '2022-01-01'),
(7, 'Toyota', 'Corolla', 2011, 'Kowalski Bonifacy', '2022-06-05', '2022-01-01'),
(8, 'Toyota', 'Rav4', 2020, 'Winiarski Jerzy', '2022-07-25', '2022-05-05'),
(9, 'Opel', 'Astra', 2019, 'Winiarska Anna', '2022-01-01', '2022-04-10'),
(10, 'Audi', 'A4', 2014, 'Zych Jolanta', '2022-01-02', '2022-03-04'),
(11, 'Audi', 'A3', 2015, 'Zych Sławomir', '2022-02-02', '2022-02-03'),
(12, 'Toyota', 'Avensis', 2016, '', '0000-00-00', '2022-03-01'),
(13, 'Opel', 'Corsa', 2018, '', '0000-00-00', '2022-07-08'),
(14, 'Opel', 'Meriva', 2013, '', '0000-00-00', '2022-08-08'),
(15, 'Peugeot', '308', 2009, '', '0000-00-00', '2022-04-04'),
(16, 'Peugeot', '3008', 2011, '', '0000-00-00', '2022-03-04');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `auta`
--
ALTER TABLE `auta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `auta`
--
ALTER TABLE `auta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
