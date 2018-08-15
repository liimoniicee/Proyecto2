-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-08-2018 a las 03:34:27
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `ID_ACTIVIDAD` int(4) NOT NULL AUTO_INCREMENT,
  `ACT_TITULO_ACTVI` varchar(45) DEFAULT NULL,
  `ACT_TIPO_ACTIVIDAD` varchar(45) DEFAULT NULL,
  `ACT_FECHA_INICIO` date DEFAULT NULL,
  `ACT_FECHA_TERMINO` date DEFAULT NULL,
  `ACT_LUGAR` varchar(45) DEFAULT NULL,
  `ACT_DESCRIPCION` text,
  `ACT_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ACTIVIDAD`),
  KEY `fk_ACTIVIDADES_BECARIO1_idx` (`ACT_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`ID_ACTIVIDAD`, `ACT_TITULO_ACTVI`, `ACT_TIPO_ACTIVIDAD`, `ACT_FECHA_INICIO`, `ACT_FECHA_TERMINO`, `ACT_LUGAR`, `ACT_DESCRIPCION`, `ACT_ID_BECARIO`) VALUES
(1, 'ites2', '1 ', '2018-06-01', '2018-06-07', 'russia', 'mundil 2018', 4),
(2, 'golfo', '2 ', '2018-06-07', '2018-06-10', 'zacatecas', 'zacatecas', 4),
(3, 'youtube', '1 ', '2018-06-04', '2018-06-09', '123456789', '123456789', 4),
(4, 'programacion', '2 ', '2018-06-15', '2018-06-09', 'zacatecas', 'san jose', 4),
(5, 'lkhlhljhjhj', '2 ', '2018-06-04', '2018-06-01', 'jojopj', 'klhhhh', 4),
(6, 'for honor', '1 ', '2018-07-30', '2018-07-31', 'zacatal', 'el mas alto podra jugar la campana', 4),
(7, 'hacer tarea de invernadero 4', '2 ', '2018-08-21', '2018-08-28', 'ites', 'invernadero', 4),
(8, 'betty eres fea', '1 ', '2018-08-02', '2018-08-02', 'russia', 'bett eres fea', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_extra`
--

DROP TABLE IF EXISTS `act_extra`;
CREATE TABLE IF NOT EXISTS `act_extra` (
  `ID_ACT_EXTRA` int(4) NOT NULL AUTO_INCREMENT,
  `EXT_INSTITUCION` varchar(45) DEFAULT NULL,
  `EXT_DESCRIP_ACTV` text,
  `EXT_TOTAL_HORAS` int(5) DEFAULT NULL,
  `EXT_FECHA_INI` date DEFAULT NULL,
  `EXT_FECHA_FINAL` date DEFAULT NULL,
  `EXT_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_ACT_EXTRA`),
  KEY `fk_ACT_EXTRA_ASPIRANTES1_idx` (`EXT_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `act_extra`
--

INSERT INTO `act_extra` (`ID_ACT_EXTRA`, `EXT_INSTITUCION`, `EXT_DESCRIP_ACTV`, `EXT_TOTAL_HORAS`, `EXT_FECHA_INI`, `EXT_FECHA_FINAL`, `EXT_ID_ASPIRANTES`) VALUES
(62, 'h', 'h', 4, '2018-05-01', '2018-05-04', 74),
(63, 'g', 'g', 3, '2018-05-01', '2018-05-01', 75),
(64, 'dsfsd', 'dsfsd', 4, '2018-05-01', '2018-05-03', 76),
(67, 'na', 'na', 3, '2017-06-09', '2018-06-04', 80),
(68, 'cobach', 'el mejor en hacer ejercicio', 5, '2018-07-05', '2018-07-10', 82),
(69, 'na', 'na', 3, '2017-05-12', '2018-05-12', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE IF NOT EXISTS `asistencia` (
  `ID_ASISTENCIA` int(4) NOT NULL AUTO_INCREMENT,
  `ASI_ASISTENCIA` varchar(45) DEFAULT NULL,
  `ASI_FECHA` date DEFAULT NULL,
  `ASI_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ASISTENCIA`),
  KEY `fk_ASISTENCIA_BECARIO1_idx` (`ASI_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`ID_ASISTENCIA`, `ASI_ASISTENCIA`, `ASI_FECHA`, `ASI_ID_BECARIO`) VALUES
(1, '0', '2018-05-16', 1),
(2, '1', '2018-03-16', 2),
(3, '1', '2018-05-16', 4),
(6, '1', '2018-05-18', 4),
(17, '1', '2018-05-18', 1),
(18, '0', '2018-06-13', 1),
(19, '0', '2018-06-13', 4),
(20, '1', '2018-07-29', 4),
(21, '0', '2018-07-29', 2),
(22, '1', '2018-07-29', 1),
(23, '1', '2018-08-09', 1),
(24, '1', '2018-08-12', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirantes`
--

DROP TABLE IF EXISTS `aspirantes`;
CREATE TABLE IF NOT EXISTS `aspirantes` (
  `ID_ASPIRANTES` int(4) NOT NULL AUTO_INCREMENT,
  `ASP_STATUS` varchar(45) DEFAULT NULL,
  `ASP_PRESELECCION` varchar(40) DEFAULT NULL,
  `ASP_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_ASPIRANTES`),
  KEY `fk_ASPIRANTES_table1_idx` (`ASP_ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aspirantes`
--

INSERT INTO `aspirantes` (`ID_ASPIRANTES`, `ASP_STATUS`, `ASP_PRESELECCION`, `ASP_ID_USUARIO`) VALUES
(74, 'Pendiente', 'Alto', 1),
(75, 'Pendiente', 'Bajo', 19),
(76, 'Pendiente', 'Bajo', 30),
(78, 'Pendiente', 'Bajo', 33),
(80, 'Pendiente', 'Alto', 38),
(81, 'Pendiente', NULL, 39),
(82, 'Pendiente', 'Medio', 42),
(83, 'Pendiente', 'Bajo', 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `AUTO_MODELO` varchar(45) DEFAULT NULL,
  `AUTO_AÑO` varchar(45) DEFAULT NULL,
  `DATOS_GENERALES_ID_GENERALES` int(4) NOT NULL,
  PRIMARY KEY (`DATOS_GENERALES_ID_GENERALES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becario`
--

DROP TABLE IF EXISTS `becario`;
CREATE TABLE IF NOT EXISTS `becario` (
  `ID_BECARIO` int(4) NOT NULL AUTO_INCREMENT,
  `BEC_STATUS` varchar(45) DEFAULT NULL,
  `BEC_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_BECARIO`),
  KEY `fk_BECARIO_table11_idx` (`BEC_ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `becario`
--

INSERT INTO `becario` (`ID_BECARIO`, `BEC_STATUS`, `BEC_ID_USUARIO`) VALUES
(1, 'deew', 18),
(2, ' activo', 19),
(4, ' activo', 25),
(5, 'activo', 43),
(6, 'activo', 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_limpieza`
--

DROP TABLE IF EXISTS `bitacora_limpieza`;
CREATE TABLE IF NOT EXISTS `bitacora_limpieza` (
  `ID_BITACORA` int(4) NOT NULL AUTO_INCREMENT,
  `BIT_SEMANA` date DEFAULT NULL,
  `BIT_DIA` varchar(45) DEFAULT NULL,
  `BIT_ACTIVIDAD` text,
  `BIT_ASIGNACION` varchar(45) DEFAULT NULL,
  `BIT_REALIZADO` varchar(45) DEFAULT NULL,
  `BIT_ID_EQUIPOS` int(4) NOT NULL,
  PRIMARY KEY (`ID_BITACORA`),
  KEY `fk_BITACORA_LIMPIEZA_EQUIPOS1_idx` (`BIT_ID_EQUIPOS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `ID_CALIFICACIONES` int(4) NOT NULL AUTO_INCREMENT,
  `CAL_NIVEL_INGLES` varchar(45) DEFAULT NULL,
  `CAL_CALIFICACION` int(2) DEFAULT NULL,
  `CAL_UNIDAD` int(2) DEFAULT NULL,
  `CAL_PROMEDIO` int(2) DEFAULT NULL,
  `CAL_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_CALIFICACIONES`),
  KEY `fk_CALIFICACIONES_BECARIO1_idx` (`CAL_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`ID_CALIFICACIONES`, `CAL_NIVEL_INGLES`, `CAL_CALIFICACION`, `CAL_UNIDAD`, `CAL_PROMEDIO`, `CAL_ID_BECARIO`) VALUES
(3, 'BAJO', 12, 10, 12, 1),
(5, 'Alto', 100, 3, 100, 1),
(7, 'Medio', 90, 3, 70, 2),
(11, 'Bajo', 3, 2, 100, 4),
(12, 'Alto', 100, 5, 100, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_empleados`
--

DROP TABLE IF EXISTS `control_empleados`;
CREATE TABLE IF NOT EXISTS `control_empleados` (
  `ID_CONT_EMP` int(4) NOT NULL AUTO_INCREMENT,
  `CONT_CLAVE_AREA` int(4) DEFAULT NULL,
  `CONT_FECHA` date DEFAULT NULL,
  `CONT_HORA_SALIDA` varchar(40) DEFAULT 'NULL',
  `CONT_HORA_ENTRADA` varchar(40) DEFAULT 'NULL',
  `CONT_HOY` int(11) NOT NULL DEFAULT '0',
  `CON_ID_EMPLEADO` int(4) NOT NULL,
  PRIMARY KEY (`ID_CONT_EMP`),
  KEY `fk_CONTROL_EMPLEADOS_EMPLEADOS1_idx` (`CON_ID_EMPLEADO`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `control_empleados`
--

INSERT INTO `control_empleados` (`ID_CONT_EMP`, `CONT_CLAVE_AREA`, `CONT_FECHA`, `CONT_HORA_SALIDA`, `CONT_HORA_ENTRADA`, `CONT_HOY`, `CON_ID_EMPLEADO`) VALUES
(11, 1, '2018-06-19', '23:35:57', '23:35:53', 1, 32),
(12, 1, '2018-06-20', '12:07:10', '08:01:50', 1, 21),
(13, 1, '2018-07-27', '20:28:19', '20:28:12', 1, 39),
(14, 1, '2018-07-27', '12:07:10', '20:32:52', 1, 21),
(15, 1, '2018-07-28', '12:07:10', '19:43:02', 1, 21),
(16, 1, '2018-07-31', '12:07:10', '23:10:28', 1, 21),
(17, 1, '2018-07-31', 'NUL0', '23:49:45', 0, 32),
(18, 1, '2018-08-09', '12:07:10', '12:07:04', 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

DROP TABLE IF EXISTS `costos`;
CREATE TABLE IF NOT EXISTS `costos` (
  `COS_SEMINARIO` float DEFAULT NULL,
  `COS_TRANSPORTE` float DEFAULT NULL,
  `COS_HOSPEDAJE` float DEFAULT NULL,
  `COS_TOTAL` float DEFAULT NULL,
  `COS_APRO_BECARIO` float DEFAULT NULL,
  `COS_APORT_GSP` float DEFAULT NULL,
  `SOLICITUD_FONDOS_ID_SOL_FONDOS` int(4) NOT NULL,
  PRIMARY KEY (`SOLICITUD_FONDOS_ID_SOL_FONDOS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familiares`
--

DROP TABLE IF EXISTS `datos_familiares`;
CREATE TABLE IF NOT EXISTS `datos_familiares` (
  `ID_FAMILIARES` int(4) NOT NULL AUTO_INCREMENT,
  `FAM_PARENTESCO` varchar(45) DEFAULT NULL,
  `FAM_APELL_PATERNO` varchar(45) DEFAULT NULL,
  `FAM_APELLIDO_MATERNO` varchar(45) DEFAULT NULL,
  `FAM_NOMBRE` varchar(45) DEFAULT NULL,
  `FAM_OCUPACION` varchar(45) DEFAULT NULL,
  `FAM_LUGAR_TRABAJO` varchar(45) DEFAULT NULL,
  `FAM_ING_FORMAL` int(5) DEFAULT NULL,
  `FAM_ING_INFORMAL` int(5) DEFAULT NULL,
  `FAM_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_FAMILIARES`),
  KEY `fk_DATOS_FAMILIARES_ASPIRANTES1_idx` (`FAM_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_familiares`
--

INSERT INTO `datos_familiares` (`ID_FAMILIARES`, `FAM_PARENTESCO`, `FAM_APELL_PATERNO`, `FAM_APELLIDO_MATERNO`, `FAM_NOMBRE`, `FAM_OCUPACION`, `FAM_LUGAR_TRABAJO`, `FAM_ING_FORMAL`, `FAM_ING_INFORMAL`, `FAM_ID_ASPIRANTES`) VALUES
(120, 'Padre', 'c', 'c', 'c', 'c', 'c', 2, 2, 74),
(121, 'Madre', 'c', 'c', 'c', 'c', 'c', 3, 3, 74),
(122, 'Padre', 'f', 'f', 'f', 'f', 'f', 2, 2, 75),
(123, 'Madre', 'f', 'f', 'f', 'f', 'f', 1, 2, 75),
(124, 'Padre', 'v', 'v', 'v', 'v', 'v', 3, 3, 76),
(125, 'Madre', 'v', 'v', 'v', 'v', 'v', 3, 3, 76),
(128, 'Padre', 'a', 'a', 'a', 'a', 'a', 1, 1, 78),
(129, 'Madre', 'a', 'a', 'a', 'a', 'a', 1, 1, 78),
(132, 'Padre', 'Limon', 'Limon', 'Limon', 'mecanico', 'mecanico', 12312, 123123, 80),
(133, 'Madre', 'madre', 'madre', 'madre', 'asdas', 'asdasd', 123123, 123123, 80),
(134, 'Padre', 'luis', 'gonzalez', 'roberto', 'mesero', 'chedraui', 1000, 2000, 81),
(135, 'Madre', 'na', 'na', 'na', 'na', 'na', 0, 0, 81),
(136, 'Padre', 'pena ', 'boca', 'arturo', 'mecanico', 'guamytas', 32000, 3000, 82),
(137, 'Madre', 'na', 'na', 'na', 'na', 'na', 0, 0, 82),
(138, 'Padre', 'hernandez', 'gonzalez', 'jose luis', 'docente', 'ites los cabos', 6000, 0, 83),
(139, 'Madre', 'mendieta', 'hinojosa', 'catalina', 'ama de casa', 'na', 0, 0, 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

DROP TABLE IF EXISTS `datos_generales`;
CREATE TABLE IF NOT EXISTS `datos_generales` (
  `ID_GENERALES` int(4) NOT NULL AUTO_INCREMENT,
  `GEN_TIEMPO_RESI` varchar(45) DEFAULT NULL,
  `GEN_CASA_PROP` varchar(45) DEFAULT NULL,
  `GEN_DESCRP_CASA` varchar(45) DEFAULT NULL,
  `GEN_AUTO` varchar(45) DEFAULT NULL,
  `GEN_PERSONAS_FAMILIA` int(2) DEFAULT NULL,
  `GEN_PERSONAS_CASA` int(2) DEFAULT NULL,
  `GEN_BANCARIAS` varchar(45) DEFAULT NULL,
  `GEN_ESTADO_CUENTA` varchar(100) DEFAULT NULL,
  `GEN_TRABAJO` varchar(45) DEFAULT NULL,
  `GEN_TIPO_BECA` varchar(45) DEFAULT NULL,
  `GEN_INTERNET` varchar(45) DEFAULT NULL,
  `GEN_HABLAR_ING` varchar(45) DEFAULT NULL,
  `GEN_PORCENTAJE` varchar(45) DEFAULT NULL,
  `GEN_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_GENERALES`),
  KEY `fk_DATOS_GENERALES_ASPIRANTES1_idx` (`GEN_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`ID_GENERALES`, `GEN_TIEMPO_RESI`, `GEN_CASA_PROP`, `GEN_DESCRP_CASA`, `GEN_AUTO`, `GEN_PERSONAS_FAMILIA`, `GEN_PERSONAS_CASA`, `GEN_BANCARIAS`, `GEN_ESTADO_CUENTA`, `GEN_TRABAJO`, `GEN_TIPO_BECA`, `GEN_INTERNET`, `GEN_HABLAR_ING`, `GEN_PORCENTAJE`, `GEN_ID_ASPIRANTES`) VALUES
(61, '11', 'Si', 'Lamina', 'No', 3, 3, 'Si', 'C:wamp64	mpphp4359.tmp', 'No', 'parcial', 'Si', 'Si', '80', 74),
(62, 'f', 'No', 'Lamina', 'Si', 12, 3, 'Si', 'C:wamp64	mpphp2A43.tmp', 'No', 'completa', 'No', 'Si', '4', 75),
(63, '5', 'No', 'Lamina', 'Si', 4, 3, 'Si', 'C:wamp64	mpphp705A.tmp', 'Si', 'parcial', 'Si', 'No', '', 76),
(65, '11', 'Si', 'Carton', 'No', 12, 3, 'No', '', 'No', 'parcial', 'Si', 'No', '', 78),
(67, '123123', 'Si', 'Concreto', 'No', 213123, 123123, 'Si', 'C:wamp64	mpphp74E5.tmp', 'Si', 'completa', 'No', 'Si', '12122222222222222222222', 80),
(68, '10', 'No', 'Madera', '', 22, 2, 'No', '', 'Si', 'parcial', 'No', 'Si', '100', 81),
(69, '20', 'Si', 'Concreto', 'Si', 4, 4, 'No', '', 'No', 'parcial', 'No', 'No', '', 82),
(70, '10 anos', 'Si', 'Concreto', 'No', 4, 4, 'No', '', 'Si', 'completa', 'No', 'Si', '50', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `ID_EMPLEADO` int(4) NOT NULL AUTO_INCREMENT,
  `EMP_STATUS` varchar(45) DEFAULT NULL,
  `EMP_ID_USUARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_EMPLEADO`),
  KEY `fk_EMPLEADOS_table11_idx` (`EMP_ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_EMPLEADO`, `EMP_STATUS`, `EMP_ID_USUARIO`) VALUES
(2, 'Activo', 18),
(3, 'Trabajando', 32),
(4, 'Trabajando', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `ID_EQUIPOS` int(4) NOT NULL AUTO_INCREMENT,
  `EQU_NOMBRE_EQUIPO` varchar(45) DEFAULT NULL,
  `EQU_NUM_INTEGRA` varchar(45) DEFAULT NULL,
  `EQU_TIPO_EQUIPO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_EQUIPOS`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`ID_EQUIPOS`, `EQU_NOMBRE_EQUIPO`, `EQU_NUM_INTEGRA`, `EQU_TIPO_EQUIPO`) VALUES
(0, '', '', 'Limpieza'),
(7, 'CRUZ AZUL', '3', 'Limpieza'),
(11, 'america', '4', 'Cocina'),
(12, 'Chivas', '2', 'Cocina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

DROP TABLE IF EXISTS `escolaridad`;
CREATE TABLE IF NOT EXISTS `escolaridad` (
  `ID_ESCOLAR` int(11) NOT NULL AUTO_INCREMENT,
  `ESC_CURSANDO_ESC` varchar(30) DEFAULT NULL,
  `ESC_NOMBRE_ESC` varchar(45) DEFAULT NULL,
  `ESC_DOMICILIO_ESC` varchar(45) DEFAULT NULL,
  `ESC_YEARS_CURSADOS` varchar(45) DEFAULT NULL,
  `ESC_PROMEDIO` varchar(45) DEFAULT NULL,
  `ESC_TITULO` varchar(45) DEFAULT NULL,
  `ESC_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_ESCOLAR`),
  KEY `fk_ESCOLARIDAD_ASPIRANTES1_idx` (`ESC_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escolaridad`
--

INSERT INTO `escolaridad` (`ID_ESCOLAR`, `ESC_CURSANDO_ESC`, `ESC_NOMBRE_ESC`, `ESC_DOMICILIO_ESC`, `ESC_YEARS_CURSADOS`, `ESC_PROMEDIO`, `ESC_TITULO`, `ESC_ID_ASPIRANTES`) VALUES
(113, 'Secundaria', 'h', 'h', '6', '89', 'h', 74),
(114, 'Preparatoria', 'h', 'h', '7', '100', 'h', 74),
(115, 'Secundaria', 'cobach', 'transpenisnular', '3', '60', '3', 75),
(116, 'Preparatoria', 'g', 'g', '4', '60', '1', 75),
(117, 'Secundaria', 'cobach', 'd', '3', '60', '3', 76),
(118, 'Preparatoria', 's', 's', '4', '23', 'f', 76),
(121, 'Secundaria', 'cobach', 'transpenisnular', '2', '100', 'certificado', 78),
(122, 'Preparatoria', 's', 's', '4', '4', 'd', 78),
(125, 'Secundaria', 'ites', 'guaymitas', '123112', '12312312312312312', 'certificado', 80),
(126, 'Preparatoria', 'utes', 'Escuela', '2', '1000', 'certificado', 80),
(127, 'Secundaria', 'conalep', 'transpenisnular', '22', '70', 'certificado', 81),
(128, 'Preparatoria', 'nene', 'calle h', '2', '70', 'certificqado', 81),
(129, 'Secundaria', '14', 'san jose viejo', '3', '90', 'certificado', 82),
(130, 'Preparatoria', 'cobach', 'transpenisuar', '3', '90', 'arquitecto', 82),
(131, 'Secundaria', 'estatal 130', 'av arteaga ', '3', '80', 'si', 83),
(132, 'Preparatoria', 'cobach 02', 'carretera transpeninsular col rosarito', '3', '80', 'si', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_ingles`
--

DROP TABLE IF EXISTS `grupo_ingles`;
CREATE TABLE IF NOT EXISTS `grupo_ingles` (
  `ID_GRUPO` int(11) NOT NULL AUTO_INCREMENT,
  `GRUPO` varchar(30) DEFAULT NULL,
  `TURNO` varchar(50) DEFAULT NULL,
  `GRUP_ID_BECARIO` int(10) NOT NULL,
  PRIMARY KEY (`ID_GRUPO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_aca`
--

DROP TABLE IF EXISTS `historial_aca`;
CREATE TABLE IF NOT EXISTS `historial_aca` (
  `ID_HIST_ACA` int(4) NOT NULL AUTO_INCREMENT,
  `HIST_UNIVERSIDAD` varchar(45) DEFAULT NULL,
  `HIST_SEM_CUATR` varchar(45) DEFAULT NULL,
  `HIST_PRMEDIO` float DEFAULT NULL,
  `HIST_NUM_CONTROL` varchar(45) DEFAULT NULL,
  `HIST_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_HIST_ACA`),
  KEY `fk_HISTORIAL_ACA_BECARIO1_idx` (`HIST_ID_BECARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_estudio`
--

DROP TABLE IF EXISTS `pro_estudio`;
CREATE TABLE IF NOT EXISTS `pro_estudio` (
  `ID_PROP_ESTUDIO` int(4) NOT NULL AUTO_INCREMENT,
  `PROP_CARRERA_CURSAR` varchar(45) DEFAULT NULL,
  `PROP_UNIVERSIDAD` varchar(45) DEFAULT NULL,
  `PROP_TIEMPO` varchar(45) DEFAULT NULL,
  `PROP_DESCRIPCION` varchar(100) DEFAULT NULL,
  `PROP_CONTAC_UNI` varchar(45) DEFAULT NULL,
  `PROP_CARTA` varchar(70) DEFAULT NULL,
  `PROP_BOLETA` varchar(70) DEFAULT NULL,
  `PROP_CROQUIS` varchar(70) DEFAULT NULL,
  `PROP_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_PROP_ESTUDIO`),
  KEY `fk_PRO_ESTUDIO_ASPIRANTES1_idx` (`PROP_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pro_estudio`
--

INSERT INTO `pro_estudio` (`ID_PROP_ESTUDIO`, `PROP_CARRERA_CURSAR`, `PROP_UNIVERSIDAD`, `PROP_TIEMPO`, `PROP_DESCRIPCION`, `PROP_CONTAC_UNI`, `PROP_CARTA`, `PROP_BOLETA`, `PROP_CROQUIS`, `PROP_ID_ASPIRANTES`) VALUES
(72, 'h', 'h', 'No', 'C:wamp64	mpphp4369.tmp', 'Si', 'C:wamp64	mpphp438A.tmp', '', 'C:wamp64	mpphp43BB.tmp', 74),
(73, 'g', 'g', 'No', 'C:wamp64	mpphp2A63.tmp', 'Si', '', 'C:wamp64	mpphp2AA3.tmp', 'C:wamp64	mpphp2AA4.tmp', 75),
(74, 'dsfds', 'dsfdsf', 'No', 'C:wamp64	mpphp707B.tmp', 'Si', 'C:wamp64	mpphp707C.tmp', 'C:wamp64	mpphp709C.tmp', 'C:wamp64	mpphp709D.tmp', 76),
(75, 'turismo', 'ites', 'No', 'C:wamp64	mpphp143C.tmp', 'No', 'C:wamp64	mpphp144D.tmp', 'C:wamp64	mpphp145E.tmp', 'C:wamp64	mpphp146E.tmp', 78),
(77, 'Vallet', 'ites', 'No', 'C:wamp64	mpphp7A94.tmp', 'Si', 'C:wamp64	mpphp7CF6.tmp', 'C:wamp64	mpphp7E8D.tmp', 'C:wamp64	mpphp7FE6.tmp', 80),
(78, 'arquitecto ', 'lasalle', 'Si', 'C:wamp64	mpphp3F1B.tmp', 'Si', 'C:wamp64	mpphp3F2C.tmp', 'C:wamp64	mpphp3F3C.tmp', 'C:wamp64	mpphp3F4D.tmp', 82),
(79, 'biologia marina', 'uabsc', 'Si', 'C:wamp64	mpphpE8F0.tmp', 'Si', 'C:wamp64	mpphpE9FB.tmp', 'C:wamp64	mpphpEA2B.tmp', 'C:wamp64	mpphpEA4B.tmp', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimientos`
--

DROP TABLE IF EXISTS `reconocimientos`;
CREATE TABLE IF NOT EXISTS `reconocimientos` (
  `ID_RECONOCIMIENTOS` int(4) NOT NULL AUTO_INCREMENT,
  `REC_INSTITUCION` varchar(45) DEFAULT NULL,
  `REC_DESCRIPCION` text,
  `REC_TIPO_RECONOCIMIENTO` varchar(45) DEFAULT NULL,
  `REC_ID_ASPIRANTES` int(4) NOT NULL,
  PRIMARY KEY (`ID_RECONOCIMIENTOS`),
  KEY `fk_RECONOCIMIENTOS_ASPIRANTES1_idx` (`REC_ID_ASPIRANTES`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reconocimientos`
--

INSERT INTO `reconocimientos` (`ID_RECONOCIMIENTOS`, `REC_INSTITUCION`, `REC_DESCRIPCION`, `REC_TIPO_RECONOCIMIENTO`, `REC_ID_ASPIRANTES`) VALUES
(62, 'h', 'h', 'h', 74),
(63, 'g', 'g', 'g', 75),
(64, 'dsfsd', 'dsfsd', 'sdfdsf', 76),
(65, 'a', 'futbola', 'a', 78),
(67, 'na', 'na', 'na', 80),
(68, 'cobach', 'el mejor en hacer ejercicio', 'mejor promendio', 82),
(69, 'na', 'na', 'na', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

DROP TABLE IF EXISTS `reportes`;
CREATE TABLE IF NOT EXISTS `reportes` (
  `ID_REPORTE` int(4) NOT NULL AUTO_INCREMENT,
  `REP_TIPO_REPORTE` varchar(45) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_REPORTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_fondos`
--

DROP TABLE IF EXISTS `solicitud_fondos`;
CREATE TABLE IF NOT EXISTS `solicitud_fondos` (
  `ID_SOL_FONDOS` int(4) NOT NULL AUTO_INCREMENT,
  `FON_NOMBRE_EVENTO` varchar(45) DEFAULT NULL,
  `FON_REQUISITO` varchar(45) DEFAULT NULL,
  `FON_ORGANIZADOR` varchar(45) DEFAULT NULL,
  `FON_FECHA_INI` date DEFAULT NULL,
  `FON_FECHA_FIN` date DEFAULT NULL,
  `FON_UBICACION` varchar(45) DEFAULT NULL,
  `FON_OBJETIVO_EVENT` text,
  `FON_ESTATUS` varchar(50) DEFAULT NULL,
  `FON_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_SOL_FONDOS`),
  KEY `fk_SOLICITUD_FONDOS_BECARIO1_idx` (`FON_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_fondos`
--

INSERT INTO `solicitud_fondos` (`ID_SOL_FONDOS`, `FON_NOMBRE_EVENTO`, `FON_REQUISITO`, `FON_ORGANIZADOR`, `FON_FECHA_INI`, `FON_FECHA_FIN`, `FON_UBICACION`, `FON_OBJETIVO_EVENT`, `FON_ESTATUS`, `FON_ID_BECARIO`) VALUES
(1, 'evento13', '1222', 'porhub', '2018-05-09', '2018-05-09', 'prhub', 'pornhub2', 'Pendiente', 4),
(2, 'hahahahaaaa', '23', 'qwewqeqweqdqw', '2018-06-19', '2018-06-19', 'y', 'pornhub', 'Pendiente', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_libros`
--

DROP TABLE IF EXISTS `solicitud_libros`;
CREATE TABLE IF NOT EXISTS `solicitud_libros` (
  `ID_SOL_LIBROS` int(4) NOT NULL AUTO_INCREMENT,
  `LIB_DESCRIPCION_LIBRO` text,
  `LIB_MATERIA` varchar(45) DEFAULT NULL,
  `LIB_NOM_MAESTRO` varchar(45) DEFAULT NULL,
  `LIB_CANTIDAD` int(2) DEFAULT NULL,
  `LIB_PRECIO` float DEFAULT NULL,
  `LIB_VENDEDOR` varchar(45) DEFAULT NULL,
  `LIB_FECHA` date DEFAULT NULL,
  `LIB_STATUS` varchar(50) DEFAULT NULL,
  `LIB_ID_BECARIO` int(4) NOT NULL,
  PRIMARY KEY (`ID_SOL_LIBROS`),
  KEY `fk_SOLICUTD_LIBROS_BECARIO1_idx` (`LIB_ID_BECARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud_libros`
--

INSERT INTO `solicitud_libros` (`ID_SOL_LIBROS`, `LIB_DESCRIPCION_LIBRO`, `LIB_MATERIA`, `LIB_NOM_MAESTRO`, `LIB_CANTIDAD`, `LIB_PRECIO`, `LIB_VENDEDOR`, `LIB_FECHA`, `LIB_STATUS`, `LIB_ID_BECARIO`) VALUES
(2, 'programacion orientada  aobjetos', 'Calculo', 'jacbo2', 1, 1200, 'jacob2', '2018-06-09', 'Pendiente', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

DROP TABLE IF EXISTS `tabla1`;
CREATE TABLE IF NOT EXISTS `tabla1` (
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`first_name`, `last_name`, `email`) VALUES
('', 'sdfsd', 'a@g.com'),
('juan', 'hernandez', 'a@lulu.com'),
('lulu', 'luu', 'joseluishernandez3c@gmail.com'),
('dsfds', 'sadas', 'a@h.com'),
('sadasd', 'asdasd', 'pinckderams_rfa@hotmail.com'),
('lim9n', 'adsdd', 'pinckderams_rfa@hotmail.com'),
('ger', 'asdasd', 'pinckderams_rfa@hotmail.com'),
('100 porciento rial', 'sdfsd', 'joseluishernandez3c@gmail.com'),
('verdad', 'hernandez', 'pinckderams_rfa@hotmail.com'),
('AS', 'hernandez', 'pinckderams_rfa@hotmail.com'),
('AS', 'hernandez', 'pinckderams_rfa@hotmail.com'),
('AS', 'hernandez', 'pinckderams_rfa@hotmail.com'),
('PUTITO', 'ASDASD', 'pinckderams_rfa@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla2`
--

DROP TABLE IF EXISTS `tabla2`;
CREATE TABLE IF NOT EXISTS `tabla2` (
  `web` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `lenguaje` varchar(50) DEFAULT NULL,
  `version` int(50) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla2`
--

INSERT INTO `tabla2` (`web`, `tipo`, `lenguaje`, `version`, `precio`) VALUES
('https://www.google.com.mx/', '', 'no', 2, 34.67),
('https://www.google.com.mx/', 'ASDS', 'es', 1, 132);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(4) NOT NULL AUTO_INCREMENT,
  `USU_USUARIO` varchar(45) DEFAULT NULL,
  `USU_CONTRA` varchar(80) DEFAULT NULL,
  `USU_ROLL` varchar(45) DEFAULT NULL,
  `USU_APELLIDO_PATERNO` varchar(45) DEFAULT NULL,
  `USU_APELLIDO_MATERNO` varchar(45) DEFAULT NULL,
  `USU_NOMBRE` varchar(45) DEFAULT NULL,
  `USU_DIRECCION` varchar(45) DEFAULT NULL,
  `USU_COLONIA` varchar(45) DEFAULT NULL,
  `USU_CODIGO_POSTAL` varchar(45) DEFAULT NULL,
  `USU_IMG_PERFIL` varchar(90) DEFAULT NULL,
  `USU_TELEFONO` varchar(45) DEFAULT NULL,
  `USU_CELULAR` varchar(45) DEFAULT NULL,
  `USU_LUGAR_NACIMIENTO` varchar(45) DEFAULT NULL,
  `USU_FECHA_NAC` date DEFAULT NULL,
  `USU_SEXO` varchar(45) DEFAULT NULL,
  `EQU_ID_BECARIO` int(100) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `USU_USUARIO`, `USU_CONTRA`, `USU_ROLL`, `USU_APELLIDO_PATERNO`, `USU_APELLIDO_MATERNO`, `USU_NOMBRE`, `USU_DIRECCION`, `USU_COLONIA`, `USU_CODIGO_POSTAL`, `USU_IMG_PERFIL`, `USU_TELEFONO`, `USU_CELULAR`, `USU_LUGAR_NACIMIENTO`, `USU_FECHA_NAC`, `USU_SEXO`, `EQU_ID_BECARIO`) VALUES
(1, 'wicho', '123456', '1', '    Hernandez', 'hernandez', 'jose luis', '    calle e manzana 8', 'villa bonita', '2400', 'assets/img1.jpg', '6241586134', '6241586134', 'Estados unidos', '1985-01-09', 'hombre', NULL),
(16, 'delfino', '123456', '2', '  alva', 'mendoza', 'delfino', '   calle e manzana 8', 'vista hermosa', '0', 'assets/img169779.jpg', '12345678', '12345678', 'guerrero', '2007-12-01', 'mujer', NULL),
(18, 'joseluis@gmail.com', '123456', '1', 'hernandez', 'mendieta', 'jose luis', 'calle e', 'villa bonita', '23400', NULL, '62415851', '213213', 'texcoco', '1996-10-10', 'Hombre', NULL),
(19, 'hugo@gmail.com', '123456', '1', 'torres', 'jimenez', 'hugo', 'calle matias', 'zacatal', '23400', NULL, '133212', '123121', 'torreon', '2000-02-23', 'Hombre', NULL),
(21, 'norma@gmail.com', '123456', '4', '      garcia', 'mendez', 'norma', '      calle 10 lote 15', 'costa dorada', '23460', 'assets/imgfa2966e51dfb847f_256x256.png', '6241586134', '6241586134', 'mexico', '1990-04-09', 'mujer', NULL),
(25, 'limon@gmail.com', '123456', '3', 'moreno', 'Limon', 'Jonathan', 'guaymitas', 'san jose', '23400', 'assets/img/logo1.png', '23400', '12345678', 'guadalajara', '1993-11-28', 'Masculino', 0),
(30, 'emely@gmail.com', '123456', '1', 'guadalupe', 'miranda', 'emely', 'villabonita', 'veredas', '23400', NULL, '123456', '123456', 'Sinaloa', '1999-04-23', 'Mujer', NULL),
(31, 'catalina@gmail.com', '123456', '1', 'Mendieta ', 'Hinojosa', 'Catalina', 'Calle 3', 'Veredas', '23400', NULL, '624158', '624158', 'Aguascalientes', '2008-12-18', 'Mujer', NULL),
(32, 'fabian@gmail.com', '123456', '5', 'ortega', 'aguilar', 'fabian', 'calle m', 'verdas', '2323', 'assets/imgcorreo del profe enviar a dropbox 2.PNG', '1232321', '12321312', 'Mexico', '2008-12-02', 'Hombre', NULL),
(33, 'h@gmail.com', '123456', '1', 'a', 'a', 'g', 'a', 'a', '2', NULL, '123', '1234', 'Michoacan', '2008-12-03', 'Mujer', NULL),
(37, 'prueba@com.com', '123456', '3', 'a', 'a', 'a', 'a', 'a', '1', '', '1', '1', 'a', '2018-08-07', 'a', NULL),
(38, 'aa@a.coma', '123456', '1', 'Limon', 'Moreno', 'Jonathan', 'Cabos san lucas', 'Guaymitas', '12335', 'assets/imgdescargar.jpg', '1231231', '1231231231', 'Baja California Sur', '1999-02-07', 'Hombre', NULL),
(39, 'millan12@gmail.com', '123456', '1', 'millan', 'jimenez', 'miguel', 'zacatal', 'zacatal', '23400', '', '4356356', '2343564567', 'Jalisco', '2008-12-01', 'Hombre', NULL),
(40, 'brenda@gmail.com', '123456', '4', 'brenda', 'brenda', 'brenda', 'brenda', 'brenda', '23400', NULL, '123456789098767876', '78', 'mexico', '2008-12-19', 'mujer', NULL),
(41, 'a@gmail.com', '123456', '3', 'a', 'a', 'a', 'a', 'a', '1', NULL, '123', '123', 'a', '2008-12-05', 'a', NULL),
(42, 'brando@gmail.com', '123456', '3', 'bocanegra', 'peÃ±a', 'brando', 'calle l', 'san jose', '23400', 'assets/imgIMG_1001.JPG', '1234567', '1234567899', 'Jalisco', '2008-12-03', 'Hombre', NULL),
(43, 'prueba2@gmail.com', '123456', '3', 'pruebauno', 'prueba', 'prueba', 'prueba', 'prueba', '2345', '', '1234567', '1234567891', 'prueba', '2008-12-09', 'prueba', NULL),
(44, 'alemendieta27@hotmail.com', 'tibatyza27', '3', 'hernandez', 'mendieta', 'alejandra ', 'calle e mz 8 lote 10 villa bonita', 'las veredas', '23400', 'assets/img/15331712949821108844637.jpg', '6242424', '6242424524', 'Mexico', '1993-06-27', 'Mujer', NULL),
(45, 'sadasdasd@g.com', '321321', '1', 'sadas', 'sadasd', 'adasd', 'asdasd', 'adasd', '3213', NULL, '1232132', '1232132131', 'Mexico', '2008-12-16', 'Hombre', NULL),
(46, 'thor@gmail.com', '$2y$10$OvLQtqlkS2BGE/olnQGLJu/G0NETF046YCwP3retKEDaxekbH6VS6', '1', 'thor', 'thor', 'thor', 'thor', 'thor', '32132131', NULL, '1312321', '2312312321', 'Michoacan', '2008-12-26', 'Hombre', NULL),
(47, 'google@gmail.com', '$2y$10$xXjuUlm.hufKllCBJDTl3eYInIR6qUaGRt4VDg9a4gy.UvpLcB9Z.', '1', 'asdsad', 'asdsad', 'dsadasd', 'adas', 'asdasd', '12321', NULL, '1232132', '2132132132', 'Jalisco', '2008-12-25', 'Hombre', NULL),
(48, 'google@gmail.com', '$2y$10$NBU.J.YBBxXMwArYCslI4uUFDcNMOVmRVfluwlJOsYcdFnvMh6/BG', '1', 'asdsad', 'asdsad', 'dsadasd', 'adas', 'asdasd', '12321', NULL, '1232132', '2132132132', 'Jalisco', '2008-12-25', 'Hombre', NULL),
(50, 'fer@gmail.com', '$2y$10$SrRmLHXuto5sdexLndOPUul1qSspQIePWxyfWHxYHAhXbANzP2kXm', '1', 'sadas', 'sadad', 'sadasd', 'asdsad', 'asdas', '123213', NULL, '3213213', '2132132132', 'Michoacan', '2008-12-02', 'Mujer', NULL),
(51, 'v@v.com', 'f0ecdc3c47e7e0ccb0e24c6a5d4d7b84', '1', 'asdas', 'asdas', 'asdas', 'asdsa', 'asdsa', '123123', NULL, '1232132', '2132132132', 'Morelos', '2008-12-17', 'Mujer', NULL),
(52, 'mary@gmail.com', 'f0ecdc3c47e7e0ccb0e24c6a5d4d7b84', '1', 'sddsdsad', 'sdadsafasd', 'adasdasd', 'dsadsa', 'sadsadsa', '132131', NULL, '1232132', '1321312312', 'Michoacan', '2008-12-02', 'Mujer', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_ACTIVIDADES_BECARIO1` FOREIGN KEY (`ACT_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `act_extra`
--
ALTER TABLE `act_extra`
  ADD CONSTRAINT `fk_ACT_EXTRA_ASPIRANTES1` FOREIGN KEY (`EXT_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_ASISTENCIA_BECARIO1` FOREIGN KEY (`ASI_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aspirantes`
--
ALTER TABLE `aspirantes`
  ADD CONSTRAINT `fk_ASPIRANTES_table1` FOREIGN KEY (`ASP_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `fk_AUTOS_DATOS_GENERALES1` FOREIGN KEY (`DATOS_GENERALES_ID_GENERALES`) REFERENCES `datos_generales` (`ID_GENERALES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `becario`
--
ALTER TABLE `becario`
  ADD CONSTRAINT `fk_BECARIO_table11` FOREIGN KEY (`BEC_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bitacora_limpieza`
--
ALTER TABLE `bitacora_limpieza`
  ADD CONSTRAINT `fk_BITACORA_LIMPIEZA_EQUIPOS1` FOREIGN KEY (`BIT_ID_EQUIPOS`) REFERENCES `equipos` (`ID_EQUIPOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_CALIFICACIONES_BECARIO1` FOREIGN KEY (`CAL_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costos`
--
ALTER TABLE `costos`
  ADD CONSTRAINT `fk_COSTOS_SOLICITUD_FONDOS1` FOREIGN KEY (`SOLICITUD_FONDOS_ID_SOL_FONDOS`) REFERENCES `solicitud_fondos` (`ID_SOL_FONDOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
  ADD CONSTRAINT `fk_DATOS_FAMILIARES_ASPIRANTES1` FOREIGN KEY (`FAM_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD CONSTRAINT `fk_DATOS_GENERALES_ASPIRANTES1` FOREIGN KEY (`GEN_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_EMPLEADOS_table11` FOREIGN KEY (`EMP_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD CONSTRAINT `fk_ESCOLARIDAD_ASPIRANTES1` FOREIGN KEY (`ESC_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_aca`
--
ALTER TABLE `historial_aca`
  ADD CONSTRAINT `fk_HISTORIAL_ACA_BECARIO1` FOREIGN KEY (`HIST_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pro_estudio`
--
ALTER TABLE `pro_estudio`
  ADD CONSTRAINT `fk_PRO_ESTUDIO_ASPIRANTES1` FOREIGN KEY (`PROP_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  ADD CONSTRAINT `fk_RECONOCIMIENTOS_ASPIRANTES1` FOREIGN KEY (`REC_ID_ASPIRANTES`) REFERENCES `aspirantes` (`ID_ASPIRANTES`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_fondos`
--
ALTER TABLE `solicitud_fondos`
  ADD CONSTRAINT `fk_SOLICITUD_FONDOS_BECARIO1` FOREIGN KEY (`FON_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud_libros`
--
ALTER TABLE `solicitud_libros`
  ADD CONSTRAINT `fk_SOLICUTD_LIBROS_BECARIO1` FOREIGN KEY (`LIB_ID_BECARIO`) REFERENCES `becario` (`ID_BECARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
