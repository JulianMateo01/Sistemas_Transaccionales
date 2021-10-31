drop procedure if exists crdpar;
delimiter $$
CREATE PROCEDURE crdpar 
(		
		IN keyext NUMERIC(12),	-- id 
		IN desext VARCHAR(50),  -- nombre
		IN ubiext VARCHAR(50),	-- ubicación
		IN flgext VARCHAR(01)
) 
	BEGIN 
		DECLARE keyint NUMERIC(12); 
        DECLARE respuesta varchar(100);
			
			/*Crear registro*/
			IF flgext = 'C' 
			THEN 
				IF (SELECT COUNT(*) FROM parqueadero WHERE idParqueadero = keyext) > 0
						THEN
							SET respuesta ='El parqueadero ya existe';
					ELSE IF (SELECT COUNT(*) FROM parqueadero WHERE nombre = desext) > 0
						THEN
							SET respuesta ='La descripción del parqueadero ya existe';
					ELSE 
							SELECT	ifnull(MAX(idParqueadero),0) + 1
                            into keyint
							FROM	parqueadero;
                            
						INSERT INTO parqueadero VALUES(
									keyint,
									desext,
									ubiext
								);
						 SET respuesta = 'Registro exitoso';
				END IF;
			END IF;
        END IF;
		/*Actualizar registro*/
        IF flgext = 'U' 
			THEN 
				IF (SELECT COUNT(*) FROM parqueadero WHERE idParqueadero = keyext) = 0
					THEN
						SET respuesta ='El parqueadero no existe';
					ELSE
						UPDATE parqueadero 
						SET		nombre = desext,
								ubicacion = ubiext
						where 	idParqueadero = keyext;	
						SET respuesta = 'Actualización exitosa';
			END IF;
		END IF;
        select respuesta;
END $$
delimiter ;