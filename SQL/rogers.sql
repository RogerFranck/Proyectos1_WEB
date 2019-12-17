-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 07:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rogers`
--

-- --------------------------------------------------------

--
-- Table structure for table `juego1`
--

CREATE TABLE `juego1` (
  `id_juego1` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `oper` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta1` int(50) NOT NULL,
  `respuesta2` int(50) NOT NULL,
  `respuesta3` int(50) NOT NULL,
  `solucion` int(50) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `juego1`
--

INSERT INTO `juego1` (`id_juego1`, `id_nivel`, `oper`, `respuesta1`, `respuesta2`, `respuesta3`, `solucion`, `numero`) VALUES
(1, 1, '1x1', 2, 1, 11, 1, 1),
(2, 1, '1x2', 2, 12, 3, 2, 2),
(3, 1, '1x3', 13, 4, 3, 3, 3),
(4, 1, '1x4', 4, 5, 14, 4, 4),
(5, 1, '1x5', 6, 5, 15, 5, 5),
(6, 1, '1x6', 6, 7, 16, 6, 6),
(7, 1, '1x7', 17, 7, 8, 7, 7),
(8, 1, '1x8', 18, 9, 8, 8, 8),
(9, 1, '1x9', 19, 10, 9, 9, 9),
(10, 1, '1x10', 10, 11, 1, 10, 10),
(11, 2, '2x1', 4, 2, 3, 2, 1),
(12, 2, '2x2', 5, 4, 2, 4, 2),
(13, 2, '2x3', 6, 5, 8, 6, 3),
(14, 2, '2x4', 3, 6, 8, 8, 4),
(15, 2, '2x5', 10, 11, 6, 10, 5),
(16, 2, '2x6', 11, 10, 12, 12, 6),
(17, 2, '2x7', 13, 14, 12, 14, 7),
(18, 2, '2x8', 15, 16, 10, 16, 8),
(19, 2, '2x9', 18, 17, 16, 18, 9),
(20, 2, '2x10', 10, 20, 12, 20, 10),
(21, 4, '3x1', 1, 3, 6, 3, 1),
(22, 4, '3x2', 6, 5, 3, 6, 2),
(23, 4, '3x3', 7, 6, 9, 9, 3),
(24, 4, '3x4', 7, 12, 11, 12, 4),
(25, 4, '3x5', 11, 10, 15, 15, 5),
(26, 4, '3x6', 12, 14, 18, 18, 6),
(27, 4, '3x7', 10, 19, 21, 21, 7),
(28, 4, '3x8', 24, 15, 23, 24, 8),
(29, 4, '3x9', 23, 27, 26, 27, 9),
(30, 4, '3x10', 26, 24, 30, 30, 10),
(31, 5, '4x1', 3, 1, 4, 4, 1),
(32, 5, '4x2', 8, 6, 2, 8, 2),
(33, 5, '4x3', 12, 7, 11, 12, 3),
(34, 5, '4x4', 14, 16, 8, 16, 4),
(35, 5, '4x5', 20, 19, 17, 20, 5),
(36, 5, '4x6', 22, 24, 26, 24, 6),
(37, 5, '4x7', 26, 27, 28, 28, 7),
(38, 5, '4x8', 27, 32, 29, 32, 8),
(39, 5, '4x9', 33, 34, 36, 36, 9),
(40, 5, '4x10', 40, 39, 35, 40, 10),
(41, 6, '5x1', 6, 1, 5, 5, 1),
(42, 6, '5x2', 15, 7, 10, 10, 2),
(43, 6, '5x3', 14, 15, 13, 15, 3),
(44, 6, '5x4', 22, 18, 20, 20, 4),
(45, 6, '5x5', 25, 24, 20, 25, 5),
(46, 6, '5x6', 24, 26, 30, 30, 6),
(47, 6, '5x7', 36, 35, 33, 35, 7),
(48, 6, '5x8', 40, 45, 38, 40, 8),
(49, 6, '5x9', 43, 46, 45, 45, 9),
(50, 6, '5x10', 50, 55, 10, 50, 10),
(51, 7, '6x1', 6, 4, 1, 6, 1),
(52, 7, '6x2', 9, 12, 8, 12, 2),
(53, 7, '6x3', 18, 11, 16, 18, 3),
(54, 7, '6x4', 12, 23, 24, 24, 4),
(55, 7, '6x5', 28, 30, 25, 30, 5),
(56, 7, '6x6', 33, 34, 36, 36, 6),
(57, 7, '6x7', 42, 47, 39, 42, 7),
(58, 7, '6x8', 46, 44, 48, 48, 8),
(59, 7, '6x9', 49, 54, 43, 54, 9),
(60, 7, '6x10', 55, 65, 60, 60, 10),
(61, 8, '7x1', 8, 1, 7, 7, 1),
(62, 8, '7x2', 11, 14, 13, 14, 2),
(63, 8, '7x3', 17, 19, 21, 21, 3),
(64, 8, '7x4', 28, 27, 33, 28, 4),
(65, 8, '7x5', 35, 30, 40, 35, 5),
(66, 8, '7x6', 37, 39, 42, 42, 6),
(67, 8, '7x7', 49, 48, 47, 49, 7),
(68, 8, '7x8', 56, 59, 57, 56, 8),
(69, 8, '7x9', 61, 63, 67, 63, 9),
(70, 8, '7x10', 70, 75, 65, 70, 10),
(71, 9, '8x1', 9, 8, 1, 8, 1),
(72, 9, '8x2', 16, 14, 18, 16, 2),
(73, 9, '8x3', 24, 22, 19, 24, 3),
(74, 9, '8x4', 34, 31, 32, 32, 4),
(75, 9, '8x5', 44, 40, 45, 40, 5),
(76, 9, '8x6', 48, 44, 49, 48, 6),
(77, 9, '8x7', 57, 54, 56, 56, 7),
(78, 9, '8x8', 68, 64, 62, 64, 8),
(79, 9, '8x9', 76, 79, 72, 72, 9),
(80, 9, '8x10', 80, 85, 75, 80, 10),
(81, 10, '9x1', 1, 10, 9, 9, 1),
(82, 10, '9x2', 14, 18, 16, 18, 2),
(83, 10, '9x3', 27, 26, 23, 27, 3),
(84, 10, '9x4', 31, 34, 36, 36, 4),
(85, 10, '9x5', 40, 45, 50, 45, 5),
(86, 10, '9x6', 54, 56, 51, 54, 6),
(87, 10, '9x7', 69, 67, 63, 63, 7),
(88, 10, '9x8', 77, 72, 74, 72, 8),
(89, 10, '9x9', 81, 93, 86, 81, 9),
(90, 10, '9x10', 90, 99, 95, 90, 10),
(91, 11, '10x1', 10, 1, 11, 10, 1),
(92, 11, '10x2', 17, 15, 20, 20, 2),
(93, 11, '10x3', 30, 25, 35, 30, 3),
(94, 11, '10x4', 45, 40, 35, 40, 4),
(95, 11, '10x5', 48, 55, 50, 50, 5),
(96, 11, '10x6', 60, 66, 63, 60, 6),
(97, 11, '10x7', 77, 70, 75, 70, 7),
(98, 11, '10x8', 80, 88, 84, 80, 8),
(99, 11, '10x9', 85, 90, 99, 90, 9),
(100, 11, '10x10', 100, 10, 95, 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `niveles`
--

CREATE TABLE `niveles` (
  `id_nivel` int(11) NOT NULL,
  `id_temas` int(11) NOT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `video` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `niveles`
--

INSERT INTO `niveles` (`id_nivel`, `id_temas`, `nivel`, `video`, `titulo`, `img`) VALUES
(1, 1, '1', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/kMwizihC7XA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 1', '<img src=\"CSS/Tabla-multiplicar-1.png\" width=\"200px\">'),
(2, 1, '2', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/vJ_xgDoW36o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 2', '<img src=\"CSS/Tabla-multiplicar-2.png\" width=\"200px\">'),
(3, 2, '1', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/bSdtvfBQd6c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Proximamente', '<img src=\"CSS/Tabla-multiplicar-1.png\" width=\"200px\">'),
(4, 1, '3', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/mtulY07Z0gM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 3', '<img src=\"CSS/Tabla-multiplicar-3.png\" width=\"200px\">'),
(5, 1, '4', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/iZZ2s_5vJiE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 4', '<img src=\"CSS/Tabla-multiplicar-4.png\" width=\"200px\">'),
(6, 1, '5', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/bf_jOaReJy4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 5', '<img src=\"CSS/Tabla-multiplicar-5.png\" width=\"200px\">'),
(7, 1, '6', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/xAzJ60BDd-A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 6', '<img src=\"CSS/Tabla-multiplicar-6.png\" width=\"200px\">'),
(8, 1, '7', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/J3eDZAmn0wE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 7', '<img src=\"CSS/Tabla-multiplicar-7.png\" width=\"200px\">'),
(9, 1, '8', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/CkZSMP3q57g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 8', '<img src=\"CSS/Tabla-multiplicar-8.png\" width=\"200px\">'),
(10, 1, '9', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/-koAHXeTfkc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 9', '<img src=\"CSS/Tabla-multiplicar-9.png\" width=\"200px\">'),
(11, 1, '10', '<iframe width=\"90%\" height=\"315\" src=\"https://www.youtube.com/embed/-shEhSdb9fc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'La tabla del 10', '<img src=\"CSS/Tabla-multiplicar-10.png\" width=\"200px\">'),
(12, 1, 'Exámen', '', 'Exámen', '');

-- --------------------------------------------------------

--
-- Table structure for table `progreso`
--

CREATE TABLE `progreso` (
  `id_progreso` int(11) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `terminado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `progreso`
--

INSERT INTO `progreso` (`id_progreso`, `id_nivel`, `id_tema`, `id_usuario`, `terminado`) VALUES
(1, 1, 1, 1, 0),
(2, 2, 1, 1, 0),
(3, 3, 1, 1, 0),
(4, 4, 1, 1, 0),
(5, 5, 1, 1, 0),
(6, 6, 1, 1, 0),
(7, 7, 1, 1, 0),
(8, 8, 1, 1, 0),
(9, 9, 1, 1, 0),
(10, 10, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temas`
--

CREATE TABLE `temas` (
  `id_temas` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `texto_ayuda` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `temas`
--

INSERT INTO `temas` (`id_temas`, `nombre`, `descri`, `texto_ayuda`, `titulo`) VALUES
(1, 'Multiplicación', 'significa las veces que se suma un número y se representa con una X', 'Preciona los botones para iniciar las prácticas de las tablas', 'La multiplicación'),
(2, 'Próximamente', 'No disponible', 'No disponible', 'No disponible'),
(3, 'Próximamente', 'No disponible', 'No disponible', 'No disponible'),
(4, 'Próximamente', 'No disponible', 'No disponible', 'No disponible');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `e-mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `usuario`, `e-mail`, `password`) VALUES
(1, 'roger', 'roger@example.com', 'admin'),
(2, 'admin', 'admin@example.com', 'hola2'),
(3, 'prueba', 'prueba@exmaple.com', 'hola3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juego1`
--
ALTER TABLE `juego1`
  ADD PRIMARY KEY (`id_juego1`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indexes for table `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_nivel`),
  ADD KEY `id_temas` (`id_temas`);

--
-- Indexes for table `progreso`
--
ALTER TABLE `progreso`
  ADD PRIMARY KEY (`id_progreso`),
  ADD KEY `id_nivel` (`id_nivel`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_temas`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `juego1`
--
ALTER TABLE `juego1`
  MODIFY `id_juego1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `progreso`
--
ALTER TABLE `progreso`
  MODIFY `id_progreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id_temas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `juego1`
--
ALTER TABLE `juego1`
  ADD CONSTRAINT `juego1_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`);

--
-- Constraints for table `niveles`
--
ALTER TABLE `niveles`
  ADD CONSTRAINT `niveles_ibfk_1` FOREIGN KEY (`id_temas`) REFERENCES `temas` (`id_temas`);

--
-- Constraints for table `progreso`
--
ALTER TABLE `progreso`
  ADD CONSTRAINT `progreso_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`),
  ADD CONSTRAINT `progreso_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`Id_usuario`),
  ADD CONSTRAINT `progreso_ibfk_3` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_temas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
