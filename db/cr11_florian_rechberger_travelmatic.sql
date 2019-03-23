-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 06:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_florian_rechberger_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `concert_id` int(10) NOT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `img_url` varchar(2000) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `ticket_price` double(16,2) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`concert_id`, `artist`, `img_url`, `event_date`, `event_time`, `ticket_price`, `website`, `street`, `city`, `postal_code`) VALUES
(1, 'SUMMER NIGHT CONCERT 2019', 'http://1.bp.blogspot.com/-MmL05jjMleQ/Te43FiyOg0I/AAAAAAAAKaI/0TC5XHk5FYU/s1600/sommernachtkonzert.jpg', '2019-06-20', '20:45:00', 0.00, 'https://www.sommernachtskonzert.at/index_en.html', 'Schönbrunner Schloßstraße 47', 'Vienna', '1130'),
(2, 'JAZZ FEST WIEN - Chilly Gonzales in PianoVision', 'https://media04.meinbezirk.at/article/2015/06/13/0/1727420_XXL.jpg', '2019-07-06', '19:30:00', 38.50, 'http://www.jazzfest.wien/en/', 'Wiener Staatsoper, Opernring 2', 'Vienna', '1010'),
(3, 'Candy Dulfer', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Candy_Dulfer_-_Leverkusener_Jazztage_2016-AL1608.jpg/220px-Candy_Dulfer_-_Leverkusener_Jazztage_2016-AL1608.jpg', '2019-05-19', '20:00:00', 38.25, 'https://colos-saal.de/', 'Rossmarkt 19', 'Schaffenburg', '63739'),
(4, 'Shantel & Bucovina Club Orkestar', 'https://www.vera-groningen.nl/content/uploads/old/photos/2815/shantel-bucovina-club-orkestar_1.jpg', '2019-06-20', '20:00:00', 21.00, 'https://www.wuk.at/programm/2018/shantel-bucovina-club-orkestar/', 'WUK, Währinger Straße 59', 'Vienna', '1090');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_url` varchar(2000) DEFAULT NULL,
  `tel` varchar(55) DEFAULT NULL,
  `cuisine` varchar(255) DEFAULT NULL,
  `short_description` varchar(2000) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `name`, `img_url`, `tel`, `cuisine`, `short_description`, `website`, `street`, `city`, `postal_code`) VALUES
(1, 'Dialog im Dunkeln - Dinner in the DarK', 'https://www.stadt-wien.at/typo3temp/pics/Dialog_im_Dunkeln_jutta_rotter_841227f957.jpg.pagespeed.ce.4p0bBgYyK1.jpg', '+43 1 890 60 60', 'Surprise', 'The evening begins with a champagne reception. And afterwards it get\'s very dark! Guests take part in a 30-minute walk through the exhibition, „Dialogue in the Dark“ which, as the name suggests, takes place in the dark. Blind or visually impaired people guide the guests through the rooms, which are totally dark. Here, for example, day-to-day situations with which blind people are confronted are presented. Following this tour, the guest\'s are taken to the restaurant where they can enjoy a 4-course meal, also in the dark. The aim of this unusual experience is to sensitize guests’ senses and by doing so, creating a completely new eating experience. Support is once again provided by blind or visually impaired people.', 'http://www.imdunkeln.at/', 'Freyung 6, 1. Hof UG', 'Vienna', '1010'),
(2, 'Café Vollpension', 'https://media-cdn.tripadvisor.com/media/photo-s/08/2b/3a/93/vollpension.jpg', '+43 1 5850464', 'Traditional Viennese Cakes and Pastries', 'The café has an extraordinary concept – grandmas and grandpas serve delicious cakes with their younger colleagues. But you will also find snacks, coffee and drinks on offer here. Everyone benefits: the grandmas and grandpas can meet new people while at the same time earning some money to supplement their pension. The guests, in turn, are spoilt with homemade cakes while enjoying the relaxed atmosphere – just like at grandma’s!', 'http://www.vollpension.wien/', 'Schleifmühlgasse 16', 'Vienna', '1040'),
(3, 'Ethiopian Restaurant', 'https://media-cdn.tripadvisor.com/media/photo-s/16/23/f6/13/img-20190115-170327-largejpg.jpg', '+43-1-4020726', 'Ethiopian', 'Die Getreideart Tef stellt bis heute die Grundlage für das Hauptnahrungsmittel in Äthiopien dar. Aus Tef wird ein säuerliches und Pfannkuchen ähnliches Fladenbrot, das Injera (sprich: indschera), gebacken. Es wird zu jeder Mahlzeit serviert; von dem Fladen reißt man Stücke mit den Fingern ab, taucht sie in die zugehörige Soße (Wot) und führt sie zum Mund. Die zu Injera gereichten Soßen, die Wots, gibt es in den verschiedensten Varianten: zum einen \"fasting\", d.h. ohne Fleisch, Eier oder Milchprodukte, dies sind meistens Gerichte aus Linsen, Karotten, Kartoffeln und Kohl und zum anderen \"besiga\", d.h. mit Fleisch – typischerweise Huhn, Lamm oder Rindfleisch, seltener auch Ziege. Aus religiösen Gründen wird in Äthiopien kein Schwein gegessen. Die meisten dieser Wots gibt es dann wiederum in zwei Varianten: mild oder scharf. Scharf bedeutet hierbei, dass das Gericht großzügig mit dem roten Pfeffer Berberre, gewonnen aus einer Art rotem Chili, gewürzt ist. Ein sehr typischer Wot, der meist zu Festtagen, besonderen Gelegenheiten oder zu Ehren von Gästen zubereitet wird, ist Doro Wot, mit Huhn, ganzen Eiern und Berberre.', 'https://ethiopiamegebet.wordpress.com/', 'Währinger Str. 15', 'Vienna', '1090'),
(4, 'Shanghai Tan Restaurant', 'http://www.shanghaitan.at/wp-content/uploads/2015/05/SHTBett-e1509492440792.jpg', '+43 585 49 88 (ab 16h)', 'Asian', 'Eines der zweifelsfrei romantischsten Lokale in Wien ist das ShanghaiTan im 6. Bezirk.', 'http://www.shanghaitan.at/', 'Gumpendorferstraße 9', 'Vienna', '1060');

-- --------------------------------------------------------

--
-- Table structure for table `things_to_do`
--

CREATE TABLE `things_to_do` (
  `to_do_id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_url` varchar(2000) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `short_description` varchar(2000) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `things_to_do`
--

INSERT INTO `things_to_do` (`to_do_id`, `name`, `img_url`, `type`, `short_description`, `website`, `street`, `city`, `postal_code`) VALUES
(1, 'Schönbrunn Palace', 'https://images.ctfassets.net/niwziy2l9cvz/6eqfNZaTCwkmmgaQAWem0I/6e9598447174d071826db6915b938400/vienna-schonbrunn-palace-1112x630.jpg', 'Historical Site', 'The picturesque grounds of Schönbrunn Palace, the Habsburgs\' former summer home, boast a gloriette, palm house, zoo, and even artificial Roman ruins. Few tours offer so much bang for your buck!', 'https://www.schoenbrunn.at/en/', 'Schönbrunner Schloßstraße 47', 'Vienna', '1130'),
(2, 'Hofburg Palace', 'https://images.ctfassets.net/niwziy2l9cvz/4rEVuI7X2EEi2uo4WGwis6/fa12d768bff699b67aeeb29c4b8f5b4f/vienna-hofburg-palace-1112x630.jpg', 'Historical Site', 'Vienna\'s ornate Imperial Palace was the centre of the Habsburg dynasty\'s power for seven centuries! Visit its chapel on Sundays for High Mass to see the Vienna Boys\' Choir perform.', 'https://www.hofburg-wien.at/', 'Michaelerkuppel', 'Vienna', '1010'),
(3, 'Vienna State Opera', 'https://images.ctfassets.net/niwziy2l9cvz/4rEVuI7X2EEi2uo4WGwis6/fa12d768bff699b67aeeb29c4b8f5b4f/vienna-hofburg-palace-1112x630.jpg', 'Opera / Historical Site', 'The Vienna State Opera is home to one of the world\'s best and most prolific opera companies. You may well go on every day of your trip and never see the same show twice!', 'https://www.wiener-staatsoper.at/', 'Opernring 2', 'Vienna', '1010'),
(4, 'HANDS UP - Eintauchen in die Welt der Gehörlosen', 'https://i0.wp.com/www.hausaktiv.at/wp-content/uploads/2018/12/IMG_20181122_141552.jpg', 'Exhibition', 'Wie ist es, gehörlos zu leben? Probiere es jetzt aus in unserer neuen Ausstellung mitten in Wien! Tauche für eine Stunde in die Welt der Gehörlosigkeit ein. Ohne zu hören und ohne zu sprechen gehst du durch unsere vier Ausstellungsräume – alleine oder geführt von einem gehörlosen Guide.', 'https://www.handsup.wien/', 'Freyung 6', 'Vienna', '1010'),
(5, 'Dialog im Dunkeln: Kein Augenblick Alltag', 'http://www.imdunkeln.at/images/logo.png', 'Interactive Exhibition', 'Dialog im Dunkeln ist eine Ausstellung, bei der es nichts zu sehen git. In kleinen Gruppen werden BesucherInnen von blinden oder sehbehinderten Guides durch eine dunkle Erlebnisinstallation begleitet. In diesen sind Alltagssituationen dargestellt, die durch die Lichtlosigkeit zum reizvollen Abenteuer werden...', 'www.imdunkeln.at/index.php/en/', 'Freyung 6', 'Vienna', '1010'),
(6, 'SHADES TOURS: Führungen von Obdachlosen', 'http://vienna.impacthub.net/wp-content/uploads/sites/41/2016/07/unnamed.png', 'City Tour', 'SHADES TOURS organizes alternative tours and activities in Vienna on socially polarizing topics. The outstanding detail about it: they are guided by affected persons themselves and therefore provide a different perspective on the city.', 'https://www.shades-tours.com/', 'Lindengasse 56', 'Vienna', '1070');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `first_name`, `last_name`, `password`, `role`) VALUES
(1, 'user@user.user', 'user', 'user', 'useruser', 'user'),
(2, 'admin@admin.admin', 'admin', 'admin', 'adminadmin', 'admin'),
(3, 'travelfox@wold.com', 'TravelFox', 'World', 'travelfox', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`concert_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD PRIMARY KEY (`to_do_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `concert_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `to_do_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
