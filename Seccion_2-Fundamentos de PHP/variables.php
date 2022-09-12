<?php

//Notas:
# Los nombres de las variables son sensibles a mayúsculas y minúsculas
# Los nombres de las variables deben comenzar con una letra o un guión bajo
# Los nombres de las variables no pueden comenzar con un número
# Los nombres de las variables solo pueden contener caracteres alfanuméricos y guiones bajos (A-z, 0-9 y _)
# Los nombres de las variables no pueden contener espacios
# Los nombres de las variables no pueden ser palabras reservadas (ejemplo: $this)

#Tipos de datos:
#String : Cadena de texto
#Integer : Número entero
#Float : Número decimal
#Boolean : Verdadero o falso
#Array : Arreglo
#Object : Objeto
#NULL : Variable sin valor
#Resource : Recurso


$nombre = "Jhoset"; # String (cadena de texto)
$numero = 10; # Integer (número entero)
$numero_decimal = 10.5; # Float (número decimal)
$verdadero= true; # Boolean (verdadero o falso)

#Array (arreglo)
$colores = array("rojo", "verde", "azul");

#Objeto (objeto)
$verduras = (object)["verdura1"=>"lechuga", "verdura2"=>"cebolla"];

#Class (clase)
class Coche{
    public $color;
    public $marca;
    public $modelo;

    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
}

#Null (nulo)
$fruta = null; # or $fruta;

echo "Hola $nombre"; # Hola Jhoset con doble "" se puede colocar la variable dentro de la cadena de texto
echo 'Hola' . $nombre; # Hola Jhoset con simple '' no se puede colocar la variable dentro de la cadena de texto
gettype($nombre); # se usa para saber el tipo de dato de la variable
?>