<?php

#While
#Es una estructura de control que nos permite repetir un bloque de codigo mientras una condicion sea verdadera
#Usually used when you don't know how many times the code should run
#Y cuando tenemos una variable que se va a ir modificando en cada iteracion

#Ejemplo 1

$x=0;

while($x<=10) {
    echo $x."<br>";
    $x++;
}
#En este caso la condicion es $x<=10 y la accion es $x++
#La variable $x se va a ir incrementando en 1 hasta que la condicion sea falsa
#Cuando la condicion sea falsa el ciclo se va a detener

#Ejemplo 2

$z=10;

while($z>=0){
    echo $z."<br>";
    $z--;
}
#En este caso la condicion es $z>=0 y la accion es $z--
#La variable $z se va a ir decrementando en 1 hasta que la condicion sea falsa
#Cuando la condicion sea falsa el ciclo se va a detener

?>