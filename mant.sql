-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2019 a las 01:05:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` varchar(2) DEFAULT NULL,
  `id_sistema` varchar(1) DEFAULT NULL,
  `id_subsistema` varchar(2) DEFAULT NULL,
  `nombre` varchar(38) DEFAULT NULL,
  `ubicacion` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `id_sistema`, `id_subsistema`, `nombre`, `ubicacion`) VALUES
('1', '3', '10', 'FMT2-BOMBA TIPO LAPIZ 1', 'SUBSUELO 4'),
('2', '3', '10', 'FMT2-BOMBA TIPO LAPIZ 2', 'SUBSUELO 4'),
('3', '1', '1', 'FMT2-BOMBA CONTRA INCENDIOS', 'SUBSUELO 4'),
('4', '3', '11', 'FMT2-BOMBA AGUA POTABLE 1', 'SUBSUELO 4'),
('5', '3', '11', 'FMT2-BOMBA AGUA POTABLE 2', 'SUBSUELO 4'),
('6', '3', '11', 'FMT2-BOMBA AGUA POTABLE 3', 'SUBSUELO 4'),
('7', '3', '11', 'FMT2-TANQUE DE PRESURIZACI?N', 'SUBSUELO 4'),
('8', '3', '11', 'FMT2-TABLERO SISTEMA PRESION', 'SUBSUELO 4'),
('9', '3', '9', 'FMT2-BOMBA AGUA LLUVIA 1', 'SUBSUELO 4'),
('10', '3', '9', 'FMT2-BOMBA AGUA LLUVIA 2', 'SUBSUELO 4'),
('11', '3', '9', 'FMT2-BOMBA AGUA LLUVIA 3', 'SUBSUELO 4'),
('12', '3', '8', 'FMT2-BOMBA AGUAS SERVIDAS 1', 'SUBSUELO 4'),
('13', '3', '8', 'FMT2-BOMBA AGUAS SERVIDAS 2', 'SUBSUELO 4'),
('14', '2', '5', 'FMT2-VENTILADOR', 'SUBSUELO 2'),
('15', '2', '5', 'FMT2-CONDENSADOR', 'SUBSUELO 2'),
('16', '2', '5', 'FMT2-CONDENSADOR 1', ''),
('17', '2', '5', 'FMT2-CONDENSADOR 2', ''),
('18', '2', '5', 'FMT2-CONDENSADOR 3', ''),
('19', '2', '5', 'FMT2-CONDENSADOR 4', ''),
('20', '2', '5', 'FMT2- CONDENSADOR 5', ''),
('21', '2', '7', 'FMT2-HONGO DE EXTRACCI?N BA?OS', ''),
('22', '2', '7', 'FMT2-HONGO DE EXTRACCI?N SUBSUELO 1', ''),
('23', '2', '7', 'FMT2-HONGO DE EXTRACCI?N SUBSUELO 2', ''),
('24', '2', '7', 'FMT2-PRESURIZACI?N DE GRADAS', ''),
('25', '2', '7', 'FMT1-SUMINISTRO DE AIRE 1', ''),
('26', '2', '7', 'FMT1-HONGO EXTRACCI?N COCINA ', ''),
('27', '2', '7', 'FMT1-HONGO EXTRACCI?N BA?OS', ''),
('28', '2', '5', 'FMT1-CONDENSADOR 1', 'PISO 9'),
('29', '2', '5', 'FMT1-CONDENSADOR 2', 'PISO 9'),
('30', '2', '5', 'FMT1-CONDENSADOR 3', 'PISO 9'),
('31', '2', '5', 'FMT1-CONDENSADOR 4', 'PISO 9'),
('32', '2', '5', 'FMT1-CONDENSADOR 5', 'PISO 9'),
('33', '2', '5', 'FMT1-CONDENSADOR 6', 'PISO 9'),
('34', '2', '6', 'FMT1-UNIDAD DE AIRE ACONDICIONADO', 'SUBSUELO 1'),
('35', '2', '6', 'FMT1-UNIDADES DE AIRE', 'PB-PISO 1'),
('36', '2', '6', 'FMT1-SISTEMA DE VENTILACION ASCENSORES', ''),
('37', '2', '7', 'FMT1-SUMINISTRO DE AIRE 1', 'SUBSUELO 1'),
('38', '2', '7', 'FMT1-SUMINISTRO DE AIRE 2', 'SUBSUELO 1'),
('39', '2', '7', 'FMT1-SUMINISTRO DE AIRE 3', 'SUBSUELO 1'),
('40', '2', '7', 'FMT1-SUMINISTRO DE AIRE 4', 'SUBSUELO 1'),
('41', '2', '6', 'FMT1-UNIDADES DE AIRE ACONDICIONADO', 'SUBSUELO 1'),
('42', '1', '1', 'FB-BOMBA CONTRAINCENDIOS', 'CUARTO DE BOMBAS'),
('43', '1', '1', 'FB-BOMBA JOCKEY', 'CUARTO DE BOMBAS'),
('44', '3', '11', 'FB-BOMBA AGUA POTABLE 1', 'CUARTO DE BOMBAS'),
('45', '3', '11', 'FB-BOMBA AGUA POTABLE 2', 'CUARTO DE BOMBAS'),
('46', '3', '8', 'FB-BOMBA NIVEL FREATICO 1', ''),
('47', '3', '8', 'FB-BOMBA NIVEL FREATICO 2', ''),
('48', '3', '8', 'FB-BOMBA AGUA SERVIDA', ''),
('49', '2', '5', 'FB-CONDENSADOR 1', ''),
('50', '2', '5', 'FB-CONDENSADOR 2', ''),
('51', '2', '5', 'FB-CONDENSADOR 3', ''),
('52', '2', '5', 'FB-CONDENSADOR 4', ''),
('53', '2', '5', 'FB-CONDENSADOR 5', ''),
('54', '2', '5', 'FB-CONDENSADOR 6', ''),
('55', '2', '5', 'FB-CONDENSADOR 7', ''),
('56', '2', '5', 'FB-CONDENSADOR 8', ''),
('57', '2', '5', 'FB-CONDENSADOR 9', ''),
('58', '2', '6', 'FB-EVAPORADOR 1', ''),
('59', '3', '11', 'FD-BOMBA AGUA POTABLE', ''),
('60', '1', '1', 'FD-BOMBA CONTRAINCENDIOS', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` int(2) DEFAULT NULL,
  `id_sistema` int(2) DEFAULT NULL,
  `id_subsistema` int(2) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `id_sistema`, `id_subsistema`, `tipo`, `nombre`) VALUES
(1, 1, 1, 'Inspeccion', 'Calor adecuado de la caseta de la bomba'),
(2, 1, 1, 'Inspeccion', 'Lectura de manometros de presion en la linea de succion.'),
(3, 1, 1, 'Inspeccion', 'La succion y descarga de las bombas y valvulas de paso estan totalmente abiertas.'),
(4, 1, 1, 'Inspeccion', 'La tuberia esta libre de filtraciones.'),
(5, 1, 1, 'Inspeccion', 'La lectura del manometro en la linea del sistema es normal.'),
(6, 1, 1, 'Inspeccion', 'El deposito de succion tiene el nivel de agua requerido.'),
(7, 1, 1, 'Inspeccion', 'Las valvulas de prueba de flujo de agua en posicion cerrada.'),
(8, 1, 1, 'Inspeccion', 'La luz piloto del regulador de encendido esta iluminada.'),
(9, 1, 1, 'Prueba', 'Registrar la presion de arranque de la bomba'),
(10, 1, 1, 'Prueba', 'Registrar las lecturas del manometro de presion de succion y de descarga del sistema.'),
(11, 1, 1, 'Prueba', 'Inspeccionar por ruidos o vibraciones inusuales.'),
(12, 1, 1, 'Prueba', 'Ajustar las tuercas de los sellos de empaquetadura si es necesario.'),
(13, 1, 1, 'Prueba', 'Observar el tiempo que toma el motor para acelerar a velocidad plena.'),
(14, 1, 1, 'Prueba', 'Prueba de funcionamiento'),
(15, 1, 2, 'Inspeccion', 'Valvulas de control'),
(16, 1, 2, 'Inspeccion', 'Manometros'),
(17, 1, 2, 'Inspeccion', 'Dispositivos de alarma de flujo de agua'),
(18, 1, 2, 'Inspeccion', 'Dispositivos de alarma de supervision de valvula'),
(19, 1, 2, 'Inspeccion', 'Conexiones del cuerpo de bomberos'),
(20, 1, 2, 'Inspeccion', 'Rociadores'),
(21, 1, 2, 'Prueba', 'Dispositivos de alarma de flujo de agua.'),
(22, 1, 2, 'Prueba', 'Dispositivo de se?al supervisi?n de valvulas.'),
(23, 1, 2, 'Prueba', 'Drenaje principal.'),
(24, 1, 2, 'Prueba', 'Prueba del estado de la valvula.'),
(25, 1, 2, 'Prueba', 'Manometros.'),
(26, 1, 3, 'Inspeccion', 'Gabinetes.'),
(27, 1, 3, 'Inspeccion', 'Valvulas para mangueras.'),
(28, 1, 3, 'Inspeccion', 'Tuberias.'),
(29, 1, 3, 'Inspeccion', 'Conexiones de mangueras.'),
(30, 1, 3, 'Inspeccion', 'Boquillas de mangueras.'),
(31, 1, 3, 'Inspeccion', 'Aviso de informacion de diseno hidraulico.'),
(32, 1, 3, 'Prueba', 'Dispositivos de alarma de flujo de agua.'),
(33, 1, 3, 'Prueba', 'Dispositivo de senal supervisi?n de valvulas.'),
(34, 1, 3, 'Prueba', 'Dispositivo de almacenamiento de mangueras.'),
(35, 1, 3, 'Prueba', 'Prueba del estado de la valvula.'),
(36, 1, 3, 'Prueba', 'Prueba del drenaje principal.'),
(37, 1, 4, 'Inspeccion', 'Equipo de control Fusibles.'),
(38, 1, 4, 'Inspeccion', 'Equipos de interfaz.'),
(39, 1, 4, 'Inspeccion', 'Suministro de energia principal.'),
(40, 1, 4, 'Inspeccion', 'Baterias '),
(41, 1, 4, 'Inspeccion', 'Senales de falla de unidad de control de alarma de incendios.'),
(42, 1, 4, 'Inspeccion', 'Dispositivos iniciadores, detectores de humo.'),
(43, 1, 4, 'Inspeccion', 'Dispositivos de flujo de agua.'),
(44, 1, 4, 'Inspeccion', 'Aparatos de notificacion de alarma.'),
(45, 1, 4, 'Inspeccion', 'Aparatos de notificacion audible indicadores de salida.'),
(46, 1, 4, 'Prueba', 'Fusibles.'),
(47, 1, 4, 'Prueba', 'Equipos de interfaz.'),
(48, 1, 4, 'Prueba', 'Suministro de energia principal.'),
(49, 1, 4, 'Prueba', 'Baterias'),
(50, 1, 4, 'Prueba', 'Dispositivos iniciadores, detectores de humo.'),
(51, 1, 4, 'Prueba', 'Aparatos de notificacion audible indicadores de salida.'),
(52, 2, 5, 'Inspeccion y mantenimiento', 'Tarjetas de control.'),
(53, 2, 5, 'Inspeccion y mantenimiento', 'Medicion de carga de gas refrigerante.'),
(54, 2, 5, 'Inspeccion y mantenimiento', 'Condiciones ambientales en la que se encuentra el equipo.'),
(55, 2, 5, 'Inspeccion y mantenimiento', 'Control de nivel de aceite.'),
(56, 2, 5, 'Inspeccion y mantenimiento', 'Tablero electrico y medicion de carga electrica.'),
(57, 2, 5, 'Inspeccion y mantenimiento', 'Revision de componentes de control: V?lvulas de expansion, solenoides, presostatos, termostato'),
(58, 2, 5, 'Inspeccion y mantenimiento', 'Funcionamiento de motor ventilador.'),
(59, 2, 5, 'Inspeccion y mantenimiento', 'Limpieza de serpentin del condensador.'),
(60, 2, 6, 'Inspeccion y mantenimiento', 'Inspeccion de termostatos.'),
(61, 2, 6, 'Inspeccion y mantenimiento', 'Limpieza de filtros de aire.'),
(62, 2, 6, 'Inspeccion y mantenimiento', 'Inspeccion de funcionamiento del blower.'),
(63, 2, 6, 'Inspeccion y mantenimiento', 'Inspeccion y limpieza de serpentin del evaporador.'),
(64, 2, 6, 'Inspeccion y mantenimiento', 'Revision del funcionamiento del control maestro.'),
(65, 2, 6, 'Inspeccion y mantenimiento', 'Inspeccion de desague de las unidades.'),
(66, 2, 7, 'Inspeccion y mantenimiento', 'Revision LIMPIEZA CAMBIO filtros de suministro de aire'),
(67, 2, 7, 'Inspeccion y mantenimiento', 'Engrase de chumaseras '),
(68, 2, 7, 'Inspeccion y mantenimiento', 'Revision de bandas de transmision.'),
(69, 2, 7, 'Inspeccion y mantenimiento', 'Inspeccion de tableros electricos '),
(70, 2, 7, 'Inspeccion y mantenimiento', 'Limpieza del area  de equipos.'),
(71, 2, 7, 'Inspeccion y mantenimiento', 'Limpieza de rejillas de suministro y de extraccion.'),
(72, 2, 7, 'Inspeccion y mantenimiento', 'Revision programacion  PLC '),
(73, 3, 8, 'Inspeccion y mantenimiento', 'Limpieza de bombas.'),
(74, 3, 8, 'Inspeccion y mantenimiento', 'Inspeccion de tuberias'),
(75, 3, 8, 'Inspeccion y mantenimiento', 'Inpeccion de tablero el?ctrico.'),
(76, 3, 8, 'Inspeccion y mantenimiento', 'Inspecci?n de controles automaticos (flotadores).'),
(77, 3, 8, 'Inspeccion y mantenimiento', 'Medicion de carga electrica.'),
(78, 3, 9, 'Inspeccion y mantenimiento', 'Limpieza de bombas.'),
(79, 3, 9, 'Inspeccion y mantenimiento', 'Inspeccion de tuberias'),
(80, 3, 9, 'Inspeccion y mantenimiento', 'Inpeccion de tablero electrico.'),
(81, 3, 9, 'Inspeccion y mantenimiento', 'Inspeccion de controles automaticos (flotadores).'),
(82, 3, 9, 'Inspeccion y mantenimiento', 'Medicion de carga electrica.'),
(83, 3, 10, 'Inspeccion y mantenimiento', 'Limpieza de bombas.'),
(84, 3, 10, 'Inspeccion y mantenimiento', 'Inspeccion de tuberias'),
(85, 3, 10, 'Inspeccion y mantenimiento', 'Inpeccion de tablero electrico.'),
(86, 3, 10, 'Inspeccion y mantenimiento', 'Inspeccion de controles automaticos (flotadores).'),
(87, 3, 10, 'Inspeccion y mantenimiento', 'Mantenimiento de valvulas de control'),
(88, 3, 10, 'Inspeccion y mantenimiento', 'Medicion de carga electrica.'),
(89, 3, 11, 'Inspeccion y mantenimiento', 'Revision y control de fugas'),
(90, 3, 11, 'Inspeccion y mantenimiento', 'Ajuste de piezas '),
(91, 3, 11, 'Inspeccion y mantenimiento', 'Inspeccion de tuberias de evacuacion'),
(92, 3, 11, 'Inspeccion y mantenimiento', 'Inspeccion de tablero electrico de bombas '),
(93, 3, 11, 'Inspeccion y mantenimiento', 'Inspeccion de Cisterna'),
(94, 3, 11, 'Inspeccion y mantenimiento', 'Inspeccion de las valvulas de control de Cisterna.'),
(95, 3, 11, 'Inspeccion y mantenimiento', 'Calibracion de PLC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `nombre`) VALUES
(1, 'Sistema Contra Incendios'),
(2, 'Ventilacion y Aire Acondicionado'),
(3, 'Hidrosanitarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsistemas`
--

CREATE TABLE `subsistemas` (
  `id` int(11) NOT NULL,
  `id_sistema` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subsistemas`
--

INSERT INTO `subsistemas` (`id`, `id_sistema`, `nombre`) VALUES
(1, 1, 'Bombas'),
(2, 1, 'Rociadores'),
(3, 1, 'Tuberias'),
(4, 1, 'Alarmas'),
(5, 2, 'Condensador'),
(6, 2, 'Evaporador'),
(7, 2, 'Extraccion'),
(8, 3, 'Aguas Albanal'),
(9, 3, 'Agua Lluvia'),
(10, 3, 'Nivel Freatico'),
(11, 3, 'Hidraulico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dni` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `movil` int(11) NOT NULL,
  `adress` varchar(60) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rol` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `picture`, `name`, `lastname`, `dni`, `mail`, `movil`, `adress`, `nickname`, `password`, `rol`, `status`) VALUES
(1, 'avatar.png', 'Josep', 'Isam', 1003712880, 'josedavidi@gmail.com', 992190334, 'America y Las Casas', 'deivip', '1234', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subsistemas`
--
ALTER TABLE `subsistemas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subsistemas`
--
ALTER TABLE `subsistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
