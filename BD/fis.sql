-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2017 a las 22:14:19
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id_cancha` int(11) NOT NULL,
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`id_cancha`, `id_gym`, `Nombre`, `Precio`) VALUES
(1, 1, 'Cancha Futbol 1', 10000),
(2, 1, 'Cancha Futbol 2', 15000),
(3, 2, 'Piscina Olimpica', 20000),
(4, 3, 'Cancha Tennis 1', 10000),
(5, 3, 'Cancha Tennis 2', 15000),
(6, 3, 'Cancha Tennis 3 ', 20000),
(7, 3, 'Cancha Tennis 4', 25000),
(8, 4, 'Cancha basquetbol 1', 15000),
(9, 4, 'Cancha basquetbol 2', 15000),
(10, 4, 'Cancha Voleibol 1', 10000),
(11, 4, 'Cancha Voleibol 2', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id_gym`, `Nombre`, `Descripcion`, `Imagen`) VALUES
(1, 'Condor Rojas Norte', 'El terreno de juego debe ser de cesped natural o artificial. La forma del campo es rectangular, siendo su largo entre 90 y 120 metros, y su ancho entre 45 y 90 metros.', '\"http://www.rptnoticias.com/wp-content/uploads/2015/10/rpt-noticias-valledupar-estadio.jpg\"'),
(2, 'El Phelps', 'Una piscina olimpica debe tener las siguientes especificaciones: largo de 50 metros, ancho de 21 metros como minimo, 10 carriles de 2,5 metros, profundidad de 2 metros. ', '\"http://swim.torremolinos.es/wpsite/wp-content/uploads/2012/01/plantilla-banner-promotion-PVC-panor%C3%A1mica1.jpg\"'),
(3, 'Gimnasio Massu', 'En el tenis existen tres superficies tradicionales: cesped, arcilla y asfalto, a los cuales se les pueden agregar las carpetas bajo techo, para completar el cuadro de distintas condiciones.', '\"http://clubtenishellin.com/wp-content/uploads/2015/02/1600x760-Pistas-de-noche-700x300.jpg\"'),
(4, 'Gimnasio NBA', 'Las medidas que debe tener una cancha de voley debe ser un rectangulo de 18 metros de largo por 9 metros de ancho y en su parte media debe haber una red para separar los dos equipos.', '\"http://clubtenishellin.com/wp-content/uploads/2015/02/1600x760-Pista-Baloncesto-700x300.jpg\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_cancha` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id_cancha`),
  ADD KEY `id_gym` (`id_gym`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id_gym`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_cancha` (`id_cancha`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD CONSTRAINT `canchas_ibfk_1` FOREIGN KEY (`id_gym`) REFERENCES `gym` (`id_gym`);

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_cancha`) REFERENCES `canchas` (`id_cancha`),
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
