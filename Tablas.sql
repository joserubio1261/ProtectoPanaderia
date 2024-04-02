/* Crear tabla 'roles' */
CREATE TABLE IF NOT EXISTS roles (
    id_roles INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL -- Nombre del rol
);
/*Insertar roles*/
INSERT INTO roles (nombre) VALUES 
('Admin'),
('Empleado Jefe'),
('Empleado'),
('Cliente');

/*Tabla Usuario*/
CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nom_completo VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    id_rol INT NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES roles(id_roles)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

/*Tabla Contactanos*/
CREATE TABLE IF NOT EXISTS mensajes_contacto (
    id_mensaje INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  
/*
--CREATE TABLE IF NOT EXISTS `usuarios` (
--  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
--  `Nombre` varchar(70) NOT NULL,
--  `Correo` varchar(30) NOT NULL,
--  `usuario` varchar(20) NOT NULL,
--  `password` varchar(60) NOT NULL,
--  PRIMARY KEY (`idusuarios`)
--) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

*/