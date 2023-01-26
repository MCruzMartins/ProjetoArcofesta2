drop database if exists projetoarcofesta2;

create database projetoarcofesta2 character set utf8 collate utf8_general_ci;

use projetoarcofesta2;

create table funcionario (
	idcolaborador integer primary key auto_increment,
    nome varchar(60)not null,
    telefone varchar(15)not null,
    cep char(9) not null,
    email varchar(100)not null,
    função varchar(100)not null,
    senha varchar(255)not null); 

create table Cliente
(
	Cpf char(12) primary key,
    nome varchar(60)not null,
    Nascimento date not null,
    telefone varchar(15)not null,
    email varchar(100)not null);
   

create table Contrato 
(
   Númerocontrato integer primary key auto_increment,
   Dataevento date not null,
   preco double not null,	
   Tipoevento varchar(15)not null,
    cep char(9) not null,
    numero integer not null,
    complemento varchar(40)not null,
    idcolaborador integer not null,
    cpf char (12) not null,
    cor_uniforme varchar (40) not null,
    Tempo_evento varchar (9) not null,
        foreign key(Cpf)references cliente(Cpf),
		foreign key(idcolaborador)references funcionario (idcolaborador));

insert into funcionario(nome,telefone,cep,email,função,senha)VALUES
('Jhon Lennon Ribeiro')