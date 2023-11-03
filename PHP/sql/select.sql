--MOstrar todos los registros y campos
SELECT * FROM usuarios;

--Mostrar campos con todos sus registros
SELECT email,nombre,apellidos FROM usuarios;

--Operadores aritmeticos
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;

--Funciones matematicas
SELECT CEIL(7.34) AS 'OPERATION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERATION' FROM usuarios;
SELECT PI() AS 'OPERATION' FROM usuarios;
SELECT RAND() AS 'OPERATION' FROM usuarios;
SELECT ROUND(7.2563466,2) AS 'OPERATION' FROM usuarios;
SELECT SQRT(25) AS 'OPERATION' FROM usuarios;
SELECT TRUNCATE(7.3434,0) AS 'OPERATION' FROM usuarios;