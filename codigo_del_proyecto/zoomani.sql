-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2019 a las 07:12:09
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zoomani`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `apellido`, `telefono`, `username`, `password`) VALUES
(1, 'elkin andres ', 'sanchez vega', 2147483647, 'andres18bigotes@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `tipo_animal` varchar(20) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `peso` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `zona_asignada` varchar(20) DEFAULT NULL,
  `lugar_llegada` varchar(20) DEFAULT NULL,
  `nombre_encargado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `fecha_ingreso`, `tipo_animal`, `descripcion`, `peso`, `estado`, `zona_asignada`, `lugar_llegada`, `nombre_encargado`) VALUES
(1, '2019-07-01', 'Mamíferos', 'vaca', '1 toneladas', 'Optimo', 'Pastizales', 'amazonas', 'andres sanchez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `id` int(11) NOT NULL,
  `tipo_animal` varchar(20) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `motivo_consulta` varchar(100) DEFAULT NULL,
  `diagnostico` varchar(500) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  `tratamientos` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `atencion`
--

INSERT INTO `atencion` (`id`, `tipo_animal`, `descripcion`, `motivo_consulta`, `diagnostico`, `observaciones`, `tratamientos`) VALUES
(1, 'Mamíferos', 'vaca', 'el animal tienen gripa por que se mojo por la noche al lado de la lluvia y se tira pedos', 'solo tiene gripa', 'dejarla bajo techo varios dias', 'loratadina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `tipo_animal` varchar(10) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `razon_citas` varchar(400) DEFAULT NULL,
  `tipo_cita` varchar(100) DEFAULT NULL,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` time(6) DEFAULT NULL,
  `encargado_del_animal` varchar(30) DEFAULT NULL,
  `nombre_veterinario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `tipo_animal`, `descripcion`, `razon_citas`, `tipo_cita`, `fecha_cita`, `hora_cita`, `encargado_del_animal`, `nombre_veterinario`) VALUES
(1, 'Mamíferos', 'vacaa', 'el animal tienen gripa por que se mojo por la noche al lado de la lluvia y se tira pedos', 'General', '2019-07-20', '05:05:00.000000', 'andres sanchez', 'elkin andres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `plan_turistico` int(1) DEFAULT NULL,
  `adicionales` int(2) DEFAULT NULL,
  `cantidad_adultos` int(1) DEFAULT NULL,
  `cantidad_ninos` int(1) DEFAULT NULL,
  `total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `nombre`, `cedula`, `plan_turistico`, `adicionales`, `cantidad_adultos`, `cantidad_ninos`, `total`) VALUES
(1, 'elkin andres sanchez', 1054567603, 3, 0, 4, 1, 75000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(29) NOT NULL,
  `apellido` varchar(29) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `zona` varchar(20) DEFAULT NULL,
  `telefono` varchar(14) NOT NULL,
  `horas` varchar(30) NOT NULL,
  `dias` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellido`, `username`, `password`, `zona`, `telefono`, `horas`, `dias`) VALUES
(1, 'elkin andres', 'sanchez vega', 'andres18bigotes@gmail.com', '123456789', 'patizales', '3103529641', 'lunes 8 horas miercoles 8 hora', 'miercoles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `precio` varchar(10) DEFAULT NULL,
  `limite` varchar(50) DEFAULT NULL,
  `duracion` varchar(20) DEFAULT NULL,
  `hora_ini_fin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `precio`, `limite`, `duracion`, `hora_ini_fin`) VALUES
(1, 'fin familiar', '$90000', '6', 'sabado y domingo', 'de 8 am a 5 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudcitas`
--

CREATE TABLE `solicitudcitas` (
  `id` int(20) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_personal` int(20) DEFAULT NULL,
  `zona_personal` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(6) DEFAULT NULL,
  `razon_cita` varchar(200) DEFAULT NULL,
  `tipo_cita` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudcitas`
--

INSERT INTO `solicitudcitas` (`id`, `id_animal`, `id_personal`, `zona_personal`, `fecha`, `hora`, `razon_cita`, `tipo_cita`) VALUES
(1, 1, 12, 'patizales', '2019-07-10', '06:55:00.000000', 'el  animal tienen gripa  por que se mojo por la noche al lado de la lluvia  y se tira pedos', 'Cita Urgencias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudplan`
--

CREATE TABLE `solicitudplan` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time(6) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudplan`
--

INSERT INTO `solicitudplan` (`id`, `nombre_apellido`, `fecha`, `hora`, `descripcion`, `correo`) VALUES
(1, 'elkin andres sanchez vega', '2019-07-13', '12:02:00.000000', 'somo 15 personas y tenemos adultos mayores nos haran descuento por ellos', 'andres18bigotes@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(14) NOT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `dias_atencion` varchar(40) DEFAULT NULL,
  `horas_atencion` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`id`, `nombre`, `apellido`, `username`, `password`, `cargo`, `dias_atencion`, `horas_atencion`) VALUES
(1, 'elkin andres ', 'sanchez vega', 'andres18bigotes@gmail.com', '123456789', 'veterinario', 'lunes-miercoles', 'lunes 8 am a 12 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudcitas`
--
ALTER TABLE `solicitudcitas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudplan`
--
ALTER TABLE `solicitudplan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `solicitudcitas`
--
ALTER TABLE `solicitudcitas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `solicitudplan`
--
ALTER TABLE `solicitudplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
