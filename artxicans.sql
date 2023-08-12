-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2023 a las 02:30:19
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
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `nombre`, `correo`, `contraseña`) VALUES
(2, 'said', 'said@correo.com', '1234567'),
(4, 'cristian jordan', 'cristian@correo.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `chat` varchar(150) NOT NULL,
  `seller` int(11) DEFAULT NULL,
  `ID_registro` int(11) DEFAULT NULL,
  `sent` varchar(50) NOT NULL
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
  `cantidad` int(11) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `pais` varchar(90) NOT NULL,
  `codigopostal` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `instrucciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id_notif` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `notification` varchar(1000) NOT NULL,
  `tipo` int(1) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pay_account`
--

CREATE TABLE `pay_account` (
  `id_account` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `ID_registro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `ID_registro` int(11) DEFAULT NULL,
  `estatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `product`, `image1`, `price`, `description`, `category`, `stock`, `image2`, `image3`, `ID_registro`, `estatus`) VALUES
(1, 'Trompo tradicional', 'img_29_1.jpg', 250, 'Trompo tradicional azul hecho de madera y detallado con diversos colores.', 'Juguetes', 20, 'img_29_2', 'img_29_3', 3, 'Aprobado'),
(2, 'Lele Juguete Artesanal', 'img_26_1.jpg', 500, 'Lele, mu?eca tradicional mexicana, hecho de papel, pintado y accesorios bordados.', 'Juguetes', 6, 'img_26_2.jpg', 'img_26_3.jpg', 3, 'Aprobado'),
(3, 'Mascara de Darth Vader', 'img_9_1.jpg', 6000, 'Mascara de Darth Vader-Star Wars elaborada con arte huichol.', 'Arte Huichol', 3, 'img_9_2.jpg', 'img_9_3.jpg', 5, 'Aprobado'),
(4, 'Pantera Negra', 'img_17_1.jpg', 5000, 'Pantera negra elaborada con arte huichol, est? hecho en el estado de Nayarit.', 'Arte Huichol', 4, 'img_17_2.jpg', 'img_17_3.jpg', 5, 'Aprobado'),
(5, 'Gorila Huichol', 'img_27_1.jpg', 4800, 'Gorila hecha con arte huichol, elaboradas en el estado de Nayarit', 'Arte Huichol', 4, 'img_27_2.jpg', 'img_27_3.jpg', 5, 'Aprobado'),
(6, 'Dinosaurio de cuello largo', 'img_18_1.jpg', 6000, 'Dinosaurio de cuello largo creado con el tradicional arte huichol.', 'Arte Huichol', 2, 'img_18_2.jpg', 'img_18_3.jpg', 5, 'Aprobado'),
(7, 'Zapatos Artesanales', 'img_42_1.jpg', 2000, 'Zapatos artesanales del estado de Durango, bordados para dama.', 'Zapatos', 7, 'img_42_2.jpg', 'img_42_1.jpg', 9, 'Aprobado'),
(8, 'Zapatos Artesanales de Durango', 'img_10_1.jpg', 1800, 'Zapatos artesanales del estado de Durango, muy comodos para dama.', 'Zapatos', 8, 'img_10_2.jpg', 'img_10_3.jpg', 9, 'Aprobado'),
(9, 'Chamarra de Mezclilla bordada', 'img_23_1.jpg', 2000, 'Chamarra de mezclilla bordada y decorada con figuras de flores.', 'Ropa', 9, 'img_23_2.jpg', 'img_23_3.jpg', 10, 'Aprobado'),
(10, 'Collar con Oro y ?mbar', 'img_8_1.jpg', 3600, 'Collar de oro decorado con redondas piedras de ?mbar, producidas en el estado de Chiapas.', 'Joyeria', 12, 'img_8_2.jpg', 'img_8_3.jpg', 6, 'Aprobado'),
(11, 'Collar de ?mbar', 'img_41_1.jpg', 4500, 'Collar compuesto de piezas peque?as de ?mbar y una figura de jade.', 'Joyeria', 10, 'img_41_2.jpg', 'img_41_3.jpg', 2, 'Aprobado'),
(12, 'Aretes de ?mbar', 'img_12_1.jpg', 750, 'Aretes de ?mbar decoradas con plata alrededor.', 'Joyeria', 23, 'img_12_2.jpg', 'img_12_3.jpg', 6, 'Aprobado'),
(13, 'Collar de Coraz?n ', 'img_28_1.jpg', 800, 'Dije de ?mbar en forma de coraz?n, elaborada en el estado de Chiapas.', 'Joyeria', 26, 'img_28_2.jpg', 'img_28_3.jpg', 6, 'Aprobado'),
(14, 'Rebozo Artesanal Bordado', 'img_4_1.jpg', 2500, 'Rebozo con forma de flores bordadas en el estado de San Luis Potos?', 'Rebozos', 12, 'img_4_2.jpg', 'img_4_3.jpg', 8, 'Aprobado'),
(15, 'Rebozo de Colores', 'img_7_1.jpg', 2700, 'Rebozo color blanco bordado de colores con varias figuras geom?tricas, flores y animales como el pavo real, elaborado en el estado de San Luis Potos?', 'Rebozos', 5, 'img_7_2.jpg', 'img_7_1.jpg', 10, 'Aprobado'),
(16, 'Rebozo Artesanal Tradicional', 'img_24_1.jpg', 2400, 'Rebozo color negro con bordes de colores', 'Rebozos.', 13, 'img_24_2.jpg', 'img_24_3.jpg', 8, 'Aprobado'),
(17, 'Alebrije Toro Azul', 'img_40_1.jpg', 1900, 'Toro alebrije color azul de madera hecho en el estado de Oaxaca.', 'Alebrijes', 14, 'img_40_2.jpg', 'img_40_3.jpg', 15, 'Aprobado'),
(18, 'Alebrije Gato Azul', 'img_15_1.jpg', 1900, 'Gato alebrije color azul de madera y pintado, elaborado en el estado de Oaxaca.', 'Alebrijes', 12, 'img_15_2.jpg', 'img_15_3.jpg', 15, 'Aprobado'),
(19, 'Alebrije Conejo blanco', 'img_36_1.jpg', 2200, 'Conejo alebrije color blanco de madera y pintado, elaborado en el estado de Oaxaca.', 'Alebrijes', 13, 'img_36_2.jpg', 'img_36_3.jpg', 15, 'Aprobado'),
(20, 'Alebrije Pez-Puma Grande', 'img_3_1.jpg', 15000, 'Grande alebrije Pez-Puma de madera y pintado, elaborado en el estado de Oaxaca. ', 'Alebrijes', 5, 'img_3_2.jpg', 'img_3_3.jpg', 15, 'Aprobado'),
(21, 'Alebrije Camaleon', 'img_32_1.jpg', 1900, 'Camaleon alebrije naranja de madera y pintado, elaborado en el estado de Oaxaca', 'Alebrijes', 15, 'img_32_2.jpg', 'img_32_3.jpg', 15, 'Aprobado'),
(22, 'Alebrije Venado', 'img_22_1.jpg', 2000, 'Venado alebrije color blanco de madera, pintado con algunas partes de su cuerpo de diversos colores y diferentes figuras, elaborado en el estado de Oaxaca', 'Alebrijes', 12, 'img_22_2.jpg', 'img_22_3.jpg', 15, 'Aprobado'),
(23, 'Vestido Telar Estructura', 'img_25_1.jpg', 1800, 'Vestido beige con brocados en burdeos y morado en formas geom?tricas. Una prenda 100% artesanal. Medidas: 58cm de ancho x 98cm', 'Ropa', 15, 'img_25_2.jpg', 'img_25_1.jpg', 7, 'Aprobado'),
(24, 'Vestido Franjas Telar', 'img_35_1.jpg', 1900, 'Vestido confeccionado de telar de cintura con franjas en tonalidades a contraste color tierra con turquesa y beige. Una prenda tipica del estado de Chiapas.Medidas: 60cm de ancho x 90cm de largo', 'Ropa', 16, 'img_35_2.jpg', 'img_35_1.jpg', 7, 'Aprobado'),
(25, 'Blusa Blanca', 'img_37_1.jpg', 1800, 'Blusa blanca bordada con distintos colores, prenda tipica del estado de Chiapas. Medidas: 66cm de ancho x 64cm de largo', 'Ropa', 20, 'img_37_2.jpg', 'img_37_1.jpg', 7, 'Aprobado'),
(26, 'Croptop Telar Teja', 'img_34_1.jpg', 2000, 'Croptop en telar de cintura color teja, con franjas en laterales y bordados geom?tricos. T?pico en el estado de Chiapas. Medidas: 66cm de ancho x 62 de largo.', 'Ropa', 25, 'img_34_2.jpg', 'img_34_1.jpg', 7, 'Aprobado'),
(27, 'Bluson Blanco Pechera', 'img_30_1.jpg', 1400, 'Bluson manga mariposa, color blanco, super ligero, con pechera bordada en tonalidades a contraste. Medidas: 48cm de ancho x 84cm de largo', 'Ropa', 18, 'img_30_2.jpg', 'img_30_1.jpg', 7, 'Aprobado'),
(28, 'Guayabera Negra Bordada', 'img_31_1.jpg', 1800, 'Guayabera color negro bordada con diversos colores de un lado, elaborada en el estado de Yucat?n. Medidas: 64cm de ancho x 68cm de largo.', 'Ropa', 10, 'img_31_2.jpg', 'img_31_3.jppg', 4, 'Aprobado'),
(29, 'Guayabera Azul Marino Bordada', 'img_6_1.jpg', 1500, 'Guayabera color azul marino, bordada con figuras de mariposa, elaborada en el estado de Yucat?n. Medida 55cm de ancho x 60cm de largo', 'Ropa', 12, 'img_6_2.jpg', 'img_6_3.jpg', 4, 'Aprobado'),
(30, 'Vestido con Pechera', 'img_21_1.jpg', 2100, 'Vestido color blanco, super ligero con pechera bordada en forma de figuras geometricas y distintos colores. Medidas: 1.40cm de largo x 60cm de ancho.', 'Ropa', 13, 'img_21_2.jpg', 'img_21_1.jpg', 7, 'Aprobado'),
(31, 'Funda Bordada', 'img_14_1.jpg', 1200, 'Funda para almohada, decorada con figuras bordadas detalladamente.', 'Otros', 20, 'img_14_2.jpg', 'img_14_3.jpg', 8, 'Aprobado'),
(32, 'Bolsa con Flores', 'img_13_1.jpg', 1000, 'Bolsa de mano bordada con figuras de flores y hojas.', 'Otros', 50, 'img_13_2.jpg', 'img_13_1.jpg', 11, 'Aprobado'),
(33, 'Bolsa de Coraz?n', 'img_39_1.jpg', 1200, 'Bolsa de mano color lila y en forma de coraz?n, con bordado en forma tradicional de flores,', 'Otros', 20, 'img_39_2.jpg', 'img_39_3.jpg', 11, 'Aprobado'),
(34, 'Guayabera de Oaxaca', 'img_16_1.jpg', 2000, 'Guayabera color negro y bordada a los costados con forma de flores ordenadas, elaboradas en el estado de Oaxaca. Medidas: 65 de largo x 60 de ancho', 'Ropa', 15, 'img_16_2.jpg', 'img_16_1.jpg', 10, 'Aprobado'),
(35, 'Zapatos Artesanales Duranguenses', 'img_44_1.jpg', 1900, 'Zapatos artesanles color cafe, t?picos y elaborados en el estado de Durango.', 'Ropa', 24, 'img_44_2.jpg', 'img_44_3.jpg', 9, 'Aprobado'),
(36, 'Croptop Telar Franjas', 'img_20_1.jpg', 1800, 'Croptop en telar de cintura color azul claro, con franjas y bordados regionales en la parte frontal, Medidas: 66cm de ancho x 62cm de largo.', 'Ropa', 12, 'img_20_2.jpg', 'img_20_3.jpg', 7, 'Aprobado'),
(37, 'Guayabera Yucateca', 'img_1_1.jpg', 1200, 'Guayabera color blanco, tradicional del estado de Yucat?n.', 'Ropa', 27, 'img_1_2.jpg', 'img_1_3.jpg', 12, 'Aprobado'),
(38, 'Guayabera de Quintana Roo', 'img_2_1.jpg', 2000, 'Guayabera color naranja, con franjas bordadas a los costados, hecha en el estado de Quintana Roo.', 'Ropa', 19, 'img_2_2.jpg', 'img_2_1.jpg', 12, 'Aprobado'),
(39, 'Cuadro con Arte Huichol', 'img_46_1.jpg', 3800, 'Cuadro con medidas de 1m x 1m, elaborada con diversas figuras de animales y flores, hecha con el tradicional arte huichol.', 'Arte Huichol', 3, 'img_46_2.jpg', 'img_46_1.jpg', 12, 'Aprobado'),
(40, 'Blusa Blanca de Telar', 'img_5_1.jpg', 1500, 'Blusa blanca de telar con bordes color naranja y bordada con figuras geom?tricas y de diversos colores. Medidas:50cm de ancho x 60cm de largo. ', 'Ropa', 10, 'img_5_2.jpg', 'img_5_3.jpg', 7, 'Aprobado'),
(41, 'Vestido Naranja Bordado ', 'img_38_1.jpg', 2700, 'Vestido color naranja con bordado tradicional y decorado con franjas de colores. Medidas: 80cm de largo x 55cm de ancho', 'Ropa', 12, 'img_38_2.jpg', 'img_38_1.jpg', 7, 'Aprobado'),
(42, 'Vestido Telar Bicolor', 'img_33_1.jpg', 2400, 'Vestido midi de franjas bicolor, una prenda 100% artesanal, originaria de Chiapas. Medidas: 60cm de ancho c 96cm de largo', 'Ropa', 19, 'img_33_2.jpg', 'img_33_1.jpg', 7, 'Aprobado'),
(43, 'Bluson Bicolor Pechera', 'img_19_1.jpg', 1300, 'Bluson bicolor con linda pechera bordada, este bordado es t?pico en el estado de Chiapas. Medidas: 48cm de ancho x 84cm de largo', 'Ropa', 20, 'img_19_2.jpg', 'img_19_1.jpg', 7, 'Aprobado'),
(44, 'Croptop Floreado', 'img_11_1.jpg', 1000, 'Croptop decorado con figuras en formas de flores que cubren toda la prenda de ropa.', 'Ropa', 5, 'img_11_1.jpg', 'img_11_2.jpg', 7, 'Aprobado');

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
(1, 'Elvis', 'elviscastillo@correo.com', 'alebrijes7', 1, 0),
(2, 'Said', 'said557@gmail.com', 'HolaMundo98', 1, 0),
(3, 'Osoraya', 'osoraya57@correo.com', 'osoraya5757', 1, 0),
(4, 'Daniela', 'daniela7@outlook.com', 'danifetch12', 1, 0),
(5, 'Cukatemx', 'cukatemx@correo.com', 'mxartehuichol48', 1, 0),
(6, 'Brenda', 'brendazm12@gmail.com', 'brent980zm', 1, 0),
(7, 'haalkmx', 'haalkmx@correo.com', 'fashionDesign1', 1, 0),
(8, 'Sandra', 'sandraweber@yahoo.com', 'sandy01347', 1, 0),
(9, 'ArmandoSaveedra', 'armando0@outlook.es', 'armand007', 1, 0),
(10, 'Alinalopez', 'alinalpz\"outlook.es', 'lopezalina49', 1, 0),
(11, 'David Hernandez', 'davicho.hernandez@gmail.com', 'davidhernandez57', 1, 0),
(12, 'Juan', 'juanperez@correo.com', 'tilcajete123321', 1, 0),
(13, 'Jalieza', 'stjalieza@correo.com', 'santotomasjalieza2023', 1, 0),
(14, 'Juan Perez', 'juanpe45@gmail.com', 'juanisimo6566', 1, 0),
(15, 'AlebrijesTox', 'albrijestox@correo.com', 'alebrijes77', 1, 0);

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
(2, 'Elvis', 'Castillo', 'ElvisCastillo', 52, '9622413411', '2361127245', 'Calle las flores 16', '34850', 'ElvisCastillo-identificacion.jpeg', 'Aprobado', 1),
(3, 'Osmar', 'Mora', 'Osoraya', 52, '5551309813', '5551609376', 'Calle Laures 5', '53598', 'Osoraya-identificacion.jpeg', 'Aprobado', 3),
(4, 'Daniela', 'Hernandez', 'Danielalisaiarte', 52, '5513661003', '5510667347', 'Calle de las acacias 8', '55900', 'Danielalisaiarte-identificacion.jpeg', 'Aprobado', 4),
(5, 'Cukatetemx', 'Huichol', 'cukatemx', 52, '4443809084', '4447751983', 'Calle de los Sabinos 20', '78049', 'cukatemx-identificacion.jpeg', 'Aprobado', 5),
(6, 'Brenda', 'Zacateco Martinez', 'Brendazm12', 52, '9982001541', '9980112359', 'Calle Republica de Colombia 10', '77500', 'Brendazm12-identificacion.jpeg', 'Aprobado', 6),
(7, 'Armando', 'Saveedra', 'Tiendamapmx', 52, '6180031831', '6181023294', 'Calle Jose Joaquin Herrera 03', '34000', 'Tiendamapmx-identificacion.jpeg', 'Aprobado', 9),
(8, 'Alina', 'Lopez', 'Alinalopez', 52, '3862201934', '3864809100', 'Calle nacional 201', '97000', 'Alinalopez-identificacion.jpeg', 'Aprobado', 10),
(9, 'Juan', 'Perez', 'Mexique', 52, '5530193451', '5510239410', 'Calle Bravo 5', '01060', 'Mexique-identificacion.jpeg', 'Aprobado', 12),
(10, 'Sandra', 'Weber', 'Sandraweber', 52, '5557093310', '5554153402', 'Calle Curtiduria 202', '01000', 'Sandraweber-identificacion.jpeg', 'Aprobado', 8),
(11, 'Haalkmx', 'Jalisco', 'haalkmx', 52, '3335109401', '3332084716', 'Calle Heroes de Nacozari 12', '44100', 'haalkmx-identificacion.jpeg', 'Aprobado', 7),
(12, 'David', 'Hernandez', 'ArtDavid', 52, '2212550311', '2221004131', 'Calle Miguel Dominguez 4', '72000', 'ArtDavid-identificacion.jpeg', 'Aprobado', 11),
(13, 'Said', 'Castillo', 'Said557', 52, '2212054136', '2212054136', 'Calle Hidalgo centro 8', '34850', 'Said557-identificacion.jpeg', 'Aprobado', 2),
(14, 'Alebrijes', 'Toxpalan', 'AlebrijesOaxaca', 52, '2361172844', '2362491045', 'Calle las flores 16', '34850', 'AlebrijesOaxaca-identificacion.jpeg', 'Aprobado', 15);

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
  `seller` int(11) DEFAULT NULL,
  `buyer` int(11) DEFAULT NULL,
  `estatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `estatus` varchar(250) NOT NULL,
  `envio` varchar(50) NOT NULL,
  `crastreo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `ID` (`ID_registro`),
  ADD KEY `seller` (`seller`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `ID_registro` (`ID_registro`);

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
  ADD KEY `seller` (`seller`),
  ADD KEY `buyer` (`buyer`);

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
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `chats`
--
ALTER TABLE `chats`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pay_account`
--
ALTER TABLE `pay_account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `profile_comments`
--
ALTER TABLE `profile_comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reg_sellers`
--
ALTER TABLE `reg_sellers`
  MODIFY `IDregseller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sellers_data`
--
ALTER TABLE `sellers_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stars`
--
ALTER TABLE `stars`
  MODIFY `id_star` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `registro` (`ID`);

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalleventa_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`id_star`) REFERENCES `stars` (`id_star`),
  ADD CONSTRAINT `reports_ibfk_4` FOREIGN KEY (`id_comment`) REFERENCES `profile_comments` (`id_comment`),
  ADD CONSTRAINT `reports_ibfk_5` FOREIGN KEY (`ID_registro`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `reports_ibfk_6` FOREIGN KEY (`seller`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `reports_ibfk_7` FOREIGN KEY (`buyer`) REFERENCES `registro` (`ID`),
  ADD CONSTRAINT `reports_ibfk_8` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

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
