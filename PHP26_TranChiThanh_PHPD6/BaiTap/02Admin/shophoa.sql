-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Août 2014 à 17:02
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `shophoa`
--

-- --------------------------------------------------------

--
-- Structure de la table `hoa`
--

CREATE TABLE IF NOT EXISTS `hoa` (
  `id_hoa` int(255) NOT NULL AUTO_INCREMENT,
  `ten_hoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_hoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `hoa`
--

INSERT INTO `hoa` (`id_hoa`, `ten_hoa`, `mo_ta`, `hinh_anh`, `gia_ban`, `id_cat`) VALUES
(1, 'Hoa thủy tiên \r\n', 'Mô tả Hoa thủy tiên\r\n', 'thuytien.jpg\r\n', 120000, 2),
(2, 'Hoa Violet \r\n', 'Mô tả Hoa Violet \r\n', 'violet.jpg\r\n', 140000, 1),
(3, 'Hoa Lilies \r\n', 'Mô tả Hoa Lilies \r\n', 'hoali.jpg\r\n', 200000, 1),
(4, 'Hoa lài \r\n', 'Mô tả Hoa lài \r\n', 'hoalai.jpg\r\n', 400000, 3),
(5, 'Hoa Phong Lan \r\n', 'Mô tả Hoa Phong Lan \r\n', 'phonglam.jpg\r\n', 135000, 4),
(6, 'Hoa cúc \r\n', 'Mô tả Hoa cúc \r\n', 'cuc.png\r\n', 100000, 1),
(7, 'Hoa Tỉ muội \r\n', 'Mô tả Hoa Tỉ muội \r\n', 'timuoi.gif\r\n', 80000, 1),
(8, 'Hoa Hồng Phấn \r\n', 'Mô tả Hoa hồng Phấn \r\n', 'hongphan.png\r\n', 500000, 5);

-- --------------------------------------------------------

--
-- Structure de la table `loai_hoa`
--

CREATE TABLE IF NOT EXISTS `loai_hoa` (
  `id_cat` int(255) NOT NULL AUTO_INCREMENT,
  `ten_cat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `loai_hoa`
--

INSERT INTO `loai_hoa` (`id_cat`, `ten_cat`) VALUES
(1, 'Khai trương'),
(2, 'Sinh nhật'),
(3, 'Ngày cưới'),
(4, 'Kỷ niệm'),
(5, 'Tình yêu'),
(6, 'Hoa bán'),
(7, 'Hoa chia buồn'),
(8, 'Hoa hạnh phúc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
