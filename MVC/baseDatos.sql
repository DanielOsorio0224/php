CREATE DATABASE notas_master;
CREATE TABLE usuarios(
    id int(100) auto_increment not NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pass VARCHAR(100) NOT NULL,
    fecha date NOT NULL
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)

CREATE TABLE notas(
    id int(100) auto_increment NOT NULL,
    usuario_id VARCHAR(100) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha date NOT NULL,
    CONSTRAINT pk_notas PRIMARY KEY(id)
)