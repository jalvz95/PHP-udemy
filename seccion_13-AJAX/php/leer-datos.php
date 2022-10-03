<?php

error_reporting(0); // Linea escrita para que no se muestren errores en el navegador

$conexion= new mysqli("localhost","root","","curso_php_json");

if($conexion->connect_errno){
    $respuesta=array(
        'error'=>true
    );
} else {
    $conexion ->set_charset("utf8");
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();
    $resultados= $statement->get_result();

    // echo json_encode($resultados->fetch_all(MYSQLI_ASSOC)); // MYSQLI_ASSOC para que no se repitan los datos // fetch_all para que me devuelva todos los datos

    $respuesta=[];
    while($fila=$resultados->fetch_assoc()){
        $usuario =[ // creamos un array con los datos que queremos
            'id'        =>$fila['ID'],
            'nombre'    =>$fila['nombre'],
            'edad'      =>$fila['edad'],
            'pais'      =>$fila['pais'],
            'email'     =>$fila['email']
        ];
        array_push($respuesta,$usuario); // añadimos el array usuario a la respuesta // primer parametro es el array y el segundo es el elemento que queremos añadir

    }
}

echo json_encode($respuesta);

?>