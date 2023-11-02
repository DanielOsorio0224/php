<?php	
//Abrir archivo 
$archivo = fopen("fichero_texto.txt", "a+");

//Leer archivo
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";    
}

//Escribir archivo
fwrite($archivo,"Soy un texto agregado");

//Cerrar archivo
fclose("archivo");

//Copiar
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//Renombrar
rename('fichero_copiado.txt', 'cambiando_nombre.txt');

//Eliminar
unlink('cambiando_nombre.txt') or die('Error al borrar');

if(file_exists("fichero_texto.txt")){
    echo "fichero existe";
}else{
    echo "fichero no existe";
}
?>