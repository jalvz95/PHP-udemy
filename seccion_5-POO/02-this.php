<?php

//Ejemplo #3 - Utilizando el operador this

Class Persona {
    public $nombre;
    public $edad;
    public $ciudad;
// this es una referencia a la instancia actual de la clase o el objeto en el que se encuentra.

    public function mostrarInformacion() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad .'<br/>';
    }
}
// Instanciamos la clase Persona

    $jose= new Persona;
    $jose->nombre = "Jose";
    $jose->edad = 20;
    $jose->ciudad = "Bogotá";
    $jose->mostrarInformacion();

    $pedro = new Persona;
    $pedro->nombre = "Pedro";
    $pedro->edad = 30;
    $pedro->ciudad = "Medellín";
    $pedro->mostrarInformacion();

?>