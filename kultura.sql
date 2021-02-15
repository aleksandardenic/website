-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2018 at 09:14 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kultura`
--

-- --------------------------------------------------------

--
-- Table structure for table `kultura`
--

DROP TABLE IF EXISTS `kultura`;
CREATE TABLE IF NOT EXISTS `kultura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kultura`
--

INSERT INTO `kultura` (`id`, `naslov`, `slika`, `tekst`) VALUES
(1, 'Raphael Wressing', 'raphael.jpg', 'Raphael Wressing, majstor Hammond B3 orgulja, jedan od najznacajnijih mladjih evropskih blues jazz muzicara, gostuje ovih dana u Srbiji. Pored jucerasnjeg koncerta u Novom Sadu, on danas (subota) nastupa u Beogradu u klubu Ulica (Balkanska 13), a poslednji termin, nedelja, 9. decembar, ostaje za Jagodinu, koncert će se odrzati u Jagodinskoj gimnaziji.'),
(3, 'Srpsko slikarstvo', 'slikarstvo.jpg', 'U Velikoj galeriji Doma vojske u Beogradu predstavljena je izlozba Srpsko slikarstvo 20. veka antologijski izbor iz privatnih zbirki (1900 1950). Autor postavke Nikola Kusovac, istoricar umetnosti i muzejski savetnik u penziji, opredelio se za vise od sezdeset dela najznacajnijih slikara prve polovine 20. veka, od kojih je vecina oznacena kao kulturno dobro od izuzetnog znacaja. On je podsetio da je rec o jedinstvenoj postavci, za koju je tesko garantovati da ce ponovo na ovakav nacin biti priredjena.\r\n\r\nIzlozba pruza dobar uvid u genezu i razvojne etape srpskog slikarstva prve polovine proslog veka. Poklonici umetnosti do 26. decembra mogu da vide radove 43 autora, medju kojima su Nadezda Petrovic, Leon Koen, Marko Murat, Beta Vukanovic, Kosta Miličevic, Jovan Bijelic, Ignjat Job, Sava Sumanovic, Milan Konjovic, Petar Lubarda... porucio je Nikola Mirkov proglasavajuci izlozbu otvorenom.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
