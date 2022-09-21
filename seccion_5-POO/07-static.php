<?php


// Ejemplo #6 - Static
// Las propiedades y metodos estaticos pueden ser accedidos sin necesidad de instanciar la clase.
// Las propiedades y metodos estaticos pueden ser accedidos directamente desde la clase.

class Persona{
    public static $dia = "Viernes";

 //  function __construct($dia){
 //       $this->dia = $dia;        //Esto no es usado en funciones estaticas.
 //   }
    
    public static function saludo($nombre=null){
        if($nombre){
             //return 'Hola, feliz dia'.$this->dia; // Esto no funcionara porque la propiedad dia es estatica y no puede ser accedida desde un metodo no estatico.
        return 'Hola, Feliz '.self::$dia.' '.$nombre; // Esto si funcionara porque la propiedad dia es estatica y puede ser accedida desde un metodo estatico.
        } else{
            return 'Hola, feliz '.self::$dia;
        }
       
    }
}

//$karla = new Persona('lunes');
//echo $karla->saludo(); // Esto no funcionara porque el metodo saludo es estatico y no puede ser accedido desde un objeto.
echo Persona::saludo(''); // Esto si funcionara porque el metodo saludo es estatico y puede ser accedido desde la clase.





?>