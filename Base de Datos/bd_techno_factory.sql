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

insert into Estados (estado) values ('habilitado'),('deshabilitado');

#tabla de Categorias
create table Categorias
(
idCategoria int auto_increment,
descripcionCategoria varchar(50) not null,
primary key(idCategoria)
);

#tabla de marcas
create table Marcas
(
idMarca int auto_increment,
descripcionMarca varchar(50) not null,
primary key(idMarca)
);

#tabla de Modelos
create table Modelos
(
idModelo int auto_increment,
descripcionModelo varchar(50) not null,
idMarca int,
primary key(idModelo),
FOREIGN KEY(idMarca) REFERENCES Marcas(idMarca)
);

#tabla de cargos 
create table Cargos
(
idCargo int auto_increment,
descripcionCargo varchar(50) not null,
primary key(idCargo)
);

#tabla de Productos
create table Productos
(
idProducto int auto_increment,
nombreProducto varchar(50) not null,
descripcionProducto varchar(2000) not null,
cantidadExistencia int not null,
idCategoria int ,
idEstado int,
precioEstandar decimal(10,2) not null,
precioVenta decimal(10,2) not null,
idModelo int ,
primary key(idProducto),
FOREIGN KEY(idModelo) REFERENCES Modelos(idModelo),
FOREIGN KEY(idEstado) REFERENCES Estados(idEstado),
FOREIGN KEY(idCategoria) REFERENCES Categorias(idCategoria)
);

#tabla de Clientes
create table Clientes
(
idCliente int auto_increment,
nombreCliente varchar(50) not null,
apellidoCliente varchar(50) not null,
genero varchar(30) not null,
fechaNacimiento date not null,
fechaRegistro datetime default now(),
idEstado int,
primary key(idCliente),
FOREIGN KEY(idEstado) REFERENCES Estados(idEstado)
);

#Ventas
create table Ventas
(
idVenta int auto_increment,
fechaVenta datetime default now(),
idCliente int ,
isv decimal(10,2),
descuento decimal(10,2),
subTotal decimal(10,2),
primary key(idVenta),
FOREIGN KEY(idCliente) REFERENCES Clientes(idCliente)
);

#detalle Ventas
create table DetalleVentas
(
idVenta int ,
idProducto int  not null,
cantidad int not null,
precio decimal(10,2)not null,
primary key(idVenta,idProducto),
FOREIGN KEY(idProducto) REFERENCES Productos(idProducto),
FOREIGN KEY(idVenta) REFERENCES Ventas(idVenta)
);


create table Usuarios
(
idUsuario int auto_increment,
nombreUsuario varchar(50),
contrasenia varchar(50),
idCargo int,
correoElectronico varchar(100),
idEmpleado int,
idCliente int ,
isEmpleado boolean,
primary key(idUsuario),
FOREIGN KEY(idCliente) REFERENCES Clientes(idCliente),
FOREIGN KEY(idCargo) REFERENCES Cargos(idCargo),
FOREIGN KEY(idEmpleado) REFERENCES Empleados(idEmpleado)
);