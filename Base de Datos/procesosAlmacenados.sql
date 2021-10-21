CREATE  PROCEDURE `Login`(in usuario varchar(50),in contra varchar(50))
BEGIN

select 
coalesce(c.idCliente,e.idEmpleado) 'id',
coalesce(c.nombreCliente,e.nombreEmpleado)'nombre',
coalesce(c.apellidoCliente,e.apellidoEmpleado)'apellido',
u.nombreUsuario 'user',
u.contrasenia 'contra',
u.correoElectronico 'correo',
ca.descripcionCargo 'cargo',
u.isEmpleado 
from Usuarios u
left join Empleados e on e.idEmpleado = u.idEmpleado
left join Clientes c on c.idCliente = u.idCliente
join Cargos ca on ca.idCargo = u.idCargo
where u.nombreUsuario = usuario and u.contrasenia = contra;


END