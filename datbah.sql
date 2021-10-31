drop procedure if exists datbah;
delimiter $$
CREATE PROCEDURE datbah () 
	BEGIN
				select b. idParqueadero, p.nombre, p.ubicacion, idBahia, disponible
				from bahia b, parqueadero p
				where b.idParqueadero = p.idParqueadero;
END $$
delimiter ;