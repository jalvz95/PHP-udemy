<?php

$conexion = new mysqli('localhost', 'root', '', 'heidisqlcurso'); // Conexión a la base de datos
// new mysqli es un método que se encarga de crear la conexión a la base de datos
// 'localhost' es la dirección del servidor de la base de datos
// 'root' es el usuario de la base de datos
// '' es la contraseña de la base de datos
// 'heidisqlcurso' es el nombre de la base de datos

if ($conexion -> connect_errno){// Verifica si la conexión a la base de datos falló
    die('Lo siento hubo un problema con el servidor');
}else{
    $sql= "INSERT INTO usuarios (pais, nombre, email) VALUES ('Mexico', 'Pepe', 'pepe@gmail.com')"; // Inserta un nuevo registro en la tabla usuarios
    $conexion->query($sql); // Ejecuta la consulta a la base de datos y guarda el resultado en la variable $resultado
    if($conexion->affected_rows >= 1){ // Verifica si se afectó alguna fila
        echo 'Se insertó el registro correctamente <br>'. $conexion->affected_rows . ' fila afectada'. '<br>'. $conexion->insert_id . ' ID del registro insertado'; // Muestra el número de filas afectadas
    }
}
?>