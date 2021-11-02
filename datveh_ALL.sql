DELIMITER $$
CREATE PROCEDURE datvehALL()
select idVehiculo, marca, placa, t.clase , p.nombre, p.apellido, p.documento
				from vehiculo v, persona p, tipoVehiculo t
				where v.idPersona = p.idPersona
				and idTipo = t.ipTipo
                order by idVehiculo$$
DELIMITER ;