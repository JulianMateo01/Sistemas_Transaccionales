drop procedure if exists dattip;
delimiter $$
CREATE PROCEDURE dattip () 
	BEGIN
				select idTipo, Clase
				from tipoVehiculo;
END $$
delimiter ;