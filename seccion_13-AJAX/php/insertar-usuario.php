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
$correo=limpiarDatos($_POST['correo']);



function validarDatos($nombre, $edad, $pais, $correo){
    if(empty($nombre) || empty($edad) || empty($pais) || empty($correo) || !is_numeric($edad)){
        return false;
    } else {
        return true;
    }
}

if(validarDatos($nombre, $edad, $pais, $correo)){
    $conexion= new mysqli("localhost","root","","curso_php_json");

    if($conexion->connect_errno){
        $respuesta=array(
            'error'=>true
        );
    } else {
        $conexion ->set_charset("utf8");
        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, email) VALUES (?,?,?,?)");
        $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
        $statement->execute();

        if($coonexion->affected_rows<= 0){
            $respuesta=array(
                'error'=>false,
                'respuesta'=>'Usuario insertado correctamente'
            );

            $respuesta=[];
        } 
        
        
        else {
            $respuesta=array(
                'error'=>true,
                'respuesta'=>'No se ha podido insertar el usuario'
            );
        }
  } 
}

echo json_encode($respuesta);
?>