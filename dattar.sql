drop procedure if exists dattar;
delimiter $$
CREATE PROCEDURE dattar (in idtext NUMERIC(12)) 
	BEGIN
				select idTarifa, DesTarifa, costo, t.clase
				from tarifa, tipoVehiculo t
				where idTarifa = idtext
				and idTipo = t.ipTipo;
END $$
delimiter ;