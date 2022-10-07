<?php 

error_reporting(0); // Linea escrita para que no se muestren errores en el navegador

header('Content-Type: application/json; charset=utf-8'); // Linea escrita para que el navegador sepa que el archivo es un JSON y no un HTML

function limpiarDatos($datos){
    $datos=trim($datos); // Elimina espacios en blanco al principio y al final
    $datos=stripslashes($datos); // Elimina las barras invertidas
    $datos=htmlspecialchars($datos); // Convierte caracteres especiales en entidades HTML
    return $datos;
}

$nombre=limpiarDatos($_POST['nombre']);
$edad=limpiarDatos($_POST['edad']);
$pais=limpiarDatos($_POST['pais']);
$email=limpiarDatos($_POST['email']);

function validarDatos($nombre, $edad, $pais, $email){
    if(empty($nombre) || empty($edad) || !is_numeric($edad) || empty($pais) || empty($email)){
        return false;
    } else {
        return true;
    }
}
 var_dump(validarDatos($nombre, $edad, $pais, $email));
if(validarDatos($nombre, $edad, $pais, $email)){

    $conexion= new mysqli("localhost","root","","curso_php_json");
    $conexion->set_charset("utf8");

    if($conexion->connect_errno){
        $respuesta=array(
            'error'=>true
        );
    } else {
        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, email) VALUES (?,?,?,?)");
        $statement->bind_param("siss", $nombre, $edad, $pais, $email);
        $statement->execute();

        if($coonexion->affected_rows<= 0){
            $respuesta=array(
                'error'=>true,
                'respuesta'=>'No se pudo añadir el Usuario'
            );
        } 
        $respuesta=[];
    } 
} else{
    $respuesta= ['error'=> true];
}

echo json_encode($respuesta);
?>