drop procedure if exists crdbah;
delimiter $$
CREATE PROCEDURE crdbah 
(		
		IN keyext NUMERIC(12),	-- id bahia
		IN idpext NUMERIC(12),  -- id parqueadero
		IN disext NUMERIC(01),	-- disponibilidad
		IN flgext VARCHAR(01)
) 
	BEGIN 
		DECLARE keyint NUMERIC(12); 
        DECLARE respuesta varchar(100);
			
		/*Crear registro*/
		IF flgext = 'C' 
		THEN 
			IF (SELECT COUNT(*) FROM bahia WHERE idbahia = keyext) > 0
					THEN
						SET respuesta ='La Bahía ya existe';
				ELSE 
						SELECT	ifnull(MAX(idBahia),0) + 1
						into keyint
						FROM	bahia;
						
					INSERT INTO bahia VALUES(
								keyint,
								idpext,
								disext
							);
					 SET respuesta = 'Registro exitoso';
			END IF;
		END IF;
		/*Actualizar registro*/
        IF flgext = 'U' 
			THEN 
				IF (SELECT COUNT(*) FROM bahia WHERE idBahia = keyext) = 0
					THEN
						SET respuesta ='La Bahia no existe';
					ELSE
						UPDATE bahia 
						SET		disponible = disext
						where 	idBahia = keyext;	
						SET respuesta = 'Actualización exitosa';
			END IF;
		END IF;
        select respuesta;
END $$
delimiter ;