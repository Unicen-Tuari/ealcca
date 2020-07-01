-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2020 a las 10:35:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cute24-7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Make Up'),
(2, 'Pestañas'),
(3, 'Lifting'),
(6, 'Cejas'),
(7, 'Manicure'),
(8, 'Pedicure');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `course` varchar(60) COLLATE utf8_bin NOT NULL,
  `duration` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(300) COLLATE utf8_bin NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id_course`, `course`, `duration`, `description`, `id_category`) VALUES
(1, 'Auto maquillaje', '24 hrs', 'Te ofrecemos una clase pensada para las aficionadas y amantes del maquillaje que quieran aprender correctamente a realizar sus propios looks e incorporar técnicas profesionales sin ser expertas en el tema.', 1),
(2, 'Extensión de pestañas', '20 hrs', 'Aplicación paso a paso de las extensiones de pestañas, preparación previa, selección adecuada de pestañas y correcta combinación.', 2),
(3, 'Taller de lifting y mascara semipermanente', '15 hrs', 'Es una técnica innovadora que riza las pestañas desde la raíz para dar un efecto de mayor longitud, obteniendo unas extensiones 100% naturales sin necesidades de pegamentos o productos adicionales. Horarios a charlar con la especialista. ', 3),
(4, 'Taller de diseño y perfilado de cejas', '4 hrs', 'Aprenderás a depilar con pinza y perfilar las cejas. Un perfilado correcto y acorde a cada tipo de rostro ayuda a abrir el área de los ojos, dándole un aspecto joven. Horarios a charlar con la especialista.', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `is_admin`) VALUES
(1, 'edual986@gmail.com', 'admin123', 1),
(2, 'belen@gmail.com', 'admin123', 0),
(3, 'a@a.com', '$2y$10$AsQQcMNQ.fYhRb1cRRQIKOMldal1u4TRbvDAgaJ.hGh.2/9r0HD6G', 0),
(4, 'admin@admin.com', '$2y$10$IQ3/N0jibggrFSVWHIWVBu9LxPfpPvEgBGhf8MIwTH8TEzvYfy8jS', 1),
(5, 'test@test.com', '$2y$10$Y22sV1zdpiHDhLTp78PDJ.Vj1kXGJbUYlxfNaznEIC9MQNgsAwAMC', 1),
(6, 'admin', '$2y$10$Tbyogxq8cDIZ.pFmDKfEk.ONNh801ed/DdgIrkpEjOs5w43xntsa6', 0),
(7, 'a', '$2y$10$UikfA2y/bJGVD3Wczf1sl.u7t5hN4dkstJHkGG76eaUdsVEM4tmee', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
