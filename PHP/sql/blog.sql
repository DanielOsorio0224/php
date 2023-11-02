CREATE TABLE usuarios(
    id INT(255) auto_increment NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id INT(255) auto_increment NOT NULL,
    nombre VARCHAR(50) ,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id INT(255) auto_increment NOT NULL,
    usuario_id INT(255) NOT NULL,
    categoria_id INT(255) NOT NULL,
    titulo VARCHAR(50) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha DATE NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) ON UPDATE CASCADE,
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
)ENGINE=InnoDb;