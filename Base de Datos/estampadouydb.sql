-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2023 a las 22:22:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estampadouydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `idConfiguracion` int(11) NOT NULL,
  `logo_empresa` varchar(255) NOT NULL,
  `rubro_empresa` varchar(50) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `manzana` varchar(50) NOT NULL,
  `solar` varchar(50) NOT NULL,
  `comentario_venta` varchar(255) NOT NULL,
  `contacto_empresa` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`idConfiguracion`, `logo_empresa`, `rubro_empresa`, `nombre_empresa`, `barrio`, `calle`, `manzana`, `solar`, `comentario_venta`, `contacto_empresa`) VALUES
(1, 'Logo_EstampadoUY.jpg', 'Venta de Ropa', 'EstampadoUY', 'Solymar', 'Copacabana', '15', '9', 'USD', 9283838);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `imagen_producto` varchar(50) NOT NULL,
  `precio_producto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombre_producto`, `imagen_producto`, `precio_producto`) VALUES
(23, 'Camiseta Alternativa Peñarol 2023', '1.jpg', 3999.99),
(24, 'Remera Gris Adidas ', '24.jpg', 1300),
(25, 'Remera Negra Adidas', '25.jpg', 1300),
(26, 'Remera Lisa Negra', '26.jpg', 500),
(27, 'Remera Nike Air Blanca', '27.jpg', 1499.99),
(28, 'Remera Nike Air Negra', '28.jpg', 1499.99),
(29, 'Pantalón Cargo Gris oscuro', '29.jpg', 2000),
(30, 'Pantalón Cargo Marrón claro', '30.jpg', 2000),
(31, 'Pantalón Cargo Negro', '31.jpg', 2000),
(32, 'Pantalón Cargo Verde', '32.jpg', 2000),
(33, 'productoParaRellenar1', '33.jpg', 1),
(34, 'productoParaRellenar2', '34.jpg', 2),
(35, 'productoParaRellenar3', '35.jpg', 3),
(36, 'productoParaRellenar4', '36.jpg', 4),
(37, 'A', '37.jpg', 19),
(38, 'EL DAMIAN', '38.jpg', 10000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `idProducto` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `precio_promocion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`idProducto`, `fecha_inicio`, `fecha_fin`, `precio_promocion`) VALUES
(23, '2023-09-10', '2023-09-30', 3499.99),
(24, '2023-09-10', '2023-09-30', 1100),
(25, '2023-09-10', '2023-09-30', 1100),
(27, '2023-09-10', '2023-09-30', 1200),
(26, '2023-09-10', '2023-09-30', 350),
(28, '2023-09-10', '2023-09-30', 1300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombre_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombre_rol`) VALUES
(1, 'admin'),
(2, 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email_usuario` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email_usuario`, `nombre_usuario`, `apellido_usuario`, `password_usuario`) VALUES
('pacellobruno@gmail.com', 'Bruno', 'Pacello', '$2y$10$M69clQ6O9asbMHjDH2LjU.O4xq.LwEGMYZn0u9AeH50WItKAgtEaW'),
('santiseba2005@gmail.com', 'Sebastian', 'Santiago', '$2y$10$CZ4qgTGxp0OIzoeb8kix.ekWPPEfkv9nomX5iiWRcFBRWQaDng46e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE `usuariorol` (
  `email_usuario` varchar(50) NOT NULL,
  `idRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariorol`
--

INSERT INTO `usuariorol` (`email_usuario`, `idRol`) VALUES
('pacellobruno@gmail.com', '2'),
('santiseba2005@gmail.com', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`idConfiguracion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD KEY `FK_idProducto` (`idProducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email_usuario`);

--
-- Indices de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD PRIMARY KEY (`email_usuario`,`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `idConfiguracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `FK_idProducto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
