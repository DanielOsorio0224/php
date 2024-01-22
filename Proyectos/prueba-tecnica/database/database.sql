CREATE DATABASE prueba_tecnica;
USE prueba_tecnica;

CREATE TABLE factura(
    id              INT(255) auto_increment NOT NULL,
    precio_total    INT(255) NOT NULL,
    estado          varchar(100) NOT NULL,
    CONSTRAINT pk_factura PRIMARY KEY(id)
);

INSERT INTO factura VALUES(NULL, 250, 'cancelado');
INSERT INTO factura VALUES(NULL, 200, 'No cancelado');

CREATE TABLE detalle_factura(
    id                  INT(255) auto_increment NOT NULL,
    factura_id          INT(255)  NOT NULL,
    cantidad_producto   INT(50) NOT NULL,
    precio_individual   INT(50) NOT NULL,
    fecha_compra        date NOT NULL,
    CONSTRAINT pk_detalle PRIMARY KEY(id),
    CONSTRAINT fk_detalle_factura FOREIGN KEY(factura_id) REFERENCES factura(id)
);