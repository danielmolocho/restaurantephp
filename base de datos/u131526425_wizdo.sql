-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-06-2018 a las 03:27:00
-- Versión del servidor: 10.2.15-MariaDB
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u131526425_wizdo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `idbebidas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`idbebidas`, `nombre`, `precio`, `imagen`, `valor`) VALUES
(7, 'BLUE LAGOON', '55.00', 'blue-lagoon-cocktail.jpg', '1'),
(8, 'PALOMA', '60.00', 'paloma.jpg', '2'),
(9, 'LAS ROCAS', '60.00', 'Whisky-en-las-rocas.jpg', '3'),
(10, 'CUBA LIBRE', '70.00', 'cuba-libre.jpg', '4'),
(11, 'BLACK RUSSIAN', '70.00', 'black-russian.jpg', '5'),
(12, 'SHOT TEQUILA', '40.00', 'tequila.jpg', '6'),
(13, 'SCREWDRIVER', '60.00', 'destornillador.jpg', '7'),
(14, 'CHARRO NEGRO', '60.00', '450_1000.jpg', '8'),
(15, 'TOXIC LIMEADE', '70.00', 'toxic.jpg', '9'),
(16, 'ADELITA', '70.00', 'adelita.jpg', '10'),
(17, 'TEQUILA TORONJA', '80.00', 'toronja.jpg', '11'),
(18, 'BLACK MEXICAN', '89.00', 'black.jpg', '12'),
(19, 'VERTIGO', '78.00', 'vertigo.jpg', '13'),
(20, 'CUCARACHA', '69.00', 'cucaracha.jpg', '14'),
(21, 'HASTA NUNCA', '100.00', 'hasta.jpg', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botellas_bebidas`
--

CREATE TABLE `botellas_bebidas` (
  `idbotellas_bebidas` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `cantidad_botella` decimal(10,2) DEFAULT NULL,
  `cantidad_limite` decimal(10,2) DEFAULT NULL,
  `fecha_entrada` varchar(45) DEFAULT NULL,
  `valor_unidad` decimal(10,2) DEFAULT NULL,
  `tipo_empaque` varchar(45) DEFAULT NULL,
  `proveedor_idproveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `botellas_bebidas`
--

INSERT INTO `botellas_bebidas` (`idbotellas_bebidas`, `nombre`, `marca`, `cantidad_botella`, `cantidad_limite`, `fecha_entrada`, `valor_unidad`, `tipo_empaque`, `proveedor_idproveedor`) VALUES
(1, 'LICOR DE CAFE', 'KHULEA', '46.00', '10.00', '06/12/2018', '120.00', 'CAJA', 4),
(2, 'WHYSKEY', 'JACK DANIELS', '48.00', '5.00', '06/12/2018', '70.00', 'CAJA', 4),
(3, 'RON', 'CAPITAN MORGAN', '47.00', '5.00', '06/21/2018', '130.00', 'CAJA', 4),
(4, 'LICOR NARANJA', 'CURACAO', '44.00', '5.00', '06/21/2018', '140.00', 'CAJA', 5),
(5, 'VODKA', 'OSO NEGRO', '37.00', '5.00', '06/21/2018', '130.00', 'CAJA', 5),
(6, 'TEQUILA', 'JOSE CUERVO', '39.00', '5.00', '06/21/2018', '150.00', 'CAJA', 4),
(7, 'COLA', 'COCACOLA', '50.00', '5.00', '06/21/2018', '50.00', 'CAJA', 1),
(8, 'REFRESCO LIMON', 'SPRITE', '47.00', '5.00', '06/21/2018', '20.00', 'CAJA', 1),
(9, 'REFRESCO TORONJA', 'SQUIRT', '90.00', '10.00', '06/21/2018', '20.00', 'CAJA', 1),
(10, 'JUGO LIMON', 'DEL VALLE', '50.00', '5.00', '06/21/2018', '20.00', 'CAJA', 1),
(11, 'JUGO NARANJA', 'DEL VALLE', '62.00', '5.00', '06/14/2018', '17.00', 'CAJA', 1),
(12, 'JUGO ARANDANO', 'DEL VALLE', '80.00', '5.00', '06/21/2018', '30.00', 'CAJA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id` int(11) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, 'Galaxy s4', 'galaxy.jpg', '9800', '2', '19600'),
(2, 1, 'cebolla', 'cebolla.jpg', '10.5', '1', '10.5'),
(3, 2, 'computadora hp', 'computadora.jpg', '7400.5', '1', '7400.5'),
(4, 2, 'Elemnt Skateboard', 'element.jpg', '700', '5', '3500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_academico_info`
--

CREATE TABLE `empleado_academico_info` (
  `idempleado_general_aca` int(11) NOT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `habilidades` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_academico_info`
--

INSERT INTO `empleado_academico_info` (`idempleado_general_aca`, `nivel`, `titulo`, `cedula`, `habilidades`) VALUES
(1, 'dsvds', 'dvds', 5345, 'vdsvds'),
(2, 'licenciatura', 'si', 34324324, 'cocinar'),
(3, 'fbfgbf', 'fbfsgbs', 45262464, 'ngdhndhgngd'),
(4, 'fdgs', 'fdgsfd', 43535, 'fdbfdb'),
(5, 'cxvzv', 'fdz', 43, 'gfhf'),
(6, 'NHVH', 'HVHJ', 7567, 'HVHVH'),
(7, 'ngcdnh', 'vgdgh', 556365, 'nbcngchg'),
(8, 'FGBF', 'BFDBD', 5646, 'GFHBFD'),
(9, 'rgrd', 'bgfbgfb', 45435, 'gfnbgfn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_contrato`
--

CREATE TABLE `empleado_contrato` (
  `idempleado_general_con` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_contrato`
--

INSERT INTO `empleado_contrato` (`idempleado_general_con`, `tipo`, `fecha_inicio`, `fecha_fin`, `duracion`) VALUES
(1, 'vdasv', '24-04-2018', '25-04-2018', '3'),
(2, 'trimestral', '24-04-2018', '24-07-2018', '3'),
(3, 'fds', '24-04-2018', '24-04-2018', '3'),
(4, '', '', '', '3'),
(5, 'fvd', '24-04-2018', '22-04-2018', '3'),
(6, 'trshtgr', '23-04-2018', '30-04-2018', '3'),
(7, 'BFDBFDB', '02-05-2018', '29-05-2018', '3'),
(8, 'dagf', '23-05-2018', '30-05-2018', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_general`
--

CREATE TABLE `empleado_general` (
  `idempleado_general` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ape_pat` varchar(45) NOT NULL,
  `ape_mat` varchar(45) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_general`
--

INSERT INTO `empleado_general` (`idempleado_general`, `nombre`, `ape_pat`, `ape_mat`, `sexo`, `direccion`, `edad`, `correo`, `telefono`) VALUES
(1, 'dsfd', 'dsfds', 'dsf', 'dfsa', 'dsfa', 3, 'dss@dvgds', 3),
(2, 'DANIEL', 'ISLAS', 'CUERO', 'MASCULINO', 'STA BARBARA', 23, 'crew_dic@hotmail.com', 41189258),
(3, 'miguek', 'fvdsaf', 'ttrbtr', 'fbvsdfbsd', 'fdvbsfdbvfds', 12, 'fbsfhb@fhfh', 3453535),
(4, 'ghdg', '', '', '', '', 5, 'fb@d', 564),
(5, 'fvfdsgv', 'fdvsfd', 'fdvbsfd', 'fvsdf', 'fvsdv', 5, 'fbs@fd', 435435),
(6, 'dfda', 'dvav', 'fda', 'fda', 'dfag', 23, 'fg@hv', 325),
(7, 'DGFD', 'FDGSD', 'FGSD', 'FGS', 'FDGSD', 4, 'HHV@H', 4565),
(8, 'SFDG', 'FDGS', 'SGG', 'GDSDG', 'GDG', 45, 'FGBHS@BF', 5464636),
(9, 'daniel', 'islas', 'cuero', 'fbf', 'fbdbf', 24, 's@dfg', 435345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_puesto`
--

CREATE TABLE `empleado_puesto` (
  `idempleado_general_pue` int(11) NOT NULL,
  `turno` varchar(45) DEFAULT NULL,
  `hora_entrada` int(11) DEFAULT NULL,
  `hora_salida` int(11) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_puesto`
--

INSERT INTO `empleado_puesto` (`idempleado_general_pue`, `turno`, `hora_entrada`, `hora_salida`, `puesto`, `usuario`, `clave`, `estado`) VALUES
(1, 'dvdsa', 4, 5, 'dvgfd', 'dfsga', 'das', 'DESACTIVADA'),
(2, 'vespertino', 2, 10, 'COCINA', 'danielic', '1234', 'activa'),
(3, 'hgdjhgd', 5, 8, 'RECURSOSHUMANOS', 'miguels', '1234', 'DESACTIVADA'),
(4, 'fbfdb', 5, 6, 'RECURSOSHUMANOS', 'dan', '123', 'ACTIVA'),
(5, 'gfhd', 4, 9, 'ALMACEN', 'bruno', '1234', 'ACTIVA'),
(6, 'HHJ', 7, 9, 'COMPRAS', 'SIX', '12', 'ACTIVA'),
(7, 'dghd', 3, 9, 'ALMACEN', 'miche', '123', 'n'),
(8, 'FGBBB', 6, 9, 'RECEPCION', 'DRE', '1234', 'ACTIVA'),
(9, 'matutino', 4, 9, 'BAR', 'big', '123', 'ACTIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes_platillo`
--

CREATE TABLE `ingredientes_platillo` (
  `idingredientes_platillo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `cantidad_kilos` decimal(10,2) DEFAULT NULL,
  `cantidad_limite` decimal(10,2) DEFAULT NULL,
  `fecha_entrada` varchar(45) DEFAULT NULL,
  `valor_unidad` decimal(10,2) DEFAULT NULL,
  `tipo_empaque` varchar(45) DEFAULT NULL,
  `proveedor_idproveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingredientes_platillo`
--

INSERT INTO `ingredientes_platillo` (`idingredientes_platillo`, `nombre`, `marca`, `cantidad_kilos`, `cantidad_limite`, `fecha_entrada`, `valor_unidad`, `tipo_empaque`, `proveedor_idproveedor`) VALUES
(1, 'CARNE RES', 'OTROS', '168.00', '20.00', '06/08/2018', '180.00', 'caja', 3),
(2, 'CEBOLLA', 'OTROS', '37.40', '5.00', '06/12/2018', '40.00', 'CAJA', 6),
(3, 'CHULETA', 'OTROS', '59.00', '10.00', '06/21/2018', '80.00', 'CAJA', 3),
(4, 'CREMA', 'LALA', '14.00', '4.00', '06/21/2018', '27.00', 'CAJA', 7),
(5, 'SALMON', 'OTROS', '39.40', '8.00', '06/21/2018', '170.00', 'CAJA', 2),
(6, 'POLLO', 'OTRO', '40.00', '6.00', '06/21/2018', '80.00', 'CAJA', 3),
(7, 'MACARRON', 'OTROS', '50.00', '8.00', '06/21/2018', '30.00', 'CAJA', 8),
(8, 'CHILE', 'OTRO', '49.40', '4.00', '22/06/2018', '20.00', 'CAJA', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes_platillo_has_platillos`
--

CREATE TABLE `ingredientes_platillo_has_platillos` (
  `ingredientes_platillo_idingredientes_platillo` int(11) NOT NULL,
  `platillos_idplatillos` int(10) UNSIGNED NOT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingredientes_platillo_has_platillos`
--

INSERT INTO `ingredientes_platillo_has_platillos` (`ingredientes_platillo_idingredientes_platillo`, `platillos_idplatillos`, `cantidad`) VALUES
(1, 9, '1.00'),
(1, 13, '0.80'),
(2, 9, '0.30'),
(2, 10, '0.30'),
(2, 11, '0.30'),
(2, 12, '0.50'),
(2, 13, '0.40'),
(2, 14, '0.40'),
(3, 11, '0.50'),
(4, 11, '0.50'),
(4, 14, '0.60'),
(5, 12, '0.60'),
(7, 14, '1.00'),
(8, 10, '0.30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina_botellas`
--

CREATE TABLE `maquina_botellas` (
  `botellas_bebidas` int(11) NOT NULL,
  `cantidadml` decimal(10,0) DEFAULT NULL,
  `cantidad_botella` decimal(10,2) NOT NULL,
  `cantidad_unidad` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maquina_botellas`
--

INSERT INTO `maquina_botellas` (`botellas_bebidas`, `cantidadml`, `cantidad_botella`, `cantidad_unidad`) VALUES
(1, '1500', '1500.00', '1.00'),
(2, '1000', '1000.00', '1.00'),
(3, '1000', '1000.00', '1.00'),
(4, '1000', '1000.00', '1.00'),
(5, '595', '1000.00', '1.00'),
(6, '640', '1000.00', '1.00'),
(7, '1000', '1000.00', '1.00'),
(8, '550', '1000.00', '1.00'),
(9, '-500', '1000.00', '1.00'),
(10, '1000', '1000.00', '1.00'),
(11, '-200', '1000.00', '1.00'),
(12, '1000', '1000.00', '1.00');

--
-- Disparadores `maquina_botellas`
--
DELIMITER $$
CREATE TRIGGER `change` AFTER UPDATE ON `maquina_botellas` FOR EACH ROW UPDATE botellas_bebidas SET cantidad_botella=cantidad_botella-NEW.cantidad_unidad WHERE idbotellas_bebidas=NEW.botellas_bebidas
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina_botellas_has_bebidas`
--

CREATE TABLE `maquina_botellas_has_bebidas` (
  `maquina_botellas_botellas_bebidas` int(11) NOT NULL,
  `bebidas_idbebidas` int(11) NOT NULL,
  `cantidadml` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maquina_botellas_has_bebidas`
--

INSERT INTO `maquina_botellas_has_bebidas` (`maquina_botellas_botellas_bebidas`, `bebidas_idbebidas`, `cantidadml`) VALUES
(1, 11, '45.00'),
(1, 16, '45.00'),
(1, 18, '45.00'),
(1, 20, '45.00'),
(2, 9, '110.00'),
(3, 10, '45.00'),
(3, 21, '45.00'),
(4, 7, '45.00'),
(4, 21, '45.00'),
(5, 7, '45.00'),
(5, 11, '45.00'),
(5, 13, '45.00'),
(5, 21, '45.00'),
(6, 8, '45.00'),
(6, 12, '110.00'),
(6, 14, '45.00'),
(6, 15, '45.00'),
(6, 16, '45.00'),
(6, 17, '45.00'),
(6, 18, '45.00'),
(6, 19, '45.00'),
(6, 20, '45.00'),
(6, 21, '45.00'),
(7, 10, '150.00'),
(7, 14, '120.00'),
(8, 7, '150.00'),
(8, 15, '100.00'),
(9, 8, '150.00'),
(9, 17, '100.00'),
(9, 21, '40.00'),
(10, 14, '28.00'),
(10, 15, '45.00'),
(10, 16, '30.00'),
(10, 17, '30.00'),
(10, 21, '45.00'),
(11, 13, '150.00'),
(11, 19, '45.00'),
(12, 19, '120.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `idmesas` int(11) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `mesero` varchar(45) DEFAULT NULL,
  `sesion` varchar(45) DEFAULT NULL,
  `id_res` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado_recibo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`idmesas`, `tipo`, `estado`, `mesero`, `sesion`, `id_res`, `nombre`, `estado_recibo`) VALUES
(1, 2, 'DISPONIBLE', 'BRUNO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(2, 2, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(3, 2, 'OCUPADA', 'DIEGO', 'ACTIVADA', 0, 'NOBODY', '.'),
(4, 2, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(5, 4, 'OCUPADA', 'DIEGO', 'ACTIVADA', 17, 'michelle', '.'),
(6, 4, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(7, 4, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(8, 4, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(9, 8, 'OCUPADA', 'DIEGO', 'ACTIVADA', 22, 'ariadna', '.'),
(10, 8, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', 'SOLICITA TICKET'),
(11, 8, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.'),
(12, 8, 'DISPONIBLE', 'DIEGO', 'DESACTIVADA', 0, 'NOBODY', '.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_bebida`
--

CREATE TABLE `orden_bebida` (
  `idorden_bebida` int(11) NOT NULL,
  `mesas_idmesas` int(11) NOT NULL,
  `recibo_idrecibo` int(11) NOT NULL,
  `bebidas_idbebidas` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_bebida`
--

INSERT INTO `orden_bebida` (`idorden_bebida`, `mesas_idmesas`, `recibo_idrecibo`, `bebidas_idbebidas`, `estado`, `costo`, `fecha`, `hora`) VALUES
(37, 1, 31, 7, 'FINALIZADA', '55.00', '06/22/2018', '01:03:29'),
(38, 1, 31, 8, 'FINALIZADA', '60.00', '06/22/2018', '01:14:10'),
(39, 1, 32, 7, 'FINALIZADA', '55.00', '06/22/2018', '01:20:26'),
(40, 1, 32, 8, 'FINALIZADA', '60.00', '06/22/2018', '01:20:26'),
(41, 1, 32, 11, 'FINALIZADA', '70.00', '06/22/2018', '01:34:05'),
(42, 1, 33, 7, 'FINALIZADA', '55.00', '06/22/2018', '09:38:15'),
(43, 1, 33, 7, 'ENVIADO', '55.00', '06/22/2018', '09:38:15'),
(44, 1, 34, 13, 'FINALIZADA', '60.00', '06/22/2018', '10:03:14'),
(45, 1, 35, 13, 'FINALIZADA', '60.00', '06/22/2018', '10:11:52'),
(46, 1, 35, 13, 'FINALIZADA', '60.00', '06/22/2018', '10:11:52'),
(47, 1, 35, 8, 'FINALIZADA', '60.00', '06/22/2018', '10:28:17'),
(48, 1, 36, 13, 'FINALIZADA', '60.00', '06/22/2018', '10:46:32'),
(49, 1, 36, 8, 'FINALIZADA', '60.00', '06/22/2018', '10:46:32'),
(50, 5, 40, 8, 'ORDEN', '60.00', NULL, NULL),
(51, 1, 41, 13, 'FINALIZADA', '60.00', '06/22/2018', '10:55:14'),
(53, 1, 42, 13, 'FINALIZADA', '60.00', '06/22/2018', '11:08:30'),
(54, 1, 42, 13, 'FINALIZADA', '60.00', '06/22/2018', '11:11:21'),
(55, 9, 43, 8, 'FINALIZADA', '60.00', '06/22/2018', '11:14:15'),
(56, 9, 43, 8, 'FINALIZADA', '60.00', '06/22/2018', '11:17:45'),
(57, 1, 42, 13, 'FINALIZADA', '60.00', '06/22/2018', '11:19:18'),
(58, 9, 44, 8, 'FINALIZADA', '60.00', '06/22/2018', '11:25:53'),
(59, 6, 47, 8, 'FINALIZADA', '60.00', '06/22/2018', '11:54:05'),
(60, 6, 48, 13, 'ENVIADO', '60.00', '06/22/2018', '12:09:04'),
(61, 6, 48, 8, 'ENVIADO', '60.00', '06/22/2018', '12:09:04'),
(62, 10, 49, 8, 'FINALIZADA', '60.00', '06/22/2018', '12:23:34'),
(63, 10, 50, 8, 'FINALIZADA', '60.00', '06/22/2018', '12:32:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_platillo`
--

CREATE TABLE `orden_platillo` (
  `idorden_platillo` int(11) NOT NULL,
  `mesas_idmesas` int(11) NOT NULL,
  `recibo_idrecibo` int(11) NOT NULL,
  `platillos_idplatillos` int(10) UNSIGNED NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_platillo`
--

INSERT INTO `orden_platillo` (`idorden_platillo`, `mesas_idmesas`, `recibo_idrecibo`, `platillos_idplatillos`, `estado`, `costo`, `fecha`, `hora`) VALUES
(30, 1, 31, 9, 'FINALIZADA', '80.00', '06/22/2018', '01:03:09'),
(31, 1, 32, 9, 'FINALIZADA', '80.00', '06/22/2018', '01:20:23'),
(32, 1, 32, 10, 'FINALIZADA', '140.00', '06/22/2018', '01:20:23'),
(33, 1, 34, 10, 'FINALIZADA', '140.00', '06/22/2018', '10:02:55'),
(34, 1, 34, 11, 'FINALIZADA', '100.00', '06/22/2018', '10:02:55'),
(35, 1, 41, 11, 'FINALIZADA', '100.00', '06/22/2018', '10:58:36'),
(36, 1, 41, 9, 'FINALIZADA', '80.00', '06/22/2018', '10:58:36'),
(37, 1, 42, 14, 'FINALIZADA', '170.00', '06/22/2018', '11:07:47'),
(39, 9, 44, 9, 'FINALIZADA', '80.00', '06/22/2018', '11:25:26'),
(40, 9, 44, 10, 'FINALIZADA', '140.00', '06/22/2018', '11:25:26'),
(42, 6, 48, 12, 'FINALIZADA', '150.00', '06/22/2018', '12:08:22'),
(43, 10, 49, 13, 'ENVIADO', '200.00', '06/22/2018', '12:23:40'),
(45, 10, 50, 9, 'ORDEN', '80.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `idplatillos` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`idplatillos`, `nombre`, `precio`, `imagen`) VALUES
(9, 'BARBACOA', '80.00', 'barbacoa.jpg'),
(10, 'CHILE EN NOGADA', '140.00', 'chileennogada.jpg'),
(11, 'CHULETAS', '100.00', 'CHULETA.jpg'),
(12, 'SALMON', '150.00', 'salmon.jpg'),
(13, 'PASTEL DE CARNE', '200.00', 'CARNE.jpg'),
(14, 'MACARRONES', '170.00', 'MACARRON.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `nombre_p` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `tipo_suministro` varchar(45) DEFAULT NULL,
  `condicion_entrega` varchar(45) DEFAULT NULL,
  `condicion_pago` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `nombre_p`, `direccion`, `telefono`, `correo`, `tipo_suministro`, `condicion_entrega`, `condicion_pago`) VALUES
(1, 'cocacola', 'ixtapaluca', 23456783, 'oxxo@email.com', 'bebidas', 'semanal', 'deposito'),
(2, 'fish', 'ixtapaluca', 23432345, 'fish@hotmail.com', 'comida', 'semanal', 'deposito'),
(3, 'carniceria', 'ixtapaluca', 76767876, 'c@email.com', 'comida', '3 dia', 'efectivo'),
(4, 'ALIANZA', 'CHALCO', 45657898, 'ALIANZA@HOTMAIL.COM', 'BEBIDAS', 'SEMANAL', 'DEPOSITO'),
(5, 'LA DIVINA', 'CHALCO', 23432345, 'DIVINA@HOTMAIL.COM', 'BEBIDAS', 'SEMANAL', 'DEPOSITO'),
(6, 'VERDURAS', 'IXTAPALUCA', 34542345, 'VER@HOTMAIL.COM', 'COMIDA', 'SEMANAL', 'EFECTIVO'),
(7, 'ABARROTES', 'CHALCO', 56464787, 'ABA@HOTMAIL.COM', 'COMIDA', 'SEMANAL', 'EFECTIVO'),
(8, 'SEMILLAS', 'CHALCO', 45643787, 'SEM@HOTMAIL.COM', 'COMIDA', 'SEMANAL', 'EFECTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `idrecibo` int(11) NOT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `mesas_idmesas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`idrecibo`, `fecha`, `total`, `estado`, `mesas_idmesas`) VALUES
(1, '06/08/2018', '0.00', NULL, 1),
(2, '06/12/2018', '0.00', NULL, 1),
(3, '06/12/2018', '0.00', NULL, 1),
(4, '06/12/2018', '0.00', NULL, 1),
(5, '06/12/2018', '0.00', NULL, 1),
(6, '06/12/2018', '0.00', NULL, 1),
(7, '06/12/2018', '0.00', NULL, 1),
(8, '06/12/2018', '0.00', NULL, 1),
(9, '06/13/2018', '0.00', NULL, 1),
(10, '06/13/2018', '0.00', NULL, 1),
(11, '06/13/2018', '0.00', NULL, 1),
(12, '06/13/2018', '0.00', NULL, 1),
(13, '06/14/2018', '0.00', NULL, 1),
(14, '06/15/2018', '0.00', NULL, 1),
(15, '06/15/2018', '0.00', NULL, 1),
(16, '06/18/2018', '0.00', NULL, 1),
(17, '06/18/2018', '0.00', NULL, 1),
(18, '06/18/2018', '0.00', NULL, 1),
(19, '06/18/2018', '0.00', NULL, 1),
(20, '06/19/2018', '0.00', NULL, 1),
(21, '06/19/2018', '0.00', NULL, 1),
(22, '06/19/2018', '400.00', NULL, 1),
(23, '06/19/2018', '200.00', 'IMPRESO', 1),
(24, '06/19/2018', '350.00', 'IMPRESO', 1),
(25, '06/19/2018', '280.00', 'IMPRESO', 1),
(26, '06/21/2018', '0.00', 'IMPRESO', 1),
(27, '06/21/2018', '0.00', NULL, 1),
(28, '06/21/2018', '250.00', 'IMPRESO', 1),
(29, '06/22/2018', '0.00', 'IMPRESO', 5),
(30, '06/22/2018', '0.00', 'IMPRESO', 1),
(31, '06/22/2018', '195.00', 'IMPRESO', 1),
(32, '06/22/2018', '405.00', 'IMPRESO', 1),
(33, '06/22/2018', '110.00', 'IMPRESO', 1),
(34, '06/22/2018', '300.00', 'IMPRESO', 1),
(35, '06/22/2018', '180.00', 'IMPRESO', 1),
(36, '06/22/2018', '120.00', 'IMPRESO', 1),
(37, '06/22/2018', '0.00', NULL, 5),
(38, '06/22/2018', '0.00', NULL, 5),
(39, '06/22/2018', '0.00', NULL, 5),
(40, '06/22/2018', '60.00', 'IMPRESO', 5),
(41, '06/22/2018', '240.00', 'IMPRESO', 1),
(42, '06/22/2018', '350.00', 'IMPRESO', 1),
(43, '06/22/2018', '120.00', 'IMPRESO', 9),
(44, '06/22/2018', '280.00', 'IMPRESO', 9),
(45, '06/22/2018', '0.00', NULL, 6),
(46, '06/22/2018', '0.00', NULL, 6),
(47, '06/22/2018', '60.00', 'NO IMPRESO', 6),
(48, '06/22/2018', '270.00', 'IMPRESO', 6),
(49, '06/22/2018', '260.00', 'IMPRESO', 10),
(50, '06/22/2018', '140.00', 'NO IMPRESO', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ingredientes`
--

CREATE TABLE `registro_ingredientes` (
  `recibo` int(11) NOT NULL,
  `platillo` int(11) NOT NULL,
  `ingrediente` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_ingredientes`
--

INSERT INTO `registro_ingredientes` (`recibo`, `platillo`, `ingrediente`, `cantidad`) VALUES
(11, 1, 1, '3.00'),
(11, 1, 2, '2.00'),
(11, 1, 1, '3.00'),
(11, 1, 2, '2.00'),
(11, 1, 1, '3.00'),
(11, 1, 2, '2.00'),
(11, 1, 1, '3.00'),
(11, 1, 2, '2.00'),
(11, 2, 1, '4.00'),
(14, 3, 1, '3.00'),
(15, 1, 1, '3.00'),
(15, 1, 2, '2.00'),
(16, 2, 1, '4.00'),
(17, 1, 1, '3.00'),
(17, 1, 2, '2.00'),
(31, 9, 1, '1.00'),
(31, 9, 2, '0.30'),
(32, 9, 1, '1.00'),
(32, 9, 2, '0.30'),
(32, 10, 2, '0.30'),
(32, 10, 8, '0.30'),
(34, 10, 2, '0.30'),
(34, 10, 8, '0.30'),
(34, 11, 2, '0.30'),
(34, 11, 3, '0.50'),
(34, 11, 4, '0.50'),
(41, 11, 2, '0.30'),
(41, 11, 3, '0.50'),
(41, 11, 4, '0.50'),
(41, 9, 1, '1.00'),
(41, 9, 2, '0.30'),
(48, 12, 2, '0.50'),
(48, 12, 5, '0.60');

--
-- Disparadores `registro_ingredientes`
--
DELIMITER $$
CREATE TRIGGER `change2` AFTER INSERT ON `registro_ingredientes` FOR EACH ROW UPDATE ingredientes_platillo SET cantidad_kilos=cantidad_kilos-NEW.cantidad WHERE idingredientes_platillo=NEW.ingrediente
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ingredientes_bebidas`
--

CREATE TABLE `registro_ingredientes_bebidas` (
  `recibo` int(11) NOT NULL,
  `bebida` int(11) NOT NULL,
  `ingrediente` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_ingredientes_bebidas`
--

INSERT INTO `registro_ingredientes_bebidas` (`recibo`, `bebida`, `ingrediente`, `cantidad`) VALUES
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 2, 1, '20.00'),
(14, 2, 2, '35.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 2, 1, '20.00'),
(14, 2, 2, '35.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 3, 1, '30.00'),
(14, 3, 2, '30.00'),
(14, 2, 1, '20.00'),
(14, 2, 2, '35.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(14, 1, 1, '30.00'),
(14, 1, 2, '20.00'),
(15, 1, 1, '30.00'),
(15, 1, 2, '20.00'),
(16, 2, 1, '20.00'),
(16, 2, 2, '35.00'),
(17, 1, 1, '30.00'),
(17, 1, 2, '20.00'),
(24, 1, 1, '30.00'),
(24, 1, 2, '20.00'),
(28, 1, 1, '30.00'),
(28, 1, 2, '20.00'),
(31, 7, 4, '45.00'),
(31, 7, 5, '45.00'),
(31, 7, 8, '150.00'),
(31, 8, 6, '45.00'),
(31, 8, 9, '150.00'),
(32, 7, 4, '45.00'),
(32, 7, 5, '45.00'),
(32, 7, 8, '150.00'),
(32, 8, 6, '45.00'),
(32, 8, 9, '150.00'),
(32, 11, 1, '45.00'),
(32, 11, 5, '45.00'),
(33, 7, 4, '45.00'),
(33, 7, 5, '45.00'),
(33, 7, 8, '150.00'),
(34, 13, 5, '45.00'),
(34, 13, 11, '150.00'),
(35, 13, 5, '45.00'),
(35, 13, 11, '150.00'),
(35, 13, 5, '45.00'),
(35, 13, 11, '150.00'),
(35, 8, 6, '45.00'),
(35, 8, 9, '150.00'),
(36, 13, 5, '45.00'),
(36, 13, 11, '150.00'),
(36, 8, 6, '45.00'),
(36, 8, 9, '150.00'),
(41, 13, 5, '45.00'),
(41, 13, 11, '150.00'),
(42, 13, 5, '45.00'),
(42, 13, 11, '150.00'),
(42, 13, 5, '45.00'),
(42, 13, 11, '150.00'),
(43, 8, 6, '45.00'),
(43, 8, 9, '150.00'),
(43, 8, 6, '45.00'),
(43, 8, 9, '150.00'),
(42, 13, 5, '45.00'),
(42, 13, 11, '150.00'),
(44, 8, 6, '45.00'),
(44, 8, 9, '150.00'),
(47, 8, 6, '45.00'),
(47, 8, 9, '150.00'),
(49, 8, 6, '45.00'),
(49, 8, 9, '150.00'),
(50, 8, 6, '45.00'),
(50, 8, 9, '150.00');

--
-- Disparadores `registro_ingredientes_bebidas`
--
DELIMITER $$
CREATE TRIGGER `change3` AFTER INSERT ON `registro_ingredientes_bebidas` FOR EACH ROW UPDATE maquina_botellas SET cantidadml=cantidadml-NEW.cantidad WHERE botellas_bebidas=NEW.ingrediente
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `idreservacion` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `tipo_mesa` int(11) DEFAULT NULL,
  `estado_res` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`idreservacion`, `nombre`, `correo`, `fecha`, `hora`, `telefono`, `numero`, `tipo_mesa`, `estado_res`) VALUES
(1, '', '', '', '', 0, 0, 2, 'CANCELADA'),
(2, 'GHDF', 'FD@FBHFD', '06/19/2018', '9', 655656, 2, 2, 'CANCELADA'),
(3, 'GHDF', 'FD@FBHFD', '06/30/2018', '9', 655656, 1, 2, 'CANCELADA'),
(4, 'DG', 'DFG@FRG', '06/20/2018', '9', 577, 2, 2, 'CANCELADA'),
(5, 'DG', 'DFG@FRGAAA', '06/28/2018', '9', 577, 2, 2, 'CANCELADA'),
(6, 'DGD', 'crew_dic@hotmail.com', '06/26/2018', '9', 3535, 2, 2, 'CANCELADA'),
(7, 'FGS', 'crew_dic@hotmail.com', '07/04/2018', '9', 323323, 2, 2, 'CANCELADA'),
(8, 'ofelia', 'crew_dic@hotmail', '06/22/2018', '10', 6568, 2, 2, 'ASIGNADA'),
(9, 'lalo', 'gcvbbbb', '06/22/2018', '5', 2147483647, 2, 2, 'ASIGNADA'),
(10, 'Irving', 'irvingmartinez002@gmail.com', '06/22/2018', '10.42', 2147483647, 2, 2, 'ASIGNADA'),
(11, 'Aandy', 'andrealca98@outlook.com', 'NaN/NaN/NaN', '11', 2147483647, 4, 4, 'CANCELADA'),
(12, 'Andy', 'andrealca98@outlook.com', '06/22/2018', '11', 2147483647, 4, 4, 'ASIGNADA'),
(13, 'omar', '', '', '', 0, 0, 2, 'CANCELADA'),
(14, 'omar', 'a@a.com', '06/23/2018', '11', 25412541, 2, 2, 'CANCELADA'),
(15, 'omar', '', '06/22/2018', '', 0, 0, 2, 'ASIGNADA'),
(16, 'Lore', 'hc@hd', '06/22/2018', '11', 65777, 5, 8, 'ASIGNADA'),
(17, 'michelle', 'mendozalayun@yahoo.com', '06/22/2018', '11', 555987821, 3, 4, 'ASIGNADA'),
(18, 'Yedid', '', '06/22/2018', '', 0, 5, 8, 'ASIGNADA'),
(19, 'bruno', 'btu@hi.com', '06/23/2018', '2', 5886589, 1, 2, 'CANCELADA'),
(20, 'bruno', 'ggh@hhj.com', '06/22/2018', '4', 559886, 4, 4, 'ASIGNADA'),
(21, 'itzel ', 'ariadna.vera.diaz@hotmail.com', '', '', 0, 0, 2, 'CANCELADA'),
(22, 'ariadna', 'ariadna.vera.diaz@hotmail.com', '06/22/2018', '22', 2147483647, 7, 8, 'ASIGNADA'),
(23, 'edgar', 'ghjhj@ghj.com', '06/22/2018', '12', 583386, 4, 4, 'ASIGNADA'),
(24, 'pedro', 'ph43256@', '06/22/2018', '9', 55676, 8, 8, 'ASIGNADA'),
(25, 'f', 'crew_dic@hotmail.com', '06/23/2018', '9', 675, 2, 2, 'NO ASIGNADA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`idbebidas`);

--
-- Indices de la tabla `botellas_bebidas`
--
ALTER TABLE `botellas_bebidas`
  ADD PRIMARY KEY (`idbotellas_bebidas`),
  ADD KEY `fk_botellas_bebidas_proveedor1_idx` (`proveedor_idproveedor`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `empleado_academico_info`
--
ALTER TABLE `empleado_academico_info`
  ADD PRIMARY KEY (`idempleado_general_aca`),
  ADD UNIQUE KEY `empleado_general_idempleado_general_UNIQUE` (`idempleado_general_aca`),
  ADD KEY `fk_empleado_academico_info_empleado_general1_idx` (`idempleado_general_aca`);

--
-- Indices de la tabla `empleado_contrato`
--
ALTER TABLE `empleado_contrato`
  ADD PRIMARY KEY (`idempleado_general_con`),
  ADD UNIQUE KEY `empleado_general_idempleado_general_UNIQUE` (`idempleado_general_con`),
  ADD KEY `fk_empleado_contrato_empleado_general1_idx` (`idempleado_general_con`);

--
-- Indices de la tabla `empleado_general`
--
ALTER TABLE `empleado_general`
  ADD PRIMARY KEY (`idempleado_general`),
  ADD UNIQUE KEY `idempleado_general_UNIQUE` (`idempleado_general`);

--
-- Indices de la tabla `empleado_puesto`
--
ALTER TABLE `empleado_puesto`
  ADD PRIMARY KEY (`idempleado_general_pue`),
  ADD UNIQUE KEY `empleado_general_idempleado_general_UNIQUE` (`idempleado_general_pue`),
  ADD KEY `fk_empleado_puesto_empleado_general_idx` (`idempleado_general_pue`);

--
-- Indices de la tabla `ingredientes_platillo`
--
ALTER TABLE `ingredientes_platillo`
  ADD PRIMARY KEY (`idingredientes_platillo`),
  ADD KEY `fk_ingredientes_platillo_proveedor1_idx` (`proveedor_idproveedor`);

--
-- Indices de la tabla `ingredientes_platillo_has_platillos`
--
ALTER TABLE `ingredientes_platillo_has_platillos`
  ADD PRIMARY KEY (`ingredientes_platillo_idingredientes_platillo`,`platillos_idplatillos`),
  ADD KEY `fk_ingredientes_platillo_has_platillos_platillos1_idx` (`platillos_idplatillos`),
  ADD KEY `fk_ingredientes_platillo_has_platillos_ingredientes_platill_idx` (`ingredientes_platillo_idingredientes_platillo`);

--
-- Indices de la tabla `maquina_botellas`
--
ALTER TABLE `maquina_botellas`
  ADD PRIMARY KEY (`botellas_bebidas`),
  ADD KEY `fk_maquina_botellas_botellas_bebidas1_idx` (`botellas_bebidas`);

--
-- Indices de la tabla `maquina_botellas_has_bebidas`
--
ALTER TABLE `maquina_botellas_has_bebidas`
  ADD PRIMARY KEY (`maquina_botellas_botellas_bebidas`,`bebidas_idbebidas`),
  ADD KEY `fk_maquina_botellas_has_bebidas_bebidas1_idx` (`bebidas_idbebidas`),
  ADD KEY `fk_maquina_botellas_has_bebidas_maquina_botellas1_idx` (`maquina_botellas_botellas_bebidas`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`idmesas`);

--
-- Indices de la tabla `orden_bebida`
--
ALTER TABLE `orden_bebida`
  ADD PRIMARY KEY (`idorden_bebida`),
  ADD KEY `fk_orden_bebida_recibo1_idx` (`recibo_idrecibo`),
  ADD KEY `fk_orden_bebida_mesas1_idx` (`mesas_idmesas`),
  ADD KEY `fk_orden_bebida_bebidas1_idx` (`bebidas_idbebidas`);

--
-- Indices de la tabla `orden_platillo`
--
ALTER TABLE `orden_platillo`
  ADD PRIMARY KEY (`idorden_platillo`),
  ADD KEY `fk_orden_platillo_recibo1_idx` (`recibo_idrecibo`),
  ADD KEY `fk_orden_platillo_platillos1_idx` (`platillos_idplatillos`),
  ADD KEY `fk_orden_platillo_mesas1_idx` (`mesas_idmesas`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`idplatillos`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`idrecibo`),
  ADD KEY `fk_recibo_mesas1_idx` (`mesas_idmesas`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`idreservacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `idbebidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `botellas_bebidas`
--
ALTER TABLE `botellas_bebidas`
  MODIFY `idbotellas_bebidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado_academico_info`
--
ALTER TABLE `empleado_academico_info`
  MODIFY `idempleado_general_aca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empleado_contrato`
--
ALTER TABLE `empleado_contrato`
  MODIFY `idempleado_general_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleado_general`
--
ALTER TABLE `empleado_general`
  MODIFY `idempleado_general` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empleado_puesto`
--
ALTER TABLE `empleado_puesto`
  MODIFY `idempleado_general_pue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ingredientes_platillo`
--
ALTER TABLE `ingredientes_platillo`
  MODIFY `idingredientes_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `idmesas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `orden_bebida`
--
ALTER TABLE `orden_bebida`
  MODIFY `idorden_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `orden_platillo`
--
ALTER TABLE `orden_platillo`
  MODIFY `idorden_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `idplatillos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `idrecibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `idreservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `botellas_bebidas`
--
ALTER TABLE `botellas_bebidas`
  ADD CONSTRAINT `fk_botellas_bebidas_proveedor1` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingredientes_platillo`
--
ALTER TABLE `ingredientes_platillo`
  ADD CONSTRAINT `fk_ingredientes_platillo_proveedor1` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingredientes_platillo_has_platillos`
--
ALTER TABLE `ingredientes_platillo_has_platillos`
  ADD CONSTRAINT `fk_ingredientes_platillo_has_platillos_ingredientes_platillo` FOREIGN KEY (`ingredientes_platillo_idingredientes_platillo`) REFERENCES `ingredientes_platillo` (`idingredientes_platillo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ingredientes_platillo_has_platillos_platillos1` FOREIGN KEY (`platillos_idplatillos`) REFERENCES `platillos` (`idplatillos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `maquina_botellas`
--
ALTER TABLE `maquina_botellas`
  ADD CONSTRAINT `fk_maquina_botellas_botellas_bebidas1` FOREIGN KEY (`botellas_bebidas`) REFERENCES `botellas_bebidas` (`idbotellas_bebidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `maquina_botellas_has_bebidas`
--
ALTER TABLE `maquina_botellas_has_bebidas`
  ADD CONSTRAINT `fk_maquina_botellas_has_bebidas_bebidas1` FOREIGN KEY (`bebidas_idbebidas`) REFERENCES `bebidas` (`idbebidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_maquina_botellas_has_bebidas_maquina_botellas1` FOREIGN KEY (`maquina_botellas_botellas_bebidas`) REFERENCES `maquina_botellas` (`botellas_bebidas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_bebida`
--
ALTER TABLE `orden_bebida`
  ADD CONSTRAINT `fk_orden_bebida_bebidas1` FOREIGN KEY (`bebidas_idbebidas`) REFERENCES `bebidas` (`idbebidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orden_bebida_mesas1` FOREIGN KEY (`mesas_idmesas`) REFERENCES `mesas` (`idmesas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orden_bebida_recibo1` FOREIGN KEY (`recibo_idrecibo`) REFERENCES `recibo` (`idrecibo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_platillo`
--
ALTER TABLE `orden_platillo`
  ADD CONSTRAINT `fk_orden_platillo_mesas1` FOREIGN KEY (`mesas_idmesas`) REFERENCES `mesas` (`idmesas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orden_platillo_platillos1` FOREIGN KEY (`platillos_idplatillos`) REFERENCES `platillos` (`idplatillos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orden_platillo_recibo1` FOREIGN KEY (`recibo_idrecibo`) REFERENCES `recibo` (`idrecibo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `fk_recibo_mesas1` FOREIGN KEY (`mesas_idmesas`) REFERENCES `mesas` (`idmesas`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
