<?php

// Ejemplo #5 - Clases abstractas
// Las clases abstractas son clases que no pueden ser instanciadas, solo pueden ser heredadas.
// Las clases abstractas pueden contener metodos abstractos y metodos normales.
// Los metodos abstractos solo pueden ser definidos en clases abstractas y no pueden tener contenido.
// Las clases que hereden de una clase abstracta deben definir el contenido de los metodos abstractos.

abstract class Persona{
    public function saludo(){
        return "Hola!";
    }
}

// $karla= new Persona; // Esto no funcionara porque la clase Persona es abstracta y no puede ser instanciada.
// echo $karla->saludo();
//Entonces lo que debemos hacer es crear una clase que herede de la clase Persona y definir el contenido del metodo saludo().
class Usuario extends Persona{
    public function saludo(){
        return "Hola, soy un usuario!";
    }
}

$karla= new Usuario; // Esto si funcionara porque la clase Usuario hereda de la clase Persona y puede ser instanciada.
echo $karla->saludo();

?>