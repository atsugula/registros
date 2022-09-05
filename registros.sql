-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 00:01:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29
CREATE DATABASE registros;
use registros;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(10) UNSIGNED NOT NULL,
  `ARL` text NOT NULL,
  `RH` text NOT NULL,
  `Casilla` int(13) NOT NULL,
  `Fecha` date NOT NULL,
  `hora` time NOT NULL,
  `persona` text NOT NULL,
  `Empresa` text NOT NULL,
  `lectura` text NOT NULL,
  `equipo` datetime NOT NULL,
  `salidah` time NOT NULL,
  `Cedula` int(12) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `Total` text NOT NULL,
  `Marca` text NOT NULL,
  `Serie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `ARL`, `RH`, `Casilla`, `Fecha`, `hora`, `persona`, `Empresa`, `lectura`, `equipo`, `salidah`, `Cedula`, `nombre`, `Total`, `Marca`, `Serie`) VALUES
(36, 'Aliquid ea molestiae', 'Quibusdam in quo lab', 53, '2022-06-04', '06:34:00', 'Assumenda reprehende', 'Assumenda unde aut d', '0', '2022-07-23 00:00:00', '00:19:00', 10, 'Cum tempore duis do', '', '', ''),
(41, 'Consequatur quam co', 'Voluptas laborum Do', 43, '1979-05-24', '11:39:00', 'Fuga Reiciendis eli', 'Consectetur nisi re', 'Corporis qui ut maxi', '1988-06-16 00:00:00', '02:29:00', 11, 'tolozin', '', '', ''),
(43, 'Aut eos laboris qua', 'A distinctio Dolore', 42, '1975-07-15', '09:40:00', 'Aute cupiditate perf', 'Delectus tenetur in', '0', '2022-07-23 00:00:00', '08:53:00', 12, 'roles', '', '', ''),
(48, 'Similique tempora au', 'Sit voluptate omnis', 99, '2017-02-27', '10:10:00', 'Sit suscipit laboru', 'Velit autem sapiente', '0', '2022-07-23 00:00:00', '17:06:00', 13, 'Aut aut voluptate qu', '', '', ''),
(53, 'Est eos duis ad ver', 'Obcaecati distinctio', 0, '1998-01-10', '15:53:00', 'In reprehenderit rer', 'Accusamus qui ut ten', '0', '2022-07-23 00:00:00', '20:40:00', 14, 'Officia consectetur ', '', '', ''),
(57, 'Cupidatat Nam nulla ', 'Occaecat rerum atque', 90, '2011-08-03', '09:52:00', 'Sit dolorum voluptas', 'Eu reprehenderit hi', 'si', '1977-11-01 00:00:00', '03:51:00', 15, 'kkkkkk', '', '', ''),
(58, 'Tenetur quo culpa nu', 'Dolores quia nesciun', 44, '1981-02-20', '01:00:00', 'Ipsum non est aut ', 'Molestiae a perferen', '0', '2022-07-23 00:00:00', '01:58:00', 16, 'datus', '', '', ''),
(76, 'Aliquid pariatur Vo', 'Earum inventore accu', 52, '1990-09-18', '22:15:00', 'Suscipit provident ', 'Ut aute magnam minim', '0', '2022-07-23 00:00:00', '16:14:00', 17, 'toloza', '', '', ''),
(84, 'Ab repellendus Eius', 'Soluta qui tempore ', 18, '1987-01-15', '19:29:00', 'Odio aut id voluptas', 'Dolore sit ducimus ', '0', '2022-07-23 00:00:00', '21:48:00', 18, 'mauro', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
