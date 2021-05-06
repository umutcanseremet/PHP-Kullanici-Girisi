-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 May 2021, 11:11:02
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneme`
--

CREATE TABLE `deneme` (
  `id` int(11) NOT NULL,
  `uye_ad` varchar(50) NOT NULL,
  `uye_soyad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `deneme`
--

INSERT INTO `deneme` (`id`, `uye_ad`, `uye_soyad`) VALUES
(1, 's', 's'),
(2, 's', 's'),
(3, 'd2', 'd2'),
(4, 'Deneme', 'Umut'),
(5, 'Deneme', 'deneme');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `deneme`
--
ALTER TABLE `deneme`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `deneme`
--
ALTER TABLE `deneme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
