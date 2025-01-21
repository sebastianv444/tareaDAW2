# RESTRICCIONES DE INTEGRIDAD

--Recuerda que los campos autoincrmentables tienen que ser PRIMARY KEY.
CREATE TABLE usuarios2 (
    id int AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(255) DEFAULT 'hola que tal',
    email varchar(100) NOT NULL,
    password varchar(255),
    CONSTRAINT pk_usuarios2 PRIMARY KEY(id)
);

INSERT INTO usuarios2 (nombre,apellidos,email,password)
VALUES ('pepe','donon','sda@sda.es','123'),
('manuela',,'ok@email.ñ','321');

#modificar tablas:
--modificar el nombre de la tabla
ALTER TABLE usuarios2 RENAME TO usuarios2_modificado;

--modificar el campo de una tabla
--al modicarla hay que indicar el nuevo campo de que tipo es, y si tiene restricciones, ponerlas tambien.
# ALTER TABLE <nombre_tabla> CHANGE <campo_antiguo> <campo_nuevo> <tipo_de_campo> y todas sus especificaciones.
ALTER TABLE usuarios2_modificado CHANGE apellidos apellido varchar(100) DEFAULT 'viniBalonDeOro';