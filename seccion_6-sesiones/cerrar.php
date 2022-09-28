<?php

// Para iniciar sesion, se debe llamar a la funcion session_start() antes de cualquier salida de HTML.
session_start();
// Para cerrar sesion, se debe llamar a la funcion session_destroy().
session_destroy();
// Una vez cerrada la sesion, si el usuario intenta acceder a la pagina2.php, se le redirigira a la pagina de login.

?>