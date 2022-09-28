<?php

// Ejemplo #5 - Herencia   
// La herencia es un mecanismo que permite que una clase herede las propiedades y metodos de otra clase.
// Por ejemplo en la clase Persona, si quisieramos agregarle una propiedad llamada carrera tendriamos que crear otra clase ya que no todas las personas tienen una carrera
// Pero si creamos una clase estudiante que herede de la clase persona, podriamos agregarle la propiedad carrera a la clase estudiante y no a la clase persona. 
// La clase estudiante hereda las propiedades y metodos de la clase persona y ademas puede tener sus propias propiedades y metodos.
class Persona {
    public $nombre;
    public $edad;
    public $ciudad;
    //public $carrera

    function __construct($nombre, $edad, $ciudad,/*$carrera*/) { // El metodo constructor se define con el nombre __construct
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }       // El metodo constructor se ejecuta automaticamente cuando se instancia un objeto de una clase.

    public function mostrarInformacion() {
       return $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad .'<br/>';
    }
}

//Ahora crearemos una clase que herede las propiedades y metodos de la clase persona
class Estudiante extends Persona{
    function __construct($nombre, $edad, $ciudad, $carrera) {
        parent::__construct($nombre, $edad, $ciudad); // parent es una referencia a la clase padre
// parent::__construct llama al metodo constructor de la clase padre y le pasa los parametros que recibe el metodo constructor de la clase estudiante
// Es decir es como si copiaramos y pegaramos el codigo del metodo constructor de la clase padre en el metodo constructor de la clase estudiante
        // $this->nombre = $nombre;
        // $this->edad = $edad;
        // $this->ciudad = $ciudad;
        $this->carrera = $carrera;
    }
    public function mostrarInformacion(){
        return parent::mostrarInformacion() . ' y estudia ' . $this->carrera . '<br/>'; // parent::mostrarInformacion() llama al metodo mostrarInformacion de la clase padre
    }

}

class Trabajador extends Persona{
    function __construct($nombre, $edad, $ciudad, $profesion) {
        parent::__construct($nombre, $edad, $ciudad); // parent es una referencia a la clase padre
        $this->profesion = $profesion;
    }
    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ' y trabaja como ' . $this->profesion . '<br/>'; // parent::mostrarInformacion() llama al metodo mostrarInformacion de la clase padre
     }
}


$jhoset = new Estudiante('Jhoset', 30, 'Bogotá', 'Desarrollo Web');
 echo $jhoset->mostrarInformacion();

// En este caso se creo la clase estudiante pero no esta heredando las propiedades y metodos de la clase persona.
// Class Estudiante{
//     public $nombre;
//     public $edad;
//     public $ciudad;
//     public $carrera;
// 
//     function __construct($nombre, $edad, $ciudad, $carrera) {
//         $this->nombre = $nombre;
//         $this->edad = $edad;
//         $this->ciudad = $ciudad;
//         $this->carrera = $carrera;
//     } 
// 
//     public function mostrarInformacion() {
//        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y vive en ' . $this->ciudad .'<br/>';
//     }
// }
?>



