
CREATE TABLE proveedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(15),
    direccion VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

/*
Esta tabla relacionará las frutas con los proveedores, ya que un proveedor puede proveer múltiples frutas y una fruta puede ser provista por múltiples proveedores.
*/

CREATE TABLE fruta_proveedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fruta_id INT,
    proveedor_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (fruta_id) REFERENCES frutas(id) ON DELETE CASCADE,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id) ON DELETE CASCADE
);

INSERT INTO proveedores (nombre, email, telefono, direccion, created_at, updated_at) VALUES
('Proveedor A', 'proveedora@example.com', '123456789', 'Calle Falsa 123', NOW(), NOW()),
('Proveedor B', 'proveedorb@example.com', '987654321', 'Avenida Siempre Viva 456', NOW(), NOW()),
('Proveedor C', 'proveedorc@example.com', '555555555', 'Boulevard Los Olivos 789', NOW(), NOW()),
('Proveedor D', 'proveedord@example.com', '111111111', 'Callejón Diagonal 101', NOW(), NOW()),
('Proveedor E', 'proveedore@example.com', '999999999', 'Paseo de la Reforma 202', NOW(), NOW());



INSERT INTO fruta_proveedor (fruta_id, proveedor_id, created_at, updated_at) VALUES
(1, 1, NOW(), NOW()),
(2, 1, NOW(), NOW()),
(3, 1, NOW(), NOW());


INSERT INTO fruta_proveedor (fruta_id, proveedor_id, created_at, updated_at) VALUES
(4, 2, NOW(), NOW()),
(5, 2, NOW(), NOW()),
(6, 2, NOW(), NOW()),
(7, 2, NOW(), NOW());


INSERT INTO fruta_proveedor (fruta_id, proveedor_id, created_at, updated_at) VALUES
(8, 3, NOW(), NOW()),
(9, 3, NOW(), NOW()),
(10, 3, NOW(), NOW());


INSERT INTO fruta_proveedor (fruta_id, proveedor_id, created_at, updated_at) VALUES
(11, 4, NOW(), NOW()),
(12, 4, NOW(), NOW()),
(13, 4, NOW(), NOW()),
(14, 4, NOW(), NOW());


INSERT INTO fruta_proveedor (fruta_id, proveedor_id, created_at, updated_at) VALUES
(15, 5, NOW(), NOW()),
(16, 5, NOW(), NOW()),
(17, 5, NOW(), NOW()),
(18, 5, NOW(), NOW()),
(19, 5, NOW(), NOW());
