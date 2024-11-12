/* SUBCONSULTAS */
#USAMOS LA BASE DE DATOS BLOG.

SELECT titulo,
(SELECT nombre FROM usuarios WHERE id =
entradas.usuario_id) AS nombre_usuario
FROM entradas;