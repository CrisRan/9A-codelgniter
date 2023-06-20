CREATE TABLE categorias(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    fecha DATETIME,
    activo TINYINT(1)
);

CREATE TABLE muebles(
	id_mueble INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_categoria INT(11),
    modelo VARCHAR(100),
    no_piezas INT(11),
    color VARCHAR(100),
    precion DECIMAL(5,2),
    activo TINYINT(1),
    fecha DATETIME
);

INSERT INTO categorias(id, nombre, fecha, activo) VALUES (null,'Salas',now(),'1');
INSERT INTO categorias(id, nombre, fecha, activo) VALUES 
(null,'Dormitorios',now(),'1'),
(null,'Comedores',now(),'1');
