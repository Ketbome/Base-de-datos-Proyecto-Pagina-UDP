-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 02:06:33
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE DATABASE empresa;
--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Rut` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Domicilio` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Sueldo` int(11) DEFAULT NULL,
  `Rut_corredor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Rut`, `Nombre`, `Edad`, `Mail`, `Domicilio`, `Telefono`, `Sueldo`, `Rut_corredor`) VALUES
(8526352, 'Benjamin Molina', 51, 'benjita@gmail.com', 'Peñalolen, Santiago', 935154862, 1250000, 15365213),
(9852765, 'Carlos Peñaloza', 35, 'chalata@gmail.com', 'Valparaiso', 965489556, 1250000, 16524896),
(12321654, 'Barbara Acevedo Silva', 45, 'barbara.acevedo@gmail.com', 'Quilimari 02114', 985236548, 1450000, 15365213),
(13542156, 'Genesis Bahamondes', 47, 'Genesis3495@gmail.com', 'Curico 5647', 925415695, 1250000, 15365213),
(14523632, 'Antonio Parada', 65, 'antonix@gmail.com', 'Peñaflor, Santiago', 966548821, 1250000, 16524896),
(15523652, 'Fernando Contreras', 67, 'ketbome@gmail.com', 'mar 3984', 965153255, 1250000, 15365213),
(15875326, 'Catalina Merino', 25, 'catalina234@gmail.com', 'Providencia, Santiago', 936528556, 1250000, 16524896),
(16452632, 'Tomas Salazar', 81, 'veko234@gmail.com', 'Mar 8763', 975489615, 1250000, 16524896),
(16485965, 'Denise Moraga', 49, 'marin234@gmail.com', 'Av. La Florida 4563', 935241536, 1250000, 15365213),
(16698712, 'Noemi Muños', 72, 'noem3748@gmail.com', 'La Florida, Santiago', 966253365, 1250000, 16524896),
(17665823, 'Ximena Molina', 32, 'cota2344@gmail.com', 'Quilicura, Santiago', 923879752, 1250000, 15365213),
(25241523, 'Pablo Puebla', 57, 'pablox@gmail.com', 'San Joaquin, Santiago', 995847632, 1250000, 16524896),
(215236599, 'Felipe Andres', 22, 'felipe.castro3@mail.udp.cl', 'primera transversal', 965004665, 800000, 15365213),
(2147483647, 'Felipe Andres Castro', 20, 'felipe.castro3@mail.udp.clp', 'primera transversal', 2147483647, 800000, 16524896);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `Rut` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Cant_max` int(11) NOT NULL,
  `Experiencia` int(11) NOT NULL,
  `Ventas` int(3) NOT NULL,
  `Foto` varchar(500) DEFAULT NULL,
  `pagina` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corredor`
--

INSERT INTO `corredor` (`Rut`, `Nombre`, `Edad`, `Mail`, `Telefono`, `Cant_max`, `Experiencia`, `Ventas`, `Foto`, `pagina`) VALUES
(15365213, 'Javiera Correa', 35, 'javiera.correa@gmail.com', 56952451635, 5, 10, 85, 'https://karlacsphotography.com/wp-content/uploads/2020/04/MG_3442cp_1-1-e1586042779754.jpg', 'javiera.php'),
(16524896, 'Maribel Sandoval', 45, 'MaribelSandoval@hotmail.com', 56985487588, 5, 16, 74, 'https://i.pinimg.com/originals/e9/43/f5/e943f537fcc5777195b3dee67614420d.jpg','maribel.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `Rut` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Domicilio` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Sueldo` int(11) DEFAULT NULL,
  `Rut_corredor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`Rut`, `Nombre`, `Edad`, `Mail`, `Domicilio`, `Telefono`, `Sueldo`, `Rut_corredor`) VALUES
(5426512, 'Javier Molina', 51, 'molina123@gmail.com', 'La Florida, Santiago', 956324891, 2550000, 16524896),
(8526354, 'Cristobal Peñaloza', 35, 'wataka@gmail.com', 'Recoleta, Santiago', 959127596, 650000, 15365213),
(9632541, 'Sebastian Moraga', 49, 'faja123@gmail.com', 'Curico', 974956325, 550000, 16524896),
(13256965, 'Alex Parada', 65, 'alexitado@gmail.com', 'Recoleta, Santiago', 974863129, 500000, 15365213),
(13548652, 'Sara Bahamondes', 47, 'sara@gmail.com', 'Puente alto, Santiago', 965485215, 520000, 16524896),
(15265632, 'Cristian Contreras', 67, 'Cris1512@gmail.com', 'Providencia, Santiago', 953614884, 950000, 15365213),
(15269854, 'Tamara Merino', 25, 'tammy@gmail.com', 'Chiloe', 985874863, 1450000, 16524896),
(16254596, 'Fernando Salazar', 81, 'feño@gmail.com', 'La Florida, Santiago', 944631589, 750000, 15365213),
(16548563, 'Thomas Muños', 72, 'thomy@gmail.com', 'Providencia, Santiago', 915689574, 3250000, 16524896),
(17526548, 'Isidora Molina', 32, 'isis@gmail.com', 'Macul, Santiago', 954152635, 450000, 16524896),
(20185876, 'Bernardo Sandoval', 57, 'bernard@gmail.com', 'Recoleta, Santiago', 956816548, 1250000, 16524896),
(104017576, 'Raúl Andrés Soto Aguilar', 50, 'raul.andres@gmail.com', 'Pasaje 50, 5463', 987654321, 2000000, 15365213),
(197787317, 'Felipe Andres Castro Espinoza', 22, 'felipe.castro3@mail.udp.cl', 'Primera transversal 5491', 965004665, 1500000, 15365213),
(201234567, 'José Pérez Muñoz', 20, 'jose.perez@gmail.com', 'Las acacias 4582', 965235412, 800000, 15365213);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `Id` int(11) NOT NULL,
  `Rut_propietario` int(11) DEFAULT NULL,
  `Inmueble` varchar(50) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Comuna` text NOT NULL,
  `Metros_cuad` int(11) NOT NULL,
  `n_hab` int(11) NOT NULL,
  `n_banios` int(11) NOT NULL,
  `Precio` varchar(50) DEFAULT NULL,
  `Precio_int` int(11) DEFAULT NULL,
  `Foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`Id`, `Rut_propietario`, `Inmueble`, `Servicio`, `Region`, `Provincia`, `Comuna`, `Metros_cuad`, `n_hab`, `n_banios`, `Precio`, `Precio_int`, `Foto`) VALUES
(1, 20185876, 'Casa', 'Venta', 'Metropolitana', 'Santiago', 'La Florida', 450, 3, 1, '25.000.000', 25000000, 'https://inmobiliarianobleza.cl/wp-content/uploads/2019/06/casa_Malbec-500x500.png'),
(2, 20185876, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'Puente Alto', 250, 2, 1, '350.000', 350000, 'https://http2.mlstatic.com/D_NQ_NP_939182-MLC41714676472_052020-O.jpg'),
(3, 5426512, 'Casa', 'Arriendo', 'Metropolitana', 'Santiago', 'Providencia', 85, 2, 2, '300.000', 300000, 'https://inmobiliarianobleza.cl/wp-content/uploads/2019/06/casa_Merlot-500x500.png'),
(4, 13256965, 'Departamento', 'Venta', 'Valparaiso', 'San Antonio', 'Santo Domingo', 450, 3, 1, '23.000.000', 23000000, 'https://www.chiledeptos.cl/ws/image.php?img=http%3A%2F%2Factualizacionesv05.prop360.cl%2Fnexxos%2Fimagenes%2F34544-102034544-1964733_2.jpg'),
(5, 8526354, 'Departamento', 'Arriendo', 'Maule', 'Curico', 'Licanten', 225, 1, 1, '150.000', 150000, 'https://www.casalab.cl/propiedades/wp-content/uploads/2020/10/MG_2301-baja-500x500.jpg'),
(6, 15265632, 'Casa', 'Arriendo', 'Ñuble', 'San Carlos', 'Coihueco', 200, 2, 1, '180.000', 180000, 'https://www.convet.cl/upload/thumbnail_project/5c880b94c0f5f.png'),
(7, 15265632, 'Casa', 'Venta', 'Araucania', 'Temuco', 'Gorbea', 325, 3, 1, '30.000.000', 30000000, 'https://images.homify.com/image/upload/c_scale,h_500,w_500/v1479171640/p/photo/image/1702081/Casa_San_Patricio.jpg'),
(8, 16254596, 'Departamento', 'Arriendo', 'Araucania', 'Temuco', 'Temuco', 800, 5, 3, '700.000', 700000, 'https://www.avellaneda.cl/wp-content/uploads/2017/01/MR-1.jpg'),
(9, 9632541, 'Casa', 'Arriendo', 'Los Lagos', 'Osorno', 'Rio Negro', 375, 2, 2, '280.000', 280000, 'https://www.socovesa.cl/wp-content/uploads/2019/08/portalmachali21-500x500.jpg'),
(10, 15269854, 'Casa', 'Venta', 'Los Rios', 'Valdivia', 'Valdivia', 650, 4, 2, '40.000.000', 40000000, 'https://images.homify.com/image/upload/c_scale,h_500,w_500/v1493847488/p/photo/image/1988781/casas-prefabricadas-precios.jpg'),
(11, 15269854, 'Departamento', 'Arriendo', 'Magallanes', 'Punta Arenas', 'Rio Verde', 1250, 6, 4, '900.000', 900000, 'https://i1.wp.com/yclas.nyc3.cdn.digitaloceanspaces.com/26381/images/2020/04/01/9456/arriendo-departamento-en-providencia-1_1.jpg?resize=500,500'),
(12, 16548563, 'Casa', 'Arriendo', 'Metropolitana', 'Santiago', 'Macul', 200, 1, 1, '150.000', 150000, 'https://www.convet.cl/upload/thumbnail_project/5c40ab191562b.png'),
(13, 17526548, 'Casa', 'Venta', 'Metropolitana', 'Santiago', 'Peñalolen', 525, 3, 2, '32.500.000', 32500000, 'https://i.pinimg.com/originals/77/19/09/77190930ec7a52169587ab8742bcc0c2.jpg'),
(14, 13548652, 'Departamento', 'Arriendo', 'Maule', 'Curico', 'Curico', 325, 1, 1, '150.000', 150000, 'https://www.casalab.cl/propiedades/wp-content/uploads/2019/06/foto8-500x500.jpg'),
(15, 13548652, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'Renca', 750, 4, 2, '500.000', 500000, 'https://www.valeriopropiedades.cl/upload/propiedad/203270-p1160595.jpg'),
(16, 197787317, 'Casa', 'Venta', 'Metropolitana', 'Santiago', 'La Florida', 450, 3, 1, '25.000.000', 25000000, 'https://www.70w.cl/wp-content/uploads/2020/02/Detalles_PSUR_500x500_2.jpg'),
(17, 201234567, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'Puente Alto', 250, 2, 1, '230.000', 230000, 'https://www.toppropiedades.cl/imagenes/small_c210u447cof0572c.jpg'),
(18, 104017576, 'Casa', 'Arriendo', 'Metropolitana', 'Santiago', 'Providencia', 350, 4, 2, '450.000', 450000, 'https://i.pinimg.com/564x/0c/20/ec/0c20ec89472f6b1ff9b50e6842599309.jpg'),
(19, 104017576, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'San Miguel', 60, 3, 2, '375.000', 375000, 'https://r-ec.bstatic.com/images/hotel/max1024x768/119/119491271.jpg'),
(20, 201234567, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'San Miguel', 53, 2, 1, '345.000', 345000, 'https://terrazasdelloa.cl/wp-content/uploads/2015/07/edificio-terrazas-del-loa-piloto-06.jpg'),
(21, 20185876, 'Casa', 'Arriendo', 'Metropolitana', 'Santiago', 'Providencia', 85, 2, 2, '300.000', 300000, 'https://i.ytimg.com/vi/8mVQwjsxpOw/maxresdefault.jpg'),
(22, 197787317, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'La Florida', 42, 1, 1, '215.000', 215000, 'https://www.ddo.cl/upload/proyectos/ambientacion-departamento-piloto-6dd0ef38856fd5fb21aed5223aea9e66.jpg'),
(23, 197787317, 'Departamento', 'Arriendo', 'Metropolitana', 'Santiago', 'La Florida', 52, 3, 1, '360.000', 360000, 'https://www.bienesonline.com/chile/photos/arriendo-departamentos-nuevos-pleno-centro-de-santiago-1376330298.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Rut`),
  ADD KEY `Rut_corredor` (`Rut_corredor`);

--
-- Indices de la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`Rut`),
  ADD KEY `Rut_corredor` (`Rut_corredor`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Rut_propietario` (`Rut_propietario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Rut_corredor`) REFERENCES `corredor` (`Rut`);

--
-- Filtros para la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD CONSTRAINT `propietario_ibfk_1` FOREIGN KEY (`Rut_corredor`) REFERENCES `corredor` (`Rut`);

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`Rut_propietario`) REFERENCES `propietario` (`Rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
