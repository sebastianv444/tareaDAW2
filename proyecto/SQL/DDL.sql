#   GROUP BY:
/* todas las columnas seleccionadas con el select, y que no tengan una funcion de agregacion,
tienen que ser llamadas en el group by. */

CREATE TABLE libros (
 id INT AUTO_INCREMENT PRIMARY KEY,
 titulo VARCHAR(100),
 genero VARCHAR(50),
 autor VARCHAR(100),
 idioma VARCHAR(20),
 cantidad INT,
 precio DECIMAL(5, 2)
);

SELECT genero,idioma, COUNT(titulo) as titulo FROM libros 
GROUP BY genero,idioma;

/* HAVING: el having es como un where, pero para los GROUP BY. */
SELECT genero,COUNT(*) AS total_libros 
FROM libros 
GROUP BY genero HAVING COUNT(*) > 2;