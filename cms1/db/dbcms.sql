-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2020 a las 17:44:47
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcms`
--

-- --------------------------------------------------------
CREATE TABLE `user` (
  `user_id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `covers` (
  `covers_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `about` (
  `about_id` int(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `who` (
  `who_id` int(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `destination` (
  `destination_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `charges` (
  `charges_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `tariffs` (
  `tariffs_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `subcriptions` (
  `subcriptions_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `about` (`about_id`, `title`, `content`) VALUES
(1, 'Conoce nuestra flota Moderna', '<p><span style=\"font-family:lucida sans unicode,lucida grande,sans-serif;\"><span style=\"font-size:28px;\"><span style=\"color:#000000;\">Suite</span></span></span><br />\r\n<span style=\"color:#FF0000;\">Asiento Reclinaci&oacute;n 160&ordm;</span><br />\r\nNuestra flota cuenta con buses de un piso, que ofrecen mayor seguridad, estabilidad y mejor descanso. Contamos con 36 asientos Suite de cuero en filas dobles e individuales y asientos ergon&oacute;micos en filas dobles, todos con 160&deg; de reclinaci&oacute;n. Nuestro servicio cuenta con alimentaci&oacute;n a bordo, wifi, tomacorrientes personales y nuestro exclusivo servicio de Streaming DiverTepsa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:comic sans ms,cursive;\">Presidencial</span><br />\r\n<span style=\"color:#008000;\">Asiento Ergon&oacute;mico 145&ordm;</span><br />\r\nNuestra flota cuenta con buses de un piso, que ofrecen mayor seguridad, estabilidad y mejor descanso. Con 40 o 44 asientos ergon&oacute;micos en filas de asientos dobles con 145&deg; de reclinaci&oacute;n. Nuestro servicio cuenta con alimentaci&oacute;n a bordo, wifi, tomacorrientes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:courier new,courier,monospace;\"><span style=\"color:#ADD8E6;\">BIENVENIDO A BORDO</span></span><br />\r\nTepsa Presidencial te ofrece la comodidad que mereces con modernos asientos ergon&oacute;micos. Ofrecemos Entretenimiento a Bordo, asientos con tomacorrientes personales, wifi, comidas, cabina climatizada y servicios higi&eacute;nicos.</p>\r\n\r\n<p><img alt=\"Bus de oltursa\" src=\"https://www.oltursa.pe/static/bus.png\" /></p>');

INSERT INTO `who` (`who_id`, `title`, `content`) VALUES
(1, 'Quienes Somos', '<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"about-logo\">\r\n<div class=\"wp-block-qubely-heading qubely-block-5f32dd\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px; outline: 0px; padding: 10px 0px; vertical-align: baseline; position: relative; z-index: 0; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n<div class=\"qubely-block-heading  \" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: color 0.2s ease-in-out 0s, background-color 0.2s ease-in-out 0s, border-color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s, -webkit-box-shadow 0.2s ease-in-out 0s; position: relative;\">\r\n<div class=\"qubely-heading-container\" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n<h2 class=\"qubely-heading-selector\" style=\"box-sizing: inherit; border: 0px; font-size: 20px; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(255, 0, 97); line-height: 1; position: relative; font-family: Karla, sans-serif; text-transform: uppercase;\">DESDDE 1953</h2>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p class=\"texto-carga\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 25px; color: rgb(128, 130, 133); font-family: -apple-system, BlinkMacSystemFont, \">TEPSA es la empresa pionera en transporte interprovincial de pasajeros. A lo largo de su historia, TEPSA ha recorrido mil y un parajes, desde playas paradis&iacute;acas hasta imponentes cordilleras, pasando incluso las fronteras de nuestro territorio llegando hasta Santiago, Quito y Caracas en los 400 &oacute;mnibus que recorr&iacute;an las pistas del continente.</p>\r\n\r\n<p class=\"texto-carga\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 25px; color: rgb(128, 130, 133); font-family: -apple-system, BlinkMacSystemFont, \">En el 2004, Decidimos realizar un relanzamiento con el firme prop&oacute;sito de convertirnos en la mejor empresa de transporte interprovincial de pasajeros y carga a nivel nacional. Hoy en d&iacute;a contamos con unas de las flotas de &oacute;mnibus m&aacute;s modernas del Per&uacute;, con motores Scania de &uacute;ltima generaci&oacute;n, con control de tracci&oacute;n, sistema de cambios computarizados, frenos ABS, entre otras innovaciones t&eacute;cnicas que hacen de sus buses la flota m&aacute;s moderna del Per&uacute; y una de las m&aacute;s completas de Sudam&eacute;rica.<br style=\"box-sizing: inherit;\" />\r\nUna estricta pol&iacute;tica que tiene a la excelencia en el servicio como su m&aacute;xima premisa nos alienta a esforzarnos por ser los mejores cada d&iacute;a y mantener el sitial de ser&hellip; LOS PROFESIONALES!</p>\r\n\r\n<div class=\"wp-block-qubely-heading qubely-block-5550e2\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px; outline: 0px; padding: 10px 0px; vertical-align: baseline; position: relative; z-index: 0; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n<div class=\"qubely-block-heading  \" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: color 0.2s ease-in-out 0s, background-color 0.2s ease-in-out 0s, border-color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s, -webkit-box-shadow 0.2s ease-in-out 0s; position: relative;\">\r\n<div class=\"qubely-heading-container\" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n<h2 class=\"qubely-heading-selector\" style=\"box-sizing: inherit; border: 0px; font-size: 20px; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(255, 0, 97); line-height: 1; position: relative; font-family: Karla, sans-serif; text-transform: uppercase;\">MISI&Oacute;N</h2>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p class=\"texto-carga\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 25px; color: rgb(128, 130, 133); font-family: -apple-system, BlinkMacSystemFont, \">Buscar la excelencia en el servicio y atenci&oacute;n al cliente, bas&aacute;ndonos en las premisas de dedicaci&oacute;n, eficiencia, puntualidad, calidad y seguridad; buscando siempre las mejores pr&aacute;cticas o alternativas para ofrecer soluciones r&aacute;pidas y oportunas en el marco de la relaci&oacute;n costo-beneficio.</p>\r\n\r\n<div class=\"wp-block-qubely-heading qubely-block-42dff0\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px; outline: 0px; padding: 10px 0px; vertical-align: baseline; position: relative; z-index: 0; color: rgb(58, 58, 58); font-family: -apple-system, BlinkMacSystemFont, \">\r\n<div class=\"qubely-block-heading  \" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; transition: color 0.2s ease-in-out 0s, background-color 0.2s ease-in-out 0s, border-color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s, -webkit-box-shadow 0.2s ease-in-out 0s; position: relative;\">\r\n<div class=\"qubely-heading-container\" style=\"box-sizing: inherit; border: 0px; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">\r\n<h2 class=\"qubely-heading-selector\" style=\"box-sizing: inherit; border: 0px; font-size: 20px; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; color: rgb(255, 0, 97); line-height: 1; position: relative; font-family: Karla, sans-serif; text-transform: uppercase;\">VISI&Oacute;N</h2>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p class=\"texto-carga\" helvetica=\"\" segoe=\"\" style=\"box-sizing: inherit; border: 0px; font-size: 15px; margin: 0px 0px 1.6em; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 25px; color: rgb(128, 130, 133); font-family: -apple-system, BlinkMacSystemFont, \">Llegar a ser la mejor empresa de transporte interprovincial de pasajeros y de carga del Per&uacute;.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p><img alt=\"Bus de oltursa\" src=\"https://www.oltursa.pe/static/bus.png\" /></p>');


INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrador');


ALTER TABLE `covers`
  ADD PRIMARY KEY (`covers_id`);


ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

ALTER TABLE `who`
  ADD PRIMARY KEY (`who_id`);


ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

 
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`);

ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

ALTER TABLE `charges`
  ADD PRIMARY KEY (`charges_id`);

ALTER TABLE `tariffs`
  ADD PRIMARY KEY (`tariffs_id`);

ALTER TABLE `subcriptions`
  ADD PRIMARY KEY (`subcriptions_id`);


ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `covers`
  MODIFY `covers_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `about`
  MODIFY `about_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `who`
  MODIFY `who_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `destination`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;


ALTER TABLE `charges`
  MODIFY `charges_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;


ALTER TABLE `tariffs`
  MODIFY `tariffs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;




ALTER TABLE `subcriptions`
  MODIFY `subcriptions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
