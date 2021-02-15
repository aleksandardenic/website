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
-- Database: `vesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

DROP TABLE IF EXISTS `vesti`;
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `kategorija` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `slika`, `tekst`, `kategorija`) VALUES
(1, 'Manchester', 'mancester.png', 'Fudbalski klub Mancester junajted (engl. Manchester United Football Club) fudbalski je klub iz Mancestera u Engleskoj. Kao domacin svoje utakmice igra na stadionu Old Traford, koji ima kapacitet od 76.212 sedecih mesta. Mancester junajted je najtrofejni klub u Engleskoj, od kako se igra Premijer liga. Titulu sampiona Engleske je osvajao 20 puta, FA Kup 12 puta, liga kup 5 puta, engleski superkup 21 puta, Ligu sampiona 3 puta, a po jednom kup pobednika kupova, Ligu Evrope, evropski superkup, interkontinentalni kup i svetsko klupsko prvenstvo.', 1),
(3, 'Crvena Zveada', 'zvezda.jpg', 'Kadetski reprezentativac Rusije Mihail Sentjurin trenutno boravi u Beogradu gde je na probi za Crvenom zvezdom.\r\n\r\nRadi se o tinejdzeru koji je clan ekipe Rjazanj koja nastupa u trecem rangu takmicenja u Rusiji.\r\n\r\nPored toga sto je clan kadetske reprezentacije Rusije, igrao je dva puta i za omladinsku reprezentaciju.\r\n\r\n\"U Srbiji sam prihvacen lepo, prijatno sam se iznenadio ponasanjem srpskog naroda i time koliko vole Rusiju. Iskreno, nikada tako nesto nisam doziveo. U fudbalskom smislu, sve je mnogo bolje ovde nego kod kuxe. Brzina fudbala je vexa, vexa borba, a posvexenost igraxa prema radu je mnogo profesionalnija\", rekao je on za ruske medije.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
