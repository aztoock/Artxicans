-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 23:07:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `artxicans`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `chat` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `seller` int(11) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `preciounitario` decimal(20,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`id`, `id_venta`, `id_producto`, `preciounitario`, `cantidad`) VALUES
(1, 1, 17, 950.00, 1),
(2, 2, 17, 950.00, 1),
(3, 2, 10, 2000.00, 4),
(4, 3, 17, 950.00, 1),
(5, 3, 10, 2000.00, 4),
(6, 4, 17, 950.00, 1),
(7, 4, 10, 2000.00, 4),
(8, 5, 17, 950.00, 1),
(9, 5, 10, 2000.00, 4),
(10, 6, 17, 950.00, 1),
(11, 6, 10, 2000.00, 4),
(12, 7, 17, 950.00, 2),
(13, 7, 10, 2000.00, 4),
(14, 8, 17, 950.00, 2),
(15, 8, 10, 2000.00, 4),
(16, 9, 17, 950.00, 2),
(17, 9, 10, 2000.00, 4),
(18, 10, 17, 950.00, 2),
(19, 10, 10, 2000.00, 4),
(20, 11, 17, 950.00, 1),
(21, 11, 10, 2000.00, 1),
(22, 12, 17, 950.00, 1),
(23, 12, 10, 2000.00, 1),
(24, 13, 17, 950.00, 1),
(25, 13, 10, 2000.00, 1),
(26, 13, 14, 1500.00, 100),
(27, 14, 17, 950.00, 1),
(28, 14, 10, 2000.00, 1),
(29, 14, 14, 1500.00, 100),
(30, 15, 17, 950.00, 1),
(31, 15, 10, 2000.00, 1),
(32, 15, 14, 1500.00, 100),
(33, 16, 17, 950.00, 1),
(34, 16, 10, 2000.00, 1),
(35, 16, 14, 1500.00, 100),
(36, 17, 17, 950.00, 1),
(37, 17, 10, 2000.00, 1),
(38, 17, 14, 1500.00, 100),
(39, 18, 17, 950.00, 1),
(40, 18, 10, 2000.00, 1),
(41, 18, 14, 1500.00, 100),
(42, 19, 17, 950.00, 1),
(43, 19, 10, 2000.00, 1),
(44, 19, 14, 1500.00, 100),
(45, 20, 17, 950.00, 1),
(46, 20, 10, 2000.00, 1),
(47, 20, 14, 1500.00, 100),
(48, 21, 17, 950.00, 1),
(49, 21, 10, 2000.00, 1),
(50, 21, 14, 1500.00, 100),
(51, 22, 17, 950.00, 1),
(52, 22, 10, 2000.00, 1),
(53, 22, 14, 1500.00, 100),
(54, 23, 17, 950.00, 1),
(55, 23, 10, 2000.00, 1),
(56, 23, 14, 1500.00, 100),
(57, 24, 17, 950.00, 1),
(58, 24, 10, 2000.00, 1),
(59, 24, 14, 1500.00, 100),
(60, 25, 17, 950.00, 1),
(61, 25, 10, 2000.00, 1),
(62, 25, 14, 1500.00, 100),
(63, 26, 17, 950.00, 1),
(64, 26, 10, 2000.00, 1),
(65, 26, 14, 1500.00, 100),
(66, 26, 7, 400.00, 1),
(67, 27, 17, 950.00, 1),
(68, 27, 10, 2000.00, 1),
(69, 27, 14, 1500.00, 100),
(70, 27, 7, 400.00, 1),
(71, 28, 7, 400.00, 1),
(72, 29, 7, 400.00, 1),
(73, 30, 7, 400.00, 1),
(74, 30, 16, 800.00, 1),
(75, 31, 7, 400.00, 1),
(76, 31, 16, 800.00, 1),
(77, 32, 7, 400.00, 1),
(78, 33, 7, 400.00, 1),
(79, 34, 15, 2500.00, 1),
(80, 34, 18, 1700.00, 1),
(81, 35, 15, 2500.00, 1),
(82, 35, 18, 1700.00, 1),
(83, 36, 15, 2500.00, 1),
(84, 36, 18, 1700.00, 2),
(85, 37, 15, 2500.00, 1),
(86, 37, 18, 1700.00, 2),
(87, 38, 18, 1700.00, 2),
(88, 39, 18, 1700.00, 2),
(89, 40, 20, 500.00, 1),
(90, 43, 20, 500.00, 1),
(91, 44, 20, 500.00, 1),
(92, 45, 2, 450.00, 4),
(93, 46, 2, 450.00, 4),
(94, 47, 2, 450.00, 4),
(95, 47, 4, 1300.00, 3),
(96, 47, 13, 2000.00, 1),
(97, 48, 2, 450.00, 4),
(98, 48, 4, 1300.00, 3),
(99, 48, 13, 2000.00, 1),
(100, 49, 2, 450.00, 4),
(101, 49, 13, 2000.00, 1),
(102, 50, 15, 2500.00, 1),
(103, 51, 15, 2500.00, 1),
(104, 52, 15, 2500.00, 1),
(105, 53, 15, 2500.00, 1),
(106, 54, 15, 2500.00, 1),
(107, 55, 15, 2500.00, 1),
(108, 56, 15, 2500.00, 1),
(109, 57, 15, 2500.00, 1),
(110, 58, 15, 2500.00, 1),
(111, 59, 15, 2500.00, 1),
(112, 60, 16, 800.00, 100),
(113, 61, 15, 2500.00, 1),
(114, 62, 2, 450.00, 1),
(115, 63, 13, 2000.00, 1),
(116, 64, 5, 1100.00, 1),
(117, 64, 2, 450.00, 1),
(118, 65, 5, 1100.00, 3),
(119, 65, 2, 450.00, 1),
(120, 66, 5, 1100.00, 3),
(121, 66, 2, 450.00, 5),
(122, 67, 2, 450.00, 5),
(123, 68, 2, 450.00, 5),
(124, 69, 2, 450.00, 4),
(125, 70, 2, 450.00, 1),
(126, 71, 13, 2000.00, 1),
(127, 72, 5, 1100.00, 1),
(128, 73, 3, 300.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion1` varchar(200) NOT NULL,
  `direccion2` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `codigopostal` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `instrucciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `usuario_id`, `nombre`, `direccion1`, `direccion2`, `ciudad`, `estado`, `codigopostal`, `telefono`, `instrucciones`) VALUES
(8, 2, 'cristian jordan nahuatlato', 'tlaxcala #10263, Col. Popular', 'apartamento 2 planta 3', 'puebla', 'Puebla', '72470', '2229259615', 'casa de dos pisos rustica, ubicada en la esquin exacta'),
(10, 12, 'beto', 'prueba de direccion beto', 'pdireccion b', 'puebla', 'puebla', '72470', '2229259644', 'pinstrucciones b'),
(11, 5, 'sadi1', 'saiddirec1', '', 'oaxaca', 'oaxaca', '72470', '2229259619', 'prueba de direccion para said 28'),
(12, 6, 'Said Castillo', 'calle las flores #16', '', 'Tehuacan', 'Puebla', '68540', '2212054136', 'Casa de dos pisos con porton blanco, hay un perro que ladra mucho'),
(13, 6, 'Said Castillo', 'calle las flores #16', '', 'Tehuacan', 'Puebla', '68540', '2212054136', 'Casa de dos pisos con porton blanco, hay un perro que ladra mucho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id_notif` int(11) NOT NULL,
  `notification` varchar(150) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id_notif`, `notification`, `ID_registro`) VALUES
(1, 'Solicitud de Vendedor Aceptada', 5),
(2, 'Reporte de perfil', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pay_account`
--

CREATE TABLE `pay_account` (
  `id_account` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pay_account`
--

INSERT INTO `pay_account` (`id_account`, `token`, `ID_registro`) VALUES
(1, 'gutctycuyctyc7t5res45s43a324astc', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `product` varchar(80) NOT NULL,
  `image1` varchar(80) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `image2` varchar(30) NOT NULL,
  `image3` varchar(30) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `product`, `image1`, `price`, `description`, `category`, `stock`, `image2`, `image3`, `ID_registro`) VALUES
(2, 'Vestido Bordado', 'blackdress.jpg', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Ropa', 5, 'blackdress.jpg', 'blackdress.jpg', 5),
(3, 'Collar de Ambar', 'ambar.jpg', 300, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Joyeria', 2, 'ambar.jpg', 'ambar.jpg', 5),
(4, 'Guayabera azul', 'guayabera1.jpg', 450, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Ropa', 5, 'guayabera1.jpg', 'guayabera1.jpg', 5),
(5, 'Corazon', 'corazon.jpg', 800, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Alebrije', 3, 'corazon.jpg', 'corazon.jpg', 5),
(6, 'Armadillo gris', 'alebrije2.jpg', 600, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Alebrije', 4, 'alebrije2.jpg', 'alebrije2.jpg', 5),
(8, 'Blusa Bordada', 'blouse.jpg', 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Ropa', 2, 'blouse.jpg', 'blouse.jpg', 5),
(9, 'Gato Alebrije Gris', 'alebrije1.jpg', 400, 'Gato alebrije de madera ', 'Alebrije', 2, 'alebrije1.jpg', 'alebrije1.jpg', 5),
(11, 'Sombrero Rojo', 'sombrero.jpg', 200, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Sombrero', 8, 'sombrero.jpg', 'sombrero.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile_comments`
--

CREATE TABLE `profile_comments` (
  `id_comment` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `seller` int(11) DEFAULT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profile_comments`
--

INSERT INTO `profile_comments` (`id_comment`, `star`, `comment`, `seller`, `ID_registro`) VALUES
(1, 4, 'Awesome', 5, 9),
(2, 5, 'Good', 5, 7),
(3, 5, 'Nice', 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `estatus` int(2) NOT NULL,
  `direccion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `Nombre`, `Correo`, `Contraseña`, `estatus`, `direccion`) VALUES
(4, 'mohamed', 'as@gmail.com', '123456', 0, 0),
(5, 'said', 'said557@gmail.com', 'said12345', 1, 0),
(6, 'Emmanuel', 'said1@gmail.com', 'said12345', 0, 1),
(7, 'Castillo ', 'said2@gmail.com', 'said12345', 0, 0),
(8, 'Marin', 'said3@gmail.com', 'said12345', 0, 0),
(9, 'said cm', 'said5@gmail.com', 'said12345', 0, 0),
(10, 'said', 'hola1@gmail.com', 'hola12345', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_sellers`
--

CREATE TABLE `reg_sellers` (
  `IDregseller` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `lada` int(4) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefonoref` varchar(20) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `identificador` varchar(255) NOT NULL,
  `solicitud` varchar(50) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reg_sellers`
--

INSERT INTO `reg_sellers` (`IDregseller`, `Nombre`, `apellidos`, `nickname`, `lada`, `telefono`, `telefonoref`, `domicilio`, `postal`, `identificador`, `solicitud`, `ID_registro`) VALUES
(47, 'Said', 'Castillo Marin', 'Said557', 52, '2212054136', '2212054136', 'de las flores', '34850', 'Said557-identificacion.jpeg', 'Aprobada', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id_report` int(11) NOT NULL,
  `report` varchar(150) NOT NULL,
  `type` varchar(30) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_star` int(11) DEFAULT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `seller` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id_report`, `report`, `type`, `ID_registro`, `id_product`, `id_star`, `id_comment`, `seller`) VALUES
(5, '', 'Comentario', 5, 2, 1, NULL, NULL),
(9, 'hola', 'Producto', 5, 2, NULL, NULL, NULL),
(10, 'hola', 'Producto', 5, 2, NULL, NULL, NULL),
(11, 'Hola', 'Producto', 5, 8, NULL, NULL, NULL),
(12, '', 'Comentario Perfil', 5, NULL, NULL, 3, NULL),
(13, '', 'Comentario Perfil', 5, NULL, NULL, 1, NULL),
(14, '', 'Comentario Perfil', 5, NULL, NULL, 2, NULL),
(15, 'hola hola', 'Vendedor', 7, NULL, NULL, NULL, 5),
(16, 'HOLA', 'Vendedor', 7, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sellers_data`
--

CREATE TABLE `sellers_data` (
  `id_data` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `desc_art` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sellers_data`
--

INSERT INTO `sellers_data` (`id_data`, `description`, `desc_art`, `location`, `ID_registro`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Oaxaca centro, Oaxaca.', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stars`
--

CREATE TABLE `stars` (
  `id_star` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stars`
--

INSERT INTO `stars` (`id_star`, `star`, `comment`, `ID_registro`, `id_product`) VALUES
(1, 4, 'Good!', 6, 2),
(2, 5, 'Nice!\r\n', 7, 2),
(4, 0, 'Lorem ipsum dolor di falure dnaiowndawaiubd ojandiwadawbod wib 1290u091u30912 inwaodnaoidnaoiwndaow', 8, 2),
(5, 5, 'Good!', 6, 6),
(6, 4, 'I like it', 6, 5),
(7, 1, 'Nop', 6, 9),
(8, 3, 'Nice!', 7, 3),
(9, 5, 'I like it', 7, 6),
(10, 4, 'Nice!', 7, 8),
(11, 3, 'Good!', 8, 8),
(12, 5, 'Awesome!', 8, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `clavetransaccion` varchar(250) NOT NULL,
  `paypaldatos` text NOT NULL,
  `fecha` datetime NOT NULL,
  `correo` varchar(5000) NOT NULL,
  `total` decimal(60,2) NOT NULL,
  `estatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `estatus`) VALUES
(1, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:09:52', 'said@correo.com', 950.00, 'pendiente'),
(2, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:22:57', 'said@correo.com', 8950.00, 'pendiente'),
(3, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:25:11', 'said@correo.com', 8950.00, 'pendiente'),
(4, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:25:28', 'said@correo.com', 8950.00, 'pendiente'),
(5, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:26:00', 'said@correo.com', 8950.00, 'pendiente'),
(6, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:26:02', 'said@correo.com', 8950.00, 'pendiente'),
(7, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:29:19', 'said@correo.com', 9900.00, 'pendiente'),
(8, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:29:43', 'said@correo.com', 9900.00, 'pendiente'),
(9, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:29:46', 'said@correo.com', 9900.00, 'pendiente'),
(10, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:30:26', 'said@correo.com', 9900.00, 'pendiente'),
(11, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:30:40', 'said@correo.com', 2950.00, 'pendiente'),
(12, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:54:25', 'said@correo.com', 2950.00, 'pendiente'),
(13, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:54:37', 'said@correo.com', 152950.00, 'pendiente'),
(14, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:47', 'said@correo.com', 152950.00, 'pendiente'),
(15, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:49', 'said@correo.com', 152950.00, 'pendiente'),
(16, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:50', 'said@correo.com', 152950.00, 'pendiente'),
(17, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:50', 'said@correo.com', 152950.00, 'pendiente'),
(18, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:50', 'said@correo.com', 152950.00, 'pendiente'),
(19, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:50', 'said@correo.com', 152950.00, 'pendiente'),
(20, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:50', 'said@correo.com', 152950.00, 'pendiente'),
(21, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:51', 'said@correo.com', 152950.00, 'pendiente'),
(22, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:55:51', 'said@correo.com', 152950.00, 'pendiente'),
(23, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:56:01', 'said@correo.com', 152950.00, 'pendiente'),
(24, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:56:06', 'said@correo.com', 152950.00, 'pendiente'),
(25, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:57:25', 'said@correo.com', 152950.00, 'pendiente'),
(26, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:57:32', 'said@correo.com', 153350.00, 'pendiente'),
(27, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:59:29', 'said@correo.com', 153350.00, 'pendiente'),
(28, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 21:59:41', 'said@correo.com', 400.00, 'pendiente'),
(29, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:02:06', 'said@correo.com', 400.00, 'pendiente'),
(30, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:02:22', 'said@correo.com', 1200.00, 'pendiente'),
(31, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:04:17', 'said@correo.com', 1200.00, 'pendiente'),
(32, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:04:23', 'said@correo.com', 400.00, 'pendiente'),
(33, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:10:19', 'said@correo.com', 400.00, 'pendiente'),
(34, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:10:30', 'said@correo.com', 4200.00, 'pendiente'),
(35, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:34:52', 'said@correo.com', 4200.00, 'pendiente'),
(36, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:34:58', 'said@correo.com', 5900.00, 'pendiente'),
(37, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:41:13', 'said@correo.com', 5900.00, 'pendiente'),
(38, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:53:18', 'said@correo.com', 3400.00, 'pendiente'),
(39, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:57:07', 'said@correo.com', 3400.00, 'pendiente'),
(40, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-24 22:57:31', 'cristian@correo.com', 500.00, 'pendiente'),
(41, '', '', '2023-06-24 23:16:43', '', 0.00, 'pendiente'),
(42, '', '', '2023-06-24 23:16:49', '', 0.00, 'pendiente'),
(43, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL43SQ7XK81869XP449180C\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"13L09510G5667963G\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $500.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#M5HdgJ6q417ovCI5Rj+Ivw==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"3AH089157A5913332\",\"state\":\"completed\",\"amount\":{\"total\":\"500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"21.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"500.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL43SQ7XK81869XP449180C\",\"create_time\":\"2023-06-25T05:17:06Z\",\"update_time\":\"2023-06-25T05:17:06Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3AH089157A5913332\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3AH089157A5913332/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL43SQ7XK81869XP449180C\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T05:16:58Z\",\"update_time\":\"2023-06-25T05:17:06Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL43SQ7XK81869XP449180C\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-24 23:16:54', 'cristian@correo.com', 500.00, 'aprobado'),
(44, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:02:07', 'cristian@correo.com', 500.00, 'pendiente'),
(45, ' 1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL5Q2Y69599143D38028627\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"8CR926801S9609304\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"1800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $1,800.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#oTF+i0KtLb1UC4Cqg8bnhQ==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"57G94211XV8867049\",\"state\":\"completed\",\"amount\":{\"total\":\"1800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"65.20\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"1800.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL5Q2Y69599143D38028627\",\"create_time\":\"2023-06-25T06:02:26Z\",\"update_time\":\"2023-06-25T06:02:26Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/57G94211XV8867049\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/57G94211XV8867049/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL5Q2Y69599143D38028627\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T06:02:19Z\",\"update_time\":\"2023-06-25T06:02:26Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL5Q2Y69599143D38028627\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 00:02:17', 'cristian@correo.com', 1800.00, 'aprobado'),
(46, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:29:51', 'cristian@correo.com', 1800.00, 'pendiente'),
(47, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL554I71S313021P273715D\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"7431552535965973M\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"7700.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"7700.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $7,700.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#yP026c2IrDyc8KTnLxGJcA==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"22N14479XC920404H\",\"state\":\"completed\",\"amount\":{\"total\":\"7700.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"7700.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"265.80\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"7700.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL554I71S313021P273715D\",\"create_time\":\"2023-06-25T06:30:17Z\",\"update_time\":\"2023-06-25T06:30:17Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/22N14479XC920404H\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/22N14479XC920404H/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL554I71S313021P273715D\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T06:30:09Z\",\"update_time\":\"2023-06-25T06:30:17Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL554I71S313021P273715D\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 00:30:06', 'cristian@correo.com', 7700.00, 'completo'),
(48, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:30:58', 'cristian@correo.com', 7700.00, 'pendiente'),
(49, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL56KA6WK439632Y856832W\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"8NY205262A876234V\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"3800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"3800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $3,800.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#Wx4JahjXYAEBq6yXH0tkFQ==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"3LX958790T868611E\",\"state\":\"completed\",\"amount\":{\"total\":\"3800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"3800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"133.20\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"3800.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL56KA6WK439632Y856832W\",\"create_time\":\"2023-06-25T06:31:09Z\",\"update_time\":\"2023-06-25T06:31:09Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3LX958790T868611E\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3LX958790T868611E/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL56KA6WK439632Y856832W\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T06:31:04Z\",\"update_time\":\"2023-06-25T06:31:09Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL56KA6WK439632Y856832W\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 00:31:02', 'cristian@correo.com', 3800.00, 'completo'),
(50, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:37:26', 'beto@correo.com', 2500.00, 'pendiente'),
(51, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:37:53', 'beto@correo.com', 2500.00, 'pendiente'),
(52, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:22', 'beto@correo.com', 2500.00, 'pendiente'),
(53, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:22', 'beto@correo.com', 2500.00, 'pendiente'),
(54, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:23', 'beto@correo.com', 2500.00, 'pendiente'),
(55, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:23', 'beto@correo.com', 2500.00, 'pendiente'),
(56, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:23', 'beto@correo.com', 2500.00, 'pendiente'),
(57, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:23', 'beto@correo.com', 2500.00, 'pendiente'),
(58, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 00:38:23', 'beto@correo.com', 2500.00, 'pendiente'),
(59, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL6BYQ4FN26353608084459\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"39D83663H37391616\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"2500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $2,500.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#APEBVMprAjKKgvkviLmyMg==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"6N508707M5694753N\",\"state\":\"completed\",\"amount\":{\"total\":\"2500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"89.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"2500.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL6BYQ4FN26353608084459\",\"create_time\":\"2023-06-25T06:38:30Z\",\"update_time\":\"2023-06-25T06:38:30Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6N508707M5694753N\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6N508707M5694753N/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL6BYQ4FN26353608084459\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T06:38:26Z\",\"update_time\":\"2023-06-25T06:38:30Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL6BYQ4FN26353608084459\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 00:38:24', 'beto@correo.com', 2500.00, 'completo'),
(60, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSL6CVI1CJ2089674243720E\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"7K939439F3560553J\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"80000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"80000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $80,000.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#PnEyjtt+pc1/UVrUokI5UQ==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"8TD204858X404903T\",\"state\":\"completed\",\"amount\":{\"total\":\"80000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"80000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"2724.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"80000.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSL6CVI1CJ2089674243720E\",\"create_time\":\"2023-06-25T06:40:26Z\",\"update_time\":\"2023-06-25T06:40:26Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/8TD204858X404903T\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/8TD204858X404903T/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL6CVI1CJ2089674243720E\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T06:40:21Z\",\"update_time\":\"2023-06-25T06:40:26Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSL6CVI1CJ2089674243720E\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 00:40:19', 'beto@correo.com', 80000.00, 'completo'),
(61, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMMOBY26N852967J9440532\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"5VA57152PS451592Y\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"2500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $2,500.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#jmhW485N3rzY3gwbP7+xNg==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"09M72270TX133810E\",\"state\":\"completed\",\"amount\":{\"total\":\"2500.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2500.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"89.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"2500.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMMOBY26N852967J9440532\",\"create_time\":\"2023-06-25T23:00:32Z\",\"update_time\":\"2023-06-25T23:00:32Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/09M72270TX133810E\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/09M72270TX133810E/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMMOBY26N852967J9440532\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T23:00:23Z\",\"update_time\":\"2023-06-25T23:00:32Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMMOBY26N852967J9440532\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 17:00:19', 'cristian@correo.com', 2500.00, 'completo'),
(62, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMNDUI1LH486139Y132374L\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"5P947257JC897225C\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"450.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"450.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $450.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#PQfUH7RKUsYuny5WFWQP/w==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"36G25329HN735431A\",\"state\":\"completed\",\"amount\":{\"total\":\"450.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"450.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"19.30\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"450.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMNDUI1LH486139Y132374L\",\"create_time\":\"2023-06-25T23:46:33Z\",\"update_time\":\"2023-06-25T23:46:33Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/36G25329HN735431A\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/36G25329HN735431A/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMNDUI1LH486139Y132374L\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-25T23:46:25Z\",\"update_time\":\"2023-06-25T23:46:33Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMNDUI1LH486139Y132374L\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 17:46:22', 'cristian@correo.com', 450.00, 'completo'),
(63, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMNTQA4H8505858V466003U\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"3M308912E9167544H\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"2000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $2,000.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#nAmns6dRnLpzGlsZqA5mZA==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"3KX70190NM2640945\",\"state\":\"completed\",\"amount\":{\"total\":\"2000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"72.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"2000.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMNTQA4H8505858V466003U\",\"create_time\":\"2023-06-26T00:20:21Z\",\"update_time\":\"2023-06-26T00:20:21Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3KX70190NM2640945\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3KX70190NM2640945/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMNTQA4H8505858V466003U\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T00:20:16Z\",\"update_time\":\"2023-06-26T00:20:21Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMNTQA4H8505858V466003U\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 18:19:31', 'cristian@correo.com', 2000.00, 'completo'),
(64, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMN3YI17N15377WS5296031\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"1MB561413Y698483H\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"1550.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1550.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $1,550.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#lK5hKRxNqyqjh5Od93xZIg==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"2UA51533XN368871B\",\"state\":\"completed\",\"amount\":{\"total\":\"1550.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1550.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"56.70\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"1550.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMN3YI17N15377WS5296031\",\"create_time\":\"2023-06-26T00:38:00Z\",\"update_time\":\"2023-06-26T00:38:00Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/2UA51533XN368871B\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/2UA51533XN368871B/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMN3YI17N15377WS5296031\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T00:37:53Z\",\"update_time\":\"2023-06-26T00:38:00Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMN3YI17N15377WS5296031\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 18:37:46', 'cristian@correo.com', 1550.00, 'completo'),
(65, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMONBY4HA412395D866154V\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"663690151F6913714\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"3750.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"3750.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $3,750.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#mb8nSqIEqLQDHRfIE/Vvqw==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"81B4429344136114G\",\"state\":\"completed\",\"amount\":{\"total\":\"3750.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"3750.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"131.50\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"3750.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMONBY4HA412395D866154V\",\"create_time\":\"2023-06-26T01:15:03Z\",\"update_time\":\"2023-06-26T01:15:03Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/81B4429344136114G\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/81B4429344136114G/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMONBY4HA412395D866154V\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:14:47Z\",\"update_time\":\"2023-06-26T01:15:03Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMONBY4HA412395D866154V\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:14:45', 'cristian@correo.com', 3750.00, 'completo'),
(66, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMOOHA3E887295G3827682D\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"3H778311W7112821V\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"5550.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"5550.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $5,550.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#VKzWYlZAeqkfi4y5txzQtA==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"4B302250RS551680B\",\"state\":\"completed\",\"amount\":{\"total\":\"5550.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"5550.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"192.70\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"5550.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMOOHA3E887295G3827682D\",\"create_time\":\"2023-06-26T01:17:21Z\",\"update_time\":\"2023-06-26T01:17:21Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/4B302250RS551680B\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/4B302250RS551680B/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOOHA3E887295G3827682D\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:17:16Z\",\"update_time\":\"2023-06-26T01:17:21Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOOHA3E887295G3827682D\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:17:13', 'cristian@correo.com', 5550.00, 'completo'),
(67, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 19:21:50', 'cristian@correo.com', 2250.00, 'pendiente'),
(68, '1v5298n3kkhg8vl74v512e94n0', '', '2023-06-25 19:21:59', 'cristian@correo.com', 2250.00, 'pendiente'),
(69, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMOQ2A1N75070950190704P\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"2YV100319T297183T\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"1800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $1,800.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#a4WaBxDN2jU92Na2lgA2SA==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"3EA7533700598710X\",\"state\":\"completed\",\"amount\":{\"total\":\"1800.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1800.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"65.20\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"1800.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMOQ2A1N75070950190704P\",\"create_time\":\"2023-06-26T01:22:53Z\",\"update_time\":\"2023-06-26T01:22:53Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3EA7533700598710X\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3EA7533700598710X/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOQ2A1N75070950190704P\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:22:48Z\",\"update_time\":\"2023-06-26T01:22:53Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOQ2A1N75070950190704P\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:22:45', 'cristian@correo.com', 1800.00, 'completo'),
(70, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMORFQ41176019UG893325E\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"0A0541290K785883J\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"450.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"450.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $450.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#hlIjc/TOcZNxBVKovBQ1Tg==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"0V012358SS7789942\",\"state\":\"completed\",\"amount\":{\"total\":\"450.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"450.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"19.30\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"450.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMORFQ41176019UG893325E\",\"create_time\":\"2023-06-26T01:23:39Z\",\"update_time\":\"2023-06-26T01:23:39Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/0V012358SS7789942\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/0V012358SS7789942/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMORFQ41176019UG893325E\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:23:34Z\",\"update_time\":\"2023-06-26T01:23:39Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMORFQ41176019UG893325E\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:23:30', 'cristian@correo.com', 450.00, 'completo'),
(71, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMOWRY5XM36999PP190604H\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"97Y25017HS6866705\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"2000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $2,000.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#+hg44NSWafUcECoMvR4C/Q==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"05641400CM8131542\",\"state\":\"completed\",\"amount\":{\"total\":\"2000.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"2000.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"72.00\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"2000.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMOWRY5XM36999PP190604H\",\"create_time\":\"2023-06-26T01:35:10Z\",\"update_time\":\"2023-06-26T01:35:10Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/05641400CM8131542\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/05641400CM8131542/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOWRY5XM36999PP190604H\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:35:03Z\",\"update_time\":\"2023-06-26T01:35:10Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOWRY5XM36999PP190604H\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:35:01', 'cristian@correo.com', 2000.00, 'completo');
INSERT INTO `ventas` (`id_venta`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `estatus`) VALUES
(72, '1v5298n3kkhg8vl74v512e94n0', '{\"id\":\"PAYID-MSMOWXQ8YF037144B2134030\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"76R83403ND120450E\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-bnzvr26405391@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"MHYE6SWGLG5YJ\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"phone\":\"9069627403\",\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"1100.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1100.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"RBLPJCH5RHYFE\",\"email\":\"sb-calho26405263@business.example.com\"},\"description\":\" Compra a Artxicans $1,100.00\",\"custom\":\" 1v5298n3kkhg8vl74v512e94n0#viYFR9vfzMo90a6wgFcctw==\",\"soft_descriptor\":\"PAYPAL *TEST STORE\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"5MV93662AJ3392235\",\"state\":\"completed\",\"amount\":{\"total\":\"1100.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1100.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"41.40\",\"currency\":\"MXN\"},\"receivable_amount\":{\"value\":\"1100.00\",\"currency\":\"MXN\"},\"exchange_rate\":\"21.30602113214266\",\"parent_payment\":\"PAYID-MSMOWXQ8YF037144B2134030\",\"create_time\":\"2023-06-26T01:35:31Z\",\"update_time\":\"2023-06-26T01:35:31Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/5MV93662AJ3392235\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/5MV93662AJ3392235/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOWXQ8YF037144B2134030\",\"rel\":\"parent_payment\",\"method\":\"GET\"}],\"soft_descriptor\":\"PAYPAL *TEST STORE\"}}]}],\"create_time\":\"2023-06-26T01:35:26Z\",\"update_time\":\"2023-06-26T01:35:31Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-MSMOWXQ8YF037144B2134030\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2023-06-25 19:35:23', 'cristian@correo.com', 1100.00, 'completo'),
(73, 'uhb4j8ra0nqn7a07g46h0qpns9', '', '2023-06-27 14:57:44', 'said1@gmail.com', 300.00, 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `ID` (`ID`),
  ADD KEY `seller` (`seller`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `ID` (`ID_registro`);

--
-- Indices de la tabla `pay_account`
--
ALTER TABLE `pay_account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `ID` (`ID_registro`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `ID` (`ID_registro`);

--
-- Indices de la tabla `profile_comments`
--
ALTER TABLE `profile_comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `ID` (`ID_registro`),
  ADD KEY `seller` (`seller`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `reg_sellers`
--
ALTER TABLE `reg_sellers`
  ADD PRIMARY KEY (`IDregseller`),
  ADD KEY `ID` (`ID_registro`);

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_star` (`id_star`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `ID` (`ID_registro`),
  ADD KEY `seller` (`seller`);

--
-- Indices de la tabla `sellers_data`
--
ALTER TABLE `sellers_data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `ID` (`ID_registro`);

--
-- Indices de la tabla `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id_star`),
  ADD KEY `ID` (`ID_registro`),
  ADD KEY `id_product` (`id_product`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chats`
--
ALTER TABLE `chats`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pay_account`
--
ALTER TABLE `pay_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `profile_comments`
--
ALTER TABLE `profile_comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reg_sellers`
--
ALTER TABLE `reg_sellers`
  MODIFY `IDregseller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sellers_data`
--
ALTER TABLE `sellers_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `stars`
--
ALTER TABLE `stars`
  MODIFY `id_star` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `pay_account`
--
ALTER TABLE `pay_account`
  ADD CONSTRAINT `pay_account_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `profile_comments`
--
ALTER TABLE `profile_comments`
  ADD CONSTRAINT `profile_comments_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `profile_comments_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `reg_sellers`
--
ALTER TABLE `reg_sellers`
  ADD CONSTRAINT `reg_sellers_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`id_star`) REFERENCES `stars` (`id_star`),
  ADD CONSTRAINT `reports_ibfk_4` FOREIGN KEY (`id_comment`) REFERENCES `profile_comments` (`id_comment`),
  ADD CONSTRAINT `reports_ibfk_5` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `reports_ibfk_6` FOREIGN KEY (`seller`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `sellers_data`
--
ALTER TABLE `sellers_data`
  ADD CONSTRAINT `sellers_data_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `stars_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `stars_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
