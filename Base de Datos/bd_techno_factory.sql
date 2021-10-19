#crear base de datos
CREATE SCHEMA `bd_techno_factory`;
#seleccionar la base de datos
use `bd_techno_factory`;

#tabla de estados
create table Estados
(
idEstado int auto_increment ,
estado varchar(50) not null,
primary key(idEstado)
);

#tabla de Categorias



#tabla de cargos 
create table Cargos
(
idCargo int auto_increment,
descripcionCargo varchar(50) not null,
primary key(idCargo)
);

