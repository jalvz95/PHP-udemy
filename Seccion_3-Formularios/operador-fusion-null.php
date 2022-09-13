<?php

#Operador de fusión de null
$usuario = $_GET['usuario'] ?? 'Invitado'; #Si no existe el indice usuario, se asigna el valor invitado
echo "El usuario es: $usuario <br/>";

#Otro Ejemplo
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo'; #Si no existe el indice nombre, se asigna el valor Anonimo
echo "El nombre es: $nombre <br/>";
#El operador de fusión de null es más corto y más fácil de leer
#Basicamentre es lo mismo que el if ternario
if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}else{
    $nombre = 'Anonimo';
}
echo "El nombre es: $nombre <br/>";




?>