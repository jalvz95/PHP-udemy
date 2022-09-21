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

class Persona {
    public $nombre;
    public $edad;
    public $ciudad;

    public function mostrarInformacion() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad;
    }
}

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