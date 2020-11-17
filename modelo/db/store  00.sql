-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS categoria (
  idCategoria INT NOT NULL AUTO_INCREMENT,
  CodigoCat varchar(30) NOT NULL,
  Nombre varchar(30) NOT NULL,
  Descripcion text NOT NULL,
  Estado varchar(30) NOT NULL,
  idCatPadre INT NULL,
  PRIMARY KEY (idCategoria),
  FOREIGN KEY (idCatPadre)
      REFERENCES categoria(idCategoria)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS rol (
  idRol INT NOT NULL AUTO_INCREMENT,
  rol varchar(50) NOT NULL,
  PRIMARY KEY (idRol)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS usuario (
  idUsuario INT NOT NULL AUTO_INCREMENT,
  correo varchar(50) NOT NULL,
  contrasenia varchar(30) NOT NULL,
  fechaIngreso DATE NOT NULL,
  estado varchar(30) NOT NULL,
  idRol INT NOT NULL,
  PRIMARY KEY (idUsuario),
  FOREIGN KEY (idRol)
      REFERENCES rol(idRol)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  idCliente INT NOT NULL AUTO_INCREMENT,
  `NIT` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Telefono` int(20) NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idCliente),
  FOREIGN KEY (idUsuario)
      REFERENCES usuario(idUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  idProveedor INT NOT NULL AUTO_INCREMENT,
  `NITProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL,
  PRIMARY KEY (idProveedor)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  idMarca INT NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) NOT NULL,
  PRIMARY KEY (idMarca)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  idProducto INT NOT NULL AUTO_INCREMENT,
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Modelo` varchar(30) NULL,
  `Stock` int(20) NOT NULL,
  `Imagen` varchar(150) NULL,
  estado varchar(30) NOT NULL,
  `idProveedor` INT NOT NULL, 
  `idMarca` INT NOT NULL,
  `idCategoria` INT NOT NULL,
    PRIMARY KEY (idProducto),
  FOREIGN KEY (idProveedor)
      REFERENCES proveedor(idProveedor),
  FOREIGN KEY (idMarca)
      REFERENCES marca(idMarca),
  FOREIGN KEY (idCategoria)
      REFERENCES categoria(idCategoria)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  idCarrito INT NOT NULL AUTO_INCREMENT,
  `cantidad` INT NOT NULL,
  idProducto INT NOT NULL,
  idCliente INT NOT NULL,
  PRIMARY KEY (idCarrito),
  FOREIGN KEY (idProducto)
      REFERENCES producto(idProducto),
  FOREIGN KEY (idCliente)
      REFERENCES cliente(idCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaDeseo`
--

CREATE TABLE IF NOT EXISTS `listaDeseo` (
  idLisDeseo INT NOT NULL AUTO_INCREMENT,
  idProducto INT NOT NULL,
  idCliente INT NOT NULL,
  PRIMARY KEY (idLisDeseo),
  FOREIGN KEY (idProducto)
      REFERENCES producto(idProducto),
  FOREIGN KEY (idCliente)
      REFERENCES cliente(idCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  idPais INT NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) NOT NULL,
  PRIMARY KEY (idPais)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  idDepto INT NOT NULL AUTO_INCREMENT,
  `departamento` varchar(30) NOT NULL,
  idPais INT NOT NULL,
  PRIMARY KEY (idDepto),
  FOREIGN KEY (idPais)
      REFERENCES pais(idPais)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  idMunicipio INT NOT NULL AUTO_INCREMENT,
  `municipio` varchar(30) NOT NULL,
  idDepto INT NOT NULL,
  PRIMARY KEY (idMunicipio),
  FOREIGN KEY (idDepto)
      REFERENCES departamento(idDepto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  idDireccion INT NOT NULL AUTO_INCREMENT,
  `direccion` varchar(30) NOT NULL,
  idPais INT NOT NULL,
  idDepto INT NOT NULL,
  idMunicipio INT NOT NULL,
  idCliente INT NOT NULL,
  PRIMARY KEY (idDireccion),
  FOREIGN KEY (idPais)
      REFERENCES pais(idPais),
  FOREIGN KEY (idDepto)
      REFERENCES departamento(idDepto),
  FOREIGN KEY (idMunicipio)
      REFERENCES municipio(idMunicipio),
  FOREIGN KEY (idCliente)
      REFERENCES cliente(idCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE IF NOT EXISTS `tarjeta` (
  idTarjeta INT NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `numeroTarjeta` varchar(16) NOT NULL,
  `codigoSeguridad` varchar(3) NOT NULL,
  `vencimiento` varchar(7) NOT NULL,
  PRIMARY KEY (idTarjeta)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodoPago`
--

CREATE TABLE IF NOT EXISTS `metodoPago` (
  idMetodoPago INT NOT NULL AUTO_INCREMENT,
  `metodoPago` varchar(30) NOT NULL,
  idTarjeta INT NULL,
  PRIMARY KEY (idMetodoPago),
  FOREIGN KEY (idTarjeta)
      REFERENCES tarjeta(idTarjeta)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  idOrden INT NOT NULL AUTO_INCREMENT,
  `fechaOrden` DATE NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `costoEnvio` decimal(10,2) NOT NULL,
  `estadoOrden` varchar(30) NOT NULL,
  idMetodoPago INT NOT NULL,
  idCliente INT NOT NULL,
  idDireccion INT NOT NULL,
  PRIMARY KEY (idOrden),
  FOREIGN KEY (idMetodoPago)
      REFERENCES metodoPago(idMetodoPago),
  FOREIGN KEY (idCliente)
      REFERENCES cliente(idCliente),
  FOREIGN KEY (idDireccion)
      REFERENCES direccion(idDireccion)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE IF NOT EXISTS `descuento` (
  idDescuento INT NOT NULL AUTO_INCREMENT,
  `descuento` decimal(10,2) NOT NULL,
  `fechaInicio` DATE NOT NULL,
  `fechaFin` DATE NOT NULL,
  idProducto INT NOT NULL,
  PRIMARY KEY (idDescuento),
  FOREIGN KEY (idProducto)
      REFERENCES producto(idProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleOrden`
--

CREATE TABLE IF NOT EXISTS `detalleOrden` (
  idDetOrden INT NOT NULL AUTO_INCREMENT,
  `precioUnitario` decimal(10,2) NOT NULL,
  `cantidad` INT NOT NULL,
  idOrden INT NOT NULL,
  idProducto INT NOT NULL,
  idDescuento INT NULL,
  PRIMARY KEY (idDetOrden),
  FOREIGN KEY (idOrden)
      REFERENCES orden(idOrden),
  FOREIGN KEY (idProducto)
      REFERENCES producto(idProducto),
  FOREIGN KEY (idDescuento)
      REFERENCES descuento(idDescuento)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  idFactura INT NOT NULL AUTO_INCREMENT,
  `numeroFact` varchar(30) NOT NULL,
  `IVA` decimal(10,2) NOT NULL,
  idOrden INT NOT NULL,
  PRIMARY KEY (idFactura),
  FOREIGN KEY (idOrden)
      REFERENCES orden(idOrden)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

