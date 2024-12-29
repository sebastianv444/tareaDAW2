--PREGUNTA 1:

UPDATE vendedores SET comision = 0.02 WHERE sueldo > 2000;

--PREGUNTA 2:

UPDATE coches SET precio = precio * 1.02;

--PREGUNTA 3:

SELECT * FROM vendedores WHERE fecha_alta > '2024-12-18';

--PREGUNTA 4:

UPDATE vendedores SET fecha_alta = '2024-12-22' WHERE id = 2;

--PREGUNTA 5:

SELECT nombre,DATEDIFF(CURDATE(),fecha_alta) AS dias_trabajados FROM vendedores;

--PREGUNTA 6:

SELECT CONCAT(nombre,apellidos) AS NOMBRE_COMPLETO,fecha_alta,DAYNAME(fecha_alta) 
AS dia FROM vendedores;

--PREGUNTA 7:

SELECT nombre,sueldo FROM vendedores WHERE cargo = 'Responsable de tienda';

--PREGUNTA 8:

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'r%';

--PREGUNTA 9:

SELECT * FROM vendedores WHERE grupo_id = 1 ORDER BY sueldo DESC;

--PREGUNTA 10:

SELECT apellidos,fecha_alta,grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;

--PREGUNTA 11:

SELECT cargo,COUNT(*) AS numero_vendedores FROM vendedores GROUP BY cargo 
ORDER BY COUNT(*) DESC;

--PREGUNTA 12:

SELECT SUM(sueldo) AS masa_salarial FROM vendedores;

--PREGUNTA 13:

SELECT g.nombre AS grupo, g.ciudad, AVG(v.sueldo) AS media_sueldo FROM vendedores v
INNER JOIN grupos g ON v.grupo_id = g.id
GROUP BY g.nombre, g.ciudad;

--PREGUNTA 15:

SELECT c.nombre AS nombre_cliente, COUNT(e.id) AS total_pedidos
FROM encargos e
INNER JOIN clientes c ON e.cliente_id = c.id
GROUP BY c.id, c.nombre
ORDER BY total_pedidos DESC;
