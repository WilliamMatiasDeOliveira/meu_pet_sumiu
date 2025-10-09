DROP DATABASE IF EXISTS meu_pet_sumiu;

CREATE DATABASE IF NOT EXISTS meu_pet_sumiu;

USE meu_pet_sumiu;

CREATE TABLE IF NOT EXISTS usuarios(
	id_usuario BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL,
	senha VARCHAR(255) NOT NULL,
	celular VARCHAR(11)
);

CREATE TABLE IF NOT EXISTS pets(
	id_pet BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	nome_pet VARCHAR(255) NOT NULL,
	especie VARCHAR(45) NOT NULL,
	raca VARCHAR(45),
	cor VARCHAR(45),
	sexo ENUM('m', 'f') NOT NULL,
	descricao TEXT,
	foto VARCHAR(255),
	situacao ENUM('perdido', 'achado') DEFAULT 'perdido',
	usuario_id BIGINT UNSIGNED,
	FOREIGN KEY(usuario_id)	REFERENCES usuarios (id_usuario)
);











