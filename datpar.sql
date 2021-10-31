drop procedure if exists datpar;
delimiter $$
CREATE PROCEDURE datpar () 
	BEGIN
				select idParqueadero, nombre, ubicacion
				from parqueadero;
END $$
delimiter ;