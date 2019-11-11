create database capsula;
use capsula;

CREATE TABLE usuario (
	id_user int auto_increment PRIMARY KEY,
    tipo int,
	cpf varchar(20),
	nome Text,
	ano_formatura varchar(10),
	curso Text
);

CREATE TABLE historias (
	id_hist int auto_increment PRIMARY KEY,
	dataa datetime,
	historia Text,
	id_user int,
	FOREIGN KEY(id_user) REFERENCES usuario (id_user)
);

CREATE TABLE img(
	id_img int auto_increment primary key,
    nome_img varchar (200),
    endereco varchar (400),
    tipo varchar (2),
    id_hist int,
    foreign key (id_hist) references historias(id_hist)
    );
    
CREATE TABLE comentarios (
	id_coment int auto_increment PRIMARY KEY,
	comentario Text,
	id_user int,
	FOREIGN KEY(id_user) REFERENCES usuario (id_user)
);

CREATE TABLE denuncia (
	id_denuncia int auto_increment primary key,
	id_user int,
	id_coment int,
	data_ datetime,
	FOREIGN KEY(id_user) REFERENCES usuario (id_user),
	FOREIGN KEY(id_coment) REFERENCES comentarios (id_coment)
);

CREATE TABLE likar (
	id_like int auto_increment primary key,
	id_hist int,
	id_user int,
	FOREIGN KEY(id_hist) REFERENCES historias (id_hist),
	FOREIGN KEY(id_user) REFERENCES usuario (id_user)
);