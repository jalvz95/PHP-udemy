<?php

declare(strict_types=1); # Esta declaracion es para que el tipo de dato sea estricto, es decir, que no se pueda cambiar el tipo de dato de una variable

#Funciones de tipo escalar
function suma(int $a, int $b): int {
    return $a + $b;
}
#En este caso, la funcion suma, recibe dos parametros de tipo entero, y retorna un valor de tipo entero
#Si no se cumple esta condicion, se mostrara un error

echo suma('karlos', 2);
#En este caso, se muestra un error, ya que la funcion suma, recibe dos parametros de tipo entero, y retorna un valor de tipo entero

?>