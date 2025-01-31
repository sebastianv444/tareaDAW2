CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE tipos_coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    descripcion TEXT
) ENGINE=InnoDB;

CREATE TABLE coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    tipo_id INT NOT NULL,
    imagen_url VARCHAR(255),
    precio DECIMAL(10, 2),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tipo_id) REFERENCES tipos_coches(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    coche_id INT NOT NULL,
    fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (coche_id) REFERENCES coches(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Insertar tipos de coches
INSERT INTO tipos_coches (nombre, descripcion) VALUES
('Mecánico', 'Coches con transmisión manual.'),
('Automático', 'Coches con transmisión automática.'),
('Manual', 'Coches con transmisión manual.'),
('Electrico', 'Coches con transmisión automática.');

INSERT INTO coches (nombre, descripcion, tipo_id, imagen_url, precio) VALUES
('Ford Mustang', 'Un clásico americano con transmisión manual.', 1, 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80', 35000.00),
('Tesla Model S', 'Coche eléctrico de alta gama.', 2, 'https://example.com/tesla.jpg', 80000.00);