-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2019 a las 05:13:42
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombrePersona` varchar(100) NOT NULL,
  `apellidoPersona` varchar(100) NOT NULL,
  `correoPersona` varchar(100) NOT NULL,
  `nombreUsuarioPersona` varchar(100) NOT NULL,
  `telefonoPersona` varchar(15) DEFAULT NULL,
  `passwordPersona` varchar(100) NOT NULL,
  `idUsuarioPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombrePersona`, `apellidoPersona`, `correoPersona`, `nombreUsuarioPersona`, `telefonoPersona`, `passwordPersona`, `idUsuarioPersona`) VALUES
(10, 'Anderson', 'Vargas', 'andersonvargas383@gmail.com.co', 'Anderson383', NULL, '$2y$10$7tA09XMHrF3czAcY24iHWuMSsKU3OixfkQWJeyEzOz5eAF7IxLYdi', 1),
(11, 'Alejandra', 'Caroulle', 'caroulle@gmail.com.co', 'Aleja27', NULL, '$2y$10$mSli3y1sd5K0Ct5fZAhavOgV3575s7FlUygEmprE2facu5QuNX50S', 2),
(12, 'Administrador', 'Anderson', 'andre--698@hotmail.com', 'anderson54321', NULL, '$2y$10$UsDw7Tu7VxL86h0QOq3mwutU3YcmJbtAlYAN76mDR3oi0hmA2Rw0i', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD UNIQUE KEY `correoPersona` (`correoPersona`),
  ADD UNIQUE KEY `nombreUsuarioPersona` (`nombreUsuarioPersona`),
  ADD KEY `idUsuarioPersona` (`idUsuarioPersona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`idUsuarioPersona`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
