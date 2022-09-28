<?php

// Scope de las propiedades y metodos
// Scope es el alcance que tienen las propiedades y metodos de una clase.
// Las propiedades y metodos publicos pueden ser accedidos desde cualquier parte del codigo. (public)
// Las propiedades y metodos privados solo pueden ser accedidos desde la clase en la que fueron definidos. (private)
// Las propiedades y metodos protegidos solo pueden ser accedidos desde la clase en la que fueron definidos y desde las clases que hereden de esta. (protected)


class Usuario {
    public $nombre;
    protected $email; // Solo puede ser accedido desde la clase en la que fue definido y desde las clases que hereden de esta.
    private $password; // Solo puede ser accedido desde la clase en la que fue definido. En este caso la clase Usuario.
    // Si intentamos acceder a la propiedad password desde fuera de la clase Usuario nos dara un error.
    
    function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function mostrarInformacion() {
        return 'Password: ' . $this->password . '<br/>';
    }
        
}

Class Miembro extends Usuario{
    public function mostrarCorreo(){ // Este metodo puede acceder a la propiedad email porque hereda de la clase Usuario
        return 'Correo: ' . $this->email . '<br/>';
    }
}

$jhoset= new Miembro ('Jhoset', 'jhoset@gmail.com', '1234');
echo $jhoset->nombre . '<br/>';
//echo $jhoset->correo; // Esto no funcionara porque la propiedad email es protegida y no puede ser accedida desde fuera de la clase Usuario.
echo $jhoset-> mostrarCorreo(); // Esto si funcionara porque el metodo mostrarCorreo() puede acceder a la propiedad email porque hereda de la clase Usuario.
//echo $jhoset->password; // Esto no funcionara porque la propiedad password es privada y no puede ser accedida desde fuera de la clase Usuario.

$jose= new Usuario ('Jose', 'jose@gmail.com', '1234');
// Mostrar el password de Jose
//echo $jose->password; // Esto no funcionara porque la propiedad password es privada y no puede ser accedida desde fuera de la clase Usuario.
echo $jose->mostrarInformacion(); // Esto si funcionara porque el metodo mostrarInformacion() puede acceder a la propiedad password porque esta dentro de la clase Usuario.
?>