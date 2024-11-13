CREATE TABLE usuarios(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(100) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
);

CREATE TABLE categorias(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
);
-- tabla con clave ajenas y restricciones

CREATE TABLE entradas(
    id int(255) auto_increment not null,
    usuario_id int(255),
    categoria_id int(255),
    titulo  varchar(255),
    descripcion MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

--EJERCICIOS DE SUBCONSULTAS

--ejercicio9
select nombre from usuarios where id IN (select usuario_id from entradas where titulo LIKE '%GTA%');

--ejercicio10
SELECT * from entradas WHERE categoria_id = (select id from categorias where nombre = 'Acción');

--ejercicio11
SELECT nombre FROM categorias WHERE (SELECT count(*) from entradas WHERE entradas.categoria_id = categorias.id) >=3;

--ejercicio13
SELECT nombre FROM usuarios where id = (select usuario_id from entradas where DAYOFWEEK(fecha) = 3);

--ejerecicio14
select