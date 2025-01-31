-- ACTUALIZAR DATOS EXISTENTES
UPDATE usuarios SET apellidos = 'parrals' WHERE nombre = 'mapach';

-- BORRAR UNA FILA DE LA TABLA
-- Esto elimina una fila de la tabla usuarios mientras el nombre sea 'mapach'
DELETE FROM usuarios WHERE nombre = 'mapach';

-- INNER JOIN
/* Mostrara solo los nombres de los usuarios y los nombres de las categorias si el id de la 
tabla usuarios coincide con el id de la tabla categorias */
/* EJEMPLO: para obtener el nombre y el producto que compro una persona.  */

SELECT u.nombre, p.producto
FROM usuarios AS u
INNER JOIN pedidos AS pedidos ON u.id = p.usuario_id;

-- Eliminar una tabla de mi base de datos
DROP TABLE usuarios;

/* ¡¡IMPOTANTE!!: cuando yo quiera ingresar a un usuario que acaba de comprar un coche entonces 
tengo que hacer una consulta sobre el id de ese usuario recogerlo en una variable y 
ingresarlo en la tabla de compras en el campo de usuario_id */