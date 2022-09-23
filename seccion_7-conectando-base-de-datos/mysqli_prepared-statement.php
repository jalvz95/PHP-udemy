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
    $statement= $conexion->prepare ("INSERT INTO usuarios (ID, pais, nombre, email) VALUES (?,?,?,?)"); // Los signos de interrogación son marcadores de posición
    // Los marcadores de posición son variables que se van a sustituir por valores reales
    $statement->bind_param('isss', $id, $pais, $nombre, $email); // Se encarga de vincular los marcadores de posición con los valores reales
    // Remplazamos los placeholders ? por los valores reales
        // Una Letra( en este caso S ) por placeholder que tengamos
        // s = string
        // i = integer
        // d = double
    
    $id= NULL; // El ID es autoincrementable
    if(isset($_GET['pais']) && isset($_GET['nombre']) && isset($_GET['email'])){
        $pais= $_GET['pais'];
        $nombre= $_GET['nombre'];
        $email= $_GET['email'];
        }
    
        $statement->execute(); // Ejecuta la consulta a la base de datos

        if($conexion->affected_rows >= 1){ // Verifica si se afectó alguna fila
            echo 'Se insertó el registro correctamente <br>'. $conexion->affected_rows . ' fila afectada'. '<br>'. $conexion->insert_id . ' ID del registro insertado'; // Muestra el número de filas afectadas
        }else{
            echo 'No se insertó el registro';
        }  
    }

// En resumen, el método prepared statements es una forma de evitar inyección de código en las consultas a la base de datos
// Creamos un statement en la cual estamos preparando nuestra consulta a la base de datos
// Le estamos diciendo a la base de datos que vamos a insertar un registro en la tabla usuarios, que valores? los valores que le vamos a pasar por medio de los marcadores de posición
// Luego con el bind_param vinculamos los marcadores de posición con los valores reales
// Por último ejecutamos la consulta a la base de datos
// Cuando ejecutamos excute se ejecuta la consulta a la base de datos y se sustituyen los marcadores de posición por los valores reales
?>