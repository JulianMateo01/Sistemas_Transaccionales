CREATE PROCEDURE datbah () 
	BEGIN
				select b. idParqueadero, p.nombre, p.ubicacion, idBahia, 
				case when disponible = 0 then 'Disponible' else 'Ocupado' end AS Disponibilidad
				from bahia b, parqueadero p
				where b.idParqueadero = p.idParqueadero;
END $$
delimiter ;