drop procedure if exists crdpago;
delimiter $$
CREATE PROCEDURE crdpago 
(		
		IN keyext NUMERIC(12),	-- id pago
		IN idbext NUMERIC(12),  -- id bahia
		IN idvext NUMERIC(12),  -- id vehiculo
		IN timext NUMERIC(12),  -- minutos dentro del parqueadero
		IN cosext NUMERIC(12),  -- minutos dentro del parqueadero
		IN fecext date,			-- fecha ingreso/salida
		IN estext NUMERIC(01),  -- estado
		IN flgext VARCHAR(01)
) 
	BEGIN 
		DECLARE keyint NUMERIC(12); 
        DECLARE respuesta varchar(100);
			
		/*Crear registro*/
		IF flgext = 'C' 
		THEN 
			IF (SELECT COUNT(*) FROM pago WHERE idPago = keyext) > 0
					THEN
						SET respuesta ='El comprobante ya existe';
				ELSE IF (keyext = 0 and estext = 1)
					THEN
						SET respuesta ='No se puede ingresar un comprobante en estado cerrado';
				ELSE IF (SELECT COUNT(*) FROM bahia WHERE idbahia = idbext) = 0
					THEN
						SET respuesta ='La Bahía no existe';
					ELSE IF (SELECT COUNT(*) FROM vehiculo WHERE idVehiculo = idvext) = 0
						THEN
							SET respuesta ='El vehículo no existe';
					ELSE 
							SELECT	ifnull(MAX(idPago),0) + 1
							into keyint
							FROM	pago;
							
						INSERT INTO pago VALUES(
									keyint,
									idbext,
									idvext,
									timext,
									cosext,
									fecext,
									estext
								);
							UPDATE bahia
							SET  disponible = 1
							where idBahia = idbext;

						SET respuesta = 'Registro exitoso';
						END IF;					
					END IF;
				END IF;
			END IF;
		END IF;
		/*Actualizar registro*/
        IF flgext = 'U' 
			THEN 
				IF (SELECT COUNT(*) FROM pago WHERE idPago = keyext) = 0
					THEN
						SET respuesta ='El comprobante no existe';
					ELSE
						UPDATE pago 
						SET		tiempo = timext,
								costo  = cosext,
								fecha  = fecext,
								estado = estext
						where 	idPago = keyext;	
							IF (estext = 1)
								THEN
								UPDATE bahia
								SET  disponible = 0
								WHERE idBahia = idbext;
							END IF;
						SET respuesta = 'Actualización exitosa';
			END IF;
		END IF;
        select respuesta;
END $$
delimiter ;