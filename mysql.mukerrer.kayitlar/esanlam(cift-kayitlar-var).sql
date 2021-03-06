-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `esanlam`;
CREATE TABLE `esanlam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelime1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kelime2` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `esanlam` (`id`, `kelime1`, `kelime2`) VALUES
(1,	'al',	'kırmızı'),
(2,	'kırmızı',	'al'),
(3,	'ak',	'beyaz'),
(4,	'beyaz',	'ak'),
(5,	'nur',	'ışık'),
(6,	'kara',	'siyah'),
(7,	'kara',	'karanlık'),
(9,	'kara',	'koyu'),
(12,	'al',	'kırmızı'),
(13,	'ak',	'beyaz'),
(14,	'ak',	'beyaz'),
(15,	'kara',	'koyu');

-- 2019-07-29 08:05:10
