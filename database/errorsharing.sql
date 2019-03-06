-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2019, 03:06:08
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `errorsharing`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `errorpost`
--

CREATE TABLE `errorpost` (
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `topic` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `error` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `solution` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `postLike` int(11) NOT NULL,
  `postDislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `errorpost`
--

INSERT INTO `errorpost` (`postId`, `userId`, `topic`, `error`, `solution`, `postLike`, `postDislike`) VALUES
(1, 1, 'Java User Interface', 'What are Null Pointer Exceptions (java.lang.NullPointerException) and what causes them?\r\n\r\nWhat methods/tools can be used to determine the cause so that you stop the exception from causing the program to terminate prematurely?', 'public void doSomething(SomeObject obj) {\r\n    if(obj != null) {\r\n       //do something\r\n    } else {\r\n       //do something else\r\n    }\r\n}', 0, 0),
(2, 5, 'c# siteye hata girememe hatası', 'NullPointerExceptions are exceptions that occur when you try to use a reference that points to no location in memory (null) as though it were referencing an object. Calling a method on a null reference or trying to access a field of a null reference will trigger a NullPointerException. These are the most common, but other ways are listed on the NullPointerException javadoc page.', 'public class Example {\r\n\r\n    public static void main(String[] args) {\r\n        Object obj = null;\r\n        obj.hashCode();\r\n    }\r\n\r\n}', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `lastname`, `job`, `email`, `password`) VALUES
(2, 'Fethi', 'Çetin', 'Student', 'fethi1996@gmail.com', '19071996'),
(5, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin'),
(6, 'emine', 'er', 'manager', 'e.er@gmail.com', '12345');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `errorpost`
--
ALTER TABLE `errorpost`
  ADD PRIMARY KEY (`postId`);

--
-- Tablo için indeksler `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `errorpost`
--
ALTER TABLE `errorpost`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
