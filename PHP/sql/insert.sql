--Insertar nuevos registros
INSERT INTO usuarios VALUES (
    null,'Daniel','Osorio','daniel@daniel.com','1234','2022-02-02'
);

INSERT INTO usuarios VALUES (
    null,'Pepito','Perez','pepito@pepito.com','1234','2022-02-02'
);

--Insertar filas solo con ciertas columnas
INSERT INTO usuarios(email,pass) VALUES(
    'dani@dani.com','5678'
);
--Esto falla por las restricciones del NOT NULL