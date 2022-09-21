<?php

//Estructura Try and catch
// try se utiliza para probar el código que puede generar una excepción
// catch se utiliza para capturar la excepción y manejarla
//Metdo query
try{
    $conexion = new PDO('mysql:host=localhost;dbname=heidisqlcurso', 'root', '');
    // En la variable $conexion se guarda la conexión a la base de datos
    // PDO es una clase que se encarga de la conexión a la base de datos
    // new PDO es un método que se encarga de crear la conexión a la base de datos
    // 'mysql:host=localhost;dbname=heidisqlcurso' es el DSN (Data Source Name)
    // En el primer parametro se especifica el tipo de base de dato y la direccion del servidor de la base de datos
    // En el segundo parametro se especifica el nombre de la base de datos
    // En el tercer parametro se especifica el nombre de usuario de la base de datos
    // En el cuarto parametro se especifica la contraseña de la base de datos
    // 'root' es el usuario de la base de datos
    // '' es la contraseña de la base de datos
  $resultado = $conexion->query('SELECT * FROM usuarios');
    // En la variable $resultado se guarda el resultado de la consulta
    // $conexion->query('SELECT * FROM usuarios') es un método que se encarga de ejecutar la consulta
    // 'SELECT * FROM usuarios' es la consulta que se ejecuta
    foreach ($resultado as $fila){
        echo $fila['nombre'] . ' - ' . $fila['email'] . '<br>';
    }

    $resultados= $conexion->query('INSERT INTO usuarios VALUES (null, "Guatemala", "Joseito", "joseito@gmail.com")');
}catch(PDOException $e){
    // En caso de que la conexión falle, se ejecuta el código que se encuentra en el bloque catch
    // En el bloque catch se recibe un parametro que es la excepción que se generó
    // En este caso la excepción es PDOException
    // $e es el nombre de la variable que recibe la excepción
    echo "Error: " . $e->getMessage();
    // En caso de que la conexión falle, se muestra un mensaje de error
    // $e->getMessage() es un método que se encarga de obtener el mensaje de error

}




?>