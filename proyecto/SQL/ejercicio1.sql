CREATE DATABASE escuela;

CREATE TABLE alumnos(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre text,
    edad int(3)
);

INSERT INTO alumnos (nombre,edad)
VALUES ('juan Pérez',20),
('ana gómez',22),
('carlos torres',30);

-- actualizar datos;
UPDATE alumnos SET edad = '23' WHERE nombre = 'ana gómez';

-- seleccionar un campo en especifico
SELECT nombre FROM alumnos;

-- eliminar una fila mientras se cumpla la condicion:
DELETE FROM alumnos WHERE nombre = 'carlos torres';
