-- Validar si esta la DB
DROP SCHEMA IF EXISTS `fes_aragon`;
-- crear la DB
CREATE SCHEMA  IF NOT EXISTS `fes_aragon` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `fes_aragon`;
-- Crear una tabla 
CREATE TABLE `alumno`(
    `nombre_usuario` text not null,
    `carrera` text not null,
    `no_cuenta` int(10) not null,
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `password` varchar(10) not null,
    `fecha_registro` datetime not null default current_timestamp,
    `permisos` int(11) not null default '2'
);

ALTER TABLE `alumno` ADD PRIMARY KEY (`no_cuenta`);