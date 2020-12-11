-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2020 at 05:02 PM
-- Server version: 5.7.29-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rangerover`
--
CREATE DATABASE IF NOT EXISTS `rangerover` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rangerover`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_lastname` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_repassword` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_adress` varchar(50) NOT NULL,
  `admin_phone` char(13) NOT NULL,
  `admin_status` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_name`, `admin_lastname`, `admin_password`, `admin_repassword`, `admin_email`, `admin_adress`, `admin_phone`, `admin_status`) VALUES
(1, 'Boris', 'Perković', 'boris20', 'boris20', 'bboris@gmail.com', 'ta ta ta ta ta ta', '111111111', 'Administrator'),
(3, 'Joca', 'Karburator', 'jjoca', 'jjoca', 'jjoca@gmail.com', 'jocina 16', '123789', 'Serviser'),
(4, 'Mile', 'Dizna', 'mmile', 'mmile', 'mmile@gmail.com', 'mmiletova 15', '7458965', 'Serviser'),
(5, 'Laza', 'Lazić', 'llaza', 'llaza', 'llaza@gmail.com', 'llazina 78', '8547892', 'Menadžer'),
(6, 'Pink', 'Panter', 'pinkpanter', 'pinkpanter', 'pinkpanter@gmail.com', 'panterova 56', '1478523', 'Vozač'),
(7, 'Alen', 'Prost', 'alenprost', 'alenprost', 'alenprost@gmail.com', 'prostova 21', '8527412', 'Vozač');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT '1',
  `shop_time` datetime DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `basket_id` (`basket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`basket_id`, `users_id`, `products_id`, `accepted`, `shop_time`) VALUES
(1, 1, 3, 0, '2020-11-04 17:09:16'),
(2, 1, 2, 0, '2020-11-04 17:12:15'),
(3, 1, 1, 0, '2020-11-04 17:12:33'),
(4, 1, 3, 0, '2020-11-04 17:12:39'),
(5, 1, 2, 0, '2020-11-04 17:19:55'),
(6, 1, 2, 0, '2020-11-04 17:20:44'),
(7, 1, 3, 0, '2020-11-04 17:21:33'),
(8, 1, 3, 0, '2020-11-04 17:22:00'),
(9, 1, 1, 0, '2020-11-04 17:22:27'),
(10, 2, 2, 0, '2020-11-04 18:10:05'),
(11, 2, 3, 0, '2020-11-04 18:10:13'),
(12, 2, 1, 0, '2020-11-04 19:49:53'),
(13, 2, 3, 0, '2020-11-04 19:49:56'),
(14, 2, 1, 0, '2020-11-04 20:07:35'),
(15, 2, 2, 0, '2020-11-04 20:07:40'),
(16, 2, 3, 0, '2020-11-04 20:07:49'),
(17, 2, 3, 0, '2020-11-04 20:14:47'),
(18, 2, 2, 0, '2020-11-04 20:24:12'),
(19, 3, 2, 0, '2020-11-04 20:28:11'),
(20, 2, 2, 0, '2020-11-04 20:40:34'),
(21, 2, 3, 0, '2020-11-04 20:40:43'),
(22, 2, 1, 0, '2020-11-04 20:42:25'),
(23, 2, 1, 0, '2020-11-04 20:43:00'),
(24, 2, 3, 0, '2020-11-04 20:43:07'),
(25, 1, 1, 0, '2020-11-09 02:40:17'),
(26, 1, 3, 0, '2020-11-09 02:40:23'),
(27, 1, 2, 0, '2020-11-09 02:40:27'),
(28, 1, 1, 0, '2020-11-09 02:53:14'),
(29, 1, 3, 0, '2020-11-09 03:03:38'),
(30, 1, 1, 0, '2020-11-09 03:14:04'),
(31, 3, 3, 0, '2020-11-09 03:23:56'),
(32, 3, 1, 0, '2020-11-09 03:23:59'),
(33, 3, 3, 0, '2020-11-09 03:26:19'),
(34, 1, 1, 2, '2020-11-09 03:33:13'),
(35, 1, 3, 0, '2020-11-09 03:33:16'),
(36, 1, 2, 0, '2020-11-09 03:33:18'),
(37, 1, 3, 2, '2020-11-09 03:41:15'),
(38, 1, 2, 0, '2020-11-09 03:41:17'),
(39, 1, 2, 0, '2020-11-20 14:47:30'),
(40, 1, 1, 2, '2020-11-20 14:47:35'),
(41, 2, 1, 0, '2020-12-07 22:39:01'),
(42, 2, 2, 2, '2020-12-07 22:44:08'),
(43, 3, 4, 0, '2020-12-09 14:20:49'),
(44, 3, 2, 2, '2020-12-09 14:20:52'),
(45, 3, 1, 0, '2020-12-09 14:23:02'),
(46, 3, 3, 2, '2020-12-09 14:23:04');

-- --------------------------------------------------------

--
-- Stand-in structure for view `basket_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `basket_view`;
CREATE TABLE IF NOT EXISTS `basket_view` (
`users_id` int(10) unsigned
,`products_id` int(11)
,`basket_id` int(11)
,`users_name` varchar(50)
,`users_lastname` varchar(50)
,`users_email` varchar(50)
,`users_adress` varchar(50)
,`users_phone` varchar(13)
,`products_name` varchar(45)
,`products_material` varchar(45)
,`products_price` varchar(8)
,`products_describe` varchar(45)
,`products_color` varchar(45)
,`accepted` tinyint(1)
,`shop_time` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `glitch`
--

DROP TABLE IF EXISTS `glitch`;
CREATE TABLE IF NOT EXISTS `glitch` (
  `glitch_id` int(11) NOT NULL AUTO_INCREMENT,
  `glitch_name` varchar(45) NOT NULL,
  PRIMARY KEY (`glitch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glitch`
--

INSERT INTO `glitch` (`glitch_id`, `glitch_name`) VALUES
(1, 'Menjač'),
(2, 'Motor'),
(3, 'Elektronika'),
(4, 'Upravljački sistem'),
(5, 'Softver'),
(6, 'Limarija'),
(7, 'Kočioni sistem');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
CREATE TABLE IF NOT EXISTS `models` (
  `models_id` int(11) NOT NULL AUTO_INCREMENT,
  `models_name` varchar(45) NOT NULL,
  PRIMARY KEY (`models_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`models_id`, `models_name`) VALUES
(1, 'Autobiography benzin 5.2 550KS'),
(2, 'Autobiography dizel 4.5 520KS'),
(3, 'Sport benzin 4.5 512KS V12'),
(4, 'Sport dizel 5.0 500KS V8'),
(5, 'Velar benzin 4.9 530KS V12'),
(6, 'Velar dizel 4.0 450KS'),
(7, 'Evoque benzin 4.5 350KS '),
(8, 'Evoque dizel 2.5 300KS'),
(9, 'Discovery benzin 4.5 480KS '),
(10, 'Discovery dizel 3.5 400KS '),
(11, 'Defender benzin 5.0 550KS V12'),
(12, 'Defender dizel 5.0 520KS V8');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(45) NOT NULL,
  `products_material` varchar(45) NOT NULL,
  `products_price` varchar(8) NOT NULL,
  `products_describe` varchar(45) NOT NULL,
  `products_color` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`products_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_material`, `products_price`, `products_describe`, `products_color`, `date`, `update_date`, `active`) VALUES
(1, 'Felna Bridge', 'Aluminijum', '15000', '21 inča, ojačana i otporna na udarce', 'Svetlo-siva', '2020-10-31 16:52:03', '2020-12-09 18:52:01', 1),
(2, 'Felna Razor', 'Aluminijum, Hrome', '21000', '22 inča, otporna i ojačana na ogrebotine', 'Sivo-Crna', '2020-10-31 16:55:24', '2020-12-09 18:52:13', 1),
(3, 'Držač za bicikle', 'Aluminijum', '12000', 'Zadnji držač za bicikl. Max 3 bicikla', 'Crna', '2020-10-31 16:57:05', '2020-12-10 20:43:02', 1),
(4, 'Slušalice', 'Plastika', '10000', 'Bežične Land Rover slušalice', 'Zelena', '2020-12-06 21:44:57', '2020-12-09 18:53:42', 1),
(6, 'Nosač za bicikle', 'Aluminijum', '28000', 'Krovni nosač za bicikl. Max 4 bicikla', 'Crna', '2020-12-09 19:12:14', '2020-12-10 20:43:14', 1),
(7, 'Merač pritiska', 'Plastika', '10000', 'Merač pritiska vaduha u gumama', 'Crna', '2020-12-09 19:17:01', NULL, 1),
(8, 'Termos torba', 'Mikrofiber', '15000', 'Torba za hlađenje i grejanje pića, hrane', 'Crno-siva', '2020-12-09 19:29:40', NULL, 1),
(9, 'Putna torba', 'Mikrofiber', '7000', 'Putna torba, kapaciteta 10kg', 'Crn-siva', '2020-12-10 19:34:03', '2020-12-10 20:45:03', 1),
(10, 'Felna Predator', 'Aluminijum', '30000', 'Otporna na ivičnjake, rupe, šahte.', 'Zeleno-siva', '2020-12-10 19:35:36', NULL, 1),
(11, 'Sajla za vuču', 'Čelik', '5000', 'Izdržljiva i čvrsta sajla za vuču', 'Svetlo zelena', '2020-12-10 19:37:13', NULL, 1),
(12, 'Zapkivač za felne', 'Aluminijum', '5000', 'Rezervni zakpivač za felne, 4 komada', 'Bela', '2020-12-10 19:40:19', '2020-12-10 20:44:03', 1),
(13, 'Torba za skije', 'Mikrofiber', '15000', 'Pogodna za avanturiste. Max 4 skije', 'Crna', '2020-12-10 21:03:44', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `services_name` varchar(45) NOT NULL,
  `service_lastname` varchar(45) NOT NULL,
  `service_email` varchar(45) NOT NULL,
  `service_phone` varchar(15) NOT NULL,
  `service_describe` varchar(150) NOT NULL,
  `service_date` date NOT NULL,
  `serviced` varchar(20) NOT NULL DEFAULT 'Na čekanju',
  `date_of_service` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `models_id` int(11) NOT NULL,
  `glitch_id` int(11) NOT NULL,
  `service_admin` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `services_name`, `service_lastname`, `service_email`, `service_phone`, `service_describe`, `service_date`, `serviced`, `date_of_service`, `models_id`, `glitch_id`, `service_admin`) VALUES
(1, 'Boris', 'Perkovic', 'bboris@gmail.com', '123456', 'NEmam pojma nesto ne radi', '2020-11-11', 'Servisiran', '2020-11-18 21:15:25', 4, 2, 'Boris Perkovic'),
(2, 'Darko', 'Darkić', 'darko@gmail.com', '123456', 'Nekakav kvar', '2020-11-11', 'Servisiran', '2020-12-11 16:34:51', 1, 1, 'Boris Perković'),
(3, 'Mika', 'Mikic', 'mmika@gmail.com', '456789', 'Nekakav kvar', '2020-11-12', 'Servisiran', '2020-12-11 16:38:42', 8, 6, 'Boris Perković'),
(4, 'Vukašin', 'Golubović', 'vulegolub@gmail.com', '123456', 'NEkakav kvar', '2020-11-11', 'Servisiran', '2020-12-11 16:36:07', 1, 1, 'Boris Perković'),
(5, 'MIlenko', 'Milenkovic', 'mmilenko@gmail.com', '123456', 'Nekako nece da se spustaju prozoyori', '2020-11-12', 'Odbijen', '2020-12-08 23:19:55', 10, 3, 'Boris Perković'),
(6, 'Kristina', 'Čičić', 'kkile@gmail.com', '4657889', 'Malo sam ga čuknula u rikverc', '2020-11-12', 'Odbijen', '2020-12-08 23:18:55', 7, 6, 'Boris Perković'),
(7, 'Petar', 'Petrović', 'petar@gmail.com', '1234658', 'Nešto na pritisak papučice neće da reaguje', '2020-11-18', 'Servisiran', '2020-11-27 22:34:01', 8, 5, 'Boris Perković'),
(8, 'Marko', 'Marković', 'mare@gmail.com', '4789561', 'Volan se zakoči u toku vožnje...', '2020-11-18', 'Servisiran', '2020-11-21 20:28:00', 9, 4, 'Joca Karburator'),
(9, 'Miško', 'Mišković', 'mmisko@gmail.com', '7757757', 'Nesto ne radi', '2020-11-18', 'Servisiran', '2020-11-21 19:59:55', 10, 4, 'Boris Perković'),
(10, 'Šćepan', 'Šćekić', 'šćele@gmail.com', '4258978', 'Nekakav kvar', '2020-11-18', 'Servisiran', '2020-12-11 16:38:33', 1, 1, 'Boris Perković'),
(11, 'Vera', 'Verkic', 'verka@gmail.com', '434324', 'Nekakav kvar', '2020-11-18', 'Odbijen', '2020-12-11 16:39:47', 8, 2, 'Boris Perković'),
(13, 'Dok', 'Holidej', 'dok@gmail.com', '7852136', 'Nekakav kvar', '2020-11-18', 'Odbijen', '2020-12-11 16:39:31', 1, 1, 'Boris Perković'),
(14, 'Vajat', 'Erp', 'vajta@gmail.com', '3424324', 'Nekakav kvar', '2020-11-18', 'Servisiran', '2020-12-11 16:40:19', 1, 1, 'Boris Perković'),
(15, 'Smilja', 'smiljanic', 'smilja@gmail.com', '065457453232', 'Nekakav kvar', '2020-11-18', 'Odbijen', '2020-12-11 16:39:54', 1, 1, 'Boris Perković'),
(16, 'Nikolina', 'Puzovic', 'nina@gmail.com', '4564654564', 'Neprestano izbacuje neke greske breee', '2020-11-18', 'Odbijen', '2020-11-24 14:20:10', 11, 3, 'Boris Perković'),
(17, 'budimir', 'kriwokuca', 'bbuda@gmail.com', '123467878', 'dsadadasd', '2020-11-20', 'Servisiran', '2020-11-27 22:07:34', 3, 5, 'Boris Perković'),
(18, 'Igor', 'Perkovic', 'igor@gmail.com', '23432424234', 'Ne prebacuje brzine kako treba', '2020-11-21', 'Servisiran', '2020-11-21 19:38:28', 6, 1, 'Boris Perkovic'),
(19, 'Dragan', 'Stojkovic', 'gagi@gmail.com', '564654546546', 'Pocela da se hvata korozija na prednjem delu branika', '2020-12-07', 'Servisiran', '2020-12-07 21:54:47', 12, 6, 'Boris Perković'),
(21, 'Mića', 'Mićković', 'mmića@gmail.com', '5456465465', 'Neče da se spuštaju prozori', '2020-12-09', 'Odbijen', '2020-12-09 13:40:50', 12, 3, 'Boris Perković'),
(22, 'Boban', 'Rajović', 'bobe@gmail.com', '1321345646', 'Ne prebacuje brzine kako treba', '2020-12-09', 'Servisiran', '2020-12-09 13:40:22', 6, 1, 'Boris Perković'),
(23, 'Kića', 'Kićanović', 'kića@gmail.com', '13213213', 'Počelo da guli desno krilo', '2020-12-09', 'Na čekanju', NULL, 7, 6, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `service_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `service_view`;
CREATE TABLE IF NOT EXISTS `service_view` (
`service_id` int(11)
,`services_name` varchar(45)
,`service_lastname` varchar(45)
,`service_email` varchar(45)
,`service_phone` varchar(15)
,`service_describe` varchar(150)
,`service_date` date
,`serviced` varchar(20)
,`service_admin` varchar(50)
,`date_of_service` timestamp
,`models_id` int(11)
,`models_name` varchar(45)
,`glitch_id` int(11)
,`glitch_name` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `testdrive_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `testdrive_view`;
CREATE TABLE IF NOT EXISTS `testdrive_view` (
`testDrive_id` int(11)
,`testDrive_name` varchar(45)
,`testDrive_lastname` varchar(45)
,`testDrive_email` varchar(45)
,`testDrive_phone` varchar(45)
,`testDrive_date` date
,`serviced` varchar(15)
,`testDrive_admin` varchar(50)
,`date_of_testDrive` datetime
,`models_id` int(11)
,`models_name` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `test_drive`
--

DROP TABLE IF EXISTS `test_drive`;
CREATE TABLE IF NOT EXISTS `test_drive` (
  `testDrive_id` int(11) NOT NULL AUTO_INCREMENT,
  `testDrive_name` varchar(45) NOT NULL,
  `testDrive_lastname` varchar(45) NOT NULL,
  `testDrive_email` varchar(45) NOT NULL,
  `testDrive_phone` varchar(45) NOT NULL,
  `testDrive_date` date NOT NULL,
  `serviced` varchar(15) NOT NULL DEFAULT 'Na čekanju',
  `date_of_testDrive` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `models_id` int(11) NOT NULL,
  `testDrive_admin` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`testDrive_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_drive`
--

INSERT INTO `test_drive` (`testDrive_id`, `testDrive_name`, `testDrive_lastname`, `testDrive_email`, `testDrive_phone`, `testDrive_date`, `serviced`, `date_of_testDrive`, `models_id`, `testDrive_admin`) VALUES
(1, 'dasdsa', 'dsadad', 'sdad@gmail.com', '13234656', '2020-12-01', 'Odbijeno', '2020-12-01 18:04:12', 6, 'Boris Perković'),
(2, 'Milica', 'MilisavljeviÄ‡', 'milica@gmail.com', '12346578', '2020-12-02', 'Voženo', '2020-12-01 18:04:02', 8, 'Alen Prost'),
(3, 'Misko', 'Miskovic', 'misko@gmail.com', '323213123', '2020-12-01', 'Voženo', '2020-12-01 18:04:07', 6, 'Boris Perković'),
(4, 'Petar', 'Petrovic', 'ppera@gmail.com', '45645646546', '2020-12-02', 'Voženo', '2020-12-01 18:04:48', 6, 'Alen Prost'),
(5, 'Verka', 'Verkic', 'verka@gmail.com', '789798798798', '2020-12-02', 'Odbijeno', '2020-12-01 18:05:52', 7, 'Alen Prost'),
(6, 'Bobi', 'Marjanovic', 'bobi@gmail.com', '212312313', '2020-12-07', 'Odbijeno', '2020-12-09 00:20:55', 11, 'Boris Perković'),
(7, 'MIlan', 'Kalinic', 'milan@gmail.com', '465465465', '2020-12-09', 'Odbijeno', '2020-12-09 14:44:43', 6, 'Boris Perković'),
(8, 'Ognjen', 'Amidzic', 'ogi@gmail.com', '465465465', '2020-12-09', 'Voženo', '2020-12-09 14:44:31', 3, 'Boris Perković'),
(9, 'Dača', 'Dačićović', 'dača@gmail.com', '465465465', '2020-12-09', 'Na čekanju', NULL, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) NOT NULL,
  `users_lastname` varchar(50) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `users_password` varchar(50) NOT NULL,
  `users_repassword` varchar(50) NOT NULL,
  `users_adress` varchar(50) NOT NULL,
  `users_phone` varchar(13) NOT NULL,
  `users_status` varchar(20) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_lastname`, `users_email`, `users_password`, `users_repassword`, `users_adress`, `users_phone`, `users_status`) VALUES
(1, 'Mika', 'Mikić', 'mmika@gmail.com', 'mmika', 'mmika', 'mmikina 7', '1234678', ''),
(2, 'Pera', 'Perić', 'ppera@gmail.com', 'ppera', 'ppera', 'pperina 8', '132132456', ''),
(3, 'Nemanja', 'Stevanovic', 'nnemke@gmail.com', 'nemke', 'nemke', 'nemketova 10', '456789875', ''),
(4, 'Mića', 'Mićković', 'mmića@gmail.com', 'mmića', 'mmića', 'mićina 50', '132132131', '');

-- --------------------------------------------------------

--
-- Structure for view `basket_view`
--
DROP TABLE IF EXISTS `basket_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `basket_view`  AS  select `users`.`users_id` AS `users_id`,`products`.`products_id` AS `products_id`,`basket`.`basket_id` AS `basket_id`,`users`.`users_name` AS `users_name`,`users`.`users_lastname` AS `users_lastname`,`users`.`users_email` AS `users_email`,`users`.`users_adress` AS `users_adress`,`users`.`users_phone` AS `users_phone`,`products`.`products_name` AS `products_name`,`products`.`products_material` AS `products_material`,`products`.`products_price` AS `products_price`,`products`.`products_describe` AS `products_describe`,`products`.`products_color` AS `products_color`,`basket`.`accepted` AS `accepted`,`basket`.`shop_time` AS `shop_time` from ((`basket` join `users` on((`users`.`users_id` = `basket`.`users_id`))) join `products` on((`products`.`products_id` = `basket`.`products_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `service_view`
--
DROP TABLE IF EXISTS `service_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `service_view`  AS  select `services`.`service_id` AS `service_id`,`services`.`services_name` AS `services_name`,`services`.`service_lastname` AS `service_lastname`,`services`.`service_email` AS `service_email`,`services`.`service_phone` AS `service_phone`,`services`.`service_describe` AS `service_describe`,`services`.`service_date` AS `service_date`,`services`.`serviced` AS `serviced`,`services`.`service_admin` AS `service_admin`,`services`.`date_of_service` AS `date_of_service`,`models`.`models_id` AS `models_id`,`models`.`models_name` AS `models_name`,`glitch`.`glitch_id` AS `glitch_id`,`glitch`.`glitch_name` AS `glitch_name` from ((`services` join `models` on((`services`.`models_id` = `models`.`models_id`))) join `glitch` on((`services`.`glitch_id` = `glitch`.`glitch_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `testdrive_view`
--
DROP TABLE IF EXISTS `testdrive_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `testdrive_view`  AS  select `test_drive`.`testDrive_id` AS `testDrive_id`,`test_drive`.`testDrive_name` AS `testDrive_name`,`test_drive`.`testDrive_lastname` AS `testDrive_lastname`,`test_drive`.`testDrive_email` AS `testDrive_email`,`test_drive`.`testDrive_phone` AS `testDrive_phone`,`test_drive`.`testDrive_date` AS `testDrive_date`,`test_drive`.`serviced` AS `serviced`,`test_drive`.`testDrive_admin` AS `testDrive_admin`,`test_drive`.`date_of_testDrive` AS `date_of_testDrive`,`models`.`models_id` AS `models_id`,`models`.`models_name` AS `models_name` from (`test_drive` join `models` on((`test_drive`.`models_id` = `models`.`models_id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
