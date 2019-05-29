-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 02:55:00
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminsitrador`
--

CREATE TABLE `adminsitrador` (
  `id` int(11) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adminsitrador`
--

INSERT INTO `adminsitrador` (`id`, `Producto`, `Precio`, `Cliente`) VALUES
(1, 'Manzana', 1, 2),
(2, 'Pera', 5, 2),
(3, 'Banano', 3, 2),
(4, 'Banano', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Rol` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `Rol`, `username`, `password`) VALUES
(1, 'sdsad', 'Administrador', 'SDDAS', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'EDISON', 'Administrador', 'DEADMAN', '202cb962ac59075b964b07152d234b70'),
(3, 'EDISON', 'Administrador', 'AD', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'Homar', 'Cliente', 'Homero', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminsitrador`
--
ALTER TABLE `adminsitrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cliente` (`Cliente`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminsitrador`
--
ALTER TABLE `adminsitrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adminsitrador`
--
ALTER TABLE `adminsitrador`
  ADD CONSTRAINT `Cliente` FOREIGN KEY (`Cliente`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
