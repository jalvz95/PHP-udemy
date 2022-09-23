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
    // $id= isset($_GET['id']) ? (int)$_GET['id'] : 1; // Se obtiene el id de la url
    //$sql= "SELECT * FROM usuarios WHERE ID= $id"; // Consulta a la base de datos
    // En este caso si lo hacemos de esta manera se puede inyectar codigo y es peligroso
    // Por lo cual usamos metodo query como el siguiente
    $sql= "SELECT * FROM usuarios"; // Consulta a la base de datos
    $resultado= $conexion->query($sql); // Ejecuta la consulta a la base de datos y guarda el resultado en la variable $resultado

    if($resultado->num_rows){// Muestra el número de filas que tiene el resultado de la consulta
        // echo '<pre>';
        // var_dump($resultado->fetch_assoc()); // Obtiene el primer registro de la consulta
        // var_dump($resultado->fetch_assoc()); // Obtiene el segundo registro de la consulta
        // echo '</pre>';
        // //si queremos acceder a un registro en especifico
        // echo $resultado->fetch_assoc()['nombre']; // Obtiene el primer registro de la consulta y muestra el nombre del usuario

        while($fila= $resultado-> fetch_assoc()){
            echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br>';
        }
    }else{
    echo 'No hay usuarios registrados';
    }
}

?>