CREATE DATABASE IF NOT EXISTS `sistama_oda`;

USE `sistama_oda`;

CREATE TABLE IF NOT EXISTS `tabla_de_prueba` (
	`valor_n` INT NOT NULL,
	`valor_s` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `usuarios` (
	`id_usuario` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_usuario`)
);