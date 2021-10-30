drop procedure if exists datveh;
delimiter $$
CREATE PROCEDURE datveh (in plaext varchar(6)) 
	BEGIN
				select idVehiculo, marca, placa, t.clase , p.nombre, p.apellido, p.documento
				from vehiculo v, persona p, tipoVehiculo t
				where placa = plaext
				and v.idPersona = p.idPersona
				and idTipo = t.ipTipo;
END $$
delimiter ;