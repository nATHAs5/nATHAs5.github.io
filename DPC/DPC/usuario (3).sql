-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2023 a las 17:39:39
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dpc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usua_codigo` int(11) NOT NULL,
  `usua_identificacion` varchar(20) NOT NULL,
  `usua_tipoIdentificacion` varchar(15) NOT NULL,
  `usua_nombre` varchar(50) NOT NULL,
  `usua_apellido` varchar(50) NOT NULL,
  `usua_celular` varchar(15) NOT NULL,
  `usua_direccion` varchar(50) NOT NULL,
  `usua_usuario` varchar(15) NOT NULL,
  `usua_password` varchar(15) NOT NULL,
  `usua_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usua_codigo`, `usua_identificacion`, `usua_tipoIdentificacion`, `usua_nombre`, `usua_apellido`, `usua_celular`, `usua_direccion`, `usua_usuario`, `usua_password`, `usua_rol`) VALUES
(2, '1016011379', 'TI', 'Tatiana', 'Fonseca ', '3017193295', 'cra58#112bis-85', 'kr.25', '1234567', 2),
(3, '1015845698', 'CC', 'Joana', 'Quintero ', '3219105073', 'cra 13bis#115-68', 'jnc.26', '3112071', 2),
(4, '1012358972', 'CC', 'Sandra', 'Orjuela', '3169547825', 'cll 68 bis#123-85', 'sndr_89', 'lol7453', 2),
(5, '1015897423', 'cc', 'Viviana', 'Muñoz', '3215648973', 'cra 5 #123-96', 'mm_X', 'lelelele', 2),
(14, '1012598754', 'TI', 'Sofia', 'García', '3222315183', 'cra 23#52-12', 'ana.garca', 'SOF121510', 1),
(16, '1016950468', 'TI', 'Nathalia', 'Fraile', '3215468442', 'cra 23#53-12', 'nnco.fr', '5698745', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usua_codigo`),
  ADD KEY `usua_rol` (`usua_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usua_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`usua_rol`) REFERENCES `rol` (`rol_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
