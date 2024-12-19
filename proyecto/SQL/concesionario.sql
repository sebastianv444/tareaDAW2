CREATE DATABASE concesionario;

CREATE TABLE coches(
    id int(255) auto_increment NOT NULL,
    modelo varchar(255) NOT NULL,
    marca varchar(255) NOT NULL,
    precio int(255) NOT NULL CHECK(precio>0),
    stock int(100) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
);

CREATE TABLE encargos(
    id int(255) auto_increment NOT NULL,
    cliente_id int(255),
    coche_id int(255),
    cantidad int(255) NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
);

CREATE TABLE clientes(
    id int(255) auto_increment NOT NULL,
    vendedor_id int(255),
    nombre varchar(255) NOT NULL,
    ciudad varchar(255) NOT NULL,
    gastado int(255) NOT NULL,
    CONSTRAINT pk_cliente PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
);

CREATE TABLE vendedores(
    id int(255) auto_increment NOT NULL,
    grupo_id int(255),
    nombre varchar(255) NOT NULL,
    apellidos varchar(255) NOT NULL,
    cargo varchar(255) NOT NULL,
    fecha_alta date NOT NULL,
    sueldo int(255) NOT NULL,
    comision int(255) NOT NULL,
    jefe varchar(255) NOT NULL,
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedore_grupos FOREIGN KEY(grupo_id) REFERENCES grupos(id)
);

CREATE TABLE grupos(
    id int(255) auto_increment NOT NULL,
    nombre varchar(255) NOT NULL,
    ciudad varchar(255) NOT NULL,
    CONSTRAINT pk_grupos PRIMARY KEY(id)
);