-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 04:58:20
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `datper` ()  select idPersona, nombre, apellido, documento, tipoDoc, direccion, telefono from persona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datperID` (IN `docext` VARCHAR(12))  select idPersona, nombre, apellido, documento, tipoDoc, direccion, telefono
				from persona
				where documento = docext$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datveh` (IN `plaext` VARCHAR(6))  select idVehiculo, marca, placa, t.clase , p.nombre, p.apellido, p.documento
				from vehiculo v, persona p, tipoVehiculo t
				where placa = plaext
				and v.idPersona = p.idPersona
				and idTipo = t.ipTipo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datvehALL` ()  select idVehiculo, marca, placa, t.clase , p.nombre, p.apellido, p.documento
				from vehiculo v, persona p, tipoVehiculo t
				where v.idPersona = p.idPersona
				and idTipo = t.ipTipo
                order by idVehiculo$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bahia`
--

CREATE TABLE `bahia` (
  `idBahia` decimal(12,0) NOT NULL,
  `idParqueadero` decimal(12,0) NOT NULL,
  `disponible` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bahia`
--

INSERT INTO `bahia` (`idBahia`, `idParqueadero`, `disponible`) VALUES
('1', '1', b'1'),
('2', '1', b'1'),
('3', '1', b'1'),
('4', '1', b'1'),
('5', '1', b'1'),
('6', '1', b'1'),
('7', '1', b'1'),
('8', '1', b'1'),
('9', '2', b'1'),
('10', '2', b'1'),
('11', '2', b'1'),
('12', '2', b'1'),
('13', '2', b'1'),
('14', '2', b'1'),
('15', '2', b'1'),
('16', '2', b'0'),
('17', '3', b'1'),
('18', '3', b'0'),
('19', '3', b'0'),
('20', '3', b'0'),
('21', '3', b'0'),
('22', '3', b'0'),
('23', '3', b'0'),
('24', '3', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` decimal(12,0) NOT NULL,
  `idBahia` decimal(12,0) NOT NULL,
  `idVehiculo` decimal(12,0) NOT NULL,
  `tiempo` bigint(20) DEFAULT NULL,
  `costo` bigint(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueadero`
--

CREATE TABLE `parqueadero` (
  `IdParqueadero` decimal(12,0) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parqueadero`
--

INSERT INTO `parqueadero` (`IdParqueadero`, `nombre`, `ubicacion`) VALUES
('1', 'P1', 'Piso 1'),
('2', 'P2', 'Piso 2'),
('3', 'P3', 'Piso 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` decimal(12,0) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `tipoDoc` varchar(3) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombre`, `apellido`, `documento`, `tipoDoc`, `direccion`, `telefono`) VALUES
('1', 'Nataly', 'Moreno', '1015427333', 'CC', 'Funza', '3112523679'),
('2', 'andrea', 'rojas', '435468923', 'Ced', 'Avenida siempre viva ', '76666664'),
('3', 'pedro', 'florez', '12345', 'CC', 'cra 1 c 12-32', '3215436'),
('4', 'pepito', 'castro', '12374982', 'cc', 'avenida', '4233189'),
('5', 'ana', 'rojas', '98234723', 'cc', 'calle', '8573'),
('6', 'carlos', 'pinilla', '8472', 'cc', 'transversal', '5434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `idTarifa` decimal(12,0) NOT NULL,
  `costo` bigint(20) NOT NULL,
  `idTipo` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`idTarifa`, `costo`, `idTipo`) VALUES
('1', 55, '2'),
('2', 70, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehiculo`
--

CREATE TABLE `tipovehiculo` (
  `ipTipo` decimal(12,0) NOT NULL,
  `Clase` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipovehiculo`
--

INSERT INTO `tipovehiculo` (`ipTipo`, `Clase`) VALUES
('1', 'Publico'),
('2', 'Privado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` decimal(12,0) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `placa` varchar(6) DEFAULT NULL,
  `idPersona` decimal(12,0) NOT NULL,
  `idTipo` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `marca`, `placa`, `idPersona`, `idTipo`) VALUES
('1', 'Chevrotet', 'UEW598', '1', '2'),
('2', 'mazda', 'ytu675', '2', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bahia`
--
ALTER TABLE `bahia`
  ADD PRIMARY KEY (`idBahia`),
  ADD UNIQUE KEY `bahia_idBahia_IDX` (`idBahia`),
  ADD KEY `bahia_idParqueadero_IDX` (`idParqueadero`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`),
  ADD UNIQUE KEY `pago_idPago_IDX` (`idPago`),
  ADD KEY `pago_idBahia_IDX` (`idBahia`),
  ADD KEY `pago_idVehiculo_IDX` (`idVehiculo`);

--
-- Indices de la tabla `parqueadero`
--
ALTER TABLE `parqueadero`
  ADD PRIMARY KEY (`IdParqueadero`),
  ADD UNIQUE KEY `parqueadero_IdParqueadero_IDX` (`IdParqueadero`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD UNIQUE KEY `persona_idPersona_IDX` (`idPersona`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`idTarifa`),
  ADD UNIQUE KEY `tarifa_idTarifa_IDX` (`idTarifa`),
  ADD KEY `tarifa_idTipo_IDX` (`idTipo`);

--
-- Indices de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  ADD PRIMARY KEY (`ipTipo`),
  ADD UNIQUE KEY `tipoVehiculo_ipTipo_IDX` (`ipTipo`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD UNIQUE KEY `vehiculo_idVehiculo_IDX` (`idVehiculo`),
  ADD KEY `vehiculo_idPersona_IDX` (`idPersona`),
  ADD KEY `vehiculo_idTipo_IDX` (`idTipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bahia`
--
ALTER TABLE `bahia`
  ADD CONSTRAINT `bahia_parqueadero_FK` FOREIGN KEY (`idParqueadero`) REFERENCES `parqueadero` (`IdParqueadero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_bahia_FK` FOREIGN KEY (`idBahia`) REFERENCES `bahia` (`idBahia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pago_vehiculo_FK` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`idVehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `tarifa_tipoVehiculo_FK` FOREIGN KEY (`idTipo`) REFERENCES `tipovehiculo` (`ipTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_persona_FK` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehiculo_tipoVehiculo_FK` FOREIGN KEY (`idTipo`) REFERENCES `tipovehiculo` (`ipTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
