-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2022 a las 10:34:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `fecha-trabajo` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `lista` text NOT NULL,
  `subtitulo` text NOT NULL,
  `img` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id`, `fecha-trabajo`, `titulo`, `descripcion`, `lista`, `subtitulo`, `img`, `fecha`) VALUES
(1, 'Noviembre 2018 - Presente', 'Cursos Diversos', 'Inicio mi formación académica en la plataforma udemy realizando diversos cursos relacionados con el  desarrollo web y programación como por ejemplo:', ' <li>Desarrollo de una tienda virtual con PHP, HTML, CSS y JS.</li>\r\n                                    <li> Curso de 110 horas para desarrolladores fullstack.</li>\r\n                                    <li>Github profesional.</li>\r\n                                    <li>C# profesional.</li>\r\n                                    <li>Máster en javascript</li>\r\n                                    <li>Máster en php</li>\r\n                                    <li>Devops, Docker, Github, Jenkins</li>\r\n', 'Cursos Diversos', 'vistas/img/udemy.jpg', '2022-08-04 07:31:09'),
(2, 'ENERO 2017 - PRESENTE', 'Edx', 'Inicio mi formación académica en la plataforma udemy realizando diversos cursos relacionados con la programación y ámbito estudiantil como por ejemplo:', '<li>Curso C principiantes</li>\r\n<li>Curso C intermedio</li>\r\n<li>Curso C avanzado</li>\r\n<li>Biología general</li>', 'Diversos cursos', 'vistas/img/upwork.png', '2022-08-04 07:31:53'),
(3, 'NOVIEMBRE 2018 - PRESENTE', 'Upwork', 'Inicio mi formación profesional trabajando como programador y desarrollador web freelance, realicé diversos trabajos como por ejemplo:', '<li>Wordpress Sitio web presentación.</li>\r\n<li>tilización de Google API.</li>\r\n<li>Sitio web personal (cliente de Estados Unidos).</li>\r\n<li>Manejo de archivos PDF.</li>\r\n', 'Desarrollador Freelance', 'vistas/img/edx.jpg', '2022-08-04 07:32:01'),
(4, 'ENERO 2020 - Octubre 2021', 'Incyt', 'Inicio mi formación profesional como diseñador y programador de diversos sitios web en el centro de investigación de la Universidad Rafael Landívar.\r\n\r\nTecnologías utilizadas:', '<li>Wordpress</li>\r\n<li>Elementor</li>\r\n<li>Html</li>\r\n<li>Css</li>\r\n<li>Js</li>', 'Diseñador y programador', 'vistas/img/Tec.jpg', '2022-08-04 07:32:12'),
(5, 'OCTUBRE 2021 - PRESENTE', 'TEC Landívar', 'Continuo mi formación profesional siendo contratado como analísta desarrolador en la Universidad Rafael Landívar comenzando con el sitio web del TEC landivar.\r\n\r\nTecnologías utilizadas: ', '<li>Wordpress</li>\r\n<li>Siteground</li>\r\n<li>API\'S</li>\r\n<li>Php</li>\r\n<li>html</li>\r\n<li>Css</li>\r\n<li>Js</li>\r\n\r\n\r\n\r\n\r\n', 'Analísta Desarrollador', 'vistas/img/trabajo.jpg', '2022-08-04 07:32:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `enlace` text NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `alt` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `enlace`, `title`, `img`, `alt`, `fecha`) VALUES
(1, 'https://tec.url.edu.gt/', 'Tec landivar', 'vistas/img/tecpa.png', 'ladivar', '2022-08-04 06:55:18'),
(2, 'https://haricode.com/', 'haricode', 'vistas/img/haricode_actualizado.gif', 'haricode', '2022-08-04 06:56:07'),
(3, 'https://incyt.url.edu.gt/museo-virtual/', 'museo-virtual', 'vistas/img/work4.png', 'landivar', '2022-08-04 06:56:43'),
(4, 'https://www.ingeorh.com/', 'ingeo', 'vistas/img/work12.png', 'ingeo', '2022-08-04 06:57:24'),
(5, 'https://upbeat-lewin-0e3a3a.netlify.app/', 'cift', 'vistas/img/work1.png', 'cift', '2022-08-04 06:58:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
