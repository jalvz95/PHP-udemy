<?php


// Cadenas de metodos
// Las cadenas de metodos son una forma de concatenar metodos en una sola linea de codigo.

class Usuario{
    public $nombre;
    public $email;
    public $password;
    public $pais;

    function __construct($nombre, $email, $password, $pais){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->pais = $pais;
    }
    
    public function mostrarNombre(){
        echo 'El nombre es: '.$this->nombre.'<br>';
        return $this;
    }

    public function mostrarEmail(){
        echo 'El email es: '.$this->email.'<br>';
        return $this;
    }

    public function mostrarPassword(){
        echo 'El password es: '.$this->password.'<br>';
        return $this;
    }

    public function mostrarPais(){
        echo 'El pais es: '.$this->pais.'<br>';
        return $this;
    }
    
}

$jhoset = new Usuario('Jhoset', 'jhoset@gmail.com', '123456', 'Mexico');
// Entonces para llamar a los metodos de la clase Usuario, se puede hacer de la siguiente manera:
$jhoset->mostrarNombre()->mostrarEmail()->mostrarPassword()->mostrarPais();
// Esto es una cadena de metodos, es decir, se llama a un metodo y luego se llama a otro metodo y asi sucesivamente.














?>