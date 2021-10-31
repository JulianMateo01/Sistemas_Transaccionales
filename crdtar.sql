drop procedure if exists crdtar;
delimiter $$
CREATE PROCEDURE crdtar 
(		
		IN keyext NUMERIC(12),	-- id 
		IN desext VARCHAR(50),  -- des Tarifa
		IN cosext NUMERIC(12),	-- costo
		IN idtext NUMERIC(01),	-- Tipo de vehículo
		IN flgext VARCHAR(01)
) 
	BEGIN 
		DECLARE keyint NUMERIC(12); 
        DECLARE respuesta varchar(100);
			
			/*Crear registro*/
			IF flgext = 'C' 
			THEN 
				IF (SELECT COUNT(*) FROM tipovehiculo WHERE idTipo = idtext) = 0
					THEN
						SET respuesta ='El tipo de vehículo no existe';
					ELSE IF (SELECT COUNT(*) FROM tarifa WHERE idTarifa = keyext) > 0
						THEN
							SET respuesta ='La tarifa ya existe';
					ELSE IF (SELECT COUNT(*) FROM tarifa WHERE DesTarifa = desext) > 0
						THEN
							SET respuesta ='La descripción de la tarifa ya existe';
					ELSE 
							SELECT	ifnull(MAX(idTarifa),0) + 1
                            into keyint
							FROM	tarifa;
                            
						INSERT INTO tarifa VALUES(
									keyint,
									desext,
									cosext,
									idtext
								);
						 SET respuesta = 'Registro exitoso';

					END IF;
				END IF;
			END IF;
        END IF;
		/*Actualizar registro*/
        IF flgext = 'U' 
			THEN 
				IF (SELECT COUNT(*) FROM tarifa WHERE idTarifa = keyext) = 0
					THEN
						SET respuesta ='La tarifa no existe';
					ELSE
						UPDATE tarifa 
						SET		DesTarifa = desext,
								costo = cosext,
								idTipo = idtext
						where 	idTarifa = keyext;	
						SET respuesta = 'Actualización exitosa';
			END IF;
		END IF;
        select respuesta;
END $$
delimiter ;