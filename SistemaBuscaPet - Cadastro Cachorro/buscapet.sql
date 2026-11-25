-- create database buscapet;

-- use buscapet;

-- create table adotantes (
-- 	id_adotante int primary key auto_increment,
--     nome_usuario varchar(50) not null,
--     cpf varchar(12) not null unique,
--     email varchar(50) not null,
--     senha varchar(255) not null,
--     endereco varchar(50) not null, 
--     telefone varchar(12) not null,
--     tipo_moradia varchar(20) not null
-- );

-- select * from adotantes;


DROP DATABASE IF EXISTS buscapet;

CREATE DATABASE buscapet;

USE buscapet;


-- Tabela que contém os tipos de moradia
CREATE TABLE tipo_moradia (
    id_moradia INT AUTO_INCREMENT PRIMARY KEY,
    nome_moradia VARCHAR(50) NOT NULL
);

INSERT INTO tipo_moradia (nome_moradia) VALUES
('Casa'),
('Apartamento'),
('Chácara'),
('Sítio');

CREATE TABLE tipo_quintal (
	id_quintal INT auto_increment primary key,
	nome_quintal varchar(50)
);

INSERT INTO tipo_quintal (nome_quintal) VALUES
('Grande'),
('Médio'),
('Pequeno'),
('Não possuo');


-- Tabela de adotantes
CREATE TABLE adotantes (
    id_adotante INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(50) NOT NULL,
    cpf VARCHAR(12) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    telefone VARCHAR(12) NOT NULL,
    id_moradia INT NOT NULL,

    CONSTRAINT fk_adotante_moradia
        FOREIGN KEY (id_moradia)
        REFERENCES tipo_moradia(id_moradia)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
        
	id_quintal INT NOT NULL,

    CONSTRAINT fk_tipo_quintal
        FOREIGN KEY (id_quintal)
        REFERENCES tipo_quintal(id_quintal)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);


SELECT * FROM tipo_moradia;

SELECT * FROM adotantes;

delete from adotantes where id_adotante = 1;
