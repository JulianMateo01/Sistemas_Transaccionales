drop procedure if exists datpago;
delimiter $$
CREATE PROCEDURE datpago (in keyext NUMERIC(12)) 
	BEGIN
			select g.idPago, b.idParqueadero, q.nombre, q.ubicacion, g.idBahia, g.idVehiculo, marca, placa, t.clase , p.nombre, p.apellido, p.documento, 
			case estado when estado = 0 then 'abierto' else 'cerrado' end as estado
			from pago g, vehiculo v, persona p, tipoVehiculo t, bahia b, parqueadero q
			where idPago = keyext
			and g.idBahia = b.idBahia
			and g.idVehiculo = v.idVehiculo
			and v.idPersona = p.idPersona
			and idTipo = t.ipTipo;
END $$
delimiter ;