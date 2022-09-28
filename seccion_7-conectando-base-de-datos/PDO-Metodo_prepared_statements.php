<?php

$id= $_GET['id'];

//Estructura Try and catch
// try se utiliza para probar el código que puede generar una excepción
// catch se utiliza para capturar la excepción y manejarla
//Metdo prepared statements
try{
    $conexion = new PDO('mysql:host=localhost;dbname=heidisqlcurso', 'root', '');

    $statement = $conexion->prepare('SELECT * FROM usuarios'); // se usa un place holder para evitar inyeccion de codigo y es un valor que es temporal.
    $statement->execute( //Ejecuta la consulta preparada con los valores que se le pasan como parametro en un array .
        array(':id' => $id,
              ':id2' => 4
    ));

    $resultado= $statement->fetchAll(); //Obtiene el primer registro de la consulta preparada
    foreach($resultado as $usuario){
        echo $usuario['nombre'] .'<br>';
    }

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>