-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 21:24:25
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
-- Base de datos: `ficzzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id_bebida` int(11) NOT NULL,
  `nombre_bebida` varchar(30) NOT NULL,
  `tamaño_bebida` varchar(20) NOT NULL,
  `precio_bebida` float NOT NULL,
  `link_imagen_bebida` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id_bebida`, `nombre_bebida`, `tamaño_bebida`, `precio_bebida`, `link_imagen_bebida`) VALUES
(1, 'Coca Cola', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fcocacola600ml.jpg?alt=media&token=e3a3a298-4f7b-4fcb-b314-37745fa07700&_gl=1*faptfo*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU0MS42MC4wLjA.'),
(2, 'Coca Cola', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fcocacola_2l.jpg?alt=media&token=664f23ed-5382-42e5-836c-1536bcaba712&_gl=1*18bbloj*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU1NC40Ny4wLjA.'),
(3, 'Fanta', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffanta2.jpg?alt=media&token=4d42cc9c-db7d-4f75-93de-4813eaa6816c&_gl=1*1k646yj*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU2Ni4zNS4wLjA.'),
(4, 'Fanta', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffanta600.jpg?alt=media&token=7575b224-fc7d-4ec0-9d91-eb8e7ca3cb5c&_gl=1*1yujeoe*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU4Mi4xOS4wLjA.'),
(5, 'Fanta Fresa', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffantafresa2l.jpg?alt=media&token=13a9da39-f698-4c73-8dcb-84f8b9ca02f5&_gl=1*bawkqu*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDU5NS42LjAuMA..'),
(6, 'Fanta Fresa', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffantafresa600.jpg?alt=media&token=b5e3940b-7dc3-4496-860a-69eca1c2bf2d&_gl=1*ec31y8*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYwOC42MC4wLjA.'),
(7, 'Fresca', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffresca2l.jpg?alt=media&token=3e670b27-f001-4d42-a342-5c638c41c891&_gl=1*cno97y*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYyMC40OC4wLjA.'),
(8, 'Fresca', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Ffresca600.jpg?alt=media&token=5e7ccfcd-91cc-4c44-aba0-7919f7e86cf3&_gl=1*6v2okm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDYzMi4zNi4wLjA.'),
(9, 'Lift', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Flift600.jpg?alt=media&token=51ad7aae-5d2a-4e93-bdbb-fd255dae1453&_gl=1*147wxl*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY0My4yNS4wLjA.'),
(10, 'Sidral Mundet', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsidralmundet2l.jpg?alt=media&token=49736226-bd9b-4ae2-8e04-dbc15e8567bb&_gl=1*1leuhtr*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY1My4xNS4wLjA.'),
(11, 'Sidral Mundet', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsidralmundet600.jpg?alt=media&token=c68408cf-e552-4d48-8013-2ca7b06f4764&_gl=1*ownfux*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY2OS42MC4wLjA.'),
(12, 'Sprite', '2L', 34, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsprite2l.jpg?alt=media&token=50be9b28-26a0-430f-a854-7367f790e8a3&_gl=1*1k6ilkq*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY4My40Ni4wLjA.'),
(13, 'Sprite', '600ML', 16, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Bebidas%2Fsprite600.jpg?alt=media&token=9bf9821b-0bf7-4e67-82af-507d4b453e4d&_gl=1*19uovcl*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDY5Ny4zMi4wLjA.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `apellido_cliente` varchar(30) NOT NULL,
  `telefono_cliente` varchar(10) NOT NULL,
  `correo_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`) VALUES
(1, 'Gerardo', 'Carrillo', '6674528339', 'lg.carrillo20@info.uas.edu.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pizza` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `id_extra` int(11) NOT NULL,
  `precio_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `id_extra` int(11) NOT NULL,
  `nombre_extra` varchar(30) NOT NULL,
  `porcion_extra` varchar(30) NOT NULL,
  `precio_extra` float NOT NULL,
  `link_imagen_extra` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`id_extra`, `nombre_extra`, `porcion_extra`, `precio_extra`, `link_imagen_extra`) VALUES
(1, 'Aderezo', '2 onzas', 10, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Faderezo.jpg?alt=media&token=fa9ee18d-1073-41d2-a588-ab16ce8078a8&_gl=1*1xgwahi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NDk4MS40Ny4wLjA.'),
(2, 'Salsa', '2 onzas', 10, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Faderezo_salsa.jpg?alt=media&token=f10cb319-92d8-4252-93d6-895a875c9609&_gl=1*1wkg906*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTI5My42MC4wLjA.'),
(3, 'Ensalada Atún', 'personal', 69, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_atun.jpg?alt=media&token=cd3dbe80-98cb-4a2f-9215-638e6651c5f9&_gl=1*6jqe1y*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTQyNi4yNy4wLjA.'),
(4, 'Ensalada Atún', 'Normal', 119, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_atun.jpg?alt=media&token=cd3dbe80-98cb-4a2f-9215-638e6651c5f9&_gl=1*1btttbv*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTQyOC4yNS4wLjA.'),
(5, 'Ensalada Mixta', 'Personal', 49, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_mixta.jpg?alt=media&token=7089c42d-a2f1-482c-9848-96acaee5f0a0&_gl=1*1g44yfm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTc0NS4zNy4wLjA.'),
(6, 'Ensalada Mixta', 'Normal', 69, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fensalada_mixta.jpg?alt=media&token=7089c42d-a2f1-482c-9848-96acaee5f0a0&_gl=1*1g44yfm*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTc0NS4zNy4wLjA.'),
(7, 'Espagueti', 'Personal', 49, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fespagueti_a_la_pizzeta.jpg?alt=media&token=2c71883e-a755-4c68-ba7b-a70764f37d14&_gl=1*gae9hz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTgwMy42MC4wLjA.'),
(8, 'Espagueti', 'Normal', 89, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fespagueti_a_la_pizzeta.jpg?alt=media&token=2c71883e-a755-4c68-ba7b-a70764f37d14&_gl=1*gae9hz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTgwMy42MC4wLjA.'),
(9, 'Papas', 'Normal', 49, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpapizzimas.jpg?alt=media&token=be9698b4-0b3a-40bf-a0fe-53c38ddd9e04&_gl=1*1ssc4x4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTg3MC42MC4wLjA.'),
(11, 'Empanada Champiñon', 'Orden de 2', 50, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_champi%C3%B1on.jpg?alt=media&token=cf807487-5630-4c6b-bec8-94d6b81bed4f&_gl=1*77m83u*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NTk1MS42MC4wLjA.'),
(12, 'Empanada Chilorio', 'Orden de 2', 55, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_chilorio.jpg?alt=media&token=69b05b9c-ce5d-4f80-8976-2388e17427e0&_gl=1*19vxk2i*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjAxNS42MC4wLjA.'),
(13, 'Empanada Chorizo', 'Orden de 2', 55, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_chorizo.jpg?alt=media&token=3bdca0c3-2239-464e-b21a-4e1418c831e3&_gl=1*1g4kd2q*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjA1My4yMi4wLjA.'),
(14, 'Empanada Jamón', 'Orden de 2', 50, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_jamon.jpg?alt=media&token=05b6b85d-0f33-402a-a6c1-eaede24debcf&_gl=1*k5849n*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjA4NC42MC4wLjA.'),
(15, 'Empanada Jamón y Champiñón', 'Orden de 2', 50, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Extras%2Fpizzeti_jamon_y_champi%C3%B1on.jpg?alt=media&token=c4b3db5c-1c14-46c0-af42-88cbc387214b&_gl=1*p4dn8t*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjExOS4yNS4wLjA.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_detalle_pedido` int(11) NOT NULL,
  `fecha_pedido` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `id_pizza` int(11) NOT NULL,
  `nombre_pizza` varchar(30) NOT NULL,
  `tamaño_pizza` varchar(20) NOT NULL,
  `precio_pizza` float NOT NULL,
  `link_imagen_pizza` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`id_pizza`, `nombre_pizza`, `tamaño_pizza`, `precio_pizza`, `link_imagen_pizza`) VALUES
(1, 'Alemana', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'),
(2, 'Alemana', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'),
(3, 'Alemana', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Falemana.jpg?alt=media&token=80a7468f-8c5d-4b22-b56b-64a0984af947&_gl=1*ba7rbi*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NjIxMC40Ni4wLjA.'),
(4, 'Americana', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'),
(5, 'Americana', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'),
(6, 'Americana', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Famericana.jpg?alt=media&token=e64a7ee2-88c0-4ac2-a073-015a3bfed186&_gl=1*lhbebf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzQ1MS42MC4wLjA.'),
(7, 'California', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'),
(8, 'California', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'),
(9, 'California', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcalifornia.jpg?alt=media&token=d810c45e-a7c1-4c7d-b552-75df95502aff&_gl=1*15jrdd4*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzUyOC42MC4wLjA.'),
(10, 'Carnes Frías', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcarnes_frias.jpg?alt=media&token=4c986aa3-0c30-4093-b344-09ac77360bc3&_gl=1*110cc3d*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzU5NC42MC4wLjA.'),
(11, 'Carnes Frías', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcarnes_frias.jpg?alt=media&token=4c986aa3-0c30-4093-b344-09ac77360bc3&_gl=1*110cc3d*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzU5NC42MC4wLjA.'),
(12, 'Carnes Frías', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcarnes_frias.jpg?alt=media&token=4c986aa3-0c30-4093-b344-09ac77360bc3&_gl=1*110cc3d*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzU5NC42MC4wLjA.'),
(13, 'Champiñón', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'),
(14, 'Champiñón', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'),
(15, 'Champiñón', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fchampi%C3%B1on.jpg?alt=media&token=35437863-1ab9-4334-b65a-07a7e3e7143e&_gl=1*xjle40*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzY3Mi42MC4wLjA.'),
(16, 'Cuaresma', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcuaresma.jpg?alt=media&token=db40e291-d5c9-4313-9f9d-2c3c214df92a&_gl=1*1wvaz9*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzc0My42MC4wLjA.'),
(17, 'Cuaresma', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcuaresma.jpg?alt=media&token=db40e291-d5c9-4313-9f9d-2c3c214df92a&_gl=1*1wvaz9*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzc0My42MC4wLjA.'),
(18, 'Cuaresma', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fcuaresma.jpg?alt=media&token=db40e291-d5c9-4313-9f9d-2c3c214df92a&_gl=1*1wvaz9*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzc0My42MC4wLjA.'),
(19, 'Dorada', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fdorada.jpg?alt=media&token=f84ab479-07b7-4144-b8b7-6c4f0c67a3dd&_gl=1*1bizysf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzgwMS4yLjAuMA..'),
(20, 'Dorada', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fdorada.jpg?alt=media&token=f84ab479-07b7-4144-b8b7-6c4f0c67a3dd&_gl=1*1bizysf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzgwMS4yLjAuMA..'),
(21, 'Dorada', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fdorada.jpg?alt=media&token=f84ab479-07b7-4144-b8b7-6c4f0c67a3dd&_gl=1*1bizysf*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzgwMS4yLjAuMA..'),
(22, 'Extrema', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fextrema.jpg?alt=media&token=c099b1d8-4452-456e-b461-e4356d1db9ec&_gl=1*17wi983*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzkxNC42MC4wLjA.'),
(23, 'Extrema', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fextrema.jpg?alt=media&token=c099b1d8-4452-456e-b461-e4356d1db9ec&_gl=1*17wi983*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzkxNC42MC4wLjA.'),
(24, 'Extrema', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fextrema.jpg?alt=media&token=c099b1d8-4452-456e-b461-e4356d1db9ec&_gl=1*17wi983*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2NzkxNC42MC4wLjA.'),
(25, 'Hawaiana', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fhawaiana.jpg?alt=media&token=c2dfdcd7-79b4-4cfb-a6df-be5532ee8d17&_gl=1*11b94c8*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzk2Mi4xMi4wLjA.'),
(26, 'Hawaiana', 'Mediana', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fhawaiana.jpg?alt=media&token=c2dfdcd7-79b4-4cfb-a6df-be5532ee8d17&_gl=1*11b94c8*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzk2Mi4xMi4wLjA.'),
(27, 'Hawaiana', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fhawaiana.jpg?alt=media&token=c2dfdcd7-79b4-4cfb-a6df-be5532ee8d17&_gl=1*11b94c8*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2Nzk2Mi4xMi4wLjA.'),
(28, 'Italiana', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fitaliana.jpg?alt=media&token=48e6b3cc-3885-469d-af17-066a4eaa7fbd&_gl=1*1vopt91*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODAxOS42MC4wLjA.'),
(29, 'Italiana', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fitaliana.jpg?alt=media&token=48e6b3cc-3885-469d-af17-066a4eaa7fbd&_gl=1*1vopt91*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODAxOS42MC4wLjA.'),
(30, 'Italiana', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fitaliana.jpg?alt=media&token=48e6b3cc-3885-469d-af17-066a4eaa7fbd&_gl=1*1vopt91*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODAxOS42MC4wLjA.'),
(31, 'Jamón', 'Pequeña', 100, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.'),
(32, 'Jamón', 'Mediana', 149, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.'),
(33, 'Jamón', 'Grande', 229, 'https://firebasestorage.googleapis.com/v0/b/pizzeria-b1d63.appspot.com/o/Pizzas%2Fjamon.jpg?alt=media&token=b9d9940d-1477-498d-810c-9edfd8ffa75a&_gl=1*1ozvwwz*_ga*NTI3ODc4MzcuMTY5Nzc2MjcyMw..*_ga_CW55HF8NVT*MTY5Nzc2MjcyMi4xLjEuMTY5Nzc2ODA5NC42MC4wLjA.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_pizza` (`id_pizza`),
  ADD KEY `id_bebida` (`id_bebida`),
  ADD KEY `id_extra` (`id_extra`);

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id_extra`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_detalle_pedido` (`id_detalle_pedido`);

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id_pizza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id_pizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `id_bebida` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id_bebida`),
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `id_extra` FOREIGN KEY (`id_extra`) REFERENCES `extras` (`id_extra`),
  ADD CONSTRAINT `id_pizza` FOREIGN KEY (`id_pizza`) REFERENCES `pizzas` (`id_pizza`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `id_detalle_pedido` FOREIGN KEY (`id_detalle_pedido`) REFERENCES `detalle_pedido` (`id_detalle_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
