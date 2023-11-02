-- Crear tablas
CREATE TABLE usuarios(
    id int(11) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(20) NOT NULL,
    apellidos VARCHAR(20) default "No tiene padre",
    email VARCHAR(20) NOT NULL,
    pass VARCHAR(20),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)

);

--Eliminar tablas
DROP TABLE usuarios;

--Renombrar una tabla
ALTER TABLE usuarios RENAME TO usuarios_renom;

--Cambiar nombre de una columna
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(20) NULL;

--Modificar columna sin cambiar nombre
ALTER TABLE usuarios_renom MODIFY apellido VARCHAR(50) NOT NULL;

--Añadir columna
ALTER TABLE usuarios_renom ADD website VARCHAR(20) NULL;

--Añadir restriccion a columna
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

--Borrar una columna
ALTER TABLE usuarios_renom DROP website;