-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Haz 2021, 09:36:08
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webproje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `icerik`, `resim`, `tarih`, `kategori`) VALUES
(19, 'Millilerin Rakibi Sırbistan', 'FIVB Voleybol Milletler Ligi’nde heyecan yarın oynanacak karşılaşmalarla başlayacak.\r\n\r\nA Milli Kadın Voleybol Takımı, İtalya’nın Rimini kentinde düzenlenecek organizasyonun ilk maçında yarın TSİ 13.00’te Sırbistan ile karşılaşacak.\r\n\r\n', 'voleybol1.jpg', '2021-05-24 19:41:34', 'Voleybol'),
(21, 'VakıfBank Şampiyonlar Ligi’nde Şampiyonluk Rekoru İçin Sahada', 'Avrupa’nın en büyük kupasını 4 kez ülkemize kazandıran VakıfBank Kadın Voleybol Takımı, 2021 CEV Şampiyonlar Ligi Süper Final maçında 1 Mayıs Cumartesi TSİ 18.00’de İtalyan ekibi Imoco Volley Conegliano ile karşı karşıya gelecek. Kupayı kazanması halinde 5. şampiyonluğuna ulaşacak olan sarı siyahlı ekip, Şampiyonlar Ligi’nin yeni formatında en çok şampiyon olan takım olmayı da başaracak.', 'voleybol2.jpg', '2021-05-24 20:14:45', 'Voleybol'),
(22, 'Erkek ve Kadın Plaj Voleybolu Milli Takımları', 'İzmir Büyükşehir Belediyesi, İzmir Gençlik ve Spor İl Müdürlüğü, Balçova Belediyesi ve SWS Sports, Beach-It işbirliği ile düzenlenen CEV Avrupa Kıtası Elemeleri 2. turunda ikinci gün, bugün erkekler ve kadınlar kategorisinde oynanan karşılaşmaların ardından sona erdi.\r\n\r\n', 'voleybol3.jpg', '2021-05-24 20:18:01', 'Voleybol'),
(23, 'Türkiye Kar Voleybolu Milli Takımları', 'Türkiye Kar Voleybolu Milli Takımımız, 2021 CEV Kar Voleybolu Avrupa Turu Wagrain Etabı’nın ikinci haftasında ilk günü iki galibiyet ile tamamladı.\r\n\r\n', 'voleybol4.jpg', '2021-05-24 20:46:08', 'Voleybol'),
(24, 'Euro 2020', 'WQQDWD', 'futbol1.jpg', '2021-05-24 20:54:45', 'Basketbol');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
