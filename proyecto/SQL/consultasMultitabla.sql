#consultas multitabla

#mostrar las entradas con el nombre del autor y el nombre de la categoria.

SELECT e.titulo,u.nombre AS 'Autor', c.nombre AS 'categoria'
    FROM entradas AS e, usuarios AS u,categorias AS c
    WHERE e.usuario_id = u.id AND e.categoria_id = c.id

#Mostrar el nombre de las categorias y al lado cuántas entradas tiene
--los "AS" que van despues despues del FROM son para poder usar esos alias despues del SELECT.
/*  la coma despues de categorias es por que estamos haciendo consultas a otra tabla, 
por eso le ponemos una coma indicando la otra tabla que tambien estamos consultando en la 
misma consulta en la que estamos actualmente */
SELECT c.nombre, COUNT(entradas.id) FROM categoria AS c, entradas
    WHERE entradas.categoria_id = c.id GROUP BY entradas.categoria_id;

#Mostrar el email de los usuarios y al lado cuantas entradas tiene

SELECT usuarios.email, COUNT(entradas.titulo) FROM usuarios,entradas
    WHERE entradas.usuario_id = usuarios.id GROUP BY entradas.usuario_id;

#INNER JOIN
#mostrar las entradas con el nombre del autor y el nombre de la categoria.
--el ON del inner es como si fuese el WHERE;
-- el INNER JOIN se usa solo cuando hay foreing key entre otras tablas;
SELECT e.id, e.titulo,u.nombre AS 'Autor', c.nombre AS 'Categorias' 
    FROM entradas AS e
    INNER JOIN usuario AS u ON e.usuario_id = u.id
    INNER JOIN categorias AS c ON e.categoria_id = c.id;

#Mostrar el nombre de las categorias y al lado cuántas entradas tiene
--Por lo general la otra tabla que usas y que no la pones en el FROM es la que se usa en el JOIN
SELECT c.nombre,COUNT(e.id) AS 'Total entradas FROM categorias AS c
    INNER JOIN entradas AS e ON e.categoria_id = c.id
    GROUP BY e.categoria_id;

# LEFT JOIN

#Mostrar el nombre de las categorías y cuántas entradas tiene

SELECT c.nombre , COUNT(e.id) FROM categorias AS c
LEFT JOIN entradas AS e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

#MÚLTIPLES INNER JOIN
--Mostrar el título de las entradas, el nombre del autor y el nombre

SELECT
entradas.titulo AS Título,
usuarios.nombre AS Autor,
categorias.nombre AS Categoría
FROM
entradas
INNER JOIN usuarios ON entradas.usuario_id = usuarios.id
INNER JOIN categorias ON entradas.categoria_id = categorias.id;