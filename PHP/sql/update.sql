--Modificar filas - Actualizar datos
UPDATE usuarios SET fecha = CURDATE()
WHERE id=4;

--Eliminar filas - Eliminar datos
DELETE * FROM usuarios
WHERE id = 4;