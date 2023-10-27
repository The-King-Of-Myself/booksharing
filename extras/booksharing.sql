-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 01, 2023 at 12:20 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksharing`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE `ksiazka` (
  `id` int(11) NOT NULL,
  `id_wlasciciela` int(11) NOT NULL,
  `tytul` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `stan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `zdjecia` varchar(50) NOT NULL,
  `nr_isbn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ksiazka`
--

INSERT INTO `ksiazka` (`id`, `id_wlasciciela`, `tytul`, `autor`, `stan`, `status`, `zdjecia`, `nr_isbn`) VALUES
(1, 1, 'anielski wampir', 'Alex Petrykiewicz', 'Dobry', 'Dostępna', 'asdfasdfa.jpg', 1267467);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `telefon` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `haslo` text NOT NULL,
  `avatar` text NOT NULL,
  `zarejestrowano` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`, `haslo`, `avatar`, `zarejestrowano`) VALUES
(1, 'alex', 'petryk', '555444333', 'testowymail@gmail.com', 'ttgegihgeruheuirirrifisdfisdflihssdlf', 'asdf.jpg', '2023-10-01 11:13:08'),
(2, 'Artur', 'Petrykiewicz', '555444555', 'testowydrugimail@gmail.com', 'dgohgefeuiherf98y34thuigrtuihafsdljk', 'asddfjkhk.jpg', '2023-10-01 11:17:16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id` int(11) NOT NULL,
  `id_ksiazki` int(11) NOT NULL,
  `id_wypozyczającego` int(11) NOT NULL,
  `id_pozyczającego` int(11) NOT NULL,
  `data_wypozyczenia` datetime NOT NULL,
  `data_zwrotu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id`, `id_ksiazki`, `id_wypozyczającego`, `id_pozyczającego`, `data_wypozyczenia`, `data_zwrotu`) VALUES
(1, 1, 2, 1, '2023-10-01 11:31:03', '2023-10-31 11:31:03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zyczenia`
--

CREATE TABLE `zyczenia` (
  `id_listy_zyczen` int(11) NOT NULL,
  `ksiazka` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zyczenia`
--

INSERT INTO `zyczenia` (`id_listy_zyczen`, `ksiazka`, `id_uzytkownika`) VALUES
(1, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zyczenia`
--
ALTER TABLE `zyczenia`
  ADD PRIMARY KEY (`id_listy_zyczen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zyczenia`
--
ALTER TABLE `zyczenia`
  MODIFY `id_listy_zyczen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
