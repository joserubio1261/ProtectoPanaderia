/* Crear tabla 'roles' */
CREATE TABLE IF NOT EXISTS roles (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,  
    nombre VARCHAR(50) NOT NULL  
);

/* Insertar roles */
INSERT INTO roles (nombre) VALUES 
('Admin'),  
('Empleado'),  
('Cliente');  

/* Crear tabla 'Usuarios' */
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre_completo VARCHAR(255),
    nombre_usuario VARCHAR(255),
    contrasena VARCHAR(255),
    correo VARCHAR(255),
    telefono int(9),
    imagen VARCHAR(255),
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
);

/* Tabla Mensajes Clientes Provisional para reseñas*/
CREATE TABLE IF NOT EXISTS mensajes_usuarios (
    id_mensaje INT PRIMARY KEY AUTO_INCREMENT,  
    id_usuario  int,
    nombre VARCHAR(100) NOT NULL,  
    correo VARCHAR(100) NOT NULL,  
    mensaje TEXT NOT NULL,  
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)  
);

/* Tabla Productos */
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,  
    nombre VARCHAR(100) NOT NULL, 
    tipo ENUM('dulce', 'salado'),
    descripcion TEXT, 
    precio DECIMAL(10, 2) NOT NULL,
    cantidad_en_stock INT NOT NULL   
);

/* Tabla Pedidos*/
 CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    fecha_pedido DATE,
    estado VARCHAR(50),
    forma_pago ENUM('efectivo', 'tarjeta'),
    total_pago DECIMAL(10, 2),
    fecha_recogia DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

/*Detalle de pedidos*/
CREATE TABLE detalles_Pedido (
    id_detalle INT PRIMARY KEY AUTO_INCREMENT,
    id_pedido INT,
    id_producto INT,
    cantidad INT,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);
