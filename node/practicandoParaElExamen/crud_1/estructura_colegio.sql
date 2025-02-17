CREATE DATABASE colegio;
USE colegio;

-- Tabla de Alumnos
CREATE TABLE alumnos (
    id_alumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    email VARCHAR(150) UNIQUE
);

-- Tabla de Profesores
CREATE TABLE profesores (
    id_profesor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE
);

-- Tabla de Asignaturas
CREATE TABLE asignaturas (
    id_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    id_profesor INT,
    FOREIGN KEY (id_profesor) REFERENCES profesores(id_profesor) ON DELETE SET NULL
);

-- Tabla intermedia para la relación muchos a muchos (Alumnos - Asignaturas)
CREATE TABLE alumnos_asignaturas (
    id_alumno INT,
    id_asignatura INT,
    PRIMARY KEY (id_alumno, id_asignatura),
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno) ON DELETE CASCADE,
    FOREIGN KEY (id_asignatura) REFERENCES asignaturas(id_asignatura) ON DELETE CASCADE
);

-- consulta
SELECT a.nombre,CONCAT(al.nombre,' ',al.apellido) AS Alumnos FROM asignaturas AS a
INNER JOIN alumnos_asignaturas AS aa ON a.id_asignatura = aa.id_asignatura
INNER JOIN alumnos AS al ON aa.id_alumno = al.id_alumno;

-- Insertar valores de ejemplo

-- Insertar alumnos
INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email) VALUES
('Juan', 'Pérez', '2005-03-15', 'juan.perez@email.com'),
('María', 'Gómez', '2006-07-20', 'maria.gomez@email.com'),
('Carlos', 'Fernández', '2004-11-10', 'carlos.fernandez@email.com'),
('Lucía', 'Rodríguez', '2005-05-30', 'lucia.rodriguez@email.com');

-- Insertar profesores
INSERT INTO profesores (nombre, apellido, email) VALUES
('Ana', 'Martínez', 'ana.martinez@email.com'),
('Pedro', 'López', 'pedro.lopez@email.com'),
('Sofía', 'García', 'sofia.garcia@email.com');

-- Insertar asignaturas (asociadas con profesores)
INSERT INTO asignaturas (nombre, id_profesor) VALUES
('Matemáticas', 1),  -- Ana Martínez
('Historia', 2),      -- Pedro López
('Física', 3),        -- Sofía García
('Literatura', 2);    -- Pedro López

-- Inscribir alumnos en asignaturas (relación muchos a muchos)
INSERT INTO alumnos_asignaturas (id_alumno, id_asignatura) VALUES
(1, 1),  -- Juan -> Matemáticas
(1, 3),  -- Juan -> Física
(2, 2),  -- María -> Historia
(2, 4),  -- María -> Literatura
(3, 1),  -- Carlos -> Matemáticas
(3, 2),  -- Carlos -> Historia
(4, 3),  -- Lucía -> Física
(4, 4);  -- Lucía -> Literatura
