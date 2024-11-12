-- crear una base de datos para operar dentro de ella:
CREATE DATABASE escuela;

-- crear una base de datos
CREATE TABLE usuarios (
    id int(11),
    nombre varchar(100),
    apellidos varchar(255),
    email varchar(100),
    password varchar(255)
);

-- sentencia para insertar un valor:
INSERT INTO usuarios (id, nombre, apellidos, email, password)
VALUES
('17', 'asdasda', 'alvarez', 'maria@msn.com', '522345');

-- sentencia para insertar varios valores a la vez:
INSERT INTO usuarios (id, nombre, apellidos, email, password)
VALUES
('17', 'Antonia', 'alvarez', 'antonia@msn.com', '522345'),
('18', 'Mario', 'García', 'mario@yahoo.com', '12234');

-- Cambiar el contenido de un campo de una fila en especifico:

UPDATE usuarios SET apellidos = 'valverde' WHERE nombre = 'antonia';

-- Eliminar una tabla mientras se cumpla una condicion:

DELETE FROM usuarios WHERE nombre = 'Mario';