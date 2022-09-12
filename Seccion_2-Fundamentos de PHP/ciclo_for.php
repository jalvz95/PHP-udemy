<?php

#Ciclos
#Ciclo for
#Usado para iterar un numero determinado de veces .(Iterar es repetir una accion un numero determinado de veces)
#Ejemplo 1
for($i=0; $i<=10; $i++) {
    echo "Hola mundo <br>";
}
#El ciclo for tiene 3 partes: la primera es la variable que se va a usar para iterar
#La segunda es la condicion que se va a evaluar para saber si se va a seguir iterando o no
#Y la tercera es la accion que se va a realizar para iterar.
#En este caso la variable es $i, la condicion es $i<=10 y la accion es $i++
#La variable $i se va a ir incrementando en 1 hasta que la condicion sea falsa
#Cuando la condicion sea falsa el ciclo se va a detener

#Ejemplo 2
for($i=10; $i >=0; $i--) {
    echo $i."<br>";
}
#En Este caso la variable es $i, la condicion es $i>=0 y la accion es $i--
#La variable $i se va a ir decrementando en 1 hasta que la condicion sea falsa
#Cuando la condicion sea falsa el ciclo se va a detener

#Ejemplo 3
for($i=0; $i<=10; $i+=2) { #En este caso la variable $i se va a ir incrementando en 2 // $i = $i + 2
    echo $i."<br>";
}



?>