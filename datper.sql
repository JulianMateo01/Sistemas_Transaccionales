drop procedure if exists datper;
delimiter $$
CREATE PROCEDURE datper (in docext varchar(12)) 
	BEGIN
				select idPersona, nombre, apellido, documento, tipoDoc, direccion, telefono
				from persona
				where documento = docext;
END $$
delimiter ;