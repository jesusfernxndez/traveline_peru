create database bd_TravelinePeru;

use bd_TravelinePeru;

create table Usuario(
  idUsuario int primary key auto_increment,
  nombre varchar(60),
  correo varchar(60) unique,
  password varchar(70)
);


select * from Usuario;
