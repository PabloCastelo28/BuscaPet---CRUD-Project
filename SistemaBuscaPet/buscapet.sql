create database buscapet;

use buscapet;

create table adotantes (
	id_adotante int primary key auto_increment,
    nome_usuario varchar(50) not null,
    cpf varchar(12) not null unique,
    email varchar(50) not null,
    senha varchar(255) not null,
    endereco varchar(50) not null, 
    telefone varchar(12) not null,
    tipo_moradia varchar(20) not null
);

select * from adotantes;