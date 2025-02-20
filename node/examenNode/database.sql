CREATE TABLE tipo_clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL UNIQUE
);

-- 2️⃣ Crear la tabla de clientes con la referencia directa a tipo_clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL UNIQUE, -- Email del usuario
    telefono VARCHAR(20) NOT NULL,
    tipo_cliente_id INT  NOT NULL, -- Relación con tipo_clientes
    FOREIGN KEY (tipo_cliente_id) REFERENCES tipo_clientes(id) ON DELETE CASCADE
);

-- 3️⃣ Crear la tabla de comentarios
CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT  NOT NULL,
    comentario TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

-- Insertar tipos de clientes
INSERT INTO tipo_clientes (tipo) 
VALUES 
('Regular'),
('Premium'),
('VIP'),
('Nuevo');

-- Insertar clientes con un tipo de cliente asignado
INSERT INTO clientes (nombre, direccion, telefono, tipo_cliente_id) 
VALUES 
('Juan Pérez', 'juan@example.com', '123456789', 1),
('Ana Gómez', 'ana@example.com', '987654321', 2),
('Carlos López', 'carlos@example.com', '456123789', 3),
('Manuela Lodoya', 'manuela@example.com', '56123789', 4);

-- Insertar comentarios para los clientes
INSERT INTO comentarios (cliente_id, comentario) 
VALUES 
(1, 'Este es un comentario de Juan Pérez.'),
(2, 'Comentario de Ana sobre el servicio.'),
(3, 'Carlos dejó este comentario.'),
(4, 'Comentario de Manuela. Todo ok');