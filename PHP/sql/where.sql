--Consulta con una condicion
SELECT * FROM usuarios
WHERE email = 'admin@admin.com';
--Mostrar usuarios que se registraron en 2019
SELECT nombre, apellidos FROM usuarios
WHERE YEAR(fecha) = 2019;
--Mostrar usuarios que NO se registraron en 2019
SELECT nombre, apellidos FROM usuarios
WHERE YEAR(fecha) != 2019
OR ISNULL(fecha);

--MOstrar el email de los usuarios cuyo apellido contenga letra A y que su contraseña sea 1234
SELECT email FROM usuarios
WHERE apellidos LIKE '%a%' 
AND pass = '1234';

--Mostrar todos los registros cuyo año sea PAR
SELECT * FROM usuarios
WHERE (YEAR(fecha) % 2 = 0);

--Mostrar los registros cuyo nombre tenga más de 5 letras y se hayan registrado antes de 2020
--Mostrar todo resultado en mayusculas
SELECT UPPER(nombre), apellidos FROM usuarios
WHERE LENGTH(nombre) > 5
AND YEAR(fecha) < 2020;

--Organizar datos acendentemente
SELECT * FROM usuarios
ORDER BY id ASC;
--Organizar datos descendentemente
SELECT * FROM usuarios
ORDER BY id DESC;
--LImitar cantidad de resultados
SELECT * FROM usuarios LIMIT 2;