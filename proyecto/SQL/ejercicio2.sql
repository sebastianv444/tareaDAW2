CREATE TABLE curso(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre_curso varchar(100),
    duracion_horas int
);

INSERT INTO curso(nombre_curso, duracion_horas)
VALUES ('programación',100),
('Base de datos', 80);
--Mostrar el esquema de una tabla(informacion como los tipos de datos):
DESC alumnos;


--eliminar base de datos:
DROP DATABASE escuela;