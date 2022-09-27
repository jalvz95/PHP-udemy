<?php

// Ejemplo #1 - Asi es como lo hariamos sin POO(Programacion Orientada a Objetos)
// $nombre = "Juan";
// $edad = 20;
// $ciudad = "Bogotá";
// 
// $nombre2 = "Pedro";
// $edad2 = 30;
// $ciudad2 = "Medellín";
// 
// echo $nombre;

// Ejemplo #2 - Asi es como lo hariamos con POO(Programacion Orientada a Objetos)

class Persona { // Definimos la clase Persona con la palabra reservada class y el nombre de la clase que en este caso es Persona
    public $nombre;
    public $edad; // Definimos las propiedades de la clase (En este caso pasan de ser variables a propiedades)
    public $ciudad; // Public es un modificador de acceso que indica que la propiedad es publica y puede ser accedida desde cualquier parte del codigo.

    public function mostrarInformacion() { 
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad;
    }
}
    // Instanciamos la clase Persona 
$jhoset= new Persona;
$jhoset->nombre = "Jhoset Gabriel";
$jhoset->edad = 27;
$jhoset->ciudad = "Bogotá";
$jhoset->mostrarInformacion();

$karla = new Persona;
$karla->nombre = "Karla";
$karla->edad = 25;
$karla->ciudad = "Medellín";

?>