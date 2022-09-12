<?php
#scope
#El scope es el alcance que tiene una variable dentro de un programa
#Las variables tienen 3 tipos de scope:
#1. Local
#2. Global
#3. Static

#Las variables locales solo pueden ser accedidas dentro de la funcion donde fueron declaradas
#Las variables globales pueden ser accedidas desde cualquier parte del programa
#Las variables estaticas pueden ser accedidas desde cualquier parte del programa y su valor se mantiene entre llamadas a la funcion

#Ejemplo 
$numero = 10; #Variable global
#Si quisieramos acceder a la variable global dentro de una funcion, deberiamos pasar la variable como parametro de la funcion. Ejemplo:
function mostrarNum($numero){
    return $numero;
}
echo mostrarNum($numero);

#O podriamos declarar la variable global dentro de la funcion con la palabra reservada global. Ejemplo:
function prueba(){
    global $numero; #Con la palabra reservada global, podemos acceder a la variable global dentro de la funcion
    return $numero;
}
echo prueba();

#En este caso declaramos la variable dentro de la funcion, y esa variable no sera accesible globalmente, solo dentro de la funcion. Ejemplo:
function mostrarNumero(){
    $numero= 5; #Esta seria una variable local
    return $numero;
}
echo mostrarNumero();

?>