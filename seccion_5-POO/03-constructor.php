<?php
// Ejemplo #4 - Utilizando el metodo constructor
// El metodo constructor es un metodo especial que se ejecuta cuando se instancia un objeto de una clase.

Class Persona {
    public $nombre;
    public $edad;
    public $ciudad;

    function __construct($nombre, $edad, $ciudad) { // El metodo constructor se define con el nombre __construct
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }       // El metodo constructor se ejecuta automaticamente cuando se instancia un objeto de una clase.


// this es una referencia a la instancia actual de la clase o el objeto en el que se encuentra.
    public function mostrarInformacion() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad .'<br/>';
    }
}
// Instanciamos la clase Persona

    $jose= new Persona('Jose Alvarez',50,'Venezuela'); // Aca es donde le damos los valores a las propiedades de la clase 
    // En Parentesis se pasan los valores en el orden que definimos en el metodo constructor
   // $jose->nombre = "Jose";
   // $jose->edad = 20;
   // $jose->ciudad = "Bogotá";
    $jose->mostrarInformacion();

    $pedro = new Persona('Pedro Salazar',30,'Medellín');
    // $pedro->nombre = "Pedro";
    // $pedro->edad = 30;
    // $pedro->ciudad = "Medellín";
    $pedro->mostrarInformacion();



?>