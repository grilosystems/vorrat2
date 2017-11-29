/*
 Source Server Type    : MySQL
 Source Database       : vorrat

 Target Server Type    : MySQL
 File Encoding         : utf-8

 Date: 11/13/2017 23:15:29 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `almacen`
-- ----------------------------
DROP TABLE IF EXISTS `almacen`;
CREATE TABLE `almacen` (
  `idalmacen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono1` varchar(50) DEFAULT NULL,
  `telefono2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idalmacen`),
  UNIQUE KEY `idalmacen_UNIQUE` (`idalmacen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `personal`
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`idpersonal`),
  UNIQUE KEY `idpersonal_UNIQUE` (`idpersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `reparacion`
-- ----------------------------
DROP TABLE IF EXISTS `reparacion`;
CREATE TABLE `reparacion` (
  `idreparacion` int(11) NOT NULL AUTO_INCREMENT,
  `reparacion` varchar(300) NOT NULL,
  `reparador` int(11) NOT NULL,
  `fechaReparacion` date NOT NULL,
  `idteil` int(11) NOT NULL,
  PRIMARY KEY (`idreparacion`),
  UNIQUE KEY `idreparacion_UNIQUE` (`idreparacion`),
  KEY `fk_idteil_idx` (`idteil`),
  KEY `fk_reparador_idx` (`reparador`),
  CONSTRAINT `fk_idteil` FOREIGN KEY (`idteil`) REFERENCES `teil` (`idteil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reparador` FOREIGN KEY (`reparador`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `teil`
-- ----------------------------
DROP TABLE IF EXISTS `teil`;
CREATE TABLE `teil` (
  `idteil` int(11) NOT NULL AUTO_INCREMENT,
  `nserie` varchar(100) NOT NULL,
  `ninventario` varchar(100) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `fechaSalida` date NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `idTipoRefaccion` int(11) NOT NULL,
  `idPersonalRecibio` int(11) NOT NULL,
  `idPersonalTransporto` int(11) NOT NULL,
  `idDestino` int(11) NOT NULL,
  `idProcedencia` int(11) NOT NULL,
  `fotoTeil` varchar(200) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idteil`),
  UNIQUE KEY `idteil_UNIQUE` (`idteil`),
  KEY `fk_idTipoRefaccion_idx` (`idTipoRefaccion`),
  KEY `fk_idPersonalRecibio_idx` (`idPersonalRecibio`),
  KEY `fk_idPersonalTransporto_idx` (`idPersonalTransporto`),
  KEY `fk_idDestino_idx` (`idDestino`),
  KEY `fk_idProcedencia_idx` (`idProcedencia`),
  CONSTRAINT `fk_idDestino` FOREIGN KEY (`idDestino`) REFERENCES `almacen` (`idalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idPersonalRecibio` FOREIGN KEY (`idPersonalRecibio`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idPersonalTransporto` FOREIGN KEY (`idPersonalTransporto`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idProcedencia` FOREIGN KEY (`idProcedencia`) REFERENCES `almacen` (`idalmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idTipoRefaccion` FOREIGN KEY (`idTipoRefaccion`) REFERENCES `tiporefaccion` (`idtipoRefaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `tipoRefaccion`
-- ----------------------------
DROP TABLE IF EXISTS `tipoRefaccion`;
CREATE TABLE `tipoRefaccion` (
  `idtipoRefaccion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idtipoRefaccion`),
  UNIQUE KEY `idtipoRefaccion_UNIQUE` (`idtipoRefaccion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `tipoUsuario`
-- ----------------------------
DROP TABLE IF EXISTS `tipoUsuario`;
CREATE TABLE `tipoUsuario` (
  `idtipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`idtipoUsuario`),
  UNIQUE KEY `idtipoUsuario_UNIQUE` (`idtipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idtipoUsuario` int(11) NOT NULL,
  `idPersonal` int(11) NOT NULL,
  `cuenta` varchar(100) NOT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`),
  KEY `fk_idtipoUsuario_idx` (`idtipoUsuario`),
  KEY `fk_idPersonal_idx` (`idPersonal`),
  CONSTRAINT `fk_idPersonal` FOREIGN KEY (`idPersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idtipoUsuario` FOREIGN KEY (`idtipoUsuario`) REFERENCES `tipousuario` (`idtipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `vorrat_teil_bitaco`
-- ----------------------------
DROP TABLE IF EXISTS `vorrat_teil_bitaco`;
CREATE TABLE `vorrat_teil_bitaco` (
  `idVorratBitaco` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `fechaOperacion` datetime NOT NULL,
  `operacion` int(11) NOT NULL,
  `fechaLogIn` datetime NOT NULL,
  `fechaLogOut` datetime NOT NULL,
  `estampaTiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idVorratBitaco`),
  UNIQUE KEY `idVorratBitaco_UNIQUE` (`idVorratBitaco`),
  KEY `fk_usuario_idx` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
