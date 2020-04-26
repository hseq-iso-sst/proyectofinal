--script inicial base de datos--
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2020 a las 21:41:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hseq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `ficha_asignada` int(1) NOT NULL,
  `nombre_ficha` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`ficha_asignada`, `nombre_ficha`, `fecha_inicio`, `fecha_final`) VALUES
(1, '1864320 (HSEQ', '2019-01-27', '2020-07-28'),
(2, '1984756 (HSEQ)', '2020-04-01', '2020-04-25'),
(3, '1946573 (HSEQ)', '2020-04-08', '2020-04-16'),
(4, '1949463 (HSEQ)', '2020-04-01', '2020-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_user` int(15) NOT NULL,
  `nombres_user` varchar(100) NOT NULL,
  `apellidos_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `cargo_user` int(1) NOT NULL,
  `telefono_user` varchar(15) NOT NULL,
  `ficha_asignada` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id_user`, `nombres_user`, `apellidos_user`, `email_user`, `cargo_user`, `telefono_user`, `ficha_asignada`, `password`) VALUES
(678, 'fhjj', 'jjj', 'jjj@gmil.com', 1, '456789', '1,4', 'b3275960d68fda9d831facc0426c3bbc'),
(8789, 'prueba', 'prueba', 'prueba@gmail.com', 2, '890', '1,4', '202cb962ac59075b964b07152d234b70'),
(123456, '123456', '123456', '123123@mail.com', 2, '123345', '1,2,3,4', 'e10adc3949ba59abbe56e057f20f883e'),
(20477775, 'janrth', 'colmenars', 'j@gmail.com', 2, '56789', '3', '202cb962ac59075b964b07152d234b70'),
(123458765, 'pepito', '1', 'pepito@gmail.com', 2, '543', '1,4', '202cb962ac59075b964b07152d234b70'),
(1075668168, 'Alex', 'Gomez', 'alexj2030@gmail.com', 2, '2147483647', '4', '202cb962ac59075b964b07152d234b70'),
(1075685565, 'Jasmin Rocio', 'Fuquen Colmenares', 'jasminfuquen@gmail.com', 1, '2147483647', '1', 'e67c10a4c8fbfc0c400e047bb9a056a1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`ficha_asignada`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
