-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 03:10 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `date_added`) VALUES
(20, 'Antenas', 'Antenas de diferentes marcas y modelos', '2017-05-26 22:18:45'),
(21, 'Cableado', 'cableado de diferentes marcas,modelos y categorias', '2017-05-26 22:19:35'),
(22, 'accesorios', 'accesorios pasivos', '2017-05-26 22:19:51'),
(19, 'Herramientas de trabajo', 'herramientas para trabajo ', '2017-05-26 20:46:25'),
(23, 'Marketing', 'promociones', '2017-05-29 19:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `status_cliente`, `date_added`) VALUES
(1, 'Gabriela', '9531278905', 'gaby.sierra@hotmail.com', 'Colonia Benito juarez ', 1, '2017-04-02 22:25:39'),
(3, 'Porfirio', '9531164521', 'por_123@gmail.com', 'La cascada', 1, '2017-05-29 00:25:11'),
(4, 'Omar', '9531678904', 'oma-xa@gmail.com', 'Colonia Benito juarez', 1, '2017-05-29 00:35:09'),
(5, 'Celina', '9531256780', 'celi-or@gmail.com', 'San diego', 1, '2017-05-29 04:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `cotizaciones_demo`
--

CREATE TABLE `cotizaciones_demo` (
  `id_cotizacion` int(11) NOT NULL,
  `numero_cotizacion` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `atencion` varchar(50) NOT NULL,
  `tel1` varchar(9) NOT NULL,
  `empresa` varchar(75) NOT NULL,
  `tel2` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cotizaciones_demo`
--

INSERT INTO `cotizaciones_demo` (`id_cotizacion`, `numero_cotizacion`, `fecha_cotizacion`, `atencion`, `tel1`, `empresa`, `tel2`, `email`, `condiciones`, `validez`, `entrega`) VALUES
(1, 1, '2015-07-19 06:52:51', 'Pepe', '70555', '', '', '', 'Nota: Las Condicione', '', ''),
(2, 2, '2015-07-19 06:53:38', 'Pepe', '70555', '', '', '', 'Nota: Las Condicione', '', ''),
(3, 3, '2015-07-19 06:55:42', 'Pepe', '70555', '', '', '', 'Nota: Las Condicione', '', ''),
(4, 4, '2015-07-19 06:59:01', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(5, 5, '2015-07-19 07:00:12', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(6, 6, '2015-07-19 07:03:09', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(7, 7, '2015-07-19 07:03:34', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(8, 8, '2015-07-19 07:08:59', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(9, 9, '2015-07-19 07:10:20', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(10, 10, '2015-07-19 07:11:09', 'Pepe', '70555', '', '', '', 'Nota: Las Condiciones de pago ', '', ''),
(11, 11, '2015-07-19 07:11:47', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', ''),
(12, 12, '2015-07-19 07:15:03', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', ''),
(13, 13, '2015-07-19 07:16:34', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', ''),
(14, 14, '2015-07-19 07:16:51', 'Pepe', '70555', 'test', '700', 'joaquinobed@gmail.com', 'Nota: Las Condiciones de pago ', '', ''),
(15, 15, '2015-07-19 07:20:34', 'Juan Diego', '222-2220', 'Invertir Mejor', '2222-0000', 'info@invertirmejor.com', 'Nota: Las Condiciones de pago ', '', ''),
(16, 16, '2015-07-20 07:27:16', 'Juan Perez', '7070', '', '', '', '', '', ''),
(17, 17, '2015-07-20 07:29:50', 'Juan Perez', '7070', '', '', '', '1', '', ''),
(18, 18, '2015-07-20 07:32:30', 'Juan Perez', '7070', '', '', '', 'Contado', '', ''),
(19, 19, '2015-07-20 07:34:38', 'Juan Perez', '7070', '', '', '', 'Contado', '', ''),
(20, 20, '2015-07-20 07:35:01', 'Juan Perez', '7070', '', '', '', 'Contado', '', ''),
(21, 21, '2015-07-20 07:38:07', 'Juan Perez', '7070', '', '', '', 'Contado', '15 dÃ­as', 'Inmediato'),
(22, 22, '2015-07-21 03:06:14', 'Juan Diego', '70587677', 'Invertir Mejor', '2230-000', 'info@invertirmejor.com', 'CrÃ©dito 30 dÃ­as', '15 dÃ­as', 'Inmediato'),
(23, 23, '2017-05-26 02:13:27', 'hbhcsbchb', 'jhj', 'h', 'hj', 'h@hgausuasha.com', 'CrÃ©dito 30 dÃ­as', '30 dÃ­as', '2 horas'),
(24, 24, '2017-06-12 23:59:18', '345', '56', '787', '88u7', '7@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(25, 25, '2017-06-13 00:08:50', '3456', '56', '7', '545', '7@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(26, 26, '2017-06-13 00:09:30', '345', '56', '787', '88u7', '7@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(27, 27, '2017-06-13 00:13:24', '345', '56', '787', '88u7', '7@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(28, 28, '2017-06-13 00:15:20', '345', '56', '787', '88u7', '7@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(29, 29, '2017-06-13 00:17:19', 'Gama', '953123456', 'Intetel Comunicaciones', '953115429', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(30, 30, '2017-06-13 05:55:30', 'Gamaliel', '951234567', 'Intetel Comunicaciones', '953115429', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(31, 31, '2017-06-13 21:46:31', '6', '76', '7', '67', 'ocarrizalmartinez@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(32, 32, '2017-06-13 22:31:41', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(33, 33, '2017-06-13 22:35:51', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(34, 34, '2017-06-13 22:37:22', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(35, 35, '2017-06-13 22:41:48', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(36, 36, '2017-06-13 22:42:58', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(37, 37, '2017-06-13 22:44:11', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(38, 38, '2017-06-13 22:45:32', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(39, 39, '2017-06-13 22:47:23', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(40, 40, '2017-06-13 22:48:15', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(41, 41, '2017-06-13 22:49:17', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(42, 42, '2017-06-13 23:26:03', ' Miguel', 'migue@gma', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(43, 43, '2017-06-13 23:26:28', ' Miguel', 'migue@gma', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(44, 44, '2017-06-13 23:34:58', ' Miguel', 'migue@gma', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(45, 45, '2017-06-14 00:32:13', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(46, 46, '2017-06-14 17:44:48', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(47, 47, '2017-06-14 17:47:35', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(48, 48, '2017-06-14 17:48:49', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(49, 49, '2017-06-14 17:49:31', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato'),
(50, 50, '2017-06-14 18:19:05', ' Oscar', 'admin@adm', 'Intetel Comunicaciones', '953-115-4', 'intetel@gmail.com', 'Contado', '15 dÃ­as', 'Inmediato');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(1, 1, 1, 1, 12),
(25, 1, 4, 1, 12.2),
(24, 1, 8, 1, 12.33),
(23, 1, 48, 1, 15),
(22, 1, 44, 1, 57.77);

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id_factura`, `numero_factura`, `fecha_factura`, `id_cliente`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(1, 1, '2017-04-02 22:27:51', 1, 1, '4', '112.87', 1);

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nota` varchar(255) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`id_historial`, `id_producto`, `user_id`, `fecha`, `nota`, `referencia`, `cantidad`) VALUES
(10, 4, 1, '2017-05-26 20:47:27', 'Oscar agregÃ³ 10 producto(s) al inventario', 'ASDFGHJ', 10),
(11, 5, 1, '2017-05-26 23:51:25', 'Oscar agregÃ³ 45 producto(s) al inventario', '2345', 45),
(12, 5, 1, '2017-05-29 00:53:06', ' agregÃ³ 56 producto(s) al inventario', 'njnjn', 56),
(13, 5, 1, '2017-05-29 01:01:19', ' agregÃ³ 23 producto(s) al inventario', 'sdds', 23),
(14, 7, 1, '2017-05-29 01:09:26', 'Oscar agregÃ³ 12 producto(s) al inventario', '23453', 12),
(15, 7, 1, '2017-05-29 01:09:42', 'Oscar agregÃ³ 12 producto(s) al inventario', '323232', 12),
(16, 5, 1, '2017-05-29 01:10:25', 'Oscar agregÃ³ 23 producto(s) al inventario', 'sdddsdsd', 23),
(17, 5, 1, '2017-05-29 01:12:18', 'Oscar eliminÃ³ 45 producto(s) del inventario', 'erer', 45),
(18, 8, 1, '2017-05-29 02:35:23', 'Oscar agregÃ³ 133 producto(s) al inventario', 'uyuyuy', 133),
(37, 42, 1, '2017-05-30 17:46:56', 'Oscar agregÃ³ 22 producto(s) al inventario', '1234567890', 22),
(38, 42, 1, '2017-05-30 19:33:41', 'Oscar agregÃ³ 55 producto(s) al inventario', 'NMio', 55),
(39, 44, 1, '2017-05-30 21:08:17', 'Oscar agregÃ³ 23 producto(s) al inventario', 'soso', 23),
(40, 45, 1, '2017-05-31 08:03:12', 'Oscar agregÃ³ 100 producto(s) al inventario', '234567', 100),
(41, 46, 1, '2017-05-31 08:53:43', 'Oscar agregÃ³ 77 producto(s) al inventario', '34567', 77),
(42, 47, 1, '2017-05-31 08:56:07', 'Oscar agregÃ³ 234 producto(s) al inventario', '45678', 234),
(43, 48, 1, '2017-06-07 04:21:19', 'Oscar agregÃ³ 20 producto(s) al inventario', '2222', 20),
(44, 46, 1, '2017-06-12 23:55:54', 'Oscar agregÃ³ 6 producto(s) al inventario', '', 6),
(45, 48, 1, '2017-06-13 00:44:24', 'Oscar agregÃ³ 20 producto(s) al inventario', '', 20);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `descripcion_producto` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL,
  `precio_pro_compra` double NOT NULL,
  `ganancia_producto` double NOT NULL,
  `iva` tinyint(1) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `descripcion_producto`, `date_added`, `precio_producto`, `precio_pro_compra`, `ganancia_producto`, `iva`, `status_producto`, `stock`, `id_categoria`) VALUES
(4, 'AiG234567', 'Air Grid', '30 cm ancho x 20 cm largo, 20 dbi', '2017-05-26 20:47:27', 120, 100, 10, 0, 0, 10, 20),
(5, 'NaSt2390894', 'Nano Station', 'ubiquiti', '2017-05-26 23:51:25', 120, 100, 30, 0, 1, 102, 20),
(7, 'pOBe300', 'Power Beam 300', 'ubiquiti', '2017-05-29 01:09:26', 140, 1100, 40, 0, 1, 24, 20),
(8, 'PoBe500', 'Power Beam 500', 'ubiquiti', '2017-05-29 02:35:23', 150, 1200, 50, 0, 0, 0, 20),
(42, 'list2398098', 'lite station', 'ubiquiti', '2017-05-30 17:46:56', 130, 1100, 50, 0, 1, 55, 20),
(44, 'RoM5983445', 'Rocket m5', 'ubiquiti', '2017-05-30 21:08:17', 250, 2000, 20, 0, 0, 23, 20),
(45, 'Rom24578', 'Rocket m2', 'ubiquiti', '2017-05-31 08:03:12', 230, 2000, 5, 1, 1, 100, 20),
(46, 'Air456743', 'Air Fiber', 'ubiquiti', '2017-05-31 08:53:43', 130, 12000, 44, 0, 0, 83, 20),
(47, 'Seubi236594', 'Sectorial 90°', 'ubiquiti', '2017-05-31 08:56:07', 280, 2300, 2.5, 0, 0, 234, 20),
(48, 'Seubi50234', 'Sectorial 30°', 'ubiquiti', '2017-06-07 04:21:19', 270, 2300, 2.5, 1, 1, 40, 20),
(49, 'Secto24567', 'Sectorial 120', 'RF- Elements- menor inmunidad al ruido ', '2017-06-09 00:00:00', 180, 1400, 400, 0, 1, 30, 20),
(50, 'Cone324676', 'conector Rj-45', 'conectores para cable utp categoria 5', '2017-06-08 00:00:00', 2, 1, 1, 0, 1, 400, 22),
(52, 'Cab3456', 'Cable utp categoria 5', 'categoria 5e sin blindaje', '2017-06-14 00:00:00', 6, 3, 3, 1, 1, 3, 21),
(54, 'PI235667', 'PINZA PONCHADORA', 'PINZA PONCHADORA PARA CABLEADO ', '2017-06-23 00:00:00', 123.56, 100.23, 23.33, 1, 1, 100, 19),
(55, 'CARTELON32443545', 'CARTELON', 'CARTELON CON LOGO DE LA EMPRESA 80X80', '2017-06-28 00:00:00', 0, 0, 0, 0, 0, 13, 23),
(56, 'CABLIN23435', 'CABLE FTP CATEGORIA 6', 'CABLE BLINDADO CATEGORIA 6 PARA EXTERIOR', '2017-06-15 00:00:00', 350.23, 3000.12, 500.11, 1, 1, 150, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id_tmp`, `id_producto`, `cantidad_tmp`, `precio_tmp`, `session_id`) VALUES
(0, 4, 2, 12.20, 'pmd4ss33k0g2k68urb2ov85qc5');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_cotizacion`
--

CREATE TABLE `tmp_cotizacion` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tmp_cotizacion`
--

INSERT INTO `tmp_cotizacion` (`id_tmp`, `id_producto`, `cantidad_tmp`, `precio_tmp`, `session_id`) VALUES
(55, 4, 1, 40.00, 'se7uf7ajc6unfc7npv6rgpum21'),
(77, 1, 1, 10.00, 'gt5ogc0rmmd24982vdq6cd5987'),
(95, 3, 1, 25.00, 'u7frkvbaob7rsm1703ijv1cnu2'),
(80, 1, 1, 10.00, 'rnatkqqe0c3gu2in851v746dv0'),
(94, 2, 1, 15.00, 'u7frkvbaob7rsm1703ijv1cnu2'),
(93, 1, 1, 10.00, 'u7frkvbaob7rsm1703ijv1cnu2'),
(96, 4, 1, 40.00, 'u7frkvbaob7rsm1703ijv1cnu2'),
(97, 5, 1, 18.00, 'u7frkvbaob7rsm1703ijv1cnu2'),
(148, 42, 1, 130.00, 'id7d8lp6hp15t2kf9643ptvou7'),
(147, 4, 1, 120.00, 'id7d8lp6hp15t2kf9643ptvou7'),
(139, 50, 1, 2.00, '0mtib530u8okedpb4v6t03i9n0'),
(138, 7, 1, 140.00, '0mtib530u8okedpb4v6t03i9n0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL,
  `privilegio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`, `privilegio`) VALUES
(1, 'Oscar', 'Carrizal', 'admin', '$2y$10$8sHVNjaqJlO6syamH2iNQ.YygVj7fq6//I0P6oUCsD0WHDvAbitVi', 'admin@admin.com', '2017-05-26 15:06:00', 1),
(2, 'Miguel', 'Perez', 'migue', '$2y$10$3Ykjnd6O1FMeM8a3wXTs6eGuzdF9dajgvUDviJuuiUnchEG53pyvy', 'migue@gmail.com', '2017-05-26 23:16:24', 1),
(3, 'shauhasuhsuahsauhsau', 'Perez', 'usuario', '$2y$10$AFcvWxZKk2z5AmMnWeEYvOSVHTCV5g207SKPQTbE17BCGeruzgA6S', 'gama@gmail.com', '2017-06-14 00:22:52', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indexes for table `cotizaciones_demo`
--
ALTER TABLE `cotizaciones_demo`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_cotizacion`);

--
-- Indexes for table `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indexes for table `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indexes for table `tmp_cotizacion`
--
ALTER TABLE `tmp_cotizacion`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cotizaciones_demo`
--
ALTER TABLE `cotizaciones_demo`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `tmp_cotizacion`
--
ALTER TABLE `tmp_cotizacion`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `products` (`id_producto`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
